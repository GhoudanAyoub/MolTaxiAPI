<?php
$ch=curl_init("https://fcm.googleapis.com/fcm/send");
$header=array("Content-Type:application/json","Authorization: key=<KEY_APP>");


$data=json_encode(array("to"=>$_REQUEST['to'],"notification"=>array("title"=>$_REQUEST['title'],"body"=>$_REQUEST['body'])));
curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_exec($ch);
?>
