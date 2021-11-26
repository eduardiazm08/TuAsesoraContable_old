<section class="main-slider main-slider-two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='
        {   
            "slidesPerView": 1, 
            "loop": true,
            "effect": "fade",
            "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
            },
            "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
            },
            "autoplay": {
                "delay": 5000
            }
        }'>
        <div class="swiper-wrapper">
            @foreach($slider as $s)
                <div class="swiper-slide">
                    <div class="image-layer"
                        style="background-image: url({{$s->rute_img_slider}});">
                    </div>
                    <div class="image-layer-overlay"></div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="main-slider__content">
                                    <div class="main-slider-two__map"
                                        style="background-image: url({{ $s->rute_img_slider }});">
                                    </div>
                                    <h3>{{$s->tit_slider}}</h3>
                                    <h2><span>{{$s->tit_des_slider}}</span></h2>
                                    <p>{{$s->desc_slider}}</p>
                                    <a href="{{$s->url_btn_slider}}" class="thm-btn">{{$s->txt_btn_slider}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- If we need navigation buttons -->
        <div class="swiper-pagination" id="main-slider-pagination"></div>
        <div class="main-slider__nav-two">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i
                    class="icon-right-arrow icon-left-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i
                    class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>

