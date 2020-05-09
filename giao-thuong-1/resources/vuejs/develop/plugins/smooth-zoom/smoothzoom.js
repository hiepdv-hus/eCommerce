// Smooth zoome
import jQuery from 'jquery';
(function ($) {
    $.fn.extend({
        smoothproducts: function () {
            // Add some markup & set some CSS
            $('.product-zoom-loading').hide();
            $('.sp-wrap').css({"opacity": 1});
            $('.sp-wrap').each(function () {
                $(this).addClass('sp-touch');
                var thumbQty = $('a', this).length;
                // If more than one image
                if (thumbQty > 1) {
                    var firstLarge, firstThumb, firstMain,
                        defaultImage = $('a.sp-default', this)[0] ? true : false;
                    $('a', this).each(function (index) {
                        var thumb = $('img', this).attr('src'),
                            main = $(this).attr("data-main-image"),
                            large = $(this).attr('data-next-large'),
                            classes = '',
                            a = '';

                        //set default image
                        if ((index === 0 && !defaultImage) || $(this).hasClass('sp-default')) {
                            classes = ' class="sp-current"';
                            firstLarge = large;
                            firstMain = main;
                            firstThumb = thumb;
                        }
                    });
                    $('.sp-wrap').css({
                        display: 'inline-block',
                    });
                }

                $('.sp-wrap').css({
                    display: 'inline-block'
                });

                let fn = function () {
                    var fixedHeight = $('.sp-large').innerWidth() * 9 / 6;
                    $('.sp-large').css({
                        height: fixedHeight
                    });
                    $('.sp-thumbs-desktop')
                        .css({
                            height: fixedHeight,
                            'overflow-x': 'hidden'
                        })
                        .niceScroll({
                            horizrailenabled: false,
                            cursorcolor: "transparent",
                            emulatetouch: true
                        });
                };
                fn();
                $('.sp-current-big img').one('load', fn);

            });

            // Show all thumbnails
            $(document.body).on('click', '.sp-more-thumb', function (event) {
                $(".sp-thumbs a.sp-hide").removeClass("sp-hide");
                $(this).hide();
            });

            // Prevent clicking while things are happening
            $(document.body).on('click', '.sp-thumbs', function (event) {
                event.preventDefault();
            });

            // Is this a touch screen or not?
            $(document.body).on('mouseover', '.sp-wrap', function (event) {
                event.preventDefault();
                $(this).removeClass('sp-touch').addClass('sp-non-touch');
            });

            $(document.body).on('touchstart', '.sp-wrap', function () {
                $(this).removeClass('sp-non-touch').addClass('sp-touch');
            });

            // Clicking a thumbnail
            $(document.body).on('click', '.sp-tb-active a', function (event) {
                var _this = $(this);
                var spWraps = _this.parents('.sp-wrap');

                if (_this.hasClass("sp-more-thumb")) {
                    return false;
                }

                event.preventDefault();
                _this.parent().find('.sp-current').removeClass();
                _this.addClass('sp-current');
                spWraps.find('.sp-thumbs').removeClass('sp-tb-active');
                spWraps.find('.sp-zoom').remove();

                var currentHeight = spWraps.find('.sp-large').height(),
                    currentWidth = spWraps.find('.sp-large').width();

                _this.addClass('sp-current');
                //spWraps.find('.sp-large a').remove();

                var nextLarge = _this.parent().find('.sp-current').attr('data-next-large'),
                    nextMain = $(this).parent().find('.sp-current').attr('data-main-image');

                spWraps.find('.sp-large>a').attr({'data-next-large': nextLarge});
                spWraps.find('.sp-large>a>img').attr({'src': nextMain});
                spWraps.find('.sp-large').hide().fadeIn(250, function () {

                    var autoHeight = spWraps.find('.sp-large img').height();
                    //spWraps.find('.sp-large').css({height: autoHeight, width: "auto"});
                    spWraps.find('.sp-thumbs').addClass('sp-tb-active');
                });
            });

            // Zoom In non-touch
            $(document.body).on('mouseenter', '.sp-non-touch .sp-large', (function (event) {
                var _this = $(this);
                var largeUrl = $('a', this).attr('data-next-large');

                event.preventDefault();
                _this.append('<div class="sp-zoom"><img src="' + largeUrl + '"/></div>');
                _this.find('.sp-zoom').fadeIn(250);
            }));

            // Zoom Out non-touch
            $(document.body).on('mouseleave', '.sp-non-touch .sp-large', (function (event) {
                var _this = $(this);

                event.preventDefault();
                _this.find('.sp-zoom').fadeOut(250, function () {
                    $(this).remove();
                });
            }));

            // Open in Lightbox non-touch
            $(document.body).on('click', '.sp-non-touch .sp-zoom', function (event) {
                var _this = $(this);
                var spWraps = _this.parents('.sp-wrap');
                var currentImg = _this.html(),
                    thumbAmt = spWraps.find('.sp-thumbs:first-child a:not(.sp-more-thumb)').length,
                    currentThumb = (spWraps.find('.sp-thumbs .sp-current').index()) + 1;

                event.preventDefault();
                spWraps.addClass('sp-selected');
                $('body').append("<div class='sp-lightbox' data-currenteq='" + currentThumb + "'>" + currentImg + "</div>");

                if (thumbAmt > 1) {
                    $('.sp-lightbox').append("<a href='#' id='sp-prev'></a><a href='#' id='sp-next'></a>");
                    if (currentThumb == 1) {
                        $('#sp-prev').css('opacity', '.1');
                    } else if (currentThumb == thumbAmt) {
                        $('#sp-next').css('opacity', '.1');
                    }
                }
                $('.sp-lightbox').fadeIn();
            });

            // Open in Lightbox touch
            $(document.body).on('click', '.sp-large a', function (event) {
                var _this = $(this);
                var spWraps = _this.parents('.sp-wrap');
                var currentImg = _this.attr('data-next-large'),
                    thumbAmt = spWraps.find('.sp-thumbs:first-child a:not(.sp-more-thumb)').length,
                    currentThumb = (spWraps.find('.sp-thumbs .sp-current').index()) + 1;

                event.preventDefault();
                spWraps.addClass('sp-selected');
                $('body').append('<div class="sp-lightbox" data-currenteq="' + currentThumb + '"><img src="' + currentImg + '"/></div>');

                if (thumbAmt > 1) {
                    $('.sp-lightbox').append("<a href='#' id='sp-prev'></a><a href='#' id='sp-next'></a>");
                    if (currentThumb == 1) {
                        $('#sp-prev').css('opacity', '.1');
                    } else if (currentThumb == thumbAmt) {
                        $('#sp-next').css('opacity', '.1');
                    }
                }
                $('.sp-lightbox').fadeIn();
            });

            // Pagination Forward
            $(document.body).on('click', '#sp-next', function (event) {
                event.stopPropagation();
                var currentEq = $('.sp-lightbox').attr('data-currenteq'),
                    totalItems = $('.sp-selected .sp-thumbs:first-child a:not(.sp-more-thumb)').length;

                if (currentEq >= totalItems) {
                } else {
                    var nextEq = currentEq + 1,
                        newImg = $('.sp-selected .sp-thumbs').find('a:eq(' + currentEq + ')').attr('data-next-large'),
                        nextMain = $('.sp-selected .sp-thumbs').find('a:eq(' + currentEq + ')').attr('data-main-image');
                    if (currentEq == (totalItems - 1)) {
                        $('#sp-next').css('opacity', '.1');
                    }
                    $('#sp-prev').css('opacity', '1');
                    $('.sp-selected .sp-current').removeClass();
                    $('.sp-selected .sp-thumbs a:eq(' + currentEq + ')').addClass('sp-current');
                    $('.sp-selected .sp-large').empty().append('<a href=' + newImg + '><img src="' + nextMain + '"/></a>');
                    $('.sp-lightbox img').fadeOut(250, function () {
                        $(this).remove();
                        $('.sp-lightbox').attr('data-currenteq', nextEq).append('<img src="' + newImg + '"/>');
                        $('.sp-lightbox img').hide().fadeIn(250);
                    });
                }
                event.preventDefault();
            });

            // Pagination Backward
            $(document.body).on('click', '#sp-prev', function (event) {

                event.stopPropagation();
                var currentEq = $('.sp-lightbox').attr('data-currenteq'),
                    currentEq = currentEq - 1;
                if (currentEq <= 0) {
                } else {
                    if (currentEq == 1) {
                        $('#sp-prev').css('opacity', '.1');
                    }
                    var nextEq = currentEq - 1,
                        newImg = $('.sp-selected .sp-thumbs').find('a:eq(' + nextEq + ')').attr('data-next-large'),
                        nextMain = $('.sp-selected .sp-thumbs').find('a:eq(' + nextEq + ')').attr('data-main-image');
                    $('#sp-next').css('opacity', '1');
                    $('.sp-selected .sp-current').removeClass();
                    $('.sp-selected .sp-thumbs a:eq(' + nextEq + ')').addClass('sp-current');
                    $('.sp-selected .sp-large').empty().append('<a data-next-large=' + newImg + '><img src="' + nextMain + '"/></a>');
                    $('.sp-lightbox img').fadeOut(250, function () {
                        $(this).remove();
                        $('.sp-lightbox').attr('data-currenteq', currentEq).append('<img src="' + newImg + '"/>');
                        $('.sp-lightbox img').hide().fadeIn(250);
                    });
                }
                event.preventDefault();
            });


            // Close Lightbox
            $(document.body).on('click', '.sp-lightbox', function () {
                closeModal();
            });

            // Close on Esc
            $(document.body).keydown(function (e) {
                if (e.keyCode == 27) {
                    closeModal();
                    return false;
                }
            });

            function closeModal() {
                $('.sp-selected').removeClass('sp-selected');
                $('.sp-lightbox').fadeOut(function () {
                    $(this).remove();
                });
            }


            // Panning zoomed image (non-touch)
            $(document.body).on('mousemove', '.sp-large', function (e) {
                var viewWidth = $(this).width(),
                    viewHeight = $(this).height(),
                    viewOffset = $(this).offset(),
                    largeWidth = $(this).find('.sp-zoom').width(),
                    largeHeight = $(this).find('.sp-zoom').height(),
                    relativeXPosition = (e.pageX - viewOffset.left),
                    relativeYPosition = (e.pageY - viewOffset.top),
                    moveX = Math.floor((relativeXPosition * (viewWidth - largeWidth) / viewWidth)),
                    moveY = Math.floor((relativeYPosition * (viewHeight - largeHeight) / viewHeight));
                $(this).find('.sp-zoom').css({
                    left: moveX,
                    top: moveY
                });
            });

            function get_url_from_background(bg) {
                return bg.match(/url\([\"\']{0,1}(.+)[\"\']{0,1}\)+/i)[1];
            }
        }
    });
})(jQuery);