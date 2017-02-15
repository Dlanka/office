<?php
//==============================================================================
//      CSS 
//==============================================================================
// Form
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/form.css', 'screen');
// Accrodion
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/custom/accordion.css', 'screen');
// Setting 
Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/setting/main.css', 'screen');


//==============================================================================
//      Plugins CSS 
//==============================================================================
//==============================================================================
//      JS 
//==============================================================================
// form 
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/custom/form.js', CClientScript::POS_HEAD);
//Text Edior
Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/plugins/nicEdit/nicEdit.js', CClientScript::POS_HEAD);
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
                <h1 class="col-md-11 title"><img src="<?php echo Yii::app()->baseUrl; ?>/images/system/icon/emp/32/ic_32_demograpic.svg">Mail Template</h1>

                <div class="col-md-1">
                    <!--Bar Menu-->
                    <div id="menu-ic" class="open-menu">
                        <ul>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>                  
                </div>
            </div>
        </div>

        <!--Sub menu container-->
        <?php //$this->renderPartial('subMenu', array());  ?>

    </div>

    <div class="col-md-12 mt-30">
        <div class="row">

            <div class="col-md-12">
                <?php
                $email_content_leave = EmailContent::model()->findAll("email_type='1'");
                foreach ($email_content_leave as $email_content) {
                    ?>
                    <!--Province-->
                    <div class="ui_accordion">
                        <a href="<?php echo $email_content->id; ?>" class="ui-link"><?php echo $email_content->content_type; ?></a>
                        <div  class="ui-box-wrp">
                            <div class="row mt-15" id="ajax_load_here_<?php echo $email_content->id; ?>">

                            </div>
                        </div>
                    </div>

                <?php } ?>   

                <!--Religion-->


                <!--Police Station-->


                <!--GN Division-->


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
<!--Accordion-->
<script>

    $('.ui-link').on('click', function () {
        if (!$(this).hasClass('active-link')) {
            $(this).addClass('active-link');
            $(this).nextAll('.ui-box-wrp').slideDown('slow').addClass('active');

            ajaxDataLoad($(this).attr('href'));
            return false;
        } else {
            $('form-wrp').children().remove();
            $(this).removeClass('active-link');
            $(this).nextAll('.ui-box-wrp').slideUp('slow').removeClass('active');
            return false;
        }
        return false;

    });
    function ajaxDataLoad(id) {
        displayLoader("#ajax_load_here_" + id);
        var extraData = "&id=" + id;
        sendData('', extraData, 'Setting/viewDataMailTemplate', function (res) {
            $("#ajax_load_here_" + id).html(res);
        });

    }
    function editMailTemplate(id) {
        var extraData = "&email_content=" + $('#email_content' + id).val() + "&email_subject=" + $('#email_subject' + id).val() + "&email_status=" + $('#email_status' + id).val() + "&id=" + id;
        showInfoMessage(id);
        sendData('', extraData, 'setting/EditMailTemplate', function (res) {
            var obj = jQuery.parseJSON(res);
            if (obj.code == 200) {


                showSuccessMessage(obj.msg, id);
            } else {
                showErrorMessage(obj.msg, id);
            }
        });
    }

</script>

<!-- ===========================================================================
        Backend Script 
============================================================================ -->
