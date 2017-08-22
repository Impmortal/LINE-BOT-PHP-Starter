<?php
$access_token = '0d9vJaKXL2ylsdgClI8tBqG0DmUvlvuNVKKx2+FWy7nCS/HncVxJCTCGOGUSB/GdOSOwgl6MdBLK4UXGSM/TG6l+23aRM3eqUKa8MXUh8LSbWqv8PFIMrkxNaYWxTXyXHkIVRt1hho1cW61O0PjMOQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;