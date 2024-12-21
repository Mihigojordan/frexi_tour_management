<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="../../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons CSS -->
    <link href="../../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App CSS -->
    <link href="../../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- SweetAlert CSS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<div class="authentication-bg min-vh-100">
    <div class="bg-overlay bg-light"></div>
    <div class="container">
        <div class="d-flex flex-column min-vh-100 px-3 pt-4">
            <div class="row justify-content-center my-auto">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mt-2">
                                <h5>Register Account</h5>
                                <p class="text-muted">Get your Frexi account now.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form  method="POST">
                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">Email</label>
                                        <div class="position-relative input-custom-icon">
                                            <input type="email" class="form-control" id="useremail" name="useremail" placeholder="Enter email" required>
                                            <span class="bx bx-mail-send"></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="username">Username</label>
                                        <div class="position-relative input-custom-icon">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required>
                                            <span class="bx bx-user"></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                            <span class="bx bx-lock-alt"></span>
                                            <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Enter password" required>
                                        </div>
                                    </div>
                                    <div class="form-check py-1">
                                        <input type="checkbox" class="form-check-input" id="auth-terms-condition-check" required>
                                        <label class="form-check-label" for="auth-terms-condition-check">I accept <a href="#" class="text-body">Terms and Conditions</a></label>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Register</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p class="mb-0">Already have an account? <a href="auth-login.html" class="fw-medium text-primary"> Login</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div>
    </div><!-- end container -->
</div>
</body>
</html>
<?php
// Include the global connection
include '../../Components/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "hello world";
    // Capture form data
    $email = $_POST['useremail'];
    $username = $_POST['username'];
    $password = $_POST['userpassword'];

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

   // Prepare the query to insert user data
$stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $hashedPassword);

    // Execute and check success
    if ($stmt->execute()) {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'Registration Successful',
                        text: 'You have registered successfully!',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location = 'login.php';
                    });
                });
              </script>";
    } else {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Registration Failed',
                        text: 'Error: " . $stmt->error . "',
                        confirmButtonText: 'Retry'
                    });
                });
              </script>";
    }

    // Close the statement
    $stmt->close();
}
?>

  