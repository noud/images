$('#emoticon_autocomplete').hide();
$("#chat_input").on('keydown', function (e) {
    var c = String.fromCharCode(e.which);
    var text = $(this).val();
    // console.log(c);
    // console.log(text);
    // console.log($('#emoticon_autocomplete').css('display'));
    if (c === 'º' || text.indexOf(':') >= 0 || $('#emoticon_autocomplete').css('display') === 'show') {
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
    var abuse_link = $('.report_abuse_link');
    report_emoticon.find('img').attr({ 'src': src, 'title':  shortcut});
    abuse_link.attr('href', report_url);
});
