<?php


//==============================================================================
//      CSS
//==============================================================================
//Form
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
//Advance Search
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/search-adv.css', 'screen');
// Accrodion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');

//Main
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/jobDescription/style.css', 'screen');
//==============================================================================
//      Plugins CSS
//==============================================================================
//datepicker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// LC Switch
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/lcSwitch/lc_switch.css', 'screen');

//==============================================================================
//      JS
//==============================================================================
//Form
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);

//==============================================================================
//      Plugins JS
//==============================================================================
//datepicker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);
// mScroll Bar
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/mScrollbar/jquery.mCustomScrollbar.concat.min.js', CClientScript::POS_HEAD);
// LC Switch
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/lcSwitch/lc_switch.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">HR Function</a>
    <a>Job Description</a>
</div>

<div class="col-md-12">
    <button type="button" class="but new btnAddNew"><span></span>Add New</button>
</div>

<div class="contert-wrapper mb-30 pb-15 addForm hide-block">

    <div class="col-md-12 header-with-mn">
        <h1 class="title">Job Description</h1>
    </div>


    <div class="col-md-12 mt-30">

        <div class="col-md-12">
            <div class="row ">

                <div class="col-md-12">
                    <div class="row form-row">
                        <div class="col-md-4 input-layout">
                            <input type="text">
                            <label for="">Code</label>
                        </div>
                        <div class="col-md-4 input-layout">
                            <select name="" id="">
                                <option value=""></option>
                                <option value="1">PHP Developer</option>
                            </select>
                            <label for="">Designation</label>
                        </div>
                        <div class="col-md-4 input-layout">
                            <input type="text">
                            <label for="">Title</label>
                        </div>
                    </div>
                    <div class="row form-row">
                        <div class="col-md-12 input-layout">
                            <input type="text">
                            <label for="">Introduction</label>
                        </div>
                    </div>
                </div>


                <div class="col-md-4 mb-30">
                    <div class="radio-bt-wrp">
                        Is this the default JD ?
                        <input type="checkbox" class="lc_switch">
                    </div>
                </div>

                <div class="col-md-12">
                    <!--Job Description-->
                    <div class="ui_accordion">
                        <a href="#job_description" class="ui-link ">Job Description</a>
                        <div id="job_description" class="ui-box-wrp">
                            <div class="row form-row">
                                <div class="col-md-12 input-layout">
                                    <input type="text">
                                    <label for="">Responsibilities</label>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-4 sub-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="mt-0 but but-sm-24 new btnAdd"><span></span>Add
                                                New
                                            </button>
                                        </div>

                                        <div class="col-md-12 append-container">
                                            <div class="row">
                                                <h6 class="col-md-12 title mb-10">Duties</h6>
                                                <div class="ajaxLoad">
                                                    <div class="col-md-12 input-layout deletable-input delete-row">
                                                        <input type="text">
                                                        <button type="button" class="img-but img-delete"></button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 sub-form">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <button type="button" class="mt-0 but but-sm-24 new btnAdd"><span></span>Add
                                                New
                                            </button>
                                        </div>

                                        <div class="col-md-12 append-container">
                                            <div class="row">
                                                <h6 class="col-md-12 title mb-10">Task</h6>

                                                <div class="ajaxLoad">
                                                    <div class="col-md-12 input-layout deletable-input delete-row">
                                                        <input type="text">
                                                        <button type="button" class="img-but img-delete"></button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button class="bx-but bx-next " type="button">Add</button>
                                </div>

                            </div>

                            <div class="row mt-30">
                                <div class="col-md-12">
                                    <table class="table cm_table">
                                        <thead>
                                        <tr>
                                            <th>Responsibilities</th>
                                            <th>Duties</th>
                                            <th>Task</th>
                                            <th class="action">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                                                velit, vulputate eu
                                            </td>
                                            <td>
                                                <ul class="list pl-15">
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                        quam
                                                        velit, vulputate eu
                                                    </li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur
                                                    </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul class="list pl-15">
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                        quam
                                                        velit, vulputate eu
                                                    </li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="action">
                                                <button type="button" class="img-but img-delete"></button>
                                                <button type="button" class="img-but img-edit"></button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Key performance Indicators-->
                    <div class="ui_accordion">
                        <a href="#key_performance" class="ui-link ">Key performance Indicators</a>
                        <div id="key_performance" class="ui-box-wrp">

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="mt-0 but but-sm-24 new btnAddPrf"><span></span>Add
                                        New
                                    </button>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-8 col-md-offset-4">
                                    <div class="row">
                                        <h6 class="title col-md-6">KPI</h6>
                                        <h6 class="title col-md-6">Weightage (%)</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-row keyPerformance">
                                <div class="col-md-4 input-layout">
                                    <input type="text">
                                    <label for="">Key Result Area</label>
                                </div>
                                <div class="col-md-8 append-container">
                                    <div class="ajaxLoad">
                                        <div class="row key-row">
                                            <div class="col-md-6 input-layout">
                                                <input type="text">
                                            </div>
                                            <div class="col-md-6 input-layout deletable-input deletable">
                                                <input type="text">
                                                <button type="button" class="img-but img-delete"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="bx-but bx-next bx-mt-0" type="button">Add</button>
                                </div>
                            </div>

                            <div class="row mt-30">
                                <div class="col-md-12">
                                    <table class="table cm_table">
                                        <thead>
                                        <tr>
                                            <th>Key Result Area</th>
                                            <th>KPI</th>
                                            <th>Weightage(%)</th>
                                            <th class="action">Action</th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                                                velit, vulputate eu
                                            </td>
                                            <td>
                                                <ul class="list pl-15">
                                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                        quam
                                                        velit, vulputate eu
                                                    </li>
                                                    <li>Lorem ipsum dolor sit amet, consectetur
                                                    </li>
                                                </ul>
                                            </td>
                                            <td class="text-right">20%</td>
                                            <td class="action">
                                                <button type="button" class="img-but img-delete"></button>
                                                <button type="button" class="img-but img-edit"></button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Job specification-->
                    <div class="ui_accordion">
                        <a href="#job_specification" class="ui-link ">job specification</a>
                        <div id="job_specification" class="ui-box-wrp">
                            <div class="row form-row">
                                <div class="col-md-12 input-layout">
                                    <input type="text">
                                    <label for="">Knowledge / Qualification</label>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-4 sub-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="mt-0 but but-sm-24 new btnAdd"><span></span>Add
                                                New
                                            </button>
                                        </div>

                                        <div class="col-md-12 append-container">

                                            <div class="row">
                                                <h6 class="col-md-12 title  mb-10">Skills</h6>

                                                <div class="ajaxLoad">
                                                    <div class="col-md-12 input-layout deletable-input delete-row">
                                                        <input type="text">
                                                        <button type="button" class="img-but img-delete"></button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 sub-form">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="mt-0 but but-sm-24 new btnAdd"><span></span>Add
                                                New
                                            </button>
                                        </div>

                                        <div class="col-md-12 append-container">
                                            <div class="row">
                                                <h6 class="col-md-12 title mb-10">Experience</h6>

                                                <div class="ajaxLoad">
                                                    <div class="col-md-12 input-layout deletable-input delete-row">
                                                        <input type="text">
                                                        <button type="button" class="img-but img-delete"></button>
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

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-12">
            <button class="bx-but bx-save">Save</button>
            <button class="bx-but bx-blue">Save As</button>
            <button class="bx-but bx-exit btnFormClose">Close</button>
        </div>

    </div>


</div>

<div class="row search-row">
    <div class="col-md-12">
        <div class="c-search-wrapper">
            <div class="c-search-content">

                <div class="c-search-item active">
                    <div class="col_1">
                        <select name="" id="">
                            <option value="">Designation</option>
                            <option value="2">UX Engineer</option>
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

<div class="row card-row">
    <div class="col-md-12">
        <div class="card-content-wrp">

            <div class="tab-box">
                <div class="box-head ptb-15">
                    <div class="col-md-12 mt-5 mb-5">
                        <div class="col-md-4">
                            <h5 class="details">UX-345</h5>
                        </div>

                        <div class="col-md-8 pl-0">
                            <h5 class="details low-case">
                                <span>UX Engineer</span>
                                <span>&nbsp;-&nbsp;</span>
                                <span>UX-Research</span>
                            </h5>
                        </div>
                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body pt-20 pb-15">
                    <div class="col-md-12">
                        <div class="col-md-12 mb-30">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam
                                velit, vulputate eu
                            </p>
                        </div>
                        <div class="col-md-12">

                            <!--Job Description-->
                            <div class="ui_accordion">
                                <a href="#job_description1" class="ui-link ">Job Description</a>
                                <div id="job_description1" class="ui-box-wrp">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <table class="table cm_table">
                                                <thead>
                                                <tr>
                                                    <th>Responsibilities</th>
                                                    <th>Duties</th>
                                                    <th>Task</th>

                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                        quam
                                                        velit, vulputate eu
                                                    </td>
                                                    <td>
                                                        <ul class="list pl-15">
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nulla
                                                                quam
                                                                velit, vulputate eu
                                                            </li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul class="list pl-15">
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nulla
                                                                quam
                                                                velit, vulputate eu
                                                            </li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur
                                                            </li>
                                                        </ul>
                                                    </td>

                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Key performance Indicators-->
                            <div class="ui_accordion">
                                <a href="#key_performance1" class="ui-link ">Key performance Indicators</a>
                                <div id="key_performance1" class="ui-box-wrp">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table cm_table">
                                                <thead>
                                                <tr>
                                                    <th>Key Result Area</th>
                                                    <th>KPI</th>
                                                    <th>Weightage(%)</th>

                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                        quam
                                                        velit, vulputate eu
                                                    </td>
                                                    <td>
                                                        <ul class="list pl-15">
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nulla
                                                                quam
                                                                velit, vulputate eu
                                                            </li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td class="text-right">20%</td>

                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Job specification-->
                            <div class="ui_accordion mb-0">
                                <a href="#job_specification1" class="ui-link ">job specification</a>
                                <div id="job_specification1" class="ui-box-wrp">
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <table class="table cm_table">
                                                <thead>
                                                <tr>
                                                    <th>Knowledge / Qualification</th>
                                                    <th>Skill</th>
                                                    <th>Experience</th>

                                                </tr>
                                                </thead>

                                                <tbody>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                                                        quam
                                                        velit, vulputate eu
                                                    </td>
                                                    <td>
                                                        <ul class="list pl-15">
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nulla
                                                                quam
                                                                velit, vulputate eu
                                                            </li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur
                                                            </li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <ul class="list pl-15">
                                                            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Nulla
                                                                quam
                                                                velit, vulputate eu
                                                            </li>
                                                            <li>Lorem ipsum dolor sit amet, consectetur
                                                            </li>
                                                        </ul>
                                                    </td>

                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-12">
                            <button class="bx-but bx-edit">Edit</button>
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

    //    $(".sc-emp-list").mCustomScrollbar({
    //        theme: "dark-3"
    //    });


    $(function () {
        $('input.lc_switch').lc_switch();
    })

</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->
<script>

    //add new
    $('.btnAddNew').on('click', function () {
        $(this).slideUp('fast', function () {
            $('.addForm').slideDown('slow');
            $('.search-row , .card-row').slideUp('fast');
        })
    });

    //Form Close
    $('.btnFormClose').on('click', function () {
        $('.addForm').slideUp('fast', function () {
            $('.btnAddNew').slideDown('fast', function () {
                $('.search-row').slideDown('fast', function () {
                    $('.card-row').slideDown('slow');
                });
            });

        });


    });

    //Sub Form
    $(function () {
        var item = '';

//        $('.append-container').bind("DOMSubtreeModified", "CustomHandler", function () {
//
//        });

        $('.btnAdd').on('click', function () {

            var $formWrp = $(this).parents('.sub-form');
            var $appendDiv = $formWrp.find('.append-container .ajaxLoad');

            item = '<div class="col-md-12 input-layout deletable-input delete-row">';
            item += '<input type="text">';
            item += '<button type="button" class="img-but img-delete"></button>';
            item += '</div>';

            $appendDiv.append(item);

            $appendDiv.find('.input-layout:last input[type="text"]').focus();

        });

        $(document).on('click', '.deletable-input.delete-row .img-delete', function () {
            $(this).parent('.deletable-input').remove();
        });

        $('.bx-next').click(function () {
            resetSubForm($(this));
        });

        function resetSubForm(ele) {
            var parentEl = ele.parents('.row');

            item = '<div class="col-md-12 input-layout deletable-input delete-row">';
            item += '<input type="text">';
            item += '<button type="button" class="img-but img-delete"></button>';
            item += '</div>';

            parentEl.find('.sub-form .ajaxLoad').html('').append(item);
        }

        $('.btnAddPrf').click(function () {

            var $appendDiv = $('.keyPerformance .append-container .ajaxLoad');

            item = '<div class="row key-row">';
            item += '<div class="col-md-6 input-layout">';
            item += '<input type="text">';
            item += '</div>';
            item += '<div class="col-md-6 input-layout deletable-input deletable">';
            item += '<input type="text">';
            item += '<button type="button" class="img-but img-delete"></button>';
            item += '</div>';
            item += '</div>';

            $appendDiv.append(item);

            $appendDiv.find('.key-row:last .col-md-6:first input[type="text"]').focus();
        });

        //Delete Key row
        $(document).on('click', '.deletable-input.deletable .img-delete', function () {
            $(this).parents('.key-row').remove();
        });

        function resetKeyForm(ele) {
            var parentEl = ele.parents('.row');

            item = '<div class="row key-row">';
            item += '<div class="col-md-6 input-layout">';
            item += '<input type="text">';
            item += '</div>';
            item += '<div class="col-md-6 input-layout deletable-input deletable">';
            item += '<input type="text">';
            item += '<button type="button" class="img-but img-delete"></button>';
            item += '</div>';
            item += '</div>';

            parentEl.find('.keyPerformance .append-container .ajaxLoad').html('').append(item);
        }
    });

    //Accordion
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


    //Card box js
    $(function () {


        $('.btn-expand-wrp a').on('click', function () {
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //silde Down
                $(this).addClass('btn-expand-down');
                $(this).closest('.tab-box').parent('.card-content-wrp').addClass('on');
                $(this).closest('.tab-box').find('.box-body').slideDown('slow');
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box').fadeTo('fast', 1);

            } else {
                // Slide Up
                $(this).removeClass('btn-expand-down');
                $(this).closest('.tab-box').parent('.card-content-wrp').removeClass('on');
                $(this).closest('.tab-box').find('.box-body').slideUp('slow');
                $(this).closest('.tab-box ').find('.box-body').removeClass('active-box');

            }
            return false;
        });
    });

</script>
<!-- ===========================================================================
        Backend Script
============================================================================ -->

