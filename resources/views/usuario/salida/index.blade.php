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
            <h3 class="box-title"> &nbsp&nbspMaterial</h3>
                        
        </div>
        <div class="mdl-card__supporting-text no-padding">

                <table class="mdl-data-table mdl-js-data-table bordered-table  stripped-table">
                        <thead class="mdl-data-table mdl-js-data-table borderless-table">
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">ID</th>
                                <th class="mdl-data-table__cell--non-numeric">TipoMaterial</th>
                                <th class="mdl-data-table__cell--non-numeric">Existencias</th>
                                <th class="mdl-data-table__cell--non-numeric">Color</th>
                                <th class="mdl-data-table__cell--non-numeric">IdTextura</th>
                                <th class="mdl-data-table__cell--non-numeric">IdProveedor</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($material as $material)
                        <tr data-id="{{$material->id}}">
                                <td class="mdl-data-table__cell--non-numeric">{{$material->id}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->tipoMaterial->Descripcion}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->Existencias}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->color->descripcion}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->textura->descripcion}}</td>
                                <td class="mdl-data-table__cell--non-numeric">{{$material->proveedor->Nombre}}</td>
                                

                                <form action="{{route('actualizar_salida',['id'=>$material->id])}}" id="form-general" class="form" method='POST'>
                
                                    @csrf
                                


                                    <td class="mdl-data-table__cell--non-numeric" WIDTH="100" HEIGHT="50">
                                        <input class="mdl-textfield__input form-control @error('password') is-invalid @enderror" required type="number"  name="Existencias"  value="{{ old('Existencias') }}" placeholder="Cantidad" id="{{$material->id}}" min="1" max="{{$material->Existencias}}"/>
                                    </td>

                                    <td class="mdl-data-table__cell--non-numeric">

                                        <input class="mdl-textfield__input form-control @error('password') is-invalid @enderror" required type="number"  name="NumeroDoc"    value="{{ old('NumeroDoc') }}" placeholder="Documento" id="{{$material->id}}"/>

                                        @if (session("error"))

                                            <div class="alert alert-success" for="{{$material->id}}">
                                        
                                           {{session("error")}}
                                            
                                            </div>
                                    
                                    
                                        @endif
                                        
                                    </td>
                                    
                                    <td>
                                    <button type="submit" name="btnrestrar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-light-blue">
                                        actualizar
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
