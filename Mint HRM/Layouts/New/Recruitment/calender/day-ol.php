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
                <a href="#" class="active">Day</a>
                <a href="#">Week</a>
                <a href="#">Month</a>
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
                            <div class="cm_calender">
                                <div class="cm_head">
                                    <button class="bt-ac  bt-prev">
                                        <svg>
                                            <path d="M 17,12 l -5,5 l 5,5"/>
                                        </svg>
                                    </button>
                                    <div class="cm_month-year">
                                        <span>September,</span>
                                        <span>2016</span>
                                    </div>
                                    <button class="bt-ac bt-next">
                                        <svg>
                                            <path d="M 14,12 l 5,5 l -5,5"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="cm_body">
                                    <div class="c_day ">
                                        <span>Su</span>
                                        <span>Mo</span>
                                        <span>Tu</span>
                                        <span>We</span>
                                        <span>Th</span>
                                        <span>Fr</span>
                                        <span>Sa</span>
                                    </div>
                                    <div class="c_date ">
                                        <span class="disable">29</span>
                                        <span class="disable">30</span>
                                        <span>1</span>
                                        <span>2</span>
                                        <span>3</span>
                                        <span>4</span>
                                        <span>5</span>
                                        <span>6</span>
                                        <span>7</span>
                                        <span>8</span>
                                        <span>9</span>
                                        <span>9</span>
                                        <span>11</span>
                                        <span>12</span>
                                        <span>13</span>
                                        <span>14</span>
                                        <span>15</span>
                                        <span>16</span>
                                        <span class="select">17</span>
                                        <span>18</span>
                                        <span>19</span>
                                        <span>20</span>
                                        <span>21</span>
                                        <span>22</span>
                                        <span>23</span>
                                        <span>24</span>
                                        <span>25</span>
                                        <span>26</span>
                                        <span>27</span>
                                        <span>28</span>
                                        <span>29</span>
                                        <span>30</span>
                                        <span>31</span>
                                        <span class="disable">1</span>
                                        <span class="disable">2</span>
                                    </div>
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
                        <div class="cln-header">
                            <table class="table cln">
                                <tbody>
                                <tr>
                                    <td class="times-wrp">&nbsp;</td>
                                    <td class="dates-wrp">
                                        <div class="top">
                                            <div class="date-day">
                                                <span class="t-num">17</span>
                                                <span class="t-day">Tuesday</span>
                                            </div>
                                            <div>
                                                <span class="t-year">January 2016</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cln-container">

                            <table class="table cln">
                                <tbody>
                                <tr>
                                    <td class="times-wrp">
                                        <div class="time">8.00</div>
                                        <div class="time">9.00</div>
                                        <div class="time">10.00</div>
                                        <div class="time">11.00</div>
                                        <div class="time">11.00</div>
                                        <div class="time">12.00</div>
                                        <div class="time">13.00</div>
                                        <div class="time">14.00</div>
                                        <div class="time">15.00</div>
                                        <div class="time">16.00</div>
                                        <div class="time">17.00</div>
                                        <div class="time">18.00</div>
                                    </td>
                                    <td class="dates-wrp ">
                                        <div class="item-wrp day-item">
                                            <div class="item">
                                                <span>8.00 - 9.00</span>
                                                <span>Interview</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

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

