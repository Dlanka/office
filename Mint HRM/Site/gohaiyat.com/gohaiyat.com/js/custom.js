$('document').ready(function () {

    $(window).bind('load resize', function () {
        $(".ul-menu").mCustomScrollbar({
            theme: "minimal"
        });
    });

    //tab
    $('.tabs li a').click(function () {
        var $this = $(this);
        $('.tab-panel').hide();
        $('.tabs a.active-tab').removeClass('active-tab');
        $this.addClass('active-tab');
        var panel = $this.attr('href');
        $(panel).fadeIn(50);
        return(false);
    }); // end click


    $('.tabs li a').click(function () {

        var $this = $(this);

        $('.tabs li a').removeClass('active-curcle');
        $this.addClass('active-curcle');

        //$('.tabs li a').css('color', 'rgba(51,51,51,0.56)');
        //$this.css('color', 'rgba(51,51,51,0.86)');
        var id = $this.attr('id');

        ///alert(id);
        $('.tabs li a .tab-icon').css('background-position', '0 0px');
        $('.tabs li a .icon-' + id).css('background-position', '0 30px');

    });

    $('.tab-progm a').on('click', function () {
        var $this = $(this);
        $('.tab-panel').hide();
        $('.tabs a.active-tab').removeClass('active-tab');
        $this.addClass('active-tab');

        //$('.tab-progm a').css('border-left','1px solid #E6E6E6');
        //$this.css('border-left','transparent');
        var panel = $this.attr('href');
        $(panel).fadeIn(50);
        return(false);
    });

//    Main menu button event
    $('.btn-close').click(function () {
        $('.menu').slideUp();
    });
    $('#btn-menu').click(function () {
        $('.menu').slideDown('slow');
    });
    $('#sub').click(function () {

        if (!$(this).find('.sub-menu').hasClass('on')) {
            $(this).find('.sub-menu').addClass('on');
            $(this).find('.sub-menu').slideDown('slow');
        } else {
            $(this).find('.sub-menu').removeClass('on');
            $(this).find('.sub-menu').slideUp('slow');
        }

    });

//    sub menu arrow animation
    $('ul li#sub a').click(function () {
        if ($('.btn-arrows').hasClass('arw-up')) {
            $('.btn-arrows').removeClass('arw-up');
        } else {
            $('.btn-arrows').addClass('arw-up');
        }
    });



    $('.tabs li:first a').click();
    //testimonial slider

    //testimonial slider    
    $('.carousel').carousel({
        interval: 8000
    })

//    //main slider    
//    $('.slider').glide({
//        autoplay: 5000,
//        arrows: 'body',
//        navigation: 'body'
//    });

//    set header name and title
    $('.header-h1 > span.red').html('Goh ai yat');
    $('html  title').html('Goh Ai Yat');


    // set copyright year
   $('footer p > span.gray').text(new Date().getFullYear());
});

