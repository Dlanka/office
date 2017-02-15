<?php
//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// owl carousel
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/owl_carousel/owl.carousel.css', 'screen');

//==============================================================================
//      CSS
//==============================================================================
// Popup
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/popup.css', 'screen');
// Hierarchy
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/setting/hierarchy.css', 'screen');

//==============================================================================
//      JS
//==============================================================================

//==============================================================================
//      Plugins JS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/mScrollbar/jquery.mCustomScrollbar.concat.min.js', CClientScript::POS_HEAD);
// owl carousel
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/owl_carousel/owl.carousel.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<!--Popup -->
<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
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
                <!--Image crop-->
                <h2>Body</h2>
            </div>
            <div class="modal-footer">
                <div class="col-md-12">
                    <button type="button" class="bx-but bx-save export">Save</button>
                </div>
                <div class="col-lg-12">
                    <!--Massage show here-->
                    <div class="message logoUp"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 contert-wrapper ">
    <div class="row">
        <div class="col-md-12 header-with-mn">
            <div class="row">
                <h1 class="col-md-11 title">Hierarchy</h1>

                <div class="col-md-1">
                    <!--Bar Menu-->
                    <!--                    <div id="menu-ic" class="open-menu">-->
                    <!--                        <ul>-->
                    <!--                            <li></li>-->
                    <!--                            <li></li>-->
                    <!--                            <li></li>-->
                    <!--                        </ul>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
        <!--Sub menu container-->
        <?php //$this->renderPartial('subMenu', array()); ?>

    </div>

    <div class="col-md-12 mt-30">
        <div class="row ">

            <div class="col-md-12 scroll">
                <!--1st Layer-->
                <div class="row">
                    <div class="col-md-12 main-layer">
                        <div class="hc_item_wrp">
                            <div class="hc_img-block">
                                <div class="img-wrp--160 selected-img">
                                    <div>
                                        <?php echo Common::showEmployeeThumbnailx160(1) ?>
                                    </div>
                                    <button class="btn_at view-more"><i></i></button>

                                    <button data-id='btn_1' data-target="#myModal3" class="btn_at btn_left" data-toggle="modal"><i></i></button>
                                    <button data-id='btn_2' data-target="#myModal3" data-toggle="modal" class="btn_at btn_bottom"><i></i></button>
                                    <button data-id='btn_3' data-target="#myModal3" data-toggle="modal" class="btn_at btn_right"><i></i></button>

                                </div>
                            </div>

                            <h3>Chief Executive Officer</h3>

                            <div class="action">
                                <button type="button" class="img-but img-add"></button>
                                <button type="button" class="img-but img-edit"></button>
<!--                                <button type="button" class="img-but img-delete"></button>-->
                            </div>

                        </div>
                    </div>
                </div>

                <!--Loop goes here-->
                <div class="row">
                    <div class="col-md-12 sub-layer">
                        <!--Loop goes here-->
                        <div class="slide">
                            <div class="hc_item_wrp">
                                <div class="hc_img-block">
                                    <div class="img-wrp--80">
                                        <div>
                                            <?php echo Common::showEmployeeThumbnailx80(1) ?>
                                        </div>
                                        <button class="btn_at view-more"><i></i></button>
                                        <button class="btn_at btn_left"><i></i></button>
                                        <button class="btn_at btn_bottom"><i></i></button>
                                        <button class="btn_at btn_right"><i></i></button>
                                    </div>
                                </div>

                                <h3>Chief Executive Officer</h3>

                                <div class="action">
                                    <button type="button" class="img-but img-add"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                    <button type="button" class="img-but img-delete"></button>
                                </div>

                            </div>
                            <div class="hc_item_wrp">
                                <div class="hc_img-block">
                                    <div class="img-wrp--80">
                                        <div>
                                            <?php echo Common::showEmployeeThumbnailx80(1) ?>
                                        </div>
                                        <button class="btn_at view-more"><i></i></button>
                                        <button class="btn_at btn_left"><i></i></button>
                                        <button class="btn_at btn_bottom"><i></i></button>
                                        <button class="btn_at btn_right"><i></i></button>
                                    </div>
                                </div>

                                <h3>Chief Executive Officer</h3>

                                <div class="action">
                                    <button type="button" class="img-but img-add"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                    <button type="button" class="img-but img-delete"></button>
                                </div>

                            </div>
                            <div class="hc_item_wrp">
                                <div class="hc_img-block">
                                    <div class="img-wrp--80">
                                        <div>
                                            <?php echo Common::showEmployeeThumbnailx80(1) ?>
                                        </div>
                                        <button class="btn_at view-more"><i></i></button>
                                        <button class="btn_at btn_left"><i></i></button>
                                        <button class="btn_at btn_bottom"><i></i></button>
                                        <button class="btn_at btn_right"><i></i></button>
                                    </div>
                                </div>

                                <h3>Chief Executive Officer</h3>

                                <div class="action">
                                    <button type="button" class="img-but img-add"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                    <button type="button" class="img-but img-delete"></button>
                                </div>

                            </div>
                            <div class="hc_item_wrp">
                                <div class="hc_img-block">
                                    <div class="img-wrp--80">
                                        <div>
                                            <?php echo Common::showEmployeeThumbnailx80(1) ?>
                                        </div>
                                        <button class="btn_at view-more"><i></i></button>
                                        <button class="btn_at btn_left"><i></i></button>
                                        <button class="btn_at btn_bottom"><i></i></button>
                                        <button class="btn_at btn_right"><i></i></button>
                                    </div>
                                </div>

                                <h3>Chief Executive Officer</h3>

                                <div class="action">
                                    <button type="button" class="img-but img-add"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                    <button type="button" class="img-but img-delete"></button>
                                </div>

                            </div>
                            <div class="hc_item_wrp">
                                <div class="hc_img-block">
                                    <div class="img-wrp--80">
                                        <div>
                                            <?php echo Common::showEmployeeThumbnailx80(1) ?>
                                        </div>
                                        <button class="btn_at view-more"><i></i></button>
                                        <button class="btn_at btn_left"><i></i></button>
                                        <button class="btn_at btn_bottom"><i></i></button>
                                        <button class="btn_at btn_right"><i></i></button>
                                    </div>
                                </div>

                                <h3>Chief Executive Officer</h3>

                                <div class="action">
                                    <button type="button" class="img-but img-add"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                    <button type="button" class="img-but img-delete"></button>
                                </div>

                            </div>
                            <div class="hc_item_wrp">
                                <div class="hc_img-block">
                                    <div class="img-wrp--80">
                                        <div>
                                            <?php echo Common::showEmployeeThumbnailx80(1) ?>
                                        </div>
                                        <button class="btn_at view-more"><i></i></button>
                                        <button class="btn_at btn_left"><i></i></button>
                                        <button class="btn_at btn_bottom"><i></i></button>
                                        <button class="btn_at btn_right"><i></i></button>
                                    </div>
                                </div>

                                <h3>Chief Executive Officer</h3>

                                <div class="action">
                                    <button type="button" class="img-but img-add"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                    <button type="button" class="img-but img-delete"></button>
                                </div>

                            </div>
                            <div class="hc_item_wrp">
                                <div class="hc_img-block">
                                    <div class="img-wrp--80">
                                        <div>
                                            <?php echo Common::showEmployeeThumbnailx80(1) ?>
                                        </div>
                                        <button class="btn_at view-more"><i></i></button>
                                        <button class="btn_at btn_left"><i></i></button>
                                        <button class="btn_at btn_bottom"><i></i></button>
                                        <button class="btn_at btn_right"><i></i></button>
                                    </div>
                                </div>

                                <h3>Chief Executive Officer</h3>

                                <div class="action">
                                    <button type="button" class="img-but img-add"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                    <button type="button" class="img-but img-delete"></button>
                                </div>

                            </div>
                            <div class="hc_item_wrp">
                                <div class="hc_img-block">
                                    <div class="img-wrp--80">
                                        <div>
                                            <?php echo Common::showEmployeeThumbnailx80(1) ?>
                                        </div>
                                        <button class="btn_at view-more"><i></i></button>
                                        <button class="btn_at btn_left"><i></i></button>
                                        <button class="btn_at btn_bottom"><i></i></button>
                                        <button class="btn_at btn_right"><i></i></button>
                                    </div>
                                </div>

                                <h3>Chief Executive Officer</h3>

                                <div class="action">
                                    <button type="button" class="img-but img-add"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                    <button type="button" class="img-but img-delete"></button>
                                </div>

                            </div>
                            <div class="hc_item_wrp">
                                <div class="hc_img-block">
                                    <div class="img-wrp--80">
                                        <div>
                                            <?php echo Common::showEmployeeThumbnailx80(1) ?>
                                        </div>
                                        <button class="btn_at view-more"><i></i></button>
                                        <button class="btn_at btn_left"><i></i></button>
                                        <button class="btn_at btn_bottom"><i></i></button>
                                        <button class="btn_at btn_right"><i></i></button>
                                    </div>
                                </div>

                                <h3>Chief Executive Officer</h3>

                                <div class="action">
                                    <button type="button" class="img-but img-add"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                    <button type="button" class="img-but img-delete"></button>
                                </div>

                            </div>
                            <div class="hc_item_wrp">
                                <div class="hc_img-block">
                                    <div class="img-wrp--80">
                                        <div>
                                            <?php echo Common::showEmployeeThumbnailx80(1) ?>
                                        </div>
                                        <button class="btn_at view-more"><i></i></button>
                                        <button class="btn_at btn_left"><i></i></button>
                                        <button class="btn_at btn_bottom"><i></i></button>
                                        <button class="btn_at btn_right"><i></i></button>
                                    </div>
                                </div>

                                <h3>Chief Executive Officer</h3>

                                <div class="action">
                                    <button type="button" class="img-but img-add"></button>
                                    <button type="button" class="img-but img-edit"></button>
                                    <button type="button" class="img-but img-delete"></button>
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
<!--Slider-->
<script>
    var slide = $('.slide').owlCarousel({
        margin: 0,
        nav: true,
        items: 5,
        navText: ['', ''],
        slideBy: 5
    });
</script>

<!--mScrolBar-->
<script>
    (function () {
        $(window).on("load", function () {
            $(".scroll").mCustomScrollbar({
                theme: 'dark-3'
            });
        });
    })();
</script>

<!--Popup Modal Event-->
<script>
    $('#myModal3').on('shown.bs.modal', function (event) {

        var button = $(event.relatedTarget);
        var id = button.data('id');
        var st = button.data('st');

        console.log(id,st);

        var $modal = $(this);


        $modal.find('.export').click(function () {
            $modal.modal('hide');
        });
    })
</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->
<script>
    $('.view-more').click(function () {

        //$('.sub-layer .hc_img-block').removeClass('selected');

        if (!$(this).parent().parent().hasClass('selected')) {

            $(this).parent().parent().addClass('selected');
        }
    });

    $('.img-wrp--80 img').click(function () {

        $('.img-wrp--80').each(function () {
            $(this).removeClass('selected-img');
        });

        if ($(this).parent().parent().hasClass('selected-img')) {
            $(this).parent().parent().removeClass('selected-img');
        } else {
            $(this).parent().parent().addClass('selected-img');
        }

    });

    //    $('.img-wrp--160 img').click(function () {
    //
    //        //$('.img-wrp--160').removeClass('selected-img');
    //
    //        if (!$(this).parent().parent().hasClass('selected-img')) {
    //            $(this).parent().parent().addClass('selected-img');
    //        } else {
    //            $(this).parent().parent().removeClass('selected-img');
    //        }
    //    })
</script>
<!-- ===========================================================================
        Backend Script
============================================================================ -->
