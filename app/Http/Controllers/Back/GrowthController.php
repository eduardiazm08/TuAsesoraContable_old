<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\ServiciosRequest;
use App\Models\Front\GrowthContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GrowthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicesContent = GrowthContent::all();
        $count = $servicesContent->count();

        return view('theme.back.growth.index')->with(['servicesContent' => $servicesContent, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicesContent = GrowthContent::all();
        $count = $servicesContent->count();
        if($count > 3){
            return view('theme.back.growth.index')->with(['servicesContent' => $servicesContent, 'count' => $count]);
        }
        else{
        return view('theme.back.growth.create');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiciosRequest $request)
    {
        $request->validated();
        $validado = $request->all();

        if($request->file('imagen')){
            /* $rutaGuardada = 'imagen/Growth/';
            $imagenServicios = date('YmhHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardada, $imagenServicios);
            $validado['imagen'] = "$imagenServicios"; */
            $imgGrowth = $request->file('imagen')->store('public/imagen/Growth');
            $url = Storage::url($imgGrowth);
        }

        GrowthContent::create($validado, $url);

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
        $data = GrowthContent::findOrFail($id);
        return view('theme.back.growth.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiciosRequest $request, $id)
    {
        $request->validated();
        $validado = $request->all();

        if($imagen = $request->file('imagen')){
            $rutaGuardada = 'imagen/Growth/';
            $imagenServicios = date('YmhHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardada, $imagenServicios);
            $validado['imagen'] = "$imagenServicios";
        }
        else {
            unset($validado['imagen']);
        }

        GrowthContent::findOrFail($id)->update($validado);

        return redirect('/admin/servicios')->with('mensaje', 'Slider editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = GrowthContent::findOrFail($id);
        $url = 'imagen/Growth/'.$data['imagen'];
        if(GrowthContent::exists($url))
        {
            GrowthContent::delete($url);
        }
        
        return redirect('/admin/servicios')->with('mensaje', 'Servicio Eliminado correctamente');
    }
}
