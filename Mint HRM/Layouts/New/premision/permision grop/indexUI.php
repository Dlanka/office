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
                                            <input type="checkbox"  class="inp-checkbox">
                                            <span class="check-box"></span>
                                            <span>Leave</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="but-gruop-wrp pt-0 mb-0">
                                        <label>
                                            <input type="checkbox"  class="inp-checkbox">
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
        <h1 class="title">XYZ</h1>
    </div>


    <div class="col-md-12 mt-30">

        <div class="col-md-12">
            <div class="row">

                <div class="col-md-7">

                    <div class="row">
                        <div class="col-md-12 line_tab_wrp">

                            <ul class="line_tab">
                                <li class="active"><a href="#department">Department</a></li>
                                <li><a href="#person">Person</a></li>
                            </ul>

                            <div class="line_tab_content pt-30 pb-30">

                                <div class="tab-items active" id="department">
                                    <div class="row">
                                        <div class="col-md-12 sc-wrapper">
                                            <i class="ic_search"></i>
                                            <input class="input-search" onkeyup="" type="text"
                                                   placeholder="Search here">
                                        </div>
                                    </div>

                                    <div class="row mt-15">
                                        <div class="col-md-12 empList">
                                            <ul class="sc-emp-list">
                                                <li id="emp_1">
                                                    <div class="table-block">
                                                        <div class="cell zero-width">
                                                            <div class="img-wrp--35 ">
                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-15">
                                                            <h5 class="u-name">QA Department</h5>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li id="emp_2">
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
                                                </li>
                                                <li id="emp_3">
                                                    <div class="table-block">
                                                        <div class="cell zero-width">
                                                            <div class="img-wrp--35 ">
                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-15">
                                                            <h5 class="u-name">Android Department</h5>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li id="emp_4">
                                                    <div class="table-block">
                                                        <div class="cell zero-width">
                                                            <div class="img-wrp--35 ">
                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-15">
                                                            <h5 class="u-name">Java Department</h5>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-items" id="person">
                                    <div class="row">
                                        <div class="col-md-12 sc-wrapper">
                                            <i class="ic_search"></i>
                                            <input class="input-search" onkeyup="" type="text"
                                                   placeholder="Search here">
                                        </div>
                                    </div>

                                    <div class="row mt-15">
                                        <div class="col-md-12 empList">
                                            <ul class="sc-emp-list">
                                                <li id="emp_1">
                                                    <div class="table-block">
                                                        <div class="cell zero-width">
                                                            <div class="img-wrp--35 ">
                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-15">
                                                            <h5 class="u-name">Nirmal Fernando</h5>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li id="emp_2">
                                                    <div class="table-block">
                                                        <div class="cell zero-width">
                                                            <div class="img-wrp--35 ">
                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-15">
                                                            <h5 class="u-name">Natasha Gunawardhana</h5>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li id="emp_3">
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
                                                </li>
                                                <li id="emp_4">
                                                    <div class="table-block">
                                                        <div class="cell zero-width">
                                                            <div class="img-wrp--35 ">
                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-15">
                                                            <h5 class="u-name">Nirmal Fernando</h5>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li id="emp_5">
                                                    <div class="table-block">
                                                        <div class="cell zero-width">
                                                            <div class="img-wrp--35 ">
                                                                <?php echo Common::showEmployeeThumbnailx35(0) ?>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-15">
                                                            <h5 class="u-name">Nirmal Fernando</h5>
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

                <div class="col-md-5">

                    <div class="row mt-20 mb-20">
                        <div class="col-md-8 input-layout">
                            <input type="text">
                            <label for="">Title</label>
                        </div>
                        <div class="col-md-4 pl-0">
                            <button type="button" class="bx-sm-but bx-next bx-m-0 btnModule">Select Modules</button>
                        </div>
                    </div>

                    <div class="row">
                        <div id="drop-section" class="col-md-12">
                            <div class="emp-list-container drop-section group-wrp">
                                <div class="emp-list-wrp ">

                                </div>
                            </div>
                            <div class="row mtb-15 btn-area">
                                <div class="col-md-12">
                                    <button class="bx-sm-but bx-save">Save</button>
                                    <button class="bx-sm-but bx-exit">Cancel</button>
                                </div>
                            </div>
                            <div class="dropArea" data-location="drop-section">Drag and drop here selected interviwer
                            </div>
                        </div>
                    </div>

                    <div class="row mt-30">
                        <div class="col-md-12">
                            <ul class="view-list scroll group-list">
                                <li>


                                    <div class="view-group">
                                        <div class="view">
                                            <span>Group 1</span>
                                            <div class="sub-data">
                                                <span class="limit-text">Leave, payroll, Leave, payroll</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <div class="action-group">
                                            <button type="button" class="img-but img-delete"
                                                    title="Delete"></button>
                                            <button type="button" class="img-but img-edit"
                                                    title="Edit"></button>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="view-group">
                                        <div class="view">
                                            <span>Group 2</span>
                                            <div class="sub-data">
                                                <span class="limit-text">Leave, payroll, Leave, payroll</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <div class="action-group">
                                            <button type="button" class="img-but img-delete"
                                                    title="Delete"></button>
                                            <button type="button" class="img-but img-edit"
                                                    title="Edit"></button>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="view-group">
                                        <div class="view">
                                            <span>Group 3</span>
                                            <div class="sub-data">
                                                <span class="limit-text">Leave, payroll, Leave, payroll</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <div class="action-group">
                                            <button type="button" class="img-but img-delete"
                                                    title="Delete"></button>
                                            <button type="button" class="img-but img-edit"
                                                    title="Edit"></button>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="view-group">
                                        <div class="view">
                                            <span>Group 1</span>
                                            <div class="sub-data">
                                                <span>Leave</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <div class="action-group">
                                            <button type="button" class="img-but img-delete"
                                                    title="Delete"></button>
                                            <button type="button" class="img-but img-edit"
                                                    title="Edit"></button>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="view-group">
                                        <div class="view">
                                            <span>Group 2</span>
                                            <div class="sub-data">
                                                <span>Payroll</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <div class="action-group">
                                            <button type="button" class="img-but img-delete"
                                                    title="Delete"></button>
                                            <button type="button" class="img-but img-edit"
                                                    title="Edit"></button>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="view-group">
                                        <div class="view">
                                            <span>Group 3</span>
                                            <div class="sub-data">
                                                <span>Employee</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="action">
                                        <div class="action-group">
                                            <button type="button" class="img-but img-delete"
                                                    title="Delete"></button>
                                            <button type="button" class="img-but img-edit"
                                                    title="Edit"></button>

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
            <button class="bx-but bx-save">Save</button>
        </div>
    </div>


</div>


<!-- ===========================================================================
        Plugin Script
============================================================================ -->

<script>

    //    Scroll bar
    $(".scroll-cln").mCustomScrollbar({
        theme: "dark-3"
    });
    $(".scroll-empList").mCustomScrollbar({
        theme: "dark-3"
    });
    $(".group-list").mCustomScrollbar({
        theme: "dark-3"
    });

    $(function () {

        var empId = 0;
        var name = '';

        $(".sc-emp-list .u-name").draggable({
            helper: "clone",
            revert: true,
            revertDuration: 400,
            zIndex: 999,
            start: function (evt) {

                // Disable Scroll bar
                //$('.candidate-list').mCustomScrollbar("disable");

                empId = $(evt.target).parents('li').attr('id');
                name = $(evt.target).text();
                console.log(name);
                console.log(empId);
            }

        });


        $(".dropArea").droppable({
            accept: ".u-name",
            drop: function (evt) {

                var location = $(evt.target).attr('data-location');

                var item = appendItem(name, empId);

                $('.drop-section .emp-list-wrp').append(item);

                hideBtnArea();

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

        function appendItem(name, id) {
            var item = '<div class="emp-list" id="' + id + '">' +
                '<div class="img-wrp--35 ">' +
                '<img class="user-img" src="../uploads/empProfile/35/default.png" alt="Employee Image">' +
                '</div >' +
                '<div class="tip tip-emp-name">' + name + '</div> ' +
                '<button class="quick-delete delete-emp" type="button"></button>' +
                '</div>';
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

