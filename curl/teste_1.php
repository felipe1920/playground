<?php
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.apispreadsheets.com/data/b8SO9AgQaeZqq6Am/?accessKey=XXXXX&secretKey=XXXXX',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_CONNECTTIMEOUT => 30,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode([
        'data' => []
    ]),
    CURLOPT_HTTPHEADER => array(
        'accessKey: XXXXX',
        'secretKey: XXXXX',
        'Content-Type: application/json'
    ),
    //CURLOPT_AUTOREFERER => true,
    //CURLOPT_HEADER => true,
));

$response = curl_exec($curl);
$status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);

echo "\r\n\r\n---------- status_code ----------\r\n\r\n";
print_r($status_code);
echo "\r\n\r\n---------- response ----------\r\n\r\n";
print_r($response);
