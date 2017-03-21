<?php

//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');
// Time picker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/clockpicker/bootstrap-clockpicker.css', 'screen');


//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
//popup
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/popup.css', 'screen');
// Recruitment Common
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/leave/calender.css', 'screen');

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
// Time picker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/clockpicker/bootstrap-clockpicker.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<!--Pop up modal-->
<div class="modal fade" id="cln_modal" tabindex="-1" role="dialog">
    <div class="modal-dialog size-60">
        <div class="modal-content popup ">
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
                <h4 class="modal-title">Leave </h4>
            </div>
            <div class="modal-body pb-0 ">
                <div class="row mt-20">
                    <div class="col-md-12">
                        <div class="col-md-12 line_tab_wrp">
                            <ul class="line_tab">
                                <li class="active"><a href="#approved">Approved<span class="count approved ml-20">20</span></a></li>
                                <li><a href="#pending">Pending<span class="count ml-20 pending">12</span></a></li>
                                <li><a href="#rejected">Rejected <span class="count ml-20 rejected">5</span></a></li>
                            </ul>
                            <div class="line_tab_content pt-30 pb-30">
                                <div class="tab-items active" id="approved">
                                   <ul class="em-list h-300 scroll-list">
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                       <li>
                                           <div class="table-block cell-width-100">
                                               <div class="cell zero-width">
                                                   <div class="img-wrp--35">
                                                       <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                   </div>
                                               </div>
                                               <div class="cell pl-15">
                                                   <h5 class="details">Natasha Guanawardana</h5>
                                               </div>
                                           </div>
                                       </li>
                                   </ul>
                                </div>
                                <div class="tab-items" id="pending">
                                    <ul class="em-list h-300 scroll-list">

                                    </ul>
                                </div>

                                <div class="tab-items" id="rejected">
                                    <ul class="em-list h-300 scroll-list">
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="table-block cell-width-100">
                                                <div class="cell zero-width">
                                                    <div class="img-wrp--35">
                                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                    </div>
                                                </div>
                                                <div class="cell pl-15">
                                                    <h5 class="details">Natasha Guanawardana</h5>
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
            <div class="modal-footer pb-15">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <button type="button" class="bx-but bx-exit btnCloseModal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contert-wrapper mb-30 pb-30">

    <div class="col-md-12 header-with-mn">
        <h1 class="title">
            Leave Calender
        </h1>
    </div>

    <div class="col-md-12">

        <div class="col-md-12">

            <div class="row">

                <div class="col-md-12 mb-30">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-8">
                            <div class="row">
                                <div class="col-md-7">
                                    <select class="big-select" name="" id="">
                                        <option value="1">January</option>
                                        <option value="1">February</option>
                                        <option value="1">Match</option>
                                    </select>
                                </div>

                                <div class="col-md-5">
                                    <select class="big-select" name="" id="">
                                        <option value="1">2017</option>
                                        <option value="1">2018</option>
                                        <option value="1">2019</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="calender-container">
                        <div class="day-container">
                            <div class="day">Sun</div>
                            <div class="day">Mon</div>
                            <div class="day">Tue</div>
                            <div class="day">Wed</div>
                            <div class="day">Thu</div>
                            <div class="day">Fri</div>
                            <div class="day">Sat</div>
                        </div>
                        <div class="date-container">
                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">29</span>
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Holiday</h6>
                                </div>
                            </div>
                            <div class="date disable">
                                <div class="header">
                                    <span class="num">30</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date disable">
                                <div class="header">
                                    <span class="num">31</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">1</span>
                                </div>
                                <div class="content">
                                    <div class="emp-list-container mt-15">
                                        <div data-list-limit="8" class="emp-list-wrp emp-list-sm">
                                            <div class="emp-list" id="emp_1">
                                                <div class="img-wrp--20">
                                                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                </div>
                                                <div class="tip tip-emp-name">Nirmal Fernando</div>
                                            </div>
                                            <div class="emp-list" id="emp_1">
                                                <div class="img-wrp--20">
                                                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                </div>
                                                <div class="tip tip-emp-name">Nirmal Fernando</div>
                                            </div>
                                            <div class="emp-list" id="emp_1">
                                                <div class="img-wrp--20">
                                                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                </div>
                                                <div class="tip tip-emp-name">Nirmal Fernando</div>
                                            </div>
                                            <div class="emp-list" id="emp_1">
                                                <div class="img-wrp--20">
                                                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                </div>
                                                <div class="tip tip-emp-name">Nirmal Fernando</div>
                                            </div>
                                            <div class="emp-list" id="emp_1">
                                                <div class="img-wrp--20">
                                                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                </div>
                                                <div class="tip tip-emp-name">Nirmal Fernando</div>
                                            </div>
                                            <div class="emp-list" id="emp_1">
                                                <div class="img-wrp--20">
                                                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                </div>
                                                <div class="tip tip-emp-name">Nirmal Fernando</div>
                                            </div>
                                            <div class="emp-list" id="emp_1">
                                                <div class="img-wrp--20">
                                                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                </div>
                                                <div class="tip tip-emp-name">Nirmal Fernando</div>
                                            </div>
                                            <div class="emp-list" id="emp_1">
                                                <div class="img-wrp--20">
                                                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                                </div>
                                                <div class="tip tip-emp-name">Nirmal Fernando</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">2</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">3</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">4</span>
                                </div>
                                <div class="content"></div>
                            </div>

                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">5</span>
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Holiday</h6>
                                </div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">6</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">7</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">8</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">9</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">10</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">11</span>
                                </div>
                                <div class="content"></div>
                            </div>

                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">12</span>
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Holiday</h6>
                                </div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">13</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">14</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">15</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">16</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">17</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">18</span>
                                </div>
                                <div class="content"></div>
                            </div>

                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">19</span>
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Holiday</h6>
                                </div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">20</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">21</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">22</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">23</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">24</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">25</span>
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Poya Day</h6>
                                </div>
                            </div>

                            <div class="date holiday">
                                <div class="header">
                                    <span class="num">26</span>
                                </div>
                                <div class="content">
                                    <h6 class="mt-5 lb-holiday-type">Holiday</h6>
                                </div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">27</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">28</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">29</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date">
                                <div class="header">
                                    <span class="num">30</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date disable">
                                <div class="header">
                                    <span class="num">1</span>
                                </div>
                                <div class="content"></div>
                            </div>
                            <div class="date disable">
                                <div class="header">
                                    <span class="num">2</span>
                                </div>
                                <div class="content"></div>
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
    //Holiday scroll bar
    $(".holiday-scroll").mCustomScrollbar({
        theme: 'dark-3',
//        scrollbarPosition: 'outside'
    });

    $(".scroll-list").mCustomScrollbar({
        theme: 'dark-3',
//        scrollbarPosition: 'outside'
    });



</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->
<script>

    $('.date-container .date').on('click', function () {

        //popup show here
        $('#cln_modal').modal('show');
    });

    $('.btnCloseModal').click(function () {
        $('#cln_modal').modal('hide');
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

