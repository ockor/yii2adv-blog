<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 11/4/2015
 * Time: 7:53 PM
 */
$this->title = 'Friend Timeline';
$this->params['breadcrumbs'][] = $this->title;

$listPost = \common\models\Post::find()->where(['user_id' => $model['id']])->asArray()->all();
?>

<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                <h3 class="profile-username text-center"><?= $model['fullname'] ?></h3>
                <p class="text-muted text-center"><?= $model['job'] ?></p>

                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Posts</b> <a class="pull-right">543</a>
                    </li>
                    <li class="list-group-item">
                        <b>Friends</b> <a class="pull-right">13,287</a>
                    </li>
                </ul>

                <?php
                $user_id_1 = Yii::$app->user->getId();
                $user_id_2 = $model['id'];
                if ($user_id_1 > $user_id_2) {
                    $tg = $user_id_1;
                    $user_id_1 = $user_id_2;
                    $user_id_2 = $tg;
                }
                $isFriend = \common\models\Relationship::findOne(['user_id_1' => $user_id_1, 'user_id_2' => $user_id_2, 'status' => 1]) != null;
                if (!$isFriend) {
                    echo '<a href="#" class="btn btn-primary btn-block"><b>Add Friend</b></a>';
                }
                ?>
            </div><!-- /.box-body -->
        </div><!-- /.box -->

        <!-- About Me Box -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">About Me</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
                <p class="text-muted">
                    <?= $model['education'] ?>
                </p>

                <hr>

                <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                <p class="text-muted"><?= $model['location'] ?></p>

                <hr>

                <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                <p>The life if a fight!</p>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <?php
                        foreach ($listPost as $post) {
                            $cmtCount = \common\models\Comment::find()->where(['post_id' => $post['id']])->count();
                            if (strlen($post['content']) > 200) {
                                $postContent = substr($post['content'], 0, 200) ." ...";
                            } else {
                                $postContent = $post['content'];
                            }
                            echo '<div class="post">'.
                        '<div class="user-block">'.
                            '<img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">'.
                        '<span class="username">'.
                          '<a href="?r=post/detail&id='.$post['id'].'">'. $post['title'] .'</a>'.
                          '<a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>'.
                        '</span>'.
                            '<span class="description">'. $post['date'] .'</span>'.
                        '</div>'.
                        '<p>'.
                                $postContent.
                        '</p>'.
                        '<ul class="list-inline">'.
                            '<li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>'.
                            '<li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments ('.$cmtCount.')</a></li>'.
                        '</ul>'.

                        '<input class="form-control input-sm" placeholder="Type a comment" type="text">'.
                    '</div>';
                        }
                    ?>

                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <ul class="timeline timeline-inverse">
                        <!-- timeline time label -->
                        <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-envelope bg-blue"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
                                <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
                                <div class="timeline-body">
                                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                    weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                    jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                    quora plaxo ideeli hulu weebly balihoo...
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-primary btn-xs">Read more</a>
                                    <a class="btn btn-danger btn-xs">Delete</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-user bg-aqua"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
                                <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-comments bg-yellow"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
                                <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
                                <div class="timeline-body">
                                    Take me to your leader!
                                    Switzerland is small and neutral!
                                    We are more like Germany, ambitious and misunderstood!
                                </div>
                                <div class="timeline-footer">
                                    <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <!-- timeline time label -->
                        <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                        </li>
                        <!-- /.timeline-label -->
                        <!-- timeline item -->
                        <li>
                            <i class="fa fa-camera bg-purple"></i>
                            <div class="timeline-item">
                                <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
                                <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
                                <div class="timeline-body">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                    <img src="http://placehold.it/150x100" alt="..." class="margin">
                                </div>
                            </div>
                        </li>
                        <!-- END timeline item -->
                        <li>
                            <i class="fa fa-clock-o bg-gray"></i>
                        </li>
                    </ul>
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- /.nav-tabs-custom -->
    </div><!-- /.col -->
</div>