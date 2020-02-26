$('.emoticon_button').on('click', function () {
    console.log($('.emote_popup').css('display'));
    if ($('.emote_popup').css('display') === 'none') {
        $('.emote_popup').show();
    } else {
        $('.emote_popup').hide();
    }
});