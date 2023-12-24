<?php
include 'navbar.php';

if (isset($_POST['submit'])) {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>

<body>
    <div class="container mt-4">
        <div class="card bg-secondary bg-opacity-50">
            <h1 class="text-center p-0 my-3">Add your product</h1>
            <hr>
            <div class="card-body m-4">
                <div class="row">
                    <div class="col-lg-6 mt-0">
                        <label for="" class="form-label fw-semibold ">Product Name:</label>
                        <input type="text" class="form-control fw-semibold" name="pname" placeholder="What is your product?" required>
                    </div>
                    <div class="col-lg-6 mt-0">
                        <label for="" class="form-label fw-semibold ">Product Description:</label>
                        <input type="text" class="form-control fw-semibold" name="pdesc" placeholder="Describe your product" required>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <label for="" class="form-label fw-semibold ">Product Price:</label>
                        <input type="text" class="form-control fw-semibold" name="price" placeholder="Input the price" required>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <label for="" class="form-label fw-semibold ">Product Image:</label>
                        <input type="file" class="form-control fw-semibold" name="image" required>
                    </div>
                    <div class="col-lg-6 mt-5 p-3">
                        <div class="d-grid gap-2 ">
                            <button type="submit" class="btn btn-primary fw-semibold " name="submit">Upload</button>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5 p-3">
                        <div class="">
                            <a href="home.php" class="text-decoration-none d-grid gap-2">
                                <input type="button" class="btn btn-danger fw-semibold" value="CANCEL">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>