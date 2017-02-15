<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// Owl
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/owl_carousel/owl.carousel.css', 'screen');
// Time Picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/clockpicker/bootstrap-clockpicker.css', 'screen');


//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Accrodion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');
// Recruitment Common
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/common.css', 'screen');
// Main
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/interview.css', 'screen');

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
// Owl
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/owl_carousel/owl.carousel.min.js', CClientScript::POS_HEAD);
// Time picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/clockpicker/bootstrap-clockpicker.min.js', CClientScript::POS_HEAD);
// Jqury UI
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/jquery-ui-1.12.0.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<div class="contert-wrapper mb-30">

    <!-- Slider-->
    <div class="slid-wrp">
        <div class="slide-container">
            <div class="slider-row">
                <div class="col-md-1 pl-0 bg-blue sl-left bg-dark-blue">
                    <div class="col-md-12 days ptb-30">
                        <span>90</span>
                        <span>Days</span>
                    </div>
                </div>
                <div class="col-md-11 pl-0 pr-0 sl-right">
                    <div class="slid-group">
                        <div class="slide">
                            <div class="row">
                                <div class="col-md-7 sl-info">
                                    <h4>Software engineer - php</h4>
                                    <h5>12 Nov 2016</h5>
                                    <h6><span>Ref :</span> A / DC / 001569</h6>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-lg-white">156</span>
                                            <span>Interviewed</span>
                                        </div>
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-green">130</span>
                                            <span>Pass</span>
                                        </div>
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-yellow">16</span>
                                            <span>Hold</span>
                                        </div>
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-red">0</span>
                                            <span>Reject</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-row">
                <div class="col-md-1 pl-0 bg-blue sl-left bg-dark-blue">
                    <div class="col-md-12 days ptb-30">
                        <span>90</span>
                        <span>Days</span>
                    </div>
                </div>
                <div class="col-md-11 pl-0 pr-0 sl-right">
                    <div class="slid-group">
                        <div class="slide">
                            <div class="row">
                                <div class="col-md-7 sl-info">
                                    <h4>Software engineer - php</h4>
                                    <h5>12 Nov 2016</h5>
                                    <h6><span>Ref :</span> A / DC / 001569</h6>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-lg-white">156</span>
                                            <span>Interviewed</span>
                                        </div>
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-green">130</span>
                                            <span>Pass</span>
                                        </div>
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-yellow">16</span>
                                            <span>Hold</span>
                                        </div>
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-red">0</span>
                                            <span>Reject</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-btn">
            <span class="arrow-left"></span>
            <div class="line"></div>
            <span class="arrow-right"></span>
        </div>
    </div>

    <div class="col-md-12 mt-30 mb-30">
        <h1 class="col-md-12 title">Interview Result Summary</h1>
    </div>


    <div class="col-md-12 ">
        <div class="col-md-12 mb-30">
            <div class="row">
                <div class="col-md-4 input-layout mt-20">
                    <select name="" id="">
                        <option value="1"></option>
                        <option value="1" selected="selected">2016-12-10</option>
                        <option value="3">2016-12-14</option>
                        <option value="2">2016-12-16</option>
                    </select>
                    <label for="">Date</label>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4 sl-info ">
                            <h4 class="intSummery">
                                <span class="circle-45 mr-12 blue">1</span>
                                Interview
                            </h4>
                        </div>
                        <div class="col-md-4 sl-info ">
                            <h4 class="intSummery">
                                <span class="circle-45 mr-12 blue">2</span>
                                Interview
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 ">
            <div class="row">
                <!-- Header-->
                <div class="col-md-12 mb-15">
                    <div class="row ">

                        <div class="col-md-4 mt-10">
                            <div class="but-gruop-wrp m-0 ">
                                <label>
                                    <input class="allSelect" type="checkbox">
                                    <span class="check-box"></span>
                                    <span class="pl-10">Select All</span>
                                </label>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="img-wrp--35 ">
                                                <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="img-wrp--35 ">
                                                <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="img-wrp--35 ">
                                                <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <h6 class="title mt-10 text-center">Total</h6>
                                        </div>

                                    </div>
                                </div>

                                <h6 class="col-md-4 title mt-10">Status</h6>

                            </div>
                        </div>

                    </div>
                </div>

                <!--Loop goes here-->
                <div class="col-md-12 dropDown">
                    <span class="btnArrow"><i class="ic_10 arrow-down"></i></span>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-1 but-gruop-wrp m-0 ">
                                    <label>
                                        <input class="chbSub" type="checkbox">
                                        <span class="check-box"></span>
                                        <span class="pl-10"></span>
                                    </label>
                                </div>
                                <h5 class="details col-md-10 pl-0 mt-5">Natashas Gunawardana</h5>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="row">
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                    </div>
                                </div>

                                <h5 class="col-md-4 details mt-5 up-case text-red">Fail</h5>

                            </div>
                        </div>

                    </div>
                    <div class="row expand-wrp">
                        <div class="col-md-12 mt-30 mb-15">
                            <div class="col-md-12">
                                <div class="table-block intv-comments">
                                    <div class="cell pl-5">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <h5 class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nulla quam velit, vulputate</h5>
                                    </div>
                                </div>
                                <div class="table-block intv-comments">
                                    <div class="cell pl-5">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <h5 class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nulla quam velit, vulputate</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 dropDown">
                    <span class="btnArrow"><i class="ic_10 arrow-down"></i></span>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-1 but-gruop-wrp m-0 ">
                                    <label>
                                        <input class="chbSub" type="checkbox">
                                        <span class="check-box"></span>
                                        <span class="pl-10"></span>
                                    </label>
                                </div>
                                <h5 class="details col-md-10 pl-0 mt-5">Natashas Gunawardana</h5>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="row">
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                    </div>
                                </div>

                                <h5 class="col-md-4 details mt-5 up-case text-yellow">Hold</h5>

                            </div>
                        </div>

                    </div>
                    <div class="row expand-wrp">
                        <div class="col-md-12 mt-30 mb-15">
                            <div class="col-md-12">
                                <div class="table-block intv-comments">
                                    <div class="cell pl-5">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <h5 class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nulla quam velit, vulputate</h5>
                                    </div>
                                </div>
                                <div class="table-block intv-comments">
                                    <div class="cell pl-5">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <h5 class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nulla quam velit, vulputate</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 dropDown">
                    <span class="btnArrow"><i class="ic_10 arrow-down"></i></span>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-1 but-gruop-wrp m-0 ">
                                    <label>
                                        <input class="chbSub" type="checkbox">
                                        <span class="check-box"></span>
                                        <span class="pl-10"></span>
                                    </label>
                                </div>
                                <h5 class="details col-md-10 pl-0 mt-5">Natashas Gunawardana</h5>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="row">
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                    </div>
                                </div>

                                <h5 class="col-md-4 details mt-5 up-case text-green">Pass</h5>

                            </div>
                        </div>

                    </div>
                    <div class="row expand-wrp">
                        <div class="col-md-12 mt-30 mb-15">
                            <div class="col-md-12">
                                <div class="table-block intv-comments">
                                    <div class="cell pl-5">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <h5 class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nulla quam velit, vulputate</h5>
                                    </div>
                                </div>
                                <div class="table-block intv-comments">
                                    <div class="cell pl-5">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <h5 class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nulla quam velit, vulputate</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 dropDown">
                    <span class="btnArrow"><i class="ic_10 arrow-down"></i></span>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-1 but-gruop-wrp m-0 ">
                                    <label>
                                        <input class="chbSub" type="checkbox">
                                        <span class="check-box"></span>
                                        <span class="pl-10"></span>
                                    </label>
                                </div>
                                <h5 class="details col-md-10 pl-0 mt-5">Natashas Gunawardana</h5>
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-8">
                                    <div class="row">
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                        <h5 class="col-md-2 details text-center mt-5">50<span>%</span></h5>
                                    </div>
                                </div>

                                <h5 class="col-md-4 details mt-5 up-case text-green">Pass</h5>

                            </div>
                        </div>

                    </div>
                    <div class="row expand-wrp">
                        <div class="col-md-12 mt-30 mb-15">
                            <div class="col-md-12">
                                <div class="table-block intv-comments">
                                    <div class="cell pl-5">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <h5 class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nulla quam velit, vulputate</h5>
                                    </div>
                                </div>
                                <div class="table-block intv-comments">
                                    <div class="cell pl-5">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                        </div>
                                    </div>
                                    <div class="cell">
                                        <h5 class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nulla quam velit, vulputate</h5>
                                    </div>
                                </div>
                            </div>
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

    //    $(".candidate-list").mCustomScrollbar({
    //        theme: "minimal-dark"
    //    });

    //    $(".scroll-body").mCustomScrollbar({
    //        theme: "minimal-dark"
    //    });


    //  Slider
    var slide = $('.slide-container').owlCarousel({
        items: 1,
        margin: 0,
        nav: false
    });

    $('.arrow-right').click(function () {
        slide.trigger('next.owl.carousel');
    });
    // Go to the previous item
    $('.arrow-left').click(function () {
        slide.trigger('prev.owl.carousel');
    });


    //------------------------------------------------
    // Candidate Drag Drop
    //-------------------------------------------------

    var interviewPopup = $('.interview-popup');

    interviewPopup.fadeTo('fast', 0).hide();


    $(function () {

        //Candidates Drag Part
        var cndId = 0;
        var sheduleBoxId = 0;
        var cndName = '';
        var dropAreaId = 0;
        var saveBtnStatus = true;
        var candidateId = 0;


        //Popup Time picker
        $('.time-pick-start').clockpicker({
            autoclose: true,
            afterDone: function () {
                // var stTime = $('.startTimeHide').val();
                var selectStTime = $('.startTime').val();

                //var stDTime = new Date(stTime);
                var sDTime = new Date();

//                console.log(stDTime,'--- ',sDTime);
                console.log(sDTime.setTime(selectStTime));

            }
        });

        $('.time-pick-end').clockpicker({
            autoclose: true
        });

        $(".draggable").draggable({
            helper: "clone",
            revert: true,
            revertDuration: 400,
            zIndex: 999,
            containment: 'window',
            start: function (evt) {

                // Disable Scroll bar
                //$('.candidate-list').mCustomScrollbar("disable");

                cndId = $(evt.target).parents('li').attr('id');
                cndName = $(evt.target).text();

                console.log(cndId);
            }

        });

        //Candidates Drop Part
        $(".cln-drop").droppable({
            accept: ".draggable",
            drop: function (evt) {

                if ($(evt.target).hasClass('disable')) {
                    console.log('Can not drop ');
                    return;
                }


                var startTime = $(evt.target).attr('data-time');

                //Drop wrapper id
                dropAreaId = $(evt.target).attr('id');

                console.log(startTime);
                console.log(dropAreaId);

                // Clean popup inputs.
                popupClean();
                // Set values for popup
                setValues(startTime, '', 'Meeting Room', cndName);
                // Reset input
                form.reset();
                // Show interview popup
                interviewPopup.fadeTo('fast', 1).show();

            }
        });


        //Append data to calender
        $('.btnPopSave').click(function () {

            var startTime = interviewPopup.find('.startTime').val();
            var endTime = interviewPopup.find('.endTime').val();
            var name = interviewPopup.find('.inv-title').text();

            if (!startTime || !endTime) {
                showInfoMessage();
                showErrorMessage('Missing start time or end time', '');
                return;
            }

            if (saveBtnStatus) {
                //create unique id
                var id = new Date().getUTCMilliseconds();

                var item =
                    '<div id="' + id + '" data-cnd-id="' + cndId + '" class="scheduled-inv-wrp">' +
                    '<h6 class="title dark">' +
                    '<span class="stTime">' + startTime + '&nbsp;</span>' +
                    '<span>-</span>' +
                    '<span class="endTime">&nbsp;' + endTime + '</span>' +
                    '</h6>' +
                    '<h6 class="title cnd-name">' + name + '</h6></div>';

                $('#' + dropAreaId).append(item);

                var $dropEle = $('#' + cndId);
                $dropEle.find('.ic_15').removeClass('ic_clock-gray').removeClass('ic_clock-yellow').addClass('ic_clock-green');
                $dropEle.find('.draggable').addClass('disable');

                //Disable the element
                $dropEle.find('.draggable').draggable("disable");


            } else {

                var shBox = $('#' + sheduleBoxId);

                shBox.find('.stTime').text(startTime);
                shBox.find('.endTime').text(endTime);
                shBox.find('.cnd-name').text(name);

                $('.btnPopSave').text('Save');

                saveBtnStatus = true;
            }

            //Popup close.
            closePopup();
        });


        //Popup Close.
        $('.btnPopClose').click(function () {
            closePopup();
        });

        function closePopup() {
            interviewPopup.fadeTo('fast', 0).hide();
            popupClean();
        }

        //Interview Popup Clean.
        function popupClean() {
            interviewPopup.find('input,textarea').val('');
            interviewPopup.find('.inv-title').text('');
            form.reset();
            $('.btnPopSave').text('Save');
            saveBtnStatus = true;
        }

        //Set values for Interview Popup.
        function setValues(startTime, endTime, venue, name) {
            interviewPopup.find('input.startTime').val(startTime);
            interviewPopup.find('input.startTimeHide').val(startTime);

            interviewPopup.find('input.endTime').val(endTime);
            interviewPopup.find('input.endTimeHide').val(endTime);

            interviewPopup.find('.venue').text(venue);
            interviewPopup.find('.inv-title').text(name);

        }


        $(document).on('click', '.scheduled-inv-wrp', function () {


            var selectId = this.id;
            var ele = $('#' + selectId);

            sheduleBoxId = selectId;
            candidateId = ele.attr('data-cnd-id');

            var startTime = ele.find('.stTime').text();
            var endTime = ele.find('.endTime').text();
            var cndName = ele.find('.cnd-name').text();

            // Clean popup inputs.
            popupClean();
            // Set values for popup
            setValues(startTime, endTime, 'Meeting Room', cndName);
            // Reset input
            form.reset();
            // Show interview popup
            interviewPopup.fadeTo('fast', 1).show();

            $('.btnPopSave').text('Edit');

            saveBtnStatus = false;

        });

        $('.btnPopDelete').on('click', function () {

            closePopup();
            $('#' + sheduleBoxId).remove();

            var $cndLi = $('.candidate-list').find('#' + candidateId);

            $cndLi.find('h5 .ic_15').removeClass('ic_clock-yellow').removeClass('ic_clock-green').addClass('ic_clock-gray');
            //Disable the element
            $cndLi.find('.draggable').draggable("enable");
            $cndLi.find('.draggable').removeClass('disable');
        });

    })
    ;

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

                if (location === 'interview') {

                    $('.interview .emp-list-wrp').append(item);

                } else if (location === 'option-wrp') {

                    $('.option-wrp .emp-list-wrp').append(item);

                } else if (location === 'resource') {

                    $('.resource .emp-list-wrp').append(item);
                }
//                if ($(evt.target).hasClass('disable')) {
//                    console.log('Can not drop ');
//                    return;
//                }

//                var startTime = $(evt.target).attr('data-time');


            }
        });

        function appendItem(name, id) {
            var item = '<div class="emp-list" id="' + id + '">' +
                '<div class="img-wrp--35 ">' +
                '<img class="user-img" src="../uploads/empProfile/35/sandun.png" alt="Employee Image">' +
                '</div >' +
                '<div class="name-popup">' + name + '</div></div>';
            return item;
        }
    });


</script>

<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>
    new CheckAll({
        parentEle: '.allSelect',
        childEle: '.chbSub'
    });

    $(function () {
        $('.btnArrow').click(function () {

            var parentEle = $(this).parent();

            if (parentEle.hasClass('on')) {
                parentEle.find('.ic_10').removeClass('up');
                parentEle.find('.expand-wrp').slideUp('slow');
                parentEle.removeClass('on');
            } else {
                parentEle.find('.ic_10').addClass('up');
                parentEle.addClass('on');
                parentEle.find('.expand-wrp').slideDown('slow');

            }
        });
    });
</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

