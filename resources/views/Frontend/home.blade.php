<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <title>Amany Design</title>
</head>
<body>
<div class="upper-bar" >
    <div class="container">
        <div class="row">
            <div class="info col-sm text-center text-sm-left">
                <i class="fa fa-phone"></i><span>77#######</span>
                <i class="fa fa-envelope-o"></i> Amany@gmail.com
            </div>
            <div class="info col-sm text-center text-sm-right">
                <span>Let's work Togather!</span>
                <span class="get-qutoe"> Get Qoute </span>
            </div>
        </div>
    </div>
</div>
<!-- End upper bar-->

<!-- Start navbar-->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <span>Book</span><span>Shop</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav"
                aria-controls="navbarSupportedContent"  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">About <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div >
    </div>
</nav>
<div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <h1>We're an Independent <br>Design and <span>Development</span> <br> Agency.</h1>
            <div class="overlay"></div>
            <div class="carousel-item carousel-one active">
                <img class="d-block w-100" src="/img/13.jpg" alt="First slide">
            </div>
            <div class="carousel-item carousel-two">
                <img class="d-block w-100" src="/img/12.jpg" alt="Second slide">
            </div>
            <div class="carousel-item carousel-three">
                <img class="d-block w-100" src="/img/3.jpg" alt="Third slide">
            </div>
        </div>

    </div>
</div>

<br><br>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="site-info">
                    <h2><span>Book</span><span>Shop</span></h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                        repudiandae rerum libero ipsum asperiores omnis mollitia,
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo
                        repudiandae rerum libero ipsum asperiores omnis mollitia
                        Lorem ipsum dolor .
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="helpful-links">
                    <h2>Helpful Links</h2>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li>About</li>
                                <li>Portofolio</li>
                                <li>Team</li>
                                <li>Price</li>
                                <li>Privacy</li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li>FAQ</li>
                                <li>Blog</li>
                                <li>How</li>
                                <li>Benefis</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="contact">
                    <h2>Contact Us</h2>
                    <ul class="list-unstyled">
                        <li>8659398 Hail Street Yemen</li>
                        <li>Phone : <a href="Tel:77#####>">77######</a></li>
                        <li>Email : <a href="mailto:amany@gmail.com?subject=Contact">amany@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col text-left text-uppercase">
                Copyright 2021 Bookshop &COPY; All Right Resverd
            </div>
            <div class="col text-right">
                <ul class="list unstyleed">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@yield('content')
<script src="/js/jquery-3.6.0.min.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
