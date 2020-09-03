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
            <h3 class="box-title"> &nbsp&nbspRegistro Entrada Material</h3>




             <div class="mdl-cell mdl-cell--6-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
             <input class="mdl-textfield__input" type="text" name="Buscar" value="" placeholder="100" id="Buscar"/>
              <label class="mdl-textfield__label" for="secondName" requerido>Apellidos</label>
            </div>
                   
            <button type="submit" name="btnsumar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
            Buscar
            </button>




            
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
                                <th class="mdl-data-table__cell--non-numeric">cantidad</th>
                                <th class="mdl-data-table__cell--non-numeric">Fecha Entrada</th>
                                
                            </tr>

                            
                        </thead>
                        <tbody>
                           @foreach ($entrada as $material)
                           <tr>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->nombre}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->TelefonoRepresentante}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->Email}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->descripcion}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->cantidad}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->created_at}}</td>
                               
                                

                                
                                
                                
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