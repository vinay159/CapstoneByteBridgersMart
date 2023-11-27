@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{  asset('css/order_confirm.css') }}">
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}">
@endsection

@section('content')
    <div class="container px-4 px-lg-5 mt-5">
        <div class="wrapper wrapper-content animated fadeInRight mt-5 mg_b_40 wrapper_font_s">
            <div class="row">
                <div class="col-8">
                    <div class="row">
                        <div class="col-6">
                            <h5>Order Details. #789</h5>
                        </div>
                        <div class="col-6">
                            <h6 class="text-right">Date: 11/11/2023</h6>
                        </div>
                    </div>
                    <div class="row item_wrapper no_bg mb-2">
                        <hr>
                        <div class="col-6">
                            <p class="order_status">STATUS: <span class="shipped">SHIPPED</span></p>
                        </div>
                        <div class="col-6">
                            <a href="javascript:;" class="float_right start_return">Start a Return</a>
                        </div>
                        <hr>
                    </div>
                    <div class="row item_wrapper mb-2">
                        <div class="col-12">
                            <h5 class="custom_title3">Shipping</h5>
                            <p>Vinay Solanki<br>
                                +1 (226)-978-8010 <br>
                                104 Borden Avenue North<br>
                                Kitchener,ON N2H 3J4<br>
                            </p>
                        </div>
                        <hr class="pd_lr_5">
                        <div class="col-12">
                            <h5 class="custom_title3">Payment</h5>
                            <p><img src="{{  asset('img/visa_icon.svg') }}" alt="" class="visa_icon" /> **** **** **** 1281</p>
                            <p>Vinay Solanki<br>
                                +1 (226)-978-8010 <br>
                                104 Borden Avenue North<br>
                                Kitchener,ON N2H 3J4<br>
                            </p>
                        </div>
                    </div>
                    <div class="row item_wrapper mb-5">
                        <div class="col-12">
                            <h5 class="items_title">Items in this Order (2)</h5>
                        </div>
                        {{-- Products Block --}}
                        <div class="col-12">
                            <div class="shipping_add">
                                <p>Shipping to an address (2)</p>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap shipped_order">
                            <div class="items_img">
                                <img src="{{ asset('img/macbook_air.jpg') }}" class="order_item_img" alt="">
                            </div>
                            <div class="shipp_desc">
                                <p class="product_title">Mac Airbook M3</p>
                                <p class="p_price"><span class="text-muted text-decoration-line-through pd-r-5">$99.00</span>$89.00</p>
                                <p class="product_pattern">STATUS : <span class="shipped">SHIPPED</span></p>
                                <p class="product_pattern">Product Qty : 1</p>
                                <p class="product_pattern">Product pattern : Laptop</p>
                            </div>
                            <div class="shipped_items_desc">
                                <a href="javascript:;" class="track_item">Track Item</a>
                                <a href="javascript:;" class="write_review">Write a Review</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="order_summary">
                        <h5>ORDER SUMMARY</h5>
                        <p>Subtotal: <span>$89.00</span></p>
                        <p>Product 1: <span>$89.00</span></p>
                        <p>Product 2: <span>$89.00</span></p>
                        <p>GST/HST: <span>$11.00</span></p>
                        <hr>
                        <p>Order Total: <span>$89.00</span></p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
