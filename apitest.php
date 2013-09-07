<?php

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "http://google.com/"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('
GET /rest/1/ads?Category=Auto HTTP/1.1
X-HostCommonName: api.att.com
Authorization: BEARER 9680abb38456069cbccc61175239bde1
Host: api-uat.bf.pacer.sl.attcompute.com
UDID: 012266005922565000000000000000
User-Agent: Apple-iPhone/501.347
X-Target-URI: https://api-uat.bf.pacer.sl.attcompute.com
Connection: Keep-Alive 
'));
$response = curl_exec($ch); 
curl_close($ch);   

echo $response;
?>
