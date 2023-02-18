<?php

    require_once 'mail.php';

    $user = new CheckMail();

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
            $user->mailFunction();
            echo "success";            
        }else {
            echo "error";
        }
    }

?>