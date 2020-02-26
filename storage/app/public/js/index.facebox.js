defchat_settings = function() {
    console.log('INIT');
};

$.extend(defchat_settings, {
    ignored_emoticons: [],
    show_emoticons: true,
});

defchat_settings.ignored_emoticons = [];
defchat_settings.show_emoticons = true;

$.facebox.settings.loadingImage = '/facebox/loading.gif';
$.facebox.settings.closeImage = '/facebox/closelabel.png';

$(document).ready(function () {
    var report_emoticon = $('#report_emoticon');
    var abuse_link = $('.report_abuse_link');
    $('body').on('mousedown', '.facebox_link', function () {
        var image_url = $(this).find('input[name=image_url]').val();
        var report_url = $(this).find('input[name=report_url]').val();
        var title = $(this).find('img').attr('title');
        report_emoticon.find('img').attr({ 'src': image_url, 'title': title });
        abuse_link.attr('href', report_url);

        $('.pre_link').hide();
        if ($.inArray(title.substring(1), defchat_settings.ignored_emoticons) >= 0) {
            abuse_link.text('UNDO').before('<span class="pre_link">EMOTICON REPORTED - </span>');
        } else {
            abuse_link.text('REPORT EMOTICON');
        }

    });
    $('body').on('click', '.report_abuse_link', function (e) {
        e.preventDefault();
        if ($(this).text() == 'UNDO') {
            $('.button_abuse_report a').last().click();
        } else {
            $(this).hide();
            $('#facebox .emoticon_abuse_categories').show();
        }
    });
    $('.button_abuse_cancel').on('click', 'a', function (e) {
        e.preventDefault();
        $(this).parent().parent().hide();
        $('#facebox .report_abuse_link').show();
    });
    $('.button_abuse_report').on('click', 'a', function (e) {
        e.preventDefault();
        $(this).parent().parent().hide();
        var link = $('#facebox .report_abuse_link');
        var slug = link.parent().find('img').attr('title');
        $.ajax({
            type: "POST",
            url: link.attr('href'),
            data: { 'category': $('.abuse_category').last().val() },
            success: function (response) {
                var img = $('.chat-list img[title="' + slug + '"]');
                var facebox_img = $('#facebox').find('.content').find('img');
                if (response == 'reported') {
                    link.text('UNDO').before('<span>EMOTICON REPORTED - </span>');
                    img.hide();
                    if (img.parent().find('.emoticon_slug:visible').length == 0) {
                        img.parent().append('<span class="emoticon_slug">' + slug + '</span>');
                    }
                    defchat_settings.ignored_emoticons.push(slug.substring(1));
                    facebox_img.hide();
                    facebox_img.after('<div id="img_placeholder" style="position: relative; display: inline-block; width: ' + facebox_img.width() + 'px; height: ' + facebox_img.height() + 'px;"></div>')
                } else if (response == 'undone') {
                    link.prev().hide();
                    link.text('REPORT EMOTICON');
                    if (defchat_settings.show_emoticons) {
                        img.parent().find('.emoticon_slug').hide();
                        img.show();
                    }
                    $('#img_placeholder').remove();
                    facebox_img.show();
                    defchat_settings.ignored_emoticons.pop(slug.substring(1));
                }
            }
        });
        link.show();
    });


    function validateAbuseReportForm() {
        var category = $('#id_abuse_category_select').val();
        var comments = $('#id_additional_comments').val();
        var button = $('#abuse_report_button');
        var label = $('#comments_required');
        if (category == 'other' && comments.length < 3) {
            button.parent().removeClass('button_abuse_report');
            button.parent().addClass('button_abuse_cancel');
            label.show();
        } else {
            button.parent().addClass('button_abuse_report');
            button.parent().removeClass('button_abuse_cancel');
            label.hide();
        }
    }
    $('body').on('change keyup', '#id_additional_comments, #id_abuse_category_select', function () {
        validateAbuseReportForm();
    });
});