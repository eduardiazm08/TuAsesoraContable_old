@extends('adminlte::page')

@section('title', 'Crear Slider')

@section('content_header')
      <h3>Crear Slider</h3>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="callout callout-info">
                <a href="{{route('slider')}}" class="btn btn-primary text-white float-right" style="text-decoration: none;">VOLVER</a>
                <h5><i class="fas fa-info"></i> Nota:</h5>
                Complete los campos del formulario para crear el slider.
            </div>
            <div class="invoice p-3 mb-3">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">los campos con (*) son obligatorios</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="{{route('slider.guardar')}}" class="crear-slider">
                                @csrf
                                @include('theme.back.slider.form')
                                <div class="row float-right">
                                    <div class="col-12">
                                        <a href="{{route('slider')}}" class="btn btn-danger" tabindex="5">Cancelar</a>
                                        <button type="submit" class="btn btn-primary" tabindex="4">Crear Slider</button>
                                    </div>
                                </div>
                            </form>
                        <!-- /input-group -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/assets/css/admin_custom.css')}}">
@stop

@section('js')
    <script src="{{asset('assets/js/upload-img.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('guardar') == 'ok')
        <script>
            Swal.fire(
                'Guardado!',
                'El slider a sido guardado.',
                'success'
            )
        </script>

    @endif
    <script>
        $('.crear-slider').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: '¿Estas seguro de crear el slider?',
                text: "¡El slider se creara!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, Guardar!',
                cancelButtonText: '¡Cancelar!'
            }).then((result) => {
                if(result.value){
                    this.submit();
                }
            })
        })
    </script>
@stop
