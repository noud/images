<html>

<head>
        <link rel="stylesheet" href="https://ssl-ccstatic.highwebmedia.com/CACHE/css/output.f48c2a3e41ca.css"
                type="text/css" media="all" />
</head>

<body>
        <div class="chat-holder">
                <div class="chat-box">
                        <div class="chat-list" style="height: 540px; font-size: 9pt; display: block;">
                        </div>
                        <div id="autocomplete_prefix" style="display: none; font: 100% Arial, Helvetica, sans-serif; width: auto;">
                        </div>
                        <div id="emoticon_autocomplete" style="background: rgb(255, 255, 255); border-width: 1px; border-style: solid; border-color: rgb(177, 177, 177) rgb(177, 177, 177) rgb(255, 255, 255); border-image: initial; cursor: pointer; float: left; font: 100% Arial, Helvetica, sans-serif; width: 260px; max-height: 290px; position: absolute; z-index: 99; top: 658.844px; left: 560.953px; display: {{$emoticonAutocompleteDisplay}};">
                                <div id="emoticon_preview" style="height: 110px; line-height: 105px; text-align: center; border-bottom: 1px solid rgb(177, 177, 177); display: {{$emoticonPreviewDisplay}};">
                                        <a class="facebox_link thumbnail" href="#report_emoticon" rel="facebox">
                                                <input type="hidden" name="image_url" value="{{$data->collection[$selected]->src}}">
                                                <input type="hidden" name="report_url" value="{{route('images.report_abuse', [$data->collection[$selected]->shortcut])}}">
                                                <img id="emoticon_image"
                                                        src="{{$data->collection[$selected]->src}}"
                                                        title=":{{$data->collection[$selected]->shortcut}}"
                                                        style="max-height: 80px; max-width: 250px; padding: 10px; vertical-align: middle;">
                                                <br>
                                                <span id="preview_text" style="font-size: 10px; position: relative; top: -55px;">{{__('data_types.txt.view_report')}}</span>
                                        </a>
                                </div>
                                <div id="emoticon_list" style="max-height: 180px; overflow: hidden scroll;">
                                        @foreach($data->collection as $key => $image)
                                                @if($key === $selected)
                                                        <div class="emote_container selected" style="padding: 2px 8px; background-color: rgb(204, 204, 204);">
                                                                <input type="hidden" class="img_src" value="{{$image->src}}">
                                                                <span class="emote_name" style="margin-right: 16px;">{{$image->shortcut}}</span>
                                                        </div>
                                                @else
                                                        <div class="emote_container" style="padding: 2px 8px; background-color: rgb(255, 255, 255);">
                                                                <input type="hidden" class="img_src" value="{{$image->src}}">
                                                                <span class="emote_name" style="margin-right: 16px;">{{$image->shortcut}}</span>
                                                        </div>
                                                @endif
                                        @endforeach
                                </div>
                        </div>
                        <div id="facebox" style="top: 714.75px; left: 769.5px; display: {{$faceboxDisplay}};">
                                <div class="popup">
                                        <div class="content">
                                                <div style="text-align: center;">
                                                        <img title=":fuckmybigasshole111"
                                                                src="{{$data->collection[$selected]->src}}"
                                                                style="max-width: 480px; max-height: 480px;"><br>
                                                        <a class="report_abuse_link"
                                                                href="{{route('images.report_abuse', [$data->collection[$selected]->shortcut])}}">{{__('data_types.link.report')}}</a>
                                                        <div class="emoticon_abuse_categories" style="display: block;">
                                                                <span id="abuse_category_options">
                                                                        Choose a category:
                                                                        <select class="abuse_category">
                                                                                <option value="ignore">Just ignore this emoticon</option>
                                                                                <option value="offensive">Offensive</option>
                                                                                <option value="disgusting">Disgusting</option>
                                                                                <option value="fake_tip">Fake Tip</option>
                                                                                <option value="advertising">Advertising</option>
                                                                        </select>
                                                                </span>
                                                                <div class="button_abuse_report"><a href="#">{{__('data_types.button.report')}}</a></div>
                                                                <div class="button_abuse_cancel"><a href="#">{{__('data_types.button.cancel')}}</a></div>
                                                        </div>
                                                </div>
                                        </div> <a href="#" class="close"><img
                                                        src="/facebox/closelabel.png"
                                                        class="close_image" title="close"></a>
                                </div>
                        </div>
                        <form action="#" class="chat-form" name="chat_form" autocomplete="off">
                                <fieldset>
                                        <div class="row">
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                                <tr>
                                                                        <td><input id="chat_input" type="text"
                                                                                        class="text" autocomplete="off"
                                                                                        maxlength="1024"></td>
                                                                        <td width="1"></td>
                                                                        <td width="20">
                                                                                <a href="#"
                                                                                        class="smile emoticon_button nooverlay">smile</a>
                                                                        </td>
                                                                        <td width="40" class="smilesubmit">
                                                                                <div class="button_send">
                                                                                        <a href="#"
                                                                                                class="send_message_button nooverlay">{{__('data_types.button.send')}}</a>
                                                                                </div>
                                                                        </td>
                                                                </tr>
                                                        </tbody>
                                                </table>
                                        </div>
                                </fieldset>
                        </form>
                </div>
        </div>
</body>

</html>