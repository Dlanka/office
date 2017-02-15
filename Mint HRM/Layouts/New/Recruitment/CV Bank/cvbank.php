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
// Accrodion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');
// Main
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/panal.css', 'screen');
// Main
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/interviewing.css', 'screen');
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
// mScroll Bar
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/mScrollbar/jquery.mCustomScrollbar.concat.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<!--Search-->
<div class="row">
    <div class="col-md-12">
        <div class="c-search-wrapper">
            <div class="c-search-content">

                <div class="c-search-item active">
                    <div class="col_1">
                        <select name="" id="" class="select-box">
                            <option value="2"></option>
                            <option value="1" selected="selected">Designation</option>
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
                        <div class="col-md-4 left mt-5 mb-5">
                            <h5 class="details up-case">Natasha Gunawardane</h5>

                        </div>
                        <div class="col-md-4 mt-5 mb-5">
                            <h5 class="details low-case">
                                Android Developer
                            </h5>
                        </div>
                        <div class="col-md-4 mt-5 mb-5">
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


                        <div class="col-md-12">

                            <div class="row form-row">

                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label>Name</label>
                                    <h5 class="details">Natasha Gunawardana</h5>
                                </div>
                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label class="focusLbl ">Contact No</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>
                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label class="focusLbl ">NIC/Passport</label>
                                    <h5 class="details">235698745V</h5>
                                </div>

                            </div>

                            <div class="row form-row">

                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label class="focusLbl ">Email</label>
                                    <h5 class="details">natasha@gmail.com</h5>
                                </div>
                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No - Optional</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <i class="ic_30 ic_30_pdf-download"></i>
                                        </div>
                                        <div class="col-xs-8 pl-0">
                                            <h6 class="title">Download</h6>
                                            <h5 class="details">CV</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="ui_accordion rc-accordion">
                                <a href="#2" class="ui-link ">android developer</a>
                                <div id="2" class="ui-box-wrp">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="details">21 Nov 2016</h5>
                                            <h6 class="title code">A / FG / 236589</h6>
                                        </div>
                                        <div class="col-md-8">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- Header-->
                                                    <div class="row mb-15">

                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Screening</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Short List</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Shedule</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Interview</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Job Offer</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp ">
                                                                <i class="ic_30 ic_screen green"></i>
                                                                <h6 class="title center">On Boarding</h6>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="scroll-list">
                                                        <!-- Loop goes here-->
                                                        <div class="row border-row">
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">

                                                            </div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                        <div class="row border-row">
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">

                                                            </div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-12 mt-5">
                                                    <div class="status-wrp">
                                                        <h6 class="status">
                                                            <spna class="st green"></spna>
                                                            Pass
                                                        </h6>
                                                        <h6 class="status">
                                                            <spna class="st yellow"></spna>
                                                            Pending
                                                        </h6>
                                                        <h6 class="status">
                                                            <spna class="st red"></spna>
                                                            Reject
                                                        </h6>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="ui-sm-accordion">
                                                <a href="#1" class="ui-sm-link">interview - 1</a>
                                                <div id="1" class="ui-sm-box-wrp">

                                                    <div class="top mb-30">
                                                        <div class="table-block mb-20">
                                                            <div class="cell size-10"></div>
                                                            <div class="cell size-10">
                                                                <div class="table-block">
                                                                    <div class="cell size-10 pl-10">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell size-10 pl-10">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell size-10 pl-10">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
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
                                                                        <h4 class="details f-18 test-result text-red ">
                                                                            Reject</h4>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <h5 class="details result-text">Lorem ipsum
                                                                            dolor sit amet,
                                                                            consectetur
                                                                            adipiscing e.lit. Nulla quam velit,</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="table-block result-status">
                                                                    <div class="cell ">
                                                                        <h4 class="details f-18 test-result text-green ">
                                                                            Pass</h4>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <h5 class="details result-text">Lorem ipsum
                                                                            dolor sit amet,
                                                                            consectetur
                                                                            adipiscing e.lit. Nulla quam velit,</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="table-block result-status">
                                                                    <div class="cell ">
                                                                        <h4 class="details f-18 test-result text-green ">
                                                                            Pass</h4>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <h5 class="details result-text">Lorem ipsum
                                                                            dolor sit amet,
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

                                            <div class="ui-sm-accordion">
                                                <a href="#2" class="ui-sm-link">Job Offer</a>
                                                <div id="2" class="ui-sm-box-wrp">


                                                </div>
                                            </div>

                                            <div class="ui-sm-accordion">
                                                <a href="#3" class="ui-sm-link">on boarding</a>
                                                <div id="3" class="ui-sm-box-wrp">


                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12">
                        <button class="bx-but bx-exit edit">Edit</button>
                        <button class="bx-but bx-next">Short Listing</button>
                    </div>

                </div>

            </div>
        </div>
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">
                        <div class="col-md-4 left mt-5 mb-5">
                            <h5 class="details up-case">Natasha Gunawardane</h5>

                        </div>
                        <div class="col-md-4 mt-5 mb-5">
                            <h5 class="details low-case">
                                Android Developer
                            </h5>
                        </div>
                        <div class="col-md-4 mt-5 mb-5">
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


                        <div class="col-md-12">

                            <div class="row form-row">

                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label>Name</label>
                                    <h5 class="details">Natasha Gunawardana</h5>
                                </div>
                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label class="focusLbl ">Contact No</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>
                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label class="focusLbl ">NIC/Passport</label>
                                    <h5 class="details">235698745V</h5>
                                </div>

                            </div>

                            <div class="row form-row">

                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label class="focusLbl ">Email</label>
                                    <h5 class="details">natasha@gmail.com</h5>
                                </div>
                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No - Optional</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <i class="ic_30 ic_30_pdf-download"></i>
                                        </div>
                                        <div class="col-xs-8 pl-0">
                                            <h6 class="title">Download</h6>
                                            <h5 class="details">CV</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="ui_accordion rc-accordion">
                                <a href="#2" class="ui-link ">android developer</a>
                                <div id="2" class="ui-box-wrp">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="details">21 Nov 2016</h5>
                                            <h6 class="title code">A / FG / 236589</h6>
                                        </div>
                                        <div class="col-md-8">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- Header-->
                                                    <div class="row mb-15">

                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Screening</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Short List</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Shedule</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Interview</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Job Offer</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp ">
                                                                <i class="ic_30 ic_screen green"></i>
                                                                <h6 class="title center">On Boarding</h6>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="scroll-list">
                                                        <!-- Loop goes here-->
                                                        <div class="row border-row">
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">

                                                            </div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                        <div class="row border-row">
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">

                                                            </div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-12 mt-5">
                                                    <div class="status-wrp">
                                                        <h6 class="status">
                                                            <spna class="st green"></spna>
                                                            Pass
                                                        </h6>
                                                        <h6 class="status">
                                                            <spna class="st yellow"></spna>
                                                            Pending
                                                        </h6>
                                                        <h6 class="status">
                                                            <spna class="st red"></spna>
                                                            Reject
                                                        </h6>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="ui-sm-accordion">
                                                <a href="#1" class="ui-sm-link">interview - 1</a>
                                                <div id="1" class="ui-sm-box-wrp">

                                                    <div class="top mb-30">
                                                        <div class="table-block mb-20">
                                                            <div class="cell size-10"></div>
                                                            <div class="cell size-10">
                                                                <div class="table-block">
                                                                    <div class="cell size-10 pl-10">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell size-10 pl-10">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell size-10 pl-10">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
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
                                                                        <h4 class="details f-18 test-result text-red ">
                                                                            Reject</h4>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <h5 class="details result-text">Lorem ipsum
                                                                            dolor sit amet,
                                                                            consectetur
                                                                            adipiscing e.lit. Nulla quam velit,</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="table-block result-status">
                                                                    <div class="cell ">
                                                                        <h4 class="details f-18 test-result text-green ">
                                                                            Pass</h4>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <h5 class="details result-text">Lorem ipsum
                                                                            dolor sit amet,
                                                                            consectetur
                                                                            adipiscing e.lit. Nulla quam velit,</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="table-block result-status">
                                                                    <div class="cell ">
                                                                        <h4 class="details f-18 test-result text-green ">
                                                                            Pass</h4>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <h5 class="details result-text">Lorem ipsum
                                                                            dolor sit amet,
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

                                            <div class="ui-sm-accordion">
                                                <a href="#2" class="ui-sm-link">Job Offer</a>
                                                <div id="2" class="ui-sm-box-wrp">


                                                </div>
                                            </div>

                                            <div class="ui-sm-accordion">
                                                <a href="#3" class="ui-sm-link">on boarding</a>
                                                <div id="3" class="ui-sm-box-wrp">


                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12">
                        <button class="bx-but bx-exit edit">Edit</button>
                        <button class="bx-but bx-next">Short Listing</button>
                    </div>

                </div>

            </div>
        </div>
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">
                        <div class="col-md-4 left mt-5 mb-5">
                            <h5 class="details up-case">Natasha Gunawardane</h5>

                        </div>
                        <div class="col-md-4 mt-5 mb-5">
                            <h5 class="details low-case">
                                Android Developer
                            </h5>
                        </div>
                        <div class="col-md-4 mt-5 mb-5">
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


                        <div class="col-md-12">

                            <div class="row form-row">

                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label>Name</label>
                                    <h5 class="details">Natasha Gunawardana</h5>
                                </div>
                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label class="focusLbl ">Contact No</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>
                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label class="focusLbl ">NIC/Passport</label>
                                    <h5 class="details">235698745V</h5>
                                </div>

                            </div>

                            <div class="row form-row">

                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label class="focusLbl ">Email</label>
                                    <h5 class="details">natasha@gmail.com</h5>
                                </div>
                                <div class="col-md-4 input-default">
                                    <input type="text" class="hide">
                                    <label>Contact No - Optional</label>
                                    <h5 class="details">011 3658987</h5>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <i class="ic_30 ic_30_pdf-download"></i>
                                        </div>
                                        <div class="col-xs-8 pl-0">
                                            <h6 class="title">Download</h6>
                                            <h5 class="details">CV</h5>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="ui_accordion rc-accordion">
                                <a href="#2" class="ui-link ">android developer</a>
                                <div id="2" class="ui-box-wrp">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h5 class="details">21 Nov 2016</h5>
                                            <h6 class="title code">A / FG / 236589</h6>
                                        </div>
                                        <div class="col-md-8">

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <!-- Header-->
                                                    <div class="row mb-15">

                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Screening</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Short List</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Shedule</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Interview</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp">
                                                                <i class="ic_30 ic_screen"></i>
                                                                <h6 class="title center">Job Offer</h6>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="ic_30_wrp ">
                                                                <i class="ic_30 ic_screen green"></i>
                                                                <h6 class="title center">On Boarding</h6>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="scroll-list">
                                                        <!-- Loop goes here-->
                                                        <div class="row border-row">
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">

                                                            </div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>
                                                        <div class="row border-row">
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">

                                                            </div>
                                                            <div class="col-md-2"></div>
                                                            <div class="col-md-2">
                                                                <span class="dot"></span>
                                                                <div class="name-popup pnl-popup">
                                                                    Natasha Gunawardana
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2"></div>
                                                        </div>

                                                    </div>
                                                </div>

                                                <div class="col-md-12 mt-5">
                                                    <div class="status-wrp">
                                                        <h6 class="status">
                                                            <spna class="st green"></spna>
                                                            Pass
                                                        </h6>
                                                        <h6 class="status">
                                                            <spna class="st yellow"></spna>
                                                            Pending
                                                        </h6>
                                                        <h6 class="status">
                                                            <spna class="st red"></spna>
                                                            Reject
                                                        </h6>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="ui-sm-accordion">
                                                <a href="#1" class="ui-sm-link">interview - 1</a>
                                                <div id="1" class="ui-sm-box-wrp">

                                                    <div class="top mb-30">
                                                        <div class="table-block mb-20">
                                                            <div class="cell size-10"></div>
                                                            <div class="cell size-10">
                                                                <div class="table-block">
                                                                    <div class="cell size-10 pl-10">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell size-10 pl-10">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell size-10 pl-10">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
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
                                                                        <h4 class="details f-18 test-result text-red ">
                                                                            Reject</h4>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <h5 class="details result-text">Lorem ipsum
                                                                            dolor sit amet,
                                                                            consectetur
                                                                            adipiscing e.lit. Nulla quam velit,</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="table-block result-status">
                                                                    <div class="cell ">
                                                                        <h4 class="details f-18 test-result text-green ">
                                                                            Pass</h4>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <h5 class="details result-text">Lorem ipsum
                                                                            dolor sit amet,
                                                                            consectetur
                                                                            adipiscing e.lit. Nulla quam velit,</h5>
                                                                    </div>
                                                                </div>

                                                                <div class="table-block result-status">
                                                                    <div class="cell ">
                                                                        <h4 class="details f-18 test-result text-green ">
                                                                            Pass</h4>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <div class="img-wrp--35">
                                                                            <img class="user-img"
                                                                                 src="/hris/uploads/empProfile/35/sandun.png"
                                                                                 alt="Employee Image"></div>
                                                                    </div>
                                                                    <div class="cell">
                                                                        <h5 class="details result-text">Lorem ipsum
                                                                            dolor sit amet,
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

                                            <div class="ui-sm-accordion">
                                                <a href="#2" class="ui-sm-link">Job Offer</a>
                                                <div id="2" class="ui-sm-box-wrp">


                                                </div>
                                            </div>

                                            <div class="ui-sm-accordion">
                                                <a href="#3" class="ui-sm-link">on boarding</a>
                                                <div id="3" class="ui-sm-box-wrp">


                                                </div>
                                            </div>

                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-12">
                        <button class="bx-but bx-exit edit">Edit</button>
                        <button class="bx-but bx-next">Short Listing</button>
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
    $(".scroll-list").mCustomScrollbar({
        theme: "minimal-dark"
    });
    //
    //    $(".shift-scroll").mCustomScrollbar({
    //        theme: "minimal-dark"
    //    });

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

    $('.ui-sm-link').on('click', function () {
        if (!$(this).hasClass('active-link')) {
            $(this).addClass('active-link');
            $(this).nextAll('.ui-sm-box-wrp').slideDown('slow').addClass('active');
            return false;
        } else {
            $(this).removeClass('active-link');
            $(this).nextAll('.ui-sm-box-wrp').slideUp('slow').removeClass('active');
            return false;
        }
        return false;

    });


    $('.edit').on('click', function () {

        var $parent = $(this).parents('.box-body');

        var $inputDefWrap = $parent.find('.input-default');
        $inputDefWrap.find('input[type=text]').removeClass('hide').addClass('show');
        $inputDefWrap.find('h5.details').addClass('hide');
        $inputDefWrap.removeClass('input-default').addClass('input-layout');

        form.reset();

    });

</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

