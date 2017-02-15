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


<div class="row">
    <div class="col-md-12">
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">
                        <div class="col-md-4 left mt-5">
                            <div class="col-md-9">
                                <div class="row">
                                    <h5 class="details">User Experience</h5>
                                    <h6 class="title code">A / FG / 236589</h6>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <h6 class="status right">
                                    <!---------- Status ------------
                                        red , green , yellow, gray
                                    -------------------------------->
                                    <spna class="st gray"></spna>
                                    1
                                </h6>
                            </div>
                        </div>

                        <div class="col-md-8 right-side">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-7 pl-0">

                                            <!--Status-->
                                            <!--Pending = ic_pending-->
                                            <!--Screen  = ic_screen-->

                                            <div class="ic_status">
                                                <i class="ic_st ic_pending"></i>
                                                <span>Pending</span>
                                            </div>

                                        </div>
                                        <div class="col-md-4 mt-5">
                                            <h5 class="details low-cs">30 Nov 2016</h5>
                                            <h6 class="title code low-cs">11 Days Left</h6>
                                        </div>
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
                    <div class="col-md-12">

                        <!--Left Side-->
                        <div class="col-md-4">

                            <div class="row">
                                <div class="col-md-12 mt-5">
                                    <div class="table-block duration">
                                        <div class="left">
                                            <h6 class="title low-cs du_head">Requested</h6>
                                            <h5 class="details low-cs">2 Oct 2016</h5>
                                        </div>
                                        <div class="middle">
                                            <!--  Status-->
                                            <!-- Default blue , red -->
                                            <div class="cr_duration red">
                                                <span>124</span>
                                                <h6>Days</h6>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h6 class="title low-cs du_head">To be closed</h6>
                                            <h5 class="details low-cs">30 Nov 2016</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <!--Image Block-->
                                <div class="col-md-12 mt-40">
                                    <div class="img-block">
                                        <div class="img-area">
                                            <div class="img-wrp--50">
                                                <?php echo Common::showEmployeeThumbnailx50(2); ?>
                                            </div>
                                        </div>
                                        <div class="info-area">
                                            <h5 class="details up-case">Chathuri GaneshaN</h5>
                                            <h6 class="title">UX Architecture</h6>
                                        </div>
                                    </div>
                                </div>

                                <!-- Note-->
                                <div class="col-md-12 mt-15 mb-30">
                                    <p class="note">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                                        velit, vulputate eu pharetr</p>
                                </div>

                                <div class="col-md-12">
                                    <div class="ui_accordion rc-accordion">
                                        <a href="#1" class="ui-link ">Job offer <span class="count">3</span></a>
                                        <div id="1" class="ui-box-wrp">
                                            <div class="row">
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ui_accordion rc-accordion">
                                        <a href="#2" class="ui-link ">On boarding<span class="count">3</span></a>
                                        <div id="2" class="ui-box-wrp">
                                            <div class="row">
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--Right Side-->
                        <div class="col-md-8">

                            <div class="col-md-12">
                                <!-- Header-->
                                <div class="row mb-15">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <div class="row">
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
                                    </div>
                                </div>

                                <div class="scroll-list">
                                    <!-- Loop goes here-->
                                    <div class="row border-row">
                                        <h5 class="details col-md-2">30 Nov</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
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

                                    <div class="row border-row">
                                        <h5 class="details col-md-2">1 Dec</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
                                                <div class="col-md-2"></div>
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

                                    <div class="row border-row">
                                        <h5 class="details col-md-2">2 Dec</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
                                                <div class="col-md-2">

                                                </div>
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
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">

                                                </div>
                                                <div class="col-md-2">
                                                    <span class="dot"></span>
                                                    <div class="name-popup pnl-popup">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row border-row">
                                        <h5 class="details col-md-2">2 Dec</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
                                                <div class="col-md-2">

                                                </div>
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
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">

                                                </div>
                                                <div class="col-md-2">
                                                    <span class="dot"></span>
                                                    <div class="name-popup pnl-popup">
                                                        Natasha Gunawardana
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
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">
                        <div class="col-md-4 left mt-5">
                            <div class="col-md-9">
                                <div class="row">
                                    <h5 class="details">User Experience</h5>
                                    <h6 class="title code">A / FG / 236589</h6>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <h6 class="status right">

                                    <!---------- Status ------------
                                        red , green , yellow, gray
                                    -------------------------------->

                                    <spna class="st green"></spna>
                                    1
                                </h6>
                            </div>
                        </div>

                        <div class="col-md-8 right-side">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-7 pl-0">

                                            <!--Status-->
                                            <!--Pending = ic_pending-->
                                            <!--Screen  = ic_screen-->

                                            <div class="ic_status">
                                                <i class="ic_st ic_screen"></i>
                                                <span>Screening</span>
                                            </div>

                                        </div>
                                        <div class="col-md-4 mt-5">
                                            <h5 class="details low-cs">30 Nov 2016</h5>
                                            <h6 class="title code low-cs">11 Days Left</h6>
                                        </div>
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
                    <div class="col-md-12">

                        <!--Left Side-->
                        <div class="col-md-4">

                            <div class="row">
                                <div class="col-md-12 mt-5">
                                    <div class="table-block duration">
                                        <div class="left">
                                            <h6 class="title low-cs du_head">Requested</h6>
                                            <h5 class="details low-cs">2 Oct 2016</h5>
                                        </div>
                                        <div class="middle">
                                            <!--  Status-->
                                            <!-- Default blue , red -->
                                            <div class="cr_duration">
                                                <span>124</span>
                                                <h6>Days</h6>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h6 class="title low-cs du_head">To be closed</h6>
                                            <h5 class="details low-cs">30 Nov 2016</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <!--Image Block-->
                                <div class="col-md-12 mt-40">
                                    <div class="img-block">
                                        <div class="img-area">
                                            <div class="img-wrp--50">
                                                <?php echo Common::showEmployeeThumbnailx50(2); ?>
                                            </div>
                                        </div>
                                        <div class="info-area">
                                            <h5 class="details up-case">Chathuri GaneshaN</h5>
                                            <h6 class="title">UX Architecture</h6>
                                        </div>
                                    </div>
                                </div>

                                <!-- Note-->
                                <div class="col-md-12 mt-15 mb-30">
                                    <p class="note">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                                        velit, vulputate eu pharetr</p>
                                </div>

                                <div class="col-md-12">
                                    <div class="ui_accordion rc-accordion">
                                        <a href="#1" class="ui-link ">Job offer <span class="count">3</span></a>
                                        <div id="1" class="ui-box-wrp">
                                            <div class="row">
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ui_accordion rc-accordion">
                                        <a href="#2" class="ui-link ">On boarding<span class="count">3</span></a>
                                        <div id="2" class="ui-box-wrp">
                                            <div class="row">
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--Right Side-->
                        <div class="col-md-8">

                            <div class="col-md-12">
                                <!-- Header-->
                                <div class="row mb-15">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <div class="row">
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
                                    </div>
                                </div>

                                <div class="scroll-list">
                                    <!-- Loop goes here-->
                                    <div class="row border-row">
                                        <h5 class="details col-md-2">30 Nov</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
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

                                    <div class="row border-row">
                                        <h5 class="details col-md-2">1 Dec</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
                                                <div class="col-md-2"></div>
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

                                    <div class="row border-row">
                                        <h5 class="details col-md-2">2 Dec</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
                                                <div class="col-md-2">

                                                </div>
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
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">

                                                </div>
                                                <div class="col-md-2">
                                                    <span class="dot"></span>
                                                    <div class="name-popup pnl-popup">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row border-row">
                                        <h5 class="details col-md-2">2 Dec</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
                                                <div class="col-md-2">

                                                </div>
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
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">

                                                </div>
                                                <div class="col-md-2">
                                                    <span class="dot"></span>
                                                    <div class="name-popup pnl-popup">
                                                        Natasha Gunawardana
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
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">
                        <div class="col-md-4 left mt-5">
                            <div class="col-md-9">
                                <div class="row">
                                    <h5 class="details">User Experience</h5>
                                    <h6 class="title code">A / FG / 236589</h6>
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <h6 class="status right">
                                    <!---------- Status ------------
                                        red , green , yellow, gray
                                    -------------------------------->
                                    <spna class="st yellow"></spna>
                                    1
                                </h6>
                            </div>
                        </div>

                        <div class="col-md-8 right-side">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="row">
                                        <div class="col-md-7 pl-0">

                                            <!--Status-->
                                            <!--Pending = ic_pending-->
                                            <!--Screen  = ic_screen-->

                                            <div class="ic_status">
                                                <i class="ic_st ic_pending"></i>
                                                <span>Pending</span>
                                            </div>

                                        </div>
                                        <div class="col-md-4 mt-5">
                                            <h5 class="details low-cs">30 Nov 2016</h5>
                                            <h6 class="title code low-cs">11 Days Left</h6>
                                        </div>
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
                    <div class="col-md-12">

                        <!--Left Side-->
                        <div class="col-md-4">

                            <div class="row">
                                <div class="col-md-12 mt-5">
                                    <div class="table-block duration">
                                        <div class="left">
                                            <h6 class="title low-cs du_head">Requested</h6>
                                            <h5 class="details low-cs">2 Oct 2016</h5>
                                        </div>
                                        <div class="middle">
                                            <!--  Status-->
                                            <!-- Default blue , red -->
                                            <div class="cr_duration red">
                                                <span>124</span>
                                                <h6>Days</h6>
                                            </div>
                                        </div>
                                        <div class="right">
                                            <h6 class="title low-cs du_head">To be closed</h6>
                                            <h5 class="details low-cs">30 Nov 2016</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <!--Image Block-->
                                <div class="col-md-12 mt-40">
                                    <div class="img-block">
                                        <div class="img-area">
                                            <div class="img-wrp--50">
                                                <?php echo Common::showEmployeeThumbnailx50(2); ?>
                                            </div>
                                        </div>
                                        <div class="info-area">
                                            <h5 class="details up-case">Chathuri GaneshaN</h5>
                                            <h6 class="title">UX Architecture</h6>
                                        </div>
                                    </div>
                                </div>

                                <!-- Note-->
                                <div class="col-md-12 mt-15 mb-30">
                                    <p class="note">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                                        velit, vulputate eu pharetr</p>
                                </div>

                                <div class="col-md-12">
                                    <div class="ui_accordion rc-accordion">
                                        <a href="#1" class="ui-link ">Job offer <span class="count">3</span></a>
                                        <div id="1" class="ui-box-wrp">
                                            <div class="row">
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ui_accordion rc-accordion">
                                        <a href="#2" class="ui-link ">On boarding<span class="count">3</span></a>
                                        <div id="2" class="ui-box-wrp">
                                            <div class="row">
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                                <div class="col-md-12 emp-block">
                                                    <h5 class="details">Chathuri GaneshaN</h5>
                                                    <h6 class="title mt-2">03 Nov 2016</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!--Right Side-->
                        <div class="col-md-8">

                            <div class="col-md-12">
                                <!-- Header-->
                                <div class="row mb-15">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <div class="row">
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
                                    </div>
                                </div>

                                <div class="scroll-list">
                                    <!-- Loop goes here-->
                                    <div class="row border-row">
                                        <h5 class="details col-md-2">30 Nov</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
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

                                    <div class="row border-row">
                                        <h5 class="details col-md-2">1 Dec</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
                                                <div class="col-md-2"></div>
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

                                    <div class="row border-row">
                                        <h5 class="details col-md-2">2 Dec</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
                                                <div class="col-md-2">

                                                </div>
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
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">

                                                </div>
                                                <div class="col-md-2">
                                                    <span class="dot"></span>
                                                    <div class="name-popup pnl-popup">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row border-row">
                                        <h5 class="details col-md-2">2 Dec</h5>
                                        <div class="col-md-10">
                                            <div class="row mt-2">
                                                <div class="col-md-2">

                                                </div>
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
                                                <div class="col-md-2"></div>
                                                <div class="col-md-2">

                                                </div>
                                                <div class="col-md-2">
                                                    <span class="dot"></span>
                                                    <div class="name-popup pnl-popup">
                                                        Natasha Gunawardana
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


</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

