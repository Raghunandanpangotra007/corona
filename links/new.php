<?php

$data = file_get_contents('https://mahabub81.github.io/covid-19-api/api/v1/countries.json');
$coronadata = json_decode($data);

echo "<pre>";
print_r($coronadata);
?>