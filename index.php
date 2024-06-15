<!DOCTYPE html>
<html lang="en">

<head>
<?php
include_once "connect.php";

$query = "SELECT * from menu";
$result = mysqli_query($connection, $query);

$menuCount = 0;

$query = "SELECT * from product";
$result2 = mysqli_query($connection, $query);

$productCount = 0;

$query = "SELECT * from blog";
$result3 = mysqli_query($connection, $query);

$blogCount = 0;
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cofee shop</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="icon" href="images/logo.png">

    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/552446ee58.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- navbar start  -->
    <nav id="navbar" class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" id="logo"><img src="images/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white; font-size: 23px;"></i></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallary">Gallary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blogs">Blog</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar end -->


    <!-- home section start  -->
    <section id="home">
        <div class="content">
            <h3>Start Your Day with a <br>fresh coffee</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae recusandae ullam ab saepe optio placeat
                excepturi fugiat debitis voluptatibus. Magnam sunt
                <br>commodi rerum nisi fugiat eligendi harum blanditiis neque dolor!
            </p>
            <button id="btn"> Shop now</button>
        </div>
    </section>
    <!-- home section End -->


    <!-- about section start  -->
    <section id="about">
        <div class="container">
            <div class="heading mb-5">About <span>Us</span></div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <img src="images/about.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>What Makes our coffee Special?</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse dolores vero consectetur quam
                        eaque dolor reiciendis nulla fugiat quas cupiditate blanditiis aut accusantium sapiente saepe
                        commodi tenetur, placeat quaerat pariatur?
                        <br><br>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero molestias maiores
                        velit, quaerat dolor in officiis temporibus iusto quo? Ratione porro sint obcaecati quas
                        architecto quasi fugit sunt quia ex?
                        <br><br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero labore consectetur
                        ratione nihil eius sint nemo ducimus sapiente repudiandae dolorum cupiditate, fuga iste, impedit
                        ipsa? Obcaecati animi quae provident suscipit.
                    </p>
                    <button id="about-btn">Learn More</button>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end  -->


    <!-- top card start  -->
    <section id="top-cards">
        <div class="heading2 mb-5">
            Top <span>Categories</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="images/c1.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="images/c2.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="images/c3.png" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- top card end -->


    <!-- menu card start  -->
    <section id="menu">
        <div class="container">
            <div class="heading3 pb-3">Menu</div>
        </div>
        <!-- <div class="container" id="container2">
            <div class="row">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="images/m1.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <h3>coffee</h3>
                            <p>$99 <strike>$100</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="images/m2.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <h3>coffee</h3>
                            <p>$99 <strike>$110</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="images/m3.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <h3>coffee</h3>
                            <p>$100 <strike>$200</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="images/m4.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <h3>coffee</h3>
                            <p>$130 <strike>$150</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="images/m5.png" alt="">
                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>coffee</h3>
                                <p>$200 <strike>$300</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="images/m6.png" alt="">
                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>coffee</h3>
                                <p>$350 <strike>$400</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="images/m7.png" alt="">
                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>coffee</h3>
                                <p>$100 <strike>$120</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="images/m8.png" alt="">
                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>coffee</h3>
                                <p>$199 <strike>$200</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div> -->
        <div class="container" id="container2">
            <div class="row">
                <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="uploadPhoto/<?php echo $row['menu_img']; ?>" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <h3><?php echo $row['menu_name'] ?></h3>
                            <p class="px-5"><?php echo $row['menu_price'] ?>Ks <strike class="text-danger"><?php echo intval($row['menu_price']) + 500;?>Ks</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                        </div>
                    </div>
                </div>
                <?php
                    $menuCount += 1;
                }
                ?>
            </div>
        </div>
    </section>
    <!-- menu card end  -->


    <!-- product card start  -->
    <section id="product">
        <div class="container pt-5">
            <div class="heading3 pb-3">Product</div>
        </div>
        <!-- <div class="container" id="container2">
            <div class="row">
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="images/m1.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <h3>coffee</h3>
                            <p>$99 <strike>$100</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="images/m2.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <h3>coffee</h3>
                            <p>$99 <strike>$110</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="images/m3.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <h3>coffee</h3>
                            <p>$100 <strike>$200</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="images/m4.png" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <h3>coffee</h3>
                            <p>$130 <strike>$150</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="images/m5.png" alt="">
                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>coffee</h3>
                                <p>$200 <strike>$300</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="images/m6.png" alt="">
                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>coffee</h3>
                                <p>$350 <strike>$400</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="images/m7.png" alt="">
                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>coffee</h3>
                                <p>$100 <strike>$120</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="images/m8.png" alt="">
                            <div class="card-body">
                                <div class="star text-center">
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>

                                <h3>coffee</h3>
                                <p>$199 <strike>$200</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div> -->
        <div class="container" id="container2">
            <div class="row">
                <?php
                    while ($row = mysqli_fetch_assoc($result2)) {
                ?>
                <div class="col-md-3 py-3 py-md-0">
                    <div class="card">
                        <img src="uploadPhoto/<?php echo $row['product_img']; ?>" alt="">
                        <div class="card-body">
                            <div class="star text-center">
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                                <i class="fa-regular fa-star"></i>
                            </div>

                            <h3><?php echo $row['product_name'] ?></h3>
                            <p class="px-5"><?php echo $row['product_price'] ?>Ks <strike class="text-danger"><?php echo intval($row['product_price']) + 500;?>Ks</strike> <span class="fa-solid fa-cart-shopping"> </span></p>
                        </div>
                    </div>
                </div>
                <?php
                    $productCount += 1;
                }
                ?>
            </div>
        </div>
    </section>
    <!-- product card end  -->


    <!-- our gallary start  -->
    <div id="gallary" class="container">
        <div class="heading5 mb-5">Our <span>Gallary</span></div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="images/image1.png" alt="">
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="images/image2.png" alt="">
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="images/image3.png" alt="">
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="images/image4.png" alt="">
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="images/image5.png" alt="">
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="images/image6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- our gallary end -->


    <!-- contact start  -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-7 flexer">
                    <div class="heading6 display-5">Contact <span>Us</span></div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Earum nisi voluptatibus debitis,
                        aliquam expedita dolor <br>provident explicabo quam corporis repudiandae itaque iure hic?</p>
                    <input type="text" class="form-control" placeholder="Name" aria-label="default input example"><br>
                    <input type="email" class="form-control" placeholder="email" aria-label="default input example"><br>
                    <input type="number" class="form-control" placeholder="phone"
                        aria-label="default input example"><br>
                    <button id="contact-btn">Sent Message</button>
                </div>
                <div class="col-md-5" id="col">
                    <h1>Info</h1>
                    <p><i class="fa-regular fa-envelope"></i>example@gmail.com</p>
                    <p><i class="fa-solid fa-phone"></i>+950000000000</p>
                    <p><i class="fa-solid fa-building-columns"></i>Karcahi</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum culpa, dolores simil</p>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end  -->


    <!-- blogs start  -->
    <section id="blogs">
        <div class="heading7">Latest <span>Blogs</span></div>
        <div class="container">
            <div class="row">
                <?php
                    while ($row = mysqli_fetch_assoc($result3)) {
                ?>
                    <div class="col-md-4 py-3 py-md-0 ">
                        <div class="card">
                            <img src="uploadPhoto/<?php echo $row['blog_img']; ?>" alt="">
                            <div class="card-body">
                                <h3><?php echo $row['blog_name'] ?></h3>
                                <h5><?php echo $row['blog_date'] ?></h5>
                                <p><?php echo $row['blog_content'] ?></p>
                                <button id="blogs-btn">Read More</button>
                            </div>
                        </div>
                    </div>
                <?php
                    $blogCount += 1;
                }
                ?>
            </div>
        </div>
    </section>
    <!-- blogs end  -->


    <!-- footer start  -->
    <footer id="footer">
        <div class="footer-logo text-center"><img src="images/logo.png" alt=""></div>
        <div class="socail-links text-center">
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-pinterest-p"></i>

        </div>
        <div class="credits text-center">
            Dselgned By <a href="#">SA Coding </a>
        </div>

        <div class="copyright text-center">
            &copy; Copyright <strong><span>Coffee Shop</span></strong>. All Rights reserved

        </div>

    </footer>
    <!-- footer end  -->



    <a href="#" class="arrow"><i><img src="images/up-arrow.png" alt="" width="50px"></i></a>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>