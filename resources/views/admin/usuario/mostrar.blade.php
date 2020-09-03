@extends("theme.$theme.layout")
@section('titulo')
    Usuarios
    
@endsection

@section('menu')
@include('theme/admin/asideAdm')
@endsection

@section('contenido')


<div class="mdl-card mdl-shadow--2dp">
        <div class="box-header">
            @include('includes.mensaje')
            <h3 class="box-title"> &nbsp&nbspUsuarios</h3>

            
            <a href="usuario/crear">
                &nbsp&nbsp<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue"
                >
                        <i class="material-icons">create</i>
                        Crear
                </button>
                </a>
            
        </div>
        <div class="mdl-card__supporting-text no-padding">

                <table style="table-layout:fixed" class="mdl-data-table mdl-js-data-table bordered-table  stripped-table">
                        <thead class="mdl-data-table mdl-js-data-table borderless-table">
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">ID</th>
                                <th class="mdl-data-table__cell--non-numeric">TipoUsuario</th>
                                <th class="mdl-data-table__cell--non-numeric">Nombres</th>
                                <th class="mdl-data-table__cell--non-numeric">Apellidos</th>
                                <th class="mdl-data-table__cell--non-numeric">TipoDocumento</th>
                                <th class="mdl-data-table__cell--non-numeric">NumDoc</th>
                                <th class="mdl-data-table__cell--non-numeric">Email</th>
                                <th class="mdl-data-table__cell--non-numeric">Usuario</th>
                               
                                <th class="mdl-data-table__cell--non-numeric">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Id}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->IdTipoUsuario}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Nombres}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Apellidos}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->IdTipoDocumento}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->NumDoc}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Email}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->usuario}}</td>
                                        
                                        <td class="mdl-data-table__cell--non-numeric">

                                            @if ($usuario['Estado'] =='1')
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-1">
                                                <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
                                                <span class="mdl-switch__label"></span>
                                            </label>
                                            @else
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch--colored-green" for="switch-1">
                                                <input type="checkbox" id="switch-1" class="mdl-switch__input" >
                                                <span class="mdl-switch__label"></span>
                                            </label>
                                            @endif
                                             
                                        </td>

                                        <td>
                                            <a href= "{{route('editar_usuario', ['Id'=>$usuario->Id])}}" >
                                                <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--raised mdl-js-ripple-effect button--colored-orange"
                                                >
                                                        <i class="material-icons">create</i>
                                                </button>
                                            </a>
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

        </div>
    </div>
@endsection