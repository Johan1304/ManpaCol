<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{asset("assets/$theme/images/DB_16х16.png")}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo','ManpaCol') | ManpaCol</title>

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
    <link rel="stylesheet" href="{{asset("assets/$theme/css/style.min.css")}}">
    <!-- endinject -->

</head>
<body>
<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main class="mdl-layout__content">

        <div class="mdl-card mdl-card__login mdl-shadow--2dp">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mdl-card mdl-card__login mdl-shadow--2dp">
                <div class="mdl-card__supporting-text color--dark-gray">
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="mdl-card__title-text text-color--smooth-gray">ManpaCol</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <span class="login-name text-color--white">Olvidaste tu contraseña?</span>
                            <span class="login-secondary-text text-color--smoke">Digita tu e-mail</span>
                        </div>
                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input id="email" type="email" class="mdl-textfield__input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" onclick="required" autocomplete="email" autofocus>
                                <label class="mdl-textfield__label" for="e-mail">Email</label>
                                    

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                            <div class="mdl-layout-spacer"></div>
                                <button type="submit" class="mdl-button mdl-js-button mdl-button--raised color--light-blue btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>

<!-- inject:js -->
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
<!-- endinject -->
    </main>
    </div>
</body>
</html>