<?php
$url = 'https://coderbyte.com/api/challenges/json/age-counting';
$ch = curl_init($url); //
curl_setopt($ch, CURLOPT_URL, $url); //
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$data = curl_exec($ch);
curl_close($ch);
$response = json_decode($data, true);

$items = explode(', ', $response['data']);
$count = 0;

foreach($items as $item){
    if(substr($item, 0, 4) === 'age=' && filter_var($item, FILTER_SANITIZE_NUMBER_INT) >= 50) // PHP7x
//  if(str_starts_with($item, 'age=') === true && filter_var($item, FILTER_SANITIZE_NUMBER_INT) >= 50) // PHP8x
$count++;
}

echo $count;

?>