@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{  asset('css/checkout.css') }}">
    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}">
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
@endsection

@section('content')

    {{--   Custom style's  --}}
    <div class="container px-4 px-lg-5 mt-5 mb-5">
        <div class="py-5 text-center">
            <h2>Checkout form</h2>
        </div>

        <div class="row">
            <div class="col-md-4 order-md-2 mb-4 custom_checkout_card">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">{{ $cart_count }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @php($final_price = 0)
                    @foreach($cart_data as $cart)
                        @php($product = $products[$cart['product_id']])
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ $product['product_name'] }}</h6>
                            <small class="text-muted">Brief description</small>
                        </div>
                        @php($product_price = $product['final_price'] * $cart['quantity'])
                        <span class="text-muted">&#36;{{ $product_price }}</span>
                        @php($final_price += $product_price)
                    </li>
                    @endforeach
{{--                    <li class="list-group-item d-flex justify-content-between bg-light hide">--}}
{{--                        <div class="text-success">--}}
{{--                            <h6 class="my-0">Promo code</h6>--}}
{{--                            <small>EXAMPLECODE</small>--}}
{{--                        </div>--}}
{{--                        <span class="text-success">-$5</span>--}}
{{--                    </li>--}}
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total</span>
                        <strong>&#36;{{ $final_price }}</strong>
                    </li>
                </ul>

{{--                <form class="card p-2">--}}
{{--                    <div class="input-group">--}}
{{--                        <input type="text" class="form-control" placeholder="Promo code">--}}
{{--                        <div class="input-group-append">--}}
{{--                            <button type="submit" class="btn btn-secondary">Redeem</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
            </div>
            <div class="col-md-7 order-md-1 custom_checkout_card mg_r_5">
                <h4 class="mb-3">Shipping address</h4>
                <form class="needs-validation" id="checkout_form" novalidate="" method="POST" action="{{ route('checkout.store') }}" data-parsley-validate>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" placeholder="" value="" required>
                            <div class="invalid-feedback">
                                Valid last name is required.
                            </div>
                        </div>
                    </div>

{{--                    <div class="mb-3">--}}
{{--                        <label for="email">Email <span class="text-muted">(Optional)</span></label>--}}
{{--                        <input type="email" class="form-control" id="email" placeholder="you@example.com">--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Please enter a valid email address for shipping updates.--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address_1" placeholder="1234 Main St" required>
                        <div class="invalid-feedback">
                            Please enter your shipping address.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" class="form-control" id="address2" name="address_2" placeholder="Apartment or suite">
                    </div>

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <select class="custom-select d-block w-100" id="country" name="country" required>
                                <option value="">Choose...</option>
                                <option>United States</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <select class="custom-select d-block w-100" id="state" name="state" required>
                                <option value="">Choose...</option>
                                <option>California</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
                            <div class="invalid-feedback">
                                Zip code required.
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
{{--                    <div class="custom-control custom-checkbox">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="same-address">--}}
{{--                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>--}}
{{--                    </div>--}}
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="save-info" id="save-info" value="1">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4">

                    <h4 class="mb-3">Payment</h4>

{{--                    <div class="d-block my-3">--}}
{{--                        <div class="custom-control custom-radio">--}}
{{--                            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">--}}
{{--                            <label class="custom-control-label" for="credit">Credit card</label>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-radio">--}}
{{--                            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">--}}
{{--                            <label class="custom-control-label" for="debit">Debit card</label>--}}
{{--                        </div>--}}
{{--                        <div class="custom-control custom-radio">--}}
{{--                            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">--}}
{{--                            <label class="custom-control-label" for="paypal">Paypal</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="row">
{{--                        <div class="col-md-6 mb-3">--}}
{{--                            <label for="cc-name">Name on card</label>--}}
{{--                            <input type="text" class="form-control" id="cc-name" placeholder="" required="">--}}
{{--                            <small class="text-muted">Full name as displayed on card</small>--}}
{{--                            <div class="invalid-feedback">--}}
{{--                                Name on card is required--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Credit card number</label>
                            <input type="text" class="form-control" data-parsley-type="digits" id="cc-number" placeholder="" data-parsley-trigger="change" required data-parsley-length=[16,16]>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration Month</label>
                            <input type="text" class="form-control" data-parsley-type="digits" id="cc-expiration-month" placeholder="" data-parsley-trigger="change" required data-parsley-length=[2,2]>
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Expiration Year</label>
                            <input type="text" class="form-control" data-parsley-type="digits" id="cc-expiration-year" placeholder="" data-parsley-trigger="change" required data-parsley-length="[2, 2]">
                            <div class="invalid-feedback">
                                Expiration date required
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">CVV</label>
                            <input type="text" class="form-control" data-parsley-type="digits" id="cc-cvv" placeholder="" required data-parsley-trigger="change" data-parsley-length=[3,3]>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                        </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-warning pull-right" type="submit">Continue to Payment</button>
                </form>
            </div>
        </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.js') }}"></script>
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
@endsection
