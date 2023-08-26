<!-- resources/views/child.blade.php -->

@extends('layouts.website')

@section('title', 'People')


@section('content')
    <main>
        <!-- ////////////BANNER//////////////// -->
        <div class="main-banner">
            <img class="img-fluid" src="images/thumbs/1920x450.png" />
        </div>
        <!--////////////// /. BANNER////////// -->
        <div class="doctor-page">
            <div class="sub-breadcrumb">
                <div class="container">
                    <img src="assets/img/icon/hospital_ico.svg" /> <span>CHUYÊN GIA - BÁC SĨ</span>
                </div>
            </div>
            <div class="doctor-content">
                <div class="doctor-area">
                    <div class="doctor-list">
                        @for ($i = 0; $i <= 20; $i++)
                            <div class="doctor-item bg-light">
                                <img class="img-fluid" src="images/thumbs/450x450.png"
                                    alt="images/thumbs/450x450.png" />
                                <div class="info">
                                    <label>Specialize</label>
                                    <p class='doctor-title'><span class="text-blue">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    <p class='doctor-specialize'><span class="text-blue">Specialize</span>: </p>
                                    <p><span class="text-blue">Experience:</span> Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    <p class='doctor-specialize'><span class="text-blue">Working time</span>: </p>
                                    <div>
                                        <a href="dat-kham" class="btn-green">Booking</a>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <!-- PAGINATION -->
                    <div id='page_navigation'></div>
                    <nav class="pagination-container">
                        <div class="pagination">
                            <div class="pagination-a">
                                <ul>
                                    <li class="current-page"><span>1</span></li>
                                    <li class="individual-page"><a href="bac-si?pagenumber=2">2</a></li>
                                    <li class="individual-page"><a href="bac-si?pagenumber=3">3</a></li>
                                    <li class="next-page"><a href="bac-si?pagenumber=2">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!--END PAGINATION -->
                </div>
                <!--////////// VIDEO ////////////-->
                <div class="container">
                    <div class="tab-item">
                        <div class="title-tab">
                            <h4>
                                <span class="tb-icon">
                                    <img src="assets/img/icon/video-files.png" />
                                </span>VIDEO
                            </h4>
                        </div>
                        <div class="center tab-content-item mb-50">
                            <div class=" video">
                                <iframe width="80%" height="448" src="https://www.youtube.com/embed/"
                                    title="Video youtube" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <!--////////// VIDEO ////////////-->
            </div>
        </div>
    </main>
@endsection
