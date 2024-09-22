<?php
// database connection
$servername = "localhost"; // Use your actual server name
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "apitestdatabase"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the table
$sql = "SELECT number_column, second_column FROM two_api_key WHERE id = 1"; // Adjust query as needed
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $number = $row['number_column'];
    $second_value = $row['second_column'];

    // Decide whether to show the actual number or a hidden text
    echo json_encode(array(
        "number" => "hidden", // Always hidden
        "second_column" => $second_value // Show this value
    ));
} else {
    echo json_encode(array("error" => "No data found"));
}

$conn->close();
?>
