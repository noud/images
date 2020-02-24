<html>

<head>
    <link rel="stylesheet" href="/css/output.f48c2a3e41ca.css"
        type="text/css" media="all" />
</head>
@inject('imageService', 'App\Services\ImageService')
<body>
    <div style="display: block;" class="overlay_popup emote_popup">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="formborder">
                        <div class="title">{{__('data_types.'.$data->shortcut)}}</div>
                        <div class="popup_imgs">
                        @foreach($data->collection as $image)
                            <img src="{{$image->src}}"
                                title="{{$image->shortcut}}"
                                class="{{$data->shortcut}}"
                                height="{{$image->height}}"
                                width="{{$image->width}}"
                                data-{{$data->shortcut}}=":{{$image->name}}"
                            >
                        @endforeach
                        </div>
                        <div class="more"><a href="/emoticons">{!!__('data_types.'.$data->shortcut.'.button.submit')!!}</a></div>
                    </td>
                </tr>
                <tr>
                    @php($image = $imageService::getImageByShortcut('emoticon_div_carrot'))
                    <td><img src="{{$image->src}}" alt="div"
                            width="{{$image->width}}" height="{{$image->height}}" class="divider"></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
@include('scrapers.css_background_urls')
@include('scrapers.css_font_urls')
</html>
 