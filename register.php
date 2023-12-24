<?php
include 'Includes/dbconn.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $duplicate = mysqli_query($conn, "SELECT * FROM registertbl WHERE username = '$username' OR email = '$email'");
    if (mysqli_num_rows($duplicate) > 0) {
        $msg[] = 'Username or Email is Already Taken!';
    } else {
        if ($password == $confirmpassword) {
            $query = "INSERT INTO registertbl VALUES('', '$name', '$username', '$email', '$password')";
            mysqli_query($conn, $query);
            $msg[] = 'Registration Successfully';
            header("Location: login.php");
        } else {
            $msg[] = 'Password not match!';
        }
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
    <title>Register</title>
</head>

<body>
    <div class="container-fluid vh-100" style="background-color: khaki;">
        <div class="container py-1 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block">
                                <img src="Img/logo.jpg" alt="login form" class="img-fluid mt-3 ms-2" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-3 text-black">

                                    <form action="" method="post">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <img src="Img/logo.jpg" alt="logo" width="50" height="50" style="border-radius: 50%;">
                                            <span class="h1 fw-bold mb-0 ">CNHS</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-1" style="letter-spacing: 1px;">Register your
                                            account</h5>

                                        <?php
                                        if (isset($msg)) {
                                            foreach ($msg as $error) {
                                                echo '<span class="error-msg text-danger">' . $error . '</span>';
                                            };
                                        };
                                        ?>
                                        <div class="form-outline mb-3">
                                            <input type="text" id="name" name="name" class="form-control form-control-lg" required />
                                            <label class="form-label" for="name">Name</label>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <input type="text" id="username" name="username" class="form-control form-control-lg" required />
                                            <label class="form-label" for="username">Username</label>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                                            <label class="form-label" for="email">Email</label>
                                        </div>

                                        <div class="form-outline mb-3">
                                            <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                            <label class="form-label" for="password">Password</label>
                                        </div>

                                        <div class="form-outline mb-0">
                                            <input type="password" id="confirmpassword" name="confirmpassword" class="form-control form-control-lg" />
                                            <label class="form-label" for="confirmpassword">Confirm Password</label>
                                        </div>
                                        <?php
                                        if (isset($msg)) {
                                            foreach ($msg as $error1) {
                                                echo '<span class="error-msg text-danger ms-2">' . $error1 . '</span>';
                                            };
                                        };
                                        ?>

                                        <div class="pt-1 mb-3 mt-3">
                                            <input type="submit" name="submit" value="Register" class="btn btn-dark btn-lg btn-block">
                                        </div>

                                        <p class="mb-0 pb-lg-2" style="color: #393f81;">Already have an account? <a href="index.php" style="color: #393f81;">Login here</a></p>
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