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
//Accordion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');
// form
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Permission
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/permission/main.css', 'screen');


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

<div class="col-lg-12 contert-wrapper ">
    <div class="row">
        <div class="col-md-12 header-with-mn">
            <div class="row">
                <h1 class="col-md-12 title">Permission</h1>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-12">
                <button type="button" class="but new add_roll"><span></span>Add User Roll</button>
            </div>
        </div>
        <div class="row pm_panel ">
            <div class="col-md-12 pm_wrapper">
                <div class="pm_head">
                    <div class="plr-10">
                        <div class="title form-content">

                            <div class="view_form col-md-9">
                                <select name="" id="" class="sl_user_roll">
                                    <option value="1">Select</option>
                                </select>
                            </div>
                            <div class="add_form col-md-9">
                                <input type="text" placeholder="User Roll " class="in_user_roll">
                            </div>

                        </div>
                        <div class="ticks"><input class="delete" type="checkbox"><i class="ic_options delete"></i></div>
                        <div class="ticks"><input class="edit" type="checkbox"><i class="ic_options edit"></i></div>
                        <div class="ticks"><input class="view" type="checkbox"><i class="ic_options view"></i></div>
                        <div class="ticks"><input class="add" type="checkbox"><i class="ic_options add"></i></div>
                    </div>
                </div>
                <div class="plr-10">
                    <div class="pm_body">
                        <div class="three-menu">

                            <div>
                                <div class="th_head">
                                    <div class="title">
                                        <a href="javascript:void(0)">
                                            <i class="ic_plus"></i>
                                            <i class="pm_menu mn_0"></i>
                                            <span>Admin Panel</span>
                                        </a>
                                    </div>

                                    <div class="ticks">
                                        <div class="but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="delete">
                                                <span class="delete check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ticks">
                                        <div class="but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="edit">
                                                <span class="edit check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ticks">
                                        <div class="but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="view">
                                                <span class="view check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ticks">
                                        <div class="but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="add">
                                                <span class="add check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="th_body">
                                    <div class="three-menu">

                                        <div>
                                            <div class="th_head">
                                                <div class="title">
                                                    <a href="javascript:void(0)">
                                                        <i class="ic_plus"></i>
                                                        <i class="pm_menu mn_0"></i>
                                                        <span>Setting</span>
                                                    </a>
                                                </div>

                                                <div class="ticks">
                                                    <div class="but-gruop-wrp">
                                                        <label>
                                                            <input type="checkbox" class="delete">
                                                            <span class="delete check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="ticks">
                                                    <div class="but-gruop-wrp">
                                                        <label>
                                                            <input type="checkbox" class="edit">
                                                            <span class="edit check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="ticks">
                                                    <div class="but-gruop-wrp">
                                                        <label>
                                                            <input type="checkbox" class="view">
                                                            <span class="view check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="ticks">
                                                    <div class="but-gruop-wrp">
                                                        <label>
                                                            <input type="checkbox" class="add">
                                                            <span class="add check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="th_body">
                                                <div class="three-menu">

                                                    <div>
                                                        <div class="th_head">
                                                            <div class="title">
                                                                <a href="javascript:void(0)">
                                                                    <i class="ic_plus"></i>
                                                                    <i class="pm_menu mn_0"></i>
                                                                    <span>Payroll</span>
                                                                </a>
                                                            </div>

                                                            <div class="ticks">
                                                                <div class="but-gruop-wrp">
                                                                    <label>
                                                                        <input type="checkbox" class="delete">
                                                                        <span class="delete check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ticks">
                                                                <div class="but-gruop-wrp">
                                                                    <label>
                                                                        <input type="checkbox" class="edit">
                                                                        <span class="edit check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ticks">
                                                                <div class="but-gruop-wrp">
                                                                    <label>
                                                                        <input type="checkbox" class="view">
                                                                        <span class="view check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ticks">
                                                                <div class="but-gruop-wrp">
                                                                    <label>
                                                                        <input type="checkbox" class="add">
                                                                        <span class="add check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="th_body">
                                                            <div class="three-menu">

                                                                <div>
                                                                    <div class="th_head">
                                                                        <div class="title">
                                                                            <a href="javascript:void(0)">
                                                                                <i class="ic_plus"></i>
                                                                                <i class="pm_menu mn_1"></i>
                                                                                <span>Mail</span>
                                                                            </a>
                                                                        </div>

                                                                        <div class="ticks">
                                                                            <div class="but-gruop-wrp">
                                                                                <label>
                                                                                    <input type="checkbox"
                                                                                           class="delete">
                                                                                    <span
                                                                                        class="delete check-box"></span>
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ticks">
                                                                            <div class="but-gruop-wrp">
                                                                                <label>
                                                                                    <input type="checkbox" class="edit">
                                                                                    <span class="edit check-box"></span>
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ticks">
                                                                            <div class="but-gruop-wrp">
                                                                                <label>
                                                                                    <input type="checkbox" class="view">
                                                                                    <span class="view check-box"></span>
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ticks">
                                                                            <div class="but-gruop-wrp">
                                                                                <label>
                                                                                    <input type="checkbox" class="add">
                                                                                    <span class="add check-box"></span>
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="th_body">
                                                                        <div class="three-menu">

                                                                            <div>
                                                                                <div class="th_head">
                                                                                    <div class="title">
                                                                                        <a href="javascript:void(0)">
                                                                                            <i class="ic_plus"></i>
                                                                                            <i class="pm_menu mn_1"></i>
                                                                                            <span>Email Config</span>
                                                                                        </a>
                                                                                    </div>

                                                                                    <div class="ticks">
                                                                                        <div class="but-gruop-wrp">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                       class="delete">
                                                                                                <span
                                                                                                    class="delete check-box"></span>
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ticks">
                                                                                        <div class="but-gruop-wrp">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                       class="edit">
                                                                                                <span
                                                                                                    class="edit check-box"></span>
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ticks">
                                                                                        <div class="but-gruop-wrp">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                       class="view">
                                                                                                <span
                                                                                                    class="view check-box"></span>
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ticks">
                                                                                        <div class="but-gruop-wrp">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                       class="add">
                                                                                                <span
                                                                                                    class="add check-box"></span>
                                                                                                <span></span>
                                                                                            </label>
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
                            </div>

                        </div>
                        <div class="three-menu">

                            <div>
                                <div class="th_head">
                                    <div class="title">
                                        <a href="javascript:void(0)">
                                            <i class="ic_plus"></i>
                                            <i class="pm_menu mn_0"></i>
                                            <span>HR Function</span>
                                        </a>
                                    </div>

                                    <div class="ticks">
                                        <div class="but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="delete">
                                                <span class="delete check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ticks">
                                        <div class="but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="edit">
                                                <span class="edit check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ticks">
                                        <div class="but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="view">
                                                <span class="view check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="ticks">
                                        <div class="but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="add">
                                                <span class="add check-box"></span>
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="th_body">
                                    <div class="three-menu">

                                        <div>
                                            <div class="th_head">
                                                <div class="title">
                                                    <a href="javascript:void(0)">
                                                        <i class="ic_plus"></i>
                                                        <i class="pm_menu mn_0"></i>
                                                        <span>Employee Info</span>
                                                    </a>
                                                </div>

                                                <div class="ticks">
                                                    <div class="but-gruop-wrp">
                                                        <label>
                                                            <input type="checkbox" class="delete">
                                                            <span class="delete check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="ticks">
                                                    <div class="but-gruop-wrp">
                                                        <label>
                                                            <input type="checkbox" class="edit">
                                                            <span class="edit check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="ticks">
                                                    <div class="but-gruop-wrp">
                                                        <label>
                                                            <input type="checkbox" class="view">
                                                            <span class="view check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="ticks">
                                                    <div class="but-gruop-wrp">
                                                        <label>
                                                            <input type="checkbox" class="add">
                                                            <span class="add check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="th_body">
                                                <div class="three-menu">

                                                    <div>
                                                        <div class="th_head">
                                                            <div class="title">
                                                                <a href="javascript:void(0)">
                                                                    <i class="ic_plus"></i>
                                                                    <i class="pm_menu mn_0"></i>
                                                                    <span>Employee Details</span>
                                                                </a>
                                                            </div>

                                                            <div class="ticks">
                                                                <div class="but-gruop-wrp">
                                                                    <label>
                                                                        <input type="checkbox" class="delete">
                                                                        <span class="delete check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ticks">
                                                                <div class="but-gruop-wrp">
                                                                    <label>
                                                                        <input type="checkbox" class="edit">
                                                                        <span class="edit check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ticks">
                                                                <div class="but-gruop-wrp">
                                                                    <label>
                                                                        <input type="checkbox" class="view">
                                                                        <span class="view check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="ticks">
                                                                <div class="but-gruop-wrp">
                                                                    <label>
                                                                        <input type="checkbox" class="add">
                                                                        <span class="add check-box"></span>
                                                                        <span></span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="th_body">
                                                            <div class="three-menu">

                                                                <div>
                                                                    <div class="th_head">
                                                                        <div class="title">
                                                                            <a href="javascript:void(0)">
                                                                                <i class="ic_plus"></i>
                                                                                <i class="pm_menu mn_0"></i>
                                                                                <span>Basic Information</span>
                                                                            </a>
                                                                        </div>

                                                                        <div class="ticks">
                                                                            <div class="but-gruop-wrp">
                                                                                <label>
                                                                                    <input type="checkbox"
                                                                                           class="delete">
                                                                                    <span
                                                                                        class="delete check-box"></span>
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ticks">
                                                                            <div class="but-gruop-wrp">
                                                                                <label>
                                                                                    <input type="checkbox" class="edit">
                                                                                    <span class="edit check-box"></span>
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ticks">
                                                                            <div class="but-gruop-wrp">
                                                                                <label>
                                                                                    <input type="checkbox" class="view">
                                                                                    <span class="view check-box"></span>
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ticks">
                                                                            <div class="but-gruop-wrp">
                                                                                <label>
                                                                                    <input type="checkbox" class="add">
                                                                                    <span class="add check-box"></span>
                                                                                    <span></span>
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="th_body">
                                                                        <div class="three-menu">

                                                                            <div>
                                                                                <div class="th_head">
                                                                                    <div class="title">
                                                                                        <a href="javascript:void(0)">
                                                                                            <i class="ic_plus"></i>
                                                                                            <i class="pm_menu mn_1"></i>
                                                                                            <span>Remuneration</span>
                                                                                        </a>
                                                                                    </div>

                                                                                    <div class="ticks">
                                                                                        <div class="but-gruop-wrp">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                       class="delete">
                                                                                                <span
                                                                                                    class="delete check-box"></span>
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ticks">
                                                                                        <div class="but-gruop-wrp">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                       class="edit">
                                                                                                <span
                                                                                                    class="edit check-box"></span>
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ticks">
                                                                                        <div class="but-gruop-wrp">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                       class="view">
                                                                                                <span
                                                                                                    class="view check-box"></span>
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ticks">
                                                                                        <div class="but-gruop-wrp">
                                                                                            <label>
                                                                                                <input type="checkbox"
                                                                                                       class="add">
                                                                                                <span
                                                                                                    class="add check-box"></span>
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="th_body">
                                                                                    <div class="three-menu">

                                                                                        <div>
                                                                                            <div class="th_head">
                                                                                                <div class="title">
                                                                                                    <a href="javascript:void(0)">
                                                                                                        <i class="ic_plus"></i>
                                                                                                        <i class="pm_menu mn_1"></i>
                                                                                                        <span>Pay</span>
                                                                                                    </a>
                                                                                                </div>

                                                                                                <div class="ticks">
                                                                                                    <div
                                                                                                        class="but-gruop-wrp">
                                                                                                        <label>
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                class="delete">
                                                                                                            <span
                                                                                                                class="delete check-box"></span>
                                                                                                            <span></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ticks">
                                                                                                    <div
                                                                                                        class="but-gruop-wrp">
                                                                                                        <label>
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                class="edit">
                                                                                                            <span
                                                                                                                class="edit check-box"></span>
                                                                                                            <span></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ticks">
                                                                                                    <div
                                                                                                        class="but-gruop-wrp">
                                                                                                        <label>
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                class="view">
                                                                                                            <span
                                                                                                                class="view check-box"></span>
                                                                                                            <span></span>
                                                                                                        </label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="ticks">
                                                                                                    <div
                                                                                                        class="but-gruop-wrp">
                                                                                                        <label>
                                                                                                            <input
                                                                                                                type="checkbox"
                                                                                                                class="add">
                                                                                                            <span
                                                                                                                class="add check-box"></span>
                                                                                                            <span></span>
                                                                                                        </label>
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
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-15">
                <button class="bx-but bx-save">Save</button>
                <button class="bx-but bx-delete">Delete</button>
                <button class="bx-but bx-exit">Cancel</button>
            </div>

        </div>
    </div>
</div>

<!--Three Menu expand and collapse-->
<script>

    $('.three-menu a').click(function () {

        var that = $(this);
        var body = that.closest('.th_head').next('.th_body');

        if (!that.hasClass('expand')) {

            that.addClass('expand');
            that.find('.ic_plus').addClass('expand');
            body.slideDown().addClass('active');

        } else {
            that.removeClass('expand');
            that.find('.ic_plus').removeClass('expand');
            body.slideUp().removeClass('active');
        }

    });


    $('.pm_head .add').click(function () {
        checkAll($(this), '.add');
    });

    $('.pm_head .view').click(function () {
        checkAll($(this), '.view');
    });

    $('.pm_head .edit').click(function () {
        checkAll($(this), '.edit');
    });

    $('.pm_head .delete').click(function () {
        checkAll($(this), '.delete');
    });

    function checkAll(ele, cls) {
        if (!$(ele).attr('checked')) {
            $(ele).attr('checked', true);
            $('.three-menu').find('.but-gruop-wrp').find(cls).prop('checked', true);
        } else {
            $(ele).attr('checked', false);
            $('.three-menu').find('.but-gruop-wrp').find(cls).prop('checked', false);
        }

    }

    $('.add_roll').click(function () {
        $('.pm_panel').addClass('add');
    });
    $('.bx-exit').click(function () {
        $('.pm_panel').removeClass('add');
    });
</script>

<div>
    <table>
        <thead>
        <tr>

            <th>User Role</th>
            <th style="">Action</th>
        </tr>
        </thead>

        <tbody>
        <?php
        foreach ($roles as $rowRole) { ?>
            <tr>
                <td><?php echo $rowRole->user_role_name; ?></td>
                <td><a class="bx-but bx-edit"
                       href="<?php echo Yii::app()->request->baseUrl; ?>/permission/ViewPermission/<?php echo $rowRole->user_role_id; ?>">Edit</a>
                    <?php if ($rowRole->user_default == 0) { ?>
                        <a href="#" class="delete"
                           onclick="deleteRole('<?php echo $role->user_role_name; ?>')">Delete</a>
                    <?php } ?>
                </td>
            </tr>

        <?php } ?>
        </tbody>
    </table>
</div>

