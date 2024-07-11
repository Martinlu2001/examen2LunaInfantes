@extends('layout')

@section('tittle', 'Listado' | '. $alumno->nombre')

@section('content')
<h2 style="text-align:center;">Datos del alumno {{$alumno->nombre}}</h2>
<table class="table table-bordered" style="display:flex;" >

    <tr>
        <th>Nombre: </th>
        <td colspan="4">{{$alumno->nombre}}</td>
    </tr>
    
    <tr>
        <th>Curso: </th>
        <td colspan="4">{{$alumno->curso}}</td>
    </tr>

    <tr>
        <th>Nota1: </th>
        <td colspan="4">{{$alumno->nota1}}</td>
    </tr>

    <tr>
        <th>Nota2: </th>
        <td colspan="4">{{$alumno->nota2}}</td>
    </tr>

    <tr>
        <th>Promedio: </th>
        <?php 
            $promedio = ($alumno->nota1 + $alumno->nota2)/2;
        ?>
        <td colspan="4"><?php echo $promedio?></td>
    </tr>

    <tr>
        <th>Condicion: </th>
        <?php 
            if($promedio >= 11){
                $condicion = 'APROBADO';
            }
            else{
                $condicion = 'DESAPROBADO';
            }
        ?>
        <td colspan="4"><?php echo $condicion?></td>
    </tr>

    <tr>
        <th>Fecha de registro: </th>
        <td colspan="4">{{$alumno->fecha_registro}}</td>
    </tr>
</table>


@endsection