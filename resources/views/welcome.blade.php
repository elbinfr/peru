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
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading pacifico main-title c-azul">Peru Api</h1>
                <p class="lead text-muted ">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center pacifico c-azul">Recursos disponibles</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header fondo-ocean">
                                <pre><code class="json">
{
    "codigo": "010101",
    "tipo": "distrito",
    "codigo_padre": "010100",
    "nombre": "Chachapoyas",
    "capital": "Chachapoyas"
}</code></pre>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title subtitulo">Ubigeos</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus excepturi ea asperiores, dicta necessitatibus unde reiciendis culpa totam eum nobis, voluptates veniam animi illum sapiente laudantium ipsam. Earum, iste rem?
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn btn-outline-primary">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header fondo-ocean">
                                <pre><code class="json">
{
    "moneda": "DÓLAR DE N.A.",
    "compra": "3.307",
    "venta": "3.310"
}</code></pre>
                                
                            </div>
                            <div class="card-body">
                                <h5 class="card-title subtitulo">Tipo de cambio</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus excepturi ea asperiores, dicta necessitatibus unde reiciendis culpa totam eum nobis, voluptates veniam animi illum sapiente laudantium ipsam. Earum, iste rem?
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn btn-outline-primary">Ver</a>
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
                                <pre><code class="json">
{
    "codigo": "01",
    "denominacion": "Urbanización"
}</code></pre>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title subtitulo">Zonas</h5>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus excepturi ea asperiores, dicta necessitatibus unde reiciendis culpa totam eum nobis, voluptates veniam animi illum sapiente laudantium ipsam. Earum, iste rem?
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn btn-outline-primary">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-header fondo-ocean">
                                <pre><code class="json">
{
    "codigo": "01",
    "denominacion": "Avenida"
}</code></pre>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title subtitulo">Vias</h5>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Temporibus excepturi ea asperiores, dicta necessitatibus unde reiciendis culpa totam eum nobis, voluptates veniam animi illum sapiente laudantium ipsam. Earum, iste rem?
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="#" class="btn btn-sm btn btn-outline-primary">Ver</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p>Nube de ideas</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src={{ asset('plugins/highlight/highlight.pack.js') }}></script>
    <script>hljs.initHighlightingOnLoad();</script>
</body>
</html>