@extends('adminlte::page')

@section('title', 'CREAR SLIDER')

@section('content_header')
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">CAMPOS SLIDER</h3>
    </div>
    <!-- /.card-header -->
@stop

@section('content')
    
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">los campos con (*) son obligatorios</h3>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{route('slider.guardar')}}" class="crear-slider">
                        @csrf
                        @include('theme.back.slider.form')
                    </form>
                  <!-- /input-group -->
                </div>
                <!-- /.card-body -->
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