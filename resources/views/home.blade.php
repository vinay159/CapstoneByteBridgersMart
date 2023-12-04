@extends('layouts.main')

@section('content')
    <!-- Header-->
    <header class="banner_bg py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center">
                <h1 class="display-4 fw-bolder">ByteBridgers Mart & more...</h1>
                <p class="lead fw-normal mb-0">With this shop you can explore many more new surprises</p>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5 section_grey_bg">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="custom_title mb-5">Featured Products</h2>
                </div>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            @if($product->hasDiscount())
                                <div class="badge bg-dark text-white position-absolute"
                                     style="top: 0.5rem; right: 0.5rem">
                                    Sale
                                </div>
                            @endif
                            <!-- Product image-->
                            <img class="card-img-top fp_img" src="{{ $product->product_image }}"
                                 alt="..."/>
                            {{--                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />--}}
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->product_name }}</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        @for($i = 1 ; $i <= 5;$i++)
                                            @if($i <= $product->reviews_avg_stars)
                                                <div class="bi-star-fill"></div>
                                            @else
                                                <div class="bi-star"></div>
                                            @endif
                                        @endfor
                                    </div>
                                    @if ($product->hasDiscount())
                                        <span
                                            class="text-muted text-decoration-line-through">&#36; {{ $product->price }}</span>
                                    @endif
                                    &#36; {{ $product->final_price }}

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                            href="{{ route('product.show', $product->id) }}">View
                                        details</a></div>
                            </div>
                            {{--                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">--}}
                            {{--                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
