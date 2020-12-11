<?php

$subject='Mail from ';

$to="mdpannasunny@gmail.com";

$headers='From: mdpanna600@gmail.com';
$message='hello';
        
if(!mail($to,$subject,$message,$headers)){
      echo "Mailer Error ";
}else{
    echo "Successfully sent!";
}



        
        

?>
