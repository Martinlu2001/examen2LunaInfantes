@extends('layout')

@section('tittle', 'Crear alumno')

@section('content')

<table cellpadding="3" cellspacing="5" class="table table-bordered" style="display:flex;">
    <tr>
        <th colspan="4">Crear nuevo alumno</th>
    </tr>
    
    <form action="{{route('ingreso.store')}}" method="post">
        @csrf
        <tr>
            <th>Nombre: </th>
            <td><input type="text" name="nombre"><br>{{$errors->first('nombre')}}</td>
        </tr>

        <tr>
            <th>Curso: </th>
            <td><input type="text" name="curso"><br>{{$errors->first('curso')}}</td>
        </tr>

        <tr>
            <th>Nota 1: </th>
            <td><input type="text" name="nota1"><br>{{$errors->first('nota1')}}</td>
        </tr>

        <tr>
            <th>Nota 2: </th>
            <td><input type="text" name="nota2"><br>{{$errors->first('nota2')}}</td>
        </tr>

        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
    </form>
</table>

@endsection