<section class="business-growth">
    <div class="business-growth__top">
        <div class="business-growth-bg">
            <div id="particles-js"></div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="business-growth__left">
                        <div class="section-title text-left">
                            <span class="section-title__tagline">Tu Asesora Contable</span>
                            <h2 class="section-title__title">Nuestros Servicios
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="business-growth__right">
                        <p class="business-growth__right-text">Somos especialistas en Asesoría Tributaría, Laboral, Contable y Legal.
                        Damos nuestros servicios a una amplia gama de empresas de diversos mercados y sectores económicos.​</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="business-growth__bottom">
            <div class="row">
                @foreach ($growth as $g)
                    <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="100ms">
                        <!--Business Growth Single-->
                        <div class="business-growth__single">
                            <div class="business-growth__img">
                                <img src="{{asset('imagen/Growth/'.$g->imagen)}}" alt="tuAsesoraContable{{$g->id}}">
                            </div>
                            <div class="business-growth__content">
                                <h4 class="business-growth__title">
                                    <a href="{{$g->url}}">{{$g->titulo}}</a>
                                </h4>
                                <p class="business-growth__text">
                                    {!! $g->descripcion !!}</p>
                                <a href="{{$g->url}}" class="btn btn-warning text-white float-right">{{$g->txt_btn}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
