<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/0a077be9df.js"></script>

    <title>UltraGamesNetwork</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="    box-shadow: 0px 2px 20px black;">
    <a class="navbar-brand" href="#">UGN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="http://unlimitedgamesnetwork.com">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a class="nav-link disabled" href="#" disabled>Forum</a></li>
            <li class="nav-item"><a class="nav-link" href="http://store.unlimitedgamesnetwork.com" target="_blank">Store</a></li>
        </ul>
    </div>
</nav>
<div class="container-fluid mt-2">
    <div class="row mb-4" style="background: rgba(0, 0, 0, 0.56); min-height: 150px; ">
        <div class="col-md-12 mx-auto">
            <div class="jumbotron container"
                 style="background-color:transparent!important; margin-bottom: 2rem; margin-top:2rem;">
                <div class="row">
                    <div class="col-md-6 align-self-center">
                        <h4 style="color: white">Join our server now!</h4>
                        <h5 class="server-ip" style="color: white">ip: play.unlimitedgamesnetwork.com </h5>
                    </div>
                    <div class="col-md-6">
                        <img class="img-main-element" src="storage/images/resized_banner.png" alt="Responsive image">
                        <!--                        <h1 class="display-4">Hello, world!</h1>
                 -->
                        <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
                        <!--                    <hr class="my-4">
                 -->
                        <!-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p> -->
                        <!--    <p class="lead">
                                        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                                      </p> -->
                    </div>
                    <!-- <div class="col-md-5"></div> -->
                </div>
                <div class="row mt-5">
                    <div class="col">

                        <center>
                            <a href="https://discord.gg/vPp8pWa" target="_blank">
                                <i class="fab fa-discord"
                                   style="font-size:100px; color:#9BAAE3; padding:20px;
    border-radius: 50%; background: transparent;  text-align: center;
    line-height: 100px; width: 100px; height: 100px;
    vertical-align: middle;"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCcP8tgcuBi_sfJA-QIs4DcA/featured?view_as=subscriber" target="_blank">
                                <i class="fab fa-youtube"
                                   style="font-size:100px; color:#FF0000; padding:20px;   text-align: center;vertical-align: middle;"></i>
                            </a>
                            <a href="https://twitter.com/network_UGN" target="_blank">
                                <i class="fab fa-twitter"
                                   style="font-size:100px; color:#1A91DA; padding:20px;
    border-radius: 50%; background: transparent; ;  text-align: center;
    line-height: 100px; width: 100px; height: 100px;
    vertical-align: middle;"></i>
                            </a>

                        </center>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<div class="container mb-5">
    <div class="row d-flex justify-content-center title-centered mb-4">
        <div class="col-md-12">
            <h1> Latest News </h1>
        </div>
    </div>
{{--{{dd($posts)}}--}}

        <div class="row d-flex justify-content-center mb-4">
            @foreach($posts as $post)
                <?php $postimage = str_replace("\\", "/", $post->image);
                ?>
                <div class="col-md-4">
                    <a href="news/{{$post->slug}}" class="card card-homepage mb-3" style='background: url("storage/<?=$postimage;?>") no-repeat; background-size: cover; min-height: 35vh'>
                        <div class="card-body card-img d-flex flex-column">
                            <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      -->
                            <div class="mt-auto">
                                @if(!empty($post->categories->name))
                                    <span>{{$post->categories->name}}</span>
                                @endif
                                <h3>{{$post->title}}</h3>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>


    <div class="row d-flex justify-content-center title-centered mb-4 d-none">
        <div class="col-md-12">
            <h1> Our Games </h1>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-homepage mb-3"
                                     style="background: url('storage/images/wallpaper2.png'); min-height: 35vh">
                                    <div class="card-body card-img d-flex flex-column">
                                        <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  -->
                                        <div class="mt-auto">
                                            <span>NEW MAPS</span>
                                            <h3>Survival Love update</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-homepage mb-3"
                                     style="background: url('storage/images/wallpaper2.png'); min-height: 35vh">
                                    <div class="card-body card-img d-flex flex-column">
                                        <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  -->
                                        <div class="mt-auto">
                                            <span>NEW MAPS</span>
                                            <h3>Survival Love update</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-homepage mb-3"
                                     style="background: url('storage/images/wallpaper2.png'); min-height: 35vh">
                                    <div class="card-body card-img d-flex flex-column">
                                        <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  -->
                                        <div class="mt-auto">
                                            <span>NEW MAPS</span>
                                            <h3>Survival Love update</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-homepage mb-3"
                                     style="background: url('storage/images/wallpaper2.png'); min-height: 35vh">
                                    <div class="card-body card-img d-flex flex-column">
                                        <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  -->
                                        <div class="mt-auto">
                                            <span>NEW MAPS</span>
                                            <h3>Survival Love update</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-homepage mb-3"
                                     style="background: url('storage/images/wallpaper2.png'); min-height: 35vh">
                                    <div class="card-body card-img d-flex flex-column">
                                        <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  -->
                                        <div class="mt-auto">
                                            <span>NEW MAPS</span>
                                            <h3>Survival Love update</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-homepage mb-3"
                                     style="background: url('storage/images/wallpaper2.png'); min-height: 35vh">
                                    <div class="card-body card-img d-flex flex-column">
                                        <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  -->
                                        <div class="mt-auto">
                                            <span>NEW MAPS</span>
                                            <h3>Survival Love update</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-homepage mb-3"
                                     style="background: url('storage/images/wallpaper2.png'); min-height: 35vh">
                                    <div class="card-body card-img d-flex flex-column">
                                        <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  -->
                                        <div class="mt-auto">
                                            <span>NEW MAPS</span>
                                            <h3>Survival Love update</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-homepage mb-3"
                                     style="background: url('storage/images/wallpaper2.png'); min-height: 35vh">
                                    <div class="card-body card-img d-flex flex-column">
                                        <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  -->
                                        <div class="mt-auto">
                                            <span>NEW MAPS</span>
                                            <h3>Survival Love update</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-homepage mb-3"
                                     style="background: url('storage/images/wallpaper2.png'); min-height: 35vh">
                                    <div class="card-body card-img d-flex flex-column">
                                        <!--                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  -->
                                        <div class="mt-auto">
                                            <span>NEW MAPS</span>
                                            <h3>Survival Love update</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

</div>
<div class="container mt-5 mb-5">
    <div class="row">

    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
<footer class="text-center">
    <div class="card bg-dark" style="color: #838383;">
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>Copyright © UnlimitedGamesNetwork 2019. All rights reserved. Build with love by Sander van Hoogdalem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>
