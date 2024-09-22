<?php
$api_url = 'http://localhost/oop-problem/api-test/two-column/get_api.php';

$response = file_get_contents($api_url);
$data = json_decode($response, true);

if (isset($data['number'])) {
    $number = $data['number']; // This will be "hidden"
    $second_value = $data['second_column']; // This will show the second column's value
    echo "The number is: " . $number . "<br>"; // Displays "hidden"
    echo "The second column value is: " . $second_value; // Displays actual value from second column
} else {
    echo "Error: No data found.";
}
?>
