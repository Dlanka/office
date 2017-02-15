<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// Lc Switch
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/lcSwitch/lc_switch.css', 'screen');
// Date Picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');


//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Accrodion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');
// Recruitment Common
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/common.css', 'screen');
// Main
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/webapp.css', 'screen');

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
// Lc Switch
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/lcSwitch/lc_switch.min.js', CClientScript::POS_HEAD);
// Date picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<!--Add Button-->
<div class="row">
    <div class="col-md-12">
        <button class="but new btnAdd"><span></span>Add New</button>
    </div>
</div>

<!--Add Form-->
<div class="contert-wrapper mb-30 addForm">

    <div class="col-md-12 mt-30 mb-30">
        <h1 class="col-md-12 title">Advertiesment</h1>
    </div>

    <div class="col-md-12">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-12">
                    <div class="ui_accordion">
                        <a href="#createAdd" class="ui-link">Create Advertiesment</a>
                        <div id="createAdd" class="ui-box-wrp pt-15">
                            <div class="row">

                                <div class="col-md-8">

                                    <div class="row form-row">
                                        <div class="col-md-6 input-layout">
                                            <input type="text">
                                            <label for="">Job Title</label>
                                        </div>
                                        <div class="col-md-6 input-layout">
                                            <input type="text">
                                            <label for="">Adverttiesment title</label>
                                        </div>
                                    </div>

                                    <div class="row form-row">
                                        <div class="col-md-6 input-layout">
                                            <select name="" id="">
                                                <option value="1"></option>
                                                <option value="1">Colombo</option>
                                            </select>
                                            <label for="">Branch</label>
                                        </div>
                                    </div>

                                    <div class="row form-row">
                                        <div class="col-md-12 textarea-layout">
                                            <label for="">Job Role</label>
                                            <textarea name="" id="" cols="30" rows="10" class="h-100"></textarea>
                                        </div>
                                    </div>

                                    <div class="row form-row">
                                        <div class="col-md-12 textarea-layout">
                                            <label for="">Requirement & Experience</label>
                                            <textarea name="" id="" cols="30" rows="10" class="h-100"></textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="bx-but bx-save">Save</button>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-4">
                                    <ul class="jobList expand-list">
                                        <li>
                                            <div class="row">
                                                <h5 class="col-md-11 details">Software Engineer PHP</h5>
                                                <div class="col-md-1 pl-0">
                                                    <button class="img-but img-edit"></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <h5 class="col-md-11 details">Software Engineer PHP</h5>
                                                <div class="col-md-1 pl-0">
                                                    <button class="img-but img-edit"></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <h5 class="col-md-11 details">Software Engineer PHP</h5>
                                                <div class="col-md-1 pl-0">
                                                    <button class="img-but img-edit"></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <h5 class="col-md-11 details">Software Engineer PHP</h5>
                                                <div class="col-md-1 pl-0">
                                                    <button class="img-but img-edit"></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <h5 class="col-md-11 details">Software Engineer PHP</h5>
                                                <div class="col-md-1 pl-0">
                                                    <button class="img-but img-edit"></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="row">
                                                <h5 class="col-md-11 details">Software Engineer PHP</h5>
                                                <div class="col-md-1 pl-0">
                                                    <button class="img-but img-edit"></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h6 class="red mb-30">View </h6>
                    <div class="row">

                        <div class="col-md-8">

                            <div class="col-md-12 bg-gray p-40">

                                <!--Addverisment-->
                                <div class="col-md-12 plr-30 ptb-40 bg-white job-block mt-0">
                                    <div class="col-md-12">
                                        <h3 class="mb-5">Software Engineer PHP - 06 (Jaffna )</h3>
                                        <h5 class="mb-30"><span>Ref No :&nbsp;</span>A / D / 468970</h5>

                                        <p class="note">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                            quam velit, vulputate eu
                                            pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit
                                            elit tincidunt id. Sed
                                            rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et
                                            lacinia ipsum quam nec</p>

                                        <h4 class="mb-20 mt-30">Requirement &amp; Experience</h4>
                                        <ul class="requirement-list">
                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                            <li>Nulla quam velit, vulputate eu pharetra nec, .</li>
                                            <li>mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                                                tincidunt id. Sed rhoncus, tort.
                                            </li>
                                            <li>mattis ac neque. tort.</li>
                                        </ul>
                                    </div>
                                </div>

                                <!--Question List-->
                                <div class="col-md-12 plr-30 ptb-40 bg-white">
                                    <div class="col-md-12 mb-20">
                                        <h5 class="details f-16">
                                            <span>1&nbsp;</span>
                                            <span>Lorem Ipsum is simply dummy text of the printing and typesetting</span>
                                        </h5>
                                    </div>
                                    <div class="col-md-12">

                                        <div class="but-gruop-wrp col-md-12 answer">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio m-0"></span>
                                                <span>Lorem Ipsum is simply dummy</span>
                                            </label>
                                        </div>
                                        <div class="but-gruop-wrp col-md-12 answer">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio m-0"></span>
                                                <span>Lorem Ipsum is simply dummy</span>
                                            </label>
                                        </div>
                                        <div class="but-gruop-wrp col-md-12 answer">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio m-0"></span>
                                                <span>Lorem Ipsum is simply dummy</span>
                                            </label>
                                        </div>
                                        <div class="but-gruop-wrp col-md-12 answer">
                                            <label>
                                                <input name="a" type="radio">
                                                <span class="radio m-0"></span>
                                                <span>Lorem Ipsum is simply dummy</span>
                                            </label>
                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-12 mt-30 mb-15">
                                    <div class="row">

                                        <div class="col-md-5">
                                            <div class="row">
                                                <h5 class="col-md-8 details mt-5">Head Hunters</h5>
                                                <div class="col-md-4 lc_right">
                                                    <input type="checkbox" class="lc_switch lcs_headhunter">
                                                </div>
                                            </div>

                                            <div class="row hunters-wrp mt-30">
                                                <div class="col-md-12 but-gruop-wrp hunters">
                                                    <label>
                                                        <input value="1" type="checkbox">
                                                        <span class="check-box"></span>
                                                        <span class="pl-10 f-14">Natasha Gunawardhane</span>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 but-gruop-wrp hunters">
                                                    <label>
                                                        <input value="1" type="checkbox">
                                                        <span class="check-box"></span>
                                                        <span class="pl-10 f-14">Natasha Gunawardhane</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 col-md-offset-2">
                                            <div class="row">
                                                <h5 class="col-md-8 details mt-5">Publish Add</h5>
                                                <div class="col-md-4 lc_right">
                                                    <input type="checkbox" class="lc_switch">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-4">
                            <ul class="jobList expand-list">
                                <li>
                                    <div class="row">
                                        <div class="col-md-12 but-gruop-wrp mb-0">
                                            <label>
                                                <input value="1" type="radio" class="chb-job" name="job">
                                                <span class="radio m-0"></span>
                                                <span class="pl-10 f-14">Software Engineer PHP</span>
                                            </label>
                                        </div>

                                        <div class="col-md-12 info-wrp mt-15 pl-50">
                                            <div class="row">
                                                <div class="col-md-12 input-layout mt-20">
                                                    <input type="text" class="datePicks">
                                                    <label for="">Publish Date</label>
                                                </div>
                                                <div class="col-md-12 input-layout mt-20">
                                                    <input type="text" class="datePicks">
                                                    <label for="">Expaier Date</label>
                                                </div>
                                                <div class="col-md-12 input-layout mt-20">
                                                    <select name="" id="">
                                                        <option value="1"></option>
                                                        <option value="1">129/345 456</option>
                                                    </select>
                                                    <label for="">Ref:No</label>
                                                    <h6 class="title f-14 mt-10">Software Engineer PHP</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-12 but-gruop-wrp mb-0">
                                            <label>
                                                <input value="1" type="radio" class="chb-job" name="job">
                                                <span class="radio m-0"></span>
                                                <span class="pl-10 f-14">Software Engineer PHP</span>
                                            </label>
                                        </div>

                                        <div class="col-md-12 info-wrp mt-15 pl-50">
                                            <div class="row">
                                                <div class="col-md-12 input-layout mt-20">
                                                    <input type="text" class="datePicks">
                                                    <label for="">Publish Date</label>
                                                </div>
                                                <div class="col-md-12 input-layout mt-20">
                                                    <input type="text" class="datePicks">
                                                    <label for="">Expaier Date</label>
                                                </div>
                                                <div class="col-md-12 input-layout mt-20">
                                                    <select name="" id="">
                                                        <option value="1"></option>
                                                        <option value="1">129/345 456</option>
                                                    </select>
                                                    <label for="">Ref:No</label>
                                                    <h6 class="title f-14 mt-10">Software Engineer PHP</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-12 but-gruop-wrp mb-0">
                                            <label>
                                                <input value="1" type="radio" class="chb-job" name="job">
                                                <span class="radio m-0"></span>
                                                <span class="pl-10 f-14">Software Engineer PHP</span>
                                            </label>
                                        </div>

                                        <div class="col-md-12 info-wrp mt-15 pl-50">
                                            <div class="row">
                                                <div class="col-md-12 input-layout mt-20">
                                                    <input type="text" class="datePicks">
                                                    <label for="">Publish Date</label>
                                                </div>
                                                <div class="col-md-12 input-layout mt-20">
                                                    <input type="text" class="datePicks">
                                                    <label for="">Expaier Date</label>
                                                </div>
                                                <div class="col-md-12 input-layout mt-20">
                                                    <select name="" id="">
                                                        <option value="1"></option>
                                                        <option value="1">129/345 456</option>
                                                    </select>
                                                    <label for="">Ref:No</label>
                                                    <h6 class="title f-14 mt-10">Software Engineer PHP</h6>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                </li>
                            </ul>
                        </div>

                    </div>

                    <div class="row mb-15">

                        <div class="col-md-12 message"></div>

                        <div class="col-md-12 ">
                            <button class="bx-but bx-next btnPublish">Next</button>
                            <button class="bx-but bx-exit btnClose">Close</button>
                        </div>
                    </div>

                </div>

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
                            <option value="1">Designation</option>
                            <option value="2">Designation2</option>
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


<div class="row">

    <div class="col-md-12">

        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">

                        <div class="col-md-4 mt-5 left-side">
                            <h5 class="details">Software Engineer PHP</h5>
                        </div>

                        <div class="col-md-8 right-side">
                            <div class="row">
                                <div class="col-md-6 pl-0">
                                    <i class="ic_30 ic_30-browser" title="Publish Add"></i>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="details mt-5 low-case">17 Dec 2016</h5>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-12 mt-15">

                        <div class="col-md-4">
                            <div class="row">

                                <div class="col-md-12 mb-30">
                                    <h5 class="details">
                                        <i class="ic_30 ic_30-browser" title="Publish Add"></i>
                                        <span class="pl-10">Publish Add</span>
                                    </h5>
                                </div>

                                <div class="col-md-12 mb-30">
                                    <h6 class="title mb-2">Publish Date</h6>
                                    <h5 class="details">21 Jun 2016</h5>
                                </div>

                                <div class="col-md-12 mb-30">
                                    <h6 class="title mb-2">Expire Date</h6>
                                    <h5 class="details">17 Dec 2016</h5>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-8 pl-0">

                            <div class="row job-block mt-0">
                                <div class="col-md-12">
                                    <h3 class="mb-5">Software Engineer PHP - 06 (Jaffna )</h3>
                                    <h5 class="mb-30"><span>Ref No :&nbsp;</span>A / D / 468970</h5>

                                    <p class="note">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                        quam velit, vulputate eu
                                        pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit
                                        elit tincidunt id. Sed
                                        rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et
                                        lacinia ipsum quam nec</p>

                                    <h4 class="mb-20 mt-30">Requirement &amp; Experience</h4>
                                    <ul class="requirement-list">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li>Nulla quam velit, vulputate eu pharetra nec, .</li>
                                        <li>mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                                            tincidunt id. Sed rhoncus, tort.
                                        </li>
                                        <li>mattis ac neque. tort.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row job-block">
                                <h4 class="col-md-12 mb-20">Questions List</h4>
                                <div class="col-md-12">
                                    <ul class="requirement-list">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li>Nulla quam velit, vulputate eu pharetra nec, .</li>
                                        <li>mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                                            tincidunt id. Sed rhoncus, tort.
                                        </li>
                                        <li>mattis ac neque. tort.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="bx-but bx-default">Hold</button>
                                    <button class="bx-but bx-exit">Reject</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">

                        <div class="col-md-4 mt-5 left-side">
                            <h5 class="details">Software Engineer PHP</h5>
                        </div>

                        <div class="col-md-8 right-side">
                            <div class="row">
                                <div class="col-md-6 pl-0">
                                    <i class="ic_30 ic_30-browser" title="Publish Add"></i>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="details mt-5 low-case">17 Dec 2016</h5>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-12 mt-15">

                        <div class="col-md-4">
                            <div class="row">

                                <div class="col-md-12 mb-30">
                                    <h5 class="details">
                                        <i class="ic_30 ic_30-browser" title="Publish Add"></i>
                                        <span class="pl-10">Publish Add</span>
                                    </h5>
                                </div>

                                <div class="col-md-12 mb-30">
                                    <h6 class="title mb-2">Publish Date</h6>
                                    <h5 class="details">21 Jun 2016</h5>
                                </div>

                                <div class="col-md-12 mb-30">
                                    <h6 class="title mb-2">Expire Date</h6>
                                    <h5 class="details">17 Dec 2016</h5>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-8 pl-0">

                            <div class="row job-block mt-0">
                                <div class="col-md-12">
                                    <h3 class="mb-5">Software Engineer PHP - 06 (Jaffna )</h3>
                                    <h5 class="mb-30"><span>Ref No :&nbsp;</span>A / D / 468970</h5>

                                    <p class="note">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                        quam velit, vulputate eu
                                        pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit
                                        elit tincidunt id. Sed
                                        rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et
                                        lacinia ipsum quam nec</p>

                                    <h4 class="mb-20 mt-30">Requirement &amp; Experience</h4>
                                    <ul class="requirement-list">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li>Nulla quam velit, vulputate eu pharetra nec, .</li>
                                        <li>mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                                            tincidunt id. Sed rhoncus, tort.
                                        </li>
                                        <li>mattis ac neque. tort.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row job-block">
                                <h4 class="col-md-12 mb-20">Questions List</h4>
                                <div class="col-md-12">
                                    <ul class="requirement-list">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li>Nulla quam velit, vulputate eu pharetra nec, .</li>
                                        <li>mattis ac neque. Duis vulputate commodo lectus, ac blandit elit
                                            tincidunt id. Sed rhoncus, tort.
                                        </li>
                                        <li>mattis ac neque. tort.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="bx-but bx-default">Hold</button>
                                    <button class="bx-but bx-exit">Reject</button>
                                </div>
                            </div>
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

    $(".expand-list").mCustomScrollbar({
        theme: "dark-3"
    });

    $('.datePicks').datepicker({
        language: 'en',
        autoClose: true
    });

    $('.lc_switch').lc_switch('YES', 'NO');

    $('body').delegate('.lcs_headhunter', 'lcs-statuschange', function () {
        if ($(this).is(':checked')) {
            $('.hunters-wrp').slideDown('slow');
        } else {
            $('.hunters-wrp').slideUp('slow');
        }
    });
</script>

<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>

    var btnStatus = 0;

    $(document).on('click', '.btnPublish', function () {

        if (btnStatus === 0) {
            $(this).addClass('bx-save').removeClass('bx-next').text('Save');
            btnStatus = 1;
        }

        if (btnStatus === 1) {
        }

    });

    $(document).on('click', '.btnAdd', function () {
        $(this).slideUp('fast', function () {
            $('.addForm').slideDown('slow');
            $('.btnPublish').removeClass('bx-save').addClass('bx-next').text('Next');
            btnStatus = 0;
        });
    });

    $(document).on('click', '.btnClose', function () {

        $('.addForm').slideUp('slow', function () {
            $('.btnAdd').slideDown('fast');

            $('.btnPublish').removeClass('bx-save').addClass('bx-next').text('Next');
            btnStatus = 0;
        });
    });

    $(document).on('click', '.chb-job', function () {
        var chbParent = $(this).parents('.but-gruop-wrp');

        if ($(this).is(':checked')) {
            $('.info-wrp').slideUp('slow');
            chbParent.next('.info-wrp').slideDown('slow');
        }

    });

    //    Accodion
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

    $(function () {

        $('.box-body .right .row').fadeTo('slow', 0);

        $('.btn-expand-wrp a').on('click', function () {
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //Slide Down
                $(this).addClass('btn-expand-down');

                //$(this).closest('.tab-box').find('.box-head .right-side').fadeTo('fast', 0);
                thisA.closest('.tab-box').parents('.card-content-wrp').addClass('on');

                $(this).closest('.tab-box').find('.box-body').slideDown('fast', function () {
                    thisA.closest('.tab-box').find('.box-head .right-side').fadeTo('slow', 0);
                });
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box');

            } else {
                //Slide Up
                $(this).removeClass('btn-expand-down');

                thisA.closest('.tab-box').find('.box-body').slideUp('slow', function () {
                    thisA.closest('.tab-box').find('.box-head .right-side').fadeTo('fast', 1);
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

