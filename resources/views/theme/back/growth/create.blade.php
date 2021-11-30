@extends('adminlte::page')

@section('title', 'Crear Servicio')

@section('content_header')
      <h3>Crear Servicio</h3>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="callout callout-info">
                <a href="{{route('servicios')}}" class="btn btn-primary text-white float-right" style="text-decoration: none;">VOLVER</a>
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
                            <form method="POST" enctype="multipart/form-data" action="{{route('servicios.guardar')}}" class="crear-servicio">
                                @csrf
                                {{-- <h5 class="mt-4 mb-2">Descripcion perfil servicios</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                @error('titulo')
                                                    <small class="text text-danger">{{$message}}</small>
                                                @enderror
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pen-alt"></i></span>
                                                </div>
                                                <input type="text" class="form-control" placeholder="Ingrese título..." name="titulo" value="@if(isset($data['titulo'])){{$data['titulo']}}@else{{old('titulo')}}@endif" @if(isset($data['titulo'])) disabled @endif>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="input-group mb-3">
                                                @error('contenido')
                                                    <small class="text text-danger">{{$message}}</small>
                                                @enderror
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-pen-alt"></i></span>
                                                </div>
                                                <textarea class="form-control" rows="3" placeholder="Ingrese descripción del servicio..." name="contenido" value="{{old('contenido')}}" @if(isset($data['contenido'])) hidden @endif>@if(isset($data['contenido'])){{$data['contenido']}}@endif</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                @include('theme.back.growth.form')
                                <div class="row float-right">
                                    <div class="col-12">
                                        <a href="{{route('slider')}}" class="btn btn-danger" tabindex="5">Cancelar</a>
                                        <button type="submit" class="btn btn-primary" tabindex="4">Crear Servicio</button>
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
    <script src="https://cdn.tiny.cloud/1/9g8eaxoiz8n1nin7st0xronjjh3lsyh8bxftutjvuljigfxv/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
@stop
