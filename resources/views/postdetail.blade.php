<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
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
            <li class="nav-item active"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a class="nav-link disabled" href="#" disabled>Forum</a></li>
            <li class="nav-item"><a class="nav-link" href="http://store.unlimitedgamesnetwork.com">Store</a></li>
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
                        <img class="img-main-element" src="../storage/images/resized_banner.png" alt="Responsive image">
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
                            <a href="https://discord.gg/vPp8pWa">
                                <i class="fab fa-discord"
                                   style="font-size:100px; color:#9BAAE3; padding:20px;
    border-radius: 50%; background: transparent;  text-align: center;
    line-height: 100px; width: 100px; height: 100px;
    vertical-align: middle;"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCcP8tgcuBi_sfJA-QIs4DcA/featured?view_as=subscriber">
                                <i class="fab fa-youtube"
                                   style="font-size:100px; color:#FF0000; padding:20px;   text-align: center;vertical-align: middle;"></i>
                            </a>
                            <a href="https://twitter.com/network_UGN">
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
<div class="container" style="margin-top: 3rem">
    <?php $postimage = str_replace("\\", "/", $post->image);
    ?>
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="min-height: 500px; border: none">
                <div class="news-image" style=' width: 100%;
            min-height: 30vh; max-height: 50vh;
        object-fit: cover;
background: url("../storage/<?=$postimage;?>") no-repeat;
  background-size: cover;
'>
                    <div class="img-gradient" style="		background: linear-gradient(to bottom,rgba(0,0,0,0) 0%,rgba(0,0,0,0) 65%,rgba(255,255,255,0.5) 80%,rgba(255,255,255,0.1) 100%)!important;
	    z-index: 10000;
">

                    </div>
                </div>


                <div class="card-body">
                    <div class="entry-content" style="color: #8c8d9e">
                        <div class="mt-4 mb-4">
                            <strong><h1 style="color: black; font-weight: 700">{{$post->title}}</h1></strong>
                            <p style="color: black">Author: Admin</p>
                        </div>
                        {!!$post->body !!}


                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!--            <div class="card mb-5" style="min-height: 150px; border:none">-->
            <!--                <iframe src="https://discordapp.com/widget?id=445945915774337036&theme=dark" width="100%" height="500"-->
            <!--                        allowtransparency="true" frameborder="0"></iframe>-->
            <!---->
            <!--            </div>-->
            <div class="card mb-5" style="min-height: 100px;">
                <a class="twitter-timeline" data-lang="nl" data-theme="light"
                   href="https://twitter.com/network_UGN?ref_src=twsrc%5Etfw">Tweets by network_UGN</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="card mb-5 " style="border: none">
                <div class="card-header" style="background: #7289DA">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="../storage/images/discord-logo-white.png" alt="" style="width: 100%;">
                        </div>
                        <div class="col-md-6">
                            <?php
                            $json = file_get_contents("https://discordapp.com/api/guilds/445945915774337036/widget.json");
                            $json_dec = json_decode($json);
                            $online = 0;
                            foreach ($json_dec->members as $member) {
                                if (!empty($member->bot)) {
                                    continue;
                                }
//                        if ($member->bot == true) {
//                            continue;
//                        }
                                if ($member->status == "dnd" || $member->status == "online"){
                                    $online++;
                                }
                            }
                            ?>
                            <div class="float-right align-middle" style="margin-top: 10px; color: white"><?="online: " . $online;?></div>
                        </div>
                    </div>

                </div>
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
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
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
                        <p>Copyright © UnlimitedGamesNetwork. All rights reserved. Build with love by Sander van
                            Hoogdalem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</html>

<script>
</script>
