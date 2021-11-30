@extends('adminlte::page')

@section('title', 'Servicios')

@section('content_header')
    <h1>Servicios</h1>
@stop

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="callout callout-info">
          <a href="{{route('servicios.crear')}}" class="btn btn-primary text-white float-right" style="text-decoration: none;">CREAR</a>
          <h5><i class="fas fa-info"></i> Nota:</h5>
          En esta seccion solo estaran habilitado tres servicios principales.
        </div>
        <!-- Main content -->
        <div class="invoice p-3 mb-3">
          <!-- title row -->
          <div class="row">
            <div class="col-12">
              <h4>
                <i class="fas fa-globe"></i> Tu Asesora Contable
                <small class="float-right">Fecha: {{ date('d-m-Y') }}</small>
              </h4>
            </div>
            <!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-12 invoice-col">
                @if (isset($services['titulo']))
                    {{ $services['titulo'] }}
                @endif
                <address>
                    <strong>
                        @if (isset($services['descripcion']))
                            {{ $services['descripcion'] }}
                        @endif
                    </strong>
                </address>
            </div>
          </div><!-- /.row -->
          <!-- Table row -->
          <div class="row">
            <div class="col-12 table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>imagen</th>
                    <th>Link Seccion</th>
                    <th>Boton Seccion</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($servicesContent as $s)
                    <tr>
                      <td>{{ $s->id}}</td>
                      <td><img src="{{ asset("/imagen/Growth/$s->imagen" )}}" alt="Servicio{{ $s->id}}_TuAsesoraContable" width="90%" height="100"></td>
                      <td>{{ $s->url}}</td>
                      <td>{{ $s->txt_btn}}</td>
                      <td>{{ $s->descripcion}}</td>
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
            <!-- /.col -->
          </div>
          <!-- /.row -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
