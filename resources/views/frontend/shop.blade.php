@extends('layouts.frontend')

@section('content')
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('frontend/img/breadcrumb2.png') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="breadcrumb__text">
          <h2></h2>
          <div class="breadcrumb__option">
            <a href="./index.html">Home</a>
            <span>Shop</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product fluid">
  <div class="row justify-content-center" id="list-product">
    @foreach($data as $data)
    <div class="col-lg-3 col-md-4 col-sm-6">
      <div class="featured__item">
        {{-- <div class="image"> --}}
          {{-- <div class="bg"></div> --}}
          <img class="img-fluid mb-3 rounded-20" src="{{asset('img/' . $data->image) }}" alt="">
          {{--
        </div> --}}
        <div class="topic">
          <h3>
            {{ $data->name }}
          </h3>
          <div class="d-flex justify-content-between">
            <div class="harga">
              <small>Price</small>
              <p>Rp. {{ number_format($data->harga) }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</section>
<section class="product fluid">
<div class="container center">
          <div class="row">
            <div class="col-lg-9 col-md-7">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="{{ asset('frontend/img/product/productt-2.jpeg') }}">
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Tempe</a></h6>
                      <h5>Rp. 4.000</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="{{ asset('frontend/img/product/productt-1.jpeg') }}"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Tempe Goreng</a></h6>
                      <h5>Rp. 4.500</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="{{ asset('frontend/img/product/productt-3.jpg') }}"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Ragi Tempe</a></h6>
                      <h5>Rp. 15.000</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="{{ asset('frontend/img/product/productt-4.jpg') }}"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Kedelai</a></h6>
                      <h5>Rp. 23.000</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="{{ asset('frontend/img/product/productt-5.jpg') }}"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Plastik Tempe</a></h6>
                      <h5>Rp. 20.000</h5>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                  <div class="product__item">
                    <div
                      class="product__item__pic set-bg"
                      data-setbg="{{ asset('frontend/img/product/productt-6.jpeg') }}"
                    >
                      <ul class="product__item__pic__hover">
                        <li>
                          <a href="#"><i class="fa fa-shopping-cart"></i></a>
                        </li>
                      </ul>
                    </div>
                    <div class="product__item__text">
                      <h6><a href="#">Daun Pisang</a></h6>
                      <h5>Rp. 8.000</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>
<!-- Product Section End -->
@endsection