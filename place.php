<?php
// Database connection parameters
$dsn = 'mysql:host=localhost;dbname=places';
$username = 'root';
$password = '';

// Attempt database connection
try {
    $pdo = new PDO($dsn, $username, $password);
    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

// Check if the 'id' parameter is present in the URL
if(isset($_GET['id'])) {
    $place_id = $_GET['id'];
    try {
        // Prepare the SQL query to fetch the place details
        $stmt = $pdo->prepare("SELECT * FROM places WHERE id = :place_id");
        // Bind parameters
        $stmt->bindParam(':place_id', $place_id, PDO::PARAM_INT);
        // Execute the query
        $stmt->execute();
        // Fetch the place details
        $place = $stmt->fetch(PDO::FETCH_ASSOC);

        // Redirect to the appropriate page based on the place details
        if ($place) {
            // Check the place name and redirect accordingly
            switch ($place['name']) {
                case 'Nainital':
                    header("Location: nainital.php");
                    exit();
                case 'Goa':
                    header("Location: goa.php");
                    exit();
                case 'Haryana':
                    header("Location: haryana.php");
                    exit();
                case 'Madhya Pradesh':
                    header("Location: mp.php");
                    exit();
                case 'Gujarat':
                    header("Location: gujarat.php");
                    exit();
                case 'Jharkhand':
                    header("Location: jharkhand.php");
                    exit();
                case 'Kerala':
                    header("Location: kerala.php");
                    exit();
                case 'Nagaland':
                    header("Location: nagaland.php");
                    exit();
                case 'Punjab':
                    header("Location: punjab.php");
                    exit();
                case 'Bihar':
                    header("Location: bihar.php");
                    exit();     
                case 'Shillong':
                    header("Location: shillong.php");
                    exit(); 
                case 'Shojha':
                    header("Location: shojha.php");
                    exit();  
                case 'Tawang':
                    header("Location: tawang.php");
                    exit();  
                case 'Gokarna':
                    header("Location: gokarna.php");
                    exit();
                case 'Darjeeling':
                    header("Location: darjeeling.php");
                    exit();  
                // Add more cases for other places if needed
                default:
                    // Redirect to a default page or show an error message
                    header("Location: default.php");
                    exit();
            }
        } else {
            // Place not found, redirect to an error page or show an error message
            header("Location: error.php");
            exit();
        }
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }
} else {
    // 'id' parameter not found in the URL, redirect to an error page or show an error message
    header("Location: error.php");
    exit();
}
?>
