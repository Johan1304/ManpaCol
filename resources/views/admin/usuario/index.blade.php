@extends("theme.$theme.layout")
@section('titulo')
    Usuarios
@endsection
@section('contenido')


<div class="mdl-card mdl-shadow--2dp">
        <div class="box-header">
            <h3 class="box-title"> &nbsp&nbspUsuarios</h3>
        </div>
        <div class="mdl-card__supporting-text no-padding">

                <table class="mdl-data-table table-hover mdl-js-data-table">
                        <thead>
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
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Contraseña}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">
                                            <span class="label label--mini background-color--primary">{{$usuario->Estado}}</span> 
                                        </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

        </div>
    </div>
@endsection