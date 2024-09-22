<?php
// database connection
$servername = "localhost"; // Use your actual server name
$username = "root"; // Replace with your DB username
$password = ""; // Replace with your DB password
$dbname = "apitestdatabase"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$show_number = isset($_GET['show_number']) && $_GET['show_number'] == 'true';
// Fetch the number from the table
$sql = "SELECT number_column FROM collected_api_key WHERE id = 1"; // Adjust query
$result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     $row = $result->fetch_assoc();
//     $number = $row['number_column'];
//     echo json_encode(array("number" => $number));
// } else {
//     echo json_encode(array("error" => "No number found"));
// }
// Check if the `show_number` parameter is set
// $show_number = isset($_GET['show_number']) && $_GET['show_number'] == 'true';

// // Fetch the number from the database
// $sql = "SELECT number_column FROM your_table_name WHERE id = 1";
// $result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $number = $row['number_column'];

    // Conditionally show or hide the number based on the parameter
    if ($show_number) {
        echo json_encode(array("number" => $number));
    } else {
        echo json_encode(array("number" => "hidden"));
    }
} else {
    echo json_encode(array("error" => "No number found"));
}



$conn->close();
?>
