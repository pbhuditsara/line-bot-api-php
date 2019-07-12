<?php
$access_token ='CXHVuZQFzz00t/l7v2gWWDGYzPC2gML2gzDjH9CtYiP/bBz5qr3fbu0kFztmYilFGVWITj+tUb5rh6uqqUT+H57ITY4JcfbJyEy8hJKDPhucmKE+HX7SsVcq6jHH5rcP2RHkaiQtSJYiwvIHHC9Z7QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
