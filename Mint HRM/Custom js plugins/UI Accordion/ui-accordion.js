// CMAccordion
// ----------------------
//  callback function
// ----------------------
// onClick: function(ele){}
// onSlideDown: function(ele){}
// onSlideUp: function(ele){}

;(function ($) {

    $.fn.CMAccordion = function (type, options) {

        if (!type)
            return;

        var classObj = {wrapper: '', linkClass: '', boxClass: ''};

        if (type === 'black') {
            classObj = {wrapper: '.ui_accordion', linkClass: '.ui-link', boxClass: '.ui-box-wrp'};
        } else if (type === 'red') {
            classObj = {wrapper: '.ui-sm-accordion', linkClass: '.ui-sm-link', boxClass: '.ui-sm-box-wrp'};
        }

        _accordionSetup(this);

        function _accordionSetup(ele) {
            return ele.each(function () {

                var _options = {
                    onClick: null,
                    onSlideDown: null,
                    onSlideUp: null
                };

                var opt = $.extend(_options, options);

                $(this).find(classObj.linkClass).on('click', function (evt) {

                    evt.preventDefault();

                    (function (_self) {
                        var self = _self;

                        if (self.hasClass('active-link')) {

                            self.removeClass('active-link');
                            self.nextAll(classObj.boxClass).slideUp('slow', function () {

                                if (opt.onSlideUp) {
                                    opt.onSlideUp.call(this, self);
                                }

                            }).removeClass('active');


                        } else {

                            // Callback function for onClick.
                            if (opt.onClick) {
                                opt.onClick.call(this, self);
                            }

                            self.addClass('active-link');
                            self.nextAll(classObj.boxClass).slideDown('slow', function () {

                                if (opt.onSlideDown) {
                                    opt.onSlideDown.call(this, self);
                                }

                            }).addClass('active');

                        }

                    })($(this));

                });

            });
        }
    }

})(jQuery);