<?php

function sendResponse($statusCode, $message, $data = null)
{
    header("Content-Type: application/json", true, $statusCode);
    echo json_encode([
        'message' => $message,
        'data' => $data
    ]);
    exit();
}

?>
