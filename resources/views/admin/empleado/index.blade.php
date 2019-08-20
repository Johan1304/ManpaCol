@extends("theme.$theme.layout")
@section('titulo')
    Empleados
@endsection
@section('contenido')


<div class="mdl-card mdl-shadow--2dp">
        <div class="box-header">
            <h3 class="box-title"> &nbsp&nbspEmpleados</h3>
        </div>
        <div class="mdl-card__supporting-text no-padding">

                <table class="mdl-data-table table-hover mdl-js-data-table">
                        <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">ID</th>
                                <th class="mdl-data-table__cell--non-numeric">Nombres</th>
                                <th class="mdl-data-table__cell--non-numeric">Apellidos</th>
                                <th class="mdl-data-table__cell--non-numeric">TipoDocumento</th>
                                <th class="mdl-data-table__cell--non-numeric">NumDoc</th>
                                <th class="mdl-data-table__cell--non-numeric">Observaciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($empleados as $empleado)
                                <tr>
                                        <td class="mdl-data-table__cell--non-numeric">{{$empleado->Id}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$empleado->Nombres}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$empleado->Apellidos}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$empleado->IdTipoDocumento}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$empleado->NumeroDoc}}</td>
                                        <td class="mdl-data-table__cell--non-numeric">{{$empleado->Observaciones}}</td>
 
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

        </div>
    </div>
@endsection