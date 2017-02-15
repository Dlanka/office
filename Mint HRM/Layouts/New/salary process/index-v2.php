<?php
// Leave Approve
//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/search-adv.css', 'screen');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/salary/main.css', 'screen');

//==============================================================================
//      Plugins CSS
//==============================================================================
//datepicker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');
//Time Picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/clockpicker/bootstrap-clockpicker.css', 'screen');
//Scroll
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');

//==============================================================================
//      JS
//==============================================================================
// form
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);

//==============================================================================
//      Plugins JS
//==============================================================================
// Date picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);
//Time Picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/clockpicker/bootstrap-clockpicker.min.js', CClientScript::POS_HEAD);
//Scroll
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/mScrollbar/jquery.mCustomScrollbar.concat.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<!--Search-->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="search-wrp">

            <div class="search-group active">
                <div>
                    <input id="search_txt" name="search_txt" type="text" onkeyup="" placeholder="Search">
                    <button class="btn-search" type="button"></button>
                </div>
                <a class="advace" href="#">Advance</a>
            </div>

            <div class="exp-wrp">
                <a class="top-exp" href="#"></a>
            </div>

            <div class="view-box">

                <div class="row ad-search">
                    <div class="col-lg-4">
                        <label class="control-label" for="">Input</label>
                        <input type="text">
                    </div>
                    <div class="col-lg-4"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button class="ad-search"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">

    <div class="col-md-12 mb-15">
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="but-gruop-wrp ">
                    <label>
                        <input type="checkbox" class="select-All">
                        <span class="check-box"></span>
                        <span>Select All</span>
                    </label>
                </div>
            </div>
            <div class="col-md-6 status">
                <h5><span class="st green"></span>Process</h5>
                <h5><span class="st red"></span>Error/Leave</h5>
                <h5><span class="st yellow"></span>Holiday</h5>
                <h5><span class="st black"></span>Other</h5>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card-content-wrp st_process">
            <div class="tab-box">
                <div class="box-head">
                    <div class="top-details ptb-10">
                        <div class="col-md-12">

                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-2 ">
                                        <div class="but-gruop-wrp ch_bx ch-0">
                                            <label>
                                                <input type="checkbox" class="check_sc">
                                                <span class="check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-10 pl-0">
                                        <div class="details-block">
                                            <div class="img-wrp--35">
                                                <img alt="Employee Image"
                                                     src="<?php echo Yii::app()->baseUrl ?>/uploads/empProfile/35/default.png"
                                                     class="user-img"></div>
                                            <h5 class="u-name">
                                                Darshani Udayanga
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3 mt-10">
                                        <h5 class="details">3452</h5>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <span class="ic_20 ic_roster" title="Roster Employee"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-1 pr-40">
                                <div class="row">
                                    <div class="col-md-6 mt-4 pl-0">

                                        <div class="col-md-4">
                                            <h6 class="title sm-title">In OT</h6>
                                            <h5 class="details">05:20</h5>
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <span class="ic_26 ic_fng-in"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="title sm-title">Late In</h6>
                                            <h5 class="details">08:50</h5>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mt-4 pl-0">

                                        <div class="col-md-4">
                                            <h6 class="title sm-title">Early Out</h6>
                                            <h5 class="details">05:20</h5>
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <span class="ic_26 ic_fng-out"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="title sm-title">Out OT</h6>
                                            <h5 class="details">08:50</h5>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>
                <div class="box-body space-box box-sp">
                    <div class="row top-sps">
                        <div class="col-md-12">
                            <div class="col-md-12 mt-30 mb-15">
                                <div class="col-md-3">
                                    <div class="but-gruop-wrp ch_bx">
                                        <label>
                                            <input type="checkbox" class="in_check_all">
                                            <span class="check-box"></span>
                                            <span>Select All</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mt-12">
                                        <h6 class="col-md-6 title">In Date & Time</h6>
                                        <h6 class="col-md-6 title">Out Date & Time</h6>
                                    </div>
                                </div>
                                <div class="col-md-5"></div>
                            </div>

                            <div class="col-md-12 inner_scroll">
                                <div class="row">
                                    <!--Loop goes here-->
                                    <div class="inner col-md-12 mb-15 st_process">

                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="but-gruop-wrp m-0 ch-0">
                                                        <label>
                                                            <input type="checkbox" class="in_check">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 plr-0">
                                                    <h5 class="details mt-5 dateTime">
                                                        <span>21 JUN 2016</span>
                                                        <span>&nbsp;(&nbsp;</span>
                                                        <span>8.00</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>17.00</span>
                                                        <span>&nbsp;)</span>
                                                        <!--Status-->
                                                        <i class="st yellow">
                                                            <span>This is what</span>
                                                        </i>
                                                        <i class="st red ">
                                                            <span>This is what</span>
                                                        </i>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="row inp-f-14">

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="In Date">

                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="In Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="Out Date">
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="Out Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4 col-md-offset-1 pr-40">

                                            <div class="row mt-3">
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>
                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner col-md-12 mb-15 st_error">

                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="but-gruop-wrp m-0 ch-0">
                                                        <label>
                                                            <input type="checkbox" class="in_check">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 plr-0">
                                                    <h5 class="details mt-5 dateTime">
                                                        <span>21 JUN 2016</span>
                                                        <span>&nbsp;(&nbsp;</span>
                                                        <span>8.00</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>17.00</span>
                                                        <span>&nbsp;)</span>
                                                        <!--Status-->
                                                        <i class="st yellow">
                                                            <span>This is what</span>
                                                        </i>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="row inp-f-14">

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="In Date">

                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="In Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="Out Date">
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="Out Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4 col-md-offset-1 pr-40">

                                            <div class="row mt-3">
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner col-md-12 mb-15 ">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="but-gruop-wrp m-0 ch-0">
                                                        <label>
                                                            <input type="checkbox" class="in_check">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 plr-0">
                                                    <h5 class="details mt-5 dateTime">
                                                        <span>21 JUN 2016</span>
                                                        <span>&nbsp;(&nbsp;</span>
                                                        <span>8.00</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>17.00</span>
                                                        <span>&nbsp;)</span>
                                                        <!--Status-->
                                                        <i class="st yellow">
                                                            <span>This is what</span>
                                                        </i>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="row inp-f-14">

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="In Date">

                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="In Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="Out Date">
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="Out Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4 col-md-offset-1 pr-40">

                                            <div class="row mt-3">
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>
                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Action-->
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <button type="button" class="bx-but bx-save">Apply</button>
                                    <button type="button" class="bx-but bx-exit">Reject</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="card-content-wrp st_error">
            <div class="tab-box">
                <div class="box-head">
                    <div class="top-details ptb-10">
                        <div class="col-md-12">

                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-2 ">
                                        <div class="but-gruop-wrp ch_bx ch-0">
                                            <label>
                                                <input type="checkbox" class="check_sc">
                                                <span class="check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-10 pl-0">
                                        <div class="details-block">
                                            <div class="img-wrp--35">
                                                <img alt="Employee Image"
                                                     src="<?php echo Yii::app()->baseUrl ?>/uploads/empProfile/35/default.png"
                                                     class="user-img"></div>
                                            <h5 class="u-name">
                                                Darshani Udayanga
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3 mt-10">
                                        <h5 class="details">3452</h5>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <span class="ic_20 ic_roster" title="Roster Employee"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-1 pr-40">
                                <div class="row">
                                    <div class="col-md-6 mt-4 pl-0">

                                        <div class="col-md-4">
                                            <h6 class="title sm-title">In OT</h6>
                                            <h5 class="details">05:20</h5>
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <span class="ic_26 ic_fng-in"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="title sm-title">Late In</h6>
                                            <h5 class="details">08:50</h5>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mt-4 pl-0">

                                        <div class="col-md-4">
                                            <h6 class="title sm-title">Early Out</h6>
                                            <h5 class="details">05:20</h5>
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <span class="ic_26 ic_fng-out"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="title sm-title">Out OT</h6>
                                            <h5 class="details">08:50</h5>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>
                <div class="box-body space-box box-sp">
                    <div class="row top-sps">
                        <div class="col-md-12">
                            <div class="col-md-12 mt-30 mb-15">
                                <div class="col-md-3">
                                    <div class="but-gruop-wrp ch_bx">
                                        <label>
                                            <input type="checkbox" class="in_check_all">
                                            <span class="check-box"></span>
                                            <span>Select All</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mt-12">
                                        <h6 class="col-md-6 title">In Date & Time</h6>
                                        <h6 class="col-md-6 title">Out Date & Time</h6>
                                    </div>
                                </div>
                                <div class="col-md-5"></div>
                            </div>

                            <div class="col-md-12 inner_scroll">
                                <div class="row">
                                    <!--Loop goes here-->
                                    <div class="inner col-md-12 mb-15 st_process">

                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="but-gruop-wrp m-0 ch-0">
                                                        <label>
                                                            <input type="checkbox" class="in_check">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 plr-0">
                                                    <h5 class="details mt-5 dateTime">
                                                        <span>21 JUN 2016</span>
                                                        <span>&nbsp;(&nbsp;</span>
                                                        <span>8.00</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>17.00</span>
                                                        <span>&nbsp;)</span>
                                                        <!--Status-->
                                                        <i class="st yellow">
                                                            <span>This is what</span>
                                                        </i>
                                                        <i class="st red ">
                                                            <span>This is what</span>
                                                        </i>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="row inp-f-14">

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="In Date">

                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="In Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="Out Date">
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="Out Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4 col-md-offset-1 pr-40">

                                            <div class="row mt-3">
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>
                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner col-md-12 mb-15 st_error">

                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="but-gruop-wrp m-0 ch-0">
                                                        <label>
                                                            <input type="checkbox" class="in_check">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 plr-0">
                                                    <h5 class="details mt-5 dateTime">
                                                        <span>21 JUN 2016</span>
                                                        <span>&nbsp;(&nbsp;</span>
                                                        <span>8.00</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>17.00</span>
                                                        <span>&nbsp;)</span>
                                                        <!--Status-->
                                                        <i class="st yellow">
                                                            <span>This is what</span>
                                                        </i>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="row inp-f-14">

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="In Date">

                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="In Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="Out Date">
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="Out Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4 col-md-offset-1 pr-40">

                                            <div class="row mt-3">
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner col-md-12 mb-15 ">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="but-gruop-wrp m-0 ch-0">
                                                        <label>
                                                            <input type="checkbox" class="in_check">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 plr-0">
                                                    <h5 class="details mt-5 dateTime">
                                                        <span>21 JUN 2016</span>
                                                        <span>&nbsp;(&nbsp;</span>
                                                        <span>8.00</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>17.00</span>
                                                        <span>&nbsp;)</span>
                                                        <!--Status-->
                                                        <i class="st yellow">
                                                            <span>This is what</span>
                                                        </i>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="row inp-f-14">

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="In Date">

                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="In Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="Out Date">
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="Out Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4 col-md-offset-1 pr-40">

                                            <div class="row mt-3">
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>
                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Action-->
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <button type="button" class="bx-but bx-save">Apply</button>
                                    <button type="button" class="bx-but bx-exit">Reject</button>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="card-content-wrp ">
            <div class="tab-box">
                <div class="box-head">
                    <div class="top-details ptb-10">
                        <div class="col-md-12">

                            <div class="col-md-3">
                                <div class="row">
                                    <div class="col-md-2 ">
                                        <div class="but-gruop-wrp ch_bx ch-0">
                                            <label>
                                                <input type="checkbox" class="check_sc">
                                                <span class="check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-10 pl-0">
                                        <div class="details-block">
                                            <div class="img-wrp--35">
                                                <img alt="Employee Image"
                                                     src="<?php echo Yii::app()->baseUrl ?>/uploads/empProfile/35/default.png"
                                                     class="user-img"></div>
                                            <h5 class="u-name">
                                                Darshani Udayanga
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-3 mt-10">
                                        <h5 class="details">3452</h5>
                                    </div>
                                    <div class="col-md-3 mt-4">
                                        <span class="ic_20 ic_roster" title="Roster Employee"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-md-offset-1 pr-40">
                                <div class="row">
                                    <div class="col-md-6 mt-4 pl-0">

                                        <div class="col-md-4">
                                            <h6 class="title sm-title">In OT</h6>
                                            <h5 class="details">05:20</h5>
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <span class="ic_26 ic_fng-in"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="title sm-title">Late In</h6>
                                            <h5 class="details">08:50</h5>
                                        </div>

                                    </div>
                                    <div class="col-md-6 mt-4 pl-0">

                                        <div class="col-md-4">
                                            <h6 class="title sm-title">Early Out</h6>
                                            <h5 class="details">05:20</h5>
                                        </div>
                                        <div class="col-md-3 mt-4">
                                            <span class="ic_26 ic_fng-out"></span>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="title sm-title">Out OT</h6>
                                            <h5 class="details">08:50</h5>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>
                <div class="box-body space-box box-sp">
                    <div class="row top-sps">
                        <div class="col-md-12">
                            <div class="col-md-12 mt-30 mb-15">
                                <div class="col-md-3">
                                    <div class="but-gruop-wrp ch_bx">
                                        <label>
                                            <input type="checkbox" class="in_check_all">
                                            <span class="check-box"></span>
                                            <span>Select All</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row mt-12">
                                        <h6 class="col-md-6 title">In Date & Time</h6>
                                        <h6 class="col-md-6 title">Out Date & Time</h6>
                                    </div>
                                </div>
                                <div class="col-md-5"></div>
                            </div>

                            <div class="col-md-12 inner_scroll">
                                <div class="row">
                                    <!--Loop goes here-->
                                    <div class="inner col-md-12 mb-15 st_process">

                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="but-gruop-wrp m-0 ch-0">
                                                        <label>
                                                            <input type="checkbox" class="in_check">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 plr-0">
                                                    <h5 class="details mt-5 dateTime">
                                                        <span>21 JUN 2016</span>
                                                        <span>&nbsp;(&nbsp;</span>
                                                        <span>8.00</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>17.00</span>
                                                        <span>&nbsp;)</span>
                                                        <!--Status-->
                                                        <i class="st yellow">
                                                            <span>This is what</span>
                                                        </i>
                                                        <i class="st red ">
                                                            <span>This is what</span>
                                                        </i>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="row inp-f-14">

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="In Date">

                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="In Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="Out Date">
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="Out Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4 col-md-offset-1 pr-40">

                                            <div class="row mt-3">
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>
                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner col-md-12 mb-15 st_error">

                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="but-gruop-wrp m-0 ch-0">
                                                        <label>
                                                            <input type="checkbox" class="in_check">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 plr-0">
                                                    <h5 class="details mt-5 dateTime">
                                                        <span>21 JUN 2016</span>
                                                        <span>&nbsp;(&nbsp;</span>
                                                        <span>8.00</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>17.00</span>
                                                        <span>&nbsp;)</span>
                                                        <!--Status-->
                                                        <i class="st yellow">
                                                            <span>This is what</span>
                                                        </i>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="row inp-f-14">

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="In Date">

                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="In Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="Out Date">
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="Out Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4 col-md-offset-1 pr-40">

                                            <div class="row mt-3">
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="inner col-md-12 mb-15 ">
                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="but-gruop-wrp m-0 ch-0">
                                                        <label>
                                                            <input type="checkbox" class="in_check">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-10 plr-0">
                                                    <h5 class="details mt-5 dateTime">
                                                        <span>21 JUN 2016</span>
                                                        <span>&nbsp;(&nbsp;</span>
                                                        <span>8.00</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>17.00</span>
                                                        <span>&nbsp;)</span>
                                                        <!--Status-->
                                                        <i class="st yellow">
                                                            <span>This is what</span>
                                                        </i>

                                                    </h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="row inp-f-14">

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="In Date">

                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="In Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="date-pick" type="text" placeholder="Date"
                                                           title="Out Date">
                                                </div>

                                                <div class="col-md-3">
                                                    <input class="time-pick" type="text" placeholder="Time"
                                                           title="Out Time">
                                                    <div class="tip-wrp">
                                                        <span class="ic_16 ic_location"></span>
                                                        <span class="tip">Mobile</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-md-4 col-md-offset-1 pr-40">

                                            <div class="row mt-3">
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 pl-0">

                                                    <div class="col-md-4">
                                                        <h5 class="details">08:20</h5>
                                                    </div>
                                                    <div class="col-md-4 col-md-offset-3">
                                                        <h5 class="details">08:20</h5>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Action-->
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <button type="button" class="bx-but bx-save">Apply</button>
                                    <button type="button" class="bx-but bx-exit">Reject</button>
                                </div>
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
<!--Date picker-->
<script>
    $('.date-pick').datepicker({
        autoClose: true,
        position: 'top left',
        language: 'en',
        dateFormat: 'd M'

    });
</script>
<script>
    $('.time-pick').clockpicker({
        placement: 'top',
        align: 'left',
        autoclose: true,
    });
</script>

<script>
    $(".inner_scroll").mCustomScrollbar({
        theme: "minimal-dark"
    });
</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->
<script>
    $('.select-All').click(function () {
        if ($(this).prop('checked')) {
            $('.ch_bx').find('.check_sc').prop('checked', true);
        } else {
            $('.ch_bx').find('.check_sc').prop('checked', false);
        }
    });
    $('.in_check_all').click(function () {

        let prn = $(this).parents('.box-body');

        if ($(this).prop('checked')) {
            prn.find('.inner_scroll .but-gruop-wrp .in_check').prop('checked', true);
        } else {
            prn.find('.inner_scroll .but-gruop-wrp .in_check').prop('checked', false);
        }
    });
</script>
<script>
    //Sub link
    $('.ac_wrp h6.red').click(function () {

        if (!$(this).parents('.ac_wrp').hasClass('on')) {

            //Hide befor opened viwe
            //$('.ac_wrp').removeClass('on').removeClass('mb-30');
            //$('.contents').slideUp();
            //$('.ac_wrp h6.red').removeClass('mb-20');

            $(this).addClass('mb-20');
            $(this).parents('.ac_wrp').addClass('on');
            $(this).parents('.ac_wrp').find('.contents').slideDown('fast');

        } else {
            $(this).parents('.ac_wrp').removeClass('on');
            $(this).parents('.ac_wrp').find('.contents').slideUp();
        }
    });
</script>

<script>

    $('.ui-link').on('click', function () {
        if (!$(this).hasClass('active-link')) {

            $('.ui-link').removeClass('active-link');
            $('.ui-link').nextAll('.ui-box-wrp').slideUp('slow').removeClass('active');

            $(this).addClass('active-link');
            $(this).nextAll('.ui-box-wrp').slideDown('slow').addClass('active');

            return false;
        } else {

            $(this).removeClass('active-link');
            $(this).nextAll('.ui-box-wrp').slideUp('slow').removeClass('active');
            return false;
        }
        return false;

    });
</script>

<script>
    $(function () {
        init();

        function init() {
            $('.tab-box').find('.box-body').fadeTo('fast', 0).hide();
        }

        $('.btn-expand-wrp a').on('click', function () {
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //silde Down
                $(this).addClass('btn-expand-down');
                //$(this).closest('.box-head').find('.top-details .details-block img').fadeTo('slow', 0).css('visibility', ' hidden');
                //$(this).closest('.box-head').find('.top-details .right-b,.top-details .details-block').fadeTo('fast', 0).css('visibility', ' hidden');
                $(this).closest('.tab-box').parent('.card-content-wrp').addClass('on');
                $(this).closest('.tab-box').find('.box-body').slideDown('fast', function () {
                    //$(this).closest('.tab-box').find('.box-body .emp-box-details,.box-body .u-name').fadeTo('slow', 1);
                });
                //thisA.closest('.box-head').find('.top-details .left-b').fadeTo('slow', 1).addClass('bg-blue');
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box').fadeTo('fast', 1);

            } else {
                //               Slide Up
                $(this).removeClass('btn-expand-down');
                $(this).closest('.tab-box').parent('.card-content-wrp').removeClass('on');
                $(this).closest('.tab-box').find('.box-body').fadeTo('fast', 0, function () {
                    $(this).closest('.tab-box').find('.box-body').slideUp('slow', function () {
                        //thisA.closest('.box-head').find('.top-details .left-b').fadeTo('slow', 1);
                        //thisA.closest('.box-head').find('.top-details .right-b').fadeTo('slow', 1).css('visibility', ' visible');
                    });
                    $(this).closest('.tab-box ').find('.box-body').removeClass('active-box');
                });
            }
            return false;
        });
    });

</script>

<script>
    //  Advance search
    $(function () {
        $('.top-exp').click(function () {
            if ($('.view-box').hasClass('active')) {
                $('.view-box').fadeOut(function () {
                    $(this).css('visibility', 'hidden');
                    $(this).slideUp(function () {
                        $(this).removeClass('active');
                        $('.exp-wrp').removeClass('active');
                        $('.top-exp').css('display', 'none');
                        //$('.search-group').addClass('active');
                        $('.search-group').fadeIn('fast').css({'visibility': 'visible', 'display': 'block'});
                    });
                });
                return false;
            }
            return false;
        });

        $('.advace').click(function () {
            $('.search-group').fadeOut(function () {
                $('.view-box').slideDown(function () {
                    $(this).css('visibility', 'visible');
                    $(this).addClass('active');
                    $('.exp-wrp').addClass('active');
                });
                $('.top-exp').css('display', 'inline-block');
                $(this).css('visibility', 'hidden');
                $(this).removeClass('active');
                return false;
            });
            return false;
        });
    });
</script>
<!-- ===========================================================================
        Backend Script
============================================================================ -->
