<?php

if (isset($_POST["create"])) {
    $blog_name = $_POST['blog_name'];
    $blog_date = $_POST['blog_date'];
    $blog_content = $_POST['blog_content'];
    $blog_img = $_FILES['blog_img']['name'];

    // File Upload Handling
    $targetDirectory = "../uploadPhoto/"; // Directory where you want to store uploaded images
    $targetFile = $targetDirectory . basename($_FILES["blog_img"]["name"]);

    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["blog_img"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
        // Check if file already exists
        if (file_exists($targetFile)) {
            // echo "Sorry, file already exists.";
            $uploadOk = 0;
        } else {
            // Check file size (example: max 5MB)
            if ($_FILES["blog_img"]["size"] > 5000000) {
                // echo "Sorry, your file is too large.";
                $uploadOk = 0;
            } else {
                // Allow certain file formats
                $allowedExtensions = ["jpg", "jpeg", "png", "gif", "webp"];
                if (!in_array($imageFileType, $allowedExtensions)) {
                    // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                } else {
                    // Move the uploaded file from temporary location to your desired directory
                    if (move_uploaded_file($_FILES["blog_img"]["tmp_name"], $targetFile)) {
                        // echo "The file " . basename($_FILES["blog_img"]["name"]) . " has been uploaded.";
                        $blog_img = $targetFile;  // Store this path in your database
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                }
            }
        }
    } else {
        // echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if the file was uploaded successfully
    if (isset($_FILES["blog_img"]) && $_FILES["blog_img"]["error"] == 0) {
        $targetDirectory = "../uploadPhoto/"; // Directory where you want to store uploaded images
        $targetFile = $targetDirectory . basename($_FILES["blog_img"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        // ... (rest of the code remains unchanged)

        // Insert into the database with $blog_img (assuming you have modified your table structure to include blog_img)
        $sql = "INSERT INTO `blog` (blog_name, blog_date, blog_content, blog_img)
        VALUES ('$blog_name', '$blog_date', '$blog_content', '$blog_img')";

        $result = mysqli_query($connection, $sql);

        if ($result) {
            // header ('Location: login.php');
            // exit;

            // Display Spinner and Redirect
            echo '<div class="d-flex flex-column justify-content-center align-items-center bg-danger" style="height: 100vh;z-index:999; position:absolute; width:100%;height:135vh; padding-bottom:40vh;">
                    <h3>Creating blog</h3>
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
    } else {
        echo "No file uploaded or an error occurred while uploading.";
    }
}
?>

<div class="container pt-3">
    <a href="index.php" class="h6 p-1">Back to home</a>
    <div class="display-3 pb-3 fw-bold">blog</div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Create a new blog
    </button>

    <!-- Modal -->
    <div class="modal fade w-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <form action="" method="post" class="modal-content" enctype="multipart/form-data">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="row">
                        <div class="col-md-6 p-5">
                            <img src="../images/logo.png" alt="" class="w-100 h-100">
                        </div>
                        <div class="col-md-6">
                            <h1 class="py-3">Create a New blog</h1>
                            <div class="row p-2">
                                <div class="col-4">
                                    <label for="form-label" class="fs-5 pb-2">blog Name</label>
                                </div>
                                <div class="col-8">
                                    <input required type="text" name="blog_name" class="form-control p-3">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-4">
                                    <label for="form-label" class="fs-5 pb-2">blog date</label>
                                </div>
                                <div class="col-8">
                                    <input required type="date" name="blog_date" class="form-control p-3">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-4">
                                    <label for="form-label" class="fs-5 pb-2">blog content</label>
                                </div>
                                <div class="col-8">
                                    <input required type="text" name="blog_content" class="form-control p-3">
                                </div>
                            </div>
                            <div class="row p-2">
                                <div class="col-4">
                                    <label for="blog_img" class="fs-5 pb-2">Upload blog Image</label>
                                </div>
                                <div class="col-8">
                                    <input required type="file" name="blog_img" id="blog_img" class="form-control p-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" name="create">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>