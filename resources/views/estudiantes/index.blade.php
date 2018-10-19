@extends('layout.master')
@section('content')

<button type="button" class="btn btn-default">
    <a href="{{route('nuevo.estudiante')}}">Nuevo estudiante</a>
</button>
<hr>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Edad</th>
                            <th>Institucion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estudiantes as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->apellidos}}</td>
                            <td>{{$item->edad}}</td>
                            <td>{{$item->institucion}}</td>
                            <td>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection