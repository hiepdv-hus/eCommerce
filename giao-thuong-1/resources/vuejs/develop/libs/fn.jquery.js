import $ from 'jquery';

/**
 * Kendo grid filter
 */
$.fn.kendoFilter = function (options) {
    if (!this.data('__filter')) {
        this.data('__filter', {});
    }
    var _this = this;
    var filter = this.data('__filter');
    var options = options || {};
    var __kendoFilter = function (input, timeWaiting) {
        var input = $(input);
        var inputName = input.attr('name');
        var inputValue = input.val();
        var kendoGrid = _this.data('kendoGrid');
        var timeWaiting = timeWaiting || 1000;

        filter[inputName] = inputValue;
        filter.hasChanged = true;
        _this.data('__filter', filter);

        // Clear timeout if set
        if (_this.timeOut) {
            clearTimeout(_this.timeOut);
        }
        // Set timeout function
        _this.timeOut = setTimeout(function () {
            kendoGrid.dataSource.page(1);
        }, timeWaiting);
    }

    $('input.input-filter').unbind('input propertychange').bind('input propertychange', function () {
        __kendoFilter(this);
    });

    $('input.input-filter.kendo-datepicker, input.input-filter.kendo-dateptimeicker').unbind('change').bind('change', function () {
        __kendoFilter(this, 100);
    });

    $('input.select-filter, select.select-filter').unbind('change').bind('change', function () {
        __kendoFilter(this, 100);
    });

    $('.btn-filter').bind('click', function () {
        var _this = $(this);
        var sectionFilter = $(_this.data('section-filter'));
        if (!_this.data('__shown')) {
            kendo.fx(sectionFilter).slideIn("up").play();
            _this.data('__shown', true);
        }
        else {
            sectionFilter.fadeOut(200);
            _this.data('__shown', false);
        }
    });

    return this;
};
//=======================================================//
