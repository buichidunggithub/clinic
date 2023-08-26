<!-- resources/views/child.blade.php -->

@extends('layouts.website')

@section('title', 'Recruitment')

@section('content')
    <main>
        <div class="recruit-page">
            <!-- ////////////BANNER//////////////// -->
            <div class="main-banner">
                <img class="img-fluid" src="images/thumbs/1920x450.png" />
            </div>
            <!--////////////// /. BANNER////////// -->
            <div class="recruit-content">
                <div class="sub-breadcrumb">
                    <div class="container">
                        <img src="assets/img/icon/hospital_ico.svg" /> <span>Recruitment Information</span>
                    </div>
                </div>
                <div class="container conto">
                    <div class="tab-vertical">
                        <div class="row">
                            <!-- recruit-content left -->
                            <div class="col-lg-3 col-md-12">
                                <div class="recruit-content-left">
                                    <div class="label">
                                        <span>ALL DEPARTMENTS</span>
                                    </div>
                                    <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                        @for ($index = 0; $index <= 5 ; $index++)
                                        <li class="nav-item"> <a class="nav-link " data-id="10" id="home-vertical-tab-{{$index}}"
                                            href="lorem-ipsum-{{$index}}" role="tab"
                                            aria-controls="home" aria-selected="true"><i
                                                class="fas fa-chevron-right"></i>Lorem Ipsum {{$index}}</a> </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>
                            <!-- /. recruit-content left -->
                            <!-- recruit-content right -->
                            <div class="col-lg-9 col-md-12">
                                <div class="recruit-content-right">
                                    <div class="tab-content" id="myTabContent3">
                                        <div class="tab-pane fade show active" id="home-vertical" role="tabpanel"
                                            aria-labelledby="home-vertical-tab">
                                            <div class="table-responsive text-nowrap">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th>POSITION</th>
                                                            <th>QUANTITY</th>
                                                            <th>APPLY</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="index.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></td>
                                                            <td><b>2</b></td>
                                                            <td><a href="index.html" class="btn-stroke-red">Apply</a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><a href="index.html">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></td>
                                                            <td><b>0</b></td>
                                                            <td><a href="index.html" class="btn-stroke-red">Apply</a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id='page_navigation'></div>
                                <nav class="pagination-container">
                                    <div class="pagination">
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
    </main>
@endsection
