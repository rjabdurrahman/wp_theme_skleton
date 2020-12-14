<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Website | Be More</title>
    <?php wp_head();?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <nav class="navbar navbar-gen navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="<?php echo get_template_directory_uri() . '/img/hc.jpg'; ?>" alt="Hunny Coders">
                <!-- <div>
                    <span>Hunny</span>
                    <span>Coders</span>
                </div> -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                    wp_nav_menu(
                        array(
                            'menu-location' => 'top-menu',
                            'container'=> false,
                            'menu_class' => 'navbar-nav mr-auto mont-font',
                            'add_li_class'  => 'nav-item'
                        )
                    )
                ?>
                <!-- <ul class="navbar-nav mr-auto mont-font">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Another One</a>
                            <a class="dropdown-item" href="#">Another Two</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            List
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item special">
                        <button class="btn bg-mypri" href="#">Get Started</span></button>
                    </li>
                    <li class="nav-item special">
                        <button class="btn btn-primary" href="#">Login</button>
                    </li>
                </ul> -->
            </div>
        </nav>
    </header>