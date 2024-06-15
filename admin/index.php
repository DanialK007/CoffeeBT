<?php
    include_once "../connect.php";

    $query = "SELECT * from menu";
    $result = mysqli_query($connection, $query);
    $menuCount = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $menuCount += 1;
    }

    $query = "SELECT * from product";
    $result2 = mysqli_query($connection, $query);
    $productCount = 0;
    while ($row = mysqli_fetch_assoc($result2)) {
        $productCount += 1;
    }
    
    $query = "SELECT * from blog";
    $result3 = mysqli_query($connection, $query);
    $blogCount = 0;
    while ($row = mysqli_fetch_assoc($result3)) {
        $blogCount += 1;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel : User</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../myStyle.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        body{
            backdrop-filter: blur(10px);
            background-image: url("../images/b1.png");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <main class="p-5">
        <div class="container p-5 rounded-5">
            <div class="display-3 pb-2 text-white fw-semibold">Admin Pannal</div>
            <div class="row my-3">
                <div class="col-lg-4 p-2">
                    <div class="rounded-4 border bg-danger-subtle border-danger p-5">
                        <div class="h4 py-2">
                            Total menu items : <?php echo $menuCount; ?>
                        </div>
                        <a href="menu.php" class="btn btn-danger">See More</a>
                    </div>
                </div>
                <div class="col-lg-4 p-2">
                    <div class="rounded-4 border bg-danger-subtle border-danger p-5">
                        <div class="h4 py-2">
                            Total products :<?php echo $productCount; ?>
                        </div>
                        <a href="Product.php" class="btn btn-danger">See More</a>
                    </div>
                </div>
                <div class="col-lg-4 p-2">
                    <div class="rounded-4 border bg-danger-subtle border-danger p-5">
                        <div class="h4 py-2">
                            Total blogs :<?php echo $blogCount; ?>
                        </div>
                        <a href="blog.php" class="btn btn-danger">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>