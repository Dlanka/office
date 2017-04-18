<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// Time picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/clockpicker/bootstrap-clockpicker.css', 'screen');


//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
//popup
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/popup.css', 'screen');
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
// Time picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/clockpicker/bootstrap-clockpicker.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<!--Pop up modal-->
<div class="modal fade" id="cln_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content popup">
            <div class="modal-header">
                <button type="button" class="p-close" data-dismiss="modal" aria-label="Close">
                    <span>
                        <svg version="1.1" id="Layer_1" x="0px" y="0px" width="15px" height="15px"
                             viewBox="2.5 2.5 15 15">
                        <g>
                        <g>
                        <path d="M17.373,3.471l-0.845-0.842L10,9.159l-6.529-6.53L2.628,3.471l6.529,6.53l-6.529,6.528l0.842,0.842
                               L10,10.844l6.529,6.527l0.844-0.84l-6.53-6.53L17.373,3.471z"/>
                        </g>
                        </g>
                        </svg>
                    </span>
                </button>
                <h4 class="modal-title">Add New Holiday</h4>
            </div>
            <div class="modal-body pb-0">
                <div class="row mt-50">
                    <div class="col-md-12">
                        <div class="col-md-6 input-layout">
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                            <label for="">Holiday Type</label>
                        </div>
                        <div class="col-md-6 input-layout">
                            <input type="text">
                            <label for="">Title</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-15">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <button type="button" class="bx-but bx-save">Save</button>
                        <button type="button" class="bx-but bx-delete">Delete</button>
                    </div>
                    <div class="col-lg-12">
                        <!--Massage show here-->
                        <div class="message logoUp"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contert-wrapper mb-30 pb-30">

    <div class="col-md-12 header-with-mn">
        <h1 class="title">
            Holiday Calender
        </h1>
    </div>

    <div class="col-md-12 mt-20">

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
                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-12 input-layout">
                                    <select name="" id="">
                                        <option value=""></option>
                                    </select>
                                    <label for="">Holiday Type</label>
                                </div>

                                <div class="col-md-12 input-layout">
                                    <select name="" id="">
                                        <option value=""></option>
                                        <option value="1">Monday</option>
                                        <option value="1">Thursday</option>
                                    </select>
                                    <label for="">Day</label>
                                </div>

                                <div class="col-md-12 input-layout">
                                    <input type="text">
                                    <label for="">Title</label>
                                </div>

                                <!--                                <div class="col-md-12 input-layout">-->
                                <!--                                    <div class="row">-->
                                <!--                                        <div class="col-md-6">-->
                                <!--                                            <input type="text" class="time-pick">-->
                                <!--                                            <label for="">Start Time</label>-->
                                <!--                                        </div>-->
                                <!--                                        <div class="col-md-6">-->
                                <!--                                            <input type="text" class="time-pick">-->
                                <!--                                            <label for="">End Time</label>-->
                                <!--                                        </div>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->

                                <div class="col-md-12">
                                    <div class="message"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="button" class="bx-mb-0 bx-but bx-save">Save</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row mt-50">
                        <div class="col-md-12 holiday-scroll">
                            <ul class="holiday-list">
                                <li>
                                    <div class="table-block">
                                        <div class="cell cell-text">
                                            <h5 class="details f-16">Poya Day</h5>
                                        </div>
                                        <div class="cell">
                                            <div>
                                                <button type="button" class="img-but img-delete"></button>
                                                <button type="button" class="img-but img-edit"></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table-block">
                                        <div class="cell cell-text">
                                            <h5 class="details f-16">Poya Day</h5>
                                        </div>
                                        <div class="cell">
                                            <div>
                                                <button type="button" class="img-but img-delete"></button>
                                                <button type="button" class="img-but img-edit"></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table-block">
                                        <div class="cell cell-text">
                                            <h5 class="details f-16">Poya Day</h5>
                                        </div>
                                        <div class="cell">
                                            <div>
                                                <button type="button" class="img-but img-delete"></button>
                                                <button type="button" class="img-but img-edit"></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table-block">
                                        <div class="cell cell-text">
                                            <h5 class="details f-16">Poya Day</h5>
                                        </div>
                                        <div class="cell">
                                            <div>
                                                <button type="button" class="img-but img-delete"></button>
                                                <button type="button" class="img-but img-edit"></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table-block">
                                        <div class="cell cell-text">
                                            <h5 class="details f-16">Poya Day</h5>
                                        </div>
                                        <div class="cell">
                                            <div>
                                                <button type="button" class="img-but img-delete"></button>
                                                <button type="button" class="img-but img-edit"></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table-block">
                                        <div class="cell cell-text">
                                            <h5 class="details f-16">Poya Day</h5>
                                        </div>
                                        <div class="cell">
                                            <div>
                                                <button type="button" class="img-but img-delete"></button>
                                                <button type="button" class="img-but img-edit"></button>
                                            </div>
                                        </div>
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
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Holiday</h6>
                                </div>
                            </div>
                            <div class="date disable">
                                <div class="header">
                                    <span class="num">30</span>
                                </div>
                                <div class="content"></div>
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
                            <div class="date">
                                <div class="header">
                                    <span class="num">2</span>
                                </div>
                                <div class="content"></div>
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
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Holiday</h6>
                                </div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">6</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">7</span>
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
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Holiday</h6>
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
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Holiday</h6>
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
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Poya Day</h6>
                                </div>
                            </div>

                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">26</span>
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Holiday</h6>
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
<script>
    //Holiday scroll bar
    $(".holiday-scroll").mCustomScrollbar({
        theme: 'dark-3',
//        scrollbarPosition: 'outside'
    });

</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->
<script>

    $('.date-container .date').on('click', function () {

        //popup show here
        $('#cln_modal').modal('show');
    });

</script>


<!-- ===========================================================================
        Backend Script
============================================================================ -->

