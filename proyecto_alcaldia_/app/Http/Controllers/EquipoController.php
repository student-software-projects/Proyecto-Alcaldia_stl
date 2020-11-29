<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    public function index(){
        $equipos=Equipo::all();
        return view('equipo.index',compact('equipo'));
    }
    public function create(){
        return view('equipo.create');
    }

    public function store(Request $request){
        $equipos=Equipo::create($request->all());
        return redirect()->route('equipo.index')->with([
            'message'=>'Se ha creado correctamente la localidad',
            'type'=>'success'
        ]);
    }

    public function show($id){
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $equipos=Localidad::find($id);
        return view('equipo.show',compact('equipo'));
    }

    public function edit($id){
        $equipos=Equipo::find($id);
        return view('equipo.edit',compact('equipo'));
    }
    public function update(Request $request, $id){
        $equipos=Equipo::find($id)->update($request->all());
        return redirect()->route('equipo.index')->with([
            'message'=>'Se ha actualizado correctamente el equipo',
            'type'=>'warning'
        ]);
    }
    public function destroy($id){
        $equipos=Equipo::find($id)->delete();
        return redirect()->route('.index')->with([
            'message'=>'Se ha eliminado correctamente',
            'type'=>'danger'
        ]);
    }
}
