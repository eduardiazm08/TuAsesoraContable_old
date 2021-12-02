<h5 class="mt-4 mb-2">Titulo</h5>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="input-group mb-3">
                @error('titulo')
                    <small class="text text-danger">{{$message}}</small>
                @enderror
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese titulo de servicio..." name="titulo" value="@if(isset($data['titulo'])){{$data['titulo']}}@else{{old('titulo')}}@endif">
            </div>
        </div>
    </div>
</div>
<h5 class="mt-4 mb-2">Botón</h5>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group mb-3">
                @error('txt_btn')
                    <small class="text text-danger">{{$message}}</small>
                @enderror
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-paragraph"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese texto boton..." name="txt_btn" value="@if(isset($data['txt_btn'])){{$data['txt_btn']}}@else{{old('txt_btn')}}@endif">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group mb-3">
                @error('url')
                    <small class="text text-danger">{{$message}}</small>
                @enderror
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese link boton..." name="url" value="@if(isset($data['url'])){{$data['url']}}@else{{old('url')}}@endif">
            </div>
        </div>
    </div>
</div>
<h5 class="mt-4 mb-2">Descripción</h5>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="mb-3">
                @error('descripcion')
                    <small class="text text-danger">{{$message}}</small>
                @enderror
                <textarea id="summernote"  placeholder="Ingrese descripción ..." name="descripcion">
                    @if(isset($data['descripcion']))
                        {{$data['descripcion']}}
                    @else
                        {{old('descripcion')}}
                    @endif
                </textarea>
            </div>
        </div>
    </div>
</div>
<h5 class="mt-4 mb-2">Imagen</h5>
<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <div class="image-area mt-4">
                <img id="imageResult" src="@if (isset($data['imagen']))
                    {{asset('imagen/Growth/'.$data['imagen'])}}
                @else
                    #
                @endif" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" style="height: 140px; width: 100%; padding:5px" >
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            @error('imagen')
                <small class="text text-danger">{{$message}}</small>
                <br>
            @enderror
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" name="imagen" type="file" onchange="readURL(this);" class="form-control border-0" value="@if (isset($data['imagen']))
                {{$data['imagen']}}@endif" accept="image/*">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Elegir Imagen (*)</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Elegir Imagen (*)</small></label>
                </div>
            </div>
        </div>
    </div>
</div>





