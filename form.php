<?php
    if(!empty($_POST["send"])){
        $name=$_POST["name"];
        $email=$_POST["email"];
        $phone=$_POST['phone'];
        $massage=$_POST["massage"];

        $to="farihaiqbal015@gmail.com";
        $mailHeaders="Name : ". $name .
        "\r\n Email: ". $email .
        "\r\n phone: ". $phone .
        "\r\n Massage: ". $massage . "\r\n";

        if(mail($to,$name,$mailHeaders)){
            $message="successfully send this message to fftech solution teams";
        }

    }
?>