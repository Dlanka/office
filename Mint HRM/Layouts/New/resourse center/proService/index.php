<?php
//Pro Service view
//==============================================================================
//      CSS
//==============================================================================
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/resource/main.css', 'screen');

//==============================================================================
//      Plugins CSS
//==============================================================================
//==============================================================================
//      JS
//==============================================================================
// form
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);
//==============================================================================
//      Plugins JS
//==============================================================================
?>


<!--Breadcrumb-->
<div class="bread-crumb-wrp">
    <a href="#">Lorem Ipsum</a>
    <a>Lorem Ipsum is simply</a>
</div>

<div class="col-lg-12 contert-wrapper ">
    <div class="row">
        <div class="col-md-12 header-with-mn">
            <div class="row">
                <h1 class="col-md-11 title">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/system/icon/setting/32/ic_32_dashboard.svg"
                         alt="">
                    Pro Service
                </h1>
            </div>
        </div>

    </div>

    <div class="col-md-12 mt-30">
        <div class="row form-row">
            <div class="col-md-10 input-layout">
                <select name="" id="">
                    <option value=""></option>
                    <option value="a">Select</option>
                </select>
                <label for="">Select Prefix</label>
            </div>
            <div class="col-md-2">
                <button class="but upload fileUp"><span></span>Upload File</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 textarea-layout">
                <label for="">Description</label>
                <textarea></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <button class="bx-but bx-save">Save</button>
            </div>
        </div>
    </div>
</div>


<div class="col-md-12 mt-30 plr-0">
    <div class="row">
        <div class="col-md-3 sm-card-box">
            <div>
                <div class="sm-card-box-head">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </div>
                <div class="sm-card-box-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec,
                        mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor
                        sed.</p>

                    <div>
                        <button class="but downloads "><span></span>Download</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 sm-card-box">
            <div>
                <div class="sm-card-box-head">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </div>
                <div class="sm-card-box-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec,
                        mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor
                        sed.</p>

                    <div>
                        <button class="but downloads "><span></span>Download</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 sm-card-box">
            <div>
                <div class="sm-card-box-head">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </div>
                <div class="sm-card-box-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec,
                        mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor
                        sed.</p>

                    <div>
                        <button class="but downloads "><span></span>Download</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 sm-card-box">
            <div>
                <div class="sm-card-box-head">
                    <h3>Lorem ipsum dolor sit amet</h3>
                </div>
                <div class="sm-card-box-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec,
                        mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor
                        sed.</p>

                    <div>
                        <button class="but downloads "><span></span>Download</button>
                    </div>
                </div>
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

<!-- ===========================================================================
        Backend Script
============================================================================ -->
