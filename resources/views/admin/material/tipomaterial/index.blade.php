@extends("theme.$theme.layout")
@section('titulo')
    Tipo Material
@endsection
@section('menu')
@include('theme/admin/asideAdm')
    
@endsection

@section('contenido')


<div class="mdl-card mdl-shadow--2dp">
        <div class="box-header">
            <h3 class="box-title"> &nbsp&nbspTipo Material</h3>
            <a href="tipomaterial/crear">
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
                                <th class="mdl-data-table__cell--non-numeric">Descripción</th>
                        
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($tipomateriales as $material)
                           <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->Descripcion}}</td>
                                
                                <td>
                                  <a href= "{{route('editar_tipom',['id'=>$material->id])}}" >
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