<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jugador;


class JugadorController extends Controller
{
    public function index(){
        $jugador=Jugador::all();
        return view('jugador.index',compact('jugador'));
    }
    public function create(){
        return view('jugador.create');
    }

    public function store(Request $request){
        $jugador=Jugador::create($request->all());
        return redirect()->route('localidad.index')->with([
            'message'=>'Se ha creado correctamente la localidad',
            'type'=>'success'
        ]);
    }

    public function show($id){
        // SELECT * FROM entity WHERE ID = ? 111  FIND
        $jugador=Jugador::find($id);
        return view('localidad.show',compact('localidad'));
    }

    public function edit($id){
        $jugador=Jugador::find($id);
        return view('localidad.edit',compact('localidad'));
    }
    public function update(Request $request, $id){
        $jugador=Jugador::find($id)->update($request->all());
        return redirect()->route('localidad.index')->with([
            'message'=>'Se ha actualizado correctamente la localidad',
            'type'=>'warning'
        ]);
    }

    public function destroy($id){
        $jugador=Jugador::find($id)->delete();
        return redirect()->route('product_type.index')->with([
            'message'=>'Se ha eliminado correctamente la localidad',
            'type'=>'danger'
        ]);
    }



}
