<?php
//==============================================================================
//      CSS 
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/leave/leave.css', 'screen');

//==============================================================================
//      Plugins CSS 
//==============================================================================
//datepicker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
//==============================================================================
//      JS 
//==============================================================================
// form
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);
//Leave
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/leave/app.js', CClientScript::POS_HEAD);
//==============================================================================
//      Plugins JS
//==============================================================================
// Date picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);
// mScroll Bar
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/mScrollbar/jquery.mCustomScrollbar.concat.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<div class="col-lg-12 contert-wrapper ">
    <div class="row">
        <div class="col-md-12 header-with-mn">
            <div class="row">
                <h1 class="col-md-11 title">Leave</h1>

                <!--                <div class="col-md-1">
                                    Bar Menu
                                    <div id="menu-ic" class="open-menu">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>                  
                                </div>-->
            </div>
        </div>

        <!--Sub menu container-->
        <?php //$this->renderPartial('subMenu', array());  ?>

    </div>

    <div class="col-md-12 mt-30">
        <div class="row">

            <div class="col-md-12">
                <div class="row form-row">

                    <div class="col-md-4 input-layout">
                        <select>
                            <option value=""></option>
                        </select>
                        <label>Leave Type</label>
                    </div>

                    <div class="col-md-4 input-layout">
                        <input type="text">
                        <label>Leave Purpose</label>
                    </div>

                    <div class="col-md-4 input-layout">
                        <input type="text" class="datepick" data-position="bottom left" data-language="en">
                        <label>Leave Start Date</label>
                    </div>

                </div>

                <div class="row form-row">
                    <div class="col-md-6">
                        <h3 class="days">2.5<span>Day(s)</span></h3>
                    </div>
                    <div class="col-md-6">
                        <div class="date_action">
                            <span>Sep. 2016</span>
                            <div class="but-wrp">
                                <button type="button" class="next"></button>
                                <button type="button" class="prev"></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-12">
                        <div class="calender_wrp">
                            <div class="lv_calender">


                                <div class="dates lv_date normal valid" lv-date="2016-09-07" >

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging half-m valid" id="2">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon half-a valid" id="3">
                                            <div><i></i></div>
                                            <p>Afternoon</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="dates lv_date normal valid" lv-date="2016-09-08">

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging valid">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon valid">
                                            <div><i></i></div>
                                            <p>Afternoon</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="dates lv_date normal valid" lv-date="2016-09-09">

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging valid">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon valid">
                                            <div><i></i></div>
                                            <p>Afternoon</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="dates lv_date normal valid" lv-date="2016-09-10" >

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging valid" id="2">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon valid" id="3">
                                            <div><i></i></div>
                                            <p>Afternoon</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="dates lv_date normal valid" lv-date="2016-09-11" >

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging valid" id="2">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon valid" id="3">
                                            <div><i></i></div>
                                            <p>Afternoon</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="dates lv_date normal valid" lv-date="2016-09-11" >

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging valid" id="2">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon valid" id="3">
                                            <div><i></i></div>
                                            <p>Afternoon</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="dates lv_date normal valid" lv-date="2016-09-11" >

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging valid" id="2">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon valid" id="3">
                                            <div><i></i></div>
                                            <p>Afternoon</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="dates lv_date normal valid" lv-date="2016-09-11" >

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging valid" id="2">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon valid" id="3">
                                            <div><i></i></div>
                                            <p>Afternoon</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="dates lv_date normal valid weekend" lv-date="2016-09-12" >

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging valid" id="2">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon valid" id="3">
                                            <div><i></i></div>
                                            <p>Afternoon</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="dates lv_date normal " lv-date="2016-09-13" >

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging valid" id="2">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon valid" id="3">
                                            <div><i></i></div>
                                            <p>Afternoon</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-12">
                        <div class="st_note">
                            <span class="st_not-schd"></span>
                            Not Scheduled
                        </div>
                        <div class="st_note">
                            <span class="st_holiday"></span>
                            Holiday
                        </div>
                        <div class="st_note">
                            <span class="st_leave"></span>
                            Leave
                        </div>
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-12">
                        <h4 class="coverup">Cover Up</h4>
                        <ul class="coverup-list">
                            <li>
                                <div class="img-border">
                                    <div class="img-wrp--50">
                                        <a href="#">
                                            <span>
                                                <img
                                                    src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="tooltips">
                                    Natasha Gunawarana
                                </div>
                            </li>
                            <li>
                                <div class="img-border on">
                                    <div class="img-wrp--50">
                                        <a href="#">
                                            <span>
                                                <img
                                                    src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="tooltips">
                                    Natasha Gunawarana
                                </div>
                            </li>
                            <li>
                                <div class="img-border">
                                    <div class="img-wrp--50">
                                        <a href="#">
                                            <span>
                                                <img
                                                    src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png">
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="tooltips">
                                    Natasha Gunawarana
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-12">
                        <button type="button" class="bx-but bx-save apply">Apply</button>
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
    $('.datepick').datepicker({
        autoClose: true,
        language: 'en'

    });
</script>

<!-- ===========================================================================
        Custom Script 
============================================================================ -->
<script>

    var leave = new Leave(3);

    $('.apply').click(function () {
        console.log(leave.getLeaveData());
    });

</script>
<!-- ===========================================================================
        Backend Script 
============================================================================ -->

<!--mScrolBar-->
<script>
    (function () {
        $(window).on("load", function () {
            $(".calender_wrp").mCustomScrollbar({
                theme: 'dark-3',
                axis:"x"
            });
        });
    })();
</script>