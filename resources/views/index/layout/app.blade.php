<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/f40c32a411.js" crossorigin="anonymous"></script>
    @yield('style')
    <style>
        html {
            scroll-behavior: smooth;
        }
        body {
            width: 100%;
            padding:0;
            margin: 0;
        }
         @font-face  {
             font-family: Balsamiq;
             src: url(/font/Balsamiq.ttf);
             
            }
            
        @font-face  {
            font-family: GoT;
            src: url(/font/GoT.ttf)
        }

        @font-face  {
            font-family: Futura;
            src: url(/font/FBK.ttf)
        }

        @font-face  {
            font-family: Pluto;
            src: url(/font/Pluto.otf);
        }

        * {
            padding : 0;
            margin : 0;
        }

        body {
            height: 100%;
        }
        html {
        position: relative;
        min-height: 100%;
        padding-bottom: 50px;
        /* equal to footer height */
        }

        footer {
        position: relative;
        background: red;
        bottom: 0;
        height: 100px;
        width: 100%;
        }
            
        .title-section{
            color:black;
            font-family:Futura;
            font-weight: 800;
            font-size: 6vw;
        }

        .hr-black {
            border: 2px solid rgb(58, 58, 58);
            width: 40%;
            margin: auto;
        }

        .hr-white {
            border: 2px solid white;
            width: 40%;
            margin: auto;
        }

        </style>
        @include('index.layout.stylenav')
        @include('index.layout.stylefooter')
</head>
<body>
    @include('index.layout.navbar')
    @yield('page')
    @include('index.layout.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>