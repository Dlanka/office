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

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<div class="col-md-12 mb-30">
    <div class="contert-wrapper relt-wrp">
        <div class="ds-block">
            <div class="ds-b-left bg-blue top-pd">
                <div class="img-wrp--160 bg-l-white">
                    <div>
                        <?php echo Common::showEmployeeThumbnailx160(0); ?>
                    </div>
                </div>
                <h3 class="u-name ownner">
                    Sandun Maduranga
                    <span class="title">Accountant</span>
                </h3>
            </div>
            <div class="ds-b-right v-top">
                <h1 class="title title-sp">Performance Appraisal</h1>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 line_tab_wrp line_tab_auto">
    <ul class="line_tab">
        <li class="active"><a href="#tab1">Company / Department</a></li>
        <li><a href="#tab2">Individual</a></li>
        <li><a href="#tab3">Behavioural</a></li>
        <li><a href="#tab4">Competency</a></li>
        <li><a href="#tab5">Other</a></li>
    </ul>
    <div class="line_tab_content pt-30 pb-30">
        <div class="tab-items active" id="tab1">
            <div class="row">
                <div class="col-md-12">
                    <button type="button" class="but new btnAddNew"><span></span>Add New</button>
                </div>

                <div class="col-md-12 ">
                    <div class="col-md-12 mb-30 contert-wrapper addForm pb-15 hide-block">
                        <div class="row">
                            <div class="col-md-12 header-with-mn">
                                <h1 class="title">Add New</h1>
                            </div>
                        </div>

                        <div class="col-md-12 ">
                            <div class="row">
                                <!--Option container-->
                                <div class="col-md-12 option-wrp mb-30">
                                    <div id="e1" class="option">Lorem ipsum dolor</div>
                                    <div id="r1" class="option">Lorem ipsum</div>
                                    <div id="v1" class="option">Lorem dolor</div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row form-row">
                                        <div class="col-md-8 input-layout">
                                            <input type="text" class="componentDrop">
                                            <label for="">Component</label>
                                        </div>
                                        <div class="col-md-4 input-layout">
                                            <input type="text">
                                            <label for="">Target</label>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-md-4 input-layout">
                                            <input class="datepicks" type="text">
                                            <label for="">Start Date</label>
                                        </div>
                                        <div class="col-md-4 input-layout">
                                            <input class="datepicks" type="text">
                                            <label for="">End Date</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 textarea-layout">
                                            <label for="">Comment</label>
                                            <textarea class="h-60" name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="message"></div>
                                        </div>

                                        <div class="col-md-12">
                                            <button class="bx-but bx-save btnFormSave">Save</button>
                                            <button class="bx-but bx-exit btnFormClose">Close</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 ">
                    <div class="card-content-wrp">

                        <div class="tab-box">
                            <div class="box-head ptb-15">
                                <div class="col-md-12">
                                    <div class="left-b col-md-4">
                                        <h5 class="details up-case mt-5">Increase sales</h5>
                                    </div>

                                    <div class="right-side col-md-8">
                                        <div class="row">
                                            <div class="col-md-offset-8 col-md-4 ">
                                                <h5 class="details low-case">30 Nov 2016</h5>
                                                <h6 class="title low-case"><span>11</span>&nbsp; Days Left</h6>
                                            </div>
                                        </div>

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
                                            <div class="col-md-8">
                                                <h6 class="title mb-2">Target</h6>
                                                <p class="txt-dark">Lorum ipsum Lorum ipsum Lorum</p>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="table-block duration">
                                                    <div class="cell">
                                                        <h6 class="title low-cs du_head">Start Date</h6>
                                                        <h5 class="details low-cs">2 Oct 2016</h5>
                                                    </div>
                                                    <div class="cell">
                                                        <!--  Status-->
                                                        <!-- Default blue , red -->
                                                        <div class="cr_duration red">
                                                            <span>124</span>
                                                            <h6>Days</h6>
                                                        </div>
                                                    </div>
                                                    <div class="cell">
                                                        <h6 class="title low-cs du_head">End Date</h6>
                                                        <h5 class="details low-cs">30 Nov 2016</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-30">
                                            <div class="col-md-8">

                                            </div>
                                            <div class="col-md-4">
                                                <ul class="comment-list max-h-270 ">
                                                    <li>
                                                        <div class="table-block v-top">
                                                            <div class="cell zero-width">
                                                                <div class="img-wrp--35 bg-l-white">
                                                                    <?php echo Common::showEmployeeThumbnailx35(1); ?>
                                                                </div>
                                                            </div>
                                                            <div class="cell pl-15">
                                                                <p class="txt-dark">
                                                                    <span class="commenter mr-5">Chathuri Ganeshan</span>
                                                                    <span class="comment">
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing vulputate eu pharetra nec, mattis quam velit
                                                                    </span>
                                                                </p>
                                                                <h6 class="title float-right mt-5">January 24</h6>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                    <li>
                                                        <div class="table-block v-top">
                                                            <div class="cell zero-width">
                                                                <div class="img-wrp--35 bg-l-white">
                                                                    <?php echo Common::showEmployeeThumbnailx35(1); ?>
                                                                </div>
                                                            </div>
                                                            <div class="cell pl-15">
                                                                <p class="txt-dark">
                                                                    <span class="commenter mr-5">Chathuri Ganeshan</span>
                                                                    <span class="comment">
                                                                        Lorem ipsum dolor sit amet, consectetur adipiscing vulputate eu pharetra nec, mattis quam velit
                                                                    </span>
                                                                </p>
                                                                <h6 class="title float-right mt-5">January 24</h6>
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

    //Card box Accordion
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

    function loadLineTab() {

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
        loadLineTab();
    });

    //fun: Components drag and drop
    function loadComponentDragDrop() {
        var itemId = 0,
            itemName = '';

        $(".option-wrp .option").draggable({
            helper: "clone",
            revert: true,
            revertDuration: 400,
            zIndex: 999,
            start: function (evt) {
                itemId = $(evt.target).attr('id');
                itemName = $(evt.target).html();
            }
        });


        $(".componentDrop").droppable({
            accept: ".option-wrp .option",
            drop: function () {
                $('.componentDrop').attr('data-option-id', itemId).val(itemName);
                form.reset();
            }
        });

    }

    //Form Slide down, when click on add New button
    $('.btnAddNew').on('click', function () {
        $(this).slideUp('fast', function () {
            $('.addForm').slideDown('fast');
        });
    });

    //Form Slide Up, when click on form close button.
    $('.btnFormClose').on('click', function () {
        $(this).parents('.addForm').slideUp('fast', function () {
            $('.btnAddNew').slideDown('fast');
        });
    });

    $(function () {
        loadComponentDragDrop();
    })

</script>
<!-- ===========================================================================
        Plugin Script
============================================================================ -->
<script>

    $('.datepicks').datepicker({
        language: 'en',
        autoClose: true
    })
</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->
