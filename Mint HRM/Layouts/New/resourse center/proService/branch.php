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
        <div class="row mt-30 rm-m-30">
            <!--Map goes here-->
            <div class="col-md-7 p-lr-0">
                <div class="" id="map" style="background: #ccc;width: 100%;height: 480px;"></div>
                <div id="map" style="width:400px;height:400px;background:#ccc"></div>
            </div>

            <div class="col-md-5 pr-30">

                <div class="row form-row">
                    <div class="col-md-12 sm-search">
                        <span></span>
                        <input type="text" placeholder="Search" class="sm-search-box">
                    </div>
                </div>

                <div class="row ajax_load_here_branchNetwork">
                </div>

            </div>
        </div>
    </div>
</div>

