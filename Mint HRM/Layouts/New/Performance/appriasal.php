<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// sweetalert
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/sweetalert/sweetalert.css', 'screen');
// Date Picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');


//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
//Performance Style
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/performance/style.css', 'screen');
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
// Jqury UI
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery-ui-1.12.0.js', CClientScript::POS_HEAD);
// Date picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);
//Range Slider
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/rangeSlider/rangeslider.js', CClientScript::POS_HEAD);
//Validator
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/validate/jquery.validate.js', CClientScript::POS_HEAD);
//Chart Js
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/pieChart/pie-chart.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/chart/ChartJs.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Performance Management</a>
    <a>Performance Appraisal</a>
</div>

<div class="col-md-12">
    <div class="row mb-20">
        <div class="col-md-3 col-md-offset-9">
            <div class="row">

                <div class="col-md-6">
                    <select name="" id="" class="big-select">
                        <option >English</option>
                        <option >Sinhala</option>
                        <option >Tamil</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <select name="" id="" class="big-select">
                        <option >2017</option>
                        <option >2018</option>
                        <option >2019</option>
                    </select>
                </div>
            </div>

        </div>

    </div>
</div>

<div class="col-md-12 mb-30">
    <div class="contert-wrapper pb-15">
        <div class="col-md-12 header-with-mn">
            <h1 class="title">Add Form</h1>
        </div>

        <div class="col-md-12 mt-15">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-15">
                        <h5 class="details">Lorem Ipsum</h5>
                    </div>
                    <div class="col-md-6 mb-15">
                        <h5 class="details">Lorem Ipsum</h5>
                    </div>
                    <div class="col-md-6 mb-15">
                        <h5 class="details">Lorem Ipsum</h5>
                    </div>
                    <div class="col-md-6 mb-15">
                        <h5 class="details">Lorem Ipsum</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <button type="button" class="bx-but bx-save">Add</button>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12 mb-30">
    <div class="contert-wrapper">
        <div class="col-md-12 bg-blue">
            <div class="col-md-12 pt-30 pb-30">
                <div class="table-block cell-width-100 pt-5">
                    <div class="cell zero-width">
                        <div class="img-wrp--50">
                            <?php echo Common::showEmployeeThumbnailx50(0); ?>
                        </div>
                    </div>
                    <div class="cell pl-15">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="details text-white text-uppercase mt-5">Natasha Gunawardhane</h5>
                                <h6 class="title mt-2 text-white-56">UX Engineer</h6>
                            </div>
                            <div class="col-md-6 mt-20">
                                <h4 class="text-right f-18 text-white ">0 of 6 complete</h4>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-30 pb-15">
            <div class="col-md-12">
                <div class="row mb-20">
                    <h4 class="col-md-12 f-18 text-modling text-uppercase">Modling the way</h4>
                </div>

                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="row md-row">
                            <p class="mb-qs-text col-md-12">
                                <span class="mr-5">1.</span>
                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
                            </p>
                            <div class="col-md-12 mt-15">
                                <div class="block-5">
                                    <div>
                                        <div class="but-gruop-wrp m-0">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio mb-0 mt-0"></span>
                                                <span class="f-14">Execelent</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="but-gruop-wrp m-0">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio mb-0 mt-0"></span>
                                                <span class="f-14">Execelent</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="but-gruop-wrp m-0">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio mb-0 mt-0"></span>
                                                <span class="f-14">Execelent</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="but-gruop-wrp m-0">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio mb-0 mt-0"></span>
                                                <span class="f-14">Execelent</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="but-gruop-wrp m-0">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio mb-0 mt-0"></span>
                                                <span class="f-14">Execelent</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row md-row">
                            <p class="mb-qs-text col-md-12">
                                <span class="mr-5">2.</span>
                                <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</span>
                            </p>
                            <div class="col-md-12 mt-15">
                                <div class="block-5">
                                    <div>
                                        <div class="but-gruop-wrp m-0">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio mb-0 mt-0"></span>
                                                <span class="f-14">Execelent</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="but-gruop-wrp m-0">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio mb-0 mt-0"></span>
                                                <span class="f-14">Execelent</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="but-gruop-wrp m-0">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio mb-0 mt-0"></span>
                                                <span class="f-14">Execelent</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="but-gruop-wrp m-0">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio mb-0 mt-0"></span>
                                                <span class="f-14">Execelent</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="but-gruop-wrp m-0">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio mb-0 mt-0"></span>
                                                <span class="f-14">Execelent</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-15">
                    <div class="col-md-12">
                        <button type="button" class="bx-but bx-next">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ===========================================================================
            Custom Script
    ============================================================================ -->

<!-- ===========================================================================
        Plugin Script
============================================================================ -->


<!-- ===========================================================================
        Backend Script
============================================================================ -->
