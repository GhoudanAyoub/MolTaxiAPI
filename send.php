<?php
$ch=curl_init("https://fcm.googleapis.com/fcm/send");
$header=array("Content-Type:application/json","Authorization: key=AAAAnSVv7kU:APA91bErWb1Ps-29el8QjW-UdQA21QNcvDyf8yBHJBpJWhNA140K7Xr0JysE4--eLlI9NK0721-s53Hqp6uHPzafQ9sd_EvWBGt-N5ymSuy0H0paEl4xJZG-sbh1jDufr702fTzbYFBn");


$data=json_encode(array("to"=>$_REQUEST['to'],"notification"=>array("title"=>$_REQUEST['title'],"body"=>$_REQUEST['body'])));
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_exec($ch);
?>