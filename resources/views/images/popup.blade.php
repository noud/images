<html>

<head>
    <link rel="stylesheet" href="/css/output.f48c2a3e41ca.css"
        type="text/css" media="all" />
</head>

<body>
    <div style="display: block;" class="overlay_popup emote_popup">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="formborder">
                        <div class="title">{{__('data_types.'.$data->shortcut)}}</div>
                        <div class="popup_imgs">
                        @foreach($data->collection as $image)
                            <img src="/uploads/avatar/{{$image->uri_part_date}}/{{$image->filename}}.{{$image->image_type ? $image->image_type->name : 'gif'}}"
                                title="{{$image->shortcut}}"
                                class="{{$data->shortcut}}"
                                height="{{$image->height}}"
                                width="{{$image->width}}"
                                data-{{$data->shortcut}}=":{{$image->name}}"
                            >
                        @endforeach
                        </div>
                        <!-- <div class="more"><a href="/emoticons/">Upload Emoticons &gt;&gt;</a></div> -->
                    </td>
                </tr>
                <tr>
                    <td><img src="/images/emoticon_div_carrot.gif" alt="div"
                            width="396" height="12" class="divider"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
@include('scrapers.css_urls')