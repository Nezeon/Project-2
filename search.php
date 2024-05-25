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

// Initialize $results variable
$results = [];

// Check if a search query is received
if(isset($_GET['query'])) {
    $search_query = '%' . $_GET['query'] . '%';

    try {
        // Prepare the SQL query
        $stmt = $pdo->prepare("SELECT * FROM places WHERE name LIKE :search_query");
        // Bind parameters
        $stmt->bindParam(':search_query', $search_query, PDO::PARAM_STR);
        // Execute the query
        $stmt->execute();
        // Fetch the results
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Query failed: " . $e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
            margin-top: 30px;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .card {
            width: 90%; /* Adjust card width as needed */
            margin: auto; /* Center the card horizontally */
            background-color: #f0f0f0; /* Light gray background color */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
            display: flex;
            align-items: center; /* Center vertically */
            padding: 10px;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-photo {
            flex: 1;
            max-width: 500px; /* Adjust max-width as needed */
            height: auto;
            padding-left: 10px;
            margin-left: 30px;
        }

        .card-details {
            flex: 2;
            padding: 40px 80px; /* Adjust padding top and bottom */
        }

        .card-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 50%;
            margin-top: -70px;
        }

        .card h1 {
            font-size: 5em;
            margin-bottom: 10px;
            color: #333;
            font-weight: bold;
        }

        .card a {
            padding: 5px 15px; /* Decrease padding for the button */
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            display: inline-block;
            text-align: center; /* Center text horizontally */
        }

        .card a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Search Results Heading (Initially Hidden) -->
    <div class="search-heading">
        <h1>Search Results</h1>
    </div>

    <!-- Display search results -->
    <div class="card-container">
        <?php if (isset($results) && !empty($results)): ?>
            <?php foreach ($results as $place): ?>
                <div class="card">
                    <img class="card-photo" src="<?php echo $place['photo_url']; ?>" alt="<?php echo $place['name']; ?>">
                    <div class="card-details">
                        <div class="card-content">
                            <h1><?php echo $place['name']; ?></h1>
                            <a href="place.php?id=<?php echo $place['id']; ?>">Learn More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <?php if (isset($_GET['query']) && !empty($_GET['query'])): ?>
                <!-- If no results are found for the search query -->
                <p>No results found.</p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>