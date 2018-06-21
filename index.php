<!DOCTYPE html>
<html>

    <head>
        <title>Underdog chinese phones</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/x-icon" href="img/fav.png">

        <!-- jquery -->
        <script
                src="https://code.jquery.com/jquery-3.3.1.js"
                integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
                crossorigin="anonymous"></script>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



        <!-- imported google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato|Rubik|Source+Sans+Pro|Space+Mono|Work+Sans" rel="stylesheet">
        <!-- font awesome cdn link -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <!-- css style sheet -->
        <link rel="stylesheet" href="css/style.css">
        <!-- AOS -->
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
    </head>


    <body id="top">


        <section data-aos="fade-up" class="title__sec py-5 text-center" style="margin-bottom:0">
            <div class="heading col-sm-12">
                <h1 class="text-logo my-5 py-5">
                    UNDERDOG PHONES <img class="flag" src="img/china.png" width="150px"/>
                </h1>
            </div>
        </section>




        <nav class="navbar navbar-expand-sm nav__1 fixed-top">
            <a class="navbar-brand goto" href="#top"><img src="img/fav.png" class="text-logo" alt="logo"></a>
            <button class="navbar-toggler ml-auto custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-logo3 text-uppercase goto" href="#intro">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-logo3 text-uppercase goto" href="#main">Phones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-logo3 text-uppercase goto" href="#top" title="Back to top">&#8682;</a>
                    </li>
                </ul>
            </div>
        </nav>


        <section class="intro py-5" id="intro" data-aos="zoom-in-down">
            <div class="intro__presentation row">
                <div class="col-md-8 mx-auto">
                    <!--
<img data-aos="flip-left" data-aos-duration="3000" src="img/oneplus.png" class="intro__img img-fluid float-right" alt="one_plus_6">
-->
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <p class="text-right mt-4">Price ranges selection.</p>
                                <img class="d-block float-right intro__img img-fluid" src="img/slide/mix2.png" alt="First slide">
                            </div>

                            <div class="carousel-item">
                                <p class="text-justify text-center mt-4"> Expert choices, best providers.</p>
                                <img class="d-block mx-auto intro__img img-fluid" src="img/slide/oneplus.png" alt="Second slide">
                            </div>

                            <div class="carousel-item">
                                <p class="text-left mt-4"> Weekly updated.</p>
                                <img class="d-block float-left intro__img img-fluid" src="img/slide/p20.png"alt="Third slide">
                            </div>

                            <div class="row col-12 py-5 text-center mx-auto mb-5">
                                <div class="mx-auto pb-5 mb-5">
                                    <a href="#pills-tab" class="btn btn-lg btn-outline-light font-weight-bold mb-5 goto go__btn">Let's go!</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>


        </section>


        <section class="main py-5" id="main">

            <div class="container site">

                <div class="col-md-10 mt-5 mx-auto">
                    <h2 data-aos="fade-up" class="text-center text-uppercase font-weight-bold">Phones by price range</h2>
                    <hr class="divider mt-3 mb-5">
                    <p data-aos="fade-left" class="mt-3 main__pres ">Smartphones selection within some price ranges, make your choice here and/or see detailed specs on our partner site.</p>
                </div>
                <?php
				require 'admin/database.php';
			 
                echo '<nav class="mt-5">
                        <ul data-aos="fade-right"
                            data-aos-offset="500"
                            data-aos-easing="ease-in-sine"
                            class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">';

                $db = Database::connect();
                $statement = $db->query('SELECT * FROM categories');
                $categories = $statement->fetchAll();
                foreach ($categories as $category) 
                {
                    if($category['id'] == '1')
                        echo '<li class="nav-item"><a class="nav-link active" id="pills-' . $category['id'] . '-tab" data-toggle="pill" href="#' . $category['id'] . '" role="tab" aria-controls="'.$category['id'] . '" aria-selected="true">' . $category['name'] . '</a>
                        </li>';
                    else
                        echo '<li class="nav-item">
                                <a class="nav-link" id="pills-' . $category['id'] . '-tab" data-toggle="pill" href="#' . $category['id'] . '" role="tab" aria-controls="' . $category['id'] . '" aria-selected="false">' . $category['name'] . '</a>
                              </li>';
                }

                echo    '</ul>
                      </nav>';

                echo '<div class="tab-content" id="pills-tabContent">';

                foreach ($categories as $category) 
                {
                    if($category['id'] == '1')
                        echo '<div class="tab-pane fade show active" id="' . $category['id'] . '" role="tabpanel" aria-labelledby="pills-' . $category['id'] . '-tab">';                    
                    else
                        echo '<div class="tab-pane fade show" id="' . $category['id'] . '" role="tabpanel" aria-labelledby="pills-' . $category['id'] . '-tab">';  

                    echo '<div class="row">';
                    
                    $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
                    $statement->execute(array($category['id']));
                    while ($item = $statement->fetch()) 
                    {
                        echo '<div class="col-sm-6 col-md-4 my-4">
                                <div class="card">
                                    <img src="img/' . $item['img'] . '" alt="phone" class="rounded img-fluid p-3">
                                        <div class="price"><h3 class="text-center">' . $item['price'] . ' €</h3>
                                        </div>
                                            <div class="caption mx-2">
                                                <hr>


                                                <div class="specs mx-4">
                                                    <h4 class="text-center font-weight-bold">' . $item['name'] . '</h4>

                                                    <h6>' . $item['ram'] . '</h6>

                                                    <h6>' . $item['rom'] . '</h6>

                                                    <h6>' . $item['rating'] . '</h6>
                                                </div>
                                            </div>


                                                <div class="mx-auto text-center my-4">
                                                    <a href="#" class="btn btn-block btn-order btn-outline font-weight-bold" role="button">
                                                        <span><i class="fas fa-crosshairs"></i></span> See detailed specs</a>
                                                </div>
                                </div>
                            </div>';
                    }
                   
                   echo '</div>
                    </div>';
                }
                Database::disconnect();
                echo  
            '</div>';
            ?>

            </div>
        </section>



        <section class="brands">

        </section>

        <footer data-aos="fade-down" class="title__sec pb-5 pt-2 text-center" style="margin-bottom:0">
            <div class="heading">
                <a class="goto" href="#top">
                    <h3 class="text-logo2 my-5 text-center">
                        UNDERDOG PHONES <img src="img/fav.png" class="text-logo" alt="logo">
                    </h3>

                    <span class="text-logo3">Find your ideal smartphone quickly.</span>
                </a>

                <span class="text-logo3">2018 - Lionel SUVELOR &#169; - All rights reserved</span>

            </div>
        </footer>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>
