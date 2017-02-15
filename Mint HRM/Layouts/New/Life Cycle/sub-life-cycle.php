<!------------------------------------------------------------------------------
Subordinate Life Cycle view
------------------------------------------------------------------------------->

<?php
//==============================================================================
//      Plugins CSS
//==============================================================================
// Date Picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');

//==============================================================================
//      CSS
//==============================================================================
// Form
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Lifecycle
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/employee/lifecycle.css', 'screen');

//==============================================================================
//      JS
//==============================================================================
// Form
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);

//==============================================================================
//      Plugins JS
//==============================================================================
// Jquery
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery-1.11.2.min.js', CClientScript::POS_HEAD);
// Bootstrap
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/bootstrap.min.js', CClientScript::POS_HEAD);
// Date picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);
?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp with-mb">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>


<div class="col-md-12 bg-blue mb-30 shadow">
    <div class="row">
        <div class="col-lg-4 left-panel">
            <div class="img-wrp--160 bg-l-white">
                <div>
                    <?php echo Common::showEmployeeThumbnailx160(1); ?>
                </div>
            </div>
            <h3 class="emp-name">
                Sandun maduranga
                <span class="emp-designation title">Developer</span>
            </h3>
        </div>
        <div class="col-lg-8 bg-white right-panel">
            <div class="col-md-12">

                <div class="row form-row">
                    <div class="col-md-6 input-layout">
                        <input type="text">
                        <label for="">Request</label>
                    </div>
                    <div class="col-md-6 input-layout">
                        <input type="text">
                        <label for="">Branch</label>
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-6 input-layout">
                        <input type="text">
                        <label for="">Employee Section</label>
                    </div>
                </div>

                <div class="row form-row">
                    <div class="col-md-12 textarea-layout">
                        <label>Note</label>
                        <textarea class="text-note" name="" id=""></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="bx-but bx-save">Save</button>
                        <button class="bx-but bx-exit">Cancel</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!--Search-->
<div class="row">
    <div class="col-md-12">
        <div class="c-search-wrapper">
            <div class="c-search-content">
                <div class="c-search-item set_1">
                    <div class="col_1">
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
                    <div class="top-details">

                        <div class="left-b col-md-4">

                            <div class="details-block">
                                <div class="img-wrp--35">
                                    <img alt="Employee Image"
                                         src="<?php echo Yii::app()->baseUrl ?>/uploads/empProfile/35/default.png"
                                         class="user-img"></div>
                                <h5 class="u-name">
                                    Darshani Udayanga
                                </h5>
                            </div>
                        </div>

                        <div class="right-b col-md-8">
                            <h5 class="emp-id">
                               12
                            </h5>
                        </div>

                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body space-box">
                    <div class="row top-sps">
                        <div class="col-md-12">

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- Pop Up -->
<div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                dfdf dfdf
            </div>
            <div class="modal-footer">

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
<script>
    $(function () {
        init();

        function init() {
            $('.tab-box').find('.box-body').fadeTo('fast', 0).hide();
        }

        $('.btn-expand-wrp a').on('click', function () {
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //silde Down
                $(this).addClass('btn-expand-down');
                $(this).closest('.tab-box').parent('.card-content-wrp').addClass('on');
                $(this).closest('.tab-box').find('.box-body').slideDown('fast', function () {});
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box').fadeTo('fast', 1);

            } else {
                //               Slide Up
                $(this).removeClass('btn-expand-down');
                $(this).closest('.tab-box').parent('.card-content-wrp').removeClass('on');
                $(this).closest('.tab-box').find('.box-body').fadeTo('fast', 0, function () {
                    $(this).closest('.tab-box').find('.box-body').slideUp('slow', function () {});
                    $(this).closest('.tab-box ').find('.box-body').removeClass('active-box');
                });
            }
            return false;
        });
    });

</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

