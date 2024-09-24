<?php
include ("connectionDB.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My website project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
            margin: 0%;
            padding: 0%;
        }

        .carousel-item {
            height: 400px;

        }
        .imgclass{
            width: 100%;
        }
        .row {
    margin-right: 0;
    margin-left: 0;
        }
         @media (max-width: 767px) {
            .text-center,
            .carousel-caption,
            .form-group,
            .row {
                text-align: center;
            }
            .carousel-caption h5, 
            .carousel-caption p, 
            h2, 
            .form-group label, 
            .btn {
                margin: 0 auto;
            }
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark sti">
            <div class="container-fluid">
                <a class="navbar-brand" href="signform.php">Login / signup</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../my complete web/pics/sliderpic/photo-1500702790369-fe461685b3c8.avif"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../my complete web/pics/sliderpic/tutorial-city-900x288.jpg" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../my complete web/pics/sliderpic/fullwidth-image-slider-in-wordpress.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <section>
            <div class="my-5 ">
                <div class="py-5">
                <h2 class="text-center">About Us</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12 ">
                        <img class="imgclass" src="../my complete web/pics/sliderpic/tutorial-city-900x288.jpg" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h2>I Am WebDeveloper   </h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore explicabo, alias molestiae
                            quia laudantium, vel veniam similique esse voluptatem sit placeat, consequuntur ut fuga
                            accusamus sint magnam incidunt quae. Facilis!</p>
                            <a href="about.php" class="btn btn-success">Check More</a>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="my-5 ">
                <div class="py-5">
                <h2 class="text-center">Our Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../my complete web/pics/sliderpic/card3.jpeg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../my complete web/pics/sliderpic/card2.jpeg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="../my complete web/pics/sliderpic/card3.jpeg" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="my-5 ">
                <div class="py-5">
                <h2 class="text-center">Gallery</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12 pb-5">
                        <img src="../my complete web/pics/sliderpic/card1.jpeg" alt="">
                    </div>  
                    <div class="col-lg-3 col-md-4 col-12 pb-5">
                        <img src="../my complete web/pics/sliderpic/card5.jpeg" alt="">
                    </div>  
                    <div class="col-lg-3 col-md-4 col-12 pb-5">
                        <img src="../my complete web/pics/sliderpic/card1.jpeg" alt="">
                    </div>  
                    <div class="col-lg-3 col-md-4 col-12 pb-5">
                        <img src="../my complete web/pics/sliderpic/card4.jpeg" alt="">
                    </div>  
                    <div class="col-lg-3 col-md-4 col-12 pb-5">
                        <img src="../my complete web/pics/sliderpic/card5.jpeg" alt="">
                    </div>  
                    <div class="col-lg-3 col-md-4 col-12 pb-5">
                        <img src="../my complete web/pics/sliderpic/card1.jpeg" alt="">
                    </div> 
                    <div class="col-lg-3 col-md-4 col-12 pb-5">
                        <img src="../my complete web/pics/sliderpic/card1.jpeg" alt="">
                    </div>  
                    <div class="col-lg-3 col-md-4 col-12 pb-5">
                        <img src="../my complete web/pics/sliderpic/card4.jpeg" alt="">
                    </div>       
                </div>
            </div>
            </section>
            <section>
                <div class="my-5 ">
                    <div class="py-5">
                    <h2 class="text-center">Login Form</h2>
                    </div>
                    <div class="m-auto w-50">
                        <form action="Login.php" method="post">
                            <div class="form-group ">
                            <label for="name">User Name</label>
                            <input type="text" id="name" name="name" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group ">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group ">
                            <label for="phone" >Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control" autocomplete="off">   
                            </div>
                            <button type="submit" class="btn btn-success mt-3">submit</button>
                        </form>
                     </div>
            </section>
            <footer class="bg-dark text-white text-center ">
                <h3 class="p-3">umair@gmail.com</h3>
            </footer>
    </div>
</body>

</html>