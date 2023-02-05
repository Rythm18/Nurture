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
            background-image: url(img/10088.jpg);
            background-size: 100% 100%;
            left: 4%;
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


/* form css */


.main {
    position: relative;
    width: 1000px;
    min-width: 1000px;
    min-height: 600px;
    height: 600px;
    padding: 25px;
    background-color: #ecf0f3;
    box-shadow: 10px 10px 10px #d1d9e6, -10px -10px 10px #f9f9f9;
    border-radius: 12px;
    overflow: hidden;
    float: right;
    margin-top: -633px;
    margin-right: 46px;
}
 @media (max-width: 1200px) {
	 .main {
		 transform: scale(0.7);
	}
}
 @media (max-width: 1000px) {
	 .main {
		 transform: scale(0.6);
	}
}
 @media (max-width: 800px) {
	 .main {
		 transform: scale(0.5);
	}
}
 @media (max-width: 600px) {
	 .main {
		 transform: scale(0.4);
	}
}
 .container1 {
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 position: absolute;
	 top: 0;
	 width: 600px;
	 height: 100%;
	 padding: 25px;
	 background-color: #ecf0f3;
	 transition: 1.25s;
}
 .form {
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 flex-direction: column;
	 width: 100%;
	 height: 100%;
}
 .form__icon {
	 object-fit: contain;
	 width: 30px;
	 margin: 0 5px;
	 opacity: 0.5;
	 transition: 0.15s;
}
 .form__icon:hover {
	 opacity: 1;
	 transition: 0.15s;
	 cursor: pointer;
}
 .form__input {
	 width: 350px;
	 height: 40px;
	 margin: 4px 0;
	 padding-left: 25px;
	 font-size: 13px;
	 letter-spacing: 0.15px;
	 border: none;
	 outline: none;
	 font-family: 'Montserrat', sans-serif;
	 background-color: #ecf0f3;
	 transition: 0.25s ease;
	 border-radius: 8px;
	 box-shadow: inset 2px 2px 4px #d1d9e6, inset -2px -2px 4px #f9f9f9;
}
 .form__input:focus {
	 box-shadow: inset 4px 4px 4px #d1d9e6, inset -4px -4px 4px #f9f9f9;
}
 .form__span {
	 margin-top: 30px;
	 margin-bottom: 12px;
}
 .form__link {
	 color: #181818;
	 font-size: 15px;
	 margin-top: 25px;
	 border-bottom: 1px solid #a0a5a8;
	 line-height: 2;
}
 .title {
	 font-size: 34px;
	 font-weight: 700;
	 line-height: 3;
	 color: #181818;
}
 .description {
	 font-size: 14px;
	 letter-spacing: 0.25px;
	 text-align: center;
	 line-height: 1.6;
}
 .button {
	 width: 180px;
	 height: 50px;
	 border-radius: 25px;
	 margin-top: 50px;
	 font-weight: 700;
	 font-size: 14px;
	 letter-spacing: 1.15px;
	 background-color: #4b70e2;
	 color: #f9f9f9;
	 box-shadow: 8px 8px 16px #d1d9e6, -8px -8px 16px #f9f9f9;
	 border: none;
	 outline: none;
}
/**/
 .a-container {
	 z-index: 100;
	 left: calc(100% - 600px);
}
 .b-container {
	 left: calc(100% - 600px);
	 z-index: 0;
}
 .switch {
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 position: absolute;
	 top: 0;
	 left: 0;
	 height: 100%;
	 width: 400px;
	 padding: 50px;
	 z-index: 200;
	 transition: 1.25s;
	 background-color: #ecf0f3;
	 overflow: hidden;
	 box-shadow: 4px 4px 10px #d1d9e6, -4px -4px 10px #f9f9f9;
}
 .switch__circle {
	 position: absolute;
	 width: 500px;
	 height: 500px;
	 border-radius: 50%;
	 background-color: #ecf0f3;
	 box-shadow: inset 8px 8px 12px #d1d9e6, inset -8px -8px 12px #f9f9f9;
	 bottom: -60%;
	 left: -60%;
	 transition: 1.25s;
}
 .switch__circle--t {
	 top: -30%;
	 left: 60%;
	 width: 300px;
	 height: 300px;
}
 .switch__container {
	 display: flex;
	 justify-content: center;
	 align-items: center;
	 flex-direction: column;
	 position: absolute;
	 width: 400px;
	 padding: 50px 55px;
	 transition: 1.25s;
}
 .switch__button {
	 cursor: pointer;
}
 .switch__button:hover {
	 box-shadow: 6px 6px 10px #d1d9e6, -6px -6px 10px #f9f9f9;
	 transform: scale(0.985);
	 transition: 0.25s;
}
 .switch__button:active, .switch__button:focus {
	 box-shadow: 2px 2px 6px #d1d9e6, -2px -2px 6px #f9f9f9;
	 transform: scale(0.97);
	 transition: 0.25s;
}
/**/
 .is-txr {
	 left: calc(100% - 400px);
	 transition: 1.25s;
	 transform-origin: left;
}
 .is-txl {
	 left: 0;
	 transition: 1.25s;
	 transform-origin: right;
}
 .is-z200 {
	 z-index: 200;
	 transition: 1.25s;
}
 .is-hidden {
	 visibility: hidden;
	 opacity: 0;
	 position: absolute;
	 transition: 1.25s;
}
 .is-gx {
	 animation: is-gx 1.25s;
}
 @keyframes is-gx {
	 0%, 10%, 100% {
		 width: 400px;
	}
	 30%, 50% {
		 width: 500px;
	}
}
 






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


    <div class="main">
    <div class="container1 a-container" id="a-container">


      <form class="form"  method="post" action="signup-check.php">


        <h2 class="form_title title">Create Account</h2>


        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

         <?php if (isset($_GET['success'])) { ?>
              <p class="success"><?php echo $_GET['success']; ?></p>
         <?php } ?>


        
        
        <?php if (isset($_GET['name'])) { ?>
         <input class="form__input" type="text"  name="name" placeholder="Name" 
         value="<?php echo $_GET['name']; ?>">

         <?php }else{ ?>
            <input class="form__input" type="text"  name="name" placeholder="Name">
            <?php }?>


            <?php if (isset($_GET['uname'])) { ?>
            <input class="form__input" type="email"   name="uname" placeholder="Email"   value="<?php echo $_GET['uname']; ?>">
            <?php }else{ ?>
                <input class="form__input" type="email"   name="uname" placeholder="Email">
                <?php }?>

        
            <input class="form__input" type="password" placeholder="Password"  name="password">

            <input type="password" 
            name="re_password" class="form__input"
            placeholder="Please Confirm Your Password">

        <!-- <button class="form__button button submit">SIGN UP</button> -->

        <input  type ="submit" class="form__button button submit" value="SIGN UP">


      </form>
    </div>


    <div class="switch" id="switch-cnt">
        <div class="switch__circle"></div>
        <div class="switch__circle switch__circle--t"></div>
        <div class="switch__container" id="switch-c1">
          <h2 class="switch__title title">Welcome Back !</h2>
          <p class="switch__description description">To keep connected with us please login with your personal info</p>
    <a href="index.php"><button class="switch__button button switch-btn">SIGN IN</button></a>
        </div>
