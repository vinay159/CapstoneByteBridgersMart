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
                        @if($order->status == 'INITIATED')
                            @if($order->payment_status == 'INITIATED')
                                <h2 class="">Payment Pending</h2>
                                <p class="cnfm_msg">
                                    Hey {{ auth()->user()->name }}, <br>
                                    Please complete your payment to confirm your order.<br>
                                </p>
                            @elseif($order->payment_status == 'IN_PROCESS')
                                <h2 class="">Payment In Process</h2>
                                <p class="cnfm_msg">
                                    Hey {{ auth()->user()->name }}, <br>
                                    We'll let you know when the payment is processed and order is confirmed<br>
                                </p>
                            @elseif($order->payment_status == 'FAILED')
                                <h2 class="">Payment Failed</h2>
                                <p class="cnfm_msg">
                                    Hey {{ auth()->user()->name }}, <br>
                                    Your payment has been failed. Please try again.<br>
                                </p>
                            @endif
                        @else
                            <h2 class="">Order Confirmation</h2>
                            <p class="cnfm_msg">
                                Hey {{ auth()->user()->name }}, <br>
                                We've got your order! Your world is about to look a whole lot better.<br>
                                We'll drop you another email when your order ships.
                            </p>
                        @endif
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
            @php($load_stripe_js = false)
            @if($order->status == 'INITIATED' && in_array($order->payment_status, ['INITIATED', 'FAILED']))
                @php($load_stripe_js = true)
                <form class="needs-validation" id="checkout_form" novalidate="" method="POST" action="{{ route('order.update', ['id'=> $order->id]) }}" data-parsley-validate>
                    @csrf
                    @method('PATCH')
                <div class="row item_wrapper">
                    <div class="col-12">
                        <h3 class="mt-4 custom_o_title">Payment Information</h3>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" data-parsley-type="digits" id="cc-number" placeholder=""
                               data-parsley-trigger="change" required data-parsley-length=[16,16]>
                        <div class="invalid-feedback">
                            Credit card number is required
                        </div>
                    </div>
                    <div class="col-md-1 mb-1">
                        <label for="cc-expiration">Exp Month</label>
                        <input type="text" class="form-control" data-parsley-type="digits" id="cc-expiration-month"
                               placeholder="" data-parsley-trigger="change" required data-parsley-length=[2,2]>
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>
                    <div class="col-md-1 mb-1">
                        <label for="cc-expiration">Exp Year</label>
                        <input type="text" class="form-control" data-parsley-type="digits" id="cc-expiration-year"
                               placeholder="" data-parsley-trigger="change" required data-parsley-length="[2, 2]">
                        <div class="invalid-feedback">
                            Expiration date required
                        </div>
                    </div>
                    <div class="col-md-1 mb-1">
                        <label for="cc-expiration">CVV</label>
                        <input type="text" class="form-control" data-parsley-type="digits" id="cc-cvv" placeholder=""
                               required data-parsley-trigger="change" data-parsley-length=[3,3]>
                        <div class="invalid-feedback">
                            Security code required
                        </div>
                    </div>
                </div>
                <div class="row item_wrapper">
                    <div class="col-md-2 mb-2">
                        <button class="btn btn-warning pull-left" type="submit">Retry Payment</button>
                    </div>
                </div>
                </form>
            @elseif(!empty($charge))
                <div class="row item_wrapper">
                    <div class="col-12">
                        <h3 class="mt-4 custom_o_title">Payment Information</h3>
                    </div>
                    <div class="col-3">
                        <p>{{ $charge->source->brand }}(**** **** **** {{ $charge->source->last4 }})</p>
                    </div>
                    <div class="col-6">
                        <p>&#36;{{ $order->final_price }}</p>
                    </div>
                </div>
            @endif

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

@section('scripts')
    @if($load_stripe_js)
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="{{ asset('js/parsley.js') }}"></script>
    <script>
        $(function () {
            var $form = $("#checkout_form");
            $('#checkout_form').bind('submit', function (e) {
                e.preventDefault();
                Stripe.setPublishableKey('{{ config('constants.stripe.public_key') }}');
                Stripe.createToken({
                    number: $('#cc-number').val(),
                    cvc: $('#cc-cvv').val(),
                    exp_month: $('#cc-expiration-month').val(),
                    exp_year: $('#cc-expiration-year').val()
                }, stripeHandleResponse);
            });

            function stripeHandleResponse(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }
        });
    </script>
    @endif
@endsection
