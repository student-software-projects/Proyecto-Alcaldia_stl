<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipo;

class EquipoController extends Controller
{
    public function index(){
        $equipo=Equipo::all();
        return view('equipo.index',compact('equipo'));
    }
    public function create(){
        return view('equipo.create');
    }

    public function store(Request $request){
        $equipo=Equipo::create($request->all());
        return redirect()->route('equipo.index')->with([
            'message'=>'Se ha creado correctamente la localidad',
            'type'=>'success'
        ]);
    }

    public function show($id){
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $equipo=Localidad::find($id);
        return view('equipo.show',compact('equipos'));
    }

    public function edit($id){
        $equipo=Equipo::find($id);
        return view('equipo.edit',compact('equipos'));
    }
    public function update(Request $request, $id){
        $equipo=Equipo::find($id)->update($request->all());
        return redirect()->route('equipo.index')->with([
            'message'=>'Se ha actualizado correctamente el equipo',
            'type'=>'warning'
        ]);
    }
    public function destroy($id){
        $equipo=Equipo::find($id)->delete();
        return redirect()->route('.index')->with([
            'message'=>'Se ha eliminado correctamente',
            'type'=>'danger'
        ]);
    }
}
