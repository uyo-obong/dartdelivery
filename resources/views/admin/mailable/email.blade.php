<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Implemented byLegendary -->

    <style type="text/css">
        /* Take care of image borders and formatting */

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


    </style>

    <style type="text/css" media="screen">
        @media screen {
            @import url(http://fonts.googleapis.com/css?family=PT+Sans:400,700);
            /* Thanks Outlook 2013! */
            * {
                font-family: 'PT Sans', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
            }
        }
    </style>

    <style type="text/css" media="only screen and (max-width: 599px)">
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
                                        <br>
                                        <a href="#"><img style="width: 40%;" src="{{ $logo }}" alt="Logo"></a>
                                    </td>
                                    <td class="icons">
                                        <br>
                                        {{--<a href="#"><img src="https://www.filepicker.io/api/file/Rw9fFADxSxK1JyEuQanm" alt="facebook"></a>--}}
                                        {{--<a href="#"><img src="https://www.filepicker.io/api/file/WzHKffHYQKe7xpO35hSw" alt="twitter"></a>--}}
                                        {{--<a href="#"><img src="https://www.filepicker.io/api/file/doa3fyePR0Kdnu55nlNo" alt="google+"></a>--}}
                                        {{--<a href="#"><img src="https://www.filepicker.io/api/file/dresyXUMRjalUp3zvwXC" alt="instagram"></a>--}}
                                    </td>
                                </tr>
                            </table>

                            <table cellspacing="0" cellpadding="0" class="force-full-width" bgcolor="#232925">
                                <tr>
                                    <td class="computer-image">
                                        <br>
                                        <br class="mobile-hide" />
                                        <img style="display:block;" width="224" height="180" src="{{ $image }}" alt="hello">
                                    </td>
                                    <td style="color: #ffffff;" class="header-text">
                                        <br>
                                        <br>
                                        <span style="font-size: 24px;">Hi {{ $name }},</span><br><br>
                                        {{ $description }}
                                        <br>
                                        <br>
                                        <div><!--[if mso]>
                                            <v:rect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://" style="height:40px;v-text-anchor:middle;width:150px;" stroke="f" fillcolor="#2b934f">
                                                <w:anchorlock/>
                                                <center>
                                            <![endif]-->
                                            <a href="tel:+12252383220"
                                               style="background-color:#007bff;color:#ffffff;display:inline-block;font-family:Helvetcia, sans-serif;font-size:16px;font-weight:light;line-height:40px;text-align:center;text-decoration:none;width:150px;-webkit-text-size-adjust:none;">Make Payment</a>
                                            <!--[if mso]>
                                            </center>
                                            </v:rect>
                                            <![endif]-->
                                        </div>
                                        <br>
                                    </td>
                                </tr>
                            </table>


                            <table class="force-full-width" cellspacing="0" cellpadding="30" bgcolor="#ebebeb">
                                <tr>
                                    <td class="mobile-block" style="width: 170px; vertical-align:top;">
                                        <table cellspacing="0" cellpadding="0" width="100%">
                                            <tr>
                                                <td>
                                                    <span class="header">Invoice Date:</span><br>
                                                    {{  $date->isoFormat('MMM Do YYYY') }} <br><br>
                                                    <span class="header">Bob Erlicious</span> <br>
                                                    123 Bobby Drive <br>
                                                    Victoria, BC <br>
                                                    V9A 8P8, US <br>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="mobile-block" width="325">
                                        <table cellspacing="0" cellpadding="0" width="100%">
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" width="100%">
                                                        <tr>
                                                            <td class="grey-header">
                                                                Payment method
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="white-header">
                                                                Call +12252383220 to make payment
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" width="100%">
                                                        <tr>
                                                            <td class="white-header">
                                                                Deliver in 7 working Days
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    &nbsp;
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table cellspacing="0" cellpadding="0" width="100%">
                                                        <tr>
                                                            <td class="grey-header">
                                                                Amount
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="white-header">
                                                                ${{ $price }}
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>


                            <table cellspacing="0" cellpadding="0" class="force-full-width" bgcolor="#ebebeb">
                                <tr>
                                    <td style="padding: 0 30px; padding-bottom: 30px;">
                                        The amount of <b>${{ $price }}</b> will be charge on shipping {{ $type }} to {{ $address }}. Please feel free to <a href="tel:+12252383220">contact us</a> with any questions regarding this invoice.<br><br>
                                        Sincerely,<br>
                                        Dartdelivery Inc
                                    </td>
                                </tr>
                            </table>


                            <table class="force-full-width" cellspacing="0" cellpadding="20" bgcolor="#2b934f">
                                <tr>
                                    <td style="background-color:#007bff; color:#ffffff; font-size: 14px; text-align: center;">
                                        © {{  $date->isoFormat('YYYY') }} All Rights Reserved
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
