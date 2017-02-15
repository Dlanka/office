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

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<!--Popup-->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
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
                <h4 class="modal-title">Company Logo upload</h4>
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


<div class="contert-wrapper mb-30 pb-30">

    <div class="col-md-12 header-with-mn pb-0">
        <h1 class="title">
            Calender
        </h1>
    </div>

    <div class="col-md-12">
        <div class="col-md-offset-6 col-md-6">
            <div class="tab-calender">
                <a href="#" class="active">Day</a>
                <a href="#">Week</a>
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
                            <div class="cln-row">
                                <table class="table cln">
                                    <tbody>
                                    <tr>
                                        <td class="times-wrp">&nbsp;</td>
                                        <td class="dates-wrp">
                                            <div data-tm="1:00" class="tb-row"></div>
                                            <div data-tm="2:00" class="tb-row"></div>
                                            <div data-tm="3:00" class="tb-row"></div>
                                            <div data-tm="4:00" class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
                                            <div class="tb-row"></div>
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


</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->

<script>

    //JSON Object for events
    var events = [
        {
            "id": "1",
            "evtId": "cell123",
            "cell": "1",
            "evtItem": {
                "startTime": "10:20",
                "endTime": "10:30",
                "title": "Interview"
            }
        },
        {
            "id": "1",
            "evtId": "cell1233",
            "cell": "1",
            "evtItem": {
                "startTime": "10:00",
                "endTime": "10:30",
                "title": "Interview"
            }
        },
        {
            "id": "1",
            "evtId": "cell1233",
            "cell": "1",
            "evtItem": {
                "startTime": "10:50",
                "endTime": "11:00",
                "title": "Interview"
            }
        },
        {
            "id": "2",
            "evtId": "cell124",
            "cell": "1",
            "evtItem": {
                "startTime": "8:00",
                "endTime": "9:30",
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

    var globleEvent = events;


    $(function () {

        var $cell = 0;
        var $row = 0;
        var $maxHeight = 52;

        var event = {
            startTime: '00',
            endTime: '00',
            title: 'No Title',
            create: function (startTime, endTime, title) {
                console.log(this);
                this.startTime = startTime;
                this.endTime = endTime;
                this.title = title;
                return this.buildBox();
            },
            getHourAndMinute: function (obj) {
                return obj.split(':');
            },
            getTimeDuration: function () {
                var date = new Date(0, 0, 0, this.getHourAndMinute(this.startTime)[0], this.getHourAndMinute(this.startTime)[1]);
                var date2 = new Date(0, 0, 0, this.getHourAndMinute(this.endTime)[0], this.getHourAndMinute(this.endTime)[1]);

                var diff = date2.getTime() - date.getTime();

                return (diff / 1000 / 60);
            },
            buildBox: function () {

                var html = '';
                var style = '';
                var timeDur = this.getTimeDuration();
                var height = $maxHeight;

                if (timeDur > 60) {
                    height = $maxHeight + (timeDur - 60);
                } else if (timeDur < 60 && timeDur > 15) {
                    height = 60 - timeDur;
                } else {
                    height = 15;
                }

                html = html + '<div class="events" style="height: ' + height + 'px">';
                html = html + '<span>' + this.startTime + '-' + this.endTime + '</span>';
                html = html + '<span>' + this.title + '</span>';
                html = html + '</div>';

                return html;
            }
        };

        var positionByTime = function (startTime) {
            var hour = startTime.split(':');
            return (($maxHeight + 8) * (hour[0] * 1)) + (hour[1] * 1);
        };

        init();

        function init() {
            loadTimeRow();
            bindData(events);
            onResizeEvents();
        }

        function loadTimeRow() {

            var index = 1;
            while (index < 8) {
                for (var i = 0; i < 24; i++) {
                    $('.cell'+index).append('<div class="tb-row" data-time="'+i+'"></div>');
                }
                index++;
            }
        }

        function onResizeEvents() {
            var index = 1;
            while (index < 8) {
                resizeItem($('.cell' + index));
                index++;
            }
        }

        function bindData(json) {

            json.forEach(function (item) {

                createEvtBox($('.cell' + item.cell).find('.event-wrp'), item.evtItem.startTime, item.evtItem.endTime, item.evtItem.title, item.evtId);
            });

        }

        function createEvtBox(target, startTime, endTime, title, id) {

            var stTime = 'ev-' + startTime.split(':')[0];
            var style = '';
            style += 'top:' + positionByTime(startTime) + 'px;';
            style += 'left:0;';
            style += 'z-index:' + startTime.split(':')[0] + ';';


            var eventItem = event.create(startTime, endTime, title);

            var html = '<div data-eId="' + id + '" class="ent-item ' + stTime + '" style="' + style + '">' + eventItem + '</div>';

            target.append(html);
        }

        function resizeItem(ele) {
            var allClass = [], items = [];


            $(ele).find('.event-wrp div[class*="ev-"]').each(function (i, el) {
                items = [el.className.match(/\ev-\d{1,2}/), 1];
                allClass.push(items);
            });

            console.log('Ele ', ele);

            var items = {}, base, key;
            for (var i = 0; i < allClass.length; i++) {
                base = allClass[i];
                key = base[0];
                if (!items[key]) {
                    items[key] = 0;
                }
                items[key] += base[1];
            }

            var outputArr = [], temp;
            for (key in items) {
                temp = [key, items[key]];
                outputArr.push(temp);
            }
            console.log(outputArr);


            $.each(outputArr, function (i, d) {
                var lg = d[1];
                var wi = 100 / lg;

                console.log(lg, wi, 'as ' + d[0]);

                $(document).find(ele).find('.' + d[0]).each(function (i, el) {
                    $(this).css('width', wi + '%');
                    status = true;
                });
            });

        }


        function addEventsItem(target, st, ent, title) {
            var evtObj = {
                "id": 0,
                "evtId": "",
                "cell": "1",
                "evtItem": {
                    "startTime": "0:00",
                    "endTime": "0:00",
                    "title": "Title"
                }
            };
        }

        $(document).on('click', function (e) {
            console.log($(e.target));
            if ($(e.target).hasClass('wk')) {
                $cell = $(e.target).attr('data-wd');
                $('#myModal').modal('show');

//                var cell_d = 'cell' + $cell;
//                createEvtBox($(e.target).find('.event-wrp'), '7:00', '8:00', 'Title', cell_d);
//                globleEvent.push(evtObj);
//                console.log(globleEvent);
            }
//            console.log($cell);
        });

        $(document).on('mouseover', function (e) {

            if ($(e.target).parents('.cell-wk')) {
                if ($(e.target).hasClass('wk')) {
                    $cell = $(e.target).attr('data-wd');
                }
            }
        });


        console.log(event.create('10:00', '12:30', 'Title'));

        $('.cell-wk .wk').on('click', function (e) {


//            console.log($(e.target).offset(), $('.cln-row ').find('.tb-row').offset());
//            $('.cln-row').css('zIndex', 99);
//            if ($('.cln-row ').find('.tb-row').offset() === $(e.target).offset()) {
//                console.log('Match Ele ', $('.cln-row ').find('.tb-row'));
//            }
//            ;
        });

//        $('.cell-wk .wk').on('mouseover', function (e) {
//            console.log($(e.target).offset(), $('.cln-row ').find('.tb-row').offset());
//
//            if ($('.cln-row ').find('.tb-row').offset() === $(e.target).offset()) {
//                console.log('Match Ele ', $('.cln-row ').find('.tb-row'));
//            }
//            ;
//        });
    });

</script>


<!-- ===========================================================================
        Backend Script
============================================================================ -->

