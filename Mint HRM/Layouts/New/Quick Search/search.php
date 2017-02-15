<!--Quick Search-->
<div class="row">

    <div class="col-md-12 mb-15 selected-emp">
        <div class="emp-block mt-5 search-emp">
            <div class="img-border">
                <div class="img-wrp--35 ">
                    <?php echo Common::showEmployeeThumbnailx35(0); ?>
                </div>
            </div>
            <h5 class="u-name">Natasha Gunawardana</h5>
        </div>
    </div>

    <div class="col-md-12 sc-wrapper relative">
        <i class="ic_search"></i>
        <input class="input-search aprov" id="search_txt" name="search_txt" placeholder="Search"
               type="text">

        <div class="absolute-box">
            <div class="col-md-12">
                <ul class="sc-emp-list mt-0 approve-emp">
                    <li>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="emp-block mt-5 search-emp">
                                    <div class="img-border">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                        </div>
                                    </div>
                                    <h5 class="u-name">Natasha Perera</h5>
                                </div>
                            </div>
                            <h5 class="col-md-6 details mt-20">345</h5>
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="emp-block mt-5 search-emp">
                                    <div class="img-border">
                                        <div class="img-wrp--35 ">
                                            <?php echo Common::showEmployeeThumbnailx35(0); ?>
                                        </div>
                                    </div>
                                    <h5 class="u-name">Natasha Perera</h5>
                                </div>
                            </div>
                            <h5 class="col-md-6 details mt-20">345</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</div>


<script>

    //        $(document).on('click', function (evt) {
    //
    //            if ($(evt.target).parents().hasClass('absolute-box')
    //                || $(evt.target).hasClass('aprov')) {
    //                $('.absolute-box').fadeTo('fast', 1).show();
    //            } else {
    //                $('.absolute-box').fadeTo('fast', 0).hide();
    //            }
    //        });

    $('.aprov').keyup(function () {
        showBox($(this), function () {

        });
    });

    $('.aprov').click(function () {
        showBox($(this));
    });

    function showBox(ele, callback) {
        if ($(ele).val() !== '') {
            $('.absolute-box').fadeTo('fast', 1).show();
            callback();
        } else {
            $('.absolute-box').fadeTo('fast', 0).hide();
        }
    }

    //    $('.aprov').blur(function (evt) {
    //
    //        $('.absolute-box').fadeTo('fast', 0).hide();
    //    });

    $('.approve-emp li ').click(function () {

        var _thisParent = $(this).parents('.sc-wrapper');
        var imgSrc = $(this).find('img').attr('src');
        var name = $(this).find('.u-name').text();

        var selecting = _thisParent.prev('.selected-emp');
        selecting.find('img').attr('src', imgSrc);
        selecting.find('.u-name').text(name);

        $('.selected-emp').fadeTo('fast', 1);

        $('.absolute-box').fadeTo('fast', 0).hide();

    });

    //Search Box scroll
    $(".absolute-box").mCustomScrollbar({
        theme: 'dark-3',
//        scrollbarPosition: 'outside'
    });


</script>