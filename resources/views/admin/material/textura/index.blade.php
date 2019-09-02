@extends("theme.$theme.layout")
@section('titulo')
    Texturas
@endsection

@section('menu')
@include('theme/admin/asideAdm')
@endsection

@section('contenido')


<div class="mdl-card mdl-shadow--2dp">
        <div class="box-header">
            @include('includes.mensaje')
            <h3 class="box-title"> &nbsp&nbspTexturas</h3>

            <a href="crear">
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
                                <th class="mdl-data-table__cell--non-numeric">Id</th>
                                <th class="mdl-data-table__cell--non-numeric">Descripcion</th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($texturas as $usuario)
                                <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Id}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$usuario->Descripcion}}</td>
                                        
                                        

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