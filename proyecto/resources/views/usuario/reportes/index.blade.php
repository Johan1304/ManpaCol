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
            <h3 class="box-title"> &nbsp&nbspEntrada Material</h3>
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
                                <th class="mdl-data-table__cell--non-numeric">IdProveedor</th>
                                <th class="mdl-data-table__cell--non-numeric">NombreProveedor</th>
                                <th class="mdl-data-table__cell--non-numeric">Fecha de creacion</th>
                                <th class="mdl-data-table__cell--non-numeric">Fecha de creacion</th>
                                <th class="mdl-data-table__cell--non-numeric">Fecha de creacion</th>
                                <th class="mdl-data-table__cell--non-numeric">Fecha de creacion</th>
                                
                            </tr>

                            
                        </thead>
                        <tbody>
                           @foreach ($materiales as $material)
                           <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->Id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->IdProveedor}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->created_at}}</td>
                               
                                <form action="{{route('actualizar_entrada',['id'=>$material->id])}}" id="form-general" class="form" method='POST'>
                
                                    @csrf 
                                    <td class="mdl-data-table__cell--non-numeric">
                                    <input class="mdl-textfield__input" type="number" name="Existencias" value="" placeholder="Cantidad" id="{{$material->id}}"/>
                                    </td>
                                    <td>
                                    <button type="submit" name="btnsumar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                        DEscargar
                                    </button>
                                    </td>
                                
                                    
                                    
                                </form>

                                
                                
                                
                            </tr>
                           @endforeach
                                
                           
                        </tbody>
                    </table>

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