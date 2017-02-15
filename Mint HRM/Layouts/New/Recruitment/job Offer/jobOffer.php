<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
//Date Picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');

//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Recruitment Common
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/common.css', 'screen');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/interviewing.css', 'screen');

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
//Date picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>


<div class="contert-wrapper mb-30 pb-30">


    <div class="col-md-12 mt-30 mb-30">
        <h1 class="col-md-12 title">Job Offer</h1>
    </div>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="row mb-30">

                        <div class="col-md-4 mt-15 input-layout">
                            <select name="" id="">
                                <option value=""></option>
                                <option value="1" selected="selected">Natatsha Gunawardana</option>
                                <option value="2">Sandun Maduranga</option>
                            </select>
                        </div>

                        <div class="col-md-8">
                            <h4 class="details f-18 up-case mb-5">Natasha gunawardhane</h4>
                            <h6 class="title f-16">Software Engineer</h6>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row form-row">
                        <div class="col-md-4 input-layout">
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                            <label for="">Employment Type</label>
                        </div>
                        <div class="col-md-4 input-layout">
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                            <label for="">Designation</label>
                        </div>
                        <div class="col-md-4 input-layout">
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                            <label for="">Employment Category</label>
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-4 input-layout">
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                            <label for="">Reporting Hierarchy Position</label>
                        </div>
                        <div class="col-md-4 input-layout">
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                            <label for="">Company Hierarchy Position</label>
                        </div>
                        <div class="col-md-4 input-layout">
                            <select name="" id="">
                                <option value=""></option>
                            </select>
                            <label for="">Location Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 input-layout">
                            <input type="text" class="date-pick">
                            <label for="">Date of joined</label>
                        </div>

                    </div>
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

                    <div class="col-md-12">
                        <div class="col-md-4 mt-5 mb-5 left-side">
                            <h5 class="details low-case">Salary Details</h5>
                        </div>
                    </div>

                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 grid-header">
                                    <div class="row">
                                        <h6 class="title col-md-5">Category</h6>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <h6 class="title col-md-3 text-right">Previous</h6>
                                                <h6 class="title col-md-3 text-right">Proposed</h6>
                                                <h6 class="title col-md-4 col-md-offset-2">Expected</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="row grid-item">
                                        <h5 class="details col-md-5 mt-5 text-medium">Basic Salary</h5>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <h5 class="details col-md-3 mt-5 text-right">20,000</h5>
                                                <h5 class="details col-md-3 mt-5 text-right">25,000</h5>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <input type="text" class="text-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row grid-item">
                                        <h5 class="details col-md-5 mt-5 text-medium">Allowance 1</h5>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <h5 class="details col-md-3 mt-5 text-right">10,000</h5>
                                                <h5 class="details col-md-3 mt-5 text-right">15,000</h5>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <input type="text" class="text-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row grid-item">
                                        <h5 class="details col-md-5 mt-5 text-medium">Allowance 2</h5>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <h5 class="details col-md-3 mt-5 text-right">8,000</h5>
                                                <h5 class="details col-md-3 mt-5 text-right">12,000</h5>
                                                <div class="col-md-4 col-md-offset-2">
                                                    <input type="text" class="text-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Net Salary-->
                                    <div class="row grid-item">
                                        <h5 class="details col-md-5 mt-15 text-medium">Net Salary</h5>
                                        <div class="col-md-7">
                                            <div class="row">
                                                <div class="col-md-4 col-md-offset-8">
                                                    <h5 class="details f-16 text-right with-tb-border">30,000</h5>
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
    </div>

    <div class="col-md-12">
        <button class="bx-but bx-save">Save</button>
    </div>
</div>

<!-- ===========================================================================
        Plugin Script
============================================================================ -->
<script>
    $('.date-pick').datepicker({
        language: 'en',
        autoClose: true
    })
</script>

<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>

    $(function () {

        $('.box-body .right .row').fadeTo('slow', 0);

        $('.btn-expand-wrp a').on('click', function () {
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //Slide Down
                $(this).addClass('btn-expand-down');

                //$(this).closest('.tab-box').find('.box-head .right-side').fadeTo('fast', 0);
                thisA.closest('.tab-box').parents('.card-content-wrp').addClass('on');

                $(this).closest('.tab-box').find('.box-body').slideDown('fast');
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box');

            } else {
                //Slide Up
                $(this).removeClass('btn-expand-down');

                thisA.closest('.tab-box').find('.box-body').slideUp('slow', function () {
                    thisA.closest('.tab-box ').parents('.card-content-wrp').removeClass('on');
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

