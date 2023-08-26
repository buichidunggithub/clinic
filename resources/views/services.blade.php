<!-- resources/views/child.blade.php -->

@extends('layouts.website')

@section('title', 'Services')

@section('content')
    <div class="master-wrapper-content">
        <div class="master-column-wrapper">
            <div class="center-1">
                <style>
                    .service-content .service-list .service-item {
                        display: -webkit-box;
                        display: -ms-flexbox;
                        display: inline-block;
                        background: #eff3f6;
                        padding: 15px;
                        margin-bottom: 15px;
                        border-radius: 6px;
                        width: 100%;
                    }

                    .service-content .service-list .service-item .service-img {
                        float: left;
                    }

                    .conto {
                        margin-top: 50px;
                        margin-bottom: 50px;
                    }
                </style>
                <main>
                    <!-- ////////////BANNER//////////////// -->
                    <div class="main-banner">
                        <img class="img-fluid"
                            src="images/thumbs/1920x450.png" />
                    </div>
                    <!--////////////// /. BANNER////////// -->
                    <div class="service-content new-service-page">
                        <div class="sub-breadcrumb">
                            <div class="container">
                                <img src="assets/img/icon/hospital_ico.svg" />
                                <span>Services</span>
                            </div>
                        </div>
                        <div class="container">
                            <div class="conto">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="left-sidebar">
                                            <img class="img-fluid" src="images/thumbs/1024x600.png" />
                                            <div id="sidebar-wrapper" class="sidebar-toggle">
                                                <ul class="sidebar-nav">
                                                    <li>
                                                        <h4>Services Name</h4>
                                                    </li>
                                                    @for ($i = 0; $i <= 5; $i++)
                                                        <li>
                                                            <a href="service-{{$i}}"><img
                                                                    src="assets/img/icon/arrow-double.svg" />Lorem Ipsum {{$i}}</a>
                                                        </li>
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12">
                                        <div class="service-list">
                                            <div class="container nopadding">
                                                <div class="service-item">
                                                    <img class="service-img"
                                                        src="images/thumbs/1024x600.png" />
                                                    <div>
                                                        <h4 class="news-title cursor-pointer"
                                                            onclick='followLink("")'>Lorem Ipsum is simply dummy text of the printing and typesetting industry
                                                        </h4>
                                                        <p>
                                                            - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                                            - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                                        </p>
                                                        <a href="" class="btn-detail"><span>MORE DETAIL</span><img style="margin-left: 5px"
                                                                src="/assets/img/icon/arrow-circle.svg" /></a>
                                                    </div>
                                                </div>
                                                <nav class="pagination-container">
                                                    <div class="pagination"></div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
