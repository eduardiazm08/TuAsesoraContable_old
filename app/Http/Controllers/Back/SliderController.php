<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\Back\SliderRequest;
use App\Models\Front\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slider = Slider::all();
        return view('theme.back.slider.index')->with('slider', $slider);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('theme.back.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
        $request->validated();
        $validado = $request->all();

        if($imagen = $request->file('rute_img_slider')){
            $rutaGuardada = 'imagen/Slider/';
            $imagenSlider = date('YmhHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardada, $imagenSlider);
            $validado['rute_img_slider'] = "$imagenSlider";
        }

        Slider::create($validado);

        return redirect('/admin/slider/crear')->with('mensaje', 'Slider guardado correctamente');
    }

    public function edit($id)
    {
        $data = Slider::findOrFail($id);
        return view('theme.back.slider.edit')->with('data', $data);
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
        $request->validate([
            'tit_slider' => 'nullable'
        ]);
        $validado = $request->all();

        if($imagen = $request->file('rute_img_slider')){
            $rutaGuardada = 'imagen/Slider/';
            $imagenSlider = date('YmhHis'). "." . $imagen->getClientOriginalExtension();
            $imagen->move($rutaGuardada, $imagenSlider);
            $validado['rute_img_slider'] = "$imagenSlider";
        }
        else {
            unset($validado['rute_img_slider']);
        }

        Slider::findOrFail($id)->update($validado);

        return redirect('/admin/slider')->with('mensaje', 'Slider editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slider::findOrFail($id);
        $url = 'imagen/Slider/'.$data['rute_img_slider'];
        if(File::exists($url))
        {
            File::delete($url);
        }
        Slider::destroy($id);
        return redirect('/admin/slider')->with('mensaje', 'Slider Eliminado correctamente');
    }
}
