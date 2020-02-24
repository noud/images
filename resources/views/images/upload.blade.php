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
                    <h1>{{__('data_types.'.$data->shortcut)}}</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <p>{{__('data_types.'.$data->shortcut.'.txt')}}</p>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <table>
                        <tr>
                            <td align="left">
                                <form action="/emoticons/" enctype="multipart/form-data" method="post"
                                    id="submit_emoticon_form">
                                    <input type='hidden' name='csrfmiddlewaretoken'
                                        value='JAUGlIOaRdYDM3UsxFvyn1ygnI39EPjBPvLfzgTkFiERPSdFU9SQUAjrGubNze35' />
                                    <div id="error_notice" class="formvalidate_hidden">
                                        <p>{{__('data_types.'.$data->shortcut.'.error')}}</p>
                                        <ul class='errorlist'>
                                        </ul>
                                    </div>
                                    <fieldset class="fieldset_main">
                                        <table>
                                            <style>
                                                form th {
                                                    width: auto;
                                                    padding-left: 10px;
                                                }

                                                form td {
                                                    padding-right: 10px;
                                                }

                                                .membership_options {
                                                    display: block;
                                                    margin-left: 45px;
                                                    width: 350px;
                                                    border-collapse: collapse;
                                                }
                                            </style>
                                            <tr>
                                                <th class='requiredfield'>
                                                    <label for="id_slug" class="slug_label">{{__('data_types.'.$data->shortcut.'.label.shortcut')}}</label>
                                                </th>
                                                <td><input type="text" name="slug" required id="id_slug"
                                                        maxlength="32" />
                                                    <div class="formvalidate_spinner formvalidate_hidden"
                                                        id="slug_spinner">
                                                        <img
                                                            src="/images/spinner.gif">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="formvalidate_error slug_error" style="display:none;">
                                                <td></td>
                                                <td class="error_msg">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class='requiredfield'>
                                                    <label for="id_image" class="image_label">{{__('data_types.'.$data->shortcut.'.label.image')}}</label>
                                                </th>
                                                <td><input type="file" name="image" required id="id_image" />
                                                    <div class="formvalidate_spinner formvalidate_hidden"
                                                        id="image_spinner">
                                                        <img
                                                            src="/images/spinner.gif">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="formvalidate_error image_error" style="display:none;">
                                                <td></td>
                                                <td class="error_msg">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class='requiredfield'>
                                                    <label for="id_category" class="category_label">{{__('data_types.'.$data->shortcut.'.label.category')}}</label>
                                                </th>
                                                <td><select name="category" required id="id_category">
                                                        <option value="" selected>---------</option>
                                                        @foreach($data->collection as $key => $uploadCategory)
                                                            <option value="{{$key}}">{{$uploadCategory}}</option>
                                                        @endforeach
                                                    </select>
                                                    <div class="formvalidate_spinner formvalidate_hidden"
                                                        id="category_spinner">
                                                        <img
                                                            src="/images/spinner.gif">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="formvalidate_error category_error" style="display:none;">
                                                <td></td>
                                                <td class="error_msg">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <label for="id_suggested_category"
                                                        class="suggested_category_label">{{__('data_types.'.$data->shortcut.'.label.suggested_category')}}</label>
                                                </th>
                                                <td><input type="text" name="suggested_category"
                                                        id="id_suggested_category" maxlength="255" />
                                                    <div class="formvalidate_spinner formvalidate_hidden"
                                                        id="suggested_category_spinner">
                                                        <img
                                                            src="/images/spinner.gif">
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="formvalidate_error suggested_category_error"
                                                style="display:none;">
                                                <td></td>
                                                <td class="error_msg">
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                    <div align="center">
                                        <input type="submit" name="submit" class="button" value="{{__('data_types.'.$data->shortcut.'.button.submit')}}"
                                            style="margin-top: 15px;" />
                                    </div>
                                </form>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
</body>
<script type="text/javascript" src="/js/output.0b6371c03c92.js"></script>
<script type='text/javascript'>
    $(document).ready(function () {
        $('body').on('submit', '#submit_emoticon_form', function () {
            $(this).find('input[type=submit]').attr('disabled', 'disabled');
        })
    });
</script>

</html>