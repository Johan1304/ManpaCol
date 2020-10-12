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
            <a href="material/crear">
                <input type="file"  name="imagen"> 
                
            </a>
            
        </div>
        <div class="mdl-card__supporting-text no-padding">

                <table class="mdl-data-table mdl-js-data-table bordered-table  stripped-table">
                        <thead class="mdl-data-table mdl-js-data-table borderless-table">
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">ID</th>
                                <th class="mdl-data-table__cell--non-numeric">Tipo Material</th>
                                <th class="mdl-data-table__cell--non-numeric">Tipo Presentacion</th>
                                <th class="mdl-data-table__cell--non-numeric">Existencias</th>
                                <th class="mdl-data-table__cell--non-numeric">Color</th>
                                <th class="mdl-data-table__cell--non-numeric">Textura</th>
                                <th class="mdl-data-table__cell--non-numeric">Proveedor</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($materiales as $material)
                           <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->tipoMaterial->Descripcion}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->tipoMaterial->tipoPresentacion->Descripcion}} {{$material->tipoMaterial->tipoPresentacion->Cantidad}}{{$material->tipoMaterial->tipoPresentacion->UnidadMedida}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->Existencias}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->color->descripcion}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->textura->descripcion}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->proveedor->Nombre}}</td>
                                
                                
                        </tr>
                           @endforeach
                                
                           
                        </tbody>
                    </table>

        </div>
    </div>
@endsection