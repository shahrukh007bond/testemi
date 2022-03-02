<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.instagram.com/graphql/query/?query_hash=3e7706b09c6184d5eafd8b032dbcf487&variables=%7B%22tag_name%22:%22nature%22,%22first%22:1,%22after%22:%22%22%7D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'x-requested-with: XMLHttpRequest',
    'Authorization: Bearer IGQVJXZADZAWbmo1bGw0QlFiM2hPTEFobldsR2VQZAjV3dkk4TXpXT2NBNUFILS1tdDZA1eTY2R2VINzdIWjBFc1hOTTdlUEh2ZAnNCdF8tU19jUzFNck9wNE1MTDJQN2k3THo5UnJZAZAXlhV3VMSnBERHlkTTJMc2pfRTZAVUFNn',
    'Cookie: csrftoken=xB3TzYE0LciCsimDN3rjtRXHckokaPkL; ig_did=1A9D6D7D-5F03-45E6-9D79-3D6B30DBE211; ig_nrcb=1; mid=YeWsWgAEAAFm2eTq7VnKGw5Wwqrq'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
