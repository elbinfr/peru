<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PeruApi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('plugins/highlight/styles/ocean.css') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="dosis">
    <main role="main">
        <section class="jumbotron text-center fondo-blanco margin-bottom-0 fondo-mapa">
            <div class="container">
                <h1 class="jumbotron-heading pacifico main-title c-azul">{ Peru Api }</h1>
                <p class="lead text-muted ">
                    Bienvenido a PeruApi, una API gratuita que puedes consultar cuando necesites datos de Perú para usarlos en el proyecto que desees.
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light fondo-blanco padding-top-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center pacifico c-azul margin-bottom-20">Recursos disponibles</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header fondo-ocean">
                                <pre class="sin-margen-b"><code class="json" id="ubigeoTag"></code></pre>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title subtitulo">Ubigeos</h5>
                                <p class="card-text">
                                    <strong>Descripción: </strong>Códigos de ubicación geográfica tipificados según SUNAT.
                                    <br>
                                    <strong>Método HTTP: </strong>GET
                                    <br>
                                    <strong>Url: </strong><a href="{{ url('api/ubigeos') }}">/api/ubigeos</a>
                                    <br>
                                    <strong>Filtros: </strong>puede filtrar por los atributos del objeto como 
                                    codigo, tipo (departamento, provincia, distrito), codigo_padre, nombre, capital.
                                </p>
                                <div class="d-flex justify-content-between align-items-center float-right">
                                    <div class="btn-group">
                                        <a href="{{ url('api/ubigeos') }}" class="btn btn-sm btn btn-outline-primary">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header fondo-ocean">
                                <pre class="sin-margen-b"><code class="json" id="tipoCambioTag"></code></pre>
                                
                            </div>
                            <div class="card-body">
                                <h5 class="card-title subtitulo">Tipo de cambio</h5>
                                <p class="card-text">
                                    <strong>Descripción: </strong>Tipo de cambio actual según SBS.
                                    <br>
                                    <strong>Método HTTP: </strong>GET
                                    <br>
                                    <strong>Url: </strong><a href="{{ url('api/tipo-cambio') }}">/api/tipo-cambio</a>
                                </p>
                                <div class="d-flex justify-content-between align-items-center float-right">
                                    <div class="btn-group">
                                        <a href="{{ url('api/tipo-cambio') }}" class="btn btn-sm btn btn-outline-primary">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header fondo-ocean">
                                <pre class="sin-margen-b"><code class="json" id="zonaTag"></code></pre>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title subtitulo">Zonas</h5>
                                <p class="card-text">
                                    <strong>Descripción: </strong>Clasificación de zona en la que se ubica el domicilio fiscal del contribuyente, según SUNAT.
                                    <br>
                                    <strong>Método HTTP: </strong>GET
                                    <br>
                                    <strong>Url: </strong><a href="{{ url('api/zonas') }}">/api/zonas</a>
                                    <br>
                                    <strong>Filtros: </strong>puede filtrar por los atributos del objeto como 
                                    codigo, denominacion.
                                </p>
                                <div class="d-flex justify-content-between align-items-center float-right">
                                    <div class="btn-group">
                                        <a href="{{ url('api/zonas') }}" class="btn btn-sm btn btn-outline-primary">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header fondo-ocean">
                                <pre class="sin-margen-b"><code class="json" id="viaTag"></code></pre>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title subtitulo">Vias</h5>
                                <p class="card-text">
                                    <strong>Descripción: </strong>Clasificación de vía en la que se ubica el domicilio fiscal del contribuyente, según SUNAT.
                                    <br>
                                    <strong>Método HTTP: </strong>GET
                                    <br>
                                    <strong>Url: </strong><a href="{{ url('api/vias') }}">/api/vias</a>
                                    <br>
                                    <strong>Filtros: </strong>puede filtrar por los atributos del objeto como 
                                    codigo, denominacion.
                                </p>
                                <div class="d-flex justify-content-between align-items-center float-right">
                                    <div class="btn-group ">
                                        <a href="{{ url('api/vias') }}" class="btn btn-sm btn btn-outline-primary">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="footer mt-auto py-3">
        <div class="footer-container">
            &copy; 2019. Creado por <a class="text-muted" href="http://nubedeideas.pe/" target="_blank">Nube de ideas</a>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src={{ asset('plugins/highlight/highlight.pack.js') }}></script>
    <script>hljs.initHighlightingOnLoad();</script>
    <script>
        (function(){
            let ubigeoTag = '#ubigeoTag'
            let tipoCambioTag = '#tipoCambioTag'
            let zonaTag = '#zonaTag'
            let viaTag = '#viaTag'

            let ubigeoData = {!! $ubigeo !!}
            let tipoCambioData = {!! $moneda !!}
            let zonaData = {!! $zona !!}
            let viaData = {!! $via !!}

            const load = () => {
                initElements();
            }

            const initElements = () =>{
                $(ubigeoTag).html(formatData(ubigeoData))
                $(tipoCambioTag).html(formatData(tipoCambioData))
                $(zonaTag).html(formatData(zonaData))
                $(viaTag).html(formatData(viaData))
            }

            const formatData = (data) => {
                return JSON.stringify(data, null, 4)
            }

            load();
        })()
    </script>
</body>
</html>