@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{  asset('css/cart.css') }}">
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}">
@endsection

@section('content')

    {{--   Custom style's  --}}
    <div class="container">
        <div class="wrapper wrapper-content animated fadeInRight mt-5">
            <div class="row">
                <div class="col-md-9">
                    <div class="ibox">
                        <div class="ibox-title">
                            <span class="pull-right">(<strong>{{ $cart_count }}</strong>) items</span>
                            <h5>Shopping Cart</h5>
                        </div>
                        @php($final_price = 0)
                        @foreach($cart_data as $cart)
                            @php($product = $products[$cart['product_id']])
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <table class="cart_table table shoping-cart-table">
                                        <tbody>
                                        <tr>
                                            <td width="90">
                                                <div class="cart-product-imitation">
                                                    <img src="{{ $product['product_image'] }}" class="cart_pimg" alt="" />
                                                </div>
                                            </td>
                                            <td class="desc">
                                                <h3>{{ $product['product_name'] }}</h3>
                                                <p><span class="label_tag">Pattern Name</span>: Mobile</p>
                                                <form action="{{ route('cart.delete') }}" method="post" id="card_delete_{{$product['id']}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                                                </form>
                                                <div class="m-t-sm">
                                                    <p class="qty_label">Qty:<input type="text" class="form-control custom_input_qty" placeholder="{{ $cart['quantity'] }}"></p>
                                                    <a href="#" onclick="event.preventDefault();
                                                     document.getElementById('card_delete_{{$product['id']}}').submit();" class="remove_product_btn"><i class="fa fa-trash"></i> Remove item</a>
                                                    <a href="#" class="see_more">See more like this</a>
                                                </div>
                                            </td>
                                            <td width="65">

                                            </td>
                                            <td width="100">
                                                <p class="small deal_txt"><span class="sale_off">{{ $product['discount'] }}% OFF</span> Deal</p>
                                                <p class="custom_p">Actual Price:
                                                    @if($product['has_discount'])
                                                    <s class="small text-muted">&#36;{{ $product['price'] }}</s>
                                                    @endif
                                                </p>
                                                <h4>
                                                    @php($product_price = $product['final_price'] * $cart['quantity'])
                                                    &#36;{{ $product_price }}
                                                    @php($final_price += $product_price)
                                                </h4>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                        <div class="ibox-content">
                            <button class="btn btn-warning pull-right"><i class="fa fa fa-shopping-cart"></i> Checkout</button>
                            <a href="{{ url('/') }}" class="btn btn-light"><i class="fa fa-arrow-left"></i> Continue shopping</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Cart Summary</h5>
                        </div>
                        <div class="ibox-content">
                                <span>
                                Total
                                </span>
                            <h2 class="font-bold">
                                &#36;{{$final_price}}
                            </h2>
                            <hr>
                            <span class="text-muted small">
                                *For India, France and Germany applicable sales tax will be applied
                                </span>
                            <div class="m-t-sm">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-warning btn-sm"><i class="fa fa-shopping-cart"></i> Checkout</a>
                                    <a href="#" class="btn btn-light btn-sm"> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Support</h5>
                        </div>
                        <div class="ibox-content text-center">
                            <h3><i class="fa fa-phone"></i> +1(222)-999-1111</h3>
                            <span class="small">
                                Please contact with us if you have any questions. We are avalible 24h.
                                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
