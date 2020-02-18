<html>

<head>
    <link rel="stylesheet" href="https://ssl-ccstatic.highwebmedia.com/CACHE/css/output.f48c2a3e41ca.css"
        type="text/css" media="all" />
</head>

<body>
    <div style="display: block;" class="overlay_popup emote_popup">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="formborder">
                        <div class="title">Standard Emoticons</div>
                        <div class="popup_imgs">
                        @foreach($images as $image)
                            <img src="https://public.chaturbate.com/uploads/avatar/2011/11/08/{{$image->filename}}.jpg"
                                class="emoticon" height="{{$image->height}}" width="{{$image->width}}" data-emoticon=":{{$image->name}}">
                        @endforeach
                        </div>
                        <!-- <div class="more"><a href="/emoticons/">Upload Emoticons &gt;&gt;</a></div> -->
                    </td>
                </tr>
                <tr>
                    <td><img src="https://ssl-ccstatic.highwebmedia.com/images/emoticon_div_carrot.gif" alt="div"
                            width="396" height="12" class="divider"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>