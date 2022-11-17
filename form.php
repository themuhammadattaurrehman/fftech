<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $massage=$_POST['massage'];

        $to='ali.iiui1234@gmail.com';
        $subject='form';
        $message="name : ".$name."\n"."Massage : ".$massage.
        $headers="From: ".$email;
    


    }
?>