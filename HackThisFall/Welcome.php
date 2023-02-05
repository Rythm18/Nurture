<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nurture</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">

    <style>
        .banner_part:after {
            position: absolute;
            top: 261px;
            width: 41%;
            height: 69%;
            content: "";
            /* background-image: url(img/10088.jpg); */
            background-size: 0% 0%;
            left: 6%;
        }

        .banner_part {
  height: 880px;
  position: relative;
  overflow: hidden;
  background-image: url(../img/banner_bg.png);
  background-repeat: no-repeat;
  background-size: 33%;
  background-position: top right;
}









.genric-btn.success-border {
    color: #4cd3e3;
    border: 1px solid #4cd3e3;
    background: #fff;
}

.genric-btn.success {
    color: #fff;
    background: #4cd3e3;
    border: 1px solid transparent;
    font-size: 22px;
    font-weight: bold;
}



/* .heading span {
    text-transform: uppercase;
    color: var(--green);
    font-family: "Poppins", sans-serif;
    letter-spacing: 0.4rem;
} */





    </style>


</head>

<body>
    <!--::header part start::-->
    
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cource.html">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="blog.html">Blog</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li> -->
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="https://discord.gg/9qUpdRJq">Community</a>
                                </li>
                                <li class="d-none d-lg-block">
                                  <a class="btn_1" href="compare/index.html">Compare</a>
                              </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->


    <!-- banner part start-->

    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                    </div>
                </div>
            </div>
    </section>


  
    <!-- <h1 class="heading1w"> <span>Hello</span><?php echo $_SESSION['name']; ?></h1> -->





    <div class="catogeries" style="
    float: right;
    margin-top: -637px;
    margin-right: 228px;
">

 <img  src="img/Student.png" class="imgflip">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="img/Student2.png">

    </div>

    <div class="buttonsss" style="
    float: right;
    margin-top: -24px;
    margin-right: 300px;
">
        <a href="carrer.html" class="genric-btn success circle arrow">Student<span class="lnr lnr-arrow-right"></span></a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="#" class="genric-btn success circle arrow">Mentor<span class="lnr lnr-arrow-right"></span></a>
    </div>

    <h1 class="heading1w" style="
     color: #181818;
     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
     margin-left: 265px;
     margin-top: -426px;
     font-size: 55px;
"><span>Hello</span>&nbsp;&nbsp;<?php echo $_SESSION['name']; ?> </h1>
 <h1 class="heading1w" style="
     color: #181818;
     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
     margin-left: 334px;
     margin-top: 45px;
     font-size: 36px;
     font-family: Poppins, sans-serif;
     font-weight: 100;
     ">How Would You Like To Enroll</h1>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>