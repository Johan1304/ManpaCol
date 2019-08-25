@extends("theme.$theme.layout")
@section('titulo')
    Usuarios
@endsection
@section('contenido')


<div class="mdl-card mdl-shadow--2dp">
        <div class="box-header">
            <h3 class="box-title"> &nbsp&nbspUsuarios</h3>

            <a href="{{route('crearuser')}}">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal">
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
                                <th class="mdl-data-table__cell--non-numeric">TipoUsuario</th>
                                <th class="mdl-data-table__cell--non-numeric">Nombres</th>
                                <th class="mdl-data-table__cell--non-numeric">Apellidos</th>
                                <th class="mdl-data-table__cell--non-numeric">TipoDocumento</th>
                                <th class="mdl-data-table__cell--non-numeric">NumDoc</th>
                                <th class="mdl-data-table__cell--non-numeric">Email</th>
                                <th class="mdl-data-table__cell--non-numeric">Usuario</th>
                                <th class="mdl-data-table__cell--non-numeric">Contraseña</th>
                                <th class="mdl-data-table__cell--non-numeric">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuariossss as $usuario)
                                <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Id}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->IdTipoUsuario}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Nombres}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Apellidos}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->IdTipoDocumento}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->NumDoc}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Email}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->usuario}}</td>
                                        <td class="mdl-data-table__cell--non-numeric" width="20">{{$usuario->password}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">

                                            @if ($usuario['Estado'] =='Activo')
                                            <span class="label label--mini background-color--primary">{{$usuario->Estado}}</span>
                                            @else
                                            <span class="label label--mini background-color--secondary">{{$usuario->Estado}}</span>
                                            @endif
                                             
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

        </div>
    </div>
@endsection