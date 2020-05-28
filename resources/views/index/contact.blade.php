@extends('index.layout.app')

@section('title')
    Contact
@endsection

@section('style')
    <style>
        
        .social-media {
            min-height: 400px;
        }

        #facebook {
            display: inline-block;
        }

        #instagram {
            display: inline-block;
        }

        #line {
            display: inline-block;
        }

        .icon {
            text-align: center;
            display: inline-block;
            vertical-align: bottom;
        }

        .card-facebook {
            background-color: rgb(5, 109, 228);
        }
        
        .fa-facebook-square {
            color: white;
        }

        .card-instagram {
            background-color: rgb(131,58,180);
        }

        .fa-instagram{
            color: white;
        }

        .card-line {
            background-color: #00c300;
        }

        .fa-line {
            color: white;
        }

        @media screen and (max-width:767px) {
            #facebook {
            display: block;
        }

            #instagram {
                display: block;

            }

            #line {
                display: block;

            }

            .card {
                margin: auto;
            }
        }

    </style>
@endsection

@section('page')
    <section id="contact ">
        <div class="container mt-4">
            <h1 class="text-center title-section ">My Contact</h1>
            <hr class='hr-black'>
            <div class="row social-media">
                <div id="facebook" class="col-lg-4 pl-lg-5 mt-5 pb-4">
                    <div class="card card-facebook" style="width: 12rem;">
                        <div class="card-body text-center">
                            <i class="fab fa-facebook-square fa-5x"></i>
                            <h5 class="card-title">Facebook</h5>
                            <a href="https://web.facebook.com/juan.ewaldo.351" target="_blank" class="btn btn-black btn-outline-light">Add Me</a>
                        </div>
                    </div>
                </div>
                <div id="instagram" class="col-lg-4 mt-5 pb-4">
                    <div class="card card-instagram" style="width: 12rem;">
                        <div class="card-body text-center">
                            <i class="fab fa-instagram fa-5x icon"></i>
                            <h5 class="card-title">Instagram</h5>
                            <a href="https://www.instagram.com/juanewaldo/?hl=id" target="_blank" class="btn btn-black btn-outline-light">Follow Me</a>
                        </div>
                    </div>
                </div>
                <div id="line" class="col-lg-4 mt-5 pb-4">
                    <div class="card card-line" style="width: 12rem;">
                        <div class="card-body text-center">
                            <i class="fab fa-line fa-5x"></i>
                            <h5 class="card-title">Instagram</h5>
                            <a href="http://line.me/ti/p/~juanewaldo777" target="_blank" class="btn btn-black btn-outline-light">Add Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
