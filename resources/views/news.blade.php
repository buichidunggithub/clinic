<!-- resources/views/child.blade.php -->

@extends('layouts.website')

@section('title', 'News')

@section('content')
    <div class="master-wrapper-content">
        <div class="master-column-wrapper">
            <div class="center-1">
                <style>
                    .about-page {
                        padding: 0;
                    }
                </style>
                <main>
                    <div class="news-content">
                        <!-- ////////////BANNER//////////////// -->
                        <div class="main-banner">
                            <img class="img-fluid"
                                src="images/thumbs/1920x450.png" />
                        </div>
                        <!--////////////// /. BANNER////////// -->
                        <!-- NEWS CONTENT -->
                        <div class="news-content">
                            <div class="sub-breadcrumb">
                                <div class="container">
                                    <img src="assets/img/icon/hospital_ico.svg" />
                                    <span>News</span>
                                </div>
                            </div>
                            <div class="news-list">
                                <div class="container">
                                    <input type="hidden" id="current_page" />
                                    <input type="hidden" id="show_per_page" />
                                    <div id="pagingBox">

                                        @for ($i = 0; $i <= 20; $i++)
                                            <div class="news-item">
                                                <div class="display-flex">
                                                    <img class="news-img cursor-pointer" src="images/thumbs/450x450.png"
                                                        alt="News" onclick="followLink('')">
                                                    <div>
                                                        <h4 class="news-title cursor-pointer"
                                                            onclick="followLink(&quot;phát-đồ-điều-trị-các-bệnh-sản-phụ-khoa-chuẩn-bộ-y-tế&quot;)">
                                                            Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry</h4>
                                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                            industry. Lorem Ipsum has been the industry's standard dummy
                                                            text ever since the 1500s</p>

                                                        <a href="/" class="btn btn-detail"><span>MORE
                                                                DETAIL</span><img style="margin-left: 5px;"
                                                                src="/assets/img/icon/arrow-circle.svg"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor

                                    </div>

                                    <div id="page_navigation"></div>
                                    <nav class="pagination-container">
                                        <div class="pagination">
                                            <div class="pagination-a">
                                                <ul style="display: flex;">
                                                    <li class="current-page"><span>1</span></li>
                                                    <li class="individual-page"><a
                                                            href="https://yourwebsite.com/news?pagenumber=2">2</a>
                                                    </li>
                                                    <li class="individual-page"><a
                                                            href="https://yourwebsite.com/news?pagenumber=3">3</a>
                                                    </li>
                                                    <li class="individual-page"><a
                                                            href="https://yourwebsite.com/news?pagenumber=4">4</a>
                                                    </li>
                                                    <li class="individual-page"><a
                                                            href="https://yourwebsite.com/news?pagenumber=5">5</a>
                                                    </li>
                                                    <li class="next-page"><a
                                                            href="https://yourwebsite.com/news?pagenumber=2">Next</a></li>
                                                    <li class="last-page"><a
                                                            href="https://yourwebsite.com/news?pagenumber=11">Last</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <script>
                    function followLink(link) {
                        console.log(
                            'window.location.origin + "/"+link',
                            window.location.origin + "/" + link
                        );
                        window.location.href = window.location.origin + "/" + link;
                    }
                    setTimeout(() => {
                        $(".pagination ul").css("display", "flex");
                    }, 1000);
                </script>
            </div>
        </div>
    </div>
@endsection
