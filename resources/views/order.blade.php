@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{  asset('css/order_confirm.css') }}">
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}">
@endsection

@section('content')
    <div class="container px-4 px-lg-5 mt-5">
        <div class="wrapper wrapper-content animated fadeInRight mt-5 mg_b_40">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="d-flex text-center flex-column align-items-md-center mb-3">
                        <h2 class="">Order Confirmation</h2>
                        <p class="cnfm_msg">
                            Hey {{ auth()->user()->name }}, <br>
                            We've got your order! Your world is about to look a whole lot better.<br>
                            We'll drop you another email when your order ships.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <h5>ORDER NO. #{{ $order->order_id }}</h5>
                </div>
                <div class="col-6">
                    <h6 class="text-right">Date: {{ $order->created_at->format('d-m-Y') }}</h6>
                </div>
            </div>
            <div class="row item_wrapper">
                <div class="col-12">
                    <h3 class="mt-4 custom_o_title">Items Ordered</h3>
                </div>
                {{-- Products Block --}}
                @foreach($order->items as $items)
                <div class="d-flex flex-wrap custom_itm_ordered">
                    <div class="items_img">
                        <img src="{{ $items->product->product_image }}" class="item_img" alt="">
                    </div>
                    <div class="items_desc">
                        <p>{{ $items->product->product_name }}</p>
                        @if($items->product->category)
                        <p>Product pattern : {{ $items->product->category->name }}</p>
                        @endif
                    </div>
                    <div class="items_qty">
                        <p class="text-right">x {{ $items->quantity }}</p>
                    </div>
                    <div class="items_price">
                        <p class="text-right">
                            &#36;{{ $items->price }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row item_wrapper custom_disc_block">
                <div class="col-6"></div>
                <div class="col-4 text-right custpm_itm_label">
{{--                    <p>Discount:</p>--}}
{{--                    <p>SubTotal:</p>--}}
                    <p>Total:</p>
                </div>
                <div class="col-2 text-right">
{{--                    <p>10%</p>--}}
{{--                    <p>$1590.00</p>--}}
                    <p>&#36;{{ $order->final_price }}</p>
                </div>
            </div>

            <div class="row item_wrapper">
                <div class="col-12">
                    <h3 class="mt-4 custom_o_title">Payment Information</h3>
                </div>
                <div class="col-3">
                    <p>Mastercard(**** **** ***6500)</p>
                </div>
                <div class="col-6">
                    <p>$1890.00</p>
                </div>
            </div>

            {{--    Billing and shipping info   --}}
            <div class="row item_wrapper">
                <div class="col-6">
                    <h3 class="mt-4 custom_o_title">Shipping Information</h3>
                    <p>{{ $order->full_name }} <br>
                        {{ $order->address }}
                    </p>
                    <p>{{ auth()->user()->email }}</p>
                </div>
{{--                <div class="col-6">--}}
{{--                    <h3 class="mt-4 custom_o_title">Shipping Address</h3>--}}
{{--                    <p>Vinay Solanki <br>--}}
{{--                        104, Borden Avenue North,<br>--}}
{{--                        Kitchener, ON N2H 3J4--}}
{{--                    </p>--}}
{{--                    <p>vinay@gmail.com</p>--}}
{{--                </div>--}}
            </div>

            <div class="row item_wrapper pd_tb_50">
                <div class="col-12 text-center">
                    <h5>If you need help with anything <br> please don't hesitate to drop us an email: careers@bytebridgers.ca :)</h5>
                </div>
            </div>
        </div>
    </div>
@endsection
