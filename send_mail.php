<?php
$to="deekurmi2018@gmail.com";
$subject="New User has registered";
$message="hii how are you";
$headers="From: deekurmi2018@gmail.com"."\r\n";
$headers.="MIME-Version:1.0"."\r\n";
$headers.="Content-type:text/html; charset=UTF-8";
if(mail($to,$subject,$message,$headers))
{
    echo "okk";
}
else
{
    echo "error";
}
?>