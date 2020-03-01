$('#emoticon_autocomplete').hide();
$("#chat_input").on('keydown', function (e) {
    var c = String.fromCharCode(e.which);
    var text = $(this).val();
    var escapePosition = text.indexOf(':');
    var shortcutPart = text.substr(1);

    if (c === 'º' || escapePosition >= 0 || $('#emoticon_autocomplete').css('display') === 'show') {
        if (shortcutPart.length > 0) {
            // e.preventDefault();
            
            var autocomplete_link = $('.autocomplete_link');
            var autocomplete_url = autocomplete_link.attr('href');
            $.ajax({
                type: "POST",
                url: autocomplete_url + '?slug=' + shortcutPart,
                success: function (response) {
                    console.log(response);
                }
            });
        }
        $('#emoticon_autocomplete').show();
    } else {
        $('#emoticon_autocomplete').hide();
    }
});
$(".emote_container").on('click', function (e) {
    $.each($('.emote_container'), function() {
        $(this).css("background-color","rgb(255, 255, 255)");
    });
    $(this).css("background-color","rgb(204, 204, 204)");
    $(this).addClass('selected');
    var shortcut = $(this).text();
    shortcut = $.trim(shortcut);
    var src = $(this).children(":first").val();

    $('input[name=image_url]').val(src);
    report_url = '/emoticon_report_abuse/'+shortcut;
    $('input[name=report_url]').val(report_url);

    $('#emoticon_image').attr('src',src);
    $('#emoticon_image').attr('title',shortcut);

    var report_emoticon = $('#report_emoticon');
    report_emoticon.find('img').attr({ 'src': src, 'title':  shortcut});

    var abuse_link = $('.report_abuse_link');
    abuse_link.attr('href', report_url);
});
