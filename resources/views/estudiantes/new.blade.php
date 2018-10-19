@extends('layout.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h3 class="text-info">Nuevo Estudiante</h3>
            <form action="" class="form-group">
                <input type="text" class="form-control" placeholder="Nombres"><br>
                <input type="text" class="form-control" placeholder="Apellidos"><br>
                <input type="number" class="form-control" placeholder="Edad"><br>
                <input type="text" class="form-control" placeholder="Institucion"><br>
                <button type="submit" class="btn  btn-success col-md-offset-10" >
                    <a href="">Agregar</a>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection