<?php
// Leave Approve
//==============================================================================
//      CSS 
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/leave/leave.css', 'screen');
// Accrodion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');
//Popup
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/popup.css', 'screen');
//==============================================================================
//      Plugins CSS
//==============================================================================
//datepicker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');
//Lc Swirtch
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/lcSwitch/lc_switch.css', 'screen');
//==============================================================================
//      JS
//==============================================================================
// form
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);
// Approve
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/leave/approve.js', CClientScript::POS_HEAD);

//==============================================================================
//      Plugins JS
//==============================================================================
// Date picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);
//LC Switch
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/lcSwitch/lc_switch.min.js', CClientScript::POS_HEAD);
?>

<!--Pop up modal for image crop-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content popup">
            <div class="modal-header">
                <button type="button" class="p-close" data-dismiss="modal" aria-label="Close">
                    <span>
                        <svg version="1.1" id="Layer_1"  x="0px" y="0px" width="15px" height="15px" viewBox="2.5 2.5 15 15"  >
                        <g>
                        <g>
                        <path  d="M17.373,3.471l-0.845-0.842L10,9.159l-6.529-6.53L2.628,3.471l6.529,6.53l-6.529,6.528l0.842,0.842
                               L10,10.844l6.529,6.527l0.844-0.84l-6.53-6.53L17.373,3.471z"/>
                        </g>
                        </g>
                        </svg>
                    </span>
                </button>
                <h4 class="modal-title" >Company Logo upload</h4>
            </div>
            <div class="modal-body">
                <!--Image crop-->
                <h2>Body</h2>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    <button type="button" class="bx-but bx-save export">Save</button>
                </div>
                <div class="col-lg-12">
                    <!--Massage show here-->
                    <div class="message logoUp"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="c-search-wrapper">
            <div class="c-search-content">
                <div class="c-search-item set-2">
                    <div class="col_1">
                        <input type="text" data-language="en" data-position="bottom left" placeholder="" onkeyup=""
                               name="" class="">
                    </div>
                    <div class="col_3">
                        <button onclick="" type="button" class="btn-search"></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="row mb-10">-->
<!--    <div class="col-lg-12">-->
<!--        <div class="st_note left">-->
<!--            <span class="st_leave"></span>-->
<!--            Leave-->
<!--        </div>-->
<!--        <div class="st_note left">-->
<!--            <span class="st_holiday"></span>-->
<!--            Holiday-->
<!--        </div>-->
<!--        <div class="st_note left">-->
<!--            <span class="st_not-schd"></span>-->
<!--            Not Apply-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="row">

    <div class="col-lg-12">
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">
                    <div class="top-details">

                        <div class="left-b col-md-4">

                            <div class="details-block">
                                <div class="img-wrp--35">
                                    <img alt="Employee Image"
                                         src="<?php echo Yii::app()->baseUrl ?>/uploads/empProfile/35/default.png"
                                         class="user-img"></div>
                                <h5 class="u-name ml-15">
                                    Darshani Udayanga
                                </h5>
                            </div>
                        </div>

                        <div class="right-b col-md-8">

                        </div>

                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body space-box">
                    <div class="row top-sps">
                        <div class="col-md-12">

                            <!--Loop goes here-->

                            <div class="ui_accordion">
                                <a href="x" class="ui-link">
                                    <h3 class="ui-head">
                                        <span>08 Feb 2016</span>
                                        <span class="ts_2">-</span>
                                        <span class="text-red">2.5 Day(s)</span>
                                    </h3>
                                </a>
                                <div class="ui-box-wrp">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h6 class="title t_text">Leave Type</h6>
                                                    <h5 class="details"><span>Annual</span></h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="title t_text">Purpose</h6>
                                                    <h5 class="details">Lorum ipsum Lorum ipsum Lorum ipsum Lorum
                                                        ipsum</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 cover_up">
                                            <div class="row">
                                                <h6 class="title t_text col-md-12">Cover up</h6>
                                            </div>
                                            <div class="img-border-35">
                                                <div class="img-wrp--35">
                                                    <a href="#">
                                                <span>
                                                    <img
                                                        src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png">
                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="img-border-35">
                                                <div class="img-wrp--35">
                                                    <a href="#">
                                                <span>
                                                    <img
                                                        src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png">
                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="img-border-35">
                                                <div class="img-wrp--35">
                                                    <a href="#">
                                                <span>
                                                    <img
                                                        src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png">
                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row lv_date_wrp">
                                        <div class="col-md-8">
                                            <div class="leave_box_wrp">
                                                <h4 class="top-date">
                                                    <span class="b_date">03 Jun 2016</span>
                                                    <div class="lv_cn">12</div>

                                                    <!--Leave list-->
                                                    <div class="leave-list-wrap">

                                                        <ul>
                                                            <li>
                                                                <div>
                                                                    <div class="img-wrp--35">
                                                                        <a href="#">
                                                                        <span>
                                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/35/default.png">
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h5 class="u-name ml-15">Darshani Udayanga</h5>
                                                            </li>
                                                            <li>
                                                                <div>
                                                                    <div class="img-wrp--35">
                                                                        <a href="#">
                                                                        <span>
                                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/35/default.png">
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h5 class="u-name ml-15">Darshani Udayanga</h5>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </h4>
                                                <div class="lv_box on">
                                                    <div class="morging on">
                                                        <div><i></i></div>
                                                        <p>Morning</p>
                                                    </div>
                                                    <div class="afternoon">
                                                        <div><i></i></div>
                                                        <p>Afternoon</p>
                                                    </div>
                                                </div>
                                                <div class="chbx_wrp">
                                                    <input type="checkbox" class="lv_check">
                                                </div>
                                            </div>

                                            <div class="leave_box_wrp">
                                                <h4 class="top-date">
                                                    <span class="b_date">03 Jun 2016</span>
                                                    <div class="lv_cn">12</div>
                                                </h4>
                                                <div class="lv_box on">
                                                    <div class="morging">
                                                        <div><i></i></div>
                                                        <p>Morning</p>
                                                    </div>
                                                    <div class="afternoon">
                                                        <div><i></i></div>
                                                        <p>Afternoon</p>
                                                    </div>
                                                </div>
                                                <div class="chbx_wrp">
                                                    <input type="checkbox" class="lv_check">
                                                </div>
                                            </div>

                                            <div class="leave_box_wrp">
                                                <h4 class="top-date">
                                                    <span class="b_date">03 Jun 2016</span>
                                                    <div class="lv_cn">12</div>
                                                </h4>
                                                <div class="lv_box on">
                                                    <div class="morging">
                                                        <div><i></i></div>
                                                        <p>Morning</p>
                                                    </div>
                                                    <div class="afternoon">
                                                        <div><i></i></div>
                                                        <p>Afternoon</p>
                                                    </div>
                                                </div>
                                                <div class="chbx_wrp">
                                                    <input type="checkbox" class="lv_check">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                                        <span class="disable">27</span>
                                                        <span class="disable">28</span>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Reason">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="bx-but bx-exit">Reject</button>
                                            <button type="button" class="bx-but bx-save">Accept</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ui_accordion">
                                <a href="x" class="ui-link">
                                    <h3 class="ui-head">
                                        <span>08 Feb 2016</span>
                                        <span class="ts_2">-</span>
                                        <span class="text-red">2.5 Day(s)</span>
                                    </h3>
                                </a>
                                <div class="ui-box-wrp">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <h6 class="title t_text">Leave Type</h6>
                                                    <h5 class="details"><span>Annual</span></h5>
                                                </div>
                                                <div class="col-md-9">
                                                    <h6 class="title t_text">Purpose</h6>
                                                    <h5 class="details">Lorum ipsum Lorum ipsum Lorum ipsum Lorum
                                                        ipsum</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 cover_up">
                                            <div class="row">
                                                <h6 class="title t_text col-md-12">Cover up</h6>
                                            </div>
                                            <div class="img-border-35">
                                                <div class="img-wrp--35">
                                                    <a href="#">
                                                <span>
                                                    <img
                                                        src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png">
                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="img-border-35">
                                                <div class="img-wrp--35">
                                                    <a href="#">
                                                <span>
                                                    <img
                                                        src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png">
                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="img-border-35">
                                                <div class="img-wrp--35">
                                                    <a href="#">
                                                <span>
                                                    <img
                                                        src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png">
                                                </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row lv_date_wrp">
                                        <div class="col-md-8">
                                            <div class="leave_box_wrp">
                                                <h4 class="top-date">
                                                    <span class="b_date">03 Jun 2016</span>
                                                    <div class="lv_cn">12</div>

                                                    <!--Leave list-->
                                                    <div class="leave-list-wrap">

                                                        <ul>
                                                            <li>
                                                                <div>
                                                                    <div class="img-wrp--35">
                                                                        <a href="#">
                                                                        <span>
                                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/35/default.png">
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h5 class="u-name ml-15">Darshani Udayanga</h5>
                                                            </li>
                                                            <li>
                                                                <div>
                                                                    <div class="img-wrp--35">
                                                                        <a href="#">
                                                                        <span>
                                                                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/35/default.png">
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <h5 class="u-name ml-15">Darshani Udayanga</h5>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </h4>
                                                <div class="lv_box on">
                                                    <div class="morging on">
                                                        <div><i></i></div>
                                                        <p>Morning</p>
                                                    </div>
                                                    <div class="afternoon">
                                                        <div><i></i></div>
                                                        <p>Afternoon</p>
                                                    </div>
                                                </div>
                                                <div class="chbx_wrp">
                                                    <input type="checkbox" class="lv_check">
                                                </div>
                                            </div>

                                            <div class="leave_box_wrp">
                                                <h4 class="top-date">
                                                    <span class="b_date">03 Jun 2016</span>
                                                    <div class="lv_cn">12</div>
                                                </h4>
                                                <div class="lv_box on">
                                                    <div class="morging">
                                                        <div><i></i></div>
                                                        <p>Morning</p>
                                                    </div>
                                                    <div class="afternoon">
                                                        <div><i></i></div>
                                                        <p>Afternoon</p>
                                                    </div>
                                                </div>
                                                <div class="chbx_wrp">
                                                    <input type="checkbox" class="lv_check">
                                                </div>
                                            </div>

                                            <div class="leave_box_wrp">
                                                <h4 class="top-date">
                                                    <span class="b_date">03 Jun 2016</span>
                                                    <div class="lv_cn">12</div>
                                                </h4>
                                                <div class="lv_box on">
                                                    <div class="morging">
                                                        <div><i></i></div>
                                                        <p>Morning</p>
                                                    </div>
                                                    <div class="afternoon">
                                                        <div><i></i></div>
                                                        <p>Afternoon</p>
                                                    </div>
                                                </div>
                                                <div class="chbx_wrp">
                                                    <input type="checkbox" class="lv_check">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
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
                                                        <span class="disable">27</span>
                                                        <span class="disable">28</span>
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
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Reason">
                                        </div>
                                        <div class="col-md-12">
                                            <button type="button" class="bx-but bx-exit">Reject</button>
                                            <button type="button" class="bx-but bx-save">Accept</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>

            <button data-target="#myModal2" data-toggle="modal" type="button" class="bx-but bx-default " >Show</button>
        </div>

    </div>

</div>

<!-- ===========================================================================
        Plugin Script
============================================================================ -->
<!--Date picker-->
<script>
    $('.datepick').datepicker({
        autoClose: true,
        language: 'en'

    });
</script>

<!--LC Switch-->
<script>

    $('.lv_check').lc_switch('YES', 'NO');

</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->

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
<!-- ===========================================================================
        Backend Script 
============================================================================ -->
