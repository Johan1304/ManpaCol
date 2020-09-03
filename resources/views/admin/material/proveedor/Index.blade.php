@extends("theme.$theme.layout")
@section('titulo')
    Provedores
@endsection

@section('menu')
@include('theme/admin/asideAdm')
@endsection

@section('contenido')


<div class="mdl-card mdl-shadow--2dp">
        <div class="box-header">
            @include('includes.mensaje')
            <h3 class="box-title"> &nbsp&nbspProveedores</h3>

            <a href="proveedor/crear">
            &nbsp&nbsp<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal"
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
                                <th class="mdl-data-table__cell--non-numeric">Nombres</th>
                                <th class="mdl-data-table__cell--non-numeric">NombreRepresentante</th>
                                <th class="mdl-data-table__cell--non-numeric">TelefonoRepresentante</th>
                                
                                <th class="mdl-data-table__cell--non-numeric">Email</th>
                                <th class="mdl-data-table__cell--non-numeric">PaisOrigen</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($provedores as $usuario)
                                <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->id}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Nombre}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->NombreRepresentante }}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->TelefonoRepresentante}}</td>
                                        
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Email}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->PaisOrigen}}</td>
                                        

                                        <td>
                                            <a href= "{{route('editar_proveedor', ['id'=>$usuario->id])}}" >
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