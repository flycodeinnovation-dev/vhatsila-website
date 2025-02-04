<?php
// Database connection details
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'vhatsila_transport';

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve search query
$query = isset($_GET['query']) ? trim($_GET['query']) : '';

if (!empty($query)) {
    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM transport_services WHERE service_name LIKE ? OR description LIKE ?");
    $searchTerm = "%" . $query . "%";
    $stmt->bind_param("ss", $searchTerm, $searchTerm);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<h1 style='text-align: center;'>Search Results for '$query'</h1>";
    echo "<div class='results'>";

    if ($result->num_rows > 0) {
        // Output results
        while ($row = $result->fetch_assoc()) {
            echo "<p><strong>" . htmlspecialchars($row['service_name']) . "</strong>: " . htmlspecialchars($row['description']) . "</p>";
        }
    } else {
        echo "<p>No results found for '$query'.</p>";
    }

    echo "</div>";

    $stmt->close();
} else {
    echo "<h1 style='text-align: center;'>Please enter a search term.</h1>";
}

$conn->close();
?>