$('#emoticon_autocomplete').hide();
$("#chat_input").on('keydown', function (e) {
    var c = String.fromCharCode(e.which);
    var text = $(this).val();
    var escapePosition = text.indexOf(':');
    var shortcutPart = text.substr(1);
    if (c === 'º' || escapePosition >= 0 || $('#emoticon_autocomplete').css('display') === 'show') {
        if (shortcutPart.length >= 3) {
            // e.preventDefault();
            
            var autocomplete_link = $('.autocomplete_link');
            var autocomplete_url = autocomplete_link.attr('href');
            $.ajax({
                type: "POST",
                url: autocomplete_url + '?slug=' + shortcutPart,
                success: function (response) {
                    console.log(response);
                    autocompleteResponse(response.emoticons);
                    $('#emoticon_autocomplete').show();
                }
            });
        }
        $('#emoticon_autocomplete').show();
    } else {
        $('#emoticon_autocomplete').hide();
    }
});
$(".emote_container").on('click', function (e) {
    setEmoticon(emoticon);
});

function setEmoticon(emoticon) {
    $.each($('.emote_container'), function() {
        $(emoticon).css("background-color","rgb(255, 255, 255)");
    });
    $(emoticon).css("background-color","rgb(204, 204, 204)");
    $(emoticon).addClass('selected');
    var shortcut = $(emoticon).text();
    shortcut = $.trim(shortcut);
    var src = $(emoticon).children(":first").val();

    $('input[name=image_url]').val(src);
    report_url = '/emoticon_report_abuse/'+shortcut;
    $('input[name=report_url]').val(report_url);

    $('#emoticon_image').attr('src',src);
    $('#emoticon_image').attr('title',shortcut);

    var report_emoticon = $('#report_emoticon');
    report_emoticon.find('img').attr({ 'src': src, 'title':  shortcut});

    var abuse_link = $('.report_abuse_link');
    abuse_link.append(report_url);
}

function autocompleteResponse(emoticons) {
    var emoticonList = $('#emoticon_list');
    var html = "";
    emoticonList.children().remove();
    emoticons.map(function( emoticon ) {
        html += addEmoticontoList(emoticon.slug, emoticon.url);
      });
      emoticonList.html(html);
      setEmoticon(emoticonList.children().first());
      emoticonListLength = emoticonList.children().length;
      totalListLength = 40;
      for (i = emoticonListLength; i < totalListLength; i++) {
        emoticonList.append(addEmoticontoList('', ''));
      }
}

function addEmoticontoList(slug, url) {
    return '<div class="emote_container" style="padding: 2px 8px; background-color: rgb(255, 255, 255);">' +
        '<input type="hidden" class="img_src" value="' + url + '">' +
        '<span class="emote_name" style="margin-right: 16px;">' + slug + '</span\>' +
    '</div>';
}