<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('email/email.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{URL::to('email/email.css')}}"> --}}
    <style type="text/css">
    img { max-width: 600px; outline: none; text-decoration: none; -ms-interpolation-mode: bicubic;}
    a img { border: none; }
    table { border-collapse: collapse !important; }
    #outlook a { padding:0; }
    .ReadMsgBody { width: 100%; }
    .ExternalClass {width:100%;}
    .backgroundTable {margin:0 auto; padding:0; width:100%;!important;}
    table td {border-collapse: collapse;}
    .ExternalClass * {line-height: 115%;}


    /* General styling */

    td {
        font-family: Arial, sans-serif;
        color: #5e5e5e;
        font-size: 16px;
        text-align: left;
    }

    body {
        -webkit-font-smoothing:antialiased;
        -webkit-text-size-adjust:none;
        width: 100%;
        height: 100%;
        color: #5e5e5e;
        font-weight: 400;
        font-size: 16px;
    }


    h1 {
        margin: 10px 0;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }


    .body-padding {
        padding: 0 75px;
    }


    .force-full-width {
        width: 100% !important;
    }

    .icons {
        text-align: right;
        padding-right: 30px;
    }

    .logo {
        text-align: left;
        padding-left: 30px;
    }

    .computer-image {
        padding-left: 30px;
    }

    .header-text {
        text-align: left;
        padding-right: 30px;
        padding-left: 20px;
    }

    .header {
        color: #232925;
        font-size: 24px;
    }

    .grey-header {
        background-color: #dedede;
        padding: 5px;
        font-weight: bold;
    }

    .white-header {
        background-color: #f3f3f3;
        padding: 5px;
    }

    @media screen {
        @import url(http://fonts.googleapis.com/css?family=PT+Sans:400,700);
        /* Thanks Outlook 2013! */
        * {
            font-family: 'PT Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
        }
    }

    /* Mobile styles */
    @media only screen and (max-width: 599px) {

        table[class*="w320"] {
            width: 320px !important;
        }

        td[class*="icons"] {
            display: block !important;
            text-align: center !important;
            padding: 0 !important;
        }

        td[class*="logo"] {
            display: block !important;
            text-align: center !important;
            padding: 0 !important;
        }

        td[class*="computer-image"] {
            display: block !important;
            width: 230px !important;
            padding: 0 45px !important;
            border-bottom: 1px solid #e3e3e3 !important;
        }


        td[class*="header-text"] {
            display: block !important;
            text-align: center !important;
            padding: 0 25px!important;
            padding-bottom: 25px !important;
        }

        *[class*="mobile-hide"] {
            display: none !important;
            width: 0 !important;
            height: 0 !important;
            line-height: 0 !important;
            font-size: 0 !important;
        }

        td[class="mobile-block"] {
            display: block !important;
            width: 260px !important;
        }


    }
</style>

<!-- Implemented by Legendary -->
</head>
<body  offset="0" class="body" style="padding:0; margin:0; display:block; background:#ffffff; -webkit-text-size-adjust:none" bgcolor="#ffffff">
    <table align="center" cellpadding="0" cellspacing="0" width="100%" height="100%">
        <tr>
            <td align="center" valign="top" style="background-color:#ffffff" width="100%">

                <center>
                    <table cellspacing="0" cellpadding="0" width="600" class="w320">
                        <tr>
                            <td align="center" valign="top">

                                <table class="force-full-width" cellspacing="0" cellpadding="0" bgcolor="#232925">
                                    <tr>
                                        <td style="background-color:#232925" class="logo">
                                            <a href="#"><img style="width: 40%;" src="{{URL::to('/images/logo1.png')}}" alt="Logo"></a>
                                        </td>
                                    </tr>
                                </table>

                                <table  class="mobile-block" style="width: cellspacing="0" cellpadding="0" class="force-full-width" bgcolor="#ebebeb">

                                    <td style="padding: 0 30px; padding-bottom: 30px;">
                                        <br>
                                        <span style="font-size: 24px;">
                                            @if (! empty($greeting))
                                            {{ $greeting }}
                                            @else
                                            @if ($level === 'error')
                                            @lang('Whoops!')
                                            @else
                                            @lang('Hello!')
                                            @endif
                                            @endif
                                        </span><br><br>
                                        {{-- Intro Lines --}}
                                        @foreach ($introLines as $line)
                                        {{ $line }}

                                        @endforeach
                                        <div>
                                        </div>
                                    </td>

                                    <tr>
                                      <td style="text-align: center;">
                                        <center>
                                            <table>
                                              <tr>
                                                <td style="text-align:center;">
                                                    <div>
                                                        <p
                                                        style=" margin: 30px auto;
                                                        padding-left: 10px;
                                                        padding-right: 10px;
                                                        text-align: center;
                                                        width: 100%;
                                                        -premailer-cellpadding: 0;
                                                        -premailer-cellspacing: 0;
                                                        -premailer-width: 100%;">
                                                        <center>
                                                          {{-- Action Button --}}
                                                          @isset($actionText)
                                                          <?php
                                                          switch ($level) {
                                                            case 'success':
                                                            case 'error':
                                                            $color = $level;
                                                            break;
                                                            default:
                                                            $color = 'primary';
                                                        }
                                                        ?>

                                                        @component('mail::button', ['url' => $actionUrl, 'color' => $color])
                                                        {{ $actionText }}
                                                        @endcomponent
                                                    </center>
                                                </p> 
                                                @endisset

                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </center>
                        </td>
                    </tr>


                    <tr>
                        <td style="padding: 0 30px; padding-bottom: 30px;">
                           {{-- Outro Lines --}}
                           @foreach ($outroLines as $line)
                           {{ $line }}

                           @endforeach
                       </td>
                   </tr>

                   <tr>
                       <td  style="padding: 0 30px; padding-bottom: 30px;">
                        {{-- Salutation --}}
                        @if (! empty($salutation))
                        {{ $salutation }}
                        @else
                        @lang('Regards'),<br>{{ config('app.name') }}
                        @endif
                    </td>
                </tr>
                <tr>
                    <td style="padding: 0 30px; padding-bottom: 30px;" class="white-header">

                        {{-- Subcopy --}}
                        @isset($actionText)
                         @slot('subcopy')
                        @lang(
                            "If you’re having trouble clicking the \":actionText\" button, 
                            copy and paste the URL below\n".
                            'into your web browser: (:actionURL)',
                            [
                                'actionText' => $actionText,
                                'actionURL' => $actionUrl,
                            ]
                            )
                             @endslot
                            @endisset
                        </td>
                    </tr>
                </table>


                <table class="force-full-width" cellspacing="0" cellpadding="20" bgcolor="#2b934f">
                    <tr>
                        <td style="background-color:#007bff; color:#ffffff; font-size: 14px; text-align: center;">
                           {{-- Copyrights © --}}
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            All Rights Reserved
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</center>
</td>
</tr>
</table>
</body>
</html>
