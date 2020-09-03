@extends("theme.$theme.layout")
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header is-small-screen">

@section('menu')
@include('theme/admin/asideAdm')
@endsection


@section('contenido')
<div class="row">
    <div class="col-lg-12">Bienvenido</div>
</div>
@endsection
</div>