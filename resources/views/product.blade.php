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

<section>
    <div class="container px-4 px-lg-5 mt-5 mb-5">
        <div class="row">
            {{-- Review Section --}}
            <form id="review-form" action="{{ route('product.update', [$product->id]) }}" method="post">
                @csrf
                @method('PATCH')
                <h2>Write Your Review</h2>
                <div id="rating">
                    <svg class="star" id="1" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
                          <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
                        </svg>
                    <svg class="star" id="2" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
                          <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
                        </svg>
                    <svg class="star" id="3" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
                          <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
                        </svg>
                    <svg class="star" id="4" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #f39c12;">
                          <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
                        </svg>
                    <svg class="star" id="5" viewBox="0 12.705 512 486.59" x="0px" y="0px" xml:space="preserve" style="fill: #808080;">
                          <polygon points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"></polygon>
                        </svg>
                </div>
                <span id="starsInfo" class="help-block">
                        Click on a star to change your rating 1 - 5, where 5 = great! and 1 = really bad
                    </span>
                <div class="form-group">
                    <label class="control-label" for="review">Your Review:</label>
                    <textarea class="form-control" rows="3" placeholder="Your Reivew" name="review" id="review">{{ $existing_review->review ?? null }}</textarea>
                    <span id="reviewInfo" class="help-block pull-right">
                          <span id="remaining">999</span> Characters remaining
                        </span>
                </div>
                <input type="hidden" name="stars" id="stars">
                <button type="button" id="review-form-submit" class="btn btn-primary">{{ $existing_review ? 'Update' : 'Submit' }}</button>
            </form>
        </div>
    </div>
    <div class="container  px-4 px-lg-5 mt-5 mb-5" id="review-container"></div>
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
                                    @for($i = 1 ; $i <= 5;$i++)
                                        @if($i <= $related_product->reviews_avg_stars)
                                            <div class="bi-star-fill"></div>
                                        @else
                                            <div class="bi-star"></div>
                                        @endif
                                    @endfor
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

    {{--  Star review js added  --}}
<script>
    var reviews = JSON.parse('{!! json_encode($product_review_data) !!}');
    var existing_stars = parseInt('{{ $existing_review->stars ?? 4 }}');
    console.log(existing_stars);
</script>
<script src="{{  asset('js/star_review.js') }}"></script>
@endsection
