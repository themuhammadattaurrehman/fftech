<?php
    if(!empty($_POST["send"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $massage=$_POST["massage"];

        $to="farihaiqbal015@gmail.com";
        $mailHeaders="Name : ". $name .
        "\r\n Email: ". $email .
        "\r\n Massage: ". $massage . "\r\n";

        if(mail($to,$name,$mailHeaders)){
            $messege="successfully";
        }
    


    }
?>