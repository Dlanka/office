
<div class="edit-menu-wrapper">
    <div class="main-menu">
        <!--Row 1-->
        <div class="row-block">
            <a href="#sub1" class="sub-active">
                <div class="menu-item half" >
                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/system/icon/emp/32/menu/ic_32_demograpic.svg">
                    <span>Demographic</span>
                </div>
            </a>

            <a href="">
                <div class="menu-item full contact">
                    <img src="<?php echo Yii::app()->baseUrl; ?>/images/system/icon/emp/32/menu/ic_32_demograpic.svg">
                    <span>Ethnic</span>
                </div>
            </a>

        </div>

        <!--Row 2-->
        <div class="row-block"></div>   

        <!--Row 3-->
        <div class="row-block"></div>

    </div> <!-- End of main menu -->

    <div class="sub-menu">
        <!-- Payroll Sub Menu -->
        <div class="sub-panel" id="sub1">
            <ul class="sub-menu-item">
                <li><a href="">Province</a></li>
                <li><a href="">GN Division</a></li>
            </ul>
        </div>
    </div>
</div>


<!--Menu--> 
<script>
    $('#menu-ic').on('click', function () {
        var $this = $(this);
        $('.edit-menu-wrapper').slideToggle();

        if ($this.hasClass('open-menu')) {
            $this.removeClass('open-menu').addClass('close-menu');
            $('#menu-ic ul li:nth-child(2)').css('display', 'none');
            $('#menu-ic ul li:nth-child(1)').css({
                'margin': '0',
                'position': 'absolute',
                'top': '12px',
                '-ms-transform': 'rotate(45deg)',
                '-moz-transform': 'rotate(45deg)',
                'transform': 'rotate(45deg)',
                '-webkit-transition-duration': '0.5s',
                '-moz-transition-duration': '0.5s',
                '-o-transition-duration': '0.5s',
                'transition-duration': '0.5s'

            });
            $('#menu-ic ul li:nth-child(3)').css({
                'margin': '0',
                'position': 'absolute',
                'top': '12px',
                '-ms-transform': 'rotate(-45deg)',
                '-moz-transform': 'rotate(-45deg)',
                'transform': 'rotate(-45deg)',
                '-webkit-transition-duration': '0.5s',
                '-moz-transition-duration': '0.5s',
                '-o-transition-duration': '0.5s',
                'transition-duration': '0.5s'

            });
        } else {
            $this.removeClass('close-menu').addClass('open-menu');
            $('#menu-ic ul li:nth-child(1)').css({
                'margin': '5px 0',
                'position': 'inherit',
                'top': 'inherit',
                '-ms-transform': 'rotate(0deg)',
                '-moz-transform': 'rotate(0deg)',
                'transform': 'rotate(0deg)',
                '-webkit-transition-duration': '0.5s',
                '-moz-transition-duration': '0.5s',
                '-o-transition-duration': '0.5s',
                'transition-duration': '0.5s'

            });
            $('#menu-ic ul li:nth-child(3)').css({
                'margin': '5px 0',
                'position': 'inherit',
                'top': 'inherit',
                '-ms-transform': 'rotate(0deg)',
                '-moz-transform': 'rotate(0deg)',
                'transform': 'rotate(0deg)',
                '-webkit-transition-duration': '0.5s',
                '-moz-transition-duration': '0.5s',
                '-o-transition-duration': '0.5s',
                'transition-duration': '0.5s'

            });
            $('#menu-ic ul li:nth-child(2)').css('display', 'block');
        }
    });

    // Menu Tab
    $('.main-menu a').on('click', function () {
        //console.log('sdsdsd');
        var $this = $(this);
        if ($this.hasClass('sub-active')) {
            $('.edit-menu-wrapper').css({
                'width': '70%',
                '-webkit-transition-duration': '0.2s',
                '-moz-transition-duration': '0.2s',
                '-o-transition-duration': '0.2s',
                'transition-duration': '0.2s'
            });
            $('.edit-menu-wrapper .main-menu').css('width', '70%');
            $('.sub-menu').show();
            $('.sub-panel').hide();
            var panel = $this.attr('href');
            $(panel).fadeIn(200);
            return(false);
        } else {
            $('.edit-menu-wrapper').css({
                'width': '49%',
                '-webkit-transition-duration': '0.2s',
                '-moz-transition-duration': '0.2s',
                '-o-transition-duration': '0.2s',
                'transition-duration': '0.2s'
            });
            $('.edit-menu-wrapper .main-menu').css('width', '100%');
            $('.sub-menu').hide();
        }
    });

</script>