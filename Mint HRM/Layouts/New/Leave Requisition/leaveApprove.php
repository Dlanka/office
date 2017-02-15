<?php
// Leave Approve
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
?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="c-search-wrapper">
            <div class="c-search-content">

                <div class="c-search-item ">
                    <div class="col_1">          
                        <select>
                            <option value="Selecte">Select</option>
                        </select>
                    </div>
                    <div class="col_2">
                        <input type="text" data-language="en" data-position="bottom left" placeholder="" onkeyup="" name="" class=""> 
                    </div>
                    <div class="col_3">
                        <button onclick="" type="button" class="btn-search"></button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row mb-10">
    <div class="col-lg-12">
        <div class="st_note left">
            <span class="st_leave"></span>
            Leave
        </div>
        <div class="st_note left">
            <span class="st_holiday"></span>
            Holiday
        </div>
        <div class="st_note left">
            <span class="st_not-schd"></span>
            Not Apply
        </div>
    </div>
</div>

<div class="row">

    <div class="col-lg-12">                    
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">
                    <div class="top-details">

                        <div class="left-b col-md-4">

                            <div class="details-block">
                                <div class="img-wrp--35">
                                    <img alt="Employee Image" src="<?php echo Yii::app()->baseUrl ?>/uploads/empProfile/35/default.png" class="user-img">                            </div>
                                <h5 class="u-name ml-15">
                                    Darshani Udayanga                                              
                                </h5>
                            </div>
                        </div>

                        <div class="right-b col-md-8">
                            <div class="row t-dtl-wrp">
                                <div class="col-md-6">
                                    <h5 class="details">2 Day(s)</h5>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="details">Annual</h5>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body space-box">
                    <div class="row form-row">
                        <div class="col-md-4">
                            <div class="details-block">
                                <div class="img-wrp--35">
                                    <img alt="Employee Image" src="<?php echo Yii::app()->baseUrl ?>/uploads/empProfile/35/default.png" class="user-img">
                                </div>
                                <h5 class="u-name ml-15 up_case">
                                    Darshani Udayanga                                              
                                </h5>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-4">
                                    <h6 class="title t_text">Apply Date & Count</h6>
                                    <h5 class="details">
                                        <span>08 Feb 2016</span>
                                        <span class="ts_2">-</span>
                                        <span class="text-red">2.5 Day(s)</span>
                                    </h5>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="title t_text">Leave Type</h6>
                                    <h5 class="details"><span>Annual</span></h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="img-border-35">
                                        <div class="img-wrp--35">
                                            <a href="#">
                                                <span>
                                                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png" >
                                                </span> 
                                            </a>
                                        </div>
                                    </div>
                                    <h5 class="coverup">
                                        Coverup                                            
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-row">
                        <div class="col-md-6">
                            <h3 class="days">2.5<span>Day(s)</span></h3>
                        </div>
                        <!--                        <div class="col-md-6">
                                                    <div class="date_action">
                                                        <span>Sep. 2016</span>
                                                        <div class="but-wrp">
                                                            <button type="button" class="next"></button>
                                                            <button type="button" class="prev"></button>
                                                        </div>
                                                    </div>
                                                </div>-->
                    </div>

                    <div class="row ">
                        <div class="col-md-12">
                            <div  class="lv_calender">


                                <div class="lv_date leave on">

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon">
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
                                <div class="lv_date leave on">

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon">
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

                                <div class="lv_date holiday on">

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon">
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

                                <div class="lv_date not-scheduled on">

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon">
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
                                <div class="lv_date normal">

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon">
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
                                <div class="lv_date normal">

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon">
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
                                <div class="lv_date normal">

                                    <div class="lv_top">
                                        <span class="day">Mon</span>
                                        <div class="day_wrp">
                                            <span class="date">07</span>
                                            <span class="ic_full_sun"><i></i></span>
                                        </div>
                                    </div>

                                    <div class="lv_bottom">
                                        <div class="morging">
                                            <div><i></i></div>
                                            <p>Morning</p>
                                            <div class="time">
                                                <span>08:00</span>
                                                <span class="space">-</span>
                                                <span>12:00</span>
                                            </div>
                                        </div>
                                        <div class="afternoon">
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

                    <div class="row mt-15">
                        
                        <div class="col-md-3 ac_wrp">
                            <div class="row">
                                <!--Title-->
                                <div class="col-md-12">
                                    <h6 class="red font-14 "><i></i>03<span class="dark">&nbsp;/&nbsp;12</span></h6>
                                </div>

                            </div>

                            <div class="row contents">
                                <div class="col-md-12">
                                    <ul class="leave_list">
                                        <li>
                                            <div class="img-block">
                                                <div class="img-wrp--35">
                                                    <img class="user-img" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/35/default.png" alt="Employee Image">
                                                </div>
                                            </div>
                                            <h5 class="u-name">
                                                Darshani Udayanga                                              
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-3 ac_wrp">
                            <div class="row">
                                <!--Title-->
                                <div class="col-md-12">
                                    <h6 class="red font-14 "><i></i>03<span class="dark">&nbsp;/&nbsp;12</span></h6>
                                </div>

                            </div>

                            <div class="row contents">
                                <div class="col-md-12">
                                    <ul class="leave_list">
                                        <li>
                                            <div class="img-block">
                                                <div class="img-wrp--35">
                                                    <img class="user-img" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/35/default.png" alt="Employee Image">
                                                </div>
                                            </div>
                                            <h5 class="u-name">
                                                Darshani Udayanga                                              
                                            </h5>
                                        </li>
                                        <li>
                                            <div class="img-block">
                                                <div class="img-wrp--35">
                                                    <img class="user-img" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/35/default.png" alt="Employee Image">
                                                </div>
                                            </div>
                                            <h5 class="u-name">
                                                Darshani Udayanga                                              
                                            </h5>
                                        </li>
                                        <li>
                                            <div class="img-block">
                                                <div class="img-wrp--35">
                                                    <img class="user-img" src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/35/default.png" alt="Employee Image">
                                                </div>
                                            </div>
                                            <h5 class="u-name">
                                                Darshani Udayanga                                              
                                            </h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!--<div class="col-lg-12 contert-wrapper ">                    
    <div class="row">
        <div class="col-md-12 header-with-mn">
            <div class="row">
                <h1 class="col-md-11 title">Leave Approve</h1>
            </div>
        </div>

    </div>



    <div class="col-md-12">
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
                        <input type="text" class="datepick" data-position = "bottom left" data-language = "en">
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
                        <div  class="lv_calender">


                            <div class="lv_date leave on">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon">
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
                            <div class="lv_date leave on">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon">
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

                            <div class="lv_date holiday on">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon">
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

                            <div class="lv_date not-scheduled on">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon">
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
                            <div class="lv_date normal">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon">
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
                            <div class="lv_date normal">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon">
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
                            <div class="lv_date normal">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon">
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
                                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png" >
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
                                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png" >
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
                                                <img src="<?php echo Yii::app()->request->baseUrl; ?>/uploads/empProfile/50/default.png" >
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
                        <button type="button" class="bx-but bx-save">Apply</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>-->


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

    $('.lv_date').on('click', function (e) {

        $(e.target).find('.morging').removeClass('on');
        $(e.target).find('.afternoon').removeClass('on');


        if (!$(e.target).hasClass('holiday') || !$(e.target).hasClass('not-scheduled')) {

            if ($(e.target).hasClass('leave')) {
                if ($(e.target).hasClass('off')) {
                    $(e.target).removeClass('off');
                    $(e.target).addClass('on');

                } else {
                    $(e.target).removeClass('leave');
                    $(e.target).removeClass('on');
                    $(e.target).addClass('normal');
                }

            } else if ($(e.target).hasClass('normal')) {
                $(e.target).removeClass('normal');
                $(e.target).addClass('leave');
                $(e.target).addClass('on');

            } else if ($(e.target).hasClass('leave') && $(e.target).hasClass('off')) {

                $(e.target).removeClass('off');
                $(e.target).addClass('on');
            }
        }


    });

    $('.morging').on('click', function () {
        if ($(this).closest('.lv_date').hasClass('holiday') || $(this).closest('.lv_date').hasClass('not-scheduled'))
            return false;

        if ($(this).closest('.lv_date').hasClass('normal')) {
            $(this).closest('.lv_date').removeClass('normal');
            $(this).closest('.lv_date').addClass('leave').addClass('off');
            $(this).addClass('on');
        }

        $(this).closest('.lv_date').removeClass('on').addClass('off');
        $(this).nextAll('.afternoon').removeClass('on');

        $(this).addClass('on');


    });

    $('.afternoon').on('click', function () {

        if ($(this).closest('.lv_date').hasClass('holiday') || $(this).closest('.lv_date').hasClass('not-scheduled'))
            return false;

        if ($(this).closest('.lv_date').hasClass('normal')) {
            $(this).closest('.lv_date').removeClass('normal');
            $(this).closest('.lv_date').addClass('leave').addClass('off');
            $(this).addClass('on');
        }

        $(this).closest('.lv_date').removeClass('on').addClass('off');
        $(this).prevAll('.morging').removeClass('on');

        $(this).addClass('on');


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
                $(this).closest('.box-head').find('.top-details .details-block img').fadeTo('slow', 0).css('visibility', ' hidden');
                $(this).closest('.box-head').find('.top-details .right-b,.top-details .details-block').fadeTo('fast', 0).css('visibility', ' hidden');
                $(this).closest('.tab-box').parent('.card-content-wrp').addClass('on');
                $(this).closest('.tab-box').find('.box-body').slideDown('fast', function () {
                    $(this).closest('.tab-box').find('.box-body .user-wrp .img-wrp--80,.box-body .emp-box-details,.box-body .u-name').fadeTo('slow', 1);
                });
                //thisA.closest('.box-head').find('.top-details .left-b').fadeTo('slow', 1).addClass('bg-blue');
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box').fadeTo('fast', 1);

            } else {
                //               Slide Up
                $(this).removeClass('btn-expand-down');
                $(this).closest('.tab-box').parent('.card-content-wrp').removeClass('on');
                $(this).closest('.tab-box').find('.box-body').fadeTo('fast', 0, function () {
                    $(this).closest('.tab-box').find('.box-body').slideUp('slow', function () {
                        thisA.closest('.box-head').find('.top-details .left-b').fadeTo('slow', 1);
                        thisA.closest('.box-head').find('.top-details .right-b,.top-details .details-block').fadeTo('slow', 1).css('visibility', ' visible');
                        thisA.closest('.box-head').find('.top-details .details-block img').fadeTo('slow', 1).css('visibility', ' visible');
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
