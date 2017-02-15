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
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/main.css', 'screen');

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

<div class="row btnWrp">
    <div class="col-md-12">
        <button class="but new addNew"><span></span>Add New</button>
    </div>
</div>

<!--Add Form-->
<div class="col-lg-12 contert-wrapper addForm mb-30">
    <div class="row">
        <div class="col-md-12 header-with-mn">
            <div class="row">
                <h1 class="col-md-12 title">
                    <img src="/hris/images/system/icon/emp/32/ic_32_basic-data.svg">
                    Manpower Plan
                </h1>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-30">
        <div class="row form-row">
            <div class="col-md-4 input-layout">
                <select name="" id="">
                    <option value=""></option>
                    <option value="1">User Experience</option>

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
                <select name="" id="">
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                </select>
                <label for="">No of Vacancy</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 input-layout">
                <select name="" id="">
                    <option value=""></option>
                    <option value="1">2016</option>
                    <option value="1">2017</option>
                    <option value="1">2018</option>

                </select>
                <label for="">Year</label>
            </div>
            <div class="col-md-4 input-layout">
                <select name="" id="">
                    <option value=""></option>
                    <option value="0">All</option>
                    <option value="1">Quarter 1</option>
                    <option value="1">Quarter 2</option>
                    <option value="1">Quarter 3</option>
                    <option value="1">Quarter 4</option>
                </select>
                <label for="">Quarter</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="bx-but bx-save">Save</button>
                <button class="bx-but bx-exit btnCancel">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!--Search-->
<div class="row">
    <div class="col-md-12">
        <div class="c-search-wrapper">
            <div class="c-search-content">

                <div class="c-search-item active">
                    <div class="col_1">
                        <select name="" id="" class="select-box">
                            <option value="1">Department</option>
                            <option value="2">Department2</option>
                        </select>
                    </div>
                    <div class="col_2">
                        <input type="text">
                    </div>
                    <div class="col_3">
                        <button class="btn-search" type="button" onclick=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Filter opt & Status-->
<div class="row mb-15">
    <div class="col-md-12">
        <div class="col-md-5">

            <div class="col-md-4">
                <select class="tr-select">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                </select>
            </div>
            <div class="col-md-6">
                <select class="tr-select">
                    <option value="2016">All</option>
                    <option value="1">First Quarter</option>
                    <option value="2">Second Quarter</option>
                    <option value="3">Third Quarter</option>
                    <option value="4">Froth Quarter</option>
                </select>
            </div>

        </div>
        <div class="col-md-7 mt-5">
            <div class="col-md-12">
                <div class="status-wrp">
                    <h6 class="status">
                        <spna class="st green"></spna>
                        Lorem Ipsum
                    </h6>
                    <h6 class="status">
                        <spna class="st red"></spna>
                        Lorem Ipsum
                    </h6>
                    <h6 class="status">
                        <spna class="st yellow"></spna>
                        Lorem Ipsum
                    </h6>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">
                    <div class="top-details">
                        <div class="plr-30 ptb-20 col-md-4 left">
                            <h5 class="details designation">User Experience</h5>
                        </div>

                        <div class="plr-30 ptb-20 col-md-8 right">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="row head-title">
                                        <h5 class="details col-md-4">
                                            Budgeted
                                            <span class="side">12</span>
                                        </h5>
                                        <h5 class="details col-md-4">
                                            Actual
                                            <span class="side">8</span>
                                        </h5>
                                        <h5 class="details col-md-4">
                                            Variance
                                            <span class="side">
                                        <h6 class="status">
                                            <spna class="st red"></spna>
                                             1
                                        </h6>
                                        <h6 class="status">
                                            <spna class="st yellow"></spna>
                                             2
                                        </h6>
                                    </span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>

                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">

                    <div class="c-row">
                        <div class="col-md-4 left">
                            <h5 class="details">UX Director</h5>
                        </div>
                        <div class="col-md-8 right">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="text">
                                                <h5 class="details">12 </h5>
                                            </div>
                                            <div class="inputs">
                                                <input type="text">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="text">
                                                <h5 class="details">12 </h5>
                                            </div>
                                            <div class="inputs">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <h5 class="details col-md-4">
                                            <div class="side">
                                                <h6 class="status">
                                                    <spna class="st red"></spna>
                                                    1
                                                </h6>
                                            </div>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>

                    </div>
                    <div class="c-row">
                        <div class="col-md-4 left">
                            <h5 class="details">UX Director</h5>
                        </div>
                        <div class="col-md-8 right">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="text">
                                                <h5 class="details">12 </h5>
                                            </div>
                                            <div class="inputs">
                                                <input type="text">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="text">
                                                <h5 class="details">12 </h5>
                                            </div>
                                            <div class="inputs">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <h5 class="details col-md-4">
                                            <div class="side">
                                                <h6 class="status">
                                                    <spna class="st green"></spna>
                                                    0
                                                </h6>
                                            </div>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>

                    </div>
                    <div class="c-row">
                        <div class="col-md-4 left">
                            <h5 class="details">UX Director</h5>
                        </div>
                        <div class="col-md-8 right">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="text">
                                                <h5 class="details">12 </h5>
                                            </div>
                                            <div class="inputs">
                                                <input type="text">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="text">
                                                <h5 class="details">12 </h5>
                                            </div>
                                            <div class="inputs">
                                                <input type="text">
                                            </div>
                                        </div>
                                        <h5 class="details col-md-4">
                                            <div class="side">
                                                <h6 class="status">
                                                    <spna class="st yellow"></spna>
                                                    2
                                                </h6>
                                            </div>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-1"></div>
                            </div>
                        </div>

                    </div>

                    <!-- Action area-->
                    <div class="c-row bg-blue">
                        <div class="col-md-4 left"></div>
                        <div class="col-md-8 right">
                            <button class="bx-but bx-save btnSave">Save</button>
                            <button class="bx-but bx-exit btnEdit">Edit</button>
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
    //    $(".shift_wrp").mCustomScrollbar({
    //        theme: "dark-3"
    //    });
    //
    //    $(".shift-scroll").mCustomScrollbar({
    //        theme: "minimal-dark"
    //    });

</script>

<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>
    //Add New
    $('.btnWrp button').click(function () {
        $('.btnWrp').slideUp('fast', function () {
            $('.addForm').slideDown('fast');
        });

    });
    //Form cancel
    $('.btnCancel').click(function () {
        $('.addForm').slideUp('fast', function () {
            $('.btnWrp').slideDown('fast');
        });
    });

    $('.btnSave').hide();

    $('.btnEdit').click(function () {
        $(this).hide();
        $(this).parents('.card-content-wrp').find('.box-body').addClass('edit');
        $(this).parents('.card-content-wrp').find('.btnSave').show();
    });

    $('.btnSave').click(function () {
        $(this).hide();
        $(this).parents('.card-content-wrp').find('.box-body').removeClass('edit');
        $(this).parents('.card-content-wrp').find('.btnEdit').show();
    });


    $(function () {

        $('.box-body .right .row').fadeTo('slow', 0);

        $('.btn-expand-wrp a').on('click', function () {
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //silde Down
                $(this).addClass('btn-expand-down');
                $(this).closest('.tab-box').find('.box-head .right').fadeTo('fast', 0);
                thisA.closest('.tab-box').parents('.card-content-wrp').addClass('on');
                $(this).closest('.tab-box').find('.box-body').slideDown('fast', function () {
                    thisA.closest('.tab-box').find('.box-head .right').fadeTo('slow', 1);
                    thisA.closest('.tab-box').find('.box-head .right').addClass('on-right');
                    thisA.closest('.tab-box').find('.box-body .right .row').fadeTo('slow', 1);
                });
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box');

            } else {
                //Slide Up
                $(this).removeClass('btn-expand-down');

                thisA.closest('.tab-box').find('.box-body .right .row').fadeTo('slow', 0, function () {
                    thisA.closest('.tab-box').find('.box-head .right').fadeTo('fast', 0);
                    thisA.closest('.tab-box').find('.box-head .left .designation').fadeTo('fast', 0);
                    thisA.closest('.tab-box').find('.box-body').slideUp('slow', function () {
                        thisA.closest('.tab-box').find('.box-head .left .designation').fadeTo('fast', 1);
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
