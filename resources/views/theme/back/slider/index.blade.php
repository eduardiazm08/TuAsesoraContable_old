@extends('adminlte::page')

@section('title', 'Slider')

@section('content_header')
    <h1>Listado Slider</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="callout callout-info">
                    <a href="{{route('slider.crear')}}" class="btn btn-primary text-white float-right" style="text-decoration: none;">CREAR</a>
                    <h5><i class="fas fa-info"></i> Nota:</h5>
                    En esta seccion pueden habilitar los slider para la pagina principal.
                </div>
                <!-- Main content -->
                <div class="invoice p-3 mb-3">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-12">
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
                                        <td>{!! $s->desc_slider!!}</td>
                                        <td><img src="{{ asset("/imagen/Slider/$s->rute_img_slider" )}}" alt="Servicio{{ $s->id}}_TuAsesoraContable" width="90%" height="100"></td>
                                        <td class="text-right py-0 align-middle">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{route('slider.editar', $s->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"> </i></a>
                                                &nbsp;
                                                <form action="{{route('slider.eliminar',$s->id)}}" method="post" class="eliminar-slider">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash"> </i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '??Eliminado!',
                'El slider a sido eliminado.',
                'success'
            )
        </script>

    @endif
    <script>
        $('.eliminar-slider').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: '??Estas seguro de eliminar?',
                text: "??El slider se eliminara definitivamente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '??Si, eliminar!',
                cancelButtonText: '??Cancelar!'
            }).then((result) => {
                if(result.value){
                    this.submit();
                }
            })
        })
    </script>
@stop
