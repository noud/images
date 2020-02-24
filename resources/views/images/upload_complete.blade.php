<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{{__('data_types.title')}}</title>
    <link rel="stylesheet" href="/css/output.2527042bb38d.css"
        type="text/css" media="all" />
</head>

<body>
    <div id="upload_formborder">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="upload_form">
            <tr>
                <td>
                    <h1>{{__('data_types.upload_complete')}}</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <p>{{__('data_types.upload_complete.txt')}}</p>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <img src='{{$data->src}}'
                        class='emoticon' data-emoticon=':{{$data->shortcut}}' title=':{{$data->shortcut}}' />
                    <div class='emoticon' data-emoticon=':{{$data->shortcut}}'>:{{$data->shortcut}}</div>
                    <!-- <a href='#' class='emoticon' data-emoticon=':{{$data->shortcut}}'>{{__('data_types.upload_complete.link')}}</a> -->
                </td>
            </tr>
        </table>
    </div>
</body>
<script type="text/javascript" src="/js/output.0b6371c03c92.js"></script>

</html>