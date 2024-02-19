<?php

// Data to be returned by the API
$data = array(
    array(
        'id' => 1,
        'name' => 'John Doe',
        'email' => 'john@example.com'
    ),
    array(
        'id' => 2,
        'name' => 'Jane Smith',
        'email' => 'jane@example.com'
    ),
    // Add more data as needed
);

// Set headers to indicate JSON content type
header('Content-Type: application/json');

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Encode the data array as JSON and echo it
    echo json_encode($data);
} else {
    // If the request method is not GET, return an error message
    http_response_code(405); // Method Not Allowed
    echo json_encode(array('message' => 'Method Not Allowed'));
}
