<?php
if(isset($_POST['submit'])){
    $mailto="sr.gold.harshitha@gmail.com";
    $from=$_POST['email'];
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $subject2="Your Message is Received";
    $message=$_POST['message'];
    $message2="Thank You For Your Support";
    $headers="From: ".$from;
    $headers2="From: ".$mailto;
    $result=mail($mailto,$subject,$message,$headers);
    $result2=mail($from,$subject2,$message2,$headers2);
}
?>