// CardBox
// ----------------------
//  callback function
// ----------------------
// init: function(ele){}
// onExpand: function(ele){}
// onCollapse: function(ele){}
// onSlideDown: function(ele){}
// onSlideUp: function(ele){}

;(function ($) {

    $.fn.cardBox = function (options) {

        return this.each(function () {

            var opt = {
                init: null,
                onExpand: null,
                onCollapse: null,
                onSlideDown: null,
                onSlideUp: null
            };

            var _options = $.extend(opt, options);

            //init callback function goes here.
            if (_options.init) {
                _options.init.call(this, $(this));
            }

            $(this).find('.btn-expand-wrp a').on('click', function (evt) {

                evt.preventDefault();

                var self = $(this);
                var cardBoxWrap = self.parents('.card-content-wrp');

                if(!self.hasClass('btn-expand-down')) {
                    //callback function goes here
                    //for after arrow down click.
                    if (_options.onExpand) {
                        _options.onExpand.call(this, self);
                    }
                }else {
                    //for after arrow up click.
                    if (_options.onCollapse) {
                        _options.onCollapse.call(this, self);
                    }
                }

                if (!self.hasClass('btn-expand-down')) {

                    self.addClass('btn-expand-down');

                    cardBoxWrap.addClass('on');

                    cardBoxWrap.find('.box-body').slideDown('fast', function () {
                        //callback function goes here
                        //for after slide down.
                        if (_options.onSlideDown) {
                            _options.onSlideDown.call(this, self);
                        }

                    }).addClass('active-box');

                } else {
                    self.removeClass('btn-expand-down');

                    cardBoxWrap.find('.box-body').slideUp('slow', function () {
                        //callback function goes here
                        //for after slide Up.
                        if (_options.onSlideUp) {
                            _options.onSlideUp.call(this, self);
                        }

                        cardBoxWrap.removeClass('on');
                    }).removeClass('active-box');
                }
            });
        })
    }

})(jQuery);