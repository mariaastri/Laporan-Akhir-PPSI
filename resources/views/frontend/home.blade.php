@extends('layouts.frontend')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="mb-5">
    <div class="container">
        <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/banner4.png') }}">
            <div class="hero__text">
                <span>HOMEMADE</span>
                <h2>Makanan <br> Tradisional</h2>
                <p>Rasanya nggak perlu diragukan lagi. <br> Pokoknya jempolan!
                </p>
                <a href="#" class="btn btn-success">BELANJA SEKARANG</a>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Categories Section Begin -->
<section class="categories mt-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Proses Pembuatan Tempe</h2>
                </div>
            </div>
            <div class="categories__slider owl-carousel">
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cattt-1.jpeg') }}">
                        <h5><a href="#">Pembersihan</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cattt-2.jpeg') }}">
                        <h5><a href="#">Perendaman</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cattt-3.jpeg') }}">
                        <h5><a href="#">Pengeringan</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cattt-4.jpeg') }}">
                        <h5><a href="#">Fermentasi</a></h5>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="{{ asset('frontend/img/categories/cattt-5.jpeg') }}">
                        <h5><a href="#">Tempe SIAP</a></h5>
                    </div>
                </div>                
            </div>
            <div>
                <p1></p1>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            
            </div>
        </div>
<!-- Featured Section End -->
@endsection