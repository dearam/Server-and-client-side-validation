<?php
    function test_input($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    if($_SERVER['REQUEST_METHOD']=='POST'){
        $first_name=$_POST['fname'];
        $first_name=test_input($first_name);
        $last_name=$_POST['lname'];
        $last_name=test_input($last_name);
        $email=$_POST['email'];
        $email=test_input($email);
        $phone=$_POST['phone'];
        $phone=test_input($phone);
        $dob=$_POST['dob'];
        $dob=test_input($dob);
        $address=$_POST['address'];
        $address=test_input($address);


        if(strlen($first_name)>20){
            $first_name_error="its too long";
            $first_name_check=false;
        }else{
            $first_name_check=true;
        }

        if(strlen($last_name)>20){
            $last_name_error="its too long";
            $last_name_check=false;
        }else{
            $last_name_error="";
            $last_name_check=true;
        }

        if(strlen($email)>30 || strlen($email)<8){
            $email_error="Not valid email";
            $email_check=false;
        }else{
            $email_error="";
            $email_check=true;
        }
        if(strlen($phone)>10){
            $email_error="Not valid phone number";
            $phone_check=false;
        }else{
            $email_error="";
            $phone_check=true;
        }
        if(strlen($address)>50){
            $address_error="Not valid address";
            $address_check=false;
        }else{
            $address_error="";
            $address_check=true;
        }

    }

?>