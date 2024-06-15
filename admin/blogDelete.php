<?php
// include_once 'adminLayout/adminHeader.php';
include_once '../connect.php';

if (isset($_GET['deleteId'])) {
    $deleteId = $_GET['deleteId'];

    $sql = "DELETE FROM `blog` WHERE blog_id=$deleteId";

    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo '<div class="d-flex flex-column justify-content-center align-items-center bg-danger" style="height: 100vh;z-index:999; position:absolute; top:-10vh;  width:100%;height:135vh; padding-bottom:40vh;">
                <h3>Deleted Successfully!</h3>
                <div class="spinner-border p-4 mt-3 mb-5" role="status">
                <span class="sr-only p-3 mb-5"></span>
                </div>
                </div>';

        echo '<script>
                // Redirect to the main page after 3 seconds
                setTimeout(function() {
                window.location.href = "blog.php";
                }, 1000); // 1000 milliseconds (1 second) delay before redirection
                </script>';
    } else {
        die(mysqli_error($connection));
    }
}
?>

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

        .blogPhotoDisplay {
            width: 10vw;
            height: 10vh;
            object-fit: cover;
        }
    </style>
</head>