<?php
include 'Includes/dbconn.php';
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * FROM registertbl WHERE username= '$email' OR email = '$email'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)) {
        if ($password == $row['password']) {
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row['id'];
            header('location: home.php');
            exit();
        }
        $msg[] = "Password Incorrect";
    } else {
        $msg[] = "User not registered";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDBootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <title>Login</title>
</head>

<body>
    <div class="container-fluid vh-100 bg-secondary ">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="Img/logo.jpg" alt="login form" class="img-fluid mt-0 ms-0 border-2" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form action="" method="post">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="Img/logo.jpg" alt="logo" width="70" height="70" style="border-radius: 50%;">
                                            <span class="h1 fw-bold mb-0">My Shop</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                        <div class="form-outline mb-0">
                                            <input type="email" id="usernameemail" name="email" class="form-control form-control-lg text-black fw-normal" />
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                        <?php
                                        if (isset($msg)) {
                                            foreach ($msg as $error) {
                                                echo '<span class="error-msg text-danger ms-2">' . $error . '</span>';
                                            };
                                        };
                                        ?>

                                        <div class="form-outline mb-0 mt-4">
                                            <input type="password" id="password" name="password" class="form-control form-control-lg text-black" />
                                            <label class="form-label" for="password">Password</label>
                                        </div>
                                        <?php
                                        if (isset($msg)) {
                                            foreach ($msg as $error1) {
                                                echo '<span class="error-msg text-danger ms-2">' . $error1 . '</span>';
                                            };
                                        };
                                        ?>

                                        <div class="pt-1 mb-4 mt-4">
                                            <input type="submit" name="submit" value="Login" class="btn btn-primary fw-semibold btn-lg btn-block rounded-5">
                                        </div>

                                        <p class="mb-5 pb-lg-2 text-black">Don't have an account? <a href="register.php" class="text-primary">Register here</a></p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>
</body>

</html>