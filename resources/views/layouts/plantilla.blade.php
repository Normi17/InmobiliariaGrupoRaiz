<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}">


</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital  ,wght@0,200;0,300;0,400;0,500;0,700;1,600&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

    :root {
        --color-naranja: rgba(230, 0, 0, 1);
        --color-box: rgb(255, 0, 0);
        --color-yellow: rgb(255, 230, 0);
        --color-amarillo: rgba(209, 192, 22);
        --color-negro: rgb(34, 33, 29);
        --color-blanco: rgb(255, 255, 255);
        --main-color: #f2f2f2;
        --text-color: #333;
        --color-primario: 0px 0px 10px #333;
        --color-verde: rgb(117, 218, 155);
        --main-color: #ff6600;
        --box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.5);
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: sans-serif;
    }

    #navbar {
        position: fixed;
        top: 0;
        width: 100%;
        height: 70px;
        background-color: var(--color-naranja);
        z-index: 5;
        padding: 0px 9px;
        transition: 0.5s;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .icon {
        background: #444;
        font-size: 1.5rem;
    }

    ul {
        display: flex;
        list-style: none;
        margin-bottom: 0;
    }

    ul li a {
        position: relative;
        color: var(--color-blanco);
        padding: 10px;
        font-size: 1.1rem;
        text-decoration: none;
        font-weight: bold;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        margin-right: 10px;
    }
    
    ul li a:hover {
        color: #fff; 
    }

    .icon ul li a {
        color: #fff;
    }

    ul li a span {
        transition: 0.5s;
        transition-delay: calc(0.05 * var(--i));
    }

    ul li a span:nth-child(2) {
        position: absolute;
        transform: translateY(35px);
        font-size: 2em;
    }

    ul li:hover a span:nth-child(2) {
        color: var(--color-negro);
    }

    .icon ul li a span:nth-child(2) {
        transform: translateY(2px);
    }

    .icon ul li a span:nth-child(1) {
        transform: translateY(-30px);
    }

    .logo img {
        width: 88px;
        height: 83px;
        transition: transform 0.5s ease, box-shadow 0.5s ease;
        margin-left: 36px;
    }

    .logo img:hover {
        transform: translate(0);
    }

    .icon .brand span:nth-child(1) {
        transform: translateY(-5px);
        color: #fff;
    }



    .ul__nav {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700;
        list-style: none;
    }

    .ul__nav a {
        position: relative;
        padding: 0.5rem 0.5rem;
        text-decoration: none;
        transition: all 0.35s ease;
        font-size: 11px;
        margin-right: 20px;
    }

    .ul__nav a span:nth-child(1)::before,
    .ul__nav a span:nth-child(1)::after {
        position: absolute;
        height: 15px;
        width: 15px;
        content: '';
        transition: all 0.35s ease;
        opacity: 0;
    }

    .ul__nav a span:nth-child(1)::before {
        right: 0;
        top: 35%;
        border-right: 3px solid #ffffff;
        border-top: 3px solid #ffffff;
        transform: translate(100%, -50%) rotate(45deg);
    }

    .ul__nav a span:nth-child(1)::after {
        left: 0;
        top: 70%;
        border-left: 3px solid #ffffff;
        border-bottom: 3px solid #ffffff;
        transform: translate(-100%, -50%) rotate(45deg);
    }

    .ul__nav a:hover span:nth-child(1)::before,
    .ul__nav a:hover span:nth-child(1)::after {
        transform: translate(0%, -50%);
        opacity: 1;
    }

    #menu_body .icon {
        border: none; 
        border-radius: 0; 
    }

    #menu_body a::before,
    #menu_body a::after {
        border: none;
    }

  
  /*----------------FOOTER----------------------------------*/

    .footer {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
        background: rgba(50, 50, 50, 1);
        color: #fff;
        margin: 0 auto;
    }

    .footer-box h3 {
        font-family: sans-serif;
        font-weight: bold;
        text-align: center;
        margin-top: 25px;
    }

    .footer-box p {
        font-size: 0.93rem;
        margin-bottom: 10px;
        margin-top: 26px;
    }
    .footer-box p:hover {
        color: #ffdb58; 

    }

    .libro-reclam {
        width: 149px;
        margin-top: 20px;
        margin-left: 35%;
    }


    /*----REDES SOCIALES-----*/
    .cons {
        display: flex;
        gap: 20px;
        justify-content: center;
        align-items: center;
        margin-left: 20px;
        margin-top: 50px;
    }

    .internet {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        outline: 2px solid #fff;
        transition: all 0.25s;
        margin-bottom: 50px;
        background-color: transparent;
        color: #fff;
    }

    .internet:hover {
        outline-offset: 4px;
        color: #f8f8f8;
        background-color: inherit;
    }

    .internet:hover i {
        animation: shake 0.25s;
    }

    .internet i {
        margin: 0;
    }

    .internet-facebook {
        background-color: #1877f2;
    }

    .internet-facebook:hover {
        background: #1877f2;
    }

    .internet-twitter {
        background: #1da1f2;
    }

    .internet-twitter:hover {
        background: #1da1f2;
    }

    .internet-instagram {
        background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
    }

    .internet-tiktok {
        background: #010101;
        background: linear-gradient(45deg, #010101 30%, #0a0a0a 80%);
    }

    .internet-tiktok:hover {
        background: #080808;
    }

    .internet-tiktok i {
        font-size: 20px;
    }

    .contacto {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }

    .contacto span {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .contacto i {
        font-size: 20px;
        margin-right: 1rem;
    }

    p {
        text-align: center;
    }

    .contacto .ema a {
        color: #ffffff;
        text-decoration: none;
    }

 
    .contacto span:hover,
    .contacto .ema a:hover {
        color: #ffdb58; 
    }

    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 9999;

    }

    .whatsapp-float a {
        display: block;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #25d366;
        color: #fff;
        text-align: center;
        font-size: 24px;
        line-height: 60px;
        transition: all 0.3s ease-in-out;

        box-shadow: 0.5em 0.5em 1em var(--color-verde),
            -0.5em -0.5em 1em var(--color-verde),
            inset 0 0 0 transparent,
            inset 0 0 0 transparent,
            0.5em -0.5em 1em var(--color-verde),
            -0.5em 0.5em 1em var(--color-verde);
    }


    .whatsapp-float a:hover {
        transform: scale(1.1);
    }
   
    @media screen and (max-width: 390px) {
        #navbar {
            padding: 5px 2%;
            box-sizing: border-box;
        }

        .logo img {
            width: 40px; 
            height: auto;
            margin: 0 auto;
        }

        .ul__nav {
            flex-direction: row;
            align-items: center;
            letter-spacing: 1px;
            flex-wrap: nowrap; 
        }

        .ul__nav a {
            font-size: 5px; 
            padding: 1px;
            margin: 1px; 
        }
        .icon {
            font-size: 2vw; 
        }

        .footer {
            grid-template-columns: 1fr;
            justify-items: center;
        }

        .footer-box {
            margin-top: 20px;
            text-align: center;
        }

        .libro-reclam {
            margin: 20px auto;
        }

        .cons {
            margin-left: 0;
            margin-top: 20px;
        }

        .phono,
        .ema {
            margin-right: 0;
        }
    }

    /*------------------------------- estilos de chatbot --------------------------------------------*/
    .chat-bar-collapsible {
        position: fixed;
        bottom: 0;
        left: -15;
        z-index: 9999;
        padding:20px;
    }


    .collapsible {
        background-image:url('../storage/app/public/img/bot.png') ;    
        animation: gradient-animation 6s ease infinite;
        transition: 0.3s all ease-in-out;  
        color: white;
        padding: 14px;
        text-align: left;
        font-size: 15px;
        border: 3px solid rgb(0, 0, 0);
        border-radius: 50%;
        display: block;
        width: 56px;
        height: 60px;
        line-height: 60px;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .botraiz {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.2s ease-out;
        background-color: #f1f1f1;
        border-radius: 7px;
        
    }

    .full-chat-block {
        width: 350px;
        background: white;
        text-align: center;
        overflow: auto;
        scrollbar-width: none;
        height: max-content;
        transition: max-height 0.2s ease-out;
        background: linear-gradient(334deg, #19191a, #1e1c1c, #ff0000);
        border-radius: 5px; 
        box-shadow: 0 2px 4px rgba(34, 33, 33, 0.288); 
        background: linear-gradient(334deg, #19191a, #1e1c1c, #ff0000);
    }

    .outer-container {
        min-height: 500px;
        bottom: 0%;
        position: relative;
    
    }
    .chat-container {
        max-height: 500px;
        width: 100%;
        position: absolute;
        bottom: 0;
        left: 0;
        scroll-behavior: smooth;
        hyphens: auto;
    }
    #chat-timestamp {
        color: white;
    }
    .chat-container::-webkit-scrollbar {
        display: none;
    }

    .chat-bar-input-block {
        display: flex;
        float: left;
        box-sizing: border-box;
        justify-content: space-between;
        width: 100%;
        align-items: center;
        background-color: rgb(235, 235, 235);
        border-radius: 10px 10px 0px 0px;
        padding: 10px 0px 10px 10px;
    }

    .chat-bar-icons {
        display: flex;
        justify-content: space-evenly;
        box-sizing: border-box;
        width: 25%;
        float: right;
        font-size: 20px;
    }

    #chat-icon:hover {
        opacity: .7;
    }

    /* Chat bubbles */

    #userInput {
        width: 75%;
    }

    .input-box {
        float: left;
        border: none;
        box-sizing: border-box;
        width: 100%;
        border-radius: 10px;
        padding: 10px;
        font-size: 16px;
        color: #000;
        background-color: white;
        outline: none
    }

    .userText {
        color: white;
        font-family: Helvetica;
        font-size: 16px;
        font-weight: normal;
        text-align: right;
        clear: both;
    }

    .userText span {
        line-height: 1.5em;
        display: inline-block;
        background: #ff3737;
        padding: 10px;
        border-radius: 8px;
        border-bottom-right-radius: 2px;
        max-width: 80%;
        margin-right: 10px;
        animation: floatup .5s forwards
    }

    .botText {
        color: #000;
        font-family: Helvetica;
        font-weight: normal;
        font-size: 16px;
        text-align: left;
    }

    .botText span {
        line-height: 1.5em;
        display: inline-block;
        background: #e0e0e0;
        padding: 10px;
        border-radius: 8px;
        border-bottom-left-radius: 2px;
        max-width: 80%;
        margin-left: 10px;
        animation: floatup .5s forwards
    }

    @keyframes floatup {
        from {
            transform: translateY(14px);
            opacity: .0;
        }
        to {
            transform: translateY(0px);
            opacity: 1;
        }
    }
    /*responsice*/
    @media screen and (max-width:600px) {
        .full-chat-block {
            max-width: 90%;
            border-radius: 0px;
        }
        .chat-bar-collapsible {
            position: fixed;
            bottom: 0;
            left: 5px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }
        
        .collapsible {
            background: linear-gradient(334deg, #525353, #d18476, #f70c0c);
            background-size: 180% 180%;
            animation: gradient-animation 6s ease infinite;
            transition: 0.3s all ease-in-out;  
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 103px;
            text-align: left;
            outline: none;
            font-size: 18px;
            border-radius: 10px 10px 0px 0px;
            border: 3px solid white;
            border-radius: 50%;
        }
    }
    @media screen and (max-width:600px) {
        .chat-bar-collapsible {
            position: fixed;
            bottom: 0;
            left: 5px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            width: 100%;
            border-radius: 0px;
        }
    
        .collapsible {
            background-image:url('{{ asset('storage/img/bot.png') }}') ;    
            background-size: 180% 180%;
            animation: gradient-animation 6s ease infinite;
            transition: 0.3s all ease-in-out;  
            color: white;
            cursor: pointer;
            padding: 14px;
            text-align: left;
            outline: none;
            font-size: 15px;
            border-radius: 10px 10px 0px 0px;
            border: 3px solid rgb(0, 0, 0);
            border-radius: 50%;
            display: block;
            width: 56px;
            height: 60px;
            border-radius: 50%;
            font-size: 24px;
            line-height: 60px;
            background-repeat: no-repeat;
            background-size: cover;
        }
    }


</style>

<header>
    
    <nav id="navbar">
        <a href="{{ route('home') }}" class="logo">
            <img  src="{{ asset('storage/img/logoblanco.png') }}" alt="Descripción de la imagen">
        </a>
        <ul class="ul__nav">
            <li style="--i:0;">
                <a href="{{ route('home') }}">
                    <span>Inicio</span>
                    <span><ion-icon name="home-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:1;">
                <a href="{{ route('proyecto') }}">
                    <span>Proyectos</span>
                    <span><ion-icon name="business-outline"></ion-icon></span>
                </a>
            </li>
            <li style="--i:2;">
                <a href="{{ route('nosotros') }}">
                    <span>Nosotros</span>
                    <span><ion-icon name="people-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:3;">
                <a href="{{ route('invierte') }}">
                    <span>Invierte </span>
                    <span><ion-icon name="cash-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:4;">
                <a href="{{ route('contacto') }}">
                    <span>Contacto</span>
                    <span><ion-icon name="call-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:5;">
                <a href="{{ route('blog') }}">
                    <span>Blog</span>
                    <span><ion-icon name="mail-outline" ></ion-icon></span>
                </a>
            </li>                
        </ul>
    </nav>
</header>
    <nav class="header_phone">
       
        <ul class="nav flex-column d-none" id="menu_body">
            <li style="--i:0;">
                <a href="{{ route('home') }}">
                    <span>Inicio</span>
                    <span><ion-icon name="home-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:1;">
                <a href="{{ route('proyecto') }}">
                    <span>Proyectos</span>
                    <span><ion-icon name="business-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:2;">
                <a href="{{ route('nosotros') }}">
                    <span>Nosotros</span>
                    <span><ion-icon name="people-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:3;">
                <a href="{{ route('invierte') }}">
                    <span>Invierte </span>
                    <span><ion-icon name="cash-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:4;">
                <a href="{{ route('contacto') }}">
                    <span>Contacto</span>
                    <span><ion-icon name="call-outline" ></ion-icon></span>
                </a>
            </li>
            <li style="--i:5;">
                <a href="{{ route('blog') }}">
                    <span>Blog</span>
                    <span><ion-icon name="mail-outline" ></ion-icon></span>
                </a>
            </li>         
        </ul>
    </nav>

<body >
    <div class="container-fluid  p-0">
        <div class="row m-0">
            @yield('content')
        </div>
    </div>
</body>

<footer>
    <section class="footer" id="footer">

        <div class="footer-box">
            <h3>Contactenos</h3>
            <div class="contacto">
                <span><i class="fa-solid fa-location-dot fa-beat" style="color: #ffffff;"></i></i>Jr. 2 de Mayo N° 1040</span><br>
                <span class="phono" ><i class="fas fa-phone-alt" style="color: #ffffff;"></i>987 863 086 | 968 683 697</span><br>               
                <span class="ema">
                    <i class="fa-solid fa-envelope" style="color: #ffffff;"></i>
                    <a href="mailto:gruporaizinmobiliaria1@gmail.com">gruporaizinmobiliaria1@gmail.com</a>
                </span>
            </div>
        </div>

        <div class="footer-box">
            <h3>Redes Sociales</h3>
            <p>Síguenos</p>

            <div class="cons">
                <a href="https://www.facebook.com/profile.php?id=100063690744557&mibextid=ZbWKwL" target="_blank" class="con">
                    <div class="internet internet-facebook">
                        <i class="fab fa-facebook"></i>
                    </div>
                </a>
                <a href="https://www.twitter.com/" target="_blank" class="con">
                    <div class="internet internet-twitter">
                        <i class="fab fa-twitter"></i>
                    </div>
                </a>
                <a href="https://www.instagram.com/" target="_blank" class="con">
                    <div class="internet internet-instagram">
                        <i class="fab fa-instagram"></i>
                    </div>
                </a>
                <a href="https://www.tiktok.com/" target="_blank" class="con">
                    <div class="internet internet-tiktok">
                        <i class="fab fa-tiktok"></i>
                    </div>
                </a>
            </div>
        </div>

        <div class="footer-box">
            <h3>Libro de Reclamaciones</h3>
            <p>Reclama aquí</p>
            <img class="libro-reclam" src="{{ asset('storage/img/libro.png') }}" alt="Descripción de la imagen">
     

        </div>

    </section>

    <div class="whatsapp-float">
        <a href="https://api.whatsapp.com/send?phone=968683697&text=hola" target="_blank">
            <i class="fab fa-whatsapp"></i>
        </a>
    </div>
    <div class="chat-bar-collapsible">
        <button id="chat-button" type="button" class="collapsible">
            <!-- <i style='font-size:24px' class='fas'>&#xf544;</i>
            <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i> -->
        </button>

        <div class="botraiz">
            <div class="full-chat-block">
                <!-- Message Container -->
                <div class="outer-container">
                    <div class="chat-container">
                        <!-- Messages -->
                        <div id="chatbox">
                            <h5 id="chat-timestamp"></h5>
                            <p id="botStarterMessage" class="botText"><span>Cargando</span></p>
                        </div>

                        <!-- User input box -->
                        <div class="chat-bar-input-block">
                            <div id="userInput">
                                <input id="textInput" class="input-box" type="text" name="msg"
                                    placeholder="Inicia con un 'Hola'.... ">
                                <p></p>
                            </div>

                            <div class="chat-bar-icons">
                                <i id="chat-icon" style="color: #000000;" class="fa fa-fw fa-send"
                                    onclick="sendButton()"></i>
                            </div>
                        </div>

                        <div id="chat-bar-bottom">
                            <p></p>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

</footer>



<script>
    let lastScrolltop = 0;
    navbar = document.getElementById("navbar");
    window.addEventListener("scroll",function(){
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if(scrollTop > lastScrolltop){
            navbar.classList.add("icon");
        }else{
            navbar.classList.remove('icon');
        }
        lastScrolltop = scrollTop; 
    })
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/a2af082a84.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{ asset('js/plantilla.js') }}"></script>
<script src="{{ asset('js/chat.js') }}"></script>
<script src="{{ asset('js/responses.js') }}"></script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



@yield('script')
</html>