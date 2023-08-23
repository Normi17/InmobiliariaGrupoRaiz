@extends('layouts.plantilla')


@section('title', 'home')


@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* modall */



        /* ------------INVIERTE EN GRUPO RAIZ 4 colum--------*/
        .container.py-4 {
            margin-top: 4%; 
        }
        .largo-plazo {

            padding: 50px 5px;
        }

        section.largo-plazo i {
            font-size: 40px;
        
        }

        .bg_group_inviert {
            background-color: #edf2f7;
            border: 1px solid #ffffff;
        }

        .bg_group_inviert i {
            font-size: 39px;
        }

        table {
            background-color: #dee2e6;
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            text-align: center;
            border: none;
            border-right: 1px solid #ffffff;
            border-bottom: 1px solid #ffffff;
        }

        .bg_group_inviert h6 {
            padding: 10px;
            font-weight: bold;
            text-align: center;
            font-size: 14px; /* Ajusta este valor según tus necesidades */
        }
        .bg_group_inviert p {
            font-size: 14px;
            font-weight: normal;
            margin-top: 0;
            margin-bottom: 0;
            text-align: left;    
            font-family: Arial;   
        }
        td:first-child {
            border-left: none;
        }

        td:last-child {
            border-right: none;
        }

        tr:first-child td {
            border-top: none;
        }

        tr:last-child td {
            border-bottom: none;
        }

        /* INVIETE IMG */
        .row {
            color: #000000;
        }

        .thumbnail {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            margin-bottom: 30px;
        }

        .thumbnail img {
            max-width: 100%;
        }
        .thumbnail img:hover {
            transform: translateY(-10px);
        }

        .caption {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 10px;
            height: 100%;
        }

        .caption h5 {
            font-weight: bold;
            text-align: center;
            font-size: 15px;
        }

        .caption p {
            font-size: 14px;
            font-weight: normal;
            margin-top:0%;
        }

        .btn-danger {
            background-color: var(--color-naranja);
            color: #fff;
            border-color: #d43f3a;
            transition: background-color 0.3s ease-in-out;
        }

        .btn-danger:hover {
            background-color: #c9302c;
        }

        .btn-mini {
            padding: 5px 10px;
            font-size: 12px;
            width: 84px;  
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


        /* modal */

        .modal-content {
            background-color: #f8f8f8;
            border: 2px solid #ffffff;
            box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
            }

            .modal-body {
            padding: 20px;
            background: #c1baba
            }

            .modal-header .close {
            padding: 1rem 4rem;
            margin: -1rem -1rem -1rem auto;
            }

            .modal-header {
            background-color: var(--color-naranja);
            color: #fff;
            border-bottom: none;
            padding: 15px;
            position: relative;
            }

            .close {
            color: #fff;
            font-size: 24px;
            font-weight: bold;
            opacity: 0.8;
            transition: opacity 0.3s;
            position: absolute;
            top: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
            background-color: #ff6f00;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            }

            .close:hover {
            opacity: 1;
            }

            .modal-title {
            font-size: 20px;
            margin-bottom: 10px;
            color: #fff;
            text-align: center;
            font-family: Arial, sans-serif;
            }

            @keyframes closeButtonAnimation {
            0% {
                transform: rotate(0deg);
            }
            50% {
                transform: rotate(180deg);
            }
            100% {
                transform: rotate(360deg);
            }
            }





    </style>

    <section>
        <div class="container py-4">
            <div class="row m-0">
                <div class="col-xl-6 col-lg-6 col-12 bg_group_inviert">
                    <div class="row m-0 py-3">
                        <div class="col-12 text-center">
                            <i class="fa-solid fa-coins" style="color:#db1111; widht: 20%;"></i><br>
                        </div>
                        <h6 class="col-12 text-center"> ALTA RENTABILIDAD A LARGO PLAZO</h6><br>
                        <p>Los terrenos son una inversión rentable que incrementa su valor constantemente.
                             Son un recurso limitado con alta demanda y bajos costos de mantenimiento. Su valor
                              potencial puede ser considerable, proporcionando ganancias significativas a largo plazo.</p>

                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 bg_group_inviert">
                    <div class="row m-0 py-3">
                        <div class="col-12 text-center">
                            <i class="fa-solid fa-check-to-slot" style="color: #d9c907;"></i> <br>
                        </div>
                        <h6 class="col-12 text-center"> ALTA RENTABILIDAD A LARGO PLAZO</h6><br>
                        <p>Las renovaciones pueden ser una forma efectiva de mejorar el valor de una propiedad y aumentar las
                            posibilidades de venta, proporcionando consejos prácticos para llevar a cabo una renovación exitosa.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 bg_group_inviert">
                    <div class="row m-0 py-3">
                        <div class="col-12 text-center">
                            <i class="fa-solid fa-piggy-bank" style="color: #ffa602;"></i>    
                        </div>
                        <h6 class="col-12 text-center"> AHORRO SEGURO</h6><br>
                        <p>Los Los terrenos tienden a ser el mejor camino para ahorrar y a la vez eres dueño de una propiedad, a
                            diferencia de tener todo tu dinero guardado sin uso sin rentabilizar tu ahorro.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-12 bg_group_inviert">
                    <div class="row m-0 py-3">
                        <div class="col-12 text-center">
                            <i class="fa-solid fa-people-roof" style="color: #db1111; "></i>  
                        </div>
                        <h6 class="col-12 text-center">UNA INVERSIÓN PARA TU FAMILIA</h6><br>
                        <p>Es una inversión para ti y para las personas que más quieres. Los terrenos son heredables a tus
                            futuras generaciones</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img src="{{ asset('storage/img/inversion.jpg') }}" alt="Imagen 1"></a>
                        <div class="caption">
                            <h5>INVERSION </h5>
                            <p class="seguros"> las formas más rentables y seguras de invertir tu dinero</p>
                            <button id="btnModal1" class="btn btn-mini btn-danger" data-toggle="modal" data-target="#miModal1">&raquo; Leer Mas</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                        <a href="#"><img src="{{ asset('storage/img/unavida.png') }}" alt="Imagen 2"></a>
                        <div class="caption">
                            <h5>UN HOGAR Y UNA VIDA</h5>
                            <p class="hogar">espacios únicos y personalizados que reflejen la personalidad</p>
                            <button id="btnModal2" class="btn btn-mini btn-danger" data-toggle="modal" data-target="#miModal2">&raquo; Leer Mas</button>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="thumbnail">
                            <a href="#"><img src="{{ asset('storage/img/plazo.jpg') }}" alt="imagen 2"></a>
                        <div class="caption">
                            <h5>CONSTRUIR RIQUEZA A LARGO PLAZO</h5>
                            <p class="ingreso">genera ingresos a través de la inversión en propiedades</p>
                            <button id="btnModal3" class="btn btn-mini btn-danger" data-toggle="modal" data-target="#miModal3">&raquo; Leer Mas</button>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <a href="#"><img src="{{ asset('storage/img/hogar.jpg') }}" alt="Imagen 4"></a>
                        <div class="caption">
                            <h5>ENCUENTRA TU PROXIMO HOGAR</h5>
                            <p class="vida">Un hogar para toda la vida</p>
                            <button id="btnModal4" class="btn btn-mini btn-danger" data-toggle="modal" data-target="#miModal4">&raquo; Leer Mas</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    
    </section>

    <!-- Modal 1 -->
    <div class="modal fade" id="miModal1" tabindex="-1" role="dialog" aria-labelledby="miModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="miModalLabel1">INVERSION</h4>
                </div>
                <div class="modal-body">
                                        
                    1.- Valoración y análisis: Evaluar el lote en términos de ubicación, tamaño, características topográficas, acceso a servicios públicos y regulaciones legales. <br>

                    2.- Potencial de valorización: Analizar la infraestructura cercana, el crecimiento demográfico, la expansión urbana y los planes de desarrollo regional para determinar el potencial de aumento de valor del terreno. <br>

                    3.- Planificación y gestión: Establecer una estrategia de desarrollo a largo plazo, considerando opciones como la construcción de viviendas o edificios comerciales, y gestionar aspectos como permisos legales, costos de construcción y comercialización. <br>

                    4.- Riesgos y contingencias: Evaluar los riesgos asociados, como la volatilidad del mercado inmobiliario, cambios normativos y factores externos que podrían afectar la valorización del terreno. <br>

                    5.- Asesoramiento profesional: Contar con el apoyo de expertos del sector inmobiliario para obtener orientación sobre el mercado, asesoramiento legal, análisis de viabilidad y una gestión eficiente de la compra. <br>        
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="miModal2" tabindex="-1" role="dialog" aria-labelledby="miModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="miModalLabel2">UN HOGAR Y UNA VIDA</h4>
                </div>
                <div class="modal-body">
                    1.- "UN HOGAR Y UNA VIDA" ofrece una experiencia única y personalizada en la creación de espacios residenciales. Nuestro enfoque se basa en:<br>

                    2.- Personalización: Diseñamos hogares que reflejan la personalidad y estilo de vida de cada individuo, creando ambientes únicos y personalizados.<br>

                    3.- Calidad y atención al detalle: Prestamos atención meticulosa a cada detalle, desde la selección de materiales de alta calidad hasta la distribución de espacios y elementos decorativos, para garantizar un resultado excepcional.<br>

                    4.- Ambientes acogedores y funcionales: Buscamos crear hogares que sean tanto acogedores como funcionales, brindando una experiencia de vida satisfactoria para nuestros clientes.<br>

                    5.- Superando expectativas: Nos esforzamos por superar las expectativas de nuestros clientes, ofreciendo diseños innovadores, soluciones creativas y resultados que realmente marquen la diferencia.<br>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="miModal3" tabindex="-1" role="dialog" aria-labelledby="miModalLabel3" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="miModalLabel2">CONSTRUIR RIQUEZA A LARGO PLAZO</h4>
                </div>
                <div class="modal-body">
                 Se basa en los siguientes aspectos clave:

                 2.- Inversión en propiedades: Implica realizar inversiones estratégicas en propiedades inmobiliarias como una forma de aumentar el patrimonio y generar ingresos a largo plazo. <br>

                 3.- Potencial de valorización: Se busca seleccionar propiedades con potencial de valorización, considerando factores como la ubicación, el desarrollo del área, la demanda del mercado y las tendencias económicas.<br>

                 4.- Gestión adecuada de activos: Se requiere una gestión efectiva de las propiedades, incluyendo el mantenimiento, la administración de alquileres, la atención a los inquilinos y la optimización de los rendimientos.<br>

                 5.- Generación de ingresos pasivos: Se busca generar ingresos a través del alquiler de las propiedades, aprovechando la demanda del mercado y estableciendo contratos de arrendamiento rentables.<br>

                 6.- Reinvestir los beneficios: Los ingresos generados por el alquiler se reinvierten en la adquisición de nuevas propiedades o en la mejora de las existentes, aumentando así el patrimonio y los flujos de efectivo a largo plazo.<br>


                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="miModal4" tabindex="-1" role="dialog" aria-labelledby="miModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="miModalLabel2">CONSTRUIR RIQUEZA A LARGO PLAZO</h4>
                </div>
                <div class="modal-body">
                    1.- Búsqueda de hogar: Este tema se centra en ayudar a las personas a encontrar su próximo hogar, proporcionando servicios y recursos para facilitar el proceso de búsqueda y elección de vivienda.<br>
                    2.- Hogar para toda la vida: Se destaca la importancia de encontrar un hogar que se adapte a las necesidades a largo plazo, brindando comodidad y satisfacción a lo largo de la vida.<br>
|                   3.- Amplia oferta de propiedades: Se ofrece una variedad de opciones de vivienda para que los individuos encuentren la casa ideal que se ajuste a sus preferencias y requerimientos, considerando factores como ubicación, tamaño, características y presupuesto.<br>
                    4.- Asesoramiento y orientación: Se brinda asesoramiento profesional para ayudar a las personas en la búsqueda de su hogar, proporcionando información sobre el mercado inmobiliario, financiamiento, trámites legales y cualquier otro aspecto relevante.<br>
                </div>
            </div>
        </div>
    </div>


  


    
    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="inv.js"></script>
  <script src="https://kit.fontawesome.com/a2af082a84.js" crossorigin="anonymous"></script>

@endsection

