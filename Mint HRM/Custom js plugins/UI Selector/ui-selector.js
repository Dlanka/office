;(function ($) {
        $.fn.UISelect = function (options) {

            var fadeOutTime = 100;

            var _options = {
                maxHeight: 210,
                onClick: null,
                onSelect: null
            };
            var _opt = $.extend(_options, options);

            return this.each(function () {
                var $this = $(this);
                var _eleTop = null;

                var $ui_selector = $('<div class="ui-selector ui-enable"></div>');
                var $ui_selector_top = $('<div class="ui-selector-top"></div>');
                var $ui_selector_bottom = $('<div class="ui-selector-bottom"></div>');

                var getOptionsList = function () {
                    var $ul = $('<ul></ul>');

                    $this.find('option').each(function (index) {
                        var _this = $(this);

                        if(_this.text() === '' || _this.text() ===null)
                            return;

                        var $li = $('<li></li>');

                        if (_this.is(':selected')) {
                            $li.addClass('selected');
                        }
                        $li.attr('data-val', _this.val()).text(_this.text());
                        $li.attr('data-index', index);
                        $ul.append($li);
                    });

                    return $ul;
                };

                var selectedItem = function () {
                    return {
                        val: $this.find('option:selected').val(),
                        text: $this.find('option:selected').text()
                    };
                };

                var getLabel = function () {
                    if ($this.data('label'))
                        return $this.data('label');
                };

                //Update select options value
                function updateOptions(ele) {
                    var uiSelect = ele.parents('.ui-selector');
                    var selectedVal = uiSelect.find('select').val();
                    uiSelect.find('.ui-selector-bottom li').removeClass('selected');
                    uiSelect.find('.ui-selector-bottom li[data-val="' + selectedVal + '"]').addClass('selected');
                }

                function UIBuild() {

                    var $innerTopText = $('<div class="text"><span class="selected"></span><span class="icon"><i></i></span></div>');
                    var $innerTopLabel = $('<span class="text-label"><span class="t-label"></span><span class="required"></span></span>');

                    $innerTopText.find('span.selected').text(selectedItem().text).attr('data-val', selectedItem().val);

                    $innerTopLabel.find('.t-label').text(getLabel());

                    if(!$this.hasClass('required')) {
                        $innerTopLabel.find('.required').remove();
                    }

                    $ui_selector_top.append($innerTopText).append($innerTopLabel);
                    $ui_selector_bottom.append(getOptionsList());


                    if (getLabel()) {
                        $ui_selector_top.addClass('selected');
                    }

                    var parent = $this.parent();

                    $ui_selector
                        .append($ui_selector_top)
                        .append($ui_selector_bottom)
                        .append($this);

                    $this.hide();

                    parent.append($ui_selector);

                }

                $ui_selector_top.on('click', function () {
                    _eleTop = $(this);
                    $ui_selector.addClass('focus');

                    if (_opt.onClick) {
                        _opt.onClick.call(this,$this);
                    }

                    $('.ui-selector-bottom').fadeOut(fadeOutTime);

                    if ($ui_selector_bottom.height() > _opt.maxHeight) {
                        $ui_selector_bottom.css('height', _opt.maxHeight);
                        $ui_selector_bottom.addClass('scrollable');
                    }

                    updateOptions(_eleTop);

                    $ui_selector_bottom.fadeIn('fast').addClass('on');

                });

                $ui_selector_bottom.on('click', 'ul li', function () {
                    var _thisLi = $(this);
                    var selectedVal = _thisLi.data('val');

                    _thisLi.parents('.ui-selector')
                        .find('.ui-selector-top .text .selected')
                        .text(_thisLi.text())
                        .attr('data-val', selectedVal);

                    $this.find('option[value="' + selectedVal + '"]').prop('selected', true);

                    updateOptions(_thisLi);

                    _thisLi.parents('.ui-selector-bottom')
                        .fadeOut(fadeOutTime)
                        .removeClass('on');

                    $('.ui-selector').removeClass('focus');

                    if (_opt.onSelect) {
                        _opt.onSelect.call(this,$this,selectedVal);
                    }
                });

                $(document).on('click', function (evt) {
                    if (!$(evt.target).parents('.ui-selector').hasClass('ui-enable')) {
                        $('.ui-selector-bottom').fadeOut(fadeOutTime);
                        $('.ui-selector').removeClass('focus');
                    }
                });

                UIBuild();
            });

        }
    })(jQuery);