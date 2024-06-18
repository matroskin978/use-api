<?php

$url = 'http://laravel-api.loc/api/v1/categories';
$token = '8|ps0SRkRme0sfxusegv7lpVJbcklphei8zI6RzSIgfab8d132';
$auth = "Authorization: Bearer {$token}";

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
//    'Content-Type: application/json',
    'Accept: application/json',
    $auth,
]);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['title' => 'Category 10'], '', '&'));
//curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['title' => 'Category 9']));

$res = curl_exec($ch);
curl_close($ch);

var_dump(curl_getinfo($ch, CURLINFO_HTTP_CODE));

echo '<pre>';
print_r(json_decode($res, true));
echo '</pre>';
