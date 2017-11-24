(function () {

    function BoxTab(ele, option) {
        this.ele = ele;
        this.selector = $(ele);
        this.option = option;
        this.tabContainer = this.selector.find('.box-tab-container');

        //Events
        this.selector.find('ul li a').on('click', this.onClick.bind(this));

        //func
        this.init();
        this.calcTabWidth();
    }

    var _tabProto = BoxTab.prototype;

    _tabProto.activeTab = function () {
        return this.selector.find('ul li.active a');
    };

    _tabProto.init = function () {
        var $activeTab = this.activeTab(),
            self = this,
            href = $activeTab.attr('href'),
            containerLength = self.tabContainer.find('.tab-item').length;

        if (containerLength > 1) {
            self.tabContainer.find('.tab-item').removeClass('active');
            self.tabContainer.find(href).addClass('active');
        } else {
            self.tabContainer.find('.tab-item').addClass('active');
        }

    };

    _tabProto.calcTabWidth = function () {
        var $liLength = this.selector.find('ul li').length;
        var tabWidth = Math.abs(100 / $liLength),
            finalWidth;

        if (tabWidth === Math.floor(tabWidth)) {
            finalWidth = Number(tabWidth);
        } else {
            finalWidth = Number(parseFloat(tabWidth).toFixed(2));
        }

        this.selector.find('ul li').css('width', finalWidth + '%');
    };

    _tabProto.onClick = function (e) {

        e.preventDefault();

        var $this = $(e.target),
            self = this,
            href = $this.attr('href'),
            $li = $this.parent(),
            containerLength = self.tabContainer.find('.tab-item').length;

        if (!$li.hasClass('active')) {
            self.selector.find('ul li').removeClass('active');
            $li.addClass('active');

            if (containerLength > 1) {
                self.tabContainer.find('.tab-item').removeClass('active');
                self.tabContainer.find(href).addClass('active');
            } else {
                self.tabContainer.find('.tab-item').addClass('active');
            }

            if (self.option.onClick !== null) {
                self.option.onClick.call(this, $this);
            }

        }
    };


    $.fn.boxTab = function (opt) {

        return $(this).each(function () {
            var defOpt = {
                    onClick: null
                },
                option = $.extend(defOpt, opt);

            new BoxTab($(this), option);
        });
    }

})();