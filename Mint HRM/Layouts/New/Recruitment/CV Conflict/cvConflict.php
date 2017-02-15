<?php

//==============================================================================
//      Plugins CSS
//==============================================================================

//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Main
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/cvbank.css', 'screen');
//==============================================================================
//      JS
//==============================================================================
// form
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);
//==============================================================================
//      Plugins JS
//==============================================================================

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<!--Search-->
<!--<div class="row">-->
<!--    <div class="col-md-12">-->
<!--        <div class="c-search-wrapper">-->
<!--            <div class="c-search-content">-->
<!---->
<!--                <div class="c-search-item active">-->
<!--                    <div class="col_1">-->
<!--                        <select name="" id="" class="select-box">-->
<!--                            <option value="2"></option>-->
<!--                            <option value="1" selected="selected">Designation</option>-->
<!--                        </select>-->
<!--                    </div>-->
<!--                    <div class="col_2">-->
<!--                        <input type="text">-->
<!--                    </div>-->
<!--                    <div class="col_3">-->
<!--                        <button class="btn-search" type="button" onclick=""></button>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<div class="row">
    <div class="col-md-12">
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">
                        <div class="col-md-4 left mt-5 mb-5">
                            <h5 class="details low-case">Natasha Gunawardane</h5>
                        </div>
                        <div class="col-md-4 mt-5 mb-5 right-side">
                            <h5 class="details low-case">
                                Android Developer
                            </h5>
                        </div>
                        <div class="col-md-4 mt-5 mb-5 right-side">
                            <h5 class="details low-case">
                                Employee
                            </h5>
                        </div>
                    </div>

                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-12 mt-15">

                        <div class="col-md-6">
                            <div class="badge-title badge-blue mb-20">
                                <h5>Old</h5>
                            </div>

                            <div class="row form-row">

                                <div class="col-md-6 input-default">
                                    <label>Name</label>
                                    <h5 class="details">Natasha Gunawardana</h5>
                                </div>
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>

                            </div>

                            <div class="row form-row">
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>NIC/Passport</label>
                                    <h5 class="details">235698745V</h5>
                                </div>
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Email</label>
                                    <h5 class="details">natasha@gmail.com</h5>
                                </div>

                            </div>

                            <div class="row form-row">
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No - Optional</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="table-block">
                                        <div class="cell zero-width">
                                            <i class="ic_30 ic_30_pdf-download"></i>
                                        </div>
                                        <div class="cell pl-10">
                                            <h6 class="title">Download</h6>
                                            <h5 class="details">CV</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="badge-title badge-red mb-20">
                                <h5>New</h5>
                            </div>

                            <div class="row form-row">

                                <div class="col-md-6 input-default">
                                    <label>Name</label>
                                    <h5 class="details">Natasha Gunawardana</h5>
                                </div>
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>

                            </div>

                            <div class="row form-row">
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>NIC/Passport</label>
                                    <h5 class="details">235698745V</h5>
                                </div>
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Email</label>
                                    <h5 class="details">natasha@gmail.com</h5>
                                </div>

                            </div>

                            <div class="row form-row">
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No - Optional</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="table-block">
                                        <div class="cell zero-width">
                                            <i class="ic_30 ic_30_pdf-download"></i>
                                        </div>
                                        <div class="cell pl-10">
                                            <h6 class="title">Download</h6>
                                            <h5 class="details">CV</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12 input-layout">
                            <input type="text">
                            <label for="">Reason</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12">
                            <button class="bx-but bx-save">Accept</button>
                            <button class="bx-but bx-exit">Reject</button>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">
                        <div class="col-md-4 left mt-5 mb-5">
                            <h5 class="details low-case">Natasha Gunawardane</h5>
                        </div>
                        <div class="col-md-4 mt-5 mb-5 right-side">
                            <h5 class="details low-case">
                                Android Developer
                            </h5>
                        </div>
                        <div class="col-md-4 mt-5 mb-5 right-side">
                            <h5 class="details low-case">
                                Employee
                            </h5>
                        </div>
                    </div>

                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-12 mt-15">

                        <div class="col-md-6">
                            <div class="badge-title badge-blue mb-20">
                                <h5>Old</h5>
                            </div>

                            <div class="row form-row">

                                <div class="col-md-6 input-default">
                                    <label>Name</label>
                                    <h5 class="details">Natasha Gunawardana</h5>
                                </div>
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>

                            </div>

                            <div class="row form-row">
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>NIC/Passport</label>
                                    <h5 class="details">235698745V</h5>
                                </div>
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Email</label>
                                    <h5 class="details">natasha@gmail.com</h5>
                                </div>

                            </div>

                            <div class="row form-row">
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No - Optional</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="table-block">
                                        <div class="cell zero-width">
                                            <i class="ic_30 ic_30_pdf-download"></i>
                                        </div>
                                        <div class="cell pl-10">
                                            <h6 class="title">Download</h6>
                                            <h5 class="details">CV</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">
                            <div class="badge-title badge-red mb-20">
                                <h5>New</h5>
                            </div>

                            <div class="row form-row">

                                <div class="col-md-6 input-default">
                                    <label>Name</label>
                                    <h5 class="details">Natasha Gunawardana</h5>
                                </div>
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>

                            </div>

                            <div class="row form-row">
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>NIC/Passport</label>
                                    <h5 class="details">235698745V</h5>
                                </div>
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Email</label>
                                    <h5 class="details">natasha@gmail.com</h5>
                                </div>

                            </div>

                            <div class="row form-row">
                                <div class="col-md-6 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No - Optional</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="table-block">
                                        <div class="cell zero-width">
                                            <i class="ic_30 ic_30_pdf-download"></i>
                                        </div>
                                        <div class="cell pl-10">
                                            <h6 class="title">Download</h6>
                                            <h5 class="details">CV</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12 input-layout">
                            <input type="text">
                            <label for="">Reason</label>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12">
                            <button class="bx-but bx-save">Accept</button>
                            <button class="bx-but bx-exit">Reject</button>
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

                $(this).closest('.tab-box').find('.box-head .right-side').fadeTo('fast', 0, function () {
                    thisA.closest('.tab-box').find('.box-body').slideDown('fast');
                });
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box');

            } else {
                //Slide Up
                $(this).removeClass('btn-expand-down');

                thisA.closest('.tab-box').find('.box-body').slideUp('slow', function () {
                    thisA.closest('.tab-box ').parents('.card-content-wrp').removeClass('on');
                });

                thisA.closest('.tab-box').find('.box-head .right-side').fadeTo('fast', 1);
                $(this).closest('.tab-box ').find('.box-body').removeClass('active-box');

            }
            return false;
        });
    });
</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->


