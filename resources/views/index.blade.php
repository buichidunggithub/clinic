<!DOCTYPE html>
<html lang="en">

@extends('layouts.website')

@section('title', 'Home Page')
@section('content')
    <div class="master-wrapper-page">
        <div class="master-wrapper-content">
            <div class="master-column-wrapper">
                <div class="center-1">
                    <style>
                        .news-list-image {
                            width: 25px !important;
                            height: 25px !important;
                        }

                        .news-item-info a {
                            display: flex;
                            flex-direction: row;
                            flex-wrap: nowrap;
                            align-content: flex-start;
                            justify-content: flex-start;
                            align-items: flex-start;
                        }

                        h5,
                        h4 {
                            text-align: justify;
                        }

                        .news-list-wraper {
                            margin-left: 5px;
                        }

                        .video-item {
                            margin-top: 10px;
                        }

                        .insurance-item img {
                            max-height: 100px;
                            height: auto;
                            object-fit: cover;
                        }

                        .about-low-area .package .package-item img {
                            min-width: 255px;
                        }

                        .slider-area img {
                            object-fit: fill;
                        }

                        .slider-area .slider,
                        .slider-area .slider>div {
                            height: auto;
                        }

                        @media screen and (max-width : 480px) {
                            .about-low-area .package .package-item img {
                                height: 265px;
                            }

                            .slider-area .slider,
                            .slider-area .slider>div {
                                height: 200px;
                                width: auto;
                            }

                            .slider-area .slider>ul>li {
                                display: none;
                            }

                            .slider-area img {
                                width: 100%;
                                height: 100%;
                                object-fit: contain;
                                background-color: white;
                            }

                            .about-low-area .package .package-item img {
                                min-width: 385px;
                            }
                        }

                        .about-low-area .package .package-item .package-content .des h5 {
                            margin-left: 40px;
                            margin-bottom: 10px;
                            font-size: 16px;
                        }

                        .about-low-area .package .package-item .package-content .des {
                            display: flex;
                            flex-direction: column;
                            flex-wrap: wrap;
                            align-content: center;
                            justify-content: center;
                            align-items: center;
                        }

                        @media screen and (max-width: 480px) {
                            .clinic-info {
                                margin-top: 20px;
                            }

                            .slider-faculty-mini {
                                display: none;
                            }

                            .slider .left,
                            .slider .right {
                                display: none;
                            }
                        }

                        .doctor-info {
                            background-image: url('images/thumbs/1920x450.png') !important;
                        }

                        .vendor-area {
                            background-image: url('images/thumbs/1920x450.png') !important;
                        }

                        @media screen and (max-width: 480px) {
                            .doctor-info {
                                background-image: url('images/thumbs/450x450.png') !important;
                            }

                            .vendor-area {
                                background-image: url('images/thumbs/450x450.png') !important;
                                background-size: contain;
                                padding-top: 100%;
                            }
                        }

                        .slider-mobile {
                            display: none;
                        }

                        @media screen and (max-width: 480px) {
                            .slider-mobile {
                                display: block;
                            }

                            .slider-desktop {
                                display: none;
                            }
                        }

                        @media screen and (min-width: 370px) and (max-width: 380px) {
                            .about-low-area .package .package-item .package-content {
                                right: 30px;
                            }
                        }

                        @media screen and (min-width: 768px) and (max-width: 768px) {
                            .carousel-inner {
                                width: 140%;
                            }
                        }

                        @media screen and (min-width: 540px) and (max-width: 540px) {
                            .carousel-inner {
                                width: 94%;
                            }
                        }
                    </style>
                    <main>
                        <!--? //////////////////slider Area Start/////////////////////-->
                        <div class="slider-area position-relative slider-desktop">
                            <!-- Slider 1 -->
                            <div class="slider" id="slider1">
                                <!-- Slides -->
                                <div class="cursor-pointer" onclick="followLink('')">
                                    <img id="slider-picture" src="images/thumbs/1920x450.png" />
                                </div>
                                <div class="cursor-pointer" onclick="followLink('')">
                                    <img id="slider-picture" src="images/thumbs/1920x450.png" />
                                </div>
                                <div class="cursor-pointer" onclick="followLink('')">
                                    <img id="slider-picture" src="images/thumbs/1920x450.png" />
                                </div>

                            </div>
                        </div>
                        <div class="slider-area position-relative slider-mobile">
                            <!-- Slider 1 -->
                            <div class="slider" id="slider1">
                                <!-- Slides -->
                                <!-- The Arrows -->
                                <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg
                                        viewBox="0 0 100 100">
                                        <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path>
                                    </svg></i>
                                <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg
                                        viewBox="0 0 100 100">
                                        <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"
                                            transform="translate(100, 100) rotate(180) "></path>
                                    </svg></i>

                            </div>
                        </div>
                        <div class="slider-bottom slider-faculty-mini">
                            <div class="container">
                                <div class="items">
                                    @for ($i = 1; $i <= 10; $i++)
                                        <div class="slider-item cursor-pointer" style="min-height: 60px;"
                                            onclick="followLink('lorem-ipsum-{{ $i }}')">
                                            <img class="icon-img home-slider-icon" src="images/thumbs/450x450.png"
                                                alt="Lorem Ipsum {{ $i }}" /><span data-id=''>Lorem Ipsum
                                                {{ $i }}</span>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <!--////////////////////// Doctor Area/////////////////// -->
                        <section class="doctor-area">
                            <div class="doctor-info text-center pt70">
                            </div>
                            <div class="doctor-list">
                                @foreach (range(1, 4) as $index)
                                    <div class="doctor-item bg-light">
                                        <img class="img-fluid" src="images/thumbs/450x450.png" alt="bac-si" />
                                        <div class="info">
                                            <label class=>Specialist Name {{ $index }}</label>
                                            <p><span class="text-blue">Who</span>: Lorem Ipsum is simply dummy text of
                                                the printing and typesetting industry</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            <p><span class="text-blue">Experience:</span> Lorem Ipsum is simply dummy text
                                                of the printing and typesetting industry</p>
                                            <div>
                                                <a href="dat-kham" class="btn-green">Booking</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="text-center mtb50"><a class="btn-stroke" href="bac-si">All </a>
                                <img src="assets/img/icon/right-arrow-blue.svg" alt="thong-tin-bac-si" />
                            </div>
                        </section>
                        <!-- /////////////////Doctor Area End////////////////// -->

                        <!-- hospital fee Area start -->
                        <section class="insurance-area vendor-area">
                            <div class="container">
                            </div>
                        </section>
                        <!-- ///////////////hospital fee Area End//////////////// -->
                        <!--///////////////////////// RSS //////////////////////-->
                        <section class="rss-area gray-bg">
                            <div class="container">
                                <div class="rss-list display-flex">
                                    <div class="col-md-6">
                                        <div class="rss-title">
                                            <h3 class="section-title">INFORMATION</h3>
                                            <a target="_blank" href="lorem-ipsum"><img src="assets/img/icon/rss.svg"
                                                    alt="thong-tin-rss" /></a>
                                        </div>
                                        <a class="rss-box" target="_blank" href="lorem-ipsum">
                                            <img src="images/thumbs/450x450.png" class="img-fluid rss-img" alt="rss-img" />
                                            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            </h4>
                                        </a>
                                        <ul>
                                            <li><a target="_blank" href="lorem-ipsum-1">Lorem Ipsum is simply dummy text of
                                                    the printing and typesetting industry</a></li>
                                            <li><a target="_blank" href="lorem-ipsum-2">Lorem Ipsum is simply dummy text of
                                                    the printing and typesetting industry</a></li>
                                            <li><a target="_blank" href="lorem-ipsum-3">Lorem Ipsum is simply dummy text of
                                                    the printing and typesetting industry</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6 clinic-info">
                                        <div class="rss-title">
                                            <h3 class="section-title">INFORMATION</h3>
                                            <a target="_blank" href="http://www.medinet.hochiminhcity.gov.vn"><img
                                                    src="assets/img/icon/rss.svg" alt="thong-tin-rss" /></a>
                                        </div>
                                        <a target="_blank" class="rss-box" href="lorem-ipsum">
                                            <img src="images/thumbs/450x450.png" class="img-fluid rss-img"
                                                alt="rss-img" />
                                            <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                            </h4>
                                        </a>
                                        <ul>
                                            <li><a target="_blank" href="lorem-ipsum-1">Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry</a></li>
                                            <li><a target="_blank" href="lorem-ipsum-2">Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry</a></li>
                                            <li><a target="_blank" href="lorem-ipsum-3">Lorem Ipsum is simply dummy text
                                                    of the printing and typesetting industry</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </section>
                        <!-- ///////////////////// RSS End///////////////// -->
                        <!--//////////////////// news tart/////////////////// -->
                        <section class="news-area">
                            <div class="container">
                                <div class="rss-title">
                                    <h3 class="section-title">OTHERS</h3>
                                    <img src="assets/img/icon/rss.svg" />
                                </div>
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 video-content">
                                        <div class=" video">
                                            <div class="thumbnail other-news-thumb">
                                                <a><img src="images/thumbs/450x450.png" class="img-video-lg"
                                                        alt="NEWS">
                                                    <h4 class="justify hotnews-short" style="margin-top: 10px;"></h4>
                                                    <p class="justify hotnews-short" style="text-align: justify;"></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 news-list">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="video-container">
                            <div class="container">
                                <h3 class="section-title"><img src="assets/img/icon/camera.svg"
                                        alt="video-icon" />Communication </h3><br>
                                <div class="row">
                                </div>

                            </div>
                </div>
                </section>
                <!-- ////////////////////news form End /////////////////////-->
                </main>
                <script>
                    // set slider height auto
                    let documentWidth = document.getElementsByClassName('master-wrapper-page')[0].offsetWidth
                    let pic = document.getElementById('slider-picture')
                    let slider1 = document.getElementById('slider1')
                    let height = pic.height

                    if (pic.height <= 0) {
                        if (documentWidth <= 1366) {
                            height = 460
                        } else if (documentWidth <= 1600) {
                            height = 560
                        } else {
                            height = 640
                        }
                        setTimeout(() => {
                            pic = document.getElementById('slider-picture')
                            slider1.setAttribute("style", `height:${height}px`);
                            // console.log('re-set pic height', pic.height)
                        }, 800)
                    }

                    slider1.setAttribute("style", `height:${height}px`);
                    // console.log(`set slider height: ${slider1.offsetHeight} by pic ${pic.height}`)
                </script>

                <script>
                    setTimeout(() => {
                        $('.popup__close-btn').click(() => {
                            ls.set('popup-closed', true, {
                                ttl: 7 * 60
                            }) // 7 mins
                            $('.popup-news').modal('hide')
                        })
                        const isClosed = ls.get('popup-closed')
                        if (!isClosed) {
                            $('.popup-news').modal('show')
                        }
                        window.$ = $
                    }, 1000)
                </script>
            </div>
        </div>
    </div>
    
@endsection

</html>
