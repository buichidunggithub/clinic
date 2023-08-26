<!DOCTYPE html>
<html lang="en" class="html-home-page">

@extends('layouts.website')

@section('title', 'About')

@section('content')
    <div class="master-wrapper-page">
        <div class="master-wrapper-content">
            <div class="master-column-wrapper">
                <div class="center-1">
                    <style>
                        .about-page {
                            padding: 0;
                        }

                        @media screen and (max-width : 480px) {
                            .tab-content-item .video iframe {
                                width: 100%;
                            }
                        }
                    </style>
                    <main>
                        <!-- ////////////BANNER//////////////// -->
                        <div class="main-banner">
                            <img class="img-fluid" src="images/thumbs/1920x450.png" />
                        </div>
                        <!--////////////// /. BANNER////////// -->
                        <!-- TAB CONTENT -->
                        <div class="about-page">
                            <ul class="nav nav-pills mb-3 shadow-sm" id="pills-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                        href="#tb01" role="tab" aria-controls="pills-home"
                                        aria-selected="true">VISION</a> </li>
                                <li class="nav-item"> <a class="nav-link" id="pills-tab02" data-toggle="pill" href="#tb02"
                                        role="tab" aria-controls="pills-profile" aria-selected="false">MISSION</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" id="pills-tab03" data-toggle="pill" href="#tb03"
                                        role="tab" aria-controls="pills-contact" aria-selected="false">CORE VALUES</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" id="pills-tab04" data-toggle="pill" href="#tb04"
                                        role="tab" aria-controls="pills-contact" aria-selected="false">WHY YOUR NAME</a>
                                </li>
                            </ul> <!-- content -->
                            <div class="container">
                                <div class="tab-content" id="pills-tabContent p-3">
                                    <!-- VISION -->
                                    <div class="tab-pane fade show active" id="tb01" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <div class="tab-item">
                                            <div class="title-tab">
                                                <h4>
                                                    <span class="tb-icon">
                                                        <img src="assets/img/icon/focus.png" />
                                                    </span>VISION
                                                </h4>
                                            </div>
                                            <div class="tab-content-item">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- MISSION -->
                                    <div class="tab-pane fade" id="tb02" role="tabpanel" aria-labelledby="pills-tab02">
                                        <div class="tab-item">
                                            <div class="title-tab">
                                                <h4>
                                                    <span class="tb-icon">
                                                        <img src="assets/img/icon/focus.png" />
                                                    </span>MISSION
                                                </h4>
                                            </div>
                                            <div class="tab-content-item">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--CORE VALUES-->
                                    <div class="tab-pane fade third" id="tb03" role="tabpanel"
                                        aria-labelledby="pills-tab03">
                                        <div class="tab-item">
                                            <div class="title-tab">
                                                <h4>
                                                    <span class="tb-icon">
                                                        <img src="assets/img/icon/focus.png" />
                                                    </span>CORE VALUES
                                                </h4>
                                            </div>
                                            <div class="tab-content-item">
                                                <h2>“ A – B – C “</h2>
                                                <h4>1. A:</h4>
                                                <p>- Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                                <p>- Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                                <p>- Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                                <h4>2. B:</h4>
                                                <p> </p>
                                                <p>- Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                                <p>- Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                                <p>- Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                                <p> </p>
                                                <h4>3. C:</h4>
                                                <p>- Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                                <p>- Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                                <p>- Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- WHY YOUR NAME -->
                                    <div class="tab-pane fade third" id="tb04" role="tabpanel"
                                        aria-labelledby="pills-tab04">
                                        <div class="tab-item">
                                            <div class="title-tab">
                                                <h4>
                                                    <span class="tb-icon">
                                                        <img src="assets/img/icon/focus.png" />
                                                    </span>WHY YOUR NAME
                                                </h4>
                                            </div>
                                            <div class="tab-content-item">
                                                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s</em>.</h4>
                                                <h4>1. Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry:</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                                <p> </p>
                                                <h4>2. Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry:
                                                </h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                                <p> </p>
                                                <h4>3. Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry:</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                    since the 1500s.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-item">
                                    <div class="title-tab">
                                        <h4>
                                            <span class="tb-icon">
                                                <img src="assets/img/icon/email.png" />
                                            </span>RELATED ARTICLES
                                        </h4>
                                    </div>
                                    <div class="tab-content-item">
                                    </div>
                                </div>
                                <div class="tab-item">
                                    <div class="title-tab">
                                        <h4>
                                            <span class="tb-icon">
                                                <img src="assets/img/icon/video-files.png" />
                                            </span>VIDEO
                                        </h4>
                                    </div>
                                    <div class="tab-content-item">
                                        <div class=" video">

                                            <iframe width="80%" height="448" src="https://www.youtube.com/embed/"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection

</html>
