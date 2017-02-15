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
// Main
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/screening.css', 'screen');

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


<div class="contert-wrapper mb-30 pb-15">

    <div class="col-md-12 mt-30 mb-30">
        <h1 class="col-md-12 title">Interview Questions</h1>
    </div>


    <div class="col-md-12 mt-20">

        <div class="col-md-8">

            <div class="row">
                <div class="col-md-12">
                    <ul class="question-list scroll-q">
                        <li class="question">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-1 ">
                                            <div class="but-gruop-wrp m-0">
                                                <label>
                                                    <input type="checkbox" class="chb-question">
                                                    <span class="check-box"></span>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="col-md-11 details mt-5">
                                            Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-2 ">
                                    <input class="text-right" disabled="disabled" type="text">
                                </div>
                            </div>
                        </li>
                        <li class="question">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-1 ">
                                            <div class="but-gruop-wrp m-0">
                                                <label>
                                                    <input type="checkbox" class="chb-question">
                                                    <span class="check-box"></span>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="col-md-11 details mt-5">
                                            Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-2 ">
                                    <input class="text-right" disabled="disabled" type="text">
                                </div>
                            </div>
                        </li>
                        <li class="question">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-1 ">
                                            <div class="but-gruop-wrp m-0">
                                                <label>
                                                    <input type="checkbox" class="chb-question">
                                                    <span class="check-box"></span>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="col-md-11 details mt-5">
                                            Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-2 ">
                                    <input class="text-right" disabled="disabled" type="text">
                                </div>
                            </div>
                        </li>
                        <li class="question">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-1 ">
                                            <div class="but-gruop-wrp m-0">
                                                <label>
                                                    <input type="checkbox" class="chb-question">
                                                    <span class="check-box"></span>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="col-md-11 details mt-5">
                                            Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-2 ">
                                    <input class="text-right" disabled="disabled" type="text">
                                </div>
                            </div>
                        </li>
                        <li class="question">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="row">
                                        <div class="col-md-1 ">
                                            <div class="but-gruop-wrp m-0">
                                                <label>
                                                    <input type="checkbox" class="chb-question">
                                                    <span class="check-box"></span>
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="col-md-11 details mt-5">
                                            Lorem ipsum dolor sit amet, consectetur ipsum dolor sit amet.
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-md-2 ">
                                    <input class="text-right" disabled="disabled" type="text">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="col-md-12 mt-30">
                    <h4 class="weight text-right">80</h4>
                </div>
            </div>

        </div>

        <!--Interview panel selection area-->
        <div class="col-md-4">

            <div class="row mb-30">

                <div class="col-md-12">
                    <h4 class="title-18 mb-15 up-case">Interview Panel</h4>
                </div>

                <div class="col-md-12">

                    <div class="row">


                        <div class="col-md-12">
                            <ul class="list-vacancy">
                                <li>
                                    <div class="table-block">
                                        <div class="cell zero-width">
                                            <div class="img-wrp--35">
                                                <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                            </div>
                                        </div>
                                        <div class="cell pl-15">
                                            <h5 class="details">Natasha Gunawaradana</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table-block">
                                        <div class="cell zero-width">
                                            <div class="img-wrp--35">
                                                <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                            </div>
                                        </div>
                                        <div class="cell pl-15">
                                            <h5 class="details">Natasha Gunawaradana</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table-block">
                                        <div class="cell zero-width">
                                            <div class="img-wrp--35">
                                                <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                            </div>
                                        </div>
                                        <div class="cell pl-15">
                                            <h5 class="details">Natasha Gunawaradana</h5>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="table-block">
                                        <div class="cell zero-width">
                                            <div class="img-wrp--35">
                                                <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                            </div>
                                        </div>
                                        <div class="cell pl-15">
                                            <h5 class="details">Natasha Gunawaradana</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>


    <div class="col-md-12">
        <div class="col-md-12">
            <button class="bx-but bx-save">Submit</button>
            <button class="bx-but bx-exit btnClose">Close</button>
        </div>
    </div>


</div>


<!-- ===========================================================================
        Plugin Script
============================================================================ -->

<script>
    $(".scroll-q").mCustomScrollbar({
        theme: "dark-3"
    });

</script>


<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>

    $('.btnAddNew').on('click', function () {
        $(this).slideUp('fast', function () {
            $('.addForm').slideDown('slow');
        });

    });

    $('.btnClose').on('click', function () {
        $('.addForm').slideUp('slow', function () {
            $('.btnAddNew').slideDown('fast');
        });
    });

    //Select All check box
    new CheckAll({
        parentEle: '.allSelect',
        childEle: '.chb-child'
    });

    //Question select
    $('.chb-question').change(function () {

        var $parent = $(this).parents('li');

        if ($(this).is(':checked')) {
            $parent.find('input[type=text]').attr('disabled', false);
            $parent.find('input[type=text]').focus();
        } else {
            $parent.find('input[type=text]').attr('disabled', true);
            $parent.find('input[type=text]').val('');
        }
    });

    // Vacancy selected item
    $('.list-vacancy li').click(function () {
        $('.list-vacancy li').removeClass('selected');
        $(this).addClass('selected');
    });


</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

