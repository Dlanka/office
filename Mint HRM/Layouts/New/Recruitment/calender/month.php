<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');


//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Recruitment Common
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/calender.css', 'screen');

//==============================================================================
//      JS
//==============================================================================
// form
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);

//==============================================================================
//      Plugins JS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/mScrollbar/jquery.mCustomScrollbar.concat.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>


<div class="contert-wrapper mb-30 pb-30">

    <div class="col-md-12 header-with-mn pb-0">
        <h1 class="title">
            Calender
        </h1>
    </div>

    <div class="col-md-12">
        <div class="col-md-offset-6 col-md-6">
            <div class="tab-calender">
                <a href="#">Day</a>
                <a href="#">Week</a>
                <a href="#" class="active">Month</a>
                <a href="#">Agenda</a>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-30">

        <div class="col-md-12">

            <div class="row">
                <!-- Left panel-->
                <div class="col-md-3">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12 blue-box plr-30 ptb-30">
                                <h1 class="title-month">January</h1>
                                <h3 class="title-year mt-5">2017</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-20">
                            <div class="row">
                                <div class="col-md-7">
                                    <select class="select-blue" name="" id="">
                                        <option value="1">January</option>
                                        <option value="1">February</option>
                                        <option value="1">Match</option>
                                    </select>
                                </div>

                                <div class="col-md-5">
                                    <select class="select-blue" name="" id="">
                                        <option value="1">2017</option>
                                        <option value="1">2018</option>
                                        <option value="1">2019</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form container-->
                    <div class="row mt-50">
                        <div class="col-md-12 mb-20">
                            <div class="but-gruop-wrp">
                                <label>
                                    <input type="checkbox">
                                    <span class="check-box"></span>
                                    <span class="pl-10">My Shift</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="task-list">
                                <li>
                                    <div class="but-gruop-wrp mb-0">
                                        <label>
                                            <input type="radio" name="a">
                                            <span class="radio mt-0 mb-0"></span>
                                            <span class="pl-10">Meeting Room - 1</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="but-gruop-wrp mb-0">
                                        <label>
                                            <input type="radio" name="a">
                                            <span class="radio mt-0 mb-0"></span>
                                            <span class="pl-10">Meeting Room - 2</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="but-gruop-wrp mb-0">
                                        <label>
                                            <input type="radio" name="a">
                                            <span class="radio mt-0 mb-0"></span>
                                            <span class="pl-10">Project</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="but-gruop-wrp mb-0">
                                        <label>
                                            <input type="radio" name="a">
                                            <span class="radio mt-0 mb-0"></span>
                                            <span class="pl-10">Auditorium</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Right panel-->
                <div class="col-md-9">
                    <div class="calender-container">
                        <div class="day-container">
                            <div class="day">Sun</div>
                            <div class="day">Mon</div>
                            <div class="day">Tue</div>
                            <div class="day">Wed</div>
                            <div class="day">Thu</div>
                            <div class="day">Fri</div>
                            <div class="day">Sat</div>
                        </div>

                        <div class="date-container">
                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">29</span>
                                    <span class="type">
                                        <h6 class="lb-holiday-type">Holiday</h6>
                                    </span>
                                </div>
                                <div class="content">
                                    <ul class="event-list">
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="date disable">
                                <div class="header">
                                    <span class="num">30</span>
                                </div>
                                <div class="content">
                                    <ul class="event-list">
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="date disable">
                                <div class="header">
                                    <span class="num">31</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">1</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date leave full">
                                <div class="header">
                                    <span class="num">2</span>
                                    <span class="type">
                                        <h6 class="lb-holiday-type">Holiday</h6>
                                    </span>
                                    <span class="icon">
                                        <i class="ic_15 ic-leave"></i>
                                    </span>
                                </div>
                                <div class="content">
                                    <ul class="event-list">
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">3</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">4</span>
                                </div>
                                <div class="content"></div>
                            </div>

                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">5</span>
                                    <span class="type">
                                        <h6 class="lb-holiday-type">Holiday</h6>
                                    </span>
                                </div>
                                <div class="content">

                                </div>
                            </div>
                            <div class="date leave morning">
                                <div class="header">
                                    <span class="num">6</span>
                                    <span class="type">
                                        <h6 class="lb-holiday-type"></h6>
                                    </span>
                                    <span class="icon">
                                        <i class="ic_15 ic-leave"></i>
                                    </span>
                                </div>
                                <div class="content">
                                    <ul class="event-list">
                                        <li>
                                            <span>Interview</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="date leave evening">
                                <div class="header">
                                    <span class="num">7</span>
                                    <span class="type">
                                        <h6 class="lb-holiday-type"></h6>
                                    </span>
                                    <span class="icon">
                                        <i class="ic_15 ic-leave"></i>
                                    </span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">8</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">9</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">10</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">11</span>
                                </div>
                                <div class="content"></div>
                            </div>

                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">12</span>
                                    <span class="type">
                                        <h6 class="lb-holiday-type">Holiday</h6>
                                    </span>
                                </div>
                                <div class="content">

                                </div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">13</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">14</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">15</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">16</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">17</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">18</span>
                                </div>
                                <div class="content"></div>
                            </div>

                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">19</span>
                                    <span class="type">
                                        <h6 class="lb-holiday-type">Holiday</h6>
                                    </span>
                                </div>
                                <div class="content">

                                </div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">20</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">21</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">22</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">23</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">24</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">25</span>
                                    <span class="type">
                                        <h6 class="lb-holiday-type">Poya day</h6>
                                    </span>
                                </div>
                                <div class="content">

                                </div>
                            </div>

                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">26</span>
                                    <span class="type">
                                        <h6 class="lb-holiday-type">Holiday</h6>
                                    </span>
                                </div>
                                <div class="content">

                                </div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">27</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">28</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">29</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">30</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date disable">
                                <div class="header">
                                    <span class="num">1</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date disable">
                                <div class="header">
                                    <span class="num">2</span>
                                </div>
                                <div class="content"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- ===========================================================================
        Plugin Script
============================================================================ -->

<!-- ===========================================================================
        Custom Script
============================================================================ -->

<!-- ===========================================================================
        Backend Script
============================================================================ -->

