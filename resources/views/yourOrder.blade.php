@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{  asset('css/order_confirm.css') }}">
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}">
@endsection

@section('content')
    <div class="container px-4 px-lg-5 mt-5">
        <div class="wrapper wrapper-content animated fadeInRight mt-5 mg_b_40 wrapper_font_s">
            <div class="row">
                <div class="col-12">
                    <div class="row mb-2">
                        <div class="col-12 pd-l-0">
                            <h3>Your Orders</h3>
                        </div>
                    </div>

                    {{--    Order Delivered    --}}
                    <div class="order_wrapper">
                        <div class="row item_wrapper order_short_desc">
                            {{-- Products Block --}}
                            <div class="col-3">
                                <p class="o_label">Order Placed</p>
                                <p class="o_value">November 9, 2023</p>
                            </div>
                            <div class="col-3">
                                <p class="o_label">Total</p>
                                <p class="o_value">$123.50</p>
                            </div>
                            <div class="col-3">
                                <p class="o_label">Ship To</p>
                                <p class="o_value">Vinay Solanki</p>
                            </div>
                            <div class="col-3 text_align_right">
                                <p class="o_label">Order #701-327</p>
                                <p><a href="javascript:;" class="view_order">View Order Details</a></p>
                            </div>
                        </div>
                        <div class="row item_wrapper order_big_desc">
                            <div class="col-8">
                                <div class="items_img">
                                    <img src="{{ asset('img/macbook_air.jpg') }}" class="order_item_img" alt="">
                                </div>
                                <div class="order_inner_desc">
                                    <p class="ob_label delivered"><img src="{{asset('img/delivery.png')}}" class="order_common_icon" alt="delivery"/> Delivered</p>
                                    <p class="delivery_instruct">Package was left near the front door</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="shipped_items_desc">
                                    <a href="javascript:;" class="track_item">Track Item</a>
                                    <a href="javascript:;" class="track_item">Get Help</a>
                                    <a href="javascript:;" class="write_review">Write a Review</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--    Payment Failed    --}}
                    <div class="order_wrapper">
                        <div class="row item_wrapper order_short_desc">
                            {{-- Products Block --}}
                            <div class="col-3">
                                <p class="o_label">Order Placed</p>
                                <p class="o_value">November 9, 2023</p>
                            </div>
                            <div class="col-3">
                                <p class="o_label">Total</p>
                                <p class="o_value">$123.50</p>
                            </div>
                            <div class="col-3">
                                <p class="o_label">Ship To</p>
                                <p class="o_value">Vinay Solanki</p>
                            </div>
                            <div class="col-3 text_align_right">
                                <p class="o_label">Order #701-327</p>
                                <p><a href="javascript:;" class="view_order">View Order Details</a></p>
                            </div>
                        </div>
                        <div class="row item_wrapper order_big_desc">
                            <div class="col-8">
                                <div class="items_img">
                                    <img src="{{ asset('img/macbook_air.jpg') }}" class="order_item_img" alt="">
                                </div>
                                <div class="order_inner_desc">
                                    <p class="ob_label declined"><img src="{{asset('img/declined.png')}}" class="order_common_icon" alt="declined"/> Payment Failed</p>
                                    <p class="delivery_instruct">Payment was failed due to some technical problems</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="shipped_items_desc">
                                    <a href="javascript:;" class="track_item">Track Item</a>
                                    <a href="javascript:;" class="track_item">Get Help</a>
                                    <a href="javascript:;" class="write_review">Write a Review</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--    Payment in Progress    --}}
                    <div class="order_wrapper">
                        <div class="row item_wrapper order_short_desc">
                            {{-- Products Block --}}
                            <div class="col-3">
                                <p class="o_label">Order Placed</p>
                                <p class="o_value">November 9, 2023</p>
                            </div>
                            <div class="col-3">
                                <p class="o_label">Total</p>
                                <p class="o_value">$123.50</p>
                            </div>
                            <div class="col-3">
                                <p class="o_label">Ship To</p>
                                <p class="o_value">Vinay Solanki</p>
                            </div>
                            <div class="col-3 text_align_right">
                                <p class="o_label">Order #701-327</p>
                                <p><a href="javascript:;" class="view_order">View Order Details</a></p>
                            </div>
                        </div>
                        <div class="row item_wrapper order_big_desc">
                            <div class="col-8">
                                <div class="items_img">
                                    <img src="{{ asset('img/macbook_air.jpg') }}" class="order_item_img" alt="">
                                </div>
                                <div class="order_inner_desc">
                                    <p class="ob_label pay_progress"><img src="{{asset('img/visa_icon.svg')}}" class="order_common_icon" alt="Payment in Progress"/> Payment in Progress</p>
                                    <p class="delivery_instruct">Package will be get dispatched once payment is completed.</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="shipped_items_desc">
                                    <a href="javascript:;" class="track_item">Track Item</a>
                                    <a href="javascript:;" class="track_item">Get Help</a>
                                    <a href="javascript:;" class="write_review">Write a Review</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--    Dispatched    --}}
                    <div class="order_wrapper">
                        <div class="row item_wrapper order_short_desc">
                            {{-- Products Block --}}
                            <div class="col-3">
                                <p class="o_label">Order Placed</p>
                                <p class="o_value">November 9, 2023</p>
                            </div>
                            <div class="col-3">
                                <p class="o_label">Total</p>
                                <p class="o_value">$123.50</p>
                            </div>
                            <div class="col-3">
                                <p class="o_label">Ship To</p>
                                <p class="o_value">Vinay Solanki</p>
                            </div>
                            <div class="col-3 text_align_right">
                                <p class="o_label">Order #701-327</p>
                                <p><a href="javascript:;" class="view_order">View Order Details</a></p>
                            </div>
                        </div>
                        <div class="row item_wrapper order_big_desc">
                            <div class="col-8">
                                <div class="items_img">
                                    <img src="{{ asset('img/macbook_air.jpg') }}" class="order_item_img" alt="">
                                </div>
                                <div class="order_inner_desc">
                                    <p class="ob_label dispatched"><img src="{{asset('img/dispatched.png')}}" class="order_common_icon" alt="Dispatched"/> Dispatched</p>
                                    <p class="delivery_instruct">Package is been dispatched. Stay tune!</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="shipped_items_desc">
                                    <a href="javascript:;" class="track_item">Track Item</a>
                                    <a href="javascript:;" class="track_item">Get Help</a>
                                    <a href="javascript:;" class="write_review">Write a Review</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
