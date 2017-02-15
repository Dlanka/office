<?php

//==============================================================================
//      Plugins CCS
//==============================================================================
// Date picker
//mCustom Scrollbar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');


//==============================================================================
//      Custom CSS
//==============================================================================
// form
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Permission view
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/permission/view.css', 'screen');

//==============================================================================
//      JS
//==============================================================================
//Form js
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);


//==============================================================================
//      Plugins JS
//==============================================================================
//mCustom Scrollbar
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/mScrollbar/jquery.mCustomScrollbar.concat.min.js', CClientScript::POS_HEAD);
?>

<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<div class="row btn-wrp">
    <div class="col-md-12">
        <button type="button" class="but new add_roll"><span></span>Add User Roll</button>
    </div>
</div>

<!--Create Form-->
<div class="col-lg-12 contert-wrapper createForm">
    <div class="row">
        <div class="col-md-12 header-with-mn">
            <div class="row">
                <h1 class="col-md-12 title">Create New Employee</h1>
            </div>
        </div>
        <div class="col-md-12 mt-30">
            <div class="col-md-12">
                <div class="row form-row">
                    <div class="col-md-4 input-layout">
                        <input type="text">
                        <label for="">Email</label>
                    </div>
                    <div class="col-md-4 input-layout">
                        <input type="text">
                        <label for="">Username</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 input-layout">
                        <input type="password">
                        <label for="">Password</label>
                    </div>
                    <div class="col-md-4 input-layout">
                        <input type="password">
                        <label for="">Confirm Password</label>
                    </div>
                </div>

                <!-- Success Massage -->
                <div class="message">as</div>

                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="bx-but bx-save">Save</button>
                        <button type="button" class="bx-but bx-exit formCancel">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="c-search-wrapper">
            <div class="c-search-content">
                <div class="c-search-item set-3">
                    <div class="col_1">
                        <select name="" id="">
                            <option value="ex">Select</option>
                            <option value="ex">Non Employee</option>
                            <option value="ex">Employee</option>

                        </select>
                    </div>
                    <div class="col_2">
                        <input type="text" data-language="en" data-position="bottom left" placeholder="" onkeyup=""
                               name="" class="">
                    </div>
                    <div class="col_3">
                        <button onclick="" type="button" class="btn-search"></button>
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
                    <div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="img-block">
                                    <div class="img-wrp--35">
                                        <img alt="Employee Image"
                                             src="<?php echo Yii::app()->baseUrl ?>/uploads/empProfile/35/default.png"
                                             class="user-img">
                                    </div>
                                    <h5 class="u-name">
                                        Darshani Udayanga
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row ">
                                    <h5 class="col-md-3 details">23</h5>
                                    <h5 class="col-md-4 details">Employee</h5>
                                    <div class="col-md-5 sl-opt">
                                        <select name="" id="">
                                            <option value="ex">User Default</option>
                                            <option value="ex">Non Employee</option>
                                            <option value="ex">Employee</option>
                                        </select>
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
                    <div>
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="img-block">
                                    <div class="img-wrp--35">
                                        <img alt="Employee Image"
                                             src="<?php echo Yii::app()->baseUrl ?>/uploads/empProfile/35/default.png"
                                             class="user-img">
                                    </div>
                                    <h5 class="u-name">
                                        Darshani Udayanga
                                    </h5>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="row ">
                                    <h5 class="col-md-3 details">23</h5>
                                    <h5 class="col-md-4 details">Employee</h5>
                                    <div class="col-md-5 sl-opt">
                                        <select name="" id="">
                                            <option value="ex">User Default</option>
                                            <option value="ex">Non Employee</option>
                                            <option value="ex">Employee</option>
                                        </select>
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
<!-- ===========================================================================
        Custom Script
============================================================================ -->
<!--Form-->
<script>

    $('.add_roll').click(function () {

        $('.btn-wrp').slideUp('fast', function () {
            $('.createForm').slideDown('slow');
        });
    });

    $('.formCancel').click(function () {

        $('.createForm').slideUp('fast', function () {
            $('.btn-wrp').slideDown('slow');
        });
    });

</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

