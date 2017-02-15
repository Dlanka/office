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


                            <div class="lv_date normal" lv-date="2016-09-07" id="1">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging"  id="2">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon"  id="3">
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

                            <div class="lv_date normal" lv-date="2016-09-10" id="1">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging"  id="2">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon"  id="3">
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

                            <div class="lv_date normal" lv-date="2016-09-11" id="1">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging"  id="2">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon"  id="3">
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

                            <div class="lv_date normal" lv-date="2016-09-12" id="1">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging"  id="2">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon"  id="3">
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

                            <div class="lv_date normal" lv-date="2016-09-13" id="1">

                                <div class="lv_top">
                                    <span class="day">Mon</span>
                                    <div class="day_wrp">
                                        <span class="date">07</span>
                                        <span class="ic_full_sun"><i></i></span>
                                    </div>
                                </div>

                                <div class="lv_bottom">
                                    <div class="morging"  id="2">
                                        <div><i></i></div>
                                        <p>Morning</p>
                                        <div class="time">
                                            <span>08:00</span>
                                            <span class="space">-</span>
                                            <span>12:00</span>
                                        </div>
                                    </div>
                                    <div class="afternoon"  id="3">
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


    function Leaves() {

        //final output
        this.arrLeave = [];
    }


    Leaves.prototype.add = function (obj) {
        console.log('=============================');
        console.log(obj);
        console.log('=============================');
        if (!obj)
            return;
        
//        if(this.indexOf(obj)){}
//        this.arrLeave.push(obj);
        console.log('Index Of ' + this.indexOf(obj));

//         this.arrLeave.push(obj);
        if (this.arrLeave.length === 0) {
            this.arrLeave.push(obj);
            console.log('le 0');

        } else if (!this.isAvalible(obj)) {
            console.log('avalible');
            //this.remove(1);
            this.arrLeave.push(obj);
        }
        console.log(this.arrLeave);
        this.remove(this.indexOf(obj));
        console.log(this.arrLeave);
    };

    Leaves.prototype.remove = function (obj) {

        this.arrLeave.slice(this.arrLeave.indexOf(obj),-1);

    };

    Leaves.prototype.isAvalible = function (obj) {

        if (!obj)
            return;

        for (var i = 0; i < this.arrLeave.length; i++) {
            if (this.arrLeave[i].date === obj.date) {

                return true;

            }
        }

    };

    Leaves.prototype.indexOf = function (obj) {
        for (var i = 0; i < this.arrLeave.length; i++) {
            if (this.arrLeave[i].date === obj.date) {
                return i;
            }
        }
    };

    Leaves.prototype.getLeaves = function () {
        return this.arrLeave;
    };

    //create leave instance
    var leave = new Leaves();


    $('.lv_date').on('click', function (e) {

        $(e.target).find('.morging').removeClass('on');
        $(e.target).find('.afternoon').removeClass('on');


        if (!$(e.target).hasClass('holiday') || !$(e.target).hasClass('not-scheduled')) {

            var l_date = $(e.target).attr('lv-date');
            alert('top ' + l_date);
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

                var obj = {
                    'id': $(e.target).attr('id'),
                    'date': l_date
                };

                leave.add(obj);

            } else if ($(e.target).hasClass('leave') && $(e.target).hasClass('off')) {

                $(e.target).removeClass('off');
                $(e.target).addClass('on');
            }


        }


    });

    $('.morging').on('click', function () {

        if ($(this).closest('.lv_date').hasClass('holiday') || $(this).closest('.lv_date').hasClass('not-scheduled'))
            return false;

        var l_date = $(this).closest('.lv_date').attr('lv-date');

        if ($(this).closest('.lv_date').hasClass('normal')) {
            $(this).closest('.lv_date').removeClass('normal');
            $(this).closest('.lv_date').addClass('leave').addClass('off');
            $(this).addClass('on');

            var obj = {
                'id': $(this).attr('id'),
                'date': l_date
            };

            leave.add(obj);

        } else if ($(this).hasClass('on')) {
            $(this).closest('.lv_date').addClass('normal');
            $(this).closest('.lv_date').removeClass('leave').removeClass('off');
            $(this).removeClass('on');
        }

        $(this).closest('.lv_date').removeClass('on').addClass('off');
        $(this).nextAll('.afternoon').removeClass('on');

        $(this).addClass('on');






    });

    $('.afternoon').on('click', function () {

        if ($(this).closest('.lv_date').hasClass('holiday') || $(this).closest('.lv_date').hasClass('not-scheduled'))
            return false;

        var l_date = $(this).closest('.lv_date').attr('lv-date');

        if ($(this).closest('.lv_date').hasClass('normal')) {
            $(this).closest('.lv_date').removeClass('normal');
            $(this).closest('.lv_date').addClass('leave').addClass('off');
            $(this).addClass('on');

            var obj = {
                'id': $(this).attr('id'),
                'date': l_date
            };

            leave.add(obj);

        } else if ($(this).hasClass('on')) {

            $(this).closest('.lv_date').addClass('normal');
            $(this).closest('.lv_date').removeClass('leave').removeClass('off');
            $(this).removeClass('on');
        }

        $(this).closest('.lv_date').removeClass('on').addClass('off');
        $(this).prevAll('.morging').removeClass('on');

        $(this).addClass('on');

    });

    console.log(leave.getLeaves());
</script>
<!-- ===========================================================================
        Backend Script 
============================================================================ -->
