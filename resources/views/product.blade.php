@extends('layouts.main')

@section('content')

<!-- Header-->
<header class="banner_bg py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center">
            <h1 class="display-4 fw-bolder">Shop in style</h1>
            <p class="lead fw-normal text-black-50 mb-0">With this shop hompeage</p>
        </div>
    </div>
</header>

<!-- Product section-->
<section class="py-5 section_grey_bg">
    <div class="container px-4 px-lg-5 my-5">

        <div class="row gx-4 gx-lg-5 align-items-center">
{{--            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="https://dummyimage.com/600x700/dee2e6/6c757d.jpg" alt="..." /></div>--}}
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $product->product_image }}" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">SKU: {{ $product->sku }}</div>
                <h1 class="display-5 fw-bolder">{{ $product->product_name }}</h1>
                <div class="fs-5 mb-5">
                    @if($product->hasDiscount())
                        <span class="text-decoration-line-through">&#36; {{ $product->price }}</span>
                    @endif
                    <span>&#36; {{$product->final_price}}</span>
                </div>
                <p class="lead">{{ $product->product_description }}</p>
                <div class="d-flex">
                    <form action="{{ route('cart.store') }}" method="post" id="cart-form">
                        {{ csrf_field() }}
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <input type="hidden" name="price" value="{{ $product->final_price }}">
                        <select class="custom-select select_qty" id="quantity" name="quantity" required>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </form>
                    <button class="btn btn-outline-dark flex-shrink-0" type="button"  onclick="event.preventDefault();
                                                     document.getElementById('cart-form').submit();">
                        <i class="bi-cart-fill me-1"></i>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related items section-->
<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4">Related products</h2>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach($related_products as $related_product)
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        @if($related_product->hasDiscount())
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        @endif
                        <!-- Product image-->
{{--                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
                        <img class="card-img-top fp_img" src="{{ $related_product->product_image }}" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{ $related_product->product_name }}</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                @if ($related_product->hasDiscount())
                                <span class="text-muted text-decoration-line-through">&#36; {{ $related_product->price }}</span>
                                @endif
                                &#36; {{ $related_product->final_price }}
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('product.show', $related_product->id) }}">View options</a></div>
                        </div>
                        {{--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
                        {{--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
