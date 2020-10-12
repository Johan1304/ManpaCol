@extends("theme.$theme.layout")
@section('titulo')
    Material
@endsection
@section('menu')
@include('theme/admin/asideUser')
    
@endsection

@section('contenido')


<div class="mdl-card mdl-shadow--2dp">
        <div class="box-header">
            <h3 class="box-title"> &nbsp&nbsp Entrada Material</h3>


           
            <div class="mdl-grid">
                <div class="mdl-card__supporting-text">
                <form  class="form" action="{{route('reporte')}}">
                @csrf
                <table class="mdl-data-table mdl-js-data-table">
                <thead>
                <td class="mdl-data-table__cell--non-numeric" WIDTH="100" HEIGHT="50">
                        <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                        <input class="mdl-textfield__input" value="{{$tipo}}" type="text" id="tipo" name="tipo" readonly tabIndex="-1"/>
    
                                <label class="mdl-textfield__label" for="" requerido>TipoMaterial</label>
    
                                <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu dark_dropdown" for="tipo">
                                    
                                        <li class="mdl-menu__item">Proveedor</li>
                                        <li class="mdl-menu__item">Material</li>
                                        <li class="mdl-menu__item">Cantidad</li>
                                        
                                           
                                    </ul>
    
                                <label for="tipo" requerido>
                                    <i class="mdl-icon-toggle__label material-icons">arrow_drop_down</i>
                                </label>
    
                            </div>

            
                </td>
                <td class="mdl-data-table__cell--non-numeric" WIDTH="100" HEIGHT="50">
                <div class="mdl-cell  mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="buscar" id="buscar" value="{{$buscar}}"/>
                    <label class="mdl-textfield__label" for="firstName" requerido>Buscar</label>
                </div>
                </td>
                <td class="mdl-data-table__cell--non-numeric" WIDTH="100" HEIGHT="50">
                <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="date" id="start" name="fecha"
                    value="{{$fecha}}"
                    min="2018-01-01" max="2020-12-31">
                </div>
                </td>
                <td class="mdl-data-table__cell--non-numeric" WIDTH="100" HEIGHT="50">
                
                    <button type="submit" name="btnsumar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                        Buscar
                    </button>
                
                </td>
            </thead>
                </table>
            </form>
            </div>
            </div>
        
                   
           
                 


            
        </div>
        <div class="mdl-card__supporting-text no-padding">
            
                <table class="mdl-data-table mdl-js-data-table bordered-table  stripped-table">
                        <thead class="mdl-data-table mdl-js-data-table borderless-table">
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">Id</th>
                                <th class="mdl-data-table__cell--non-numeric">Nombre Proveedor</th>
                                <th class="mdl-data-table__cell--non-numeric">Telefono Proveedor</th>
                                <th class="mdl-data-table__cell--non-numeric">Email Proveedor</th>
                                <th class="mdl-data-table__cell--non-numeric">Material</th>
                                <th class="mdl-data-table__cell--non-numeric">Cantidad</th>
                                <th class="mdl-data-table__cell--non-numeric">Fecha Entrada</th>
                                <th class="mdl-data-table__cell--non-numeric">Hora</th>
                                
                            </tr>

                            
                        </thead>
                        <tbody>
                           @foreach ($entrada as $material)
                           <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->Nombre}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->TelefonoRepresentante}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->Email}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->descripcion}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->cantidad}} {{$material->UnidadMedida}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{\Carbon\Carbon::parse($material->created_at)->format('d/m/Y')}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{\Carbon\Carbon::parse($material->created_at)->format('H:i:s')}}</td>
                               
                                

                                
                                
                                
                            </tr>
                            
                           @endforeach
                           
                        
                           
                        </tbody>
                    </table>

        </div>
        <div class="container">
            <div class="row">
                
                <div class="col-xs-6 col-sm-9 col-md-9 col-lg-9 "> {{ $entrada->appends(['tipo' => $tipo, 'buscar' => $buscar])->links() }}</div>
                
               
            </div>
               
        </div>
            
       
        
    </div>
      
@endsection
<script type="text/javascript">
    public function sumar($Existencias,$cantidad){
        $sumar = $Existencias+$cantidad;
    }else
    if($cantidad>10000){
        $this().text("Ha excedido la cantidad maxima");
    }
    </script>
    