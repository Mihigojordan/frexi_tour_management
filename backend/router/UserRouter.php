<?php

// Define the sendResponse function
function sendResponse($statusCode, $message) {
    http_response_code($statusCode);  // Set the HTTP response status code
    echo json_encode(array("message" => $message));  // Return a JSON response
}

// Include the controller
require_once('../controller/UserController.php');

// Create the controller object
$controller = new UserController($pdo);

// Get the HTTP request method and endpoint
$requestMethod = $_SERVER['REQUEST_METHOD'];
$endpoint = $_SERVER['REQUEST_URI'];

// Handle different request methods and endpoints
switch ($requestMethod) {
    case 'POST':
        if (strpos($endpoint, '/register') !== false) {
            $controller->registerUser();
        } elseif (strpos($endpoint, '/login') !== false) {
            $controller->loginUser();
        } elseif (strpos($endpoint, '/update-profile') !== false) {
            $controller->updateUserProfile();
        } else {
            sendResponse(404, "Endpoint not found.");
        }
        break;

    case 'GET':
        if (strpos($endpoint, '/profile') !== false) {
            $controller->getUserProfile();
        } else {
            sendResponse(404, "Endpoint not found.");
        }
        break;

    default:
        sendResponse(405, "Method not allowed.");
}

?>
