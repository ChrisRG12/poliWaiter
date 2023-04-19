<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http; 
use Illuminate\Http\Request;
use App\Http\Requests\ValidadorAlimentos;
use DB;

class controladorAlimentos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filtrar = $request->get('filtrar');
        $consultaAlimentos = DB::table('alimentos')->where('descripcion','like','%'.$filtrar.'%')->orderBy('descripcion')->get();
        return view('ajustesAlimentos', compact('consultaAlimentos', 'filtrar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregarAlimento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidadorAlimentos $request)
    {
        DB::table('alimentos')->insert([
            "descripcion" => $request->input('descripcion'),
            "precioVenta" => $request->input('precioVenta'),
            "tipoAlimento" => $request->input('tipo')
           
        ]);

        return redirect('/ajustes/alimentos')->with('AlimentoAgregado','abc');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaAlimento = DB::table('alimentos')->where('id', $id)->first();
        return view('mostrarAlimento',compact('consultaAlimento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaAlimentos = DB::table('alimentos')->where('id',$id)->first();
        return view('editarAlimento',compact('consultaAlimentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidadorAlimentos $request, $id)
    {
        DB::table('alimentos')->where('id',$id)->update([
            "descripcion" => $request->input('descripcion'),
            "tipoAlimento" => $request->input('tipo'),
            "precioVenta" => $request->input('precioVenta'),
        ]);

        return redirect('/ajustes/alimentos')->with('AlimentoEditado','abc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('alimentos')->where('id',$id)->delete();
        return redirect('/ajustes/alimentos')->with('AlimentoEliminado','abc');
    }


    //Exportar los alimentos a pdf
    public function export()
    {
        $consultaAlimentos = DB::table('alimentos')->get();
    
        $pdf = \PDF::loadView('alimentosExport', compact('consultaAlimentos'));
    
        return $pdf->download('Alimentos.pdf');
    }


    //Prueba API ALIMENTOS
    public function apiUsuarios(){
        
        $usuarios = HTTP::get('https://jsonplaceholder.typicode.com/users');
        $usuariosArray = $usuarios->json();
        return view('usuariosApi', compact('usuariosArray'));
    }

    //Exportar los usuarios a pdf
    public function usuariosExport()
    {
        $usuarios = HTTP::get('https://jsonplaceholder.typicode.com/users');
        $usuariosArray = $usuarios->json();
    
        $pdf = \PDF::loadView('usuariosExport', compact('usuariosArray'));
    
        return $pdf->download('usuarios.pdf');
    }

}