<?php

require_once('../model/Admin.php');
require_once('../helper/FileUploadHelper.php');

class UserController
{
    private $pdo;
    private $userModel;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
        $this->userModel = new User($this->pdo);
    }

    public function registerUser()
    {
        $data = json_decode(file_get_contents("php://input"), true);
        
        if (empty($data['email']) || empty($data['password']) || empty($data['phoneNumber']) || empty($data['name'])) {
            return sendResponse(400, "Please provide email, password, and name.");
        }

        $existingUser = $this->userModel->getUserByEmail($data['email']);
        if ($existingUser) {
            return sendResponse(409, "Email already exists.");
        }

        $fileUploadResult = handleFileUpload($_FILES['profileImage']);
        if ($fileUploadResult['status'] !== 200) {
            return sendResponse($fileUploadResult['status'], $fileUploadResult['message']);
        }

        $profileImage = $fileUploadResult['file_name'];

        if ($this->userModel->createUser($data['email'], $data['password'], $data['name'], $profileImage)) {
            return sendResponse(201, "User registered successfully.");
        }

        return sendResponse(500, "Failed to register user.");
    }

    public function loginUser()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        if (empty($data['email']) || empty($data['password'])) {
            return sendResponse(400, "Please provide email and password.");
        }

        $user = $this->userModel->getUserByEmail($data['email']);

        if (!$user || !password_verify($data['password'], $user['password'])) {
            return sendResponse(401, "Invalid credentials.");
        }

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['name'];

        return sendResponse(200, "Login successful.");
    }

    public function getUserProfile()
    {
        if (!isset($_SESSION['user_id'])) {
            return sendResponse(401, "You need to log in first.");
        }

        $user = $this->userModel->getUserById($_SESSION['user_id']);

        if ($user) {
            return sendResponse(200, "Profile data retrieved.", $user);
        }

        return sendResponse(404, "User not found.");
    }

    public function updateUserProfile()
    {
        if (!isset($_SESSION['user_id'])) {
            return sendResponse(401, "You need to log in first.");
        }

        $data = json_decode(file_get_contents("php://input"), true);

        if (empty($data['name'])) {
            return sendResponse(400, "Please provide a new name.");
        }

        $fileUploadResult = handleFileUpload($_FILES['profileImage']);
        if ($fileUploadResult['status'] !== 200) {
            return sendResponse($fileUploadResult['status'], $fileUploadResult['message']);
        }

        $profileImage = $fileUploadResult['file_name'];

        if ($this->userModel->updateUserProfile($_SESSION['user_id'], $data['name'], $profileImage)) {
            return sendResponse(200, "User profile updated successfully.");
        }

        return sendResponse(500, "Failed to update user profile.");
    }
}
?>
