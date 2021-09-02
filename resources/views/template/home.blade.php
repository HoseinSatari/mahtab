
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
{!! SEO::generate(true) !!}
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicons/favicon-16x16.png" />

    <meta name="description" content="Tevily HTML Template For Tour" />

    <!-- fonts -->



    <link rel="stylesheet" href="/assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="/assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="/assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="/assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="/assets/vendors/tevily-icons/style.css">
    <link rel="stylesheet" href="/assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="/assets/vendors/reey-font/stylesheet.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="/assets/vendors/twentytwenty/twentytwenty.css" />
    <link rel="stylesheet" href="/assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="/assets/vendors/vegas/vegas.min.css" />
    <link rel="stylesheet" href="/assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="/assets/vendors/timepicker/timePicker.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="/assets/css/tevily.css" />
    <link rel="stylesheet" href="/assets/css/tevily-responsive.css" />
</head>

<body>

<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header clearfix">
        @include('template.layout.top-menu')
        @include('template.layout.menu')
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <!--Main Slider Start-->
    <section class="main-slider">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

            @if(\App\Slider::where('is_active' , '1')->count())
            <div class="swiper-wrapper">
                @foreach(\App\Slider::where('is_active' , '1')->orderBy('order' , 'asc')->get() as $slider)
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{$slider->image}});"></div>
                    <div class="image-layer-overlay"></div>
                    <div class="container">
                        <div class="swiper-slide-inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    @if($slider->text)
                                    <h2> {{$slider->text}}</h2>
                                    @endif
                                        @if($slider->text2)
                                    <p>{{$slider->text2}}</p>
                                        @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>


            <div class="main-slider-nav">

                <div class="main-slider-button-next"><span class="icon-right-arrow"></span> </div>
                <div class="main-slider-button-prev"><span class="icon-right-arrow"></span></div>
            </div>

        </div>
    </section>

    <!--Tour Search Start-->
    <section class="tour-search">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tour-search-box">
                        <form class="tour-search-one" action="tour-sidebar.html">
                            <div class="tour-search-one__inner">
                                <div class="tour-search-one__inputs">
                                    <div class="tour-search-one__input-box">
                                        <label for="place">کجا می روید</label>
                                        <input type="text" placeholder="کلید واژه" name="place" id="place">
                                    </div>
                                    <div class="tour-search-one__input-box">
                                        <label>چه زمانی</label>
                                        <input type="text" placeholder="مرداد" name="when" id="datepicker">
                                    </div>
                                    <div class="tour-search-one__input-box tour-search-one__input-box-last">
                                        <label for="type">نوع</label>
                                        <select class="selectpicker" id="type">
                                            <option value="Adventure">ماجرایی</option>
                                            <option value="Wildlife">باغ وحش</option>
                                            <option value="Sightseeing">منظره</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="tour-search-one__btn-wrap">
                                    <button type="submit" class="thm-btn tour-search-one__btn">پیدا کن</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
    <!--Tour Search End-->



{{--    gallery villa--}}
    <section class="popular-tours">
        <div class="popular-tours__container">
            <div class="section-title text-center">

                <h2 class="section-title__title">  گالری ویلا</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="popular-tours__carousel owl-theme owl-carousel">
                        <li class="wow fadeInUp" data-wow-delay="100ms">
                            <div class="gallery-one__img-box">
                                <img src="assets/images/gallery/gallery-one-img-1.jpg" alt="">
                                <div class="gallery-one__iocn">
                                    <a class="img-popup" href="assets/images/gallery/gallery-one-img-1.jpg"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </li>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-1.jpg" style="height: 400px" alt="">
                            </div>

                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-2.jpg" style="height: 400px" alt="">
                            </div>

                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-3.jpg" style="height: 400px" alt="">
                            </div>

                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-4.jpg" style="height: 400px" alt="">
                            </div>

                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-5.jpg" style="height: 400px" alt="">
                            </div>

                        </div>
                        <div class="popular-tours__single">
                            <div class="popular-tours__img">
                                <img src="assets/images/resources/popular-tours__img-6.jpg" style="height: 400px" alt="">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Video One Start-->
    <section class="video-one">
        <div class="video-one-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
             style="background-image: url(/assets/images/backgrounds/video-one-bg.jpg)"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="video-one__left">
                        <div class="video-one__video-link">
                            <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="video-popup">
                                <div class="video-one__video-icon">
                                    <span class="icon-play-button"></span>
                                    <i class="ripple"></i>
                                </div>
                            </a>
                        </div>
                        <p class="video-one__tagline">آیا آماده سفر هستید؟</p>
                        <h2 class="video-one__title"> یک برنامه جهانیرزرو آنلاین تور جهانی است</h2>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="video-one__right">
                        <ul class="list-unstyled video-one__four-icon-boxes">
                            <li>
                                <div class="video-one__icon-box">
                                    <span class="icon-deer"></span>
                                </div>
                                <h4 class="video-one__icon-box-title"><a href="#">حیات وحش <br> تور</a></h4>
                            </li>
                            <li>
                                <div class="video-one__icon-box">
                                    <span class="icon-paragliding"></span>
                                </div>
                                <h4 class="video-one__icon-box-title"><a href="#">تفریحی<br> تور</a></h4>
                            </li>
                            <li>
                                <div class="video-one__icon-box">
                                    <span class="icon-flag"></span>
                                </div>
                                <h4 class="video-one__icon-box-title"><a href="#">ماجرایی <br> تور</a></h4>
                            </li>
                            <li>
                                <div class="video-one__icon-box">
                                    <span class="icon-hang-gliding"></span>
                                </div>
                                <h4 class="video-one__icon-box-title"><a href="#">هیجانی <br> تور</a></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Video One End-->


    <!--Testimonial One Start-->
    <section class="testimonial-one">
        <div class="testimonial-one-shape-2 float-bob-y">
            <img src="assets/images/shapes/testimonial-one-shape-2.png" alt="">
        </div>
        <div class="testimonial-one-shape-3 wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
            <img src="assets/images/shapes/testimonial-one-shape-3.png" alt="">
        </div>
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">توصیفات و بررسی ها</span>
                <h2 class="section-title__title">آنچه آنها می گویند</h2>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-one__carousel owl-theme owl-carousel">
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-one-img-1.png" alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-one-img-2.png" alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-one-img-3.png" alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-one-img-1.png" alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-one-img-2.png" alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-one-img-3.png" alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-one-img-1.png" alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-one-img-2.png" alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-one__single">
                            <div class="testimonial-one__img">
                                <img src="assets/images/testimonial/testimonial-one-img-3.png" alt="">
                            </div>
                            <div class="testimonail-one__content">
                                <div class="testimonial-one__top-revivew-box">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="testimonial-one__text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                                <div class="testimonial-one__client-info">
                                    <h3 class="testimonial-one__client-name">شرلی اسمیت</h3>
                                    <p class="testimonial-one__client-title">مشتری</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial One End-->

    <!--Gallery One Start-->
    <section class="gallery-one">
        <div class="gallery-one-bg" style="background-image: url(assets/images/shapes/gallery-map.png)"></div>
        <div class="gallery-one__container-box clearfix">
            <ul class="list-unstyled gallery-one__content clearfix">
                <li class="wow fadeInUp" data-wow-delay="100ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-1.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-1.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="200ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-2.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-2.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="300ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-3.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-3.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="400ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-4.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-4.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="500ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-5.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-5.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="400ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-4.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-4.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInUp" data-wow-delay="500ms">
                    <div class="gallery-one__img-box">
                        <img src="assets/images/gallery/gallery-one-img-5.jpg" alt="">
                        <div class="gallery-one__iocn">
                            <a class="img-popup" href="assets/images/gallery/gallery-one-img-5.jpg"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--Gallery Oned End-->

    <!--Why Choose Start-->
    <section class="why-choose">
        <div class="why-choose__container">
            <div class="why-choose__left">
                <div class="why-choose__left-bg"
                     style="background-image: url(assets/images/backgrounds/why-choose-left-bg.jpg)"></div>
                <div class="why-choose__toggle">
                    <p>تفریحی<br>  حیات وحش</p>
                </div>
            </div>
            <div class="why-choose__right">
                <div class="why-choose__right-map"
                     style="background-image: url(assets/images/shapes/why-choose-right-map.png)"></div>
                <div class="why-choose__right-content">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">لیست های سود ما</span>
                        <h2 class="section-title__title">چرا ما را انتخاب کنید</h2>
                    </div>
                    <p class="why-choose__right-text">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    <ul class="list-unstyled why-choose__list">
                        <li>
                            <div class="icon">
                                <span class="icon-travel"></span>
                            </div>
                            <div class="text">
                                <h4>حرفه ای و دارای گواهینامه</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-travel-map"></span>
                            </div>
                            <div class="text">
                                <h4>رزرو تورهای فوری را دریافت کنید</h4>
                                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--Why Choose End-->

    {{--   category by photo--}}
    <section class="destinations-one">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">لیست مقصد</span>
                <h2 class="section-title__title">به مکانهای عجیب و غریب بروید</h2>
            </div>
            <div class="row masonary-layout">
                <div class="col-xl-3 col-lg-3">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/destination-1-1.png" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a href="destinations-details.html">اسپانیا</a>
                                </h2>
                            </div>
                            <div class="destinations-one__button">
                                <a href="#">6 تور</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/destination-1-2.png" alt="">
                            <div class="destinations-one__content">
                                <p class="destinations-one__sub-title">حیات وحش</p>
                                <h2 class="destinations-one__title"><a href="destinations-details.html">اسپانیا</a>
                                </h2>
                            </div>
                            <div class="destinations-one__button">
                                <a href="#">6 تور</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/destination-1-3.png" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a href="destinations-details.html">اسپانیا</a>
                                </h2>
                            </div>
                            <div class="destinations-one__button">
                                <a href="#">6 تور</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/destination-1-4.png" alt="">
                            <div class="destinations-one__content">
                                <h2 class="destinations-one__title"><a
                                        href="destinations-details.html">اسپانیا</a></h2>
                            </div>
                            <div class="destinations-one__button">
                                <a href="#">6 تور</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="destinations-one__single">
                        <div class="destinations-one__img">
                            <img src="assets/images/destination/destination-1-5.png" alt="">
                            <div class="destinations-one__content">
                                <p class="destinations-one__sub-title">حیات وحش</p>
                                <h2 class="destinations-one__title"><a
                                        href="destinations-details.html">اسپانیا</a></h2>
                            </div>
                            <div class="destinations-one__button">
                                <a href="#">6 تور</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--News One Start-->
    <section class="news-one">
        <div class="container">
            <div class="news-one__top">
                <div class="row">
                    <div class="col-xl-9 col-lg-9">
                        <div class="news-one__top-left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">از پست وبلاگ</span>
                                <h2 class="section-title__title">اخبار و مقالات</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="news-one__top-right">
                            <a href="news-details.html" class="news-one__btn thm-btn">دیدن همه </a>                            </div>
                    </div>
                </div>
            </div>
            <div class="news-one__bottom">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="assets/images/blog/news-one-img-1.jpg" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>مرداد</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title">
                                    <a href="news-details.html">سفر به زیباترین مکانهای جهان</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="assets/images/blog/news-one-img-2.jpg" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>مرداد</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title">
                                    <a href="news-details.html">سفر به زیباترین مکانهای جهان</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <!--News One Single-->
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <img src="assets/images/blog/news-one-img-3.jpg" alt="">
                                <a href="news-details.html">
                                    <span class="news-one__plus"></span>
                                </a>
                                <div class="news-one__date">
                                    <p>28 <br> <span>مرداد</span></p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <ul class="list-unstyled news-one__meta">
                                    <li><a href="news-details.html"><i class="far fa-user-circle"></i>مدیر</a></li>
                                    <li><a href="news-details.html"><i class="far fa-comments"></i>2 نظر</a>
                                    </li>
                                </ul>
                                <h3 class="news-one__title">
                                    <a href="news-details.html">سفر به زیباترین مکانهای جهان</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News One End-->

    <!--Site Footer One Start-->
    <footer class="site-footer">
        <div class="site-footer__top">
            <div class="container">
                <div class="site-footer__top-inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <a href="index.html"><img src="assets/images/resources/footer-logo.png"
                                                              alt=""></a>
                                </div>
                                <p class="footer-widget__about-text">به آژانس سفر و تور ما خوش آمدید. لورم به سادگی متن  را ارسال می کند.</p>
                                <ul class="footer-widget__about-contact list-unstyled">
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone-square-alt"></i>
                                        </div>
                                        <div class="text">
                                            <a href="tel:09162352304">09162352304</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <a href="mailto:setinco@gmail.com">setinco@gmail.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="text">
                                            <p>ایران یزد خیابان مطهری</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__company clearfix">
                                <h3 class="footer-widget__title">شرکت</h3>
                                <ul class="footer-widget__company-list list-unstyled">
                                    <li><a href="about.html">درباره ما</a></li>
                                    <li><a href="#">وبلاگ</a></li>
                                    <li><a href="#">جوایز</a></li>
                                    <li><a href="#">همکاری با ما</a></li>
                                    <li><a href="#">گروه را ملاقات کن</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__explore">
                                <h3 class="footer-widget__title">بیشتر</h3>
                                <ul class="list-unstyled footer-widget__explore-list">
                                    <li><a href="#">حساب</a></li>
                                    <li><a href="#">مجوز</a></li>
                                    <li><a href="#">تماس با ما</a></li>
                                    <li><a href="#">مشارکت</a></li>
                                    <li><a href="#">حریم خصوصی</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__newsletter">
                                <h3 class="footer-widget__title">خبر نامه</h3>
                                <form class="footer-widget__newsletter-form mc-form"
                                      data-url="">
                                    <div class="footer-widget__newsletter-input-box">
                                        <input type="email" placeholder="آدرس ایمیل" name="EMAIL">
                                        <button type="submit"
                                                class="footer-widget__newsletter-btn">عضویت شما </button>
                                    </div>
                                </form>
                                <div class="mc-form__response text-center"></div><!-- /.mc-form__response -->
                                <div class="footer-widget__newsletter-bottom">
                                    <div class="footer-widget__newsletter-bottom-icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="footer-widget__newsletter-bottom-text">
                                        <p>من با تمام شرایط و قوانین موافقم</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <div class="site-footer__bottom-left">
                                <div class="footer-widget__social">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="site-footer__bottom-right">
                                <p>تمامی حقوق محفوظ است <a href="#">گروه ستین</a></p>
                            </div>
                            <div class="site-footer__bottom-left-arrow">
                                <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Site Footer One End-->


</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" width="155"
                                                              alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:setinco@gmail.com">setinco@gmail.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">09162352304</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->


<!-- /.search-popup -->




<script src="/assets/vendors/jquery/jquery-3.6.0.min.js"></script>
<script src="/assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendors/jarallax/jarallax.min.js"></script>
<script src="/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="/assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="/assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="/assets/vendors/nouislider/nouislider.min.js"></script>
<script src="/assets/vendors/odometer/odometer.min.js"></script>
<script src="/assets/vendors/swiper/swiper.min.js"></script>
<script src="/assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="/assets/vendors/wnumb/wNumb.min.js"></script>
<script src="/assets/vendors/wow/wow.js"></script>
<script src="/assets/vendors/isotope/isotope.js"></script>
<script src="/assets/vendors/countdown/countdown.min.js"></script>
<script src="/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="/assets/vendors/twentytwenty/twentytwenty.js"></script>
<script src="/assets/vendors/twentytwenty/jquery.event.move.js"></script>
<script src="/assets/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="/assets/vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/assets/vendors/vegas/vegas.min.js"></script>
<script src="/assets/vendors/jquery-ui/jquery-ui.js"></script>
<script src="/assets/vendors/timepicker/timePicker.js"></script>
<script src="/assets/vendors/bootstrap-datepicker.min.js"></script>
<script src="/assets/vendors/bootstrap-datepicker.fa.min.js"></script>




<!-- template js -->
<script src="/assets/js/tevily.js"></script>
</body>

</html>
