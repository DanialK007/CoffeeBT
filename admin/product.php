<?php
include_once "../connect.php";
// include_once "adminLayout/adminHeader.php";
// if (!isset($_SESSION['admin_name'])) {
//     header("Location: error.php"); // Redirect to the login page
//     exit();
// }

$query = "SELECT * from product";
$result = mysqli_query($connection, $query);

$productCount = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel : User</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../myStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        .modal-content {
            background-image: url();
            background-size: cover;
        }

        .product_photoDisplay { 
            width: 10vw;
            height: 20vh;
            object-fit: cover;
        }

        main{
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <main class="bg-danger-subtle pt-5">
        <?php
        include_once "productAdd.php";
        ?>


        <!-- product list  -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card p-4 border-3 shadow my-5 bg-light">
                        <h1 class="text-center">product Table</h1>
                        <div class="card-body table-responsive">
                            <table class="table table-bordered fs-5">
                                <thead>
                                    <tr class="border-secondary border-2">
                                        <th class="bg-secondary-subtle">No</th>
                                        <th>product Name</th>
                                        <th>product Price</th>
                                        <th>product Photo</th>
                                    </tr>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $productCount += 1;
                                    ?>
                                        <tr class="border-secondary border-2">
                                            <td class="bg-secondary-subtle"><?php echo $productCount ?></td>
                                            <td><?php echo $row['product_name'] ?></td>
                                            <td><?php echo $row['product_price'] ?></td>

                                            <!-- ... Inside the while loop to fetch product details ... -->
                                            <!-- ... Other columns ... -->
                                            <td><img src="../uploadPhoto/<?php echo $row['product_img']; ?>" alt="product Image" class="product_photoDisplay"></td>
                                            <td class="w-100 border-0 d-flex align-items-center justify-content-center h-100">
                                                <a href="productEdit.php?editId=<?php echo $row['product_id']; ?>" class="btn m-2 btn-outline-primary">Edit</a>
                                                <a href="productDelete.php?deleteId=<?php echo $row['product_id']; ?>" class="btn m-2 btn-outline-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </thead>
                                <tbody>
                                    <tr class="border-2 border-secondary">
                                        <td class="bg-secondary-subtle fs-4 p-3" colspan="4">Total product</td>
                                        <td class="fs-4 p-3"><?php echo $productCount ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>