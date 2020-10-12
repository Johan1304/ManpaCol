@extends("theme.$theme.layout")
@section('titulo')
    Usuarios
    
@endsection

@section('menu')

@include('theme/admin/asideProfile')
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
                                <th class="mdl-data-table__cell--non-numeric">Nombres</th>
                                <th class="mdl-data-table__cell--non-numeric">Apellidos</th>
                                <th class="mdl-data-table__cell--non-numeric">TipoDocumento</th>
                                <th class="mdl-data-table__cell--non-numeric">Documento</th>
                                <th class="mdl-data-table__cell--non-numeric">TipoUsuario</th>
                                <th class="mdl-data-table__cell--non-numeric">Email</th>
                                <th class="mdl-data-table__cell--non-numeric">Usuario</th>
                               
                                <th class="mdl-data-table__cell--non-numeric">Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->id}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->name}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Apellidos}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->IdTipoDocumento}}</td>                                 
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->NumDoc}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->tipo->descripcion}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->email}}</td>
                                      
                                        <td class="mdl-data-table__cell--non-numeric">

                                            @if ($usuario['Estado'] =='Activo')
                                            <span class="label label--mini background-color--primary">Activo</span> 
                                            @else
                                            <span class="label label--mini background-color--secondary">Inactivo</span>
                                            @endif
                                             
                                        </td>

                                        <td>
                                            <a href= "{{route('editar_usuario', ['id'=>$usuario->id])}}" >
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