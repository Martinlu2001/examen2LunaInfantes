<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Http\Requests\CreateAlumnoRequest;


class AlumnosController extends Controller
{
    public function index(){

        $alumnos = Alumno::latest()->paginate(2);
        return view('listado', compact('alumnos'));
    }

    public function show($id){
        return view('show',[
            'alumno' => Alumno::find($id)
        ]);
    }

    public function create(){
        return view('create');
    }

    public function store(CreateAlumnoRequest $request){
       
        Alumno::create($request->validated());

        return redirect()->route('ingreso.create');
    }
}
