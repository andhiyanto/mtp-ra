<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome To Ra sulamalis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="<?php echo base_url() . 'theme/favicon.ico' ?>">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>
    <?php
    error_reporting(0);
    function limit_words($string, $word_limit)
    {
        $words = explode(" ", $string);
        return implode(" ", array_splice($words, 0, $word_limit));
    }

    ?>

</head>

<body>


    <div id="fh5co-page">
        <header id="fh5co-header" role="banner">
            <div class="container">

                <div class="header-inner">
                    <a href="<?php echo base_url() . '' ?>"><img src="<?php echo base_url() . 'assets/images/logobrand.png' ?>" alt="" class="img-brand"></a>

                    <nav role="navigation">

                        <ul>
                            <li><a href="<?php echo base_url() . '' ?>">Home</a></li>
                            <li><a href="<?php echo base_url() . 'about' ?>">About</a></li>
                            <li><a href="<?php echo base_url() . 'portfolio' ?>">Portfolio</a></li>
                            <li><a href="<?php echo base_url() . 'artikel' ?>">Priceing</a></li>
                            <li><a href="<?php echo base_url() . 'gallery' ?>">Gallery</a></li>
                            <li><a href="<?php echo base_url() . 'kontak' ?>">Contact</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </header>


        <aside id="fh5co-hero" class="js-fullheight">
            <div class="flexslider js-fullheight">
                <ul class="slides">
                    <li style="background-image: url(<?php echo base_url() . 'theme/images/slide_1.jpg' ?>);">
                        <div class="overlay-gradient"></div>
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2>Mulai Merawat Diri Anda Bersama Kami</h2>
                                    <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(<?php echo base_url() . 'theme/images/slide_2.jpg' ?>);">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2>Take Your Business To The Next Level</h2>
                                    <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li style="background-image: url(<?php echo base_url() . 'theme/images/slide_3.jpg' ?>);">
                        <div class="container">
                            <div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
                                <div class="slider-text-inner">
                                    <h2>We Think Different That Others Can't</h2>
                                    <p><a href="#" class="btn btn-primary btn-lg">Get started</a></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </aside>