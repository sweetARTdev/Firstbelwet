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
            $receiver = "abigail.olasehinde@belwetmindclinic.com";
            $subject = "Mail Message from " .$fullname;

            $delivery = '
            Fullname: '.$fullname.'
            Gender: '.$gender. '
            Email: '.$email. '
            Date of birth: '.$dob.'
            Profession: '.$profession.'
            Phone no: '.$phone.'
            Message: '.$message.'
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