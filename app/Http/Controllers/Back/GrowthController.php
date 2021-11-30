<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\ServiciosRequest;
use App\Models\Front\Growth;
use App\Models\Front\GrowthContent;
use Illuminate\Http\Request;

class GrowthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Growth::all();
        $servicesContent = GrowthContent::all();
        return view('theme.back.growth.index')->with(['services' => $services, 'servicesContent' => $servicesContent]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme.back.growth.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('imagen')){
            $request->validate([
                "imagen" => "required|image|mimes:jpeg,png|max:2000",
                'txt_btn' => 'nullable',
                'url' => 'nullable',
            ]);
            $validado = $request->all();
            if($imagen = $request->file('imagen')){
                $rutaGuardada = 'imagen/Growth/';
                $imagenServicio = date('YmhHis'). "." . $imagen->getClientOriginalExtension();
                $imagen->move($rutaGuardada, $imagenServicio);
                $validado['imagen'] = "$imagenServicio";
            }
            GrowthContent::create($validado);
        }
        else {
            $request->validate([
                "titulo" => "required",
                'descripcion' => 'required',
            ]);
            $validado = $request->all();
            Growth::create($validado);
        }

        return redirect('/admin/servicios')->with('mensaje', 'Servicio creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
