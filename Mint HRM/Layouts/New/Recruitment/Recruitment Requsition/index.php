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
//Lc Switch
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/lcSwitch/lc_switch.css', 'screen');

//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/requisition.css', 'screen');
// Accrodion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');
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
//LC Switch
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/lcSwitch/lc_switch.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>


<!--Add Form-->
<div class="col-lg-12 contert-wrapper mb-30">
    <div class="row">
        <div class="col-md-12 header-with-mn">
            <div class="row">
                <h1 class="col-md-12 title">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/system/icon/emp/32/ic_32_basic-data.svg">
                    Recruitment Requsition
                </h1>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-30">
        <div class="row form-row">
            <div class="col-md-4 input-layout">
                <select name="" id="">
                    <option value=""></option>
                    <option value="1">Colombo</option>
                </select>
                <label for="">Department</label>
            </div>
            <div class="col-md-4 input-layout">
                <select name="" id="">
                    <option value=""></option>
                    <option value="1">UX Director</option>
                </select>
                <label for="">Designation</label>
            </div>
            <div class="col-md-4 input-layout">
                <input type="text" class="date-pick" data-position="bottom left">
                <label for="">To be close by</label>
            </div>
        </div>

        <div class="row form-row">
            <div class="col-md-8">
                <p class="details">Reporting to</p>
                <div class="row">

                    <!--Before Search-->
                    <div class="col-md-12">
                        <div class="emp-block mt-5">
                            <div class="img-border">
                                <div class="img-wrp--35">
                                    <img
                                        src="
                                        <?php echo Yii::app()->baseUrl; ?>/images/system/icon/recruitment/35/ic_35_emp.png"
                                        alt="">
                                </div>
                            </div>
                            <h5 class="u-name sc-text">Search and select supervisor </h5>
                        </div>
                    </div>

                    <!--After Search-->
                    <div class="col-md-6">
                        <div class="emp-block mt-5 search-emp">
                            <div class="img-border">
                                <div class="img-wrp--35 ">
                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                </div>
                            </div>
                            <h5 class="u-name">Natasha Gunawardana</h5>
                        </div>
                    </div>
                    <h5 class="col-md-6 emp-no">345</h5>

                </div>

                <!-- Search Area-->
                <div class="row mt-15">
                    <div class="col-md-12 sc-wrapper">
                        <i class="ic_search"></i>
                        <input type="text" class="input-search">
                    </div>
                </div>

                <!-- Emp list-->
                <div class="row">
                    <div class="col-md-12">
                        <ul class="sc-emp-list">
                            <li>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="emp-block mt-5 search-emp">
                                            <div class="img-border">
                                                <div class="img-wrp--35 ">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <h5 class="u-name">Natasha Gunawardana</h5>
                                        </div>
                                    </div>
                                    <h5 class="col-md-6 emp-no">345</h5>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="emp-block mt-5 search-emp">
                                            <div class="img-border">
                                                <div class="img-wrp--35 ">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <h5 class="u-name">Natasha Gunawardana</h5>
                                        </div>
                                    </div>
                                    <h5 class="col-md-6 emp-no">345</h5>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="emp-block mt-5 search-emp">
                                            <div class="img-border">
                                                <div class="img-wrp--35 ">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <h5 class="u-name">Natasha Gunawardana</h5>
                                        </div>
                                    </div>
                                    <h5 class="col-md-6 emp-no">345</h5>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="emp-block mt-5 search-emp">
                                            <div class="img-border">
                                                <div class="img-wrp--35 ">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <h5 class="u-name">Natasha Gunawardana</h5>
                                        </div>
                                    </div>
                                    <h5 class="col-md-6 emp-no">345</h5>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="emp-block mt-5 search-emp">
                                            <div class="img-border">
                                                <div class="img-wrp--35 ">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <h5 class="u-name">Natasha Gunawardana</h5>
                                        </div>
                                    </div>
                                    <h5 class="col-md-6 emp-no">345</h5>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="emp-block mt-5 search-emp">
                                            <div class="img-border">
                                                <div class="img-wrp--35 ">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <h5 class="u-name">Natasha Gunawardana</h5>
                                        </div>
                                    </div>
                                    <h5 class="col-md-6 emp-no">345</h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12 input-layout cmb-reason">
                        <select>
                            <option value=""></option>
                            <option value="1">New</option>
                            <option value="2">Replacement</option>
                        </select>
                        <label for="">Reason</label>
                    </div>
                    <div class="col-md-6 cmb-duration">
                        <select name="" id="">
                            <option value=""></option>
                            <option value="1">1 Month</option>
                            <option value="2">3 Month</option>
                        </select>
                    </div>

                </div>

                <div class="row">

                    <!--New Wrapper-->
                    <div class="col-md-12 newWrap ">
                        <div class="row">
                            <div class="col-md-12 input-layout radio-grp">
                                <label for="">Budgeted</label>
                                <input type="checkbox" class="lc_switch">
                            </div>
                            <div class="col-md-12 input-layout radio-grp">
                                <label for="">Create a new JD</label>
                                <input type="checkbox" class="lc_switch chb-JD">
                            </div>

                            <div class="col-md-12 JD_btnWrap">
                                <button class="bx-but bx-next btn-left" type="button">Create JD</button>
                            </div>

                        </div>
                    </div>

                    <!--Replace Wrapper-->
                    <div class="col-md-12 replaceWrap hide-area">

                        <div class="row resign-emp-wrp">
                            <div class="col-md-12 resign-emp-scroll">

                                <div class="emp-wrp ">
                                    <div class="resign-emp">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                        <div class="name-popup">
                                            Natasha Gunawardana
                                        </div>
                                    </div>
                                    <div class="resign-emp">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                        <div class="name-popup">
                                            Natasha Gunawardana
                                        </div>
                                    </div>
                                    <div class="resign-emp">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                        <div class="name-popup">
                                            Natasha Gunawardana
                                        </div>
                                    </div>
                                    <div class="resign-emp">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                        <div class="name-popup">
                                            Natasha Gunawardana
                                        </div>
                                    </div>
                                    <div class="resign-emp">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                        <div class="name-popup">
                                            Natasha Gunawardana
                                        </div>
                                    </div>
                                    <div class="resign-emp">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                        <div class="name-popup">
                                            Natasha Gunawardana
                                        </div>
                                    </div>
                                    <div class="resign-emp">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                        <div class="name-popup">
                                            Natasha Gunawardana
                                        </div>
                                    </div>
                                    <div class="resign-emp">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                        <div class="name-popup">
                                            Natasha Gunawardana
                                        </div>
                                    </div>
                                    <div class="resign-emp">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                        <div class="name-popup">
                                            Natasha Gunawardana
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Show after resign emp selected-->
                        <div class="row select-resign-emp">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="emp-block select-resign">
                                            <div class="img-border">
                                                <div class="img-wrp--35 ">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <h5 class="u-name">Natasha Gunawardana</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-1 mt-15">
                                        <button class="img-but img-edit"></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="step" data-step="step" class="ui_accordion edt">
                    <a href="#step" class="ui-link up-case">Infrastructure Requirement</a>
                    <div id="province" class="ui-box-wrp">
                        <div class="row mt-15 form-row">
                            <div class="col-md-3">
                                <div class="but-gruop-wrp">
                                    <label>
                                        <input type="checkbox">
                                        <span class=" check-box"></span>
                                        <span>Checkbox</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="but-gruop-wrp">
                                    <label>
                                        <input type="checkbox">
                                        <span class=" check-box"></span>
                                        <span>Checkbox</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="but-gruop-wrp">
                                    <label>
                                        <input type="checkbox">
                                        <span class=" check-box"></span>
                                        <span>Checkbox</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="but-gruop-wrp">
                                    <label>
                                        <input type="checkbox">
                                        <span class=" check-box"></span>
                                        <span>Checkbox</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="but-gruop-wrp">
                                    <label>
                                        <input type="checkbox">
                                        <span class=" check-box"></span>
                                        <span>Checkbox</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 textarea-layout">
                                <label for="">Additional Requirement</label>
                                <textarea class="ad-requirement" name="" id="" cols="30" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="row">
    <div class="col-md-12">

        <!--Loop goes here-->
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">
                    <div class="top-details">
                        <div class="plr-30 ptb-20 col-md-4 left">
                            <h5 class="details top-title">Job Description</h5>
                        </div>

                        <div class="plr-30 ptb-20 col-md-8 right">
                            <div class="row">
                                <div class="col-md-12"></div>
                            </div>
                        </div>

                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-4 left">
                        <div class="img-wrp--80 bg-l-white">
                            <div>
                                <?php echo Common::showEmployeeThumbnailx80(3) ?>
                            </div>
                        </div>
                        <h5 class="u-name name-white">
                            Nirmal Fernando
                        </h5>
                    </div>

                    <div class="col-md-8 right">
                        <div class="row scr-head">
                            <h6 class="col-md-4 title">Description</h6>
                            <h6 class="col-md-4 title tx-right">Current</h6>
                            <h6 class="col-md-4 title text-blue pr-15 tx-right">Proposed</h6>
                        </div>

                        <div class="row scr-body">
                            <h5 class="col-md-4 details">Basic Salary</h5>
                            <h5 class="col-md-4 details tx-right">100,000.00</h5>
                            <div class="col-md-4 pr-15">
                                <input type="text">
                            </div>
                        </div>
                        <div class="row scr-body">
                            <h5 class="col-md-4 details">Lorem Ipsum</h5>
                            <h5 class="col-md-4 details tx-right">20,000.00</h5>
                            <div class="col-md-4 pr-15">
                                <input type="text">
                            </div>
                        </div>
                        <div class="row scr-body">
                            <h5 class="col-md-4 details">Lorem Ipsum</h5>
                            <h5 class="col-md-4 details tx-right">5,000.00</h5>
                            <div class="col-md-4 pr-15">
                                <input type="text">
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">
                    <div class="top-details">
                        <div class="plr-30 ptb-20 col-md-4 left">
                            <h5 class="details top-title">Job Description</h5>
                        </div>

                        <div class="plr-30 ptb-20 col-md-8 right">
                            <div class="row">
                                <div class="col-md-12"></div>
                            </div>
                        </div>

                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-4 left">
                        <div class="img-wrp--80 bg-l-white">
                            <div>
                                <?php echo Common::showEmployeeThumbnailx80(3) ?>
                            </div>
                        </div>
                        <h5 class="u-name name-white">
                            Nirmal Fernando
                        </h5>
                    </div>

                    <div class="col-md-8 right">
                        <div class="row scr-head">
                            <h6 class="col-md-4 title">Description</h6>
                            <h6 class="col-md-4 title tx-right">Current</h6>
                            <h6 class="col-md-4 title text-blue pr-15 tx-right">Proposed</h6>
                        </div>

                        <div class="row scr-body">
                            <h5 class="col-md-4 details">Basic Salary</h5>
                            <h5 class="col-md-4 details tx-right">100,000.00</h5>
                            <div class="col-md-4 pr-15">
                                <input type="text">
                            </div>
                        </div>
                        <div class="row scr-body">
                            <h5 class="col-md-4 details">Lorem Ipsum</h5>
                            <h5 class="col-md-4 details tx-right">20,000.00</h5>
                            <div class="col-md-4 pr-15">
                                <input type="text">
                            </div>
                        </div>
                        <div class="row scr-body">
                            <h5 class="col-md-4 details">Lorem Ipsum</h5>
                            <h5 class="col-md-4 details tx-right">5,000.00</h5>
                            <div class="col-md-4 pr-15">
                                <input type="text">
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="col-md-12">
        <button class="bx-but bx-save">Apply</button>
    </div>
</div>

<!-- ===========================================================================
        Plugin Script
============================================================================ -->

<script>
    //        $(".resign-emp-scroll").mCustomScrollbar({
    //            theme: "minimal-dark",
    //            axis:"x"
    //        });
    //
    $(".sc-emp-list").mCustomScrollbar({
        theme: "minimal-dark"
    });

    //Date pick
    $('.date-pick').datepicker({
        language: 'en',
        autoClose: true
    });

    $('.lc_switch').lc_switch();

    $('body').delegate('.chb-JD', 'lcs-statuschange', function () {
        if ($(this).is(':checked')) {
            $('.JD_btnWrap').slideDown('fast');
        } else {
            $('.JD_btnWrap').slideUp('fast');
        }
    });

</script>

<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>

    $('.ui-link').on('click', function () {
        if (!$(this).hasClass('active-link')) {
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

    $('.cmb-duration').fadeOut('fast');

    $('.cmb-reason select').on('change', function () {

        var par = $(this).parent();

        if ($(this).find('option:selected').text() === "Replacement") {
            par.addClass('col-md-6');
            par.removeClass('col-md-12');
            par.next('.cmb-duration').fadeIn('fast');

            $('.newWrap').slideUp('fast', function () {
                $('.replaceWrap').slideDown('fast');
            });

        } else {
            par.next('.cmb-duration').fadeOut('fast', function () {
                par.removeClass('col-md-6');
                par.addClass('col-md-12');
            });

            $('.replaceWrap').slideUp('fast', function () {
                $('.newWrap').slideDown('fast');
            });
        }

    });

    $(function () {

        $('.box-body .right .row').fadeTo('slow', 0);
        $('.box-body .left .img-wrp--80,.box-body .left .name-white').fadeTo('slow', 0);

        $('.btn-expand-wrp a').on('click', function () {
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //silde Down
                $(this).addClass('btn-expand-down');
                $(this).closest('.tab-box').find('.box-head .right').fadeTo('fast', 0);
                $(this).closest('.tab-box').find('.box-head .left .top-title').fadeTo('fast', 0);
                thisA.closest('.tab-box').parents('.card-content-wrp').addClass('on');
                $(this).closest('.tab-box').find('.box-body').slideDown('fast', function () {
                    thisA.closest('.tab-box').find('.box-head .right').fadeTo('slow', 1);
                    thisA.closest('.tab-box').find('.box-head .right').addClass('on-right');
                    thisA.closest('.tab-box').find('.box-body .right .row').fadeTo('slow', 1);
                    thisA.closest('.tab-box').find('.box-body .left .img-wrp--80,.box-body .left .name-white').fadeTo('slow', 1);
                });
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box');

            } else {
                //Slide Up
                $(this).removeClass('btn-expand-down');

                thisA.closest('.tab-box').find('.box-body .right .row,.box-body .left .img-wrp--80,.box-body .left .name-white').fadeTo('slow', 0, function () {
                    thisA.closest('.tab-box').find('.box-head .right').fadeTo('fast', 0);
                    //thisA.closest('.tab-box').find('.box-head .left .top-title').fadeTo('fast', 0);
                    thisA.closest('.tab-box').find('.box-body').slideUp('slow', function () {
                        thisA.closest('.tab-box').find('.box-head .left .top-title').fadeTo('fast', 1);
                        thisA.closest('.tab-box').find('.box-head .right').fadeTo('fast', 1);
                        thisA.closest('.tab-box ').parents('.card-content-wrp').removeClass('on');
                        thisA.closest('.tab-box').find('.box-head .right').removeClass('on-right');
                    });
                });

                $(this).closest('.tab-box ').find('.box-body').removeClass('active-box');

            }
            return false;
        });
    });

</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->
