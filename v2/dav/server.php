<?php

    // require_once 'mail.php';

    // $user = new Checkmail(); 

    if (isset($_POST['action']) && $_POST['action'] == 'submitContact') {
        // var_dump($_POST);
        $fullname =  $_POST['fullname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $profession = $_POST['profession'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        if (!empty( $fullname) && !empty($gender) && !empty($email) && !empty($dob) && !empty($profession) && !empty($phone) && !empty($message)) {
            $mailheader = "From " .$fullname. "<" .$email. ">\r\n";
            $receiver = "belwetmindclinic@gmail.com";
            $subject = "Mail Message from " .$fullname;

            $delivery = '
            <!doctype html>
            <html>
              <head>
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <title>Contact Enquiry</title>
                <style>
                    @media only screen and (max-width: 620px) {
                        table.body h1 {
                            font-size: 28px !important;
                            margin-bottom: 10px !important;
                        }
            
                        table.body p,
                        table.body ul,
                        table.body ol,
                        table.body td,
                        table.body span,
                        table.body a {
                            font-size: 16px !important;
                        }
            
                        table.body .wrapper,
                        table.body .article {
                            padding: 10px !important;
                        }
            
                        table.body .content {
                            padding: 0 !important;
                        }
            
                        table.body .container {
                            padding: 0 !important;
                            width: 100% !important;
                        }
            
                        table.body .main {
                            border-left-width: 0 !important;
                            border-radius: 0 !important;
                            border-right-width: 0 !important;
                        }
                        
                        table.body .btn table {
                            width: 100% !important;
                        }
                        
                        table.body .btn a {
                            width: 100% !important;
                        }
                        
                        table.body .img-responsive {
                            height: auto !important;
                            max-width: 100% !important;
                            width: auto !important;
                        }
                    }
                    @media all {
                        .ExternalClass {
                            width: 100%;
                        }
            
                        .ExternalClass,
                        .ExternalClass p,
                        .ExternalClass span,
                        .ExternalClass font,
                        .ExternalClass td,
                        .ExternalClass div {
                            line-height: 100%;
                        }
            
                        .apple-link a {
                            color: inherit !important;
                            font-family: inherit !important;
                            font-size: inherit !important;
                            font-weight: inherit !important;
                            line-height: inherit !important;
                            text-decoration: none !important;
                        }
            
                        #MessageViewBody a {
                            color: inherit;
                            text-decoration: none;
                            font-size: inherit;
                            font-family: inherit;
                            font-weight: inherit;
                            line-height: inherit;
                        }
                        
                        .btn-primary table td:hover {
                            background-color: #34495e !important;
                        }
                        
                        .btn-primary a:hover {
                            background-color: #34495e !important;
                            border-color: #34495e !important;
                        }
                    }
                </style>
                </head>
                <body style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">                
                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;" width="100%" bgcolor="#f6f6f6">
                        <tr>
                            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">&nbsp;</td>
                            <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;" width="580" valign="top">
                            <div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;">            
                                <table role="presentation" class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #333; border-radius: 3px; width: 100%;" width="100%">                                  
                                    <tr>
                                        <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;" valign="top">
                                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;" width="100%">
                                            <tr style="color:#fff">
                                                <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;" valign="top">
                                                    <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Dear Admin,</p>
                                                    
                                                    <p style="font-family: sans-serif; font-size: 20px; font-weight: normal; margin: 0; margin-bottom: 15px;">Kindly fiind the details of the contact us Enquiry </p>
                                                    <p style="font-family: sans-serif; font-size: 20px; font-weight: normal; margin: 0; margin-bottom: 15px;">Fullname: '.$fullname.'</p>
                                                    <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Gender: '.$gender.'</p>
                                                    <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Email: '.$email.'</p>
                                                    <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Date of Birth: '.$dob.'</p>
                                                    <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Profession: '.$profession.'</p>
                                                    <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Phone: '.$phone.'</p>
                                                    <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">Message: '.$message.'</p>
                                                    
                                                </td>
                                            </tr>
                                        </table>
                                        </td>
                                    </tr>
                    
                                </table>
                                
                            </div>
                            </td>
                        </tr>
                    </table>
              </body>
            </html>
            ';
            mail($receiver, $subject, $delivery, $mailheader)
            or die("Somthing went wrong on the server");
            echo "success";


            // if (mail($receiver, $subject, $delivery, $mailheader)) {
            //     echo 'success';
            // } else {
            //     echo 'problem';
            // }
                                                    
        }else {
            echo "error";
        }
    }

?>