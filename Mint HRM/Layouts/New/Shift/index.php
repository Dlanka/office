<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// Date Picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');
//Time Piker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/clockpicker/bootstrap-clockpicker.css', 'screen');

//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/shift/main.css', 'screen');

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
// Date Picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);
//Time Piker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/clockpicker/bootstrap-clockpicker.min.js', CClientScript::POS_HEAD);

?>

<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<div class="row addBtnWrp">
    <div class="col-md-12">
        <button type="button" class="but new addNew"><span></span>Add New</button>
    </div>
</div>

<div class="col-lg-12 contert-wrapper addForm mb-30">
    <div class="row">
        <div class="col-md-12 header-with-mn">
            <div class="row">
                <h1 class="col-md-11 title">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/system/icon/setting/32/ic_32_dashboard.svg"
                         alt="">
                    Shift Schedule
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-30">

            <!--Calender-->
            <div class="col-md-6">

                <!--Normal-->
                <div class="sf-cln normal_cln active">
                    <!--Title-->
                    <div class="sf-cln-title">
                        <div class="table-block">
                            <button type="button" class="btn-arrow left"></button>
                            <span>December 2016</span>
                            <button type="button" class="btn-arrow right"></button>
                        </div>
                    </div>

                    <!--Day-->
                    <div class="sf-cln-day">
                        <div class="day">Su</div>
                        <div class="day">Mo</div>
                        <div class="day">Tu</div>
                        <div class="day">We</div>
                        <div class="day">Th</div>
                        <div class="day">Fr</div>
                        <div class="day">St</div>
                    </div>

                    <!--Date-->
                    <div class="sf-cln-date">

                        <div class="date disable">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>30</span>
                                            <i class="st_dot "></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date disable">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>31</span>
                                            <i class="st_dot "></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="date selected">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>2</span>
                                            <i class="st_dot holiday"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date assigned">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>3</span>
                                            <i class="st_dot holiday"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="date ">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>2</span>
                                            <i class="st_dot holiday"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>3</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>2</span>
                                            <i class="st_dot holiday"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>3</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date assigned">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>2</span>
                                            <i class="st_dot holiday"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date assigned">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>3</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date assigned">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>2</span>
                                            <i class="st_dot holiday"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date assigned">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>3</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date assigned">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="date">
                            <div class="inner">
                                <div class="top">
                                        <span>
                                            <span>4</span>
                                            <i class="st_dot"></i>
                                        </span>
                                </div>
                                <div class="bottom">
                                    <div class="shift-type">C
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <!--Pattern-->
                <div class="sf-cln pattern_cln">
                    <!--Title-->
                    <div class="sf-cln-title">
                        <div class="table-block">
                            <span>Shift pattern</span>
                        </div>
                    </div>

                    <!--Day-->
                    <div class="sf-cln-day">
                        <div class="day week"></div>
                        <div class="day">Su</div>
                        <div class="day">Mo</div>
                        <div class="day">Tu</div>
                        <div class="day">We</div>
                        <div class="day">Th</div>
                        <div class="day">Fr</div>
                        <div class="day">St</div>
                    </div>

                    <!--Date-->
                    <div class="sf-cln-date">

                        <div class="week_wrp">
                            <div class="date">
                                <div class="inner">
                                    <div class="bottom">
                                        <span>1</span>
                                        <span>Week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_1" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_2" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_3" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_4" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_5" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_6" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_7" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="week_wrp">
                            <div class="date">
                                <div class="inner">
                                    <div class="bottom">
                                        <span>2</span>
                                        <span>Week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_8" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_9" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_10" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_11" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_12" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_13" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_14" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="week_wrp">
                            <div class="date">
                                <div class="inner">
                                    <div class="bottom">
                                        <span>3</span>
                                        <span>Week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_15" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_16" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_17" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_18" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_19" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_20" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_21" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="week_wrp">
                            <div class="date">
                                <div class="inner">
                                    <div class="bottom">
                                        <span>4</span>
                                        <span>Week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_22" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_23" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_24" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_25" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_26" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_27" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_28" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="week_wrp">
                            <div class="date">
                                <div class="inner">
                                    <div class="bottom">
                                        <span>5</span>
                                        <span>Week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_29" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_30" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_31" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_32" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_33" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_34" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_35" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="week_wrp">
                            <div class="date">
                                <div class="inner">
                                    <div class="bottom">
                                        <span>6</span>
                                        <span>Week</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_36" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_37" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_38" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_39" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_40" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_41" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bx_42" class="date">
                            <div class="inner">
                                <div class="bottom">
                                    <div class="shift-type">A
                                        <div class="sf-close"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!--Shift Category-->
            <div class="col-md-6 ">
                <div class="shift_wrp ">
                    <ul class="shift-list ">
                        <li id="pt_1">
                            <div class="table-block">
                                <div class="sf-label">
                                    <div class="shift-type">
                                        P
                                    </div>
                                </div>
                                <div class="sf-info">
                                    <h5>Lorem Ipsum</h5>
                                    <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                                </div>
                            </div>
                        </li>
                        <li id="pt_2">
                            <div class="table-block">
                                <div class="sf-label">
                                    <div class="shift-type">
                                        B
                                    </div>
                                </div>
                                <div class="sf-info">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                                </div>
                            </div>
                        </li>
                        <li id="pt_3">
                            <div class="table-block">
                                <div class="sf-label">
                                    <div class="shift-type">
                                        <div></div>
                                        A
                                    </div>
                                </div>
                                <div class="sf-info">
                                    <h5>Lorem ipsum dolor sit amet</h5>
                                    <h6><span>8.00</span>&nbsp;-&nbsp;<span>15.00</span></h6>
                                </div>
                            </div>
                        </li>
                        <li id="pt_4">
                            <div class="table-block">
                                <div class="sf-label">
                                    <div class="shift-type">
                                        S
                                    </div>
                                </div>
                                <div class="sf-info">
                                    <h5>Lorem ipsum sit amet</h5>
                                    <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-12 mt-80 pl-30 pt-form-wrp">

                        <div class="row form-row">
                            <div class="col-md-12">
                                <div class="but-gruop-wrp">
                                    <label>
                                        <input type="checkbox" class="newPattern">
                                        <span class="check-box"></span>
                                        <span>Create  a new pattern</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <!--Input Layer-->
                            <div class="input-layer">
                                <div class="col-md-9 input-layout">
                                    <input type="text">
                                    <label for="">Pattern Name</label>
                                </div>
                                <div class="col-md-3">
                                    <button class="img-but img-save pattenSave" type="button"></button>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="bx-but bx-exit shiftCln" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Select Layer-->
                            <div class="select-layer">
                                <div class="col-md-9 input-layout">
                                    <select name="" id="">
                                        <option value="a">Pattern 1</option>
                                    </select>
                                    <label for="">Pattern Name</label>
                                </div>
                                <div class="col-md-3">
                                    <button class="img-but img-delete" type="button"></button>
                                    <button class="img-but img-edit" type="button"></button>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="bx-but bx-exit shiftCln" type="button">Cancel</button>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>

    </div>
</div>

<!--Search-->
<div class="row">
    <div class="col-md-12 mb-15">
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

<!--All Shift-->
<div class="row all_shift_wrp">
    <div class="col-md-12">
        <div class="col-lg-12 contert-wrapper all-shift">
            <div class="col-md-4">
                <div class="table-block">
                    <div class="sf-label">
                        <div class="shift-type">
                            P
                        </div>
                    </div>
                    <div class="sf-info">
                        <h5>Lorem Ipsum</h5>
                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-block">
                    <div class="sf-label">
                        <div class="shift-type">
                            P
                        </div>
                    </div>
                    <div class="sf-info">
                        <h5>Lorem Ipsum</h5>
                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-block">
                    <div class="sf-label">
                        <div class="shift-type">
                            P
                        </div>
                    </div>
                    <div class="sf-info">
                        <h5>Lorem Ipsum</h5>
                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-block">
                    <div class="sf-label">
                        <div class="shift-type">
                            P
                        </div>
                    </div>
                    <div class="sf-info">
                        <h5>Lorem Ipsum</h5>
                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-block">
                    <div class="sf-label">
                        <div class="shift-type">
                            P
                        </div>
                    </div>
                    <div class="sf-info">
                        <h5>Lorem Ipsum</h5>
                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="table-block">
                    <div class="sf-label">
                        <div class="shift-type">
                            P
                        </div>
                    </div>
                    <div class="sf-info">
                        <h5>Lorem Ipsum</h5>
                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row userShiftList">
    <div class="col-md-12 mb-10">
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="but-gruop-wrp ch_bx">
                    <label>
                        <input type="checkbox" class="select-All">
                        <span class="check-box"></span>
                        <span>Select All</span>
                    </label>
                </div>
            </div>
            <div class="col-md-6">
                <h5 class="monthYear"><span>November</span>&nbsp;<span>2016</span></h5>
            </div>
        </div>
    </div>

    <div class="col-md-12">

        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="col-md-1 pl-0">
                                <div class="but-gruop-wrp ch_bx">
                                    <label>
                                        <input type="checkbox" class="ch">
                                        <span class="check-box"></span>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="details-block">
                                    <div class="img-wrp--35">
                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                    </div>
                                    <h5 class="u-name ml-15">
                                        Sandun Maduranga
                                    </h5>
                                </div>
                            </div>
                            <h5 class="col-md-3 mt-5 details epf_no">2456</h5>
                        </div>

                        <div class="col-md-8 pl-0">
                            <ul class="date-list">
                                <li>
                                    <span>Th</span>
                                    <div>01</div>
                                </li>
                                <li>
                                    <span>We</span>
                                    <div>02</div>
                                </li>
                                <li class="selected">
                                    <span>Th</span>
                                    <div>A</div>
                                    <div class="shift_list_wrp">
                                        <ul>
                                            <li>
                                                <div class="table-block">
                                                    <div class="sf-label">
                                                        <div class="shift-type">
                                                            A
                                                        </div>
                                                    </div>
                                                    <div class="sf-info">
                                                        <h5>Lorem Ipsum</h5>
                                                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="table-block">
                                                    <div class="sf-label">
                                                        <div class="shift-type">
                                                            A
                                                        </div>
                                                    </div>
                                                    <div class="sf-info">
                                                        <h5>Lorem Ipsum</h5>
                                                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <span>Fr</span>
                                    <div>04</div>
                                </li>
                                <li>
                                    <span>Sa</span>
                                    <div>05</div>
                                </li>
                                <li class="sun_day">
                                    <span>Su</span>
                                    <div>06</div>
                                </li>
                                <li>
                                    <span>Mo</span>
                                    <div>07</div>
                                </li>

                                <li>
                                    <span>Th</span>
                                    <div>08</div>
                                </li>
                                <li>
                                    <span>We</span>
                                    <div>09</div>
                                </li>

                                <li>
                                    <span>Fr</span>
                                    <div>10</div>
                                </li>
                                <li>
                                    <span>Sa</span>
                                    <div>11</div>
                                </li>
                                <li class="sun_day">
                                    <span>Su</span>
                                    <div>12</div>
                                </li>
                                <li>
                                    <span>Mo</span>
                                    <div>13</div>
                                </li>

                                <li>
                                    <span>Th</span>
                                    <div>14</div>
                                </li>
                                <li>
                                    <span>We</span>
                                    <div>15</div>
                                </li>

                                <li>
                                    <span>Fr</span>
                                    <div>16</div>
                                </li>
                                <li>
                                    <span>Sa</span>
                                    <div>17</div>
                                </li>
                                <li class="sun_day">
                                    <span>Su</span>
                                    <div>18</div>
                                </li>
                                <li>
                                    <span>Mo</span>
                                    <div>19</div>
                                </li>

                                <li>
                                    <span>Th</span>
                                    <div>20</div>
                                </li>
                                <li>
                                    <span>We</span>
                                    <div>21</div>
                                </li>

                                <li>
                                    <span>Fr</span>
                                    <div>22</div>
                                </li>
                                <li>
                                    <span>Sa</span>
                                    <div>23</div>
                                </li>
                                <li class="sun_day">
                                    <span>Su</span>
                                    <div>24</div>
                                </li>
                                <li>
                                    <span>Mo</span>
                                    <div>25</div>
                                </li>

                                <li>
                                    <span>Th</span>
                                    <div>26</div>
                                </li>
                                <li>
                                    <span>We</span>
                                    <div>27</div>
                                </li>

                                <li>
                                    <span>Fr</span>
                                    <div>28</div>
                                </li>
                                <li>
                                    <span>Sa</span>
                                    <div>29</div>
                                </li>
                                <li class="sun_day">
                                    <span>Su</span>
                                    <div>30</div>
                                </li>
                                <li>
                                    <span>Mo</span>
                                    <div>31</div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="col-md-1 pl-0">
                                <div class="but-gruop-wrp ch_bx">
                                    <label>
                                        <input type="checkbox" class="ch">
                                        <span class="check-box"></span>
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="details-block">
                                    <div class="img-wrp--35">
                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                    </div>
                                    <h5 class="u-name ml-15">
                                        Sandun Maduranga
                                    </h5>
                                </div>
                            </div>
                            <h5 class="col-md-3 mt-5 details epf_no">2456</h5>
                        </div>

                        <div class="col-md-8 pl-0">
                            <ul class="date-list">
                                <li>
                                    <span>Th</span>
                                    <div>01</div>
                                </li>
                                <li>
                                    <span>We</span>
                                    <div>02</div>
                                </li>
                                <li>
                                    <span>Th</span>
                                    <div>03</div>
                                </li>
                                <li class="selected">
                                    <span>Fr</span>
                                    <div>A</div>
                                    <div class="shift_list_wrp">
                                        <ul>
                                            <li>
                                                <div class="table-block">
                                                    <div class="sf-label">
                                                        <div class="shift-type">
                                                            A
                                                        </div>
                                                    </div>
                                                    <div class="sf-info">
                                                        <h5>Lorem Ipsum</h5>
                                                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="table-block">
                                                    <div class="sf-label">
                                                        <div class="shift-type">
                                                            A
                                                        </div>
                                                    </div>
                                                    <div class="sf-info">
                                                        <h5>Lorem Ipsum</h5>
                                                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="selected">
                                    <span>Sa</span>
                                    <div>C</div>
                                </li>
                                <li class="sun_day">
                                    <span>Su</span>
                                    <div>06</div>
                                </li>
                                <li>
                                    <span>Mo</span>
                                    <div>07</div>
                                </li>

                                <li>
                                    <span>Th</span>
                                    <div>08</div>
                                </li>
                                <li>
                                    <span>We</span>
                                    <div>09</div>
                                </li>

                                <li>
                                    <span>Fr</span>
                                    <div>10</div>
                                </li>
                                <li>
                                    <span>Sa</span>
                                    <div>11</div>
                                </li>
                                <li class="sun_day">
                                    <span>Su</span>
                                    <div>12</div>
                                </li>
                                <li>
                                    <span>Mo</span>
                                    <div>13</div>
                                </li>

                                <li>
                                    <span>Th</span>
                                    <div>14</div>
                                </li>
                                <li>
                                    <span>We</span>
                                    <div>15</div>
                                </li>

                                <li>
                                    <span>Fr</span>
                                    <div>16</div>
                                </li>
                                <li>
                                    <span>Sa</span>
                                    <div>17</div>
                                </li>
                                <li class="sun_day">
                                    <span>Su</span>
                                    <div>18</div>
                                </li>
                                <li>
                                    <span>Mo</span>
                                    <div>19</div>
                                </li>

                                <li>
                                    <span>Th</span>
                                    <div>20</div>
                                </li>
                                <li>
                                    <span>We</span>
                                    <div>21</div>
                                </li>

                                <li>
                                    <span>Fr</span>
                                    <div>22</div>
                                </li>
                                <li>
                                    <span>Sa</span>
                                    <div>23</div>
                                </li>
                                <li class="sun_day">
                                    <span>Su</span>
                                    <div>24</div>
                                </li>
                                <li>
                                    <span>Mo</span>
                                    <div>25</div>
                                </li>

                                <li>
                                    <span>Th</span>
                                    <div>26</div>
                                </li>
                                <li>
                                    <span>We</span>
                                    <div>27</div>
                                </li>

                                <li>
                                    <span>Fr</span>
                                    <div>28</div>
                                </li>
                                <li>
                                    <span>Sa</span>
                                    <div>29</div>
                                </li>
                                <li class="sun_day">
                                    <span>Su</span>
                                    <div>30</div>
                                </li>
                                <li class="selected">
                                    <span>Mo</span>
                                    <div>C</div>
                                    <div class="shift_list_wrp">
                                        <ul>
                                            <li>
                                                <div class="table-block">
                                                    <div class="sf-label">
                                                        <div class="shift-type">
                                                            A
                                                        </div>
                                                    </div>
                                                    <div class="sf-info">
                                                        <h5>Lorem Ipsum</h5>
                                                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="table-block">
                                                    <div class="sf-label">
                                                        <div class="shift-type">
                                                            A
                                                        </div>
                                                    </div>
                                                    <div class="sf-info">
                                                        <h5>Lorem Ipsum</h5>
                                                        <h6><span>8.00</span>&nbsp;-&nbsp;<span>5.00</span></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-md-12">
        <button class="bx-but bx-save" type="button">Apply</button>
        <button class="bx-but bx-save" type="button">Apply All</button>
    </div>
</div>


<!-- ===========================================================================
        Plugin Script
============================================================================ -->
<script>
    $(".shift_wrp").mCustomScrollbar({
        theme: "dark-3"
    });
</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->
<script>

    var patternObj = new Pattern();

    $('.newPattern').click(function () {
        if ($(this).prop('checked')) {

            $('.normal_cln').fadeOut('fast', function () {
                $('.pattern_cln').fadeIn('fast');
                $('.normal_cln').removeClass('active');
                $('.pattern_cln').addClass('active');
            });

            $('.select-layer').fadeOut('fast', function () {
                $('.input-layer').fadeIn('fast');
            });

        } else {

            $('.pattern_cln').fadeOut('fast', function () {
                $('.normal_cln').fadeIn('fast');
                $('.pattern_cln').removeClass('active');
                $('.normal_cln').addClass('active');
            });

            $('.input-layer').fadeOut('fast', function () {
                $('.select-layer').fadeIn('fast');
            });

        }
    });


    $('.select-All').click(function () {
        if ($(this).prop('checked')) {
            $('.ch').prop('checked', true);
        } else {
            $('.ch').prop('checked', false);
        }
    });

    $('.pattern_cln .date').click(function () {
        var that = $(this);
        if (!that.hasClass('selected')) {

            if (that.hasClass('assigned') ||
                that.parent().hasClass('week_wrp'))
                return;

            that.addClass('selected');
            patternObj.countbox(1);
        } else {
            that.removeClass('selected');
            patternObj.countbox(0);
        }
    });

    $('.shift-list li ').click(function () {
        var that = $(this);
        if (!that.hasClass('selected')) {
            that.addClass('selected');
        } else {
            that.removeClass('selected');
        }
    });

    $('.shiftCln').click(function () {
        $('.addForm').slideUp(function () {
            $('.all_shift_wrp').slideDown();
            $('.addBtnWrp').slideDown();
            //$('.userShiftList').fadeIn();
        });
    });

    $('.addNew').click(function () {
        $('.addBtnWrp').slideUp(function () {
            $('.addForm').slideDown();
            $('.all_shift_wrp').slideUp();
            //$('.userShiftList').fadeOut();
        });
    });


    $('.pattenSave').click(function () {
        console.log(patternObj.getAll());
    });

    //Normal Calender Close event
    $('.normal_cln .sf-close').click(function () {
        var that = $(this);

    });


    //Pattern Calender Close event
    $(document).on('click', '.pattern_cln .sf-close', function () {
        var that = $(this);
        var parentDate = that.parents('.date ');
        parentDate.removeClass('assigned');
        parentDate.removeClass('selected');
        parentDate.removeAttr('data-ptn-id');

        patternObj.addPattern();
    });


    $('.shift-list li').click(function () {

        if (!$('.pattern_cln').hasClass('active'))
            return;

        var patternId = $(this).attr('id');
        var letter = $('#' + patternId).find('.sf-label .shift-type').html();

        $('.pattern_cln .date').each(function () {
            if ($(this).hasClass('selected') && !$(this).attr('data-ptn-id')) {

                $(this).addClass('assigned');
                $(this).attr('data-ptn-id', patternId);

                $(this).find('.bottom').html('<div class="shift-type">' + letter + '<div class="sf-close"></div></div>');

                //Add data to array
                patternObj.addPattern();

            }
        });

    });


    function Pattern() {
        this.patternArray = new Array();
        this.pData = Array.from(document.querySelectorAll('.pattern_cln .date'));
        this.boxCount = 0;
    }

    Pattern.prototype.addPattern = function () {

        this.patternArray = new Array();
        // var itemCount = 0;
        this.pData.forEach(function (item) {

            if (item.classList.contains('selected') && item.getAttribute('data-ptn-id')) {
                var dateID = item.getAttribute('id');
                var ptnId = item.getAttribute('data-ptn-id');

                //var obj = {'dateId': dateID, 'ptnId': ptnId};
                var obj = dateID + '/' + ptnId;
                this.patternArray.push(obj);

                ///itemCount++;
                //console.log(itemCount);
//                if (this.boxCount === (itemCount)) {
//                    console.log(index);
//                    this.pData.forEach(function (item) {
//                        item.classList.remove('selected');
//                    });
//                }

            }

        }.bind(this));

    };

    Pattern.prototype.countbox = function (val) {
        if (val === 1) {
            this.boxCount++;
        } else {
            this.boxCount--;
        }
    };

    Pattern.prototype.getAll = function () {
        return this.patternArray;
    };

    Pattern.prototype.view = function () {
        this.patternArray.forEach(function (item) {
            console.log(item);
            for (var key in item) {
                console.log(item[key]);
            }
        });
    };


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


