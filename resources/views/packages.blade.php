<!-- resources/views/child.blade.php -->

@extends('layouts.website')

@section('title', 'Packages')

@section('content')
<div class="package-page">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="filter-top col-12">
                            <div class="text-md-left float-md-left">
                                <h5>PACKAGES</h5>
                            </div>
                            <div class="dropdown float-right">
                                <label class="mr-2">Show results:</label>
                                <a class="btn btn-lg btn-light dropdown-toggle"
                                    style="color: black;text-transform: inherit;" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">Increase<span class="caret"></span></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown"
                                    x-placement="bottom-start"
                                    style="position: absolute; transform: translate3d(71px, 48px, 0px); top: 0px; left: 0px; will-change: transform;">
                                    <a class="dropdown-item" href="goi-kham?command.OrderBy=10">Increase</a>
                                    <a class="dropdown-item" href="goi-kham?command.OrderBy=11">Decrease</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- LIST PACKEGE -->
                    <div class="row package-list">
                        @for ($i = 0; $i <= 20; $i++)
                            <div class="col-xs-12 col-md-6 col-lg-4 mb-3">
                                <div class="card h-100 border-0 package-item">
                                    <a href="package-{{$i}}">
                                        <div class="card-img-top">
                                            <span class="product-price">
                                                -8%
                                            </span>
                                            <img class="package-img"
                                                src="images/thumbs/450x450.png"
                                                class="img-fluid d-block" alt="Card image cap">
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">
                                                <a href="package-{{$i}}"
                                                    class=" font-weight-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</a>
                                            </h4>
                                            <h5 class="card-price">
                                                <s>$6,683,000.00</s>
                                                <span>$6,192,000.00</span>
                                            </h5>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endfor
                    </div>
                    <!-- PAGINATION -->
                    <div id='page_navigation'></div>
                    <nav class="pagination-container">
                        <div class="pagination">
                        </div>
                    </nav>
                    <!--END PAGINATION -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
