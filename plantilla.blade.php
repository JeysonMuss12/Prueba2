
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0 maximum-scale=1.0" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   @yield('js')
    <title>ABONET</title>
        
</head>
<!--Contenido de la pagina web-->
<body>
    <section class="home">
        <div class="in-flex">
            <header class="fondo-encabezado">
                <div class="contenedor-encabezado">
                    <div class="logo-opt">
                        <a  href="{{route('home.index')}}"  >
                        <img src="{{asset('img/logoabonet.png')}}" alt="Logo de La empresa">
                    </a>
                    </div>
                    <div class="borde-contacto">
                        <img src="{{asset('img/icon-tel.png')}}" alt="logo de atencion nacional">
                        <h1 class="contacto">Linea de atencion nacional (607) 6785243</h1>
                        
                    </div>
                    
                </div>
            </header>
            <div class="Contenido-especifico">
                
                    @yield('ContenidoEncabezado')
                
            </div>
            <footer>
                <div class="cont-inf-general">
                    <div class="info-inf">
                        <div class="info-contactenos">
                            <p>
                                Linea de atencion nacional (607) 6785243
                                <br>
                                <samp>Comunicate con nuestros asesores para adquirir nuestros servicios</samp>  
                            </p>
                        </div>
                        <div class="cont-redes">
                            
                            <nav class="redes">
                                <h4>Siguenos en:</h4>
                                <!--Logo de Instagram y redireccion a la pagina de instagram-->
                                <a href="https://instagram.com/abonet75?utm_medium=copy_link"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-brand-instagram" width="40" height="40"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="#ffbf00" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="4" y="4" width="16" height="16" rx="4" />
                                    <circle cx="12" cy="12" r="3" />
                                    <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                                </svg></a>
                                <!--Logo de Facebook y redireccion a la pagina de facebook-->
                                <a href="https://www.facebook.com/profile.php?id=100074817460364"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="40" height="40" viewBox="0 0 24 24" stroke-width="2" stroke="#00abfb" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                                </svg></a>
                                <!--Logo de Youtube y redireccion a la pagina en youtube -->
                                
                                <a href="https://youtube.com/channel/UC0tCLKZnKrM91A8Rt6QqkNw"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-brand-youtube" width="40" height="40"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="#ff2825" fill="none" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <rect x="3" y="5" width="18" height="14" rx="4" />
                                    <path d="M10 9l5 3l-5 3z" />
                                </svg></a>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </footer>
            <div>
                
            </div>
            <div class="info-inferior ">
                
                <div class="ind-1">
                    <h4>Todos los derechos reservados<br> por ABONET S.A.S</h4>
                </div>
                
                
                <div class="ind-2">
                    
                    <h4>Informacion Legal</h4>
                    <a href="{{asset('document/Politicas base de Datos ABONET SAS.pdf')}}">Politica de proteccion de datos</a>
                    <br>
                    <a href="{{asset('document/Proteccion-Usuario.pdf')}}">Proteccion al usuario</a>
                    <br>
                    <a href="{{asset('document/ABONETportafolio.pdf')}}">Portafolio de servicios</a>
                    
                </div>
                
                
                <div class="ind-3">
                    
                    <img src="{{asset('img/Abonetminilogo.png')}}" alt="Logo de La empresa mini">
                    <h5>ABONET S.A.S</h5>
                    <h5>Una empresa de internet</h5>
                    <h5>por fibra optica</h5>
                </div>
                
            </div>
        </div>
    </section>
    
</body>

</html>