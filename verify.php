<?php
$access_token = 'E76U0pGPFQHUS7DzAD8LuaIjJN88l8oEoi4I/VtpPdmlyx+zTEZFuazoRIDJIt/j6iwSErQqgT95HiHYKTxHgsTs3aJBD4CHqnyZNwkQZ/8sRsxCRlK4bI65tguweSZjiNUnCRG7H6Dk3jsp5uctWQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
