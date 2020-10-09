<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="icon" type="image/png" href="{{asset("assets/$theme/images/DB_16х16.ico")}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo','Crear Tipo Presentacion') | ManpaCol</title>

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

@include('theme/admin/asideAdm')




    <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-card mdl-shadow--2dp employer-form" action="">
            <div class="mdl-card__title">
                <h2>Crear Tipo Presentacion</h2>
                <div class="mdl-card__subtitle"></div>
            </div>

            <div class="mdl-card__supporting-text">
            <form action="{{route('guardar_presentacion')}}" id="form-general" class="form" method='POST'>
                @csrf
                <div class="form__article">
                    <h3>Datos</h3>

                    @if ($errors->any())
                        <div class="alert" alert-danger alert-dismissible>
                            @foreach ($errors->all() as $error)
                                <span >{{$error}}<br></span>
                            @endforeach
                        </div>
                            
                        @endif

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <div class="col-lg-8">
                              <input class="mdl-textfield__input" type="text" name="Descripcion" value="{{old('Descripcion')}}" pattern="[a-z]{1,45}"/>
                            </div>
                            <label class="mdl-textfield__label" for="firstName" requerido>Tipo de presentacion</label>
                        </div>
                    </div>

                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" name="Cantidad" value="{{old('Cantidad')}}" pattern="[0-9]{1,3}"/>
                            <label class="mdl-textfield__label" for="firstName" requerido>Cantidad</label>
                        </div>
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" name="UnidadMedida" value="{{old('UnidadMedida')}}" pattern="[a-zA-Z]{1,7}"/>
                                <label class="mdl-textfield__label" for="firstName" requerido>Unidad de Medida</label>
                        </div>
                    </div>



                



                    <div class="form__action">
                            
                       <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-red"
                       onclick = "this.form.action = '../tipomaterial/crear'" formmethod="GET">
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