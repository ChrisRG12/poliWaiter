<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function store(Request $request)
    {
        DB::table('alimentos')->insert([
            "descripcion" => $request->input('descripcion'),
            "precioVenta" => $request->input('precioVenta'),
            "tipoAlimento" => $request->input('tipo')
           
        ]);

        return redirect('/ajustes/alimentos');
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
    public function update(Request $request, $id)
    {
        DB::table('alimentos')->where('id',$id)->update([
            "descripcion" => $request->input('descripcion'),
            "tipoAlimento" => $request->input('tipo'),
            "precioVenta" => $request->input('precioVenta'),
        ]);

        return redirect('/ajustes/alimentos');
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
        return redirect('/ajustes/alimentos');
    }


    //Exportar los alimentos a pdf
    public function export()
    {
        $consultaAlimentos = DB::table('alimentos')->get();
    
        $pdf = \PDF::loadView('alimentosExport', compact('consultaAlimentos'));
    
        return $pdf->download('Alimentos.pdf');
    }

    
    public function carrito(){
    
    // Obtener los productos del carrito (ejemplo)
    $productos = [
        [
            'nombre' => 'Producto 1',
            'precio' => 10.00,
            'cantidad' => 2,
            'subtotal' => 20.00
        ],
        [
            'nombre' => 'Producto 2',
            'precio' => 15.00,
            'cantidad' => 1,
            'subtotal' => 15.00
        ]
    ];

    // Calcular el total del carrito
    $total = 0;
    foreach ($productos as $producto) {
        $total += $producto['subtotal'];
    }

    // Renderizar la vista en Blade
    require_once 'vendor/autoload.php';

    $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/views');
    $twig = new \Twig\Environment($loader);
    echo $twig->render('carrito.blade.php', [
        'productos' => $productos,
        'total' => $total
    ]);
}
}