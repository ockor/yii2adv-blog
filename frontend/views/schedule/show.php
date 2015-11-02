<?php
/**
 * Created by PhpStorm.
 * User: Nguyen
 * Date: 10/30/2015
 * Time: 10:59 PM
 */
?>

<div class="row">
    <div class="col-md-3">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h4 class="box-title">Draggable Events</h4>
            </div>
            <div class="box-body">
                <!-- the events -->
                <div id="external-events">
                    <div class="external-event bg-green ui-draggable ui-draggable-handle" style="position: relative;">Lunch</div>
                    <div class="external-event bg-yellow ui-draggable ui-draggable-handle" style="position: relative;">Go home</div>
                    <div class="external-event bg-aqua ui-draggable ui-draggable-handle" style="position: relative;">Do homework</div>
                    <div class="external-event bg-light-blue ui-draggable ui-draggable-handle" style="position: relative;">Work on UI design</div>
                    <div class="external-event bg-red ui-draggable ui-draggable-handle" style="position: relative;">Sleep tight</div>
                    <div class="checkbox">
                        <label for="drop-remove">
                            <input type="checkbox" id="drop-remove">
                            remove after drop
                        </label>
                    </div>
                </div>
            </div><!-- /.box-body -->
        </div><!-- /. box -->
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Create Event</h3>
            </div>
            <div class="box-body">
                <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                    <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->
                    <ul class="fc-color-picker" id="color-chooser">
                        <li><a class="text-aqua" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-blue" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-teal" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-lime" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-fuchsia" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>
                        <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class="input-group">
                    <input id="new-event" type="text" class="form-control" placeholder="Event Title">
                    <div class="input-group-btn">
                        <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Add</button>
                    </div><!-- /btn-group -->
                </div><!-- /input-group -->
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-body no-padding">
                <!-- THE CALENDAR -->
                <div id="calendar" class="fc fc-ltr fc-unthemed">
                    <div class="fc-toolbar">
                        <div class="fc-left">
                            <div class="fc-button-group">
                                <button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left">
                                    <span class="fc-icon fc-icon-left-single-arrow">
                                    </span>
                                </button>
                                <button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right">
                                    <span class="fc-icon fc-icon-right-single-arrow">
                                    </span>
                                </button>
                            </div>
                            <button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled" disabled="disabled">today</button>
                        </div>
                        <div class="fc-right">
                            <div class="fc-button-group">
                                <button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button>
                                <button type="button" class="fc-agendaWeek-button fc-button fc-state-default">week</button>
                                <button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right">day</button>
                            </div>
                        </div>
                        <div class="fc-center">
                            <h2>October 2015</h2>
                        </div>
                        <div class="fc-clear"></div>
                    </div>
                    <div class="fc-view-container" style="">
                        <div class="fc-view fc-month-view fc-basic-view" style="">
                            <table>
                                <thead>
                                    <tr>
                                        <td class="fc-widget-header">
                                            <div class="fc-row fc-widget-header">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th class="fc-day-header fc-widget-header fc-sun">Sun</th>
                                                            <th class="fc-day-header fc-widget-header fc-mon">Mon</th>
                                                            <th class="fc-day-header fc-widget-header fc-tue">Tue</th>
                                                            <th class="fc-day-header fc-widget-header fc-wed">Wed</th>
                                                            <th class="fc-day-header fc-widget-header fc-thu">Thu</th>
                                                            <th class="fc-day-header fc-widget-header fc-fri">Fri</th>
                                                            <th class="fc-day-header fc-widget-header fc-sat">Sat</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fc-widget-content">
                                            <div class="fc-day-grid-container" style="">
                                                <div class="fc-day-grid">
                                                    <div class="fc-row fc-week fc-widget-content" style="height: 96px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2015-09-27"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2015-09-28"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2015-09-29"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2015-09-30"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-10-01"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-10-02"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-10-03"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2015-09-27">27</td>
                                                                        <td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2015-09-28">28</td>
                                                                        <td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2015-09-29">29</td>
                                                                        <td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2015-09-30">30</td>
                                                                        <td class="fc-day-number fc-thu fc-past" data-date="2015-10-01">1</td>
                                                                        <td class="fc-day-number fc-fri fc-past" data-date="2015-10-02">2</td>
                                                                        <td class="fc-day-number fc-sat fc-past" data-date="2015-10-03">3</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td class="fc-event-container">
                                                                            <a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#f56954;border-color:#f56954">
                                                                                <div class="fc-content">
                                                                                    <span class="fc-time">12a</span> 
                                                                                    <span class="fc-title">All Day Event</span>
                                                                                </div>
                                                                            </a>
                                                                        </td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="fc-row fc-week fc-widget-content" style="height: 96px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-10-04"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-10-05"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-10-06"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-10-07"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-10-08"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-10-09"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-10-10"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-number fc-sun fc-past" data-date="2015-10-04">4</td>
                                                                        <td class="fc-day-number fc-mon fc-past" data-date="2015-10-05">5</td>
                                                                        <td class="fc-day-number fc-tue fc-past" data-date="2015-10-06">6</td>
                                                                        <td class="fc-day-number fc-wed fc-past" data-date="2015-10-07">7</td>
                                                                        <td class="fc-day-number fc-thu fc-past" data-date="2015-10-08">8</td>
                                                                        <td class="fc-day-number fc-fri fc-past" data-date="2015-10-09">9</td>
                                                                        <td class="fc-day-number fc-sat fc-past" data-date="2015-10-10">10</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="fc-row fc-week fc-widget-content" style="height: 96px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-10-11"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-10-12"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-10-13"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-10-14"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-10-15"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-10-16"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-10-17"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-number fc-sun fc-past" data-date="2015-10-11">11</td>
                                                                        <td class="fc-day-number fc-mon fc-past" data-date="2015-10-12">12</td>
                                                                        <td class="fc-day-number fc-tue fc-past" data-date="2015-10-13">13</td>
                                                                        <td class="fc-day-number fc-wed fc-past" data-date="2015-10-14">14</td>
                                                                        <td class="fc-day-number fc-thu fc-past" data-date="2015-10-15">15</td>
                                                                        <td class="fc-day-number fc-fri fc-past" data-date="2015-10-16">16</td>
                                                                        <td class="fc-day-number fc-sat fc-past" data-date="2015-10-17">17</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="fc-row fc-week fc-widget-content" style="height: 96px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-10-18"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-10-19"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-10-20"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-10-21"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-10-22"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-past" data-date="2015-10-23"></td>
                                                                        <td class="fc-day fc-widget-content fc-sat fc-past" data-date="2015-10-24"></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="fc-content-skeleton">
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <td class="fc-day-number fc-sun fc-past" data-date="2015-10-18">18</td>
                                                                        <td class="fc-day-number fc-mon fc-past" data-date="2015-10-19">19</td>
                                                                        <td class="fc-day-number fc-tue fc-past" data-date="2015-10-20">20</td>
                                                                        <td class="fc-day-number fc-wed fc-past" data-date="2015-10-21">21</td>
                                                                        <td class="fc-day-number fc-thu fc-past" data-date="2015-10-22">22</td>
                                                                        <td class="fc-day-number fc-fri fc-past" data-date="2015-10-23">23</td>
                                                                        <td class="fc-day-number fc-sat fc-past" data-date="2015-10-24">24</td>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="fc-row fc-week fc-widget-content" style="height: 96px;">
                                                        <div class="fc-bg">
                                                            <table>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="fc-day fc-widget-content fc-sun fc-past" data-date="2015-10-25"></td>
                                                                        <td class="fc-day fc-widget-content fc-mon fc-past" data-date="2015-10-26"></td>
                                                                        <td class="fc-day fc-widget-content fc-tue fc-past" data-date="2015-10-27"></td>
                                                                        <td class="fc-day fc-widget-content fc-wed fc-past" data-date="2015-10-28"></td>
                                                                        <td class="fc-day fc-widget-content fc-thu fc-past" data-date="2015-10-29"></td>
                                                                        <td class="fc-day fc-widget-content fc-fri fc-today fc-state-highlight" data-date="2015-10-30"></td><td class="fc-day fc-widget-content fc-sat fc-future" data-date="2015-10-31"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2015-10-25">25</td><td class="fc-day-number fc-mon fc-past" data-date="2015-10-26">26</td><td class="fc-day-number fc-tue fc-past" data-date="2015-10-27">27</td><td class="fc-day-number fc-wed fc-past" data-date="2015-10-28">28</td><td class="fc-day-number fc-thu fc-past" data-date="2015-10-29">29</td><td class="fc-day-number fc-fri fc-today fc-state-highlight" data-date="2015-10-30">30</td><td class="fc-day-number fc-sat fc-future" data-date="2015-10-31">31</td></tr></thead><tbody><tr><td class="fc-event-container" colspan="3"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#f39c12;border-color:#f39c12"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Long Event</span></div></a></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" href="http://google.com/" style="background-color:#3c8dbc;border-color:#3c8dbc"><div class="fc-content"><span class="fc-time">12a</span> <span class="fc-title">Click for Google</span></div></a></td><td rowspan="2"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#0073b7;border-color:#0073b7"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td><td class="fc-event-container" rowspan="2"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#00a65a;border-color:#00a65a"><div class="fc-content"><span class="fc-time">7p</span> <span class="fc-title">Birthday Party</span></div></a></td></tr><tr><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-event fc-start fc-end fc-draggable" style="background-color:#00c0ef;border-color:#00c0ef"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content" style="height: 96px;"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-future" data-date="2015-11-01"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-future" data-date="2015-11-02"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-future" data-date="2015-11-03"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-future" data-date="2015-11-04"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-future" data-date="2015-11-05"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-future" data-date="2015-11-06"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-future" data-date="2015-11-07"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-future" data-date="2015-11-01">1</td><td class="fc-day-number fc-mon fc-other-month fc-future" data-date="2015-11-02">2</td><td class="fc-day-number fc-tue fc-other-month fc-future" data-date="2015-11-03">3</td><td class="fc-day-number fc-wed fc-other-month fc-future" data-date="2015-11-04">4</td><td class="fc-day-number fc-thu fc-other-month fc-future" data-date="2015-11-05">5</td><td class="fc-day-number fc-fri fc-other-month fc-future" data-date="2015-11-06">6</td><td class="fc-day-number fc-sat fc-other-month fc-future" data-date="2015-11-07">7</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
            </div><!-- /.box-body -->
        </div><!-- /. box -->
    </div>
</div>