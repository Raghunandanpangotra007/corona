<?php

// $data = file_get_contents('https://api.covid19api.com/summary');
// $data = file_get_contents('https://api.apify.com/v2/key-value-stores/tVaYRsPHLjNdNBu7S/records/LATEST?disableRedirect=true');

$data = file_get_contents('https://data.covid19india.org/v4/min/data.min.json');
$coronadata = json_decode($data);

echo "<pre>";
print_r($coronadata);

?>