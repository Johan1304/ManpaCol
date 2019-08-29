<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="images/DB_16х16.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo','Crear Usuario') | ManpaCol</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">


    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">


    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,300,100,700,900' rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset("assets/$theme/css/lib/getmdl-select.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$theme/css/lib/nv.d3.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$theme/css/application.min.css")}}">
    <!-- endinject -->

</head>

<body>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
<!-- HEADER -->
@include ("theme/$theme/header ")

<!-- ASIDE -->

@include ("theme/$theme/asideAdm")




    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-card mdl-shadow--2dp employer-form" action="">
            <div class="mdl-card__title">
                <h2>Crear Usuario</h2>
                <div class="mdl-card__subtitle"></div>
            </div>

            <div class="mdl-card__supporting-text">
            <form action="{{route('guardar')}}" id="form-general" class="form" metodh='POST'>
                @csrf
                <div class="mdl-grid">

                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                        <input class="mdl-textfield__input" value="1" type="text" id="IdTipoUsuario" name="IdTipoUsuario" readonly tabIndex="-1"/>

                        <label class="mdl-textfield__label" for="" requerido>TipoUsuario</label>

                        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="IdTipoUsuario">
                                @foreach ($tiposusuario as $tipo)

                                <li class="mdl-menu__item">{{$tipo->Id}}</li>
                                
                                @endforeach    
                        </ul>

                        <label for="IdTipoUsuario" requerido>
                            <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                        </label>

                    </div>
                </div>

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="Nombres" value="" pattern="[A-Za-z]{1,45}"/>
                        <label class="mdl-textfield__label" for="firstName" requerido>Nombres</label>
                    </div>

                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="Apellidos" value="" pattern="[A-Za-z]{1,45}"/>
                        <label class="mdl-textfield__label" for="secondName" requerido>Apellidos</label>
                    </div>
                </div>

                <div class="mdl-grid">

                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                        <input class="mdl-textfield__input" value="" type="text" id="tdoc" name="IdTipoDocumento" readonly tabIndex="-1"/>

                        <label class="mdl-textfield__label" for="tdoc" requerido>TipoDoc</label>

                        <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="tdoc">
                        @foreach ($documentos as $tipodocumento)
                        <li class="mdl-menu__item">{{$tipodocumento->Id}}</li>
                        
                        @endforeach
                        </ul>
                        <label for="tdoc" requerido>
                            <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                        </label>
                    </div>
                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="ndoc" name="NumDoc" value="" pattern="[0-9]{7,14}"/>
                        <label class="mdl-textfield__label" for="ndoc">Numero de documento</label>
                    </div>
                </div>

                

                <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" id="firstName" name="Email" value=""/>
                    <label class="mdl-textfield__label" for="firstName">Email</label>
                </div>

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="user" name="usuario" value="" pattern="[A-Za-z0-9]{1,45}"/>
                        <label class="mdl-textfield__label" for="user">Usuario</label>
                    </div>

                    <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" id="pass" name="password" value="" pattern="[A-Za-z0-9]{1,45}"/>
                        <label class="mdl-textfield__label" for="pass">Contraseña</label>
                    </div>
                </div>
                
                </div>
                    <div class="form__action">
                            
                       <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red"
                       onclick = "this.form.action = 'index'">
                            Volver
                        </button>

                      <button  type="submit" id="submit_button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue"
                      >Crear</button>
                    
                    </div>
            </form>
            
        </div>
    </div>
</main>
</div>


<script src="{{asset("assets/$theme/js/d3.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/getmdl-select.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/material.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/nv.d3.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/layout/layout.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/scroll/scroll.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/widgets/charts/discreteBarChart.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/widgets/charts/linePlusBarChart.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/widgets/charts/stackedBarChart.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/widgets/employer-form/employer-form.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/widgets/line-chart/line-charts-nvd3.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/widgets/map/maps.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/widgets/pie-chart/pie-charts-nvd3.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/widgets/table/table.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/widgets/todo/todo.min.js")}}"></script>

</body>