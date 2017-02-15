
<div class="ui_accordion">
    <a href="#id-content" class="ui-link">Professional Qualifications</a>
    <div id="id-content" class="ui-box-wrp">
        <!--Content-->
    </div>
</div>

<script>
    $('.ui-link').on('click', function () {
        if (!$(this).hasClass('active')) {
            $(this).addClass('active');
            $(this).nextAll('.ui-box-wrp').slideDown('slow').addClass('active');
            return false;
        } else {
            $(this).removeClass('active');
            $(this).nextAll('.ui-box-wrp').slideUp('slow').removeClass('active');
            return false;
        }
        return false;

    });

</script>