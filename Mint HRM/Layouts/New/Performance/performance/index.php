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
// Popup
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/popup.css', 'screen');
// Accrodion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');
//Setting
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/performance/style.css', 'screen');

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

<!--Pop up modal for Modules-->
<div class="modal fade" id="modulesModal" tabindex="-1" role="dialog">
    <div class="modal-dialog size-60">
        <div class="modal-content popup">
            <div class="modal-header">
                <button type="button" class="p-close" data-dismiss="modal" aria-label="Close">
                    <span>
                        <svg version="1.1" id="Layer_1" x="0px" y="0px" width="15px" height="15px"
                             viewBox="2.5 2.5 15 15">
                        <g>
                        <g>
                        <path d="M17.373,3.471l-0.845-0.842L10,9.159l-6.529-6.53L2.628,3.471l6.529,6.53l-6.529,6.528l0.842,0.842
                               L10,10.844l6.529,6.527l0.844-0.84l-6.53-6.53L17.373,3.471z"/>
                        </g>
                        </g>
                        </svg>
                    </span>
                </button>
                <h4 class="modal-title">Title</h4>
            </div>
            <div class="modal-body">
                <div class="row mt-30">
                    <div class="col-md-12">
                        <div class="col-md-12">

                            <div class="row form-row">

                                <div class="col-md-4 input-layout">
                                    <input type="text" class="text-weightage number">
                                    <label for="">Weightage(%)</label>
                                </div>

                                <div class="col-md-4 input-layout person-wrp">
                                    <input type="text" class="text-person number">
                                    <label for="">No Of Person</label>
                                </div>

                            </div>

                            <div class="row ">

                                <div class="col-md-12 mb-20">
                                    <h5 class="details f-16 ">Who Could view</h5>
                                </div>

                                <div class="col-md-12">
                                    <div class="row">

                                        <div class="col-md-2">
                                            <h5 class="details mt-5 dragItem"></h5>
                                        </div>

                                        <div class="col-md-10 mt-2">
                                            <div class="table-block viewList"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer pb-15">
                <div class="col-md-12">

                    <div class="col-lg-12">
                        <!--Massage show here-->
                        <div class="message logoUp"></div>
                    </div>

                    <div class="col-md-12">
                        <button type="button" class="bx-but bx-save btnActionPopup save-mode">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="contert-wrapper mb-30 pb-30">

    <div class="col-md-12 header-with-mn">
        <h1 class="title">Performance Management</h1>
    </div>

    <div class="col-md-12 mt-30">

        <div class="col-md-12">
            <!-- Performance Appraisal Methodology-->
            <div class="ui_accordion">
                <a href="#step1" class="ui-link d-block ">
                    Performance Appraisal Methodology
                </a>
                <div id="step1" class="ui-box-wrp pr-0">
                    <div class="row">

                        <div class="col-md-12 mb-30">
                            <div class="row">
                                <div class="col-md-4 input-layout">
                                    <input type="text">
                                    <label for="">Group Name</label>
                                </div>
                                <div class="col-md-4">
                                    <h4 class="result bad text-right ">
                                        <span>Total</span>
                                        <span>56</span>
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">

                                <div class="col-md-8">

                                    <div class="row">

                                        <div class="col-md-12 target-wrp">
                                            <!-- Company Targets-->
                                            <div id="target1" class="ui-sm-accordion block-relative">
                                                <div class="table-block input-auto-focus abs-input">
                                                    <div class="cell zero-width">
                                                        <div class="but-gruop-wrp mb-0">
                                                            <label>
                                                                <input class="chb-wight" type="checkbox">
                                                                <span class="check-box"></span>
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="cell pl-10">
                                                        <div class="input-layout h-20">
                                                            <input type="text" class="number">
                                                            <label for="">Weightage</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#cmp_target" class="ui-sm-link">Company Targets</a>

                                                <div id="cmp_target" class="ui-sm-box-wrp">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="target1 drop-section group-wrp">
                                                                <div class="group-container"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <div class="dropArea" data-location="target1">Drag
                                                                        and drop
                                                                        here
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--  Individual performance targets-->
                                            <div id="target2" class="ui-sm-accordion block-relative">
                                                <div class="table-block input-auto-focus abs-input">
                                                    <div class="table-block input-auto-focus">
                                                        <div class="cell zero-width">
                                                            <div class="but-gruop-wrp mb-0">
                                                                <label>
                                                                    <input class="chb-wight" type="checkbox">
                                                                    <span class="check-box"></span>
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-10">
                                                            <div class="input-layout h-20">
                                                                <input type="text" class="number">
                                                                <label for="">Weightage</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#ind_target" class="ui-sm-link">
                                                    Individual performance targets
                                                </a>

                                                <div id="ind_target" class="ui-sm-box-wrp">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="target2 drop-section group-wrp">
                                                                <div class="group-container"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <div class="dropArea" data-location="target2">Drag
                                                                        and drop
                                                                        here
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- behavioral elements-->
                                            <div id="target3" class="ui-sm-accordion block-relative">
                                                <div class="table-block input-auto-focus abs-input">
                                                    <div class="cell zero-width">
                                                        <div class="but-gruop-wrp mb-0">
                                                            <label>
                                                                <input class="chb-wight" type="checkbox">
                                                                <span class="check-box"></span>
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="cell pl-10">
                                                        <div class="input-layout h-20">
                                                            <input type="text" class="number">
                                                            <label for="">Weightage</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#behavioral" class="ui-sm-link">Behavioral Elements</a>
                                                <div id="behavioral" class="ui-sm-box-wrp">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="target3 drop-section group-wrp">
                                                                <div class="group-container"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <div class="dropArea" data-location="target3">Drag
                                                                        and drop
                                                                        here
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- competency development target-->
                                            <div id="target4" class="ui-sm-accordion block-relative">
                                                <div class="table-block input-auto-focus abs-input">
                                                    <div class="cell zero-width">
                                                        <div class="but-gruop-wrp mb-0">
                                                            <label>
                                                                <input class="chb-wight" type="checkbox">
                                                                <span class="check-box"></span>
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="cell pl-10">
                                                        <div class="input-layout h-20">
                                                            <input type="text" class="number">
                                                            <label for="">Weightage</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#competency" class="ui-sm-link">Competency Development
                                                    Target</a>
                                                <div id="competency" class="ui-sm-box-wrp">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="target4 drop-section group-wrp">
                                                                <div class="group-container"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <div class="dropArea" data-location="target4">Drag
                                                                        and drop
                                                                        here
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Other target-->
                                            <div id="target5" class="ui-sm-accordion block-relative">
                                                <div class="table-block input-auto-focus abs-input">
                                                    <div class="cell zero-width">
                                                        <div class="but-gruop-wrp mb-0">
                                                            <label>
                                                                <input class="chb-wight" type="checkbox">
                                                                <span class="check-box"></span>
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="cell pl-10">
                                                        <div class="input-layout h-20">
                                                            <input type="text" class="number">
                                                            <label for="">Weightage</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="#other" class="ui-sm-link">Other
                                                    Target</a>
                                                <div id="other" class="ui-sm-box-wrp">
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="target5 drop-section group-wrp">
                                                                <div class="group-container"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="row">
                                                                <div class="col-md-12">

                                                                    <div class="dropArea" data-location="target5">Drag
                                                                        and drop
                                                                        here
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

                                <div class="col-md-4">

                                    <div class="row">
                                        <h4 class="col-md-12 heading">Methodology</h4>
                                        <div class="col-md-12">
                                            <ul class="group-list drop-item-list">
                                                <li id="id1">
                                                    <h5 class="details f-16"><span>Superior</span></h5>
                                                </li>
                                                <li id="id2">
                                                    <h5 class="details f-16"><span>Su. Superior</span></h5>
                                                </li>
                                                <li id="id3">
                                                    <h5 class="details f-16"><span>Customer</span></h5>
                                                </li>
                                                <li id="id4">
                                                    <h5 class="details f-16"><span>Peer</span></h5>
                                                </li>
                                                <li id="id5" class="disable">
                                                    <h5 class="details f-16"><span>Self</span></h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="bx-but bx-save">Save</button>
                        </div>

                        <div class="col-md-12 mt-30">
                            <div class="row data-row">

                                <div class="col-md-12 mb-20">
                                    <div class="row">
                                        <h5 class="details col-md-9">
                                            Group 1
                                        </h5>
                                        <div class="details col-md-3">
                                            <button type="button" class="img-but img-delete"></button>
                                            <button type="button" class="img-but img-edit"></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row data-row-15">
                                        <h6 class="title col-md-3">Company target</h6>
                                        <h6 class="title col-md-1">20%</h6>
                                        <h6 class="title col-md-8">3 Pear - 20%, 2 Subordinate - 10%, 1 Superior 40%, 1
                                            Customer - 40%,
                                            1 user 20%</h6>
                                    </div>
                                    <div class="row data-row-15">
                                        <h6 class="title col-md-3">Individual performance targets</h6>
                                        <h6 class="title col-md-1">20%</h6>
                                        <h6 class="title col-md-8">3 Pear - 20%, 2 Subordinate - 10%, 1 user 20%</h6>
                                    </div>
                                    <div class="row data-row-15">
                                        <h6 class="title col-md-3">Behavioral elements</h6>
                                        <h6 class="title col-md-1">20%</h6>
                                        <h6 class="title col-md-8">3 Pear - 20%, 2 Subordinate - 10%, 1 user 20%</h6>
                                    </div>
                                    <div class="row data-row-15">
                                        <h6 class="title col-md-3">Competency development target</h6>
                                        <h6 class="title col-md-1">20%</h6>
                                        <h6 class="title col-md-8">3 Pear - 20%, 2 Subordinate - 10%, 1 user 20%</h6>
                                    </div>
                                </div>

                            </div>
                            <div class="row data-row">

                                <div class="col-md-12 mb-20">
                                    <div class="row">
                                        <h5 class="details col-md-9">
                                            Group 2
                                        </h5>
                                        <div class="details col-md-3">
                                            <button type="button" class="img-but img-delete"></button>
                                            <button type="button" class="img-but img-edit"></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="row data-row-15">
                                        <h6 class="title col-md-3">Company target</h6>
                                        <h6 class="title col-md-1">20%</h6>
                                        <h6 class="title col-md-8">3 Pear - 20%, 2 Subordinate - 10%, 1 Superior 40%, 1
                                            Customer - 40%,
                                            1 user 20%</h6>
                                    </div>
                                    <div class="row data-row-15">
                                        <h6 class="title col-md-3">Individual performance targets</h6>
                                        <h6 class="title col-md-1">20%</h6>
                                        <h6 class="title col-md-8">3 Pear - 20%, 2 Subordinate - 10%, 1 user 20%</h6>
                                    </div>
                                    <div class="row data-row-15">
                                        <h6 class="title col-md-3">Behavioral elements</h6>
                                        <h6 class="title col-md-1">20%</h6>
                                        <h6 class="title col-md-8">3 Pear - 20%, 2 Subordinate - 10%, 1 user 20%</h6>
                                    </div>
                                    <div class="row data-row-15">
                                        <h6 class="title col-md-3">Competency development target</h6>
                                        <h6 class="title col-md-1">20%</h6>
                                        <h6 class="title col-md-8">3 Pear - 20%, 2 Subordinate - 10%, 1 user 20%</h6>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Evaluation Period-->
            <div class="ui_accordion">
                <a href="#step2" class="ui-link d-block ">
                    Evaluation Period
                </a>
                <div id="step2" class="ui-box-wrp pr-0">
                    <div class="row">

                        <div class="col-md-12">

                            <div class="row form-row">
                                <div class="col-md-4 input-layout">
                                    <input type="text">
                                    <label for="">Title</label>
                                </div>
                            </div>

                            <div class="row mb-30">
                                <div class="col-md-12">
                                    <div class="day-row">
                                        <div class="table-block">
                                            <div class="cell w-60">&nbsp;</div>
                                            <div class="cell">
                                                <div class="day-container">
                                                    <div class="day holiday">
                                                        Su
                                                    </div>
                                                    <div class="day">
                                                        Mo
                                                    </div>
                                                    <div class="day">
                                                        Tu
                                                    </div>
                                                    <div class="day">
                                                        We
                                                    </div>
                                                    <div class="day">
                                                        Th
                                                    </div>
                                                    <div class="day">
                                                        Fr
                                                    </div>
                                                    <div class="day">
                                                        Sa
                                                    </div>

                                                    <div class="day holiday">
                                                        Su
                                                    </div>
                                                    <div class="day">
                                                        Mo
                                                    </div>
                                                    <div class="day">
                                                        Tu
                                                    </div>
                                                    <div class="day">
                                                        We
                                                    </div>
                                                    <div class="day">
                                                        Th
                                                    </div>
                                                    <div class="day">
                                                        Fr
                                                    </div>
                                                    <div class="day">
                                                        Sa
                                                    </div>

                                                    <div class="day holiday">
                                                        Su
                                                    </div>
                                                    <div class="day">
                                                        Mo
                                                    </div>
                                                    <div class="day">
                                                        Tu
                                                    </div>
                                                    <div class="day">
                                                        We
                                                    </div>
                                                    <div class="day">
                                                        Th
                                                    </div>
                                                    <div class="day">
                                                        Fr
                                                    </div>
                                                    <div class="day">
                                                        Sa
                                                    </div>

                                                    <div class="day holiday">
                                                        Su
                                                    </div>
                                                    <div class="day">
                                                        Mo
                                                    </div>
                                                    <div class="day">
                                                        Tu
                                                    </div>
                                                    <div class="day">
                                                        We
                                                    </div>
                                                    <div class="day">
                                                        Th
                                                    </div>
                                                    <div class="day">
                                                        Fr
                                                    </div>
                                                    <div class="day">
                                                        Sa
                                                    </div>

                                                    <div class="day holiday">
                                                        Su
                                                    </div>
                                                    <div class="day">
                                                        Mo
                                                    </div>
                                                    <div class="day">
                                                        Tu
                                                    </div>
                                                    <div class="day">
                                                        We
                                                    </div>
                                                    <div class="day">
                                                        Th
                                                    </div>
                                                    <div class="day">
                                                        Fr
                                                    </div>
                                                    <div class="day">
                                                        Sa
                                                    </div>

                                                    <div class="day holiday">
                                                        Su
                                                    </div>
                                                    <div class="day">
                                                        Mo
                                                    </div>
                                                    <div class="day">
                                                        Tu
                                                    </div>
                                                    <div class="day">
                                                        We
                                                    </div>
                                                    <div class="day">
                                                        Th
                                                    </div>
                                                    <div class="day">
                                                        Fr
                                                    </div>
                                                    <div class="day">
                                                        Sa
                                                    </div>


                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="month-row">
                                        <div class="table-block">
                                            <div class="cell w-60">
                                                <h5 class="details txt-limit-50">Jan</h5>
                                            </div>
                                            <div class="cell">
                                                <div class="date-container">
                                                    <div class="date holiday">
                                                        1
                                                    </div>
                                                    <div class="date">
                                                        2
                                                    </div>
                                                    <div class="date holiday">
                                                        3
                                                        <span class="tip">Poya Day</span>
                                                    </div>
                                                    <div class="date">
                                                        4
                                                    </div>
                                                    <div class="date">
                                                        5
                                                    </div>
                                                    <div class="date">
                                                        6
                                                    </div>
                                                    <div class="date">
                                                        7
                                                    </div>
                                                    <div class="date">
                                                        8
                                                    </div>
                                                    <div class="date">
                                                        9
                                                    </div>
                                                    <div class="date">
                                                        10
                                                    </div>
                                                    <div class="date">
                                                        11
                                                    </div>
                                                    <div class="date">
                                                        12
                                                    </div>
                                                    <div class="date">
                                                        13
                                                    </div>
                                                    <div class="date">
                                                        14
                                                    </div>
                                                    <div class="date">
                                                        15
                                                    </div>
                                                    <div class="date">
                                                        16
                                                    </div>
                                                    <div class="date">
                                                        17
                                                    </div>
                                                    <div class="date">
                                                        18
                                                    </div>
                                                    <div class="date">
                                                        19
                                                    </div>
                                                    <div class="date">
                                                        20
                                                    </div>
                                                    <div class="date">
                                                        21
                                                    </div>
                                                    <div class="date">
                                                        22
                                                    </div>
                                                    <div class="date">
                                                        23
                                                    </div>
                                                    <div class="date">
                                                        24
                                                    </div>
                                                    <div class="date">
                                                        25
                                                    </div>
                                                    <div class="date">
                                                        26
                                                    </div>
                                                    <div class="date">
                                                        27
                                                    </div>
                                                    <div class="date">
                                                        28
                                                    </div>
                                                    <div class="date">
                                                        29
                                                    </div>
                                                    <div class="date">
                                                        30
                                                    </div>
                                                    <div class="date">
                                                        31
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="month-row">
                                        <div class="table-block">
                                            <div class="cell w-60">
                                                <h5 class="details txt-limit-50">Feb</h5>
                                            </div>
                                            <div class="cell">
                                                <div class="date-container">
                                                    <div class="date disable"></div>
                                                    <div class="date disable"></div>
                                                    <div class="date disable"></div>
                                                    <div class="date">
                                                        1
                                                    </div>
                                                    <div class="date">
                                                        2
                                                    </div>
                                                    <div class="date holiday">
                                                        3
                                                    </div>
                                                    <div class="date">
                                                        4
                                                    </div>
                                                    <div class="date">
                                                        5
                                                    </div>
                                                    <div class="date">
                                                        6
                                                    </div>
                                                    <div class="date">
                                                        7
                                                    </div>
                                                    <div class="date">
                                                        8
                                                    </div>
                                                    <div class="date">
                                                        9
                                                    </div>
                                                    <div class="date">
                                                        10
                                                    </div>
                                                    <div class="date">
                                                        11
                                                    </div>
                                                    <div class="date">
                                                        12
                                                    </div>
                                                    <div class="date">
                                                        13
                                                    </div>
                                                    <div class="date">
                                                        14
                                                    </div>
                                                    <div class="date">
                                                        15
                                                    </div>
                                                    <div class="date">
                                                        16
                                                    </div>
                                                    <div class="date">
                                                        17
                                                    </div>
                                                    <div class="date">
                                                        18
                                                    </div>
                                                    <div class="date">
                                                        19
                                                    </div>
                                                    <div class="date">
                                                        20
                                                    </div>
                                                    <div class="date">
                                                        21
                                                    </div>
                                                    <div class="date">
                                                        22
                                                    </div>
                                                    <div class="date">
                                                        23
                                                    </div>
                                                    <div class="date">
                                                        24
                                                    </div>
                                                    <div class="date">
                                                        25
                                                    </div>
                                                    <div class="date">
                                                        26
                                                    </div>
                                                    <div class="date">
                                                        27
                                                    </div>
                                                    <div class="date">
                                                        28
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="month-row">
                                        <div class="table-block">
                                            <div class="cell w-60">
                                                <h5 class="details txt-limit-50">March</h5>
                                            </div>
                                            <div class="cell">
                                                <div class="date-container">
                                                    <div class="date disable"></div>
                                                    <div class="date disable"></div>
                                                    <div class="date disable"></div>

                                                    <div class="date">
                                                        1
                                                    </div>
                                                    <div class="date selected">
                                                        2
                                                    </div>
                                                    <div class="date">
                                                        3
                                                    </div>
                                                    <div class="date">
                                                        4
                                                    </div>
                                                    <div class="date ">
                                                        5
                                                    </div>
                                                    <div class="date">
                                                        6
                                                    </div>
                                                    <div class="date">
                                                        7
                                                    </div>
                                                    <div class="date selected">
                                                        8
                                                    </div>
                                                    <div class="date">
                                                        9
                                                    </div>
                                                    <div class="date">
                                                        10
                                                    </div>
                                                    <div class="date">
                                                        11
                                                    </div>
                                                    <div class="date">
                                                        12
                                                    </div>
                                                    <div class="date">
                                                        13
                                                    </div>
                                                    <div class="date">
                                                        14
                                                    </div>
                                                    <div class="date">
                                                        15
                                                    </div>
                                                    <div class="date">
                                                        16
                                                    </div>
                                                    <div class="date">
                                                        17
                                                    </div>
                                                    <div class="date">
                                                        18
                                                    </div>
                                                    <div class="date">
                                                        19
                                                    </div>
                                                    <div class="date">
                                                        20
                                                    </div>
                                                    <div class="date">
                                                        21
                                                    </div>
                                                    <div class="date">
                                                        22
                                                    </div>
                                                    <div class="date">
                                                        23
                                                    </div>
                                                    <div class="date">
                                                        24
                                                    </div>
                                                    <div class="date">
                                                        25
                                                    </div>
                                                    <div class="date">
                                                        26
                                                    </div>
                                                    <div class="date">
                                                        27
                                                    </div>
                                                    <div class="date">
                                                        28
                                                    </div>
                                                    <div class="date">
                                                        29
                                                    </div>
                                                    <div class="date">
                                                        30
                                                    </div>
                                                    <div class="date">
                                                        31
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-md-offset-8">
                                    <h5 class="details text-right">
                                        <span class="st yellow"></span>
                                        Holiday
                                    </h5>
                                </div>
                                <div class="col-md-12">
                                    <button type="button" class="bx-but bx-save bx-mb-0">Save</button>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12 mt-30">



                            <div class="row dt-row">
                                <h5 class="details col-md-2">
                                    Monthly
                                </h5>
                                <div class="col-md-8">
                                    <h5 class="details">Jan 31, Feb 28, March 30, April 20</h5>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="img-but img-delete"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                </div>
                            </div>
                            <div class="row dt-row">
                                <h5 class="details col-md-2">
                                    Quarterly
                                </h5>
                                <div class="col-md-8">
                                    <h5 class="details">Jan 31, March 30</h5>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="img-but img-delete"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                </div>
                            </div>
                            <div class="row dt-row">
                                <h5 class="details col-md-2">
                                    Annual
                                </h5>
                                <div class="col-md-8">
                                    <h5 class="details">Nov 30, Dec 28</h5>
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="img-but img-delete"></button>
                                    <button type="button" class="img-but img-edit"></button>
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


    var methodology = [],
        performanceArray = [
            {
                targetId: "target1",
                data: []
            },
            {
                targetId: "target2",
                data: []
            },
            {
                targetId: "target3",
                data: []
            },
            {
                targetId: "target4",
                data: []
            },
            {
                targetId: "target5",
                data: []
            }
        ];

    //When page load get all
    //methodologies and performance target to array

    $(function () {

        $('.group-list li').each(function () {

            var obj = {
                id: $(this).attr('id'),
                text: $(this).find('h5 span').text()
            };

            methodology.push(obj);
        });

        //Push target id's to performance array
        $('.target-wrp .ui-sm-accordion').each(function () {

            var obj = {
                targetId: $(this).attr('id'),
                data: []
            };
            //performanceArray.push(obj);
        });

    });

    //Check item already add or no.
    // @param dragId - methodology drag item id
    // @param targetId - Dropping target area id
    var isExisting = function (dragId, targetId) {
        var result = false;

        performanceArray.map(function (item) {
            if (targetId == item.targetId) {
                item.data.some(function (data) {
                    if (data.id == dragId) {
                        result = true;
                    }
                });
            }
        });
        return result;
    };

    //Get data array inside the performance Array
    var getDataArr = function (targetId) {
        var resultArr = [];
        performanceArray.some(function (item) {
            if (targetId == item.targetId) {
                resultArr = item.data;
            }
        });
        return resultArr;
    };

    //Gat data by groupId and targetId
    var getSelectedBoxData = function (targetId, groupId) {
        var resultArr = [];
        performanceArray.map(function (item) {
            if (targetId == item.targetId) {

                item.data.some(function (data) {
                    if (data.id === groupId) {
                        resultArr = data;
                    }
                });
            }
        });
        return resultArr;
    };

    //    ==============================

    resultUpdate(40);


    //Append methodologies to popup
    //list view area without drag item
    // @param {string} dragId - drag item id
    function loadCheckBoxes(dragId) {
        var view = '';
        var result = [];

        var item = function (_id) {

            if (methodology.length) {

                methodology.filter(function (item) {

                    if (item.id != _id) {
                        console.log(item.id, item.text);
                        view = '<div data-drag-id="' + item.id + '" class="cell w-20">';
                        view += '<div class="but-gruop-wrp mb-0">';
                        view += '<label>';
                        view += '<input class="checkbox" type="checkbox">';
                        view += '<span class="check-box"></span>';
                        view += '<span class="f-14">' + item.text + '</span>';
                        view += '</label>';
                        view += '</div>';
                        view += '</div>';

                        result.push(view);
                    }

                });

            }

            return result;

        };

        $('.viewList').html('').append(item(dragId));
    }


    function resultUpdate(val) {
        var resultText = $('.result').find('span:last-child');

        if (Number.isInteger(Number.parseFloat(val))) {
            resultText.text(val);
        } else {
            resultText.text('0');
        }

        if (Number.parseFloat(resultText.text()) < 100) {
            resultText.parent().removeClass('good').addClass('bad');
        } else {
            resultText.parent().removeClass('bad').addClass('good');
        }
    }

    $(function () {

        $('.input-auto-focus input[type="checkbox"]').on('click', function () {
            var parentCell = $(this).parents('.input-auto-focus');

            if ($(this).is(':checked')) {
                parentCell.find('.cell input[type="text"]').focus();
            } else {
                parentCell.find('.cell input[type="text"]').val('');
                form.reset();
            }

        });

        $('.input-auto-focus input[type="text"]').on('focus', function () {
            $(this).select();
        });


        $('.input-auto-focus input[type="text"]').on('keyup', function () {
            var parentCell = $(this).parents('.input-auto-focus');
            if ($(this).val().length && Number.parseFloat($(this).val()) <= 100) {
                parentCell.find('input[type="checkbox"]').prop('checked', true);
            } else {
                parentCell.find('input[type="checkbox"]').prop('checked', false);
            }

            resultUpdate($(this).val());
        });

    });

    $('.btnModule').on('click', function () {
        var $modal = $('#modulesModal');
        $modal.modal('show');
    });

    $(document).on('click', '.emp-list-container .img-wrp--35 ', function () {
        var $modal = $('#groupModal');
        $modal.modal('show');
    });


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

    <!--Line Tab-->
    $(function () {
        $('.line_tab').find('li a').click(function (evt) {

            evt.preventDefault();

            var hrefLink = $(this).attr('href');

            if (!$(hrefLink).hasClass('active')) {
                $('.line_tab li a').parent().removeClass('active');
                $(this).parent().addClass('active');

                $('.tab-items').fadeTo('fast', 0, function () {
                    $(hrefLink).fadeTo('fast', 1).show().addClass('active');
                }).hide().removeClass('active');


            }

        });
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



    //Date select click event
    $('.date-container .date').on('click',function () {
        if($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        }else {
            $(this).addClass('selected');
        }
    });

</script>

<!-- ===========================================================================
        Plugin Script
============================================================================ -->

<script>
    var popupBtnAction = 'save-mode';

    var itemTemp = '';
    //Template function for group box
    function appendItem(_title, _weightage, _person, id) {
        var title = '<span class="tx_person">' + _person + ' </span><span class="tx_title">' + _title + '</span><span class="tx_wtg"> - ' + _weightage + '%</span>';
        itemTemp = '<div id="gp_' + id + '" class="group"><div class="title-wrp">' + title + '</div>';
        itemTemp += '<button class="quick-delete" type="button"></button>';
        itemTemp += '</div>';

        return itemTemp;
    }

    //Show popup when item drop the drop section
    function showPopup(groupId, location, obj) {
        var $modal = $('#modulesModal');
        $modal.find('.dragItem').text(obj.name);
        $modal.find('.text-person').val('');
        $modal.find('.text-weightage').val('0');

        if (!isExisting(groupId, location)) {
            if (obj.isSelf) {
                $modal.find('.person-wrp').hide();
            } else {
                $modal.find('.person-wrp').show();
            }

            $modal.find('.btnActionPopup').removeClass('edit-mode').addClass('save-mode').text('Save');
            //change popup button status as a edit
            popupBtnAction = 'save-mode';

            $modal.modal('show');
            form.reset();
        } else {
            alert('Sorry, This Methodology already add to that target');
        }
    }

    //Action function for delete and replace
    function itemAction(index, targetId, action, obj) {

        performanceArray.map(function (data) {
            if (data.targetId == targetId) {
                data.data.map(function (item) {

                    if (item.id == index) {
                        console.log('item ', item, data.data.indexOf(item));
                        if (action === 'DELETE') {
                            data.data.splice(data.data.indexOf(item), 1);
                        } else if (action === 'REPLACE') {
                            data.data.splice(data.data.indexOf(item), 1, obj);
                        }

                    }
                });
            }
        });
    }


    $(function () {

        var groupId = 0,
            selectBoxId = 0,
            selectTargetId = 0;
        var isSelf = false;
        var location = '';


        //Delete item
        $(document).on('click', '.quick-delete', function () {

            var parentGroupId = $(this).parents('.group').attr('id').split('gp_')[1];
            var targetId = $(this).parents('.ui-sm-accordion').attr('id');

            itemAction(parentGroupId, targetId, 'DELETE');
            $(this).parent().remove();

        });

        $(".drop-item-list li h5 span").draggable({
            helper: "clone",
            revert: true,
            revertDuration: 400,
            zIndex: 999,
            start: function (evt) {

                groupId = $(evt.target).parents('li').attr('id');
                name = $(evt.target).text();

                if ($(evt.target).parents('li').hasClass('disable'))
                    isSelf = true;
                else
                    isSelf = false;

            }

        });

        $(".dropArea").droppable({
            accept: ".drop-item-list li  h5 span",
            drop: function (evt) {

                loadCheckBoxes(groupId);
                location = $(evt.target).attr('data-location');
                showPopup(groupId, location, {
                    name: name,
                    isSelf: isSelf
                });
            }
        });

        //Popup save and edit action
        $('.btnActionPopup').click(function () {
            var $modal = $('#modulesModal');
            var title = $('.dragItem').text();
            var weightage = $('.text-weightage').val();
            var person = $('.text-person').val();

            var getCheckedIds = function () {
                var result = [];
                $modal.find('.viewList input[type="checkbox"]:checked').each(function () {
                    result.push($(this).parents('.cell').attr('data-drag-id'));
                });
                return result;
            };

            // Action Save
            if ($(this).hasClass('save-mode') && popupBtnAction === 'save-mode') {

                // Get data array that match by target id
                var dataArr = getDataArr(location);

                var obj = {
                    id: groupId,
                    wtg: weightage,
                    persons: person,
                    mainViewer: [groupId, title],
                    viewableId: getCheckedIds()
                };

                //Get template
                var item = appendItem(title, weightage, person, groupId);

                $('.' + location).find('.group-container').append(item);

                //Add data to performanceArray data key array
                dataArr.push(obj);

                // Action Edit
            } else if ($(this).hasClass('edit-mode') && popupBtnAction === 'edit-mode') {

                var obj = {
                    id: selectBoxId,
                    wtg: weightage,
                    persons: person,
                    mainViewer: [selectBoxId, title],
                    viewableId: getCheckedIds()
                };

                console.log('Edit ', selectBoxId, obj);

                var $box = $('#' + selectTargetId).find('#gp_' + selectBoxId);

                var title = '' +
                    '<span class="tx_person">' + person + ' </span>' +
                    '<span class="tx_title">' + title + '</span>' +
                    '<span class="tx_wtg"> - ' + weightage + '%</span>';

                $box.find('.title-wrp').html(title);
                itemAction(selectBoxId, selectTargetId, 'REPLACE', obj);

            }

            $modal.modal('hide');

        });

        //Click event for individual target box.
        $('.drop-section').on('click', '.group', function (e) {

            if ($(e.target).hasClass('quick-delete'))
                return;

            var targetId = $(this).parents('.ui-sm-accordion').attr('id');
            var groupId = $(this).attr('id').split('gp_')[1];
            var $modal = $('#modulesModal');
            selectBoxId = groupId;
            selectTargetId = targetId;

            //Load checkboxes
            loadCheckBoxes(groupId);

            var obj = getSelectedBoxData(targetId, groupId);
            console.log('main ID ', selectBoxId, selectTargetId, obj);
            $modal.find('.dragItem').text(obj.mainViewer[1]);
            $modal.find('.text-weightage').val(obj.wtg);
            $modal.find('.text-person').val(obj.persons);

            obj.viewableId.map(function (id) {
                $modal.find('.viewList .cell[data-drag-id="' + id + '"]').find('.checkbox[type="checkbox"]').prop('checked', true);
            });

            $modal.find('.btnActionPopup').removeClass('save-mode').addClass('edit-mode').text('Edit');
            //change popup button status as a edit
            popupBtnAction = 'edit-mode';

            form.reset();
            $modal.modal('show');
        });


    });


</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

