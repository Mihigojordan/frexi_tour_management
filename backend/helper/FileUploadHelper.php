<?php

function handleFileUpload($file)
{
    if (isset($file) && $file['error'] == 0) {
        $targetDir = "../uploads/";
        $targetFile = $targetDir . basename($file["name"]);
        
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $validImageTypes = ['jpg', 'png', 'jpeg', 'gif'];
        
        if (!in_array($imageFileType, $validImageTypes)) {
            return [
                'status' => 400,
                'message' => "Invalid file type. Only JPG, PNG, JPEG, and GIF are allowed."
            ];
        }
        
        if (file_exists($targetFile)) {
            return [
                'status' => 400,
                'message' => "Sorry, file already exists."
            ];
        }
        
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return [
                'status' => 200,
                'file_name' => basename($file["name"])
            ];
        } else {
            return [
                'status' => 500,
                'message' => "There was an error uploading the file."
            ];
        }
    }
    return [
        'status' => 400,
        'message' => "No file uploaded."
    ];
}

?>
