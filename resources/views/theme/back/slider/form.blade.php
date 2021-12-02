<h5 class="mt-4 mb-2">Títulos</h5>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group mb-3">
                @error('titulo_slider')
                    <small class="text text-danger">{{$message}}</small>
                @enderror
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen-alt"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese título..." name="tit_slider" value="@if(isset($data['tit_slider'])){{$data['tit_slider']}}@else{{old('tit_slider')}}@endif">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group mb-3">
                @error('titulo_slider')
                    <small class="text text-danger">{{$message}}</small>
                @enderror
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-pen-alt"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese título destacado..." name="tit_des_slider" value="@if(isset($data['tit_des_slider'])){{$data['tit_des_slider']}}@else{{old('tit_des_slider')}}@endif">
            </div>
        </div>
    </div>
</div>
<h5 class="mt-4 mb-2">Descripción</h5>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            <div class="mb-3">
                @error('desc_slider')
                    <small class="text text-danger">{{$message}}</small>
                @enderror
                <textarea id="summernote"  placeholder="Ingrese descripción ..." name="desc_slider">
                    @if(isset($data['desc_slider']))
                        {{$data['desc_slider']}}
                    @else
                        {{old('desc_slider')}}
                    @endif
                </textarea>
            </div>
        </div>
    </div>
</div>
<h5 class="mt-4 mb-2">Botón</h5>
<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group mb-3">
                @error('txt_btn_slider')
                    <small class="text text-danger">{{$message}}</small>
                @enderror
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-paragraph"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese texto boton..." name="txt_btn_slider" value="@if(isset($data['txt_btn_slider'])){{$data['txt_btn_slider']}}@else{{old('txt_btn_slider')}}@endif">
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <div class="input-group mb-3">
                @error('url_btn_slider')
                    <small class="text text-danger">{{$message}}</small>
                @enderror
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-link"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Ingrese link boton..." name="url_btn_slider" value="@if(isset($data['url_btn_slider'])){{$data['url_btn_slider']}}@else{{old('url_btn_slider')}}@endif">
            </div>
        </div>
    </div>
</div>
<h5 class="mt-4 mb-2">Imagen</h5>
<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            <div class="image-area mt-4">
                <img id="imageResult" src="@if (isset($data['rute_img_slider']))
                    {{asset('imagen/Slider/'.$data['rute_img_slider'])}}
                @else
                    #
                @endif" alt="" class="img-fluid rounded shadow-sm mx-auto d-block" style="height: 140px; width: 100%; padding:5px" >
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            @error('rute_img_slider')
                <small class="text text-danger">{{$message}}</small>
                <br>
            @enderror
            <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
                <input id="upload" name="rute_img_slider" type="file" onchange="readURL(this);" class="form-control border-0" value="@if (isset($data['rute_img_slider']))
                {{$data['rute_img_slider']}}@endif" accept="image/*">
                <label id="upload-label" for="upload" class="font-weight-light text-muted">Elegir Imagen (*)</label>
                <div class="input-group-append">
                    <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Elegir Imagen (*)</small></label>
                </div>
            </div>
        </div>
    </div>
</div>

