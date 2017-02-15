<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// Owl
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/owl_carousel/owl.carousel.css', 'screen');
// Time Picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/clockpicker/bootstrap-clockpicker.css', 'screen');


//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Accrodion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');
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
// Owl
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/owl_carousel/owl.carousel.min.js', CClientScript::POS_HEAD);
// Time picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/clockpicker/bootstrap-clockpicker.min.js', CClientScript::POS_HEAD);
// Jqury UI
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery-ui-1.12.0.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>


<div class="contert-wrapper mb-30">


    <div class="col-md-12 mt-30 mb-30">
        <h1 class="col-md-12 title">Interviewing</h1>
    </div>


    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-md-4">
                            <h4 class="details f-18 up-case mb-5">Natasha gunawardhane</h4>
                            <h6 class="title f-16">Software Engineer</h6>
                        </div>

                        <div class="col-md-6">
                            <h4 class="result mini">
                                <span class="circle">60</span>
                                <span class="text pl-10">Interview - Final</span>
                            </h4>
                        </div>

                        <div class="col-md-2">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="ic_30 ic_30_pdf-download"></i>
                                </div>
                                <div class="col-xs-8 pl-10">
                                    <h6 class="title">Download</h6>
                                    <h5 class="details">CV</h5>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <div class="col-md-12 mt-30">

                    <!--History-->
                    <div class="ui_accordion">
                        <a href="#history" class="ui-link red">History</a>
                        <div id="history" class="ui-box-wrp">

                        </div>
                    </div>

                    <!--Interview registration-->
                    <div class="ui_accordion">
                        <a href="#registration" class="ui-link">Interview registration</a>
                        <div id="registration" class="ui-box-wrp">
                            <div class="row row-15">
                                <h6 class="col-md-12 title mb-10"><span>1.</span>Lorem ipsum dolor sit amet, consectetur
                                </h6>
                                <h5 class="col-md-12 details">Lorem ipsum dolor sit amet, consectetur adipiscing e.lit.
                                    Nulla quam
                                    velit</h5>
                            </div>
                        </div>
                    </div>

                    <!--Test result-->
                    <div class="ui_accordion">
                        <a href="#test" class="ui-link">Test result</a>
                        <div id="test" class="ui-box-wrp">
                            <div class="row row-15">
                                <h4 class="mt-15 details col-md-1 f-18 test-result text-red ">fail</h4>
                                <div class="col-md-8 marks-wrp">
                                    <div>
                                        <div class="total">78</div>
                                    </div>
                                    <h5 class="mt-15  details ml-15 result-text">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing e.lit. Nulla quam velit,</h5>
                                </div>

                            </div>
                            <div class="row row-15">
                                <h4 class="mt-15 details col-md-1 f-18 test-result text-green ">Pass</h4>
                                <div class="col-md-8 marks-wrp">
                                    <div>
                                        <div class="total">78</div>
                                    </div>
                                    <h5 class="mt-15  details ml-15 result-text">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing e.lit. Nulla quam velit,</h5>
                                </div>

                            </div>
                            <div class="row row-15">
                                <h4 class="mt-15 details col-md-1 f-18 test-result text-green ">Pass</h4>
                                <div class="col-md-8 marks-wrp">
                                    <div>
                                        <div class="total">98</div>
                                    </div>
                                    <h5 class="mt-15  details ml-15 result-text">Lorem ipsum dolor sit amet, consectetur
                                        adipiscing e.lit. Nulla quam velit,</h5>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--interview-->
                    <div class="ui_accordion">
                        <a href="#interview" class="ui-link">interview - 1
                            <span>(<span>21 Jun 2016</span>)</span>
                            <span class="text-percentage ml-60">60</span>
                        </a>
                        <div id="interview" class="ui-box-wrp">

                            <div class="top mb-30">
                                <div class="table-block mb-20">
                                    <div class="cell size-10"></div>
                                    <div class="cell size-10">
                                        <div class="table-block">
                                            <div class="cell size-10 pl-10">
                                                <div class="img-wrp--35">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <div class="cell size-10 pl-10">
                                                <div class="img-wrp--35">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <div class="cell size-10 pl-10">
                                                <div class="img-wrp--35">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="table-block mark-row">
                                    <div class="cell size-10">
                                        <h5 class="details">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipiscing e.lit. Nulla quam velit,</h5>
                                    </div>
                                    <div class="cell size-10">
                                        <div class="table-block">
                                            <div class="cell size-10 pl-10">
                                                <div class="mark black">3</div>
                                            </div>
                                            <div class="cell size-10 pl-10">
                                                <div class="mark black select">4</div>
                                                <div class="tip">
                                                    Lorem ipsum dolor sit amet, consectetur a
                                                </div>
                                            </div>
                                            <div class="cell size-10 pl-10">
                                                <div class="mark black">5</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-block mark-row">
                                    <div class="cell size-10">
                                        <h5 class="details">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipiscing e.lit. Nulla quam velit,</h5>
                                    </div>
                                    <div class="cell size-10">
                                        <div class="table-block">
                                            <div class="cell size-10 pl-10">
                                                <div class="mark black">3</div>
                                            </div>
                                            <div class="cell size-10 pl-10">
                                                <div class="mark black ">4</div>
                                            </div>
                                            <div class="cell size-10 pl-10">
                                                <div class="mark black select">5</div>
                                                <div class="tip">
                                                    Lorem ipsum dolor sit amet, consectetur a
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="down">
                                <div class="table-block">

                                    <div class="cell size-7">

                                        <div class="table-block result-status">
                                            <div class="cell ">
                                                <h4 class="details f-18 test-result text-red ">Reject</h4>
                                            </div>
                                            <div class="cell">
                                                <div class="img-wrp--35">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <div class="cell">
                                                <h5 class="details result-text">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing e.lit. Nulla quam velit,</h5>
                                            </div>
                                        </div>

                                        <div class="table-block result-status">
                                            <div class="cell ">
                                                <h4 class="details f-18 test-result text-green ">Pass</h4>
                                            </div>
                                            <div class="cell">
                                                <div class="img-wrp--35">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <div class="cell">
                                                <h5 class="details result-text">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing e.lit. Nulla quam velit,</h5>
                                            </div>
                                        </div>

                                        <div class="table-block result-status">
                                            <div class="cell ">
                                                <h4 class="details f-18 test-result text-green ">Pass</h4>
                                            </div>
                                            <div class="cell">
                                                <div class="img-wrp--35">
                                                    <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                </div>
                                            </div>
                                            <div class="cell">
                                                <h5 class="details result-text">Lorem ipsum dolor sit amet,
                                                    consectetur
                                                    adipiscing e.lit. Nulla quam velit,</h5>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="cell size-3">
                                        <h4 class="result text-right dark s-65">
                                            <span class="text pr-10">Result</span>
                                            <span class="circle text-percentage">60</span>
                                        </h4>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12">

            </div>


        </div>
    </div>


    <div class="col-md-12 mt-30">

        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title-18 mb-15 up-case">Lorem Ipsum</h4>
                </div>

                <div class="col-md-12">
                    <ul class="qt-mark-list">
                        <li>
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="details">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing
                                        e.lit. Nulla quam velit,
                                    </h5>
                                    <div class="textarea-layout mt-10">
                                        <textarea name="" id="" cols="30" rows="10" class="comment-45"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-7 mt-sm-15">
                                    <div class="marks-block">
                                        <div class="mark-wrp">
                                            <div class="mark">1</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">2</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">3</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">4</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">5</div>
                                            <input type="radio" name="mark">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="details">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing
                                        e.lit. Nulla quam velit,
                                    </h5>
                                    <div class="textarea-layout mt-10">
                                        <textarea name="" id="" cols="30" rows="10" class="comment-45"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-7 mt-sm-15">
                                    <div class="marks-block">
                                        <div class="mark-wrp">
                                            <div class="mark">1</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark select">2</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">3</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">4</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">5</div>
                                            <input type="radio" name="mark">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-md-8">
                                    <h5 class="details">Lorem ipsum dolor sit amet,
                                        consectetur
                                        adipiscing
                                        e.lit. Nulla quam velit,
                                    </h5>
                                    <div class="textarea-layout mt-10">
                                        <textarea name="" id="" cols="30" rows="10" class="comment-45"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-7 mt-sm-15">
                                    <div class="marks-block">
                                        <div class="mark-wrp">
                                            <div class="mark">1</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">2</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">3</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">4</div>
                                            <input type="radio" name="mark">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">5</div>
                                            <input type="radio" name="mark">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title-18 mb-15 up-case">Candidates</h4>
                </div>

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 sc-wrapper mb-10">
                            <i class="ic_search"></i>
                            <input class="input-search" onkeyup="" placeholder="Search" type="text">
                        </div>
                    </div>
                    <ul class="list-candidate mt-15">
                        <li>
                            <h5 class="details">Natasha Guanwardane</h5>
                        </li>
                        <li>
                            <h5 class="details">Natasha Guanwardane</h5>
                        </li>
                        <li class="select">
                            <h5 class="details">Natasha Guanwardane</h5>
                        </li>
                        <li>
                            <h5 class="details">Natasha Guanwardane</h5>
                        </li>
                        <li>
                            <h5 class="details">Natasha Guanwardane</h5>
                        </li>
                        <li>
                            <h5 class="details">Natasha Guanwardane</h5>
                        </li>
                        <li>
                            <h5 class="details">Natasha Guanwardane</h5>
                        </li>
                        <li>
                            <h5 class="details">Natasha Guanwardane</h5>
                        </li>
                    </ul>
                </div>
            </div>


        </div>

    </div>

    <div class="col-md-12 mt-30">
        <div class="col-md-12 textarea-layout">
            <label for="">Comment</label>
            <textarea name="" id="" cols="30" rows="10" class="comment-45"></textarea>
        </div>

        <div class="col-md-12">
            <button class="bx-but bx-save">Pass</button>
            <button class="bx-but bx-exit">Reject</button>
            <button class="bx-but bx-save">Hold</button>
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
                            <option value="1"></option>
                            <option value="1">Designation</option>
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
        <!--        span.ic_30-->
    </div>

    <div class="col-md-12">

        <!--By Employee -->
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">
                        <div class="col-md-4 mt-5 left-side">
                            <h5 class="details">Natasha gunawardena</h5>
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

                                <div class="col-md-4">
                                    <h4 class="details f-18 up-case">Natasha gunawardhane</h4>
                                </div>

                                <div class="col-md-6">
                                    <h4 class="result mini">
                                        <span class="circle">60</span>
                                        <span class="text pl-10">Interview - Final</span>
                                    </h4>
                                </div>

                                <div class="col-md-2">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="ic_30 ic_30_pdf-download"></i>
                                        </div>
                                        <div class="col-xs-8 pl-10">
                                            <h6 class="title">Download</h6>
                                            <h5 class="details">CV</h5>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-12">
                            <!--History-->
                            <div class="ui_accordion">
                                <a href="#history2" class="ui-link red">History</a>
                                <div id="history2" class="ui-box-wrp">

                                </div>
                            </div>

                            <!--interview-->
                            <div class="ui_accordion m-0">
                                <a href="#interview" class="ui-link">
                                    <span>interview - 1</span>
                                    <span>(<span>21 Jun 2016</span>)</span>
                                    <span class="text-percentage ml-60">60</span>
                                </a>
                                <div id="interview" class="ui-box-wrp">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4 class="title-18 mb-15 up-case">Lorem Ipsum</h4>
                                                </div>

                                                <div class="col-md-12">
                                                    <ul class="qt-mark-list">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <h5 class="details">Lorem ipsum dolor sit amet,
                                                                        consectetur
                                                                        adipiscing
                                                                        e.lit. Nulla quam velit,
                                                                    </h5>
                                                                    <div class="textarea-layout mt-10">
                                                                        <textarea name="" id="" cols="30" rows="10"
                                                                                  class="comment-45"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-7 mt-sm-15">
                                                                    <div class="marks-block">
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">1</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">2</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">3</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">4</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">5</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <h5 class="details">Lorem ipsum dolor sit amet,
                                                                        consectetur
                                                                        adipiscing
                                                                        e.lit. Nulla quam velit,
                                                                    </h5>
                                                                    <div class="textarea-layout mt-10">
                                                                        <textarea name="" id="" cols="30" rows="10"
                                                                                  class="comment-45"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-7 mt-sm-15">
                                                                    <div class="marks-block">
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">1</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark select">2</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">3</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">4</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">5</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-md-8">
                                                                    <h5 class="details">Lorem ipsum dolor sit amet,
                                                                        consectetur
                                                                        adipiscing
                                                                        e.lit. Nulla quam velit,
                                                                    </h5>
                                                                    <div class="textarea-layout mt-10">
                                                                        <textarea name="" id="" cols="30" rows="10"
                                                                                  class="comment-45"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4 col-sm-7 mt-sm-15">
                                                                    <div class="marks-block">
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">1</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">2</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">3</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">4</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                        <div class="mark-wrp">
                                                                            <div class="mark">5</div>
                                                                            <input type="radio" name="mark">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 textarea-layout">
                                            <label for="">Comment</label>
                                            <textarea name="" id="" cols="30" rows="10" class="comment-100"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <button class="bx-but bx-save">Pass</button>
                            <button class="bx-but bx-exit">Reject</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>


<script src="<?php echo Yii::app()->baseUrl . '/js/custom/recruitment/drag-drop.js'; ?>"></script>

<!-- ===========================================================================
        Plugin Script
============================================================================ -->

<script>

    //    Scroll bar
    $(".scroll-cln,.scroll-empList").mCustomScrollbar({
        theme: "dark-3"
    });

    $(".list-candidate").mCustomScrollbar({
        theme: "dark-3"
    });

    //    $(".scroll-body").mCustomScrollbar({
    //        theme: "minimal-dark"
    //    });


</script>

<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>


    // Marks
    $('.mark-wrp .mark').click(function () {
        var parentLi = $(this).parents('li');

        parentLi.find('.mark-wrp .mark').removeClass('select');
        $(this).addClass('select');
        $(this).next('input[type=radio]').prop('checked', true);
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
                    thisA.closest('.tab-box').find('.box-head .left-side').fadeTo('slow', 0);
                });
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box');

            } else {
                //Slide Up
                $(this).removeClass('btn-expand-down');

                thisA.closest('.tab-box').find('.box-body').slideUp('slow', function () {
                    thisA.closest('.tab-box').find('.box-head .left-side').fadeTo('fast', 1);
                    thisA.closest('.tab-box ').parents('.card-content-wrp').removeClass('on');
                });

                $(this).closest('.tab-box ').find('.box-body').removeClass('active-box');

            }
            return false;
        });
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


    $('.cn-head').click(function () {
        var $that = $(this);

        if (!$that.hasClass('active')) {
            $that.addClass('active');
            $that.next('.cn-body').slideDown('fast');
            $that.find('.arrow-down').addClass('up');
        } else {
            $that.removeClass('active');
            $that.next('.cn-body').slideUp('fast');
            $that.find('.arrow-down').removeClass('up');
        }

    });
</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

