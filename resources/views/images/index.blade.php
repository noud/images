<html>

<head>
        <title>{{__('data_types.title')}}</title>
        <link rel="stylesheet" href="/css/output.f48c2a3e41ca.css" type="text/css" media="all" />
</head>
@inject('imageService', 'App\Services\ImageService')
<body>
        <div class="chat-holder" style="margin: 0 0 0 0px;">
                <div class="chat-box">
                <div class="chat-list" style="height: 300px; font-size: 9pt; display: block;"></div>
                <div style="display: hide;" class="overlay_popup emote_popup">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                                <tr>
                                <td class="formborder">
                                        <div class="title">{{__('data_types.'.$data->shortcut)}}</div>
                                        <div class="popup_imgs">
                                        @foreach($data->collection as $image)
                                        <img src="{{$image->src}}" title="{{$image->shortcut}}" class="{{$data->shortcut}}"
                                                height="{{$image->height}}" width="{{$image->width}}"
                                                data-{{$data->shortcut}}=":{{$image->shortcut}}">
                                        @endforeach
                                        </div>
                                        <div class="more">
                                                <a href="/emoticons" target=”_blank”>{!!__('data_types.'.$data->shortcut.'.link.upload')!!}</a>
                                        </div>
                                </td>
                                </tr>
                                <tr>
                                @php($image = $imageService::getImageByShortcut('div_carrot'))
                                <td><img src="{{$image->src}}" alt="div" width="{{$image->width}}"
                                        height="{{$image->height}}" class="divider"></td>
                                </tr>
                        </tbody>
                        </table>
                </div>
                <div id="autocomplete_prefix" style="display: none; font: 100% Arial, Helvetica, sans-serif; width: auto;"></div>
                <div id="emoticon_autocomplete" style="background: rgb(255, 255, 255); border-width: 1px; border-style: solid; border-color: rgb(177, 177, 177) rgb(177, 177, 177) rgb(255, 255, 255); border-image: initial; cursor: pointer; float: left; font: 100% Arial, Helvetica, sans-serif; width: 260px; max-height: 290px; position: absolute; z-index: 99; top: 16.844px; left: 0.953px; display: {{$emoticonAutocompleteDisplay}};">
                        <div id="emoticon_preview" style="height: 110px; line-height: 105px; text-align: center; border-bottom: 1px solid rgb(177, 177, 177); display: {{$emoticonPreviewDisplay}};">
                                <a class="facebox_link thumbnail" href="#report_emoticon" rel="facebox">
                                        <input type="hidden" name="image_url" value="">
                                        <input type="hidden" name="report_url" value="">
                                        <img id="emoticon_image"
                                                src=""
                                                title=""
                                                style="max-height: 80px; max-width: 250px; padding: 10px; vertical-align: middle;">
                                        <br>
                                        <span id="preview_text" style="font-size: 10px; position: relative; top: -55px;">{{__('data_types.txt.view_report')}}</span>
                                </a>
                        </div>
                        <div id="emoticon_list" style="max-height: 180px; overflow: hidden scroll;">
                        </div>
                </div>
                <form action="#" class="chat-form" name="chat_form" autocomplete="off">
                        <fieldset>
                                <div class="row">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                <tbody>
                                                        <tr>
                                                                <td><input id="chat_input" type="text" class="text" autocomplete="off" maxlength="1024"></td>
                                                                <td width="1"></td>
                                                                <td height="0" width="20">
                                                                        <a href="#" class="smile emoticon_button nooverlay">smile</a>
                                                                </td>
                                                                @include('chat.submit')
                                                        </tr>
                                                </tbody>
                                        </table>
                                </div>
                        </fieldset>
                </form>
        </div>
        <div id="report_emoticon" style="display: none">
                <div style="text-align: center;">
                        <img title="" src="" style="max-width: 480px; max-height: 480px;"><br>
                        <a class="autocomplete_link" href="/autocomplete"></a>
                        <a class="report_abuse_link" href="/emoticon_report_abuse"></a>
                        <div class="emoticon_abuse_categories" style="display: none;">
                                <span id="{{$abuseCategories->shortcut}}_options">
                                        {{__($abuseCategories->shortcut.'.title')}}
                                        <select class="{{$abuseCategories->shortcut}}">
                                                @foreach($abuseCategories->collection as $abuseCategory)
                                                <option value="{{$abuseCategory}}">{{__($abuseCategories->shortcut.'.'.$abuseCategory)}}</option>
                                                @endforeach
                                        </select>
                                </span>
                                <div class="button_abuse_report"><a href="#">{{__('data_types.button.report')}}</a></div>
                                <div class="button_abuse_cancel"><a href="#">{{__('data_types.button.cancel')}}</a></div>
                        </div>
                </div>
        </div>
</body>
<script type="text/javascript" src="/js/output.0b6371c03c92.js"></script>
<script type="text/javascript" src="/js/index.facebox.js"></script>
<script type="text/javascript" src="/js/facebox.close.js"></script>
<script type="text/javascript" src="/js/emoticon_button.js"></script>
<script type="text/javascript" src="/js/emoticon_autocomplete.js"></script>
@include('scrapers.css_background_urls')
@include('scrapers.css_font_urls')
</html>