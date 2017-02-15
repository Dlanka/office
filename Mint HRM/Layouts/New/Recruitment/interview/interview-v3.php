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

<!--Interview Popup -->
<div class="interview-popup">

    <div class="row">
        <h5 class="col-md-12 inv-title mb-30">Natasha Gunawardhene</h5>
    </div>

    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-6 input-layout">
                    <input type="text" class="time-pick-start startTime" readonly>
                    <input type="hidden" class="startTimeHide">
                    <label for="">Start Time</label>
                </div>
                <div class="col-md-6 input-layout ">
                    <input type="text" class="time-pick-end endTime" readonly>
                    <input type="hidden" class="endTimeHide">
                    <label for="">End Time</label>
                </div>
            </div>
        </div>
        <div class="col-md-5 input-layout">
            <label class="focusLbl">Venue</label>
            <h5 class="details vanue">Meeting Room</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 textarea-layout">
            <label for="">Description</label>
            <textarea name="" id="" cols="30" rows="10"></textarea>
        </div>

        <div class="col-md-12">
            <div class="message popup"></div>
        </div>

        <div class="col-md-12">
            <button class="bx-sm-but bx-save btnPopSave">Save</button>
            <button class="bx-sm-but bx-delete btnPopDelete">Delete</button>
            <button class="bx-sm-but bx-exit btnPopClose">Close</button>
        </div>
    </div>

</div>


<div class="contert-wrapper mb-30 pb-15">

    <!-- Slider-->
    <div class="slid-wrp">
        <div class="slide-container">
            <div class="slider-row">
                <div class="col-md-4 pl-0 bg-blue sl-left">
                    <div class="col-md-3 days ptb-30">
                        <span>90</span>
                        <span>Days</span>
                    </div>
                    <div class="col-md-9 ptb-30 plr-30 sl-info">
                        <h4>
                            <span class="circle-45 mr-12">1</span>
                            Interview
                        </h4>
                    </div>
                </div>
                <div class="col-md-8 pl-0 pr-0 sl-right">
                    <div class="slid-group">
                        <div class="slide">
                            <div class="row">
                                <div class="col-md-6 sl-info">
                                    <h4>Software engineer - php</h4>
                                    <h5>12 Jan 2017</h5>
                                    <h6><span>Ref :</span> A / DC / 001569</h6>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-lg-white">156</span>
                                            <span>Short Listed</span>
                                        </div>
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-green">130</span>
                                            <span><i class="ic_15 ic_clock-green"></i>Sheduled</span>
                                        </div>
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-yellow">16</span>
                                            <span><i class="ic_15 ic_clock-yellow"></i>Pending</span>
                                        </div>
                                        <div class="col-md-3 sl-info-summery">
                                            <span class="text-red">0</span>
                                            <span><i class="ic_15 ic_clock-red"></i>Reject</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide-circle-wrp mt-10 pr-30 pl-30">

            <div class="table-block">
                <div class="cell">
                    <ul class="slide-circle">
                        <li id="s1">
                            <span></span>
                            <div class="tip">PHP Developer</div>
                        </li>
                        <li id="s2">
                            <span></span>
                            <div class="tip">PHP Developer</div>
                        </li>
                        <li id="s3">
                            <span></span>
                            <div class="tip">PHP Developer</div>
                        </li>
                        <li id="s4">
                            <span></span>
                            <div class="tip">PHP Developer</div>
                        </li>
                    </ul>
                </div>
                <div class="cell zero-width pl-5">
                    <button class="btn-arrow-right" title="Next"></button>
                </div>
            </div>

        </div>
    </div>

    <div class="col-md-12 mt-30 mb-30">
        <h1 class="col-md-12 title">Software Engineer - PHP</h1>
    </div>


    <div class="col-md-12">
        <div class="col-md-12">
            <div class="row">

                <div class="col-md-4">
                    <!--Calender-->
                    <div class="cm_calender">
                        <div class="cm_head">
                            <button class="bt-ac  bt-prev">
                                <svg>
                                    <path d="M 17,12 l -5,5 l 5,5"/>
                                </svg>
                            </button>
                            <div class="cm_month-year">
                                <span>January,</span>
                                <span>2017</span>
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
                                <span class="disable">27</span>
                                <span class="disable">28</span>
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
                                <span class="holiday">14</span>
                                <span class="holiday">15</span>
                                <span>16</span>
                                <span>17</span>
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
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="row">
                        <!--Drag Drop calender-->
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-12 scroll-cln">
                                    <div class="interview-cln ">
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">08:00</div>
                                            <div id="time_8" class="col-md-10 cln-drop disable" data-time="08:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">09:00</div>
                                            <div id="time_9" class="col-md-10 cln-drop disable" data-time="09:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">10:00</div>
                                            <div id="time_10" class="col-md-10 cln-drop" data-time="10:00">
                                                <div id="924" data-cnd-id="cnd_10" class="scheduled-inv-wrp">
                                                    <h6 class="title dark">
                                                        <span class="stTime">10:00&nbsp;</span>
                                                        <span>-</span>
                                                        <span class="endTime">&nbsp;10:20</span>
                                                    </h6>
                                                    <h6 class="title cnd-name">Natasaha Gunawardane</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">11:00</div>
                                            <div id="time_11" class="col-md-10 cln-drop disable"
                                                 data-time="11:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">12:00</div>
                                            <div id="time_12" class="col-md-10 cln-drop" data-time="12:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">13:00</div>
                                            <div id="time_13" class="col-md-10 cln-drop" data-time="13:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">14:00</div>
                                            <div id="time_14" class="col-md-10 cln-drop" data-time="14:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">15:00</div>
                                            <div id="time_14" class="col-md-10 cln-drop" data-time="15:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">16:00</div>
                                            <div id="time_14" class="col-md-10 cln-drop" data-time="16:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">17:00</div>
                                            <div id="time_14" class="col-md-10 cln-drop" data-time="17:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">18:00</div>
                                            <div id="time_14" class="col-md-10 cln-drop" data-time="18:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">19:00</div>
                                            <div id="time_14" class="col-md-10 cln-drop" data-time="19:00"></div>
                                        </div>
                                        <div class="cln-row">
                                            <div class="col-md-2 cln-time">20:00</div>
                                            <div id="time_14" class="col-md-10 cln-drop" data-time="20:00"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Candidates-->
                        <div class="col-md-4 candidate-wrp">
                            <h4>Candidate</h4>
                            <ul class="candidate-list">
                                <li id="cnd_10">
                                    <div class="cn-head">
                                        <h5>
                                            <i class="ic_15 ic_clock-gray"></i>
                                            <span class="draggable" draggable="true">Natasaha Gunawardane</span>
                                        </h5>
                                        <span>
                                            <i class="ic_10 arrow-down"></i>
                                        </span>
                                    </div>
                                    <div class="cn-body">
                                        <h6>071 6111606 <span>/</span> 011 2569856</h6>
                                        <div class="status">
                                            <i class="ic_20 ic_20_clock-yellow btnStatus pending">
                                                <input type="radio" class="status-inp-rd hide" name="status">
                                            </i>
                                            <i class="ic_20 ic_20_clock-red btnStatus reject">
                                                <input type="radio" class="status-inp-rd hide" name="status">
                                            </i>
                                        </div>
                                        <p class="textCnt hide-block">Lorem Ipsum is simply Lorem Ipsum is Lorem
                                            Ipsum</p>
                                        <div class="textarea-layout noteCnt">
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div>
                                            <button class="bx-sm-but bx-edit btnEditCnt statusBtn">Edit</button>
                                        </div>
                                    </div>
                                </li id>
                                <li id="cnd_10">
                                    <div class="cn-head">
                                        <h5>
                                            <i class="ic_15 ic_clock-red"></i>
                                            <span class="draggable" draggable="true">Chamisha Dilmini</span>
                                        </h5>
                                        <span>
                                            <i class="ic_10 arrow-down"></i>
                                        </span>
                                    </div>
                                    <div class="cn-body">
                                        <h6>071 6111606 <span>/</span> 011 2569856</h6>
                                        <div class="status">
                                            <i class="ic_20 ic_20_clock-yellow btnStatus pending">
                                                <input type="radio" class="status-inp-rd hide" name="status">
                                            </i>
                                            <i class="ic_20 ic_20_clock-red btnStatus reject">
                                                <input type="radio" class="status-inp-rd hide" name="status">
                                            </i>
                                        </div>
                                        <p class="textCnt hide-block">Lorem Ipsum is simply Lorem Ipsum is Lorem
                                            Ipsum</p>
                                        <div class="textarea-layout noteCnt">
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div>
                                            <button class="bx-sm-but bx-edit btnEditCnt statusBtn">Edit</button>
                                        </div>
                                    </div>
                                </li id>
                                <li id="cnd_10">
                                    <div class="cn-head">
                                        <h5>
                                            <i class="ic_15 ic_clock-green"></i>
                                            <span class="draggable" draggable="true">Kavindu Madushan</span>
                                        </h5>
                                        <span>
                                            <i class="ic_10 arrow-down"></i>
                                        </span>
                                    </div>
                                    <div class="cn-body">
                                        <h6>071 6111606 <span>/</span> 011 2569856</h6>
                                        <div class="status">
                                            <i class="ic_20 ic_20_clock-yellow btnStatus pending">
                                                <input type="radio" class="status-inp-rd hide" name="status">
                                            </i>
                                            <i class="ic_20 ic_20_clock-red btnStatus reject">
                                                <input type="radio" class="status-inp-rd hide" name="status">
                                            </i>
                                        </div>
                                        <p class="textCnt hide-block">Lorem Ipsum is simply Lorem Ipsum is Lorem
                                            Ipsum</p>
                                        <div class="textarea-layout noteCnt">
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div>
                                            <button class="bx-sm-but bx-edit btnEditCnt statusBtn">Edit</button>
                                        </div>
                                    </div>
                                </li id>
                                <li id="cnd_10">
                                    <div class="cn-head">
                                        <h5>
                                            <i class="ic_15 ic_clock-yellow"></i>
                                            <span class="draggable" draggable="true">Gayan Harshana</span>
                                        </h5>
                                        <span>
                                            <i class="ic_10 arrow-down"></i>
                                        </span>
                                    </div>
                                    <div class="cn-body">
                                        <h6>071 6111606 <span>/</span> 011 2569856</h6>
                                        <div class="status">
                                            <i class="ic_20 ic_20_clock-yellow btnStatus pending">
                                                <input type="radio" class="status-inp-rd hide" name="status">
                                            </i>
                                            <i class="ic_20 ic_20_clock-red btnStatus reject">
                                                <input type="radio" class="status-inp-rd hide" name="status">
                                            </i>
                                        </div>
                                        <p class="textCnt hide-block">Lorem Ipsum is simply Lorem Ipsum is Lorem
                                            Ipsum</p>
                                        <div class="textarea-layout noteCnt">
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div>
                                            <button class="bx-sm-but bx-edit btnEditCnt statusBtn">Edit</button>
                                        </div>
                                    </div>
                                </li id>
                                <li id="cnd_10">
                                    <div class="cn-head">
                                        <h5>
                                            <i class="ic_15 ic_clock-yellow"></i>
                                            <span class="draggable" draggable="true">Shanika Jayawardane</span>
                                        </h5>
                                        <span>
                                            <i class="ic_10 arrow-down"></i>
                                        </span>
                                    </div>
                                    <div class="cn-body">
                                        <h6>071 6111606 <span>/</span> 011 2569856</h6>
                                        <div class="status">
                                            <i class="ic_20 ic_20_clock-yellow btnStatus pending">
                                                <input type="radio" class="status-inp-rd hide" name="status">
                                            </i>
                                            <i class="ic_20 ic_20_clock-red btnStatus reject">
                                                <input type="radio" class="status-inp-rd hide" name="status">
                                            </i>
                                        </div>
                                        <p class="textCnt hide-block">Lorem Ipsum is simply Lorem Ipsum is Lorem
                                            Ipsum</p>
                                        <div class="textarea-layout noteCnt">
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <div>
                                            <button class="bx-sm-but bx-edit btnEditCnt statusBtn">Edit</button>
                                        </div>
                                    </div>
                                </li id>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-12 mt-30">

        <div class="col-md-4 ">
            <div class="row">
                <div class="col-md-12 input-layout">
                    <select name="" id="">
                        <option value="0"></option>
                    </select>
                    <label for="">Venue</label>
                </div>
                <div class="col-md-12">
                    <button class="bx-but bx-exit col-md-12">Check Availability</button>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="row">

                <!--Interview panel selection area-->
                <div class="col-md-8">

                    <div class="row">
                        <div class="col-md-12 sc-wrapper">
                            <i class="ic_search"></i>
                            <input class="input-search" onkeyup="" type="text"
                                   placeholder="Search here for select interview pannel">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 scroll-empList">
                            <ul class="sc-emp-list">
                                <li id="emp_1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <img class="user-img mCS_img_loaded"
                                                             src="/hris/uploads/empProfile/35/1.jpg"
                                                             alt="Employee Image">
                                                    </div>
                                                </div>
                                                <div class="emp-info">
                                                    <h5 class="u-name">Nirmal Fernando</h5>
                                                    <h6 class="title">UX Engineer </h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li id="emp_2">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <img class="user-img mCS_img_loaded"
                                                             src="/hris/uploads/empProfile/35/2.jpg"
                                                             alt="Employee Image">
                                                    </div>
                                                </div>
                                                <div class="emp-info">
                                                    <h5 class="u-name">Chamisha Dilmini</h5>
                                                    <h6 class="title">PHP Engineer </h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li id="emp_3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <img class="user-img mCS_img_loaded"
                                                             src="/hris/uploads/empProfile/35/3.jpg"
                                                             alt="Employee Image">

                                                    </div>
                                                </div>
                                                <div class="emp-info">
                                                    <h5 class="u-name">Kavindu Madushan</h5>
                                                    <h6 class="title">UX Engineer </h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li id="emp_4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <img class="user-img mCS_img_loaded"
                                                             src="/hris/uploads/empProfile/35/9.jpg"
                                                             alt="Employee Image">
                                                    </div>
                                                </div>
                                                <div class="emp-info">
                                                    <h5 class="u-name">Nuwan Bandara</h5>
                                                    <h6 class="title">UX Engineer </h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li id="emp_5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <img class="user-img mCS_img_loaded"
                                                             src="/hris/uploads/empProfile/35/10.jpg"
                                                             alt="Employee Image">
                                                    </div>
                                                </div>
                                                <div class="emp-info">
                                                    <h5 class="u-name">Nalinda Aluthgamage</h5>
                                                    <h6 class="title">UX Engineer </h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li id="emp_6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <img class="user-img mCS_img_loaded"
                                                             src="/hris/uploads/empProfile/35/7.jpg"
                                                             alt="Employee Image">

                                                    </div>
                                                </div>
                                                <div class="emp-info">
                                                    <h5 class="u-name">Dinusha Pathirna</h5>
                                                    <h6 class="title">Front-end Developer</h6>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="ui_accordion">
                        <a href="#interview" class="ui-link ">Interview Panel</a>
                        <div id="interview" class="ui-box-wrp plr-0 pt-15">
                            <div class="interview-pnl">
                                <div class="emp-list-container interview">
                                    <div class="emp-list-wrp ">

                                    </div>
                                </div>
                            </div>
                            <div class="dropArea" data-location="interview">Drag and drop here selected interviwer</div>
                        </div>
                    </div>

                    <div class="ui_accordion">
                        <a href="#options" class="ui-link ">Optional</a>
                        <div id="options" class="ui-box-wrp plr-0 pt-15">
                            <div class="interview-pnl">
                                <div class="emp-list-container option-wrp">
                                    <div class="emp-list-wrp ">

                                    </div>
                                </div>
                            </div>
                            <div class="dropArea" data-location="option-wrp">Drag and drop here selected interviwer
                            </div>
                        </div>
                    </div>

                    <div class="ui_accordion ">
                        <a href="#resource" class="ui-link ">Resource</a>
                        <div id="resource" class="ui-box-wrp plr-0 pt-15">
                            <div class="interview-pnl">
                                <div class="emp-list-container resource">
                                    <div class="emp-list-wrp"></div>
                                </div>
                            </div>
                            <div class="dropArea" data-location="resource">Drag and drop here selected interviwer</div>
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


<!--Search-->
<div class="row">
    <div class="col-md-12">
        <div class="c-search-wrapper">
            <div class="c-search-content">

                <div class="c-search-item active">
                    <div class="col_1">
                        <select name="" id="" class="select-box">
                            <option value="1">Department</option>
                            <option value="2">Department2</option>
                        </select>
                    </div>
                    <div class="col_2">
                        <input type="text">
                    </div>
                    <div class="col_3">
                        <button class="btn-search" type="button" onclick=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">

    <div class="col-md-12 mb-30">
        <div class="right mr-30">
            <span class="ic_28 ic_28_menu-box mr-15"></span>
            <span class="ic_28 ic_28_menu-bar "></span>
        </div>
    </div>

    <div class="col-md-12">

        <!--By Employee -->
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">

                        <div class="col-md-4 mt-5 left-side">
                            <h5 class="details">Sandun Maduranga</h5>
                        </div>

                        <div class="col-md-8 ">
                            <div class="row">
                                <div class="col-md-6 mt-5 right-side">
                                    <h5 class="details">23 Jan 2017
                                        <span>
                                    <span>(</span>
                                    <span>8.00 am</span>
                                    <span>-</span>
                                    <span>8.15 am</span>
                                    <span>)</span>
                                </span>
                                    </h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <i class="ic_30 ic_30_email-yellow"></i>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="ic_20 ic_20_msg-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-12">

                        <div class="col-md-4">
                            <div class="row">
                                <h5 class="details col-md-12 mb-30">
                                    <i class="ic_25 ic_25_call mr-10"></i>
                                    <span>071 6111606 / 011 2365987</span>
                                </h5>
                                <h5 class="details col-md-12 mb-30">
                                    <i class="ic_25 ic_25_email mr-10"></i>
                                    <span>info@infoseek.lk</span>
                                </h5>

                                <div class="col-md-12 mb-30">
                                    <h6 class="title mb-2">Date</h6>
                                    <h5 class="details">21 Jun 2016</h5>
                                </div>

                                <div class="col-md-12 mb-30">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="title mb-2">Start Time</h6>
                                            <h5 class="details">08.20 am</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="title mb-2">End Time</h6>
                                            <h5 class="details">09.20 am</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-30">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="title mb-2">Venue</h6>
                                            <h5 class="details">Meeting Room</h5>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-6">
                                    <h5 class="details up-case mb-20">Interview pannel</h5>

                                    <div class="row">
                                        <div class="col-md-12 but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="allSelect">
                                                <span class=" check-box"></span>
                                                <span class="pl-10 ">Select All</span>
                                            </label>
                                        </div>

                                    </div>

                                    <ul class="interview-emp-list">
                                        <li>

                                            <div class="table-block">
                                                <div class="cell zero-width">
                                                    <div class="but-gruop-wrp chb-emp-wrp">
                                                        <label>
                                                            <input type="checkbox" class="chb-emp">
                                                            <span class=" check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <div class="emp-block">
                                                        <div class="img-border">
                                                            <div class="img-wrp--35 ">
                                                                <img class="user-img mCS_img_loaded"
                                                                     src="/hris/uploads/empProfile/35/1.jpg"
                                                                     alt="Employee Image">
                                                            </div>
                                                        </div>
                                                        <div class="emp-info">
                                                            <h5 class="u-name text-limit-25"><span
                                                                    class="st gray"></span>Nirmal Fernando</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </li>
                                        <li>
                                            <div class="table-block">
                                                <div class="cell zero-width">
                                                    <div class="but-gruop-wrp chb-emp-wrp">
                                                        <label>
                                                            <input type="checkbox" class="chb-emp">
                                                            <span class=" check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <div class="emp-block">
                                                        <div class="img-border">
                                                            <div class="img-wrp--35 ">
                                                                <img class="user-img mCS_img_loaded"
                                                                     src="/hris/uploads/empProfile/35/3.jpg"
                                                                     alt="Employee Image">
                                                            </div>
                                                        </div>
                                                        <div class="emp-info">
                                                            <h5 class="u-name text-limit-25"><span
                                                                    class="st red"></span>Kavindu
                                                                Madushan
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block">
                                                <div class="cell zero-width">
                                                    <div class="but-gruop-wrp chb-emp-wrp">
                                                        <label>
                                                            <input type="checkbox" class="chb-emp">
                                                            <span class=" check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <div class="emp-block">
                                                        <div class="img-border">
                                                            <div class="img-wrp--35 ">
                                                                <img class="user-img mCS_img_loaded"
                                                                     src="/hris/uploads/empProfile/35/7.jpg"
                                                                     alt="Employee Image">
                                                            </div>
                                                        </div>
                                                        <div class="emp-info">
                                                            <h5 class="u-name text-limit-25"><span
                                                                    class="st yellow"></span>Dinusha
                                                                Pathirna</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block">
                                                <div class="cell zero-width">
                                                    <div class="but-gruop-wrp chb-emp-wrp">
                                                        <label>
                                                            <input type="checkbox" class="chb-emp">
                                                            <span class=" check-box"></span>
                                                            <span></span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <div class="emp-block">
                                                        <div class="img-border">
                                                            <div class="img-wrp--35 ">
                                                                <img class="user-img mCS_img_loaded"
                                                                     src="/hris/uploads/empProfile/35/8.jpg"
                                                                     alt="Employee Image">
                                                            </div>
                                                        </div>
                                                        <div class="emp-info">
                                                            <h5 class="u-name text-limit-25"><span
                                                                    class="st yellow"></span>Ruchira
                                                                Gunawardhana</h5>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </li>

                                    </ul>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="bx-but bx-save left">Yes</button>
                                            <button class="bx-but bx-exit left">No</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 pl-0">
                                    <div class="row">
                                        <h5 class="details up-case mb-20">Optional</h5>
                                        <div class="emp-list-container intv-other mb-30">
                                            <div class="emp-list-wrp ">
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <img class="user-img mCS_img_loaded"
                                                             src="/hris/uploads/empProfile/35/8.jpg"
                                                             alt="Employee Image">
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Ruchira Gunawardhana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Dinusha Pathirna
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h5 class="details up-case mb-20">Resource</h5>
                                        <div class="emp-list-container intv-other mb-30">
                                            <div class="emp-list-wrp ">
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <img class="user-img mCS_img_loaded"
                                                             src="/hris/uploads/empProfile/35/3.jpg"
                                                             alt="Employee Image">
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Kavindu Madushan
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <img class="user-img mCS_img_loaded"
                                                             src="/hris/uploads/empProfile/35/5.jpg"
                                                             alt="Employee Image">
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Diluka Perera
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-15">
                                <div class="col-md-12">
                                    <ul class="interview-emp-list">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="img-wrp--35 ">
                                                        <img class="user-img mCS_img_loaded"
                                                             src="/hris/uploads/empProfile/35/3.jpg"
                                                             alt="Employee Image">
                                                    </div>
                                                </div>
                                                <div class="col-md-11 pl-0">
                                                    <p class="text-light">Lorem Ipsum is simply dummy text of the
                                                        printing
                                                        and typesetting industry.</p>
                                                    <h6 class="title mt-5">9 Nov</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-12 textarea-layout">
                                    <textarea name="" id="" cols="30" rows="10" class="comment"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="bx-but bx-hold">Re-Schedule</button>
                            <button class="bx-but bx-save">Send Mail</button>
                            <button class="bx-but bx-exit">Edit</button>
                            <button class="bx-but bx-exit">Reject</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">

                        <div class="col-md-4 mt-5 left-side">
                            <h5 class="details">Natasha gunawardena</h5>
                        </div>

                        <div class="col-md-8 ">
                            <div class="row">
                                <div class="col-md-6 mt-5 right-side">
                                    <h5 class="details">10 Nov 2016
                                        <span>
                                            <span>(</span>
                                            <span>8.00 am</span>
                                            <span>-</span>
                                            <span>8.15 am</span>
                                            <span>)</span>
                                        </span>
                                    </h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <i class="ic_30 ic_30_email-black"></i>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="ic_20 ic_20_msg-green"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-12">

                        <div class="col-md-4">
                            <div class="row">
                                <h5 class="details col-md-12 mb-30">
                                    <i class="ic_25 ic_25_call mr-10"></i>
                                    <span>071 6111606 / 011 2365987</span>
                                </h5>
                                <h5 class="details col-md-12 mb-30">
                                    <i class="ic_25 ic_25_email mr-10"></i>
                                    <span>info@infoseek.lk</span>
                                </h5>

                                <div class="col-md-12 mb-30">
                                    <h6 class="title mb-2">Date</h6>
                                    <h5 class="details">21 Jun 2016</h5>
                                </div>

                                <div class="col-md-12 mb-30">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="title mb-2">Start Time</h6>
                                            <h5 class="details">08.20 am</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="title mb-2">End Time</h6>
                                            <h5 class="details">09.20 am</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-30">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="title mb-2">Venue</h6>
                                            <h5 class="details">Meeting Room</h5>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-6">
                                    <h5 class="details up-case mb-20">Interview pannel</h5>

                                    <div class="row">
                                        <div class="col-md-12 but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="allSelect">
                                                <span class=" check-box"></span>
                                                <span class="pl-5">Select All</span>
                                            </label>
                                        </div>

                                    </div>

                                    <ul class="interview-emp-list">
                                        <li>
                                            <div class="col-md-1 pl-0">
                                                <div class="but-gruop-wrp chb-emp-wrp">
                                                    <label>
                                                        <input type="checkbox" class="chb-emp">
                                                        <span class=" check-box"></span>
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-11 pl-5">
                                                <div class="emp-block">
                                                    <div class="img-border">
                                                        <div class="img-wrp--35 ">
                                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                        </div>
                                                    </div>
                                                    <div class="emp-info">
                                                        <h5 class="u-name text-limit-25"><span class="st gray"></span>Natasha
                                                            Gunawardana</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1 pl-0">
                                                <div class="but-gruop-wrp chb-emp-wrp">
                                                    <label>
                                                        <input type="checkbox" class="chb-emp">
                                                        <span class=" check-box"></span>
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-11 pl-5">
                                                <div class="emp-block">
                                                    <div class="img-border">
                                                        <div class="img-wrp--35 ">
                                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                        </div>
                                                    </div>
                                                    <div class="emp-info">
                                                        <h5 class="u-name text-limit-25"><span class="st red"></span>Natasha
                                                            Gunawardana</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1 pl-0">
                                                <div class="but-gruop-wrp chb-emp-wrp">
                                                    <label>
                                                        <input type="checkbox" class="chb-emp">
                                                        <span class=" check-box"></span>
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-11 pl-5">
                                                <div class="emp-block">
                                                    <div class="img-border">
                                                        <div class="img-wrp--35 ">
                                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                        </div>
                                                    </div>
                                                    <div class="emp-info">
                                                        <h5 class="u-name text-limit-25"><span class="st yellow"></span>Natasha
                                                            Gunawardana</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1 pl-0">
                                                <div class="but-gruop-wrp chb-emp-wrp">
                                                    <label>
                                                        <input type="checkbox" class="chb-emp">
                                                        <span class=" check-box"></span>
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-11 pl-5">
                                                <div class="emp-block">
                                                    <div class="img-border">
                                                        <div class="img-wrp--35 ">
                                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                        </div>
                                                    </div>
                                                    <div class="emp-info">
                                                        <h5 class="u-name text-limit-25"><span class="st yellow"></span>Natasha
                                                            Gunawardana</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="bx-but bx-save left">Yes</button>
                                            <button class="bx-but bx-exit left">No</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 pl-0">
                                    <div class="row">
                                        <h5 class="details up-case mb-20">Optional</h5>
                                        <div class="emp-list-container intv-other mb-30">
                                            <div class="emp-list-wrp ">
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h5 class="details up-case mb-20">Resource</h5>
                                        <div class="emp-list-container intv-other mb-30">
                                            <div class="emp-list-wrp ">
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-15">
                                <div class="col-md-12">
                                    <ul class="interview-emp-list">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-11 pl-0">
                                                    <p class="text-light">Lorem Ipsum is simply dummy text of the
                                                        printing
                                                        and typesetting industry.</p>
                                                    <h6 class="title mt-5">9 Nov</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-12 textarea-layout">
                                    <textarea name="" id="" cols="30" rows="10" class="comment"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="bx-but bx-hold">Re-Schedule</button>
                            <button class="bx-but bx-save">Send Mail</button>
                            <button class="bx-but bx-exit">Edit</button>
                            <button class="bx-but bx-exit">Reject</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">

                        <div class="col-md-4 mt-5 left-side">
                            <h5 class="details">Natasha gunawardena</h5>
                        </div>

                        <div class="col-md-8 ">
                            <div class="row">
                                <div class="col-md-6 mt-5 right-side">
                                    <h5 class="details">10 Nov 2016
                                        <span>
                                            <span>(</span>
                                            <span>8.00 am</span>
                                            <span>-</span>
                                            <span>8.15 am</span>
                                            <span>)</span>
                                        </span>
                                    </h5>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <i class="ic_30 ic_30_email-red"></i>
                                        </div>
                                        <div class="col-md-4">
                                            <i class="ic_20 ic_20_msg-green"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-12">

                        <div class="col-md-4">
                            <div class="row">
                                <h5 class="details col-md-12 mb-30">
                                    <i class="ic_25 ic_25_call mr-10"></i>
                                    <span>071 6111606 / 011 2365987</span>
                                </h5>
                                <h5 class="details col-md-12 mb-30">
                                    <i class="ic_25 ic_25_email mr-10"></i>
                                    <span>info@infoseek.lk</span>
                                </h5>

                                <div class="col-md-12 mb-30">
                                    <h6 class="title mb-2">Date</h6>
                                    <h5 class="details">21 Jun 2016</h5>
                                </div>

                                <div class="col-md-12 mb-30">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="title mb-2">Start Time</h6>
                                            <h5 class="details">08.20 am</h5>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 class="title mb-2">End Time</h6>
                                            <h5 class="details">09.20 am</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12 mb-30">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 class="title mb-2">Venue</h6>
                                            <h5 class="details">Meeting Room</h5>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="row">

                                <div class="col-md-6">
                                    <h5 class="details up-case mb-20">Interview pannel</h5>

                                    <div class="row">
                                        <div class="col-md-12 but-gruop-wrp">
                                            <label>
                                                <input type="checkbox" class="allSelect">
                                                <span class=" check-box"></span>
                                                <span class="pl-5">Select All</span>
                                            </label>
                                        </div>

                                    </div>

                                    <ul class="interview-emp-list">
                                        <li>
                                            <div class="col-md-1 pl-0">
                                                <div class="but-gruop-wrp chb-emp-wrp">
                                                    <label>
                                                        <input type="checkbox" class="chb-emp">
                                                        <span class=" check-box"></span>
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-11 pl-5">
                                                <div class="emp-block">
                                                    <div class="img-border">
                                                        <div class="img-wrp--35 ">
                                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                        </div>
                                                    </div>
                                                    <div class="emp-info">
                                                        <h5 class="u-name text-limit-25"><span class="st gray"></span>Natasha
                                                            Gunawardana</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1 pl-0">
                                                <div class="but-gruop-wrp chb-emp-wrp">
                                                    <label>
                                                        <input type="checkbox" class="chb-emp">
                                                        <span class=" check-box"></span>
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-11 pl-5">
                                                <div class="emp-block">
                                                    <div class="img-border">
                                                        <div class="img-wrp--35 ">
                                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                        </div>
                                                    </div>
                                                    <div class="emp-info">
                                                        <h5 class="u-name text-limit-25"><span class="st red"></span>Natasha
                                                            Gunawardana</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1 pl-0">
                                                <div class="but-gruop-wrp chb-emp-wrp">
                                                    <label>
                                                        <input type="checkbox" class="chb-emp">
                                                        <span class=" check-box"></span>
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-11 pl-5">
                                                <div class="emp-block">
                                                    <div class="img-border">
                                                        <div class="img-wrp--35 ">
                                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                        </div>
                                                    </div>
                                                    <div class="emp-info">
                                                        <h5 class="u-name text-limit-25"><span class="st yellow"></span>Natasha
                                                            Gunawardana</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-1 pl-0">
                                                <div class="but-gruop-wrp chb-emp-wrp">
                                                    <label>
                                                        <input type="checkbox" class="chb-emp">
                                                        <span class=" check-box"></span>
                                                        <span></span>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-11 pl-5">
                                                <div class="emp-block">
                                                    <div class="img-border">
                                                        <div class="img-wrp--35 ">
                                                            <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                        </div>
                                                    </div>
                                                    <div class="emp-info">
                                                        <h5 class="u-name text-limit-25"><span class="st yellow"></span>Natasha
                                                            Gunawardana</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <button class="bx-but bx-save left">Yes</button>
                                            <button class="bx-but bx-exit left">No</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 pl-0">
                                    <div class="row">
                                        <h5 class="details up-case mb-20">Optional</h5>
                                        <div class="emp-list-container intv-other mb-30">
                                            <div class="emp-list-wrp ">
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h5 class="details up-case mb-20">Resource</h5>
                                        <div class="emp-list-container intv-other mb-30">
                                            <div class="emp-list-wrp ">
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>
                                                <div class="emp-list">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                    <div class="tip tip-emp-name">
                                                        Natasha Gunawardana
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="row mt-15">
                                <div class="col-md-12">
                                    <ul class="interview-emp-list">
                                        <li>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-11 pl-0">
                                                    <p class="text-light">Lorem Ipsum is simply dummy text of the
                                                        printing
                                                        and typesetting industry.</p>
                                                    <h6 class="title mt-5">9 Nov</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-md-12 textarea-layout">
                                    <textarea name="" id="" cols="30" rows="10" class="comment"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button class="bx-but bx-hold">Re-Schedule</button>
                            <button class="bx-but bx-save">Send Mail</button>
                            <button class="bx-but bx-exit">Edit</button>
                            <button class="bx-but bx-exit">Reject</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--By Designation-->
        <div class="card-content-wrp">
            <div class="tab-box">
                <div class="box-head">

                    <div class="col-md-12">

                        <div class="col-md-4 mt-5 left-side">
                            <h5 class="details">Chamila Perera</h5>
                        </div>

                        <div class="col-md-8 ">
                            <div class="row">
                                <div class="col-md-8 mt-5 ">
                                    <h5 class="details">25 Jan 2017
                                        <span>
                                    <span>(</span>
                                    <span>8.00 am</span>
                                    <span>-</span>
                                    <span>8.15 am</span>
                                    <span>)</span>
                                </span>
                                    </h5>
                                </div>

                            </div>
                        </div>

                    </div>

                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body">
                    <div class="col-md-12">

                        <div class="col-md-12 mb-30">
                            <div class="row header-row mb-5">
                                <div class="col-md-6 but-gruop-wrp mb-0">
                                    <label>
                                        <input type="checkbox" class="allSelect-group">
                                        <span class="check-box"></span>
                                        <span class="pl-10 font-12">Select All</span>
                                    </label>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <h6 class="title col-md-3 mt-5">Date</h6>
                                        <h6 class="title col-md-2 mt-5">Start Time</h6>
                                        <h6 class="title col-md-2 mt-5">End Time</h6>
                                        <h6 class="title col-md-3 mt-5">Venue</h6>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="scroll-body">
                                <div class="row body-row mb-5">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <h5 class="details col-md-5">
                                                <div class="but-gruop-wrp mb-0">
                                                    <label>
                                                        <input type="checkbox" class="sub-chb-group">
                                                        <span class="check-box"></span>
                                                        <span class="pl-10 tx-emp-name">Nuwan Bandara</span>
                                                    </label>
                                                </div>
                                            </h5>
                                            <h5 class="details col-md-3">071 6111606 </h5>
                                            <h5 class="details col-md-3">info@infoseek.lk</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <h5 class="col-md-3 details">21 Jun 2016</h5>
                                            <h5 class="col-md-2 details">08.20 am</h5>
                                            <h5 class="col-md-2 details">09.20 am</h5>
                                            <h5 class="col-md-3 details">Meeting Room</h5>
                                            <div class="col-md-2">
                                                <div class="row">
                                                    <div class="col-md-6"><i class="ic_30 ic_30_email-black"></i></div>
                                                    <div class="col-md-6"><i class="ic_20 ic_20_msg-green"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row body-row mb-5">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <h5 class="details col-md-5">
                                                <div class="but-gruop-wrp mb-0">
                                                    <label>
                                                        <input type="checkbox" class="sub-chb-group">
                                                        <span class="check-box"></span>
                                                        <span class="pl-10 tx-emp-name">Sumudu Karunarathne</span>
                                                    </label>
                                                </div>

                                            </h5>
                                            <h5 class="details col-md-3">071 6111606 </h5>
                                            <h5 class="details col-md-3">info@infoseek.lk</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <h5 class="col-md-3 details">21 Jun 2016</h5>
                                            <h5 class="col-md-2 details">08.20 am</h5>
                                            <h5 class="col-md-2 details">09.20 am</h5>
                                            <h5 class="col-md-3 details">Meeting Room</h5>
                                            <div class="col-md-2">
                                                <div class="row">
                                                    <div class="col-md-6"><i class="ic_30 ic_30_email-black"></i></div>
                                                    <div class="col-md-6"><i class="ic_20 ic_20_msg-green"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row body-row mb-5">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <h5 class="details col-md-5">
                                                <div class="but-gruop-wrp mb-0">
                                                    <label>
                                                        <input type="checkbox" class="sub-chb-group">
                                                        <span class="check-box"></span>
                                                        <span class="pl-10 tx-emp-name">Sameera Madusanka</span>
                                                    </label>
                                                </div>

                                            </h5>
                                            <h5 class="details col-md-3">071 6111606 </h5>
                                            <h5 class="details col-md-3">info@infoseek.lk</h5>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <h5 class="col-md-3 details">21 Jun 2016</h5>
                                            <h5 class="col-md-2 details">08.20 am</h5>
                                            <h5 class="col-md-2 details">09.20 am</h5>
                                            <h5 class="col-md-3 details">Meeting Room</h5>
                                            <div class="col-md-2">
                                                <div class="row">
                                                    <div class="col-md-6"><i class="ic_30 ic_30_email-black"></i></div>
                                                    <div class="col-md-6"><i class="ic_20 ic_20_msg-green"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="row">

                                        <div class="col-md-7">
                                            <h5 class="details up-case mb-20">Interview pannel</h5>

                                            <div class="row">
                                                <div class="col-md-12 but-gruop-wrp">
                                                    <label>
                                                        <input type="checkbox" class="allSelect">
                                                        <span class=" check-box"></span>
                                                        <span class="pl-10">Select All</span>
                                                    </label>
                                                </div>

                                            </div>

                                            <ul class="interview-emp-list">
                                                <li>

                                                    <div class="table-block">
                                                        <div class="cell zero-width">
                                                            <div class="but-gruop-wrp chb-emp-wrp">
                                                                <label>
                                                                    <input type="checkbox" class="chb-emp">
                                                                    <span class=" check-box"></span>
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-15">
                                                            <div class="emp-block">
                                                                <div class="img-border">
                                                                    <div class="img-wrp--35 ">
                                                                        <img class="user-img mCS_img_loaded"
                                                                             src="/hris/uploads/empProfile/35/1.jpg"
                                                                             alt="Employee Image">
                                                                    </div>
                                                                </div>
                                                                <div class="emp-info">
                                                                    <h5 class="u-name text-limit-25"><span
                                                                            class="st gray"></span>Nirmal Fernando</h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </li>
                                                <li>
                                                    <div class="table-block">
                                                        <div class="cell zero-width">
                                                            <div class="but-gruop-wrp chb-emp-wrp">
                                                                <label>
                                                                    <input type="checkbox" class="chb-emp">
                                                                    <span class=" check-box"></span>
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-15">
                                                            <div class="emp-block">
                                                                <div class="img-border">
                                                                    <div class="img-wrp--35 ">
                                                                        <img class="user-img mCS_img_loaded"
                                                                             src="/hris/uploads/empProfile/35/3.jpg"
                                                                             alt="Employee Image">
                                                                    </div>
                                                                </div>
                                                                <div class="emp-info">
                                                                    <h5 class="u-name text-limit-25"><span
                                                                            class="st red"></span>Kavindu
                                                                        Madushan
                                                                    </h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="table-block">
                                                        <div class="cell zero-width">
                                                            <div class="but-gruop-wrp chb-emp-wrp">
                                                                <label>
                                                                    <input type="checkbox" class="chb-emp">
                                                                    <span class=" check-box"></span>
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="cell pl-15">
                                                            <div class="emp-block">
                                                                <div class="img-border">
                                                                    <div class="img-wrp--35 ">
                                                                        <img class="user-img mCS_img_loaded"
                                                                             src="/hris/uploads/empProfile/35/7.jpg"
                                                                             alt="Employee Image">
                                                                    </div>
                                                                </div>
                                                                <div class="emp-info">
                                                                    <h5 class="u-name text-limit-25"><span
                                                                            class="st yellow"></span>Dinusha
                                                                        Pathirna</h5>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button class="bx-but bx-save left">Yes</button>
                                                    <button class="bx-but bx-exit left">No</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-5 pl-0">
                                            <div class="row">
                                                <h5 class="details up-case mb-20">Optional</h5>
                                                <div class="emp-list-container intv-other mb-30">
                                                    <div class="emp-list-wrp ">
                                                        <div class="emp-list">
                                                            <div class="img-wrp--35 ">
                                                                <img class="user-img mCS_img_loaded"
                                                                     src="/hris/uploads/empProfile/35/1.jpg"
                                                                     alt="Employee Image">
                                                            </div>
                                                            <div class="tip tip-emp-name">
                                                                Nirmal Fernando
                                                            </div>
                                                        </div>
                                                        <div class="emp-list">
                                                            <div class="img-wrp--35 ">
                                                                <img class="user-img mCS_img_loaded"
                                                                     src="/hris/uploads/empProfile/35/5.jpg"
                                                                     alt="Employee Image">

                                                            </div>
                                                            <div class="tip tip-emp-name">
                                                                Diluka Perera
                                                            </div>
                                                        </div>
                                                        <div class="emp-list">
                                                            <div class="img-wrp--35 ">
                                                                <img class="user-img mCS_img_loaded"
                                                                     src="/hris/uploads/empProfile/35/7.jpg"
                                                                     alt="Employee Image">

                                                            </div>
                                                            <div class="tip tip-emp-name">
                                                                Dinusha Pathirna

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <h5 class="details up-case mb-20">Resource</h5>
                                                <div class="emp-list-container intv-other mb-30">
                                                    <div class="emp-list-wrp ">
                                                        <div class="emp-list">
                                                            <div class="img-wrp--35 ">
                                                                <img class="user-img mCS_img_loaded"
                                                                     src="/hris/uploads/empProfile/35/10.jpg"
                                                                     alt="Employee Image">
                                                            </div>
                                                            <div class="tip tip-emp-name">
                                                                Nalinda Aluthgamage
                                                            </div>
                                                        </div>
                                                        <div class="emp-list">
                                                            <div class="img-wrp--35 ">
                                                                <img class="user-img mCS_img_loaded"
                                                                     src="/hris/uploads/empProfile/35/8.jpg"
                                                                     alt="Employee Image">
                                                            </div>
                                                            <div class="tip tip-emp-name">
                                                                Ruchira Gunawardhana
                                                            </div>
                                                        </div>
                                                        <div class="emp-list">
                                                            <div class="img-wrp--35 ">
                                                                <img class="user-img mCS_img_loaded"
                                                                     src="/hris/uploads/empProfile/35/6.jpg"
                                                                     alt="Employee Image">
                                                            </div>
                                                            <div class="tip tip-emp-name">
                                                                Shanika Jayawardane
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="interview-emp-list intv-list-des">
                                                <li>
                                                    <div class="row">
                                                        <div class="col-md-1 pr-0">
                                                            <div class="img-wrp--35 ">
                                                                <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-11 pl-20">
                                                            <p class="text-light">Lorem Ipsum is simply dummy text of
                                                                the
                                                                printing
                                                                and typesetting industry.</p>
                                                            <h6 class="title mt-5">9 Nov</h6>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="col-md-12 textarea-layout">
                                            <textarea name="" id="" cols="30" rows="10" class="comment"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-md-12">
                            <button class="bx-but bx-hold">Re-Schedule</button>
                            <button class="bx-but bx-save">Send Mail</button>
                            <button class="bx-but bx-exit">Edit</button>
                            <button class="bx-but bx-exit">Reject</button>
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
    //    var slide = $('.slide-container').owlCarousel({
    //        items: 1,
    //        margin: 0,
    //        nav: false
    //    });
    //
    //    $('.arrow-right').click(function () {
    //        slide.trigger('next.owl.carousel');
    //    });
    //    // Go to the previous item
    //    $('.arrow-left').click(function () {
    //        slide.trigger('prev.owl.carousel');
    //    });

    //Slider Circle click event function
    $(function () {

        function loadData(id) {
            console.log(id);
        }

        $('.slide-circle-wrp .slide-circle li:first').addClass('active');

        $('.slide-circle-wrp .slide-circle li').on('click', function () {
            $('.slide-circle-wrp .slide-circle li').removeClass('active');
            $(this).addClass('active');
            loadData($(this).attr('id'));
        });

        $('.btn-arrow-right').on('click', function () {
            var arr = [],
                $li = $('.slide-circle-wrp .slide-circle li'),
                element = null,
                indexOf = -1,
                count = -1;

            $li.each(function () {
                arr.push($(this));
            });

            while (++count < arr.length) {
                if ($(arr[count][0]).hasClass('active')) {
                    element = arr[count][0];
                    indexOf = arr.indexOf(arr[count]);
                    break;
                }
            }

            if ((indexOf + 1) < arr.length) {
                var eleIndex = indexOf + 1;
                $(element).removeClass('active');
                $(arr[eleIndex]).addClass('active');
                loadData($(arr[eleIndex]).attr('id'));
            } else {
                $li.removeClass('active');
                $(arr[0]).addClass('active');
                loadData($(arr[0]).attr('id'));
            }
        });
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

    //Create Candidate drag object
    //new Drag();

    $(function () {

        $('.noteCnt').fadeOut('fast');

        $('.statusBtn').click(function () {

            var prtBody = $(this).parents('.cn-body');

            if (!$(this).hasClass('mode-save')) {
                $(this).addClass('mode-save').addClass('bx-save').removeClass('bx-edit').text('Save');
                prtBody.find('.textCnt').fadeOut('fast', function () {
                    prtBody.find('.noteCnt').fadeIn('fast');
                });
            } else {
                prtBody.find('.noteCnt').fadeOut('fast', function () {
                    prtBody.find('.textCnt').fadeIn('fast');
                });
                $(this).removeClass('mode-save').removeClass('bx-save').addClass('bx-edit').text('Edit');
            }
        });

        $('.btnStatus').click(function () {

            var parentStatus = $(this).parent('.status');
            var pntCBody = parentStatus.parent('.cn-body');

            if (!$(this).hasClass('checked')) {
                parentStatus.find('.btnStatus').removeClass('checked');
                $(this).addClass('checked');

                parentStatus.find('.status-inp-rd').prop('checked', false);
                $(this).find('.status-inp-rd').prop('checked', true);

            }
            pntCBody.find('.textCnt').fadeOut('fast', function () {
                pntCBody.find('.noteCnt').fadeIn('fast');
                pntCBody.find('textarea').val('').focus();
            });


            if (!pntCBody.find('.statusBtn').hasClass('mode-save')) {
                pntCBody.find('.statusBtn')
                    .addClass('mode-save')
                    .removeClass('edit')
                    .addClass('bx-save')
                    .removeClass('bx-edit')
                    .text('Save');
            }
        });

    });


    // Check All
    $('.card-content-wrp').each(function () {
        new CheckAll({
            parentEle: $(this).find('.allSelect'),
            childEle: $(this).find('.chb-emp')
        });

        new CheckAll({
            parentEle: $(this).find('.header-row .allSelect-group'),
            childEle: $(this).find('.body-row .sub-chb-group')
        });

    });

    $(function () {

        $('.box-body .right .row').fadeTo('slow', 0);

        $('.btn-expand-wrp a').on('click', function () {
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //Slide Down
                $(this).addClass('btn-expand-down');

                //$(this).closest('.tab-box').find('.box-head .right-side').fadeTo('fast', 0);
                thisA.closest('.tab-box').parents('.card-content-wrp').addClass('on');

                $(this).closest('.tab-box').find('.box-body').slideDown('fast', function () {
                    thisA.closest('.tab-box').find('.box-head .right-side').fadeTo('slow', 0);
                });
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box');

            } else {
                //Slide Up
                $(this).removeClass('btn-expand-down');

                thisA.closest('.tab-box').find('.box-body').slideUp('slow', function () {
                    thisA.closest('.tab-box').find('.box-head .right-side').fadeTo('fast', 1);
                    thisA.closest('.tab-box ').parents('.card-content-wrp').removeClass('on');
                });

                $(this).closest('.tab-box ').find('.box-body').removeClass('active-box');

            }
            return false;
        });
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


    $('.cn-head').click(function () {
        var $that = $(this);

        if (!$that.hasClass('active')) {
            $that.addClass('active');
            $that.next('.cn-body').slideDown('fast');
            $that.find('.arrow-down').addClass('up');
        } else {
            $that.removeClass('active');
            $that.next('.cn-body').slideUp('fast');
            $that.find('.arrow-down').removeClass('up');
        }

    });
</script>

<!-- ===========================================================================
        Backend Script
============================================================================ -->

