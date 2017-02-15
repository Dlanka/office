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

    <div class="row mb-10">
        <div class="col-md-12">
            <div class="col-md-12 plr-30">
                <div class="but-gruop-wrp mb-0">
                    <label>
                        <input class="selectAll" type="checkbox">
                        <span class="check-box"></span>
                        <span class="pl-15">Select All</span>
                    </label>
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
                                                <input type="checkbox" />
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
                                                <h5 class="col-md-10 u-name">Sandun Maduranga</h5>
                                                <h5 class="col-md-2 details">607</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="right-side col-md-8">

                            </div>
                        </div>
                        <div class="btn-expand-wrp">
                            <a class="btn-expand" href="#"></a>
                        </div>
                    </div>

                    <div class="box-body pt-20">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="row">

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

</script>
<!-- ===========================================================================
        Plugin Script
============================================================================ -->


<!-- ===========================================================================
        Backend Script
============================================================================ -->

