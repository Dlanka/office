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
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/resource/main.css', 'screen');

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

<div class="col-lg-12 contert-wrapper ">
    <div class="row">

        <!--Map goes here-->
        <div class="col-md-7 plr-0 map_container">
            <div class="" id="map" style="background: #ccc;width: 100%;height: 100%;"></div>

            <!--Popup for team details view-->
            <div class="team_details">
                <div class="col-md-12 team_info_wrp">
                    <div class="col-md-12 mt-30">
                        <button class="bt-close">
                            <img src="<?php echo Yii::app()->baseUrl; ?>/images/system/icon/resource/20/ic_20_close.png"
                                 alt="">
                        </button>
                    </div>

                    <div class="list-wrp">
                        <div class="col-md-12 list-view">
                            <div class="list-head">
                                <div class="table-block">
                                    <div class="img-block">
                                        <div class="img-wrp--50">
                                            <div>
                                                <?php echo Common::showEmployeeThumbnailx50(1) ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="user-info">
                                        <h3>Chathuri Ganesha</h3>
                                        <h6>UX Engineer</h6>
                                    </div>
                                </div>
                                <a class="btn-expand" href="javascript:void(0)"></a>
                            </div>
                            <div class="list-body">
                                <div class="body_info">
                                    <div class="info_">
                                        <i class="ic_img ic_call"></i>
                                        <div>
                                            <h6>Office</h6>
                                            <h4>011-6111606</h4>
                                        </div>
                                    </div>
                                    <div class="info_">
                                        <i class="ic_img ic_mail"></i>
                                        <div>
                                            <h6>Mail</h6>
                                            <h4>info@infoseek.lk</h4>
                                        </div>
                                    </div>
                                    <div class="info_">
                                        <i class="ic_img ic_exp"></i>
                                        <div>
                                            <h6>Department</h6>
                                            <h4>User Experience</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 list-view">
                            <div class="list-head">
                                <div class="table-block">
                                    <div class="img-block">
                                        <div class="img-wrp--50">
                                            <div>
                                                <?php echo Common::showEmployeeThumbnailx50(1) ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="user-info">
                                        <h3>Chathuri Ganesha</h3>
                                        <h6>UX Engineer</h6>
                                    </div>
                                </div>
                                <a class="btn-expand" href="javascript:void(0)"></a>
                            </div>
                            <div class="list-body">
                                <div class="body_info">
                                    <div class="info_">
                                        <i class="ic_img ic_call"></i>
                                        <div>
                                            <h6>Office</h6>
                                            <h4>011-6111606</h4>
                                        </div>
                                    </div>
                                    <div class="info_">
                                        <i class="ic_img ic_mail"></i>
                                        <div>
                                            <h6>Mail</h6>
                                            <h4>info@infoseek.lk</h4>
                                        </div>
                                    </div>
                                    <div class="info_">
                                        <i class="ic_img ic_exp"></i>
                                        <div>
                                            <h6>Department</h6>
                                            <h4>User Experience</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 list-view">
                            <div class="list-head">
                                <div class="table-block">
                                    <div class="img-block">
                                        <div class="img-wrp--50">
                                            <div>
                                                <?php echo Common::showEmployeeThumbnailx50(1) ?>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="user-info">
                                        <h3>Chathuri Ganesha</h3>
                                        <h6>UX Engineer</h6>
                                    </div>
                                </div>
                                <a class="btn-expand" href="javascript:void(0)"></a>
                            </div>
                            <div class="list-body">
                                <div class="body_info">
                                    <div class="info_">
                                        <i class="ic_img ic_call"></i>
                                        <div>
                                            <h6>Office</h6>
                                            <h4>011-6111606</h4>
                                        </div>
                                    </div>
                                    <div class="info_">
                                        <i class="ic_img ic_mail"></i>
                                        <div>
                                            <h6>Mail</h6>
                                            <h4>info@infoseek.lk</h4>
                                        </div>
                                    </div>
                                    <div class="info_">
                                        <i class="ic_img ic_exp"></i>
                                        <div>
                                            <h6>Department</h6>
                                            <h4>User Experience</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <div class="col-md-5">

            <h1 class="col-md-12 title mt-30 f-light"><span class="f-medium mr-5">127</span>Branches</h1>

            <div class="col-md-12 sm-search mt-30">
                <form action="">
                    <span></span>
                    <input type="text" placeholder="Search" class="sm-search-box">
                </form>
            </div>

            <div class="col-md-12 mt-30">
                <ul class="branch-list">
                    <li>
                        <div class="full-view">
                            <h3 class="ofc-name"><span class="br-code">E50</span>City Office</h3>
                            <p class="address">No. 98, York Street, Colombo 01</p>
                            <div class="row company-dtl">
                                <div class="col-md-12">
                                    <div class="row">
                                        <span class="col-md-2">Tel<span class="right">&nbsp;:&nbsp;</span></span>
                                        <span class="col-md-7 dt">011-2328193 </span>
                                    </div>
                                    <div class="row">
                                        <span class="col-md-2">Fax<span class="right">&nbsp;:&nbsp;</span></span>
                                        <span class="col-md-7 dt">011-4528193 </span>
                                    </div>
                                    <div class="row">
                                        <span class="col-md-2">Email<span class="right">&nbsp;:&nbsp;</span></span>
                                        <span class="col-md-7 dt">info@abc.com </span>
                                    </div>
                                    <div class="row">
                                        <span class="col-md-2">Open<span class="right">&nbsp;:&nbsp;</span></span>
                                        <span class="col-md-7 dt">
                                          <p>WeekDay 08:00 AM - 05.00 PM</p>
                                          <p>WeekDay 08:00 AM - 12.00 PM</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn-view-team"><span></span>View Team</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="full-view">
                            <h3 class="ofc-name"><span class="br-code">E50</span>City Office</h3>
                            <p class="address">No. 98, York Street, Colombo 01</p>
                            <div class="row company-dtl">
                                <div class="col-md-12">
                                    <div class="row">
                                        <span class="col-md-2">Tel<span class="right">&nbsp;:&nbsp;</span></span>
                                        <span class="col-md-7 dt">011-2328193 </span>
                                    </div>
                                    <div class="row">
                                        <span class="col-md-2">Fax<span class="right">&nbsp;:&nbsp;</span></span>
                                        <span class="col-md-7 dt">011-4528193 </span>
                                    </div>
                                    <div class="row">
                                        <span class="col-md-2">Email<span class="right">&nbsp;:&nbsp;</span></span>
                                        <span class="col-md-7 dt">info@abc.com </span>
                                    </div>
                                    <div class="row">
                                        <span class="col-md-2">Open<span class="right">&nbsp;:&nbsp;</span></span>
                                        <span class="col-md-7 dt">
                                          <p>WeekDay 08:00 AM - 05.00 PM</p>
                                          <p>WeekDay 08:00 AM - 12.00 PM</p>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" class="btn-view-team"><span></span>View Team</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>

    </div>
</div>

<!-- ===========================================================================
        Plugin Script
============================================================================ -->
<!--mScrolBar-->
<script>
    (function () {
        $(window).on("load", function () {
            $(".branch-list").mCustomScrollbar({
                theme: 'dark-3'
            });
            $(".list-wrp").mCustomScrollbar({
                theme: 'dark-3'
            });
        });
    })();


</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->
<!--Team list js-->
<script>
    $('.btn-expand').click(function () {
        var that = $(this);


        var parent = that.parent('.list-head');

        if (!parent.next('.list-body').hasClass('on')) {
            that.addClass('btn-expand-down');
            parent.addClass('on');
            parent.next('.list-body').addClass('on');
            parent.next('.list-body').slideDown('fast');
        } else {
            that.removeClass('btn-expand-down');
            parent.removeClass('on');
            parent.next('.list-body').removeClass('on');
            parent.next('.list-body').slideUp('fast');
        }

    });
</script>

<script>

    $('.btn-view-team').click(function () {
        $('.team_details').fadeIn('fast');
    });

    $('.bt-close').click(function () {
        $('.team_details').fadeOut('fast');
    });
</script>
<!-- ===========================================================================
        Backend Script
============================================================================ -->
