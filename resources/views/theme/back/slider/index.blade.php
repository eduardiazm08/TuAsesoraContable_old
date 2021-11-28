@extends('adminlte::page')

@section('title', 'SLIDER')

@section('content_header')
    <h1>Listados Slider</h1>
@stop

@section('content')
    <a href="{{route('slider.crear')}}" class="btn btn-primary">CREAR</a>

    <table class="table table-striped mt-4">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TITULO</th>
                <th scope="col">CONTENIDO</th>
                <th scope="col">IMAGEN</th>
                <th scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody class="table-light table-hover">
            @foreach ($slider as $s)
            <tr>
                <td>{{ $s->id}}</td>
                <td>{{ $s->tit_slider}} {{ $s->tit_des_slider}}</td>
                <td>{{ $s->desc_slider}}</td>
                <td><img src="{{ asset("/imagen/Slider/$s->rute_img_slider" )}}" alt="Slider{{ $s->id}}_dimet" width="90%" height="100"></td>
                <td>
                    <form action="{{route('slider.ver',$s->id)}}" method="post">
                        @method('GET')
                        <button type="submit" class="btn btn-app btn-success"><i class="fas fa-eye"> </i>Ver</button>
                        <a href="{{route('slider.editar', $s->id)}}" class="btn btn-app"><i class="fas fa-edit"> </i>Editar</a>
                    </form>
                    <form action="{{route('slider.eliminar',$s->id)}}" method="post" class="eliminar-slider">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-app btn-danger"><i class="fas fa-trash"> </i>Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El slider a sido eliminado.',
                'success'
            )
        </script>

    @endif
    <script>
        $('.eliminar-slider').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: '¿Estas seguro de eliminar?',
                text: "¡El slider se eliminara definitivamente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, eliminar!',
                cancelButtonText: '¡Cancelar!'
            }).then((result) => {
                if(result.value){
                    this.submit();
                }
            })
        })
    </script>
@stop
