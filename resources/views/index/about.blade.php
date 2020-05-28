@extends('index.layout.app')

@section('title')
    About
@endsection

@section('style')
    <style>
        #about {
            width: 100%;
            margin-top: 90px;
            min-height: 650px;
            background-color: rgba(133, 133, 133, 0.705);
        }

        .about-container{
            display: grid;
            position: relative;
            grid-template-columns: repeat(2,1fr);
            grid-template-rows: minmax(40px,1fr);
            grid-template-areas:
            'left right'
            ;
            grid-gap: 30px;

        }

        .left {
            grid-area: left;
            justify-self: center;
        }

        .right {
            grid-area: right;
        }

        .paragraf {
            display: inherit;
            object-fit:cover;
        }

        #tool {
            width: 100%;
            min-height: 100px;
        }

        .container-tools {
            display: grid;
            grid-template-columns: 1fr 0.7fr 1fr 1fr;
            grid-template-rows: minmax(40px,290px);
        }


        .tool-1 {
            grid-column : 1 / 2;
            grid-row : 1 / 2;
        }

        .tool-2 {
            grid-column : 2 / 3;
            grid-row : 1 / 2;
        }
        .tool-3 {
            grid-column : 3 / 4;
            grid-row : 1 / 2;
            margin-top: 3vw;
        }
        .tool-4 {
            grid-column : 4 / 5;
            grid-row : 1 / 2;
        }

        .paragraf {
            font-family: Pluto;
        }
        


        @media screen and (max-width:767px) {
            .tool {
                height: 50%;
                width: 100%;
            }

            .caption-tool {
                font-size: 5vw;
                postion: absolute;
                text-align: center;
                margin-top: 7.6rem;
                color: rgb(241, 79, 4);
            }

            .container-tools {
                display: grid;
                grid-template-columns: 1fr 0.7fr 1fr 1fr;
                grid-template-rows: minmax(40px,250px);
            }
        }

        @media screen and (min-width:768px) {
            .tool {
                width: 100%;
                height: 100%;
            }

            .caption-tool {
                font-size: 3.5vw;
                text-align: center;
                margin:auto;
                margin-top: 17.5rem;
                color:rgb(255, 27, 11);
            }
        }

    </style>
@endsection

@section('page')
    

    <section id="tool" class="mt-5">
        <div class="tools">
        <h1 class="title-section text-center">Tools</h1>
        <hr class="hr-black">
            <div class="container mt-5 pb-5">
                <div class="container-tools pb-5">
                    <img src="/img/html.png" alt="" class="tool tool-1">
                    <img src="/img/css.png" alt="" class="tool tool-2">
                    <img src="/img/bootsrap.png" alt="" class="tool tool-3">
                    <img src="/img/laravel.png" alt="" class="tool tool-4">
                    <h1 class='tool-4 caption-tool'>Laravel</h1>
                </div>
            </div>
        </div>
    </section>
    <section id="about" class="mt-2">
        <div class="container pt-5">
            <h1 class="title-section text-white text-center ">About</h1>
            <hr class="hr-white">
            <div class="about-container mt-5">
                <div class="left text-black paragraf p-3">
                    &nbsp; &nbsp; Hallo nama gw Juan umur gw 17 tahun sekarang gw duduk di kelas 2 SMK dan gw ambil jurusan TKJ ( teknik komputer dan jaringan ) bagian about ini sebenarnya cuma buat iseng aj karena gw gatau mau isi konten apa gaada ide dan alasan buat web kaya gini supaya bisa ngisi waktu dan belajar tentang web development,gw bikin web sekitar 5 hari ya waktu yang lama karena gw masih pemula banget soal urusan UI kaya gini maklum wkwkw ampe puyeng
                </div>
                <div class="right text-black paragraf p-3 pb-4">
                    <p>&nbsp; &nbsp;oh iya pas buat web ini gw pake HTML ( Buat markup pastinya) terus CSS sebagai styling karena hidup ku tanpa kamu bagaikan HTML tanpa CSS jadi tidak berwarna ea:v ada juga bootstrap yang ngebantu gw dalam mempercantik web jdinya pengerjaan bisa lebih cepat dan terakhir laravel ini sih biasanya buat backend dan di web ini gw gapake back end laravel cuma dipake buat routing page aja, ya jdi gw disini kaya cerita padahal masih ada satu page lgi yg belum kelar wkwkwkw gw harap ketika gw jdi expert nanti dan udh kerja jdi web developer aminnnnn gw bisa lihat codingan gw dlu yang masih jelek gini dan sangat sederhana:V </p>
                </div>
            </div>
        </div>
    </section>
@endsection