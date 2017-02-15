<?php
$sec_id = '';

//==============================================================================
//      CSS
//==============================================================================
//Form
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
//datepicker
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/airDatepicker/datepicker.css', 'screen');
//Advance Search
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/search-adv.css', 'screen');
//Main
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/incidenceDiary/style.css', 'screen');
//==============================================================================
//      Plugins CSS
//==============================================================================
// mScroll Bar
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/plugins/mScrollbar/jquery.mCustomScrollbar.min.css', 'screen');

//==============================================================================
//      JS
//==============================================================================
//Form
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);

//==============================================================================
//      Plugins JS
//==============================================================================
//datepicker
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/datepicker.min.js', CClientScript::POS_HEAD);
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/airDatepicker/i18n/datepicker.en.js', CClientScript::POS_HEAD);
// mScroll Bar
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/mScrollbar/jquery.mCustomScrollbar.concat.min.js', CClientScript::POS_HEAD);

?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Admin</a>
    <a>Critical Incident Diary</a>
</div>


<div class="contert-wrapper mb-30 pb-15">

    <div class="col-md-12 header-with-mn">
        <h1 class="title">Critical Incidence Dairy</h1>
    </div>


    <div class="col-md-12 mt-30">

        <div class="col-md-12">
            <div class="row">

                <div class="col-md-7">
                    <div class="row">

                        <!--After Search-->
                        <div class="col-md-6">
                            <div class="emp-block mt-5 search-emp">
                                <div class="img-border">
                                    <div class="img-wrp--35 ">
                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                    </div>
                                </div>
                                <h5 class="u-name">Natasha Gunawardana</h5>
                            </div>
                        </div>
                        <h5 class="pl-0 col-md-6 details mt-15">345</h5>

                    </div>

                    <!-- Search Area-->
                    <div class="row mt-15">
                        <div class="col-md-12 sc-wrapper">
                            <i class="ic_search"></i>
                            <input type="text" class="input-search">
                        </div>
                    </div>

                    <!-- Emp list-->
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="sc-emp-list">
                                <li>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                </div>
                                                <h5 class="u-name">Natasha Gunawardana</h5>
                                            </div>
                                        </div>
                                        <h5 class="col-md-6 details mt-15">345</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                </div>
                                                <h5 class="u-name">Natasha Gunawardana</h5>
                                            </div>
                                        </div>
                                        <h5 class="col-md-6 details mt-15">345</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                </div>
                                                <h5 class="u-name">Natasha Gunawardana</h5>
                                            </div>
                                        </div>
                                        <h5 class="col-md-6 details mt-15">345</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                </div>
                                                <h5 class="u-name">Natasha Gunawardana</h5>
                                            </div>
                                        </div>
                                        <h5 class="col-md-6 details mt-15">345</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                </div>
                                                <h5 class="u-name">Natasha Gunawardana</h5>
                                            </div>
                                        </div>
                                        <h5 class="col-md-6 details mt-15">345</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="emp-block mt-5 search-emp">
                                                <div class="img-border">
                                                    <div class="img-wrp--35 ">
                                                        <?php echo Common::showEmployeeThumbnailx35(1) ?>
                                                    </div>
                                                </div>
                                                <h5 class="u-name">Natasha Gunawardana</h5>
                                            </div>
                                        </div>
                                        <h5 class="col-md-6 details mt-15">345</h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6 input-layout">
                            <input type="text" class="datepick">
                            <label for="">Date</label>
                        </div>

                        <div class="col-md-12 textarea-layout">
                            <label>Reason</label>
                            <textarea class="textarea-100" name="" id="" cols="30" rows="10"></textarea>
                        </div>

                        <div class="col-md-12">
                            <div class="row mt-20">
                                <h6 class="title col-md-12 mb-15">Mark</h6>
                                <div class="col-md-2 mt-2 radio-btn-wrp">
                                    <input type="radio" name="leaveAction_1"
                                           id="leaveAction_1" class="rd-plus hide" value="1" checked="checked">
                                    <input type="radio" name="leaveAction_1"
                                           id="leaveAction_1" class="rd-minus hide" value="2">

                                    <button class="adj_btn" type="button">
                                        <span></span>
                                        <span></span>
                                    </button>

                                </div>
                                <div class="col-md-7 ">
                                    <div class="marks-block">
                                        <div class="mark-wrp">
                                            <div class="mark">1</div>
                                            <input name="mark" type="radio">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">2</div>
                                            <input name="mark" type="radio">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark select">3</div>
                                            <input name="mark" type="radio">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">4</div>
                                            <input name="mark" type="radio">
                                        </div>
                                        <div class="mark-wrp">
                                            <div class="mark">5</div>
                                            <input name="mark" type="radio">
                                        </div>
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

<div class="row mb-30">
    <div class="col-md-12">
        <div class="contert-wrapper sc-wrp">
            <div class="search-wrp set-3">

                <div class="search-group active ">
                    <div>
                        <div class="item"><select name="" id="">
                                <option value="">Designation</option>
                                <option value="1">PHP Developer</option>
                                <option value="1">Android Developer</option>
                            </select></div>
                        <div class="item"><input type="text" placeholder="Search"></div>
                        <div class="item">
                            <button class="btn-search" type="button" onclick=""></button>
                        </div>
                    </div>
                    <a class="advace" href="#">Advance</a>
                </div>

                <div class="exp-wrp">
                    <a class="top-exp" href="#"></a>
                </div>

                <div class="view-box">
                    <div class="row ad-search">
                        <div class="col-md-4">
                            <label for="">Text</label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <button class="ad-search">Search</button>
                        </div>
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
                    <div class="col-md-12">
                        <div class="left-b col-md-4">

                            <div class="table-block">
                                <div class="cell zero-width">
                                    <div class="img-wrp--35">
                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                    </div>
                                </div>
                                <div class="cell pl-15">
                                    <h5 class="u-name low-case">
                                        Sandun Maduranga
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="right-side col-md-4 mt-10">
                            <h5 class="details low-case">
                                PHP Developer
                            </h5>

                        </div>
                        <div class="right-side col-md-4 mt-5">
                            <h5 class="details">
                                <i class="ic_24 good"></i>
                                <span>33</span>
                            </h5>
                        </div>
                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body pt-20">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">

                                        <h5 class="col-md-12 details mb-30">
                                            <i class="ic_24 good"></i>
                                            <span class="up-case">Positive</span>
                                        </h5>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">12 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>

                                                <!-- Final Result-->
                                                <div class="row-data">
                                                    <div class="col-md-5 col-md-offset-7">
                                                        <h4 class="result good text-right ">
                                                            <span>Toatal</span>
                                                            <span>60</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">

                                        <h5 class="col-md-12 details mb-30">
                                            <i class="ic_24 bad"></i>
                                            <span class="up-case">Negative</span>
                                        </h5>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">12 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>

                                                <!-- Final Result-->
                                                <div class="row-data">
                                                    <div class="col-md-5 col-md-offset-7">
                                                        <h4 class="result bad text-right ">
                                                            <span>Total</span>
                                                            <span>60</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="card-content-wrp">

            <div class="tab-box">
                <div class="box-head">
                    <div class="col-md-12">
                        <div class="left-b col-md-4">

                            <div class="table-block">
                                <div class="cell zero-width">
                                    <div class="img-wrp--35">
                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                    </div>
                                </div>
                                <div class="cell pl-15">
                                    <h5 class="u-name low-case">
                                        Natsha Gunawardana
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="right-side col-md-4 mt-10">
                            <h5 class="details low-case">
                                PHP Developer
                            </h5>

                        </div>
                        <div class="right-side col-md-4 mt-5">
                            <h5 class="details">
                                <i class="ic_24 bad"></i>
                                <span>54</span>
                            </h5>
                        </div>
                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body pt-20">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">

                                        <h5 class="col-md-12 details mb-30">
                                            <i class="ic_24 good"></i>
                                            <span class="up-case">Positive</span>
                                        </h5>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">12 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>

                                                <!-- Final Result-->
                                                <div class="row-data">
                                                    <div class="col-md-5 col-md-offset-7">
                                                        <h4 class="result good text-right ">
                                                            <span>Total</span>
                                                            <span>60</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">

                                        <h5 class="col-md-12 details mb-30">
                                            <i class="ic_24 bad"></i>
                                            <span class="up-case">Negative</span>
                                        </h5>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">12 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>

                                                <!-- Final Result-->
                                                <div class="row-data">
                                                    <div class="col-md-5 col-md-offset-7">
                                                        <h4 class="result bad text-right ">
                                                            <span>Total</span>
                                                            <span>60</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="card-content-wrp">

            <div class="tab-box">
                <div class="box-head">
                    <div class="col-md-12">
                        <div class="left-b col-md-4">

                            <div class="table-block">
                                <div class="cell zero-width">
                                    <div class="img-wrp--35">
                                        <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                    </div>
                                </div>
                                <div class="cell pl-15">
                                    <h5 class="u-name low-case">
                                        Sandun Maduranga
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="right-side col-md-4 mt-10">
                            <h5 class="details low-case">
                                PHP Developer
                            </h5>

                        </div>
                        <div class="right-side col-md-4 mt-5">
                            <h5 class="details">
                                <i class="ic_24 good"></i>
                                <span>33</span>
                            </h5>
                        </div>
                    </div>
                    <div class="btn-expand-wrp">
                        <a class="btn-expand" href="#"></a>
                    </div>
                </div>

                <div class="box-body pt-20">
                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">

                                        <h5 class="col-md-12 details mb-30">
                                            <i class="ic_24 good"></i>
                                            <span class="up-case">Positive</span>
                                        </h5>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">12 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>

                                                <!-- Final Result-->
                                                <div class="row-data">
                                                    <div class="col-md-5 col-md-offset-7">
                                                        <h4 class="result good text-right ">
                                                            <span>Total</span>
                                                            <span>60</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">

                                        <h5 class="col-md-12 details mb-30">
                                            <i class="ic_24 bad"></i>
                                            <span class="up-case">Negative</span>
                                        </h5>

                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">12 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>
                                                <div class="row-data">
                                                    <h5 class="col-md-3 details">15 Jan 2017</h5>
                                                    <h5 class="col-md-7 details">Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit</h5>
                                                    <h5 class="col-md-2 details text-right">3</h5>
                                                </div>

                                                <!-- Final Result-->
                                                <div class="row-data">
                                                    <div class="col-md-5 col-md-offset-7">
                                                        <h4 class="result bad text-right ">
                                                            <span>Total</span>
                                                            <span>60</span>
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
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
<script>

    $(".sc-emp-list").mCustomScrollbar({
        theme: "dark-3"
    });

    $('.datepick').datepicker({
        language: 'en',
        autoClose: true
    });

    //    $('.datepick').datepicker({
    //        language: 'en',
    //        autoClose: true,
    //        view:'years',
    //        dateFormat:'yyyy',
    //        minView:'years'
    //    });
</script>
<!-- ===========================================================================
        Custom Script
============================================================================ -->
<script>
    // Marks
    $('.mark-wrp .mark').click(function () {
        var parentLi = $(this).parents('.marks-block');

        parentLi.find('.mark').removeClass('select');
        $(this).addClass('select');
        $(this).next('input[type=radio]').prop('checked', true);
    });


    $('.radio-btn-wrp .adj_btn').click(function () {
        var $parent = $(this).parents('.radio-btn-wrp');
        if ($parent.find('.rd-plus').is(':checked')) {
            $parent.find('.rd-plus').prop('checked', false);
            $parent.find('.rd-minus').prop('checked', true);
        } else {
            $parent.find('.rd-plus').prop('checked', true);
            $parent.find('.rd-minus').prop('checked', false);
        }
    });

    $(function () {


        $('.btn-expand-wrp a').on('click', function () {
            var thisA = $(this);
            if (!$(this).hasClass('btn-expand-down')) {
                //silde Down
                $(this).addClass('btn-expand-down');
                $(this).closest('.tab-box').parent('.card-content-wrp').addClass('on');
                $(this).closest('.tab-box').find('.box-body').slideDown('slow');
                $(this).closest('.tab-box').find('.box-head .right-side').fadeTo('slow', 0);
                $(this).closest('.tab-box ').find('.box-body').addClass('active-box').fadeTo('fast', 1);

            } else {
                //               Slide Up
                $(this).removeClass('btn-expand-down');
                $(this).closest('.tab-box').parent('.card-content-wrp').removeClass('on');
                $(this).closest('.tab-box').find('.box-body').slideUp('slow');
                $(this).closest('.tab-box').find('.box-head .right-side').fadeTo('slow', 1);
                $(this).closest('.tab-box ').find('.box-body').removeClass('active-box');

            }
            return false;
        });
    });

    //Advance Search
    $(function () {
        $(function () {
            $('.top-exp').click(function () {
                if ($('.view-box').hasClass('active')) {
                    $('.view-box').fadeOut(function () {
                        $(this).css('visibility', 'hidden');
                        $(this).slideUp(function () {
                            $(this).removeClass('active');
                            $('.exp-wrp').removeClass('active');
                            $('.top-exp').css('display', 'none');
                            //$('.search-group').addClass('active');
                            $('.search-group').fadeIn('fast').css({'visibility': 'visible', 'display': 'block'});
                        });
                    });
                    return false;
                }
                return false;
            });

            $('.advace').click(function () {
                $('.search-group').fadeOut(function () {
                    $('.view-box').slideDown(function () {
                        $(this).css('visibility', 'visible');
                        $(this).addClass('active');
                        $('.exp-wrp').addClass('active');
                    });
                    $('.top-exp').css('display', 'inline-block');
                    $(this).css('visibility', 'hidden');
                    $(this).removeClass('active');
                    return false;
                });
                return false;
            });
        });
    });


</script>
<!-- ===========================================================================
        Backend Script
============================================================================ -->

