<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/10/2015
 * Time: 3:00 PM
 */
namespace frontend\controllers;

use common\models\Comment;
use common\models\Like;
use common\models\Post;
use common\models\PostNotification;
use common\models\PostTag;
use common\models\User;
use frontend\models\PostCreateForm;
use frontend\models\PostEditForm;
use Yii;
use yii\data\Pagination;
use yii\helpers\Url;
use yii\web\Controller;

class PostController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionCreate()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        $model = new PostCreateForm();
        $model->user_id = Yii::$app->user->getId();

        if ($model->load(Yii::$app->request->post())) {
            $model->createPost();
            $this->redirect('?r=post/show-all');
        }

        return $this->render('create', [
            'model'=> $model,
        ]);
    }

    public function actionEdit($id)
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        $currentPost = Post::getPostById($id);

        if ($currentPost['user_id'] == Yii::$app->user->getId()) {
            $model = PostEditForm::cacheCurrentPostInfo($currentPost);

            if ($model->load(Yii::$app->request->post())) {
                $model->editPost($currentPost);
                $this->redirect(Url::to(['/post/show-all']));
            }
            return $this->render('edit', [
                'model' => $model,
            ]);
        } else {
            // not post of current user
        }
    }

    public function actionDelete()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            Post::findOne(['id' => $id])->delete();
            Like::deleteAll(['post_id' => $id]);
            Comment::deleteAll(['post_id' => $id]);
            PostTag::deleteAll(['post_id' => $id]);
            PostNotification::deleteAll(['post_id' => $id]);
        }
    }

    public function actionShowAll()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        $query = Post::find()->where(['user_id' => Yii::$app->user->getId()]);

        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);

        $list_post = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->asArray()
            ->all();

        return $this->render('show', [
            'model' => $list_post,
            'pagination' => $pagination,
        ]);
    }

    public function actionDetail($id)
    {
        $model = Post::getPostById($id);
        return $this->render('detail', ['model' => $model]);
    }

    public function actionLike()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            Like::addLike($id, Yii::$app->user->getId());
        }
    }

    public function actionUnlike()
    {
        if (Yii::$app->user->isGuest) {
            $this->redirect(Url::to(['/site/login']));
        }

        if (isset($_POST['id'])) {
            Like::deleteAll(['user_id' => Yii::$app->user->getId(), 'post_id' => $_POST['id']]);
        }
    }

    public function actionComment()
    {
        if (isset($_POST['user_id']) && isset($_POST['post_id']) && isset($_POST['content'])) {
            $comment = new Comment();
            $comment['user_id'] = $_POST['user_id'];
            $comment['post_id'] = $_POST['post_id'];
            $comment['content'] = $_POST['content'];
            $comment['create_at'] = $_POST['create_at'];
            //$comment['create_at'] = Yii::$app->formatter->asDatetime("Y-m-d");
            $comment->save();

            $user = User::findOne(['id' => $_POST['user_id']]);
            if ($user['image'] != "") {
                $image = Yii::$app->request->baseUrl ."/images/" .$user['image'];
            } else {
                $image = Yii::$app->request->baseUrl ."/images/avatar-default.jpg";
            }

            echo '<div class="box-comment">'.
                    '<img class="img-circle img-sm" src="'.$image.'" alt="user image">'.
                    '<div class="comment-text">'.
                      '<span class="username">'.
                        $user['username'].
                        '<span class="text-muted pull-right">'.$comment['create_at'].'</span>'.
                      '</span>'.
                        $comment['content'].
                    '</div>'.
                '</div>';
        } else {
            echo 'NO';
        }
    }
}