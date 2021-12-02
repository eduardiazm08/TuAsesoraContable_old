@extends('adminlte::page')

@section('title', 'Editar Slider')

@section('content_header')
      <h3>Editar Slider</h3>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="callout callout-info">
                <a href="{{route('slider')}}" class="btn btn-primary text-white float-right" style="text-decoration: none;">VOLVER</a>
                <h5><i class="fas fa-info"></i> Nota:</h5>
                Complete los campos del formulario para crear los servicios.
            </div>
            <div class="invoice p-3 mb-3">
                <div class="col-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">los campos con (*) son obligatorios</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data" action="{{route('slider.actualizar', $data->id)}}" class="editar-slider">
                                @csrf
                                @method('PUT')
                                @include('theme.back.slider.form')
                                <div class="row float-right">
                                    <div class="col-12">
                                        <a href="{{route('slider')}}" class="btn btn-danger" tabindex="5">Cancelar</a>
                                        <button type="submit" class="btn btn-primary" tabindex="4">Actualizar</button>
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
@stop

@section('css')
    <link rel="stylesheet" href="{{asset('/assets/css/admin_custom.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@stop

@section('js')
    <script src="{{asset('assets/js/upload-img.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('guardar') == 'ok')
        <script>
            Swal.fire(
                'Guardado!',
                'El servicio a sido guardado.',
                'success'
            )
        </script>
    @endif
    <script>
        $('.crear-servicio').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: '¿Estas seguro de crear el servicio?',
                text: "¡El servicio se creara!",
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
    <script>
        tinymce.init({
            selector: '#descServicios',
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote(
                {
                    lang: 'es-ES',
                }
            );        
        });
    </script>
    
@stop