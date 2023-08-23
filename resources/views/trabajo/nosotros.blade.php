@extends('layouts.plantilla')


@section('title', 'home')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-****" crossorigin="anonymous" />
    <style>

        .nosotros {
            display: flex;
            justify-content: center;
            align-items: center;
           
            overflow: hidden;
        }

        .nosotros img {
            height: 110%;
            width: 100%;
            transition: opacity 0.3s ease;
            border-radius: 13px;
            border-image: linear-gradient(to bottom right, transparent, transparent 15%, #000 25%, #000 75%, transparent 85%, transparent) 5;
            border-image-slice: 1;
        }


        .nosotros:hover img {
            opacity: 0.8;
        }


        
        /*------------equipo----------*/
        #equipoRaiz {
            text-align: center;
            margin-top: -3%;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            font-weight: bold;
            font-size: 0.9em;
        }

        .col-lg-3 {
            margin: 5px;
            width: 200px; 
        }

        .col-lg-3:hover {
            transform: scale(1.05);
        }

        .equipo-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 5px;
            text-align: center;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 2px rgba(0, 0, 0, 0.3);
        }
        .equipo-item:hover {
            background: linear-gradient(0deg, var(--color-naranja) 0%, rgba(60, 51, 80, 0) 100%);
            transition: background-position 20s ease;
            color: white;
        }

        .equipo-item:hover i, .equipo-item:hover{
            color: white;
           

        }
        .equipo-item:hover .fa-mobile-alt:before {
            color: white;
        }




        .circle-imgen {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
        }

        .circle-imgen img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .mb-3 {
            margin-bottom: 0rem !important;
        }

        .nombequ {
            font-weight: bolder;
            font-size: 11px;
            margin-top: 8px;
            margin-bottom: 5px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .ocupequ {
            font-size: 9px;
            margin-bottom: 8px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .col-12 {
            flex: 0 0 auto;
            width: 100%;
            font-weight: bold;
        }

        .contact-info {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .contact-info .elementor-icon-list-icon {
            margin-right: 3px;
        }

        .contact-info .elementor-icon-list-text {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .correo a {
            color: black;
        }

        .correo:hover a {
            color: white;
        }
  
        .fa-mobile-alt:before {
            color: black;
            transition: color 0.3s ease-in-out;
        }

        .contact-info .elementor-icon-list-icon:hover .fa-mobile-alt:before {
            color: var(--color-negro);
        }

        .telefono-negrita {
            font-weight: bold;
            margin-left:7px;
        }

        .telefono-negrita:hover{
            color:#fff;
        }

        @media screen and (max-width: 390px) {
            .logo img{
                width: 56px;
                height: 45px;
                margin-left: 0;


            }
            ul li a span {
                font-size: 7px;
            }
            .ul__nav a{
                padding: 0.5rem 0;
                margin-right: 0;
                
            }
            .ul__nav {
                gap: 9px;
                letter-spacing: 1.4px;
                padding-left: 0.5rem;
                
                
            }
            .footer {
                grid-template-columns: 1fr;
                flex-direction: column;
            }
        }



    </style>

    <section class="nosotros">

        <div>
            <img src="{{ asset('storage/img/grupal.jpg') }}" alt="Descripción de la imagen">
        </div>

    </section>

    <section id="equipoRaiz">
        <div class="conta">
            <div class="row m-0 my-5">
                <h2 class="col-12">ASESORES INMOBILIARIOS</h2>
                @foreach ($trabajos as $valor)
                    <div class="col-lg-3 text-center mt-5 d-inline-block">
                        <div class="equipo-item">
                            <div class="circle-imgen">
                                <img class="mb-3 imgesle" src="../storage/app/{{ $valor['foto'] }}">
                            </div>
                            <h3 class="nombequ">{{ $valor['nombre']}} {{$valor['apellido']}} </h3>
                            <p class="ocupequ">Asesor inmobiliario</p>
                            <div class="contact-info">
                                <span class="elementor-icon-list-icon">
                                    <i aria-hidden="true" class="fas fa-mobile-alt"></i>
                                </span>
                                <span class="elementor-icon-list-text telefono-negrita">{{ $valor['telefono']}} </span><br>
                            </div>
                            <div class="correo">
                                <a href="mailto:{{ $valor['email']}}"><i class="far fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>






<!-- Asesor  -->
<!-- <section >
    <div class="container">
        <div class="row m-0 py-3">
            <form action="{{ route('asesor') }}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div class="col-xl-3 col-lg-3 col-12">
                    <input type="text" class="input my-2" name="nombre" placeholder="Nombre">
                </div>
                <div class="col-xl-3 col-lg-3 col-12">
                    <input type="text" class="input my-2" name="apellido" placeholder="Apellido">
                </div>
                <div class="col-xl-3 col-lg-3 col-12">
                    <input type="text" class="input my-2" name="telefono" placeholder="Teléfono">
                </div>
                <div class="col-xl-3 col-lg-3 col-12">
                    <input type="email"class="input my-2"  name="email" placeholder="Email">
                </div>
                <div class="col-xl-3 col-lg-3 col-12">
                    <input type="file" class="input my-2" name="foto" accept="image/*">
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <button class="my-2 btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</section> -->
<section>
    <form action="{{ route('guardarImagen') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="foto">
        <button type="submit">Enviar imagen</button>
    </form>

</section>
<!-- <section>
    <form action="{{ route('subir') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="video">Subir Video:</label>
        <input type="file" id="video" name="video" accept="video/mp4,video/x-m4v,video/*">
        <button type="submit">Subir</button>
    </form>
    <form method="POST" action="{{ route('gif.store') }}" enctype="multipart/form-data">
        @csrf
        <label for="gif">Subir GIF:</label>
        <input type="file" id="gif" name="gif" accept="image/gif">
        <button type="submit">Subir</button>
    </form>


</section>  -->

@endsection

@section('script')
@endsection

