@extends("theme.$theme.layout")
@section('titulo')
    Material
@endsection
@section('menu')
@include('theme/admin/asideAdm')
    
@endsection

@section('contenido')


<div class="mdl-card mdl-shadow--2dp">
        <div class="box-header">
            <h3 class="box-title"> &nbsp&nbspMaterial</h3>
            <a href="material/crear">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue"
            >
                    <i class="material-icons">create</i>
                    Crear
            </button>
            </a>
            
        </div>
        <div class="mdl-card__supporting-text no-padding">

                <table class="mdl-data-table mdl-js-data-table bordered-table  stripped-table">
                        <thead class="mdl-data-table mdl-js-data-table borderless-table">
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">ID</th>
                                <th class="mdl-data-table__cell--non-numeric">TipoMaterial</th>
                                <th class="mdl-data-table__cell--non-numeric">Existencias</th>
                                <th class="mdl-data-table__cell--non-numeric">Color</th>
                                <th class="mdl-data-table__cell--non-numeric">IdTextura</th>
                                <th class="mdl-data-table__cell--non-numeric">IdProveedor</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($materiales as $material)
                           <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->Id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->IdTipoMaterial}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->Existencias}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->Color}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->IdTextura}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->IdProveedor}}</td>
                                
                        </tr>
                           @endforeach
                                
                           
                        </tbody>
                    </table>

        </div>
    </div>
@endsection