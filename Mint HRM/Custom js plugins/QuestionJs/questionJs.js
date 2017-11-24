;
    (function ($) {
        $.fn.QuestionJs = function (options) {

            var currentEle = null;

            this.next = function () {
                currentEle.goToNext();
            };

            return this.each(function () {
                var _this = $(this),
                    _parent = _this.parent(),
                    iScrollPos = 0,
                    initialScroll = 0,
                    scrollTo = '';

                var activatablePosition = 0;
                var itemPositionArray = [];
                var scrollTopVal = 0;

                currentEle = _this;

                var defaultOpt = {
                    top: 0,
                    bottom: 0,
                    height:400
                };

                _this.fadeTo(0, 0);

                var _opt = $.extend(defaultOpt, options);

                _this.parent().height(_opt.height);

                var getScreenHeight = function () {
                    return _this.parent().height();
                };

                var calTopSpaceByScreen = function () {
                    return getScreenHeight() * (1 / 4);
                };

                var calActivatablePosition = function () {
                    activatablePosition = _this.offset().top;
                };

                initialScroll = _opt.top ? _opt.top : calTopSpaceByScreen();

                var setItemPosition = function () {
                    itemPositionArray = [];

                    _this.find('li.item').each(function () {
                        var activePos = $(this).offset().top - activatablePosition;
                        itemPositionArray.push({
                            id: $(this).attr('id'),
                            position: activePos,
                            origin: ($(this).position().top),
                            bound: $(this)[0].getBoundingClientRect()
                        });
                    });
                };


                function definedMargin() {
                    var top = _opt.top ? _opt.top : calTopSpaceByScreen();
                    var bottom = _opt.bottom ? _opt.bottom : (calTopSpaceByScreen() + (calTopSpaceByScreen() * 1 / 4));

                    _this.css('margin-top', top + 'px');
                    _this.css('margin-bottom', bottom + 'px');
                }

                function init() {

                    _this.fadeTo('slow', 1);

                    _this.find('li.item').each(function (i) {
                        $(this).attr('id', 'index' + i);
                    });

                    _this.find('li.item:first').addClass('focus');

                    _parent.animate({'scrollTop': initialScroll}, 500);

                }

                function updateUI() {

                    function findItem(data) {
                        return Math.floor(data.position) <= scrollTopVal && scrollTopVal < Math.floor(data.origin);
                    }

                    var data = itemPositionArray.filter(findItem)[0];

                    if (!data)
                        return;

                    if (scrollTo === "DOWN") {

                        _this.find('#' + data.id).prev('li').removeClass('focus');

                        if (!_this.find('#' + data.id).prev('li').hasClass('focus')) {
                            _this.find('#' + data.id).addClass('focus');
                        }

                    } else if (scrollTo === "UP") {
                        _this.find('#' + data.id).next('li').removeClass('focus');

                        if (!_this.find('#' + data.id).next('li').hasClass('focus')) {
                            _this.find('#' + data.id).addClass('focus');
                        }

                    }
                }

                // Callback function for 'Next' item
                currentEle.goToNext = function () {
                    var nextEle = _this.find('li.focus').next();

                    if (!nextEle.is('li'))
                        return;

                    var nextFocusEle = nextEle.attr('id');

                    function isFound(ele, index, arr) {
                        if (ele.id === nextFocusEle) {
                            return arr[index];
                        }
                    }

                    var pos = itemPositionArray.filter(isFound)[0];
                    var posDiff = pos.position;

                    _parent.animate({'scrollTop': (posDiff + initialScroll)}, 500);
                    updateUI();
                };

                $(window).bind('load', function () {
                    init();
                    definedMargin();
                    calActivatablePosition();
                    setItemPosition();
                    updateUI();

                });

                $(window).bind('resize', function () {
                    definedMargin();
                    setItemPosition();
                    calActivatablePosition();
                    updateUI();
                });

                _parent.bind('scroll', function () {
                    scrollTopVal = $(this).scrollTop();

                    if (scrollTopVal > iScrollPos) {
                        scrollTo = "DOWN";
                    } else {
                        scrollTo = "UP";
                    }
                    iScrollPos = scrollTopVal;

                    calActivatablePosition();
                    updateUI();

                });

            });

        };
    })(jQuery);