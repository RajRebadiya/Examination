<?php
// Database connection establishment - Replace with your connection details
include "config.php";

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Update user status query
    $query = "UPDATE users SET status = 'approved' WHERE id = '$id'";

    // Execute the query
    $result = mysqli_query($con, $query);

    if ($result) {
        // Query executed successfully
        echo "User status updated successfully.";
    } else {
        // Error occurred while executing the query
        echo "Error updating user status: " . mysqli_error($con);
    }
} else {
    // No ID provided in the POST request
    echo "No user ID provided.";
}

// Close the database connection
mysqli_close($con);
