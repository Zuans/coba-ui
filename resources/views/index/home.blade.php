@extends('index.layout.app')

@section('title')
    Home
@endsection

@section('style')
    <style>
         .start{
            display: grid;
            grid-template-columns: repeat(2,1fr);
            grid-template-rows: 37.6rem;
            background-image: url(/img/wave4.svg);
            background-size: 1fr;
            background-repeat: no-repeat;
            background-position: bottom right;
        }


        .welcome {
    
        }
        
        .welcome h1 {
            font-family:  Balsamiq;
            color: rgb(20, 37, 37);       
        }

        .welcome p {
            font-weight: 500;
        }

        .wave img {

        }

        #carousel {
            border-radius: 3px;
            
        }
        
        .carousel-cap {
            font-weight: 500;
            color: white;

        }

        .carousel-caption {
            text-shadow: 5px 2px 16px black;
        }

        #singer {
            background-color: rgba(87, 87, 87, 0.986);
        }

        #char {
            height: 70vh;
            width: 100%;
            background-color: white;
        }

        .test {
            width : 200px;
            height : 200px;
            background-color: lightskyblue;
        }

        .gallery {
            display: grid;
            margin-top: 5rem;
            grid-template-columns: repeat(3,minmax(20px,1fr));
            grid-template-rows: minmax(40px,12vw) minmax(40px,10vw) minmax(40px,10vw) minmax(60px,20vw);
            background-color: black;
            grid-gap : 1vw;
            padding: 1vw;
            border-radius: 5px;
        }

        .container-gallery {
            height: 80%;
            width: 45%;
            margin:auto;
        }
        .img {
            height: 100%;
            width:100%;
        }

        .img-gallery-1 {
            grid-column: 1 / 2;
            grid-row: 1 / 2;
        }

        .img-gallery-2 {
            grid-column: 2 / 3;
            grid-row: 1 / 3;
        }
        .img-gallery-3 {
            grid-column: 3 / 4;
            grid-row: 1 / 2;
        }

        .img-gallery-4 {
            grid-column: 1 / 2;
            grid-row: 2 / 4;
        }

        .img-gallery-5 {
            grid-column: 2 / 3;
            grid-row: 3 / 4;
        }

        .img-gallery-6 {
            grid-column: 3 / 4;
            grid-row: 2 / 4;
        }

        .img-gallery-7 {
            grid-column: 1 / 4;
            grid-row: 4 / 5;
        }

        .caption-img-kecil {
            position: relative;
            z-index; 100;
            color: white;
            margin: auto;
            bottom: 0;
            margin-top: 7vw;
            font-size: 2.5vw;
            text-shadow: 2px 2px 2px black;
            font-family:Balsamiq;
        }

        .caption-img-panjang {
            position: relative;
            z-index; 100;
            color: white;
            margin: auto;
            bottom: 0;
            margin-top: 17vw;
            font-size: 2.5vw;
            text-shadow: 2px 2px 5px black;
            font-family:Balsamiq;
        }


            /* Mobile */
            @media screen and (max-width: 768px) {
                    .start{
                    display: grid;
                    grid-template-columns: repeat(2,1fr);
                    grid-template-rows: 30rem;
                    background-image: url(/img/wave5.svg);
                    background-size: 39rem;
                    background-repeat: no-repeat;
                    background-position: bottom right;
                }

                .wave img {
                    margin-top: 10%;
                    height: 200px;
                    width: 200px;
                }
                #carousel {
                    min-height: 30px;
                }

                #carousel .slide {
                    height: 30%;
                    width: 70%;
                    margin: auto;
                }
                
                .carousel-inner {
                    
                }

                .carousel-item img {
                    width: 100%;
                    height: 40%;
                    margin-top: 10px;
                    border-radius: 15px;
                    margin-bottom: 40px;
                }

                .carousel-title {
                    font-family: Futura;
                    color:white;
                    font-weight: 700;
                    font-size: 1.5rem;
                    padding-top: 10px;
                    margin-bottom: 10px;
                }

                .gallery {
                    display: grid;
                    margin-top: 5rem;
                    grid-template-columns: repeat(3,minmax(20px,1fr));
                    grid-template-rows: minmax(40px,14vw) minmax(40px,10vw) minmax(40px,14vw) minmax(60px,24vw);
                    background-color: black;
                    grid-gap : 1vw;
                    padding: 1vw;
                    border-radius: 5px;
                }

                .gallery {
                    margin-top: 2rem;
                }

            }


        /* WEB */
        @media screen and (min-width: 769px) {
                .wave img {
                    margin-left: 10%;
                    width: 50%
                    
                }

                #carousel {
                    min-height: 700px;
                }

                #carousel .slide {
                    width: 50%;
                    margin: auto;
                    margin-top: 30px;
                }

                .carousel-inner {
                    width:100%;
                    /* height: 60%; */
                }

                .carousel-item img {
                    width: 100%;
                    border-radius: 15px;
                }

                .carousel-title {
                    font-family: Futura;
                    color:white;
                    font-weight: 900;
                    font-size: 2rem;
                    padding-top: 10px;
                    margin-bottom: 20px;
                }

                #char {
                    height: 170vh;
                    width: 100%;
                    background-color: white;
                }

            }
    </style>
@endsection

@section('page')
    <!-- Bagian Awal -->
    <section id="welcome">
        <div class="start">
            <div class="welcome">
                <h1 class="pt-5 pl-5">Hello,</h1>
                <p class="pl-5">Welcome To My Website <br> Develop by <a href="">Zuans</a></p>
                <a href="#my-hobbies" class="btn btn-tranparent btn-outline-primary ml-5">Let's Go</a>
            </div>
            <div class="wave">
                <img src="/img/hello.jpg" alt="" srcset="">
            </div>
        </div>
    </section>

    <section id="carousel" class="mt-5 ">
            <div id="my-hobbies" class="page">
                <!-- Hobbies Carousel  -->
                <h1 class="text-center title-section ">My Hobbies</h1>
                <hr class='hr-black'>
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-20" src="/img/music.jpg" alt="First slide">
                        <div class="carousel-caption ">
                            <h5 class="carousel-title">Listen Music</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-20" src="/img/pc.jpg" alt="Second slide">
                        <div class="carousel-caption  ">
                            <h5 class="carousel-title">Play Games</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-20" src="/img/anime.png" alt="Third slide">
                        <div class="carousel-caption  ">
                            <h5 class="carousel-title">Watch Anime</h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-20" src="/img/coding.jpeg" alt="Third slide">
                        <div class="carousel-caption  ">
                            <h5 class="carousel-title">Coding</h5>
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
             <!-- Singer Carousel  -->
             <div id="singer" class="mt-5">
                <h1 class="text-center text-white pt-5 title-section">My Favorite Singer</h1>
                <hr class="hr-white">
                <div id="corousel2" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#corousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#corousel2" data-slide-to="1"></li>
                    <li data-target="#corousel2" data-slide-to="2"></li>
                    <li data-target="#corousel2" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img class="d-block w-20" src="/img/Adam.jpg" alt="First slide">
                        <div class="carousel-caption  ">
                            <h5 class="carousel-title">Adam Levine</h5>
                            <p class="carousel-cap">Fav song: Payphone</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-20" src="/img/Neffex.jpg" alt="Second slide">
                        <div class="carousel-caption  ">
                            <h5 class="carousel-title">Neffex</h5>
                            <p class="carousel-cap">Fav song: Cold</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-20" src="/img/Lisa.jpg" alt="Third slide">
                        <div class="carousel-caption  ">
                            <h5 class="carousel-title">LiSA</h5>
                            <p class="carousel-cap">Fav song: Adamas</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-20" src="/img/kesnhi yonezu.jpg" alt="Third slide">
                        <div class="carousel-caption  ">
                            <h5 class="carousel-title">Kenshi Yonezu</h5>
                            <p class="carousel-cap">Fav song: Peace Sign</p>
                        </div>
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#corousel2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#corousel2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <br>
                <br>
    </section>

    <section id="char">
        <div class="container-gallery">
            <h1 class="text-center title-section mt-4">My Favorite Char in Anime</h1>
            <hr class='hr-black'>
            <div class="gallery">
                    <img src="/img/midoriya.jpg" class="img img-gallery-1" alt="">
                    <h1 class="caption-img-kecil img-gallery-1">Midoriya</h1>
                    
                    <img src="/img/emilia.jfif" class="img img-gallery-2" alt="">
                    <h1 class="caption-img-panjang img-gallery-2">Emilia</h1>
                    
                    <img src="/img/todoroki.jfif" class="img img-gallery-3" alt="">
                    <h1 class="caption-img-kecil img-gallery-3">Todoroki</h1>
                    
                    <img src="/img/saber.jfif" class="img img-gallery-4" alt="">
                    <h1 class="caption-img-panjang img-gallery-4">Arturia</h1>
                    
                    <img src="/img/bakugo.jpeg" class="img img-gallery-5" alt="">
                    <h1 class="caption-img-kecil img-gallery-5">Bakugo</h1>
                    
                    <img src="/img/kaori.jpg" class="img img-gallery-6" alt="">
                    <h1 class="caption-img-panjang img-gallery-6">Kaori</h1>
                    
                    <img src="/img/asunaalice.jpg" class="img img-gallery-7" alt="">
                    <h1 class="caption-img-panjang img-gallery-7">Alice & Asuna</h1>
                </div>
            </div>
        </div>
    </section>
@endsection
