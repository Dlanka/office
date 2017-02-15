<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// Date picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');
// Time picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/clockpicker/bootstrap-clockpicker.css', 'screen');


//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
//Popup
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/popup.css', 'screen');
// Recruitment Common
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/recruitment/calender.css', 'screen');

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
// Date picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);
// Time picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/clockpicker/bootstrap-clockpicker.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<!--Popup-->
<div class="modal fade" id="clnModal" tabindex="-1" role="dialog">
    <div class="modal-dialog">
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
                <h4 class="modal-title">Add Event</h4>
            </div>
            <div class="modal-body pb-0 pt-30">
                <div class="row mt-20">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row mb-15">
                                <div class="col-md-6 input-layout">
                                    <input type="text" class="txt-title">
                                    <label for="">Title</label>
                                </div>
                            </div>
                            <div class="row mb-15">

                                <div class="col-md-6 input-layout">
                                    <input type="text" class="timepick txt-stTime">
                                    <label for="">Start Time</label>
                                </div>
                                <div class="col-md-6 input-layout">
                                    <input type="text" class="timepick txt-endTime">
                                    <label for="">End Time</label>
                                </div>
                            </div>
                            <div class="row mb-15">
                                <div class="col-md-12 textarea-layout">
                                    <label for="">Note</label>
                                    <textarea class="textarea-60 txt-note" name="" id="" cols="30" rows="10"></textarea>
                                </div>

                            </div>

                            <!--                    <div class="row mb-15">-->
                            <!--                        <div class="col-md-12 ajaxLoad">-->
                            <!---->
                            <!--                        </div>-->
                            <!--                    </div>-->
                        </div>

                        <div class="col-md-12 ajaxLoad">
                            <div class="row mt-15 mb-15">
                                <h6 class="col-md-12 red mb-20">Meeting Panel</h6>

                                <div class="col-md-12 sc-wrapper relative">
                                    <i class="ic_search"></i>
                                    <input class="input-search aprov" id="search_txt" name="search_txt"
                                           placeholder="Search"
                                           type="text">

                                    <div class="absolute-box">
                                        <div class="col-md-12">
                                            <ul class="sc-emp-list mt-0 approve-emp">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="emp-block mt-5 search-emp">
                                                                <div class="img-border">
                                                                    <div class="img-wrp--35 ">
                                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                                    </div>
                                                                </div>
                                                                <h5 class="u-name">Natasha Perera</h5>
                                                            </div>
                                                        </div>
                                                        <h5 class="col-md-6 details mt-20">345</h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="emp-block mt-5 search-emp">
                                                                <div class="img-border">
                                                                    <div class="img-wrp--35 ">
                                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                                    </div>
                                                                </div>
                                                                <h5 class="u-name">Natasha Perera</h5>
                                                            </div>
                                                        </div>
                                                        <h5 class="col-md-6 details mt-20">345</h5>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12 mt-20">
                                    <div class="emp-list-container">
                                        <div class="emp-list-wrp">
                                            <div class="emp-list" >
                                                <div class="img-wrp--35 ">
                                                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                </div>
                                                <div class="tip tip-emp-name">Natsha Guawargane</div>
                                                <button class="quick-delete delete-emp" type="button"></button>
                                            </div>
                                            <div class="emp-list" >
                                                <div class="img-wrp--35 ">
                                                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                </div>
                                                <div class="tip tip-emp-name">Natsha Guawargane</div>
                                                <button class="quick-delete delete-emp" type="button"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer ">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <button type="button" class="bx-mt-0 bx-but bx-save btnSave">Save</button>
                    </div>
                    <div class="col-lg-12">
                        <!--Massage show here-->
                        <div class="message logoUp"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contert-wrapper mb-30 pb-30">

    <div class="col-md-12 header-with-mn pb-0">
        <h1 class="title">
            Calender
        </h1>
    </div>

    <div class="col-md-12">
        <div class="col-md-offset-6 col-md-6">
            <div class="tab-calender">
                <a href="#">Day</a>
                <a href="#" class="active">Week</a>
                <a href="#">Month</a>
                <a href="#">Agenda</a>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-30">

        <div class="col-md-12">

            <div class="row">
                <!-- Left panel-->
                <div class="col-md-3">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="cm_calender">
                                <div class="cm_head">
                                    <button class="bt-ac  bt-prev">
                                        <svg>
                                            <path d="M 17,12 l -5,5 l 5,5"/>
                                        </svg>
                                    </button>
                                    <div class="cm_month-year">
                                        <span>September,</span>
                                        <span>2016</span>
                                    </div>
                                    <button class="bt-ac bt-next">
                                        <svg>
                                            <path d="M 14,12 l 5,5 l -5,5"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="cm_body">
                                    <div class="c_day ">
                                        <span>Su</span>
                                        <span>Mo</span>
                                        <span>Tu</span>
                                        <span>We</span>
                                        <span>Th</span>
                                        <span>Fr</span>
                                        <span>Sa</span>
                                    </div>
                                    <div class="c_date ">
                                        <span class="disable">29</span>
                                        <span class="disable">30</span>
                                        <span>1</span>
                                        <span>2</span>
                                        <span>3</span>
                                        <span>4</span>
                                        <span>5</span>
                                        <span>6</span>
                                        <span>7</span>
                                        <span>8</span>
                                        <span>9</span>
                                        <span>9</span>
                                        <span>11</span>
                                        <span>12</span>
                                        <span>13</span>
                                        <span>14</span>
                                        <span>15</span>
                                        <span>16</span>
                                        <span class="select">17</span>
                                        <span>18</span>
                                        <span>19</span>
                                        <span>20</span>
                                        <span>21</span>
                                        <span>22</span>
                                        <span>23</span>
                                        <span>24</span>
                                        <span>25</span>
                                        <span>26</span>
                                        <span>27</span>
                                        <span>28</span>
                                        <span>29</span>
                                        <span>30</span>
                                        <span>31</span>
                                        <span class="disable">1</span>
                                        <span class="disable">2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form container-->
                    <div class="row mt-50">
                        <div class="col-md-12 mb-20">
                            <div class="but-gruop-wrp">
                                <label>
                                    <input type="checkbox">
                                    <span class="check-box"></span>
                                    <span class="pl-10">My Shift</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <ul class="task-list">
                                <li>
                                    <div class="but-gruop-wrp mb-0">
                                        <label>
                                            <input type="radio" name="a">
                                            <span class="radio mt-0 mb-0"></span>
                                            <span class="pl-10">Meeting Room - 1</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="but-gruop-wrp mb-0">
                                        <label>
                                            <input type="radio" name="a">
                                            <span class="radio mt-0 mb-0"></span>
                                            <span class="pl-10">Meeting Room - 2</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="but-gruop-wrp mb-0">
                                        <label>
                                            <input type="radio" name="a">
                                            <span class="radio mt-0 mb-0"></span>
                                            <span class="pl-10">Project</span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="but-gruop-wrp mb-0">
                                        <label>
                                            <input type="radio" name="a">
                                            <span class="radio mt-0 mb-0"></span>
                                            <span class="pl-10">Auditorium</span>
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- Right panel-->
                <div class="col-md-9">
                    <div class="calender-container">
                        <div class="cln-header">
                            <table class="table cln">
                                <tbody>
                                <tr>
                                    <td class="times-wrp">&nbsp;</td>
                                    <td class="dates-wrp wk">
                                        <div class="top">
                                            <div class="date-day">
                                                <span class="t-day">Tue</span>
                                                <span class="t-num">17</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="dates-wrp wk">
                                        <div class="top">
                                            <div class="date-day">
                                                <span class="t-day">Wed</span>
                                                <span class="t-num">18</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="dates-wrp wk">
                                        <div class="top">
                                            <div class="date-day">
                                                <span class="t-day">Thu</span>
                                                <span class="t-num">19</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="dates-wrp wk">
                                        <div class="top">
                                            <div class="date-day">
                                                <span class="t-day">Fri</span>
                                                <span class="t-num">20</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="dates-wrp wk leave">
                                        <div class="top">
                                            <div class="date-day">
                                                <span class="t-day">Sat</span>
                                                <span class="t-num">21</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="dates-wrp wk leave">
                                        <div class="top">
                                            <div class="date-day">
                                                <span class="t-day">Sun</span>
                                                <span class="t-num">22</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="dates-wrp wk holiday">
                                        <div class="top">
                                            <div class="date-day">
                                                <span class="t-day">Mon</span>
                                                <span class="t-num">23</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cln-container scroll">

                            <div class="cln-cell cell-wk">
                                <table class="table cln">
                                    <tbody>
                                    <tr>
                                        <td class="times-wrp">
                                            <div class="time">0:00</div>
                                            <div class="time">1:00</div>
                                            <div class="time">2:00</div>
                                            <div class="time">3:00</div>
                                            <div class="time">4:00</div>
                                            <div class="time">5:00</div>
                                            <div class="time">6:00</div>
                                            <div class="time">7:00</div>
                                            <div class="time">8:00</div>
                                            <div class="time">9:00</div>
                                            <div class="time">10:00</div>
                                            <div class="time">11:00</div>
                                            <div class="time">12:00</div>
                                            <div class="time">13:00</div>
                                            <div class="time">14:00</div>
                                            <div class="time">15:00</div>
                                            <div class="time">16:00</div>
                                            <div class="time">17:00</div>
                                            <div class="time">18:00</div>
                                            <div class="time">19:00</div>
                                            <div class="time">20:00</div>
                                            <div class="time">21:00</div>
                                            <div class="time">22:00</div>
                                            <div class="time">23:00</div>

                                        </td>
                                        <td data-wd="1" class="dates-wrp wk cell1">
                                            <div class="event-wrp"></div>
                                        </td>
                                        <td data-wd="2" class="dates-wrp wk cell2">
                                            <div class="event-wrp"></div>
                                        </td>
                                        <td data-wd="3" class="dates-wrp wk cell3">
                                            <div class="event-wrp"></div>
                                        </td>
                                        <td data-wd="4" class="dates-wrp wk cell4">
                                            <div class="event-wrp"></div>
                                        </td>
                                        <td data-wd="5" class="dates-wrp wk cell5">
                                            <div class="event-wrp"></div>
                                        </td>
                                        <td data-wd="6" class="dates-wrp wk cell6">
                                            <div class="event-wrp"></div>
                                        </td>
                                        <td data-wd="7" class="dates-wrp wk cell7">
                                            <div class="event-wrp"></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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
<script>

    $(".scroll").mCustomScrollbar({
        theme: 'dark',
        scrollbarPosition: 'outside'
    });

    //    $('#minMaxExample').datepicker({
    //        language: 'en'
    //    })

    $('.timepick').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
    });

</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>
    //JSON Object for events
    var events = [
        {
            "id": "1",
            "evtId": "cell121",
            "cell": "1",
            "evtItem": {
                "startTime": "10:00",
                "endTime": "10:30",
                "title": "Interview"
            }
        },
        {
            "id": "1",
            "evtId": "cell12367",
            "cell": "1",
            "evtItem": {
                "startTime": "10:00",
                "endTime": "10:30",
                "title": "Interview"
            }
        },
        {
            "id": "1",
            "evtId": "cell12356",
            "cell": "1",
            "evtItem": {
                "startTime": "10:00",
                "endTime": "10:30",
                "title": "Interview"
            }
        },
        {
            "id": "2",
            "evtId": "cell124",
            "cell": "1",
            "evtItem": {
                "startTime": "8:00",
                "endTime": "11:30",
                "title": "Interview"
            }
        },
        {
            "id": "2",
            "evtId": "cell124",
            "cell": "1",
            "evtItem": {
                "startTime": "8:10",
                "endTime": "10:30",
                "title": "Interview"
            }
        },
        {
            "id": "3",
            "evtId": "cell223",
            "cell": "2",
            "evtItem": {
                "startTime": "7:00",
                "endTime": "9:30",
                "title": "Interview"
            }
        },
        {
            "id": "3",
            "evtId": "cell523",
            "cell": "5",
            "evtItem": {
                "startTime": "2:00",
                "endTime": "3:30",
                "title": "Interview"
            }
        },
        {
            "id": "3",
            "evtId": "cell423",
            "cell": "4",
            "evtItem": {
                "startTime": "8:00",
                "endTime": "10:30",
                "title": "Interview"
            }
        }
    ];
</script>

<script>

    $('.aprov').keyup(function () {
        showBox($(this), function () {

        });
    });

    $('.aprov').click(function () {
        showBox($(this));
    });

    function showBox(ele, callback) {
        if ($(ele).val() !== '') {
            $('.absolute-box').fadeTo('fast', 1).show();
            callback();
        } else {
            $('.absolute-box').fadeTo('fast', 0).hide();
        }
    }

    $('.approve-emp li ').click(function () {

//        var _thisParent = $(this).parents('.sc-wrapper');
//        var imgSrc = $(this).find('img').attr('src');
//        var name = $(this).find('.u-name').text();
//
//        var selecting = _thisParent.prev('.selected-emp');
//        selecting.find('img').attr('src', imgSrc);
//        selecting.find('.u-name').text(name);

        $('.selected-emp').fadeTo('fast', 1);

        $('.absolute-box').fadeTo('fast', 0).hide();

    });

    //Search Box scroll
    $(".absolute-box").mCustomScrollbar({
        theme: 'dark-3',
//        scrollbarPosition: 'outside'
    });

</script>

<!--Calendar Js-->
<script src="<?php echo Yii::app()->baseUrl ?>/js/custom/calendar/calendar.js"></script>


<!-- ===========================================================================
        Backend Script
============================================================================ -->

<script>
    function onEventSave(obj, callback) {

        callback();
    }

    function getEventDetails(id) {

        var obj = {
            "startTime": "1:20",
            "endTime": "2:00",
            "title": "No Title",
            "note": "Note",
            "meeting": true,
            "mtEmp": [1, 2, 3]
        };

        return obj;
    }
</script>
