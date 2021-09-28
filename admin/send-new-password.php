<?php
session_start();
require('../connection.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


$mail = new PHPMailer;

if (!isset($_POST["email"])) {
    echo "<script language='javascript'>
    window.location='index.php';
    </script>";
}

function generateRandomString($length)
{
    $length = intval($length);
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$temp_pass = generateRandomString(8);
$email = $_POST["email"];
$new_pass = password_hash($temp_pass, PASSWORD_DEFAULT);


try {

    $mail->isSMTP();
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tsl'; // ssl is depracated
    $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
    $mail->Port = 587; // TLS only
    $mail->isHTML(true);
    $mail->Username = "testing.web2122@gmail.com";
    $mail->Password = 'aezakmi1999@';
    $mail->setFrom("testing.web2122@gmail.com", "Shiney-Heinic Dashboard");

    $mail->addAddress($email);


    $mail->Subject = 'Shiney-Heinic International New Login Credentials';

    $mail->msgHTML('<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
        xmlns:o="urn:schemas-microsoft-com:office:office">
    
    <head>
        <!--[if (gte mso 9)|(IE)]>
        <xml>
          <o:OfficeDocumentSettings>
          <o:AllowPNG/>
          <o:PixelsPerInch>96</o:PixelsPerInch>
        </o:OfficeDocumentSettings>
      </xml>
      <![endif]-->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- So that mobile will display zoomed in -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- enable media queries for windows phone 8 -->
        <meta name="format-detection" content="telephone=no"> <!-- disable auto telephone linking in iOS -->
        <meta name="format-detection" content="date=no"> <!-- disable auto date linking in iOS -->
        <meta name="format-detection" content="address=no"> <!-- disable auto address linking in iOS -->
        <meta name="format-detection" content="email=no"> <!-- disable auto email linking in iOS -->
        <meta name="color-scheme" content="only">
        <title></title>
    
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;200;300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
            rel="stylesheet">
    
        <style type="text/css">
            /*Basics*/
            body {
                margin: 0px !important;
                padding: 0px !important;
                display: block !important;
                min-width: 100% !important;
                width: 100% !important;
                -webkit-text-size-adjust: none;
            }
    
            table {
                border-spacing: 0;
                mso-table-lspace: 0pt;
                mso-table-rspace: 0pt;
            }
    
            table td {
                border-collapse: collapse;
                mso-line-height-rule: exactly;
            }
    
            td img {
                -ms-interpolation-mode: bicubic;
                width: auto;
                max-width: auto;
                height: auto;
                margin: auto;
                display: block !important;
                border: 0px;
            }
    
            td p {
                margin: 0;
                padding: 0;
            }
    
            td div {
                margin: 0;
                padding: 0;
            }
    
            td a {
                text-decoration: none;
                color: inherit;
            }
    
            /*Outlook*/
            .ExternalClass {
                width: 100%;
            }
    
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
                line-height: inherit;
            }
    
            .ReadMsgBody {
                width: 100%;
                background-color: #ffffff;
            }
    
            /* iOS BLUE LINKS */
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: none !important;
                font-size: inherit !important;
                font-family: inherit !important;
                font-weight: inherit !important;
                line-height: inherit !important;
            }
    
            /*Gmail blue links*/
            u+#body a {
                color: inherit;
                text-decoration: none;
                font-size: inherit;
                font-family: inherit;
                font-weight: inherit;
                line-height: inherit;
            }
    
            /*Buttons fix*/
            .undoreset a,
            .undoreset a:hover {
                text-decoration: none !important;
            }
    
            .yshortcuts a {
                border-bottom: none !important;
            }
    
            .ios-footer a {
                color: #aaaaaa !important;
                text-decoration: none;
            }
    
            /*Responsive*/
            @media screen and (max-width: 639px) {
                table.row {
                    width: 100% !important;
                    max-width: 100% !important;
                }
    
                td.row {
                    width: 100% !important;
                    max-width: 100% !important;
                }
    
                .img-responsive img {
                    width: 100% !important;
                    max-width: 100% !important;
                    height: auto !important;
                    margin: auto;
                }
    
                .center-float {
                    float: none !important;
                    margin: auto !important;
                }
    
                .center-text {
                    text-align: center !important;
                }
    
                .container-padding {
                    width: 100% !important;
                    padding-left: 15px !important;
                    padding-right: 15px !important;
                }
    
                .container-padding10 {
                    width: 100% !important;
                    padding-left: 10px !important;
                    padding-right: 10px !important;
                }
    
                .container-padding25 {
                    width: 100% !important;
                    padding-left: 25px !important;
                    padding-right: 25px !important;
                }
    
                .hide-mobile {
                    display: none !important;
                }
    
                .menu-container {
                    text-align: center !important;
                }
    
                .autoheight {
                    height: auto !important;
                }
    
                .m-padding-10 {
                    margin: 10px 0 !important;
                }
    
                .m-padding-15 {
                    margin: 15px 0 !important;
                }
    
                .m-padding-20 {
                    margin: 20px 0 !important;
                }
    
                .m-padding-30 {
                    margin: 30px 0 !important;
                }
    
                .m-padding-40 {
                    margin: 40px 0 !important;
                }
    
                .m-padding-50 {
                    margin: 50px 0 !important;
                }
    
                .m-padding-60 {
                    margin: 60px 0 !important;
                }
    
                .m-padding-top10 {
                    margin: 30px 0 0 0 !important;
                }
    
                .m-padding-top15 {
                    margin: 15px 0 0 0 !important;
                }
    
                .m-padding-top20 {
                    margin: 20px 0 0 0 !important;
                }
    
                .m-padding-top30 {
                    margin: 30px 0 0 0 !important;
                }
    
                .m-padding-top40 {
                    margin: 40px 0 0 0 !important;
                }
    
                .m-padding-top50 {
                    margin: 50px 0 0 0 !important;
                }
    
                .m-padding-top60 {
                    margin: 60px 0 0 0 !important;
                }
    
                .m-height10 {
                    font-size: 7px !important;
                    line-height: 7px !important;
                    height: 7px !important;
                }
    
                .m-height15 {
                    font-size: 10px !important;
                    line-height: 10px !important;
                    height: 10px !important;
                }
    
                .m-height20 {
                    font-size: 13px !important;
                    line-height: 13px !important;
                    height: 13px !important;
                }
    
                .m-height25 {
                    font-size: 16px !important;
                    line-height: 16px !important;
                    height: 16px !important;
                }
    
                .m-height30 {
                    font-size: 20px !important;
                    line-height: 20px !important;
                    height: 20px !important;
                }
    
                .rwd-on-mobile {
                    display: inline-block !important;
                    padding: 5px;
                }
    
                .center-on-mobile {
                    text-align: center !important;
                }
            }
        </style>
    
    </head>
    
    <body Simpli
        style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;"
        bgcolor="#F0F0F0">
    
        <span class="preheader-text" Simpli
            style="color: transparent; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; visibility: hidden; width: 0; display: none; mso-hide: all;"></span>
    
        <div
            style="display:none; font-size:0px; line-height:0px; max-height:0px; max-width:0px; opacity:0; overflow:hidden; visibility:hidden; mso-hide:all;">
        </div>
    
        <table border="0" align="center" cellpadding="0" cellspacing="0" width="100%" style="width:100%;max-width:100%;">
            <tr>
                <!-- Outer Table -->
                <td align="center" Simpli bgcolor="#F0F0F0" data-composer>
    
                    <table border="0" align="center" cellpadding="0" cellspacing="0" class="row" role="presentation"
                        width="640" style="width:640px;max-width:640px;" Simpli>
                        <!-- simpli-header-13 -->
                        <tr>
                            <td align="center">
    
    
    
                                <table border="0" align="center" cellpadding="0" cellspacing="0" role="presentation"
                                    class="row container-padding25" width="600"
                                    style="padding-top:5%;width:600px;max-width:600px;">
                                    <!-- basic-info -->
                                    <tr>
                                        <td align="center" Simpli bgcolor="#FFFFFF"
                                            style="border-radius:36px 36px 36px 36px; border-bottom:solid 6px #DDDDDD;">
                                            <!-- content -->
                                            <table border="0" align="center" cellpadding="0" cellspacing="0"
                                                role="presentation" class="row container-padding" width="520"
                                                style="padding-top:20px;width:520px;max-width:520px;">
                                                <tr>
                                                    <td class="center-text" Simpli align="center"
                                                        style="font-family:Catamaran,Arial,Helvetica,sans-serif;font-size:12px;line-height:24px;font-weight:900;font-style:normal;color:#1898c2;text-decoration:none;letter-spacing:2px;">
                                                        <singleline>
                                                            <div mc:edit Simpli>
                                                                <p>Shiney-Heinic International</p>
                                                            </div>
                                                        </singleline>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="center-text" Simpli align="center"
                                                        style="font-family:Catamaran,Arial,Helvetica,sans-serif;font-size:28px;line-height:54px;font-weight:700;font-style:normal;color:#333333;text-decoration:none;letter-spacing:0px;">
                                                        <singleline>
                                                            <div mc:edit Simpli>
                                                               Here are your New Credentials!!!
                                                            </div>
                                                        </singleline>
                                                    </td>
                                                </tr>
    
    
                                                <tr>
                                                    <td height="15" style="font-size:15px;line-height:15px;" Simpli>&nbsp;
                                                    </td>
                                                </tr>
    
                                                <tr>
                                                    <td align="center">
                                                        <!-- Content -->
                                                        <table border="0" align="center" cellpadding="0" cellspacing="0"
                                                            role="presentation" class="row" width="480"
                                                            style="width:480px;max-width:480px;">
                                                            <tr>
                                                                <td height="20" style="font-size:20px;line-height:20px;"
                                                                    Simpli>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td align="center">
                                                                    <!--[if (gte mso 9)|(IE)]><table border="0" cellpadding="0" cellspacing="0"><tr><td><![endif]-->
                                                                    <!-- column -->
                                                                    <table border="0" align="left" cellpadding="0"
                                                                        cellspacing="0" role="presentation" class="row"
                                                                        width="350" style="width:350;max-width:350px;">
                                                                        <tr>
                                                                            <td class="center-text" Simpli align="left"
                                                                                style="font-family:Catamaran,Arial,Helvetica,sans-serif;font-size:15px;line-height:24px;font-weight:700;font-style:normal;color:#333333;text-decoration:none;letter-spacing:0px;">
                                                                                <singleline>
                                                                                    <div mc:edit Simpli>
                                                                                        <p style="margin: 3%;">Email : ' .
        $email . '</p>
                                                                                        <p style="margin: 3%;">Password : '
        . $temp_pass . '</p>
                                                                                    </div>
                                                                                </singleline>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td height="10"
                                                                                style="font-size:10px;line-height:10px;"
                                                                                Simpli>&nbsp;</td>
                                                                        </tr>
                                                                    </table>
    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td height="10" style="font-size:10px;line-height:10px;"
                                                                    Simpli>&nbsp;</td>
                                                            </tr>
                                                        </table>
                                                        <table border="0" cellspacing="0"
                                                            style="max-width: 500px;width: 30%;padding-left: 5%;padding-right: 5%;text-align: center;"
                                                            cellpadding="0" role="presentation" align="center"
                                                            class="center-float" style="margin-top: 10%;">
                                                            <tr>
                                                                <td bgcolor="#ff7775" style="border-radius: 6px;">
    
                                                                    <singleline>
                                                                        <a href="https://redvine.roundtechsquare.com/admin"
                                                                            target="_blank" mc:edit
                                                                            style="font-family:Catamaran,Arial,Helvetica,sans-serif;font-size:14px;line-height:17px;font-weight:700;font-style:normal;color:#FFFFFF;text-decoration:none;letter-spacing:0px;padding: 10px;display: inline-block;"><span>LOGIN</span></a><br>
                                                                    </singleline>
    
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p
                                                                        style="font-family:Catamaran,Arial,Helvetica,sans-serif;font-size:10px;line-height:10px;font-style:normal;color:#333333;text-decoration:none;letter-spacing:0px;padding: 10px;display: inline-block;">
                                                                        *Click here to login</p>
                                                                </td>
                                                            </tr>
    
                                                        </table>
                                                        <!-- Content -->
                                                    </td>
                                                </tr>
    
                                                <tr>
                                                    <td height="40" style="font-size:40px;line-height:40px;" Simpli>&nbsp;
                                                    </td>
                                                </tr>
                                            </table>
                                            <!-- content -->
                                        </td>
                                    </tr>
                                    <!-- basic-info -->
                                </table>
    
                            </td>
                        </tr>
                        <!-- simpli-header-13 -->
                    </table>
    
    
    
    
                </td>
            </tr><!-- Outer-Table -->
        </table>
    
    </body>
    
    </html>
  ');
    $mail->AltBody = 'HTML messaging not supported';
    if ($mail->send()) {
        $result = $con->query("SELECT * from admin WHERE email=\"$email\" ");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            $result1 = $con->query("UPDATE admin SET password=\"$new_pass\" WHERE email=\"$email\"");

            if ($result1) {

                $_SESSION['email-sent'] = true;
                echo "<script language='javascript'>
                        window.location= 'forgot-password.php'; 
                    </script>";
            } else {
                $_SESSION['email-sent'] = false;
                echo "<script language='javascript'>
                        window.location= 'forgot-password.php'; 
                    </script>";
            }
        } else {
            $_SESSION['email-sent'] = false;
            echo "<script language='javascript'>
                         window.location= 'forgot-password.php'; 
                    </script>";
        }
    } else {
        $_SESSION['email-sent'] = false;
        echo "<script language='javascript'>
                    window.location= 'forgot-password.php'; 
                </script>";
    }
} catch (Exception $e) {
    $_SESSION['email-sent'] = false;
    echo "<script language='javascript'>
            window.location= 'forgot-password.php'; 
            </script>";
}
