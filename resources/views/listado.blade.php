@extends('layout')

@section('tittle', 'Listado')

@section('content')
<!-- <tr>
    <td colspan="4">
        <a href="{{route('ingreso.create')}}">Nuevo alumno</a>
    </td>
</tr> -->
<h2 style="text-align:center;">Listado de alumnos</h2>
<table class="table table-bordered" >
    <tr>
        @if($alumnos)
            @foreach($alumnos as $alumno)
                <td><a href="{{ route('listado.show', $alumno)}}">{{$alumno->nombre}}</a></td>
            @endforeach
        @else
            <li>No existe ningun alumno que mostrar</li>
        @endif
    </tr>
    <tr>
        <td colspan="4">{{ $alumnos->links('pagination::bootstrap-5')}}</td>
    </tr>
</table>
    
@endsection