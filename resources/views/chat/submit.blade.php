@if (app()->environment() === 'production')
<td width="40" class="smilesubmit">
        <div class="button_send">
                <a href="#" class="send_message_button nooverlay">{{__('data_types.button.send')}}</a>
        </div>
</td>
@endif