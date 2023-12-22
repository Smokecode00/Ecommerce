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
     <div class="container-fluid vh-100" style="background-color: khaki;">
         <div class="container py-5 h-100">
             <div class="row d-flex justify-content-center align-items-center h-100">
                 <div class="col col-xl-10">
                     <div class="card" style="border-radius: 1rem;">
                         <div class="row g-0">
                             <div class="col-md-6 col-lg-5 d-none d-md-block">
                                 <img src="Images/bg1.jpg" alt="login form" class="img-fluid mt-0 ms-0 border-2" style="border-radius:1rem;" />
                             </div>
                             <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                 <div class="card-body p-4 p-lg-5 text-black">

                                     <form action="" method="post">
                                         <div class="d-flex align-items-center mb-3 pb-1">
                                             <img src="Images/logo.png" alt="logo" width="50" height="50">
                                             <span class="h1 fw-bold mb-0">My Shop</span>
                                         </div>

                                         <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                                         <div class="form-outline mb-0">
                                             <input type="text" id="usernameemail" name="usernameemail" class="form-control form-control-lg" />
                                             <label class="form-label" for="usernameemail">Username or Email</label>
                                         </div>
                                         <!-- <?php
                                                if (isset($error)) {
                                                    foreach ($error as $error) {
                                                        echo '<span class="error-msg text-danger ms-2">' . $error . '</span>';
                                                    };
                                                };
                                                ?> -->

                                         <div class="form-outline mb-0 mt-3">
                                             <input type="password" id="password" name="password" class="form-control form-control-lg" />
                                             <label class="form-label" for="password">Password</label>
                                         </div>
                                         <!-- <?php
                                                if (isset($error1)) {
                                                    foreach ($error1 as $error1) {
                                                        echo '<span class="error-msg text-danger ms-2">' . $error1 . '</span>';
                                                    };
                                                };
                                                ?> -->

                                         <div class="pt-1 mb-4 mt-4">
                                             <input type="submit" name="submit" value="Login" class="btn btn-dark btn-lg btn-block">
                                         </div>

                                         <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a></p>
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