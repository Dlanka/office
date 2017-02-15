<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');

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


<div class="contert-wrapper mb-30 pb-15">

    <div class="col-md-12 mt-30 mb-30">
        <h1 class="col-md-12 title">Interview Test Result Upload</h1>
    </div>

    <div class="col-md-12 mt-20">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="row mb-30">

                        <div class="col-md-4 mt-15 input-layout">
                            <select name="" id="">
                                <option value=""></option>
                                <option value="1">UX Design</option>
                                <option value="2">PHP Developer</option>
                            </select>
                            <label for="">Designation</label>
                        </div>

                        <div class="col-md-8">
                            <h4 class="details f-18 up-case mb-5">Android Developer</h4>
                            <h6 class="title f-16">Qw-234-456</h6>
                        </div>

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8">

                            <div class="table-block mb-20">
                                <div class="but-gruop-wrp mb-0">
                                    <label>
                                        <input class="select-All" type="checkbox">
                                        <span class="check-box"></span>
                                        <span class="pl-10">Select All</span>
                                    </label>
                                </div>
                            </div>

                            <ul class="test-result-list">
                                <li class="mb-15">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="table-block">
                                                <div class="cell zero-width">
                                                    <div class="but-gruop-wrp mb-0">
                                                        <label>
                                                            <input class="chb" type="checkbox">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Gunawardana</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="text-right" type="text">
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-15">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="table-block">
                                                <div class="cell zero-width">
                                                    <div class="but-gruop-wrp mb-0">
                                                        <label>
                                                            <input class="chb" type="checkbox">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Gunawardana</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="text-right" type="text">
                                        </div>
                                    </div>
                                </li>
                                <li class="mb-15">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="table-block">
                                                <div class="cell zero-width">
                                                    <div class="but-gruop-wrp mb-0">
                                                        <label>
                                                            <input class="chb" type="checkbox">
                                                            <span class="check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Gunawardana</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="text-right" type="text">
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <button class="bx-but bx-save">Save</button>
                </div>

            </div>
        </div>
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
    new CheckAll({
        parentEle: '.select-All',
        childEle: '.chb'
    });

    var $_input = $('.test-result-list li input[type="text"]');

    $_input.on('focus', function () {
        $(this).select();
    });

    $_input.on('keyup', function () {
        var parentEl = $(this).parents('li');
        var checkbox = parentEl.find('.chb');
        if ($(this).val().length > 0) {
            checkbox.prop('checked', true);
        } else {
            checkbox.prop('checked', false);
        }
    })
</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

