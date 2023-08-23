@extends('layouts.plantilla')


@section('title', 'home')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">

    
    <style>
       
       section {
            z-index: -1;
        }

        .video-click {
            position: relative;
            margin-top: 80px; /* Ajusta este valor según sea necesario */
            width: 75%;
            height: 0;
            padding-bottom: 42.1875%;
            overflow: hidden;
            margin: 0 auto;
        }

        .video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 2px solid rgba(170, 170, 167, 0.267);
            box-shadow: 0 0 10px rgba(148, 22, 22, 0.5); /* Añade esta línea para un box-shadow */
        }
        @media (max-width: 390px) {
        .video-click {
            margin-top: 80px; /* Ajusta este valor según sea necesario */
            width: 95%;
        }
        }





        

        /*--------------------galeria de fotos---------------*/
        .robot {
            font-family: "Roboto", sans-serif;
           
            margin-top: 37px;
            font-size: 2rem; /* Tamaño de fuente más pequeño */
            font-weight: bold;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            padding: 10px; /* Padding más pequeño */
            }


        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }


        .gallery {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            overflow: hidden;
            max-width: 1300px;
            margin: auto;
            justify-content: 100%;
            background-color: #222;
            padding: 0;
        }
        .gallery .photo .photo__image img:hover {
            transform: translateX(10%);
        }

        .gallery .photo .photo__name:hover {
            color: #fff;
        }


        .gallery__strip {
            min-height: 100vh;
        }

        .gallery__strip__wrapper {
            flex: 0 0 100%;
            justify-content: flex-end;
            background: #222;
            border-right: 2px solid #333;
            position: relative;
        }

        @media (min-width: 500px) {
            .gallery__strip__wrapper {
                flex: 0 0 50%;
            }
        }

        @media (min-width: 950px) {
            .gallery {
                height: 100vh;
            }

            .gallery__strip.one {
                animation: 60s move-it ease alternate infinite 5s;
                transform: translateY(2%);
            }

            .gallery__strip.three {
                animation: 70s move-it ease alternate infinite 6s;
                transform: translateY(2%);
            }

            .gallery__strip.two {
                animation: 58s move-it-2 ease alternate infinite 5s;
                transform: translateY(-50%);
            }

            .gallery__strip.four {
                animation: 65s move-it-2 ease alternate infinite 5.5s;
                transform: translateY(-50%);
            }

            .gallery__strip:hover {
                animation-play-state: paused;
            }

            .gallery__strip__wrapper {
                flex: 0 0 25%;
            }
        }

        .photo {
            position: relative;
            text-align: right;
            padding-bottom: 3rem;
        }

        .photo__image img {
            width: 90%;
            transform: translateX(30%);
            transition: 1s cubic-bezier(0.19, 1, 0.22, 1) 0.2s;
        }

        .photo__name {
            text-transform: uppercase;
            font-size: 40px;
            letter-spacing: 2px;
            color: transparent;
            -webkit-text-stroke-width: 1px;
            -webkit-text-stroke-color: white;
            margin-top: -25px;
            transition: 0.4s ease-in-out 0.4s;
            position: relative;
            width: 100%;
        }

        .photo__image img:hover {
            transform: translateX(10%);
            transition: transform 0.5s ease;
        }

        .photo__image img {
            transition: transform 0.5s ease;
        }

        .photo__image img:hover {
            transform: translateX(10%);
        }




        @keyframes move-it {

            0%,
            90%,
            100% {
                transform: translateY(2%);
            }

            45% {
                transform: translateY(-50%);
            }
        }

        @keyframes move-it-2 {

            0%,
            90%,
            100% {
                transform: translateY(-50%);
            }

            45% {
                transform: translateY(5%);
            }
        }



    </style>
    <section class="video-click">
        <img class="video" src="{{ asset('storage/gifs/gif.gif') }}" alt="Descripción del GIF">
    </section>




    <section>
        <div class="robot">
            <h3>GALERIA DE FOTOS</h3>
        </div>

        <div class="gallery">
            <div class="gallery__strip__wrapper">
                <div class="gallery__strip one">
                    <div class="photo">
                        <div class="photo__image">
                            <img src="{{ asset('storage/img/confianza.jpg') }}">
                        </div>
                        <div class="photo__name">Confianza</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image">
                            <img src="{{ asset('storage/img/urbana.jpg') }}">
                        </div>
                        <div class="photo__name">habilitacion urbana</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image">
                            <img src="{{ asset('storage/img/casa.jpg') }}">
                        </div>
                        <div class="photo__name">casas</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image">
                            <img src="{{ asset('storage/img/sunarp.jpg') }}">
                        </div>
                        <div class="photo__name">sunarp</div>
                    </div>
                </div>
            </div>
            <div class="gallery__strip__wrapper">
                <div class="gallery__strip two">
                    <div class="photo">
                        <div class="photo__image">
                            <img src="{{ asset('storage/img/premiacion.jpg') }}">
                        </div>
                        <div class="photo__name">Premiacion</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image">
                            <img src="{{ asset('storage/img/llave.jpg') }}">
                        </div>
                        <div class="photo__name">compra</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image">
                            <img src="{{ asset('storage/img/venta.jpg') }}">
                        </div>
                        <div class="photo__name">venta</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image">
                            <img src="{{ asset('storage/img/capacitacion.jpg') }}">
                        </div>
                        <div class="photo__name">Capacitacion</div>
                    </div>
                </div>
            </div>
            <div class="gallery__strip__wrapper">
                <div class="gallery__strip three">
                    <div class="photo">
                        <div class="photo__image">
                            <img src="{{ asset('storage/img/oficina.jpg') }}">
                        </div>
                        <div class="photo__name">Oficina</div>
                    </div>
                    <div class="photo">
                        <div class="photo__image">
                            <img src="{{ asset('storage/img/plusvalia.jpg') }}">
                        </div>
                        <div class="photo__name">INVERSION</div>
                    </div>
                </div>
            </div>
        </div>
</section>

    <script src="https://kit.fontawesome.com/a2af082a84.js" crossorigin="anonymous"></script>

@endsection

