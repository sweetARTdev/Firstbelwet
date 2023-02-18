<?php

    require_once 'mail.php';

    $user = new Checkmail(); 

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
            // if(mail("dadewale9@gmail.com","My subject","Here is a sample message")){
            //     echo "success";  
            // }
            if ($user->mailFunction($fullname, $gender, $email, $dob, $profession, $phone, $message)) {
                echo "success";        
            }else{
                echo "something went wrong with the mail";
            }                
        }else {
            echo "error";
        }
    }

?>