<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar bg-secondary bg-opacity-50 ">
        <div class="container-fluid">
            <a href="#" class="navbar-brand fw-semibold">ECOMMERCE</a>
            <ul class="nav me-2">
                <li class="nav-item">
                    <a href="home.php" class="nav-link fw-semibold text-decoration-none text-black">Home</a>
                </li>
                <li class="nav-item">
                    <a href="product.php" class="nav-link fw-semibold text-decoration-none text-black">Products</a>
                </li>
                <li class="nav-item">
                    <a href="cart.php" class="nav-link fw-semibold text-decoration-none text-black">My Cart</a>
                </li>
                <li class="nav-item dropdown me-5">
                    <a class="nav-link dropdown-toggle text-black fw-semibold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Setting
                    </a>
                    <ul class="dropdown-menu text-black">
                        <li><a class="dropdown-item fw-semibold" href="add-product.php">Add Products</a></li>
                        <li><a class="dropdown-item fw-semibold" href="#">View Profile</a></li>
                        <li><a class="dropdown-item fw-semibold" href="#">Account</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item fw-semibold text-danger" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>