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

<!--Pop up modal for group-->
<div class="modal fade" id="groupModal" tabindex="-1" role="dialog">
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
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row mt-15">
                                <div class="col-md-6 mb-15">
                                    <input id="search_txt_parent" name="search_txt_parent" type="text"
                                           onkeyup=""
                                           placeholder="Search">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <table class="table cm_table v-middle">
                                        <thead>
                                        <tr>
                                            <th colspan="2">Name</th>
                                            <th>EPF No</th>
                                            <th>Designation</th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr>
                                            <td class="zero-width">
                                                <div class="but-gruop-wrp pt-0 mb-0">
                                                    <label>
                                                        <input type="checkbox" checked="checked" class="inp-checkbox">
                                                        <span class="check-box"></span>
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-block">
                                                    <div class="cell zero-width">
                                                        <div class="img-wrp--35 ">
                                                            <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                        </div>
                                                    </div>
                                                    <div class="cell pl-15">
                                                        <h5 class="u-name">UX Department</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>234</td>
                                            <td>Head of Development</td>
                                        </tr>
                                        <tr>
                                            <td class="zero-width">
                                                <div class="but-gruop-wrp pt-0 mb-0">
                                                    <label>
                                                        <input type="checkbox" checked="checked" class="inp-checkbox">
                                                        <span class="check-box"></span>
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-block">
                                                    <div class="cell zero-width">
                                                        <div class="img-wrp--35 ">
                                                            <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                        </div>
                                                    </div>
                                                    <div class="cell pl-15">
                                                        <h5 class="u-name">Sandun Maduranga</h5>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>234</td>
                                            <td>Head of Development</td>
                                        </tr>

                                        </tbody>

                                    </table>
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
                        <button type="button" class="bx-but bx-save export">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--Pop up modal for Modules-->
<div class="modal fade" id="modulesModal" tabindex="-1" role="dialog">
    <div class="modal-dialog size-40">
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
                <h4 class="modal-title">Modules</h4>
            </div>
            <div class="modal-body">
                <div class="row mt-15">
                    <div class="col-md-12">
                        <div class="col-md-12">

                            <ul class="module-list">
                                <li>
                                    <div class="but-gruop-wrp pt-0 mb-0">
                                        <label>
                                            <input type="checkbox" class="inp-checkbox">
                                            <span class="check-box"></span>
                                            <span>Leave</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="but-gruop-wrp pt-0 mb-0">
                                        <label>
                                            <input type="checkbox" class="inp-checkbox">
                                            <span class="check-box"></span>
                                            <span>Payroll</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="but-gruop-wrp pt-0 mb-0">
                                        <label>
                                            <input type="checkbox" class="inp-checkbox">
                                            <span class="check-box"></span>
                                            <span>Employee</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="but-gruop-wrp pt-0 mb-0">
                                        <label>
                                            <input type="checkbox" class="inp-checkbox">
                                            <span class="check-box"></span>
                                            <span>Leave</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>

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
                        <button type="button" class="bx-but bx-save export">Save</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="contert-wrapper mb-30 pb-15">

    <div class="col-md-12 header-with-mn">
        <h1 class="title">XYZ2</h1>
    </div>


    <div class="col-md-12 mt-30">

        <div class="col-md-12">
            <div class="row">

                <div class="col-md-6">

                    <div class="row">

                        <div class="col-md-6 input-layout">
                            <select class="sl-permission" name="" id="">
                                <option value=""></option>
                                <option value="1">Payroll Executive</option>
                            </select>
                            <label for="">Permission Category</label>
                        </div>

                        <div id="drop-section" class="col-md-12">
                            <div class="emp-list-container drop-section group-wrp">
                                <div class="group-container"></div>
                            </div>

                            <div class="dropArea" data-location="drop-section">Drag and drop here</div>

                        </div>
                    </div>


                </div>

                <div class="col-md-6">

                    <div class="row">
                        <h4 class="col-md-12 heading">Assign Group</h4>
                        <div class="col-md-12">
                            <ul class="group-list drop-item-list">
                                <li id="id1">
                                    <h5 class="details f-16"><span>Group 1</span></h5>
                                    <h6 class="title mt-5">Leave, Payroll,Leave, Payroll </h6>
                                </li>
                                <li id="id2">
                                    <h5 class="details f-16"><span>Group 2</span></h5>
                                    <h6 class="title mt-5">Leave, Payroll,Leave, Payroll </h6>
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
            <button class="bx-but bx-save">Save</button>
        </div>
    </div>


</div>


<!-- ===========================================================================
        Plugin Script
============================================================================ -->

<script>

    //    Scroll bar
    //    $(".group-list").mCustomScrollbar({
    //        theme: "dark-3"
    //    });
    var getSelectBoxId = function () {
        return $('.sl-permission').val();
    };

    var selectBoxIsSelected = function (ele) {
        var isSelected = false;

        if (ele.val()) {
            isSelected = true;
        }

        return isSelected;
    };

    $(function () {

        var groupId = 0;
        var name = '';

        $(".drop-item-list li h5 span").draggable({
            helper: "clone",
            revert: true,
            revertDuration: 400,
            zIndex: 999,
            start: function (evt) {

                groupId = $(evt.target).parents('li').attr('id');
                name = $(evt.target).text();

            }

        });


        $(".dropArea").droppable({
            accept: ".drop-item-list li  h5 span",
            drop: function (evt) {
                if (!selectBoxIsSelected($('.sl-permission'))) {
                    alert('Pls Select the permission type');
                } else {
                    var location = $(evt.target).attr('data-location');
                    var item = appendItem(name, groupId);

                    $('.drop-section .group-container').append(item);

                    hideBtnArea();
                }


            }
        });

        function hideBtnArea() {

            if ($('.emp-list-wrp ').children().size()) {
                $('.btn-area').show();
            } else {
                $('.btn-area').hide();

            }
        }

        hideBtnArea();
        var item = '';

        function appendItem(name, id) {
            item = '<div id="' + id + '" data-permissin-id="' + getSelectBoxId() + '" class="group"><span>' + name + '</span>';
            item += '<button class="quick-delete" type="button"></button>';
            item += '</div>';

            return item;
        }

    });


</script>

<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>
    $('.btnModule').on('click', function () {
        var $modal = $('#modulesModal');
        $modal.modal('show');
    });

    $(document).on('click', '.emp-list-container .img-wrp--35 ', function () {
        var $modal = $('#groupModal');
        $modal.modal('show');
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

</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

