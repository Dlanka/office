<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// sweetalert
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/sweetalert/sweetalert.css', 'screen');


//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Advance Search
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/search-adv.css', 'screen');
// Accrodion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');
//Setting
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/setting/main.css', 'screen');

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
// mScroll Bar
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/mScrollbar/jquery.mCustomScrollbar.concat.min.js', CClientScript::POS_HEAD);
// Jqury UI
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery-ui-1.12.0.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<div class="col-md-12 mb-30">
    <div class="contert-wrapper sc-wrp">
        <div class="search-wrp set-3">

            <div class="search-group active ">
                <div>
                    <div class="item"><select name="" id="">
                            <option value="2">Designation</option>
                            <option value="1">Designation2</option>
                        </select></div>
                    <div class="item"><input type="text" placeholder="Search"></div>
                    <div class="item">
                        <button class="btn-search" type="button" onclick=""></button>
                    </div>
                </div>
                <a class="advace" href="#">Advance</a>
            </div>

            <div class="exp-wrp">
                <a class="top-exp" href="#"></a>
            </div>

            <div class="view-box">
                <div class="row ad-search">
                    <div class="col-md-4">
                        <label for="">Text</label>
                        <input type="text">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <button class="ad-search">Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12">


    <div class="col-md-12 mb-10">
        <div class="col-md-4">
            <div class="but-gruop-wrp mb-0">
                <label>
                    <input class="selectAll" type="checkbox">
                    <span class="check-box"></span>
                    <span class="pl-15">Select All</span>
                </label>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-offset-8 col-md-3">
                    <select name="" id="">
                        <option value="">Group 1</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card-content-wrp">

                <div class="tab-box">
                    <div class="box-head ">
                        <div class="col-md-12">
                            <div class="left-b col-md-4">
                                <div class="table-block">
                                    <div class="cell zero-width">
                                        <div class="but-gruop-wrp mb-0">
                                            <label>
                                                <input class="child-cbx" type="checkbox"/>
                                                <span class="check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="cell pl-15">
                                        <div class="table-block">
                                            <div class="cell zero-width">
                                                <div class="img-wrp--35">
                                                    <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                </div>
                                            </div>
                                            <div class="cell">
                                                <h5 class="col-md-10 u-name low-case">Sandun Maduranga</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="right-side col-md-8">
                                <div class="row">
                                    <h5 class="col-md-4 details low-case mt-10">UX Engineering</h5>
                                    <h5 class="col-md-offset-4 col-md-4 details low-case mt-10">Group 1</h5>
                                </div>

                            </div>
                        </div>
                        <div class="btn-expand-wrp">
                            <a class="btn-expand" href="#"></a>
                        </div>
                    </div>

                    <div class="box-body pt-20">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <!-- Performance Appraisal Methodology-->
                                <div class="ui_accordion">
                                    <a href="#step1" class="ui-link d-block ">
                                        Performance Appraisal Methodology
                                    </a>
                                    <div id="step1" class="ui-box-wrp pr-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!--  Individual performance targets-->
                                                <div id="target2" class="ui-sm-accordion">
                                                    <a href="#ind_target" class="ui-sm-link">
                                                        <span>Individual targets</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>30%</span>
                                                    </a>

                                                    <div id="ind_target" class="ui-sm-box-wrp">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12 line_tab_wrp line_tab_auto">
                                                                    <ul class="line_tab">
                                                                        <li class="active">
                                                                            <a href="#superior">
                                                                                <span>Superior</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#su-superior">
                                                                                <span>Su. Superior</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#subordinate2">
                                                                                <span>Subordinate</span>
                                                                                <span>&nbsp;-&nbsp;</span>
                                                                                <span>3</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#peer">
                                                                                <span>Peer</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#customer">
                                                                                <span>customer</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#self">
                                                                                <span>Self</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="line_tab_content pt-30 pb-30">
                                                                        <div class="tab-items active" id="superior">
                                                                            <div class="row">
                                                                                <div class="col-md-12">

                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>
                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-items" id="su-superior">
                                                                            <div class="row">
                                                                                <div class="col-md-12">

                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>
                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-items" id="subordinate2">
                                                                            <div class="row">
                                                                                <div class="col-md-12">

                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="but-gruop-wrp mb-0">
                                                                                                        <label>
                                                                                                            <input
                                                                                                                class="child-cbx"
                                                                                                                type="checkbox"/>
                                                                                                            <span
                                                                                                                class="check-box"></span>
                                                                                                            <span></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <div
                                                                                                        class="table-block">
                                                                                                        <div
                                                                                                            class="cell zero-width">
                                                                                                            <div
                                                                                                                class="img-wrp--35">
                                                                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="cell pl-15">
                                                                                                            <h5 class="u-name low-case">
                                                                                                                Sandun
                                                                                                                Maduranga</h5>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>
                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="but-gruop-wrp mb-0">
                                                                                                        <label>
                                                                                                            <input
                                                                                                                class="child-cbx"
                                                                                                                type="checkbox"/>
                                                                                                            <span
                                                                                                                class="check-box"></span>
                                                                                                            <span></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <div
                                                                                                        class="table-block">
                                                                                                        <div
                                                                                                            class="cell zero-width">
                                                                                                            <div
                                                                                                                class="img-wrp--35">
                                                                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="cell pl-15">
                                                                                                            <h5 class="u-name low-case">
                                                                                                                Sandun
                                                                                                                Maduranga</h5>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-items" id="peer">
                                                                            <div class="row">
                                                                                <div class="col-md-5 sc-wrapper mb-20">
                                                                                    <i class="ic_search"></i>
                                                                                    <input class="input-search"
                                                                                           placeholder="Search here"
                                                                                           type="text">
                                                                                </div>

                                                                                <div class="col-md-12">

                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="but-gruop-wrp mb-0">
                                                                                                        <label>
                                                                                                            <input
                                                                                                                class="child-cbx"
                                                                                                                type="checkbox"/>
                                                                                                            <span
                                                                                                                class="check-box"></span>
                                                                                                            <span></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <div
                                                                                                        class="table-block">
                                                                                                        <div
                                                                                                            class="cell zero-width">
                                                                                                            <div
                                                                                                                class="img-wrp--35">
                                                                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="cell pl-15">
                                                                                                            <h5 class="u-name low-case">
                                                                                                                Sandun
                                                                                                                Maduranga</h5>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>
                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="but-gruop-wrp mb-0">
                                                                                                        <label>
                                                                                                            <input
                                                                                                                class="child-cbx"
                                                                                                                type="checkbox"/>
                                                                                                            <span
                                                                                                                class="check-box"></span>
                                                                                                            <span></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <div
                                                                                                        class="table-block">
                                                                                                        <div
                                                                                                            class="cell zero-width">
                                                                                                            <div
                                                                                                                class="img-wrp--35">
                                                                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="cell pl-15">
                                                                                                            <h5 class="u-name low-case">
                                                                                                                Sandun
                                                                                                                Maduranga</h5>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-items" id="customer">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="row">

                                                                                        <div class="col-md-7">

                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-md-12 sc-wrapper">
                                                                                                    <i class="ic_search"></i>
                                                                                                    <input
                                                                                                        class="input-search"
                                                                                                        id="search_txt"
                                                                                                        name="search_txt"
                                                                                                        placeholder="Search"
                                                                                                        type="text">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-md-12 scroll-customer">
                                                                                                    <ul class="sc-emp-list">
                                                                                                        <li id="dd12">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-12">
                                                                                                                    <div
                                                                                                                        class="emp-block mt-5 search-emp">
                                                                                                                        <div
                                                                                                                            class="img-border">
                                                                                                                            <div
                                                                                                                                class="img-wrp--35 ">
                                                                                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="emp-info">
                                                                                                                            <h5 class="u-name">
                                                                                                                                607</h5>
                                                                                                                            <h6 class="title">
                                                                                                                                Assistant
                                                                                                                                Technical
                                                                                                                                Manager</h6>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li id="dd15">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-12">
                                                                                                                    <div
                                                                                                                        class="emp-block mt-5 search-emp">
                                                                                                                        <div
                                                                                                                            class="img-border">
                                                                                                                            <div
                                                                                                                                class="img-wrp--35 ">
                                                                                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="emp-info">
                                                                                                                            <h5 class="u-name">
                                                                                                                                607</h5>
                                                                                                                            <h6 class="title">
                                                                                                                                Assistant
                                                                                                                                Technical
                                                                                                                                Manager</h6>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li id="dd16">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-12">
                                                                                                                    <div
                                                                                                                        class="emp-block mt-5 search-emp">
                                                                                                                        <div
                                                                                                                            class="img-border">
                                                                                                                            <div
                                                                                                                                class="img-wrp--35 ">
                                                                                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="emp-info">
                                                                                                                            <h5 class="u-name">
                                                                                                                                607</h5>
                                                                                                                            <h6 class="title">
                                                                                                                                Assistant
                                                                                                                                Technical
                                                                                                                                Manager</h6>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>
                                                                                        <div class="col-md-5">
                                                                                            <div class="row">

                                                                                                <div class="col-md-12">
                                                                                                    <div
                                                                                                        class="dropArea"
                                                                                                        data-location="customer-list">
                                                                                                        Drag and drop
                                                                                                        here
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>

                                                                                            <div class="row mt-30">
                                                                                                <div
                                                                                                    class="col-md-12 customer-list max-h-300">

                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-items" id="self">
                                                                            <div class="row">
                                                                                <div class="col-md-12">

                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>
                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
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

                                                <!--  Behavioral Elements-->
                                                <div id="target2" class="ui-sm-accordion">
                                                    <a href="#behavioral-sub" class="ui-sm-link">
                                                        <span>Behavioral Elements</span>
                                                        <span>&nbsp;-&nbsp;</span>
                                                        <span>45%</span>
                                                    </a>

                                                    <div id="behavioral-sub" class="ui-sm-box-wrp">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12 line_tab_wrp line_tab_auto">
                                                                    <ul class="line_tab">
                                                                        <li class="active">
                                                                            <a href="#superior">
                                                                                <span>Superior</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#su-superior">
                                                                                <span>Su. Superior</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#customer">
                                                                                <span>customer</span>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#self">
                                                                                <span>Self</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="line_tab_content pt-30 pb-30">
                                                                        <div class="tab-items active" id="superior">
                                                                            <div class="row">
                                                                                <div class="col-md-12">

                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>
                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-items" id="su-superior">
                                                                            <div class="row">
                                                                                <div class="col-md-12">

                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>
                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-items" id="customer">
                                                                            <div class="row">
                                                                                <div class="col-md-12">
                                                                                    <div class="row">

                                                                                        <div class="col-md-7">

                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-md-12 sc-wrapper">
                                                                                                    <i class="ic_search"></i>
                                                                                                    <input
                                                                                                        class="input-search"
                                                                                                        id="search_txt"
                                                                                                        name="search_txt"
                                                                                                        placeholder="Search"
                                                                                                        type="text">
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div
                                                                                                    class="col-md-12 scroll-customer">
                                                                                                    <ul class="sc-emp-list">
                                                                                                        <li id="dd12">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-12">
                                                                                                                    <div
                                                                                                                        class="emp-block mt-5 search-emp">
                                                                                                                        <div
                                                                                                                            class="img-border">
                                                                                                                            <div
                                                                                                                                class="img-wrp--35 ">
                                                                                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="emp-info">
                                                                                                                            <h5 class="u-name">
                                                                                                                                607</h5>
                                                                                                                            <h6 class="title">
                                                                                                                                Assistant
                                                                                                                                Technical
                                                                                                                                Manager</h6>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li id="dd15">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-12">
                                                                                                                    <div
                                                                                                                        class="emp-block mt-5 search-emp">
                                                                                                                        <div
                                                                                                                            class="img-border">
                                                                                                                            <div
                                                                                                                                class="img-wrp--35 ">
                                                                                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="emp-info">
                                                                                                                            <h5 class="u-name">
                                                                                                                                607</h5>
                                                                                                                            <h6 class="title">
                                                                                                                                Assistant
                                                                                                                                Technical
                                                                                                                                Manager</h6>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </li>
                                                                                                        <li id="dd16">
                                                                                                            <div
                                                                                                                class="row">
                                                                                                                <div
                                                                                                                    class="col-md-12">
                                                                                                                    <div
                                                                                                                        class="emp-block mt-5 search-emp">
                                                                                                                        <div
                                                                                                                            class="img-border">
                                                                                                                            <div
                                                                                                                                class="img-wrp--35 ">
                                                                                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <div
                                                                                                                            class="emp-info">
                                                                                                                            <h5 class="u-name">
                                                                                                                                607</h5>
                                                                                                                            <h6 class="title">
                                                                                                                                Assistant
                                                                                                                                Technical
                                                                                                                                Manager</h6>
                                                                                                                        </div>

                                                                                                                    </div>
                                                                                                                </div>

                                                                                                            </div>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>


                                                                                        </div>
                                                                                        <div class="col-md-5">
                                                                                            <div class="row">

                                                                                                <div class="col-md-12">
                                                                                                    <div
                                                                                                        class="dropArea"
                                                                                                        data-location="customer-list">
                                                                                                        Drag and drop
                                                                                                        here
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>

                                                                                            <div class="row mt-30">
                                                                                                <div
                                                                                                    class="col-md-12 customer-list max-h-300">

                                                                                                </div>
                                                                                            </div>


                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-items" id="self">
                                                                            <div class="row">
                                                                                <div class="col-md-12">

                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
                                                                                    </div>
                                                                                    <div class="row mb-not-last-10">
                                                                                        <div class="col-md-4">
                                                                                            <div class="table-block">
                                                                                                <div
                                                                                                    class="cell zero-width">
                                                                                                    <div
                                                                                                        class="img-wrp--35">
                                                                                                        <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="cell pl-15">
                                                                                                    <h5 class="u-name low-case">
                                                                                                        Sandun
                                                                                                        Maduranga</h5>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <h5 class="col-md-8 details mt-10">
                                                                                            UX Engineer</h5>
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

                                <!--Behavioral Element-->
                                <div class="ui_accordion">
                                    <a href="#step22" class="ui-link d-block ">Behavioral Element
                                    </a>
                                    <div id="step22" class="ui-box-wrp pr-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row mb-not-last-20">
                                                    <div class="col-md-4">
                                                        <div class="table-block">
                                                            <div class="cell zero-width">
                                                                <div class="but-gruop-wrp mb-0">
                                                                    <label>
                                                                        <input type="checkbox" checked="checked">
                                                                        <span class="check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="cell pl-5">
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-not-last-20">
                                                    <div class="col-md-4">
                                                        <div class="table-block">
                                                            <div class="cell zero-width">
                                                                <div class="but-gruop-wrp mb-0">
                                                                    <label>
                                                                        <input type="checkbox" checked="checked">
                                                                        <span class="check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="cell pl-5">
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-not-last-20">
                                                    <div class="col-md-4">
                                                        <div class="table-block">
                                                            <div class="cell zero-width">
                                                                <div class="but-gruop-wrp mb-0">
                                                                    <label>
                                                                        <input type="checkbox" checked="checked">
                                                                        <span class="check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="cell pl-5">
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-not-last-20">
                                                    <div class="col-md-4">
                                                        <div class="table-block">
                                                            <div class="cell zero-width">
                                                                <div class="but-gruop-wrp mb-0">
                                                                    <label>
                                                                        <input type="checkbox" checked="checked">
                                                                        <span class="check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="cell pl-5">
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Company Target-->
                                <div class="ui_accordion">
                                    <a href="#step32" class="ui-link d-block ">Company Target
                                    </a>
                                    <div id="step32" class="ui-box-wrp pr-0">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row mb-not-last-20">
                                                    <div class="col-md-4">
                                                        <div class="table-block">
                                                            <div class="cell zero-width">
                                                                <div class="but-gruop-wrp mb-0">
                                                                    <label>
                                                                        <input type="checkbox" checked="checked">
                                                                        <span class="check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="cell pl-5">
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-not-last-20">
                                                    <div class="col-md-4">
                                                        <div class="table-block">
                                                            <div class="cell zero-width">
                                                                <div class="but-gruop-wrp mb-0">
                                                                    <label>
                                                                        <input type="checkbox" checked="checked">
                                                                        <span class="check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="cell pl-5">
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-not-last-20">
                                                    <div class="col-md-4">
                                                        <div class="table-block">
                                                            <div class="cell zero-width">
                                                                <div class="but-gruop-wrp mb-0">
                                                                    <label>
                                                                        <input type="checkbox" checked="checked">
                                                                        <span class="check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="cell pl-5">
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb-not-last-20">
                                                    <div class="col-md-4">
                                                        <div class="table-block">
                                                            <div class="cell zero-width">
                                                                <div class="but-gruop-wrp mb-0">
                                                                    <label>
                                                                        <input type="checkbox" checked="checked">
                                                                        <span class="check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="cell pl-5">
                                                                <input type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--Finalizer-->
                                <div class="ui_accordion">
                                    <a href="#step42" class="ui-link d-block ">Finalizer
                                    </a>
                                    <div id="step42" class="ui-box-wrp pr-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="table-block">
                                                    <div class="cell zero-width">
                                                        <div class="img-wrp--35">
                                                            <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                        </div>
                                                    </div>
                                                    <div class="cell pl-15">
                                                        <h5 class="u-name low-case">Sandun Maduranga</h5>
                                                        <h6 class="title mt-5">Su.Superior</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="emp-list-container">
                                                    <div class="emp-list-wrp">
                                                        <div class="emp-list">
                                                            <div class="img-wrp--35 ">
                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                            </div>
                                                            <div class="tip tip-emp-name"> kamal</div>
                                                        </div>
                                                        <div class="emp-list">
                                                            <div class="img-wrp--35 ">
                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                            </div>
                                                            <div class="tip tip-emp-name"> kamal</div>
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

</div>


<!-- ===========================================================================
        Custom Script
============================================================================ -->
<script>
    //Advance Search
    $(function () {
        $(function () {
            $('.top-exp').click(function () {
                if ($('.view-box').hasClass('active')) {
                    $('.view-box').fadeOut(function () {
                        $(this).css('visibility', 'hidden');
                        $(this).slideUp(function () {
                            $(this).removeClass('active');
                            $('.exp-wrp').removeClass('active');
                            $('.top-exp').css('display', 'none');
                            //$('.search-group').addClass('active');
                            $('.search-group').fadeIn('fast').css({'visibility': 'visible', 'display': 'block'});
                        });
                    });
                    return false;
                }
                return false;
            });

            $('.advace').click(function () {
                $('.search-group').fadeOut(function () {
                    $('.view-box').slideDown(function () {
                        $(this).css('visibility', 'visible');
                        $(this).addClass('active');
                        $('.exp-wrp').addClass('active');
                    });
                    $('.top-exp').css('display', 'inline-block');
                    $(this).css('visibility', 'hidden');
                    $(this).removeClass('active');
                    return false;
                });
                return false;
            });
        });
    });

    $(function () {
        $('.btn-expand-wrp a').on('click', function (e) {
            e.preventDefault();
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //silde Down
                $(this).addClass('btn-expand-down');
                $(this).closest('.tab-box').parent('.card-content-wrp').addClass('on');
                $(this).closest('.tab-box').find('.box-body').slideDown('slow');
                $(this).closest('.tab-box').find('.box-head .right-side').fadeTo('slow', 0);
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box').fadeTo('fast', 1);
            } else {
                //               Slide Up
                $(this).removeClass('btn-expand-down');
                $(this).closest('.tab-box').parent('.card-content-wrp').removeClass('on');
                $(this).closest('.tab-box').find('.box-body').slideUp('slow');
                $(this).closest('.tab-box').find('.box-head .right-side').fadeTo('slow', 1);
                $(this).closest('.tab-box ').find('.box-body').removeClass('active-box');
            }
        });
    });

    // Select All check boxes
    new CheckAll({parentEle: '.selectAll', childEle: '.child-cbx'});

    function loadAccordion() {
        $('.ui_accordion .ui-link').on('click', function (e) {
            e.preventDefault();

            if (!$(this).hasClass('active-link')) {
                $(this).addClass('active-link');
                $(this).nextAll('.ui-box-wrp').slideDown('slow').addClass('active');
            } else {
                $(this).removeClass('active-link');
                $(this).nextAll('.ui-box-wrp').slideUp('slow').removeClass('active');
            }

        });
    }

    function loadSmallAccordion() {
        $('.ui-sm-link').on('click', function (e) {
            e.preventDefault();

            if (!$(this).hasClass('active-link')) {
                $(this).addClass('active-link');
                $(this).nextAll('.ui-sm-box-wrp').slideDown('slow').addClass('active');
            } else {
                $(this).removeClass('active-link');
                $(this).nextAll('.ui-sm-box-wrp').slideUp('slow').removeClass('active');
            }
        });
    }


    function loadLineTab() {

        (function () {
            $('.line_tab_wrp').each(function (count) {
                var tab = $(this);
                var tabContainer = tab.find('.line_tab_content');

                tab.find('.line_tab li a').each(function (index) {

                    var href = $(this).attr('href');
                    var itemId = tabContainer.find(href).attr('id');

                    if ('#' + itemId === href) {
                        console.log('href ', href, ' ID ', tabContainer.find('.tab-items').attr('id'));
                        tabContainer.find('#' + itemId).attr('id', href.split("#")[1] + index + count);
                        $(this).attr('href', (href + index + count));
                    }
                })
            });
        }());

        $('.line_tab_wrp .line_tab').find('li a').click(function (evt) {

            evt.preventDefault();

            var parentTab = $(this).parents('.line_tab_wrp');
            var hrefLink = $(this).attr('href');

            if (!$(hrefLink).hasClass('active')) {
                parentTab.find('.line_tab li a').parent().removeClass('active');
                $(this).parent().addClass('active');

                parentTab.find('.tab-items').fadeTo('fast', 0, function () {
                    $(hrefLink).fadeTo('fast', 1).show().addClass('active');
                }).hide().removeClass('active');


            }

        });
    }

    $(function () {
        loadAccordion();
        loadSmallAccordion();
        loadLineTab();
    })


</script>
<!-- ===========================================================================
        Plugin Script
============================================================================ -->
<script>


//    $(".customer-list").mCustomScrollbar({
//        theme: 'dark-3'
//    });

    function reloadCustomorScroll(ele) {
        ele.find(".customer-list").mCustomScrollbar({
            theme: 'dark-3'
        });
    }

    //Customer drag and drop
    function loadCustomerDrag() {

        var empId = 0,
            name = '',
            imgUrl,
            tabItems = null;

        $(".sc-emp-list .u-name").draggable({
            helper: "clone",
            revert: true,
            revertDuration: 400,
            zIndex: 999,
            start: function (evt) {
                tabItems = $(evt.target).parents('.tab-items');
                empId = $(evt.target).parents('li').attr('id');
                name = $(evt.target).text();
                imgUrl = $('#' + empId).find('.user-img').attr('src');
            }

        });


        $(".dropArea").droppable({
            accept: ".sc-emp-list .u-name",
            drop: function (evt) {

                var location = $(evt.target).attr('data-location');
                var item = appendItems(name, imgUrl, empId);

                tabItems.find('.' + location).append(item);
                reloadCustomorScroll(tabItems);
            }
        });


        function appendItems(name, imgUrl, id) {
            var item = '<div id="' + id + '" class="row cum-row mb-not-last-20">';
            item += '<div class="col-md-9">';
            item += '<div class="table-block">';
            item += '<div class="cell zero-width">';
            item += '<div class="img-wrp--35">';
            item += '<img class="user-img" src="' + imgUrl + '" alt="Employee Image">';
            item += '</div>';
            item += '</div>';
            item += '<div class="cell pl-15">';
            item += '<h5 class="u-name low-case">' + name + '</h5>';
            item += '</div>';
            item += '</div>';
            item += '</div>';
            item += '<div class="col-md-3 mt-10">';
            item += '<button class="img-but img-delete btnDeleteCustm"></button>';
            item += '</div>';
            item += '</div>';
            return item;
        }

        $(document).on('click', '.btnDeleteCustm', function () {
            $(this).parents('.cum-row').remove();
        });
    }

    $(function () {
        loadCustomerDrag();
    })
</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->
