<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = "dakirschman@gmail.com";
    $subject = "Test email";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '. $_POST['email'] . "\r\n";

    try{
        //mail($to,$subject,$_POST['message'],$headers);
        $content = '<p>Success!</p>';
    } catch (Exception $e) {
        $content = '<p>Fail!</p>';
    }
}