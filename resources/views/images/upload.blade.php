<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Chaturbate</title>
    <link rel="stylesheet" href="/css/output.2527042bb38d.css"
        type="text/css" media="all" />
</head>

<body>
    <div id="upload_formborder">
        <table width="100%" border="0" cellspacing="0" cellpadding="0" id="upload_form">
            <tr>
                <td>
                    <h1>Upload Graphic</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <p>To insert a custom emoticon or graphic into the chat room, upload an image URL. It will also be
                        available to other users. Do not post anything copyrighted, illegal, inappropriate or offensive
                        in nature.</p>
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
                                        <p>Please correct the errors below.</p>
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
                                                    <label for="id_slug" class="slug_label">Shortcut:</label>
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
                                                    <label for="id_image" class="image_label">Image:</label>
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
                                                    <label for="id_category" class="category_label">Category:</label>
                                                </th>
                                                <td><select name="category" required id="id_category">
                                                        <option value="" selected>---------</option>
                                                        <option value="4">Adult</option>
                                                        <option value="3">Cute</option>
                                                        <option value="1">Funny</option>
                                                        <option value="6">Girly</option>
                                                        <option value="10">Love</option>
                                                        <option value="8">Misc</option>
                                                        <option value="11">Model Specific</option>
                                                        <option value="9">Music</option>
                                                        <option value="2">Standard</option>
                                                        <option value="7">Text</option>
                                                        <option value="5">Wacky</option>
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
                                                        class="suggested_category_label">Suggested Category:</label>
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
                                        <input type="submit" name="submit" class="button" value="Submit Image"
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
        $('#submit_emoticon_form').live('submit', function () {
            $(this).find('input[type=submit]').attr('disabled', 'disabled');
        })
    });
</script>

</html>