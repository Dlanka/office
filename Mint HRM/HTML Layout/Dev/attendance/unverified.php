<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl . '/css_new/normalize.css' ?>">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl . '/css_new/common.css' ?>">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl . '/css_new/button.css' ?>">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl . '/css_new/form.css' ?>">
<!--<link type="text/css" rel="stylesheet" href="--><?php //echo Yii::app()->baseUrl . '/css_new/attendance/edit.css' ?><!--">-->
<!--<link type="text/css" rel="stylesheet" href="--><?php //echo Yii::app()->baseUrl . '/css_new/attendance/approv.css' ?><!--">-->
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl . '/css_new/attendance/unverifid.css' ?>">

<!--Datepicker -->
<link type="text/css" rel="stylesheet"
      href="<?php echo Yii::app()->request->baseUrl; ?>/css_new/air-datepicker/datepicker.css">
<!--Time picker-->
<link type="text/css" rel="stylesheet"
      href="<?php echo Yii::app()->request->baseUrl; ?>/css_new/clockpicker/bootstrap-clockpicker.css">
<!--Datepicker-->
<script type="text/javascript"
        src="<?php echo Yii::app()->request->baseUrl; ?>/js_new/air-datepicker/datepicker.min.js"></script>
<script type="text/javascript"
        src="<?php echo Yii::app()->request->baseUrl; ?>/js_new/air-datepicker/i18n/datepicker.en.js"></script>
<!--Time picker-->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js_new/clockpicker/bootstrap-clockpicker.min.js"
        type="text/javascript"></script>


<!--Breadcrumb-->
<div class="bread-crumb-wrp with-mb">
    <a href="#">Attendance</a>
    <a>My Attendance</a>
</div>


<form id="search-form">
    <div class="row">
        <div class="col-md-12">

            <div class="c-search-wrapper">
                <div class="c-search-content">

                    <div class="c-search-item set-2">
                        <div class="col_1">
                            <input type="text" id="empSearch" name="empSearch" onkeyup="search()">
                        </div>
                        <div class="col_2">
                            <button class="btn-search" type="button" onclick="search()"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="row">
    <div class="col-md-12">

        <div class="card-content-wrp">

            <div class="tab-box">
                <div class="box-head">
                    <div class="top-details">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="img-block">
                                            <div class="img-wrp--35">
                                                <?php echo Controller::showThumbnailById(1); ?>
                                            </div>
                                        </div>
                                        <h5 class="u-name ml-10">
                                            Sandun Maduranga
                                        </h5>
                                    </div>
                                    <h5 class="col-md-2 pt-10 text">56</h5>
                                </div>
                            </div>
                            <div class="col-md-4 pt-10">
                                <h5 class="col-md-12 text">2-In</h5>
                            </div>
                            <div class="col-md-4 pt-10">
                                <h5 class="col-md-12 text">1-Out</h5>
                            </div>

                        </div>

                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">

                    <div class="row mb-30">
                        <div class="col-md-12">
                            <!--header -->
                            <div class="row mb-15 mt-10 hd">
                                <div class="col-md-4">

                                    <div class="but-gruop-wrp uv_check">
                                        <label>
                                            <input type="checkbox">
                                            <span class=" check-box"></span>
                                            <span>Date & Shift </span>
                                        </label>
                                    </div>


                                </div>
                                <div class="col-md-3"><h6 class="title">In Time & Date</h6></div>
                                <div class="col-md-3"><h6 class="title">OutTime & Date</h6></div>
                                <div class="col-md-2"></div>
                            </div>

                            <!-- Loop goes here-->
                            <div class="row row-item">
                                <div class="col-md-4 pt-5">
                                    <div class="but-gruop-wrp in-block">
                                        <label>
                                            <input type="checkbox">
                                            <span class=" check-box"></span>
                                            <span></span>
                                        </label>
                                    </div>
                                    <h5 class="text date-text ">21 Jun 2016
                                        <span>&nbsp;(&nbsp;<span>8.00</span>&nbsp;-&nbsp;<span>17.00</span>&nbsp;)&nbsp;</span>
                                    </h5>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="text" class="date-pick">
                                        </div>
                                        <div class="col-md-5 location">
                                            <input type="text" class="time-pick">
                                            <span class="in_mobile">
                                                <p class="place">Siebel Avenue, Colombo 05</p>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="text" class="date-pick">
                                        </div>
                                        <div class="col-md-5 location">
                                            <input type="text" class="time-pick">
                                            <span class="in_mobile">
                                                <p class="place">Siebel Avenue, Colombo 05</p>
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button class="img-but img-reject"></button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <button class="bx-but bx-save" type="button">Accept</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>


<script>
    //    Date picker
    $('.date-pick').datepicker({
        language: 'en',
        dateFormat: 'd M',
        autoClose: true
    });

    //    Time picker
    $('.time-pick').clockpicker({
        autoclose: true,
        twelvehour: false
    });

</script>

<!--Accordion-->
<script>
    $(function () {
        $('.btn-expand-wrp a').on('click', function () {
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //silde Down
                $(this).addClass('btn-expand-down');
                $(this).closest('.tab-box').find('.box-body').slideDown();
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box');
                $(this).closest('.tab-box').find('.box-head .lb_time').show();
                $(this).closest('.tab-box').find('.box-head .text').hide();
                $(this).closest('.tab-box').parent('.card-content-wrp').addClass('on');
            } else {
                //Slide Up
                $(this).removeClass('btn-expand-down');
                $(this).closest('.tab-box').find('.box-body').slideUp('slow');
                $(this).closest('.tab-box ').find('.box-body').removeClass('active-box');
                $(this).closest('.tab-box').find('.box-head .lb_time').hide();
                $(this).closest('.tab-box').find('.box-head .text').show();
                $(this).closest('.tab-box').parent('.card-content-wrp').removeClass('on');
            }
            return false;
        });
    });
</script>

<script>
    $('.uv_check label').click(function () {

        console.log($(this).closest('.hd'));

        if ($(this).find('input[type="checkbox"]').is(':checked')) {

            $(this).closest('.hd').nextAll('.row-item').each(function () {
                $(this).find('input[type="checkbox"]').attr('checked',true);
            });

        } else {

            $(this).closest('.hd').nextAll('.row-item').each(function () {
                $(this).find('input[type="checkbox"]').attr('checked',false);
            });
        }
        
    })
</script>