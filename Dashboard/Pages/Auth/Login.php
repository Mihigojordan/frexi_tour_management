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
                                <h5>Login to Your Account</h5>
                                <p class="text-muted">Access your Frexi account now.</p>
                            </div>
                            <div class="p-2 mt-4">
                                <form method="POST">
                                    <div class="mb-3">
                                        <label class="form-label" for="useremail">Email</label>
                                        <div class="position-relative input-custom-icon">
                                            <input type="email" class="form-control" id="useremail" name="useremail" placeholder="Enter email" required>
                                            <span class="bx bx-mail-send"></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="userpassword">Password</label>
                                        <div class="position-relative auth-pass-inputgroup input-custom-icon">
                                            <span class="bx bx-lock-alt"></span>
                                            <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Enter password" required>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Login</button>
                                    </div>
                                    <div class="mt-4 text-center">
                                        <p class="mb-0">Don't have an account? <a href="auth-register.html" class="fw-medium text-primary"> Register</a></p>
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
    // Capture form data
    $email = $_POST['useremail'];
    $password = $_POST['userpassword'];

    // Prepare a query to fetch the user data
    $stmt = $conn->prepare("SELECT username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows > 0) {
        // Bind the result variables
        $stmt->bind_result($username, $hashedPassword);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Login successful
            echo "<script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Successful',
                            text: 'Welcome back, $username!',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location = 'dashboard.html';
                        });
                    });
                  </script>";
        } else {
            // Incorrect password
            echo "<script>
                    document.addEventListener('DOMContentLoaded', function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Login Failed',
                            text: 'Invalid email or password.',
                            confirmButtonText: 'Retry'
                        });
                    });
                  </script>";
        }
    } else {
        // User not found
        echo "<script>
                document.addEventListener('DOMContentLoaded', function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Failed',
                        text: 'No account found with this email.',
                        confirmButtonText: 'Retry'
                    });
                });
              </script>";
    }

    // Close the statement
    $stmt->close();
}
?>
