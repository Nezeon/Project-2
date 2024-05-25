<?php
// Database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'places';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// CRUD operations
function createPlace($name, $description, $photoUrl) {
    global $conn;
    $name = $conn->real_escape_string($name);
    $description = $conn->real_escape_string($description);
    $photoUrl = $conn->real_escape_string($photoUrl);
    $sql = "INSERT INTO places (name, description, photo_url) VALUES ('$name', '$description', '$photoUrl')";
    return $conn->query($sql);
}

function getPlaceById($id) {
    global $conn;
    $id = intval($id);
    $sql = "SELECT * FROM places WHERE id = $id";
    $result = $conn->query($sql);
    return $result->fetch_assoc();
}

// Similarly, you can implement update and delete operations

// Example usage:
// createPlace('Nainital', 'Description of Nainital', 'nainital.jpg');
// $place = getPlaceById(1);
// print_r($place);

$conn->close();
?>
