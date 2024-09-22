<?php
$api_url = 'http://localhost/oop-problem/api-test/one-column/get_api.php?show_number=true'; // Add the parameter

$response = file_get_contents($api_url);
$data = json_decode($response, true);

if (isset($data['number'])) {
    $number = $data['number'];
    echo "The number is: " . $number;
} else {
    echo "Error: Number not found.";
}
?>
