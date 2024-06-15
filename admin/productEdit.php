<?php
// include_once "adminLayout/adminHeader.php";
include_once '../connect.php';
$editId = $_GET['editId'];
$query = "SELECT * FROM product WHERE product_id=$editId";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$product_name = $row['product_name'];
$product_price = $row['product_price'];
$product_img = $row['product_img'];

if (isset($_POST['confirm'])) {
    $upproduct_name = $_POST['product_name'];
    $upproduct_price = $_POST['product_price'];

    // Check if a new image file is uploaded
    if ($_FILES['newproduct_img']['error'] == 0) {
        $upproduct_img = '../uploadPhoto/' . $_FILES['newproduct_img']['name'];
        move_uploaded_file($_FILES['newproduct_img']['tmp_name'], $upproduct_img);
    } else {
        // Use the existing image URL if no new image is uploaded
        $upproduct_img = $row['product_img'];
    }

    $sql = "UPDATE `product` SET product_name='$upproduct_name',product_price='$upproduct_price', product_img='$upproduct_img' WHERE product_id='$editId'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        // Display Spinner and Redirect
        echo '<div class="d-flex flex-column justify-content-center align-items-center bg-danger" style="height: 100vh;z-index:999; position:absolute; width:100%;height:135vh; padding-bottom:40vh;">
                <h3>Updating product</h3>
                <div class="spinner-border p-4 mt-3 mb-5" role="status">
                <span class="sr-only p-3 mb-5"></span>
                </div>
                </div>';

        echo '<script>
                // Redirect to the main page after 3 seconds
                setTimeout(function() {
                window.location.href = "product.php";
                }, 1000); // 1000 milliseconds (1 second) delay before redirection
                </script>';
    } else {
        die(mysqli_error($connection));
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel : Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        main{
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <main class="bg-danger-subtle pt-5">
        <div class="display-1 text-center fw-bold">Edit</div>
        <div class="container py-5">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="p-5 bg-white rounded-5">
                    <label for="form-label" class="py-3">product Name</label>
                    <input type="text" name="product_name" class="form-control" value="<?php echo $product_name; ?>">

                    <label for="form-label" class="py-3">product Type</label>
                    <input type="text" name="product_price" class="form-control" value="<?php echo $product_price; ?>">

                    <label for="form-label" class="py-3">product Photo</label>
                    <input type="file" name="newproduct_img" class="form-control">
                    <button class="btn btn-danger me-auto mt-3" name="confirm">Confirm</button>
            </form>
        </div>
    </main>

</body>

</html>