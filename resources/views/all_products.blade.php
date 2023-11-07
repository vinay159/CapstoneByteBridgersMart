@extends('layouts.main')

@section('styles')
    <link rel="stylesheet" href="{{  asset('css/all_products.css') }}">
    @section('content')
<!-- Header-->
<header class="banner_bg py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center">
            <h1 class="display-4 fw-bolder">Our Amazing Products</h1>
        </div>
    </div>
</header>

<!-- Section-->
<section class="py-5 section_grey_bg">
    <div class="container px-4 px-lg-5 mt-5">
        <form id="all_products_form">
            <input type="hidden" name="category" value="{{ request('category') }}" id="category">
        <div class="row">
            <div class="col-12">
                <h2 class="custom_title mb-5">All Products <span class="orange-label px-md-2 px-1">{{ $total_products }}</span>
                    <span class="text-muted">Products</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="d-lg-flex align-items-lg-center pt-2">
                <div class="form-inline d-flex align-items-center my-2 mr-lg-2 radio bg-light border">
                    <label class="options">Most Popular <input type="radio" name="filter_order" value="most_popular" onchange="submitForm()" {{ request('filter_order') == 'most_popular' ? 'checked' : '' }}> <span class="checkmark"></span></label>
                    <label class="options">Cheapest <input type="radio" name="filter_order" value="cheapest" onchange="submitForm()" {{ request('filter_order', 'cheapest') == 'cheapest' ? 'checked' : '' }}> <span class="checkmark"></span> </label>
                </div>

                <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2">
                    <label class="tick">On Sale Products <input type="checkbox" name="on_sale_products" value="1"  onchange="submitForm()" {{ request('on_sale_products') == '1' ? 'checked' : '' }}> <span class="check"></span> </label>
                    <span class="text-success px-2 count"> {{ $on_sale_products }}</span>
                </div>
{{--                <div class="form-inline d-flex align-items-center my-2 checkbox bg-light border mx-lg-2">--}}
{{--                    <select name="country" id="country" class="bg-light">--}}
{{--                        <option value="" hidden>Select Country</option>--}}
{{--                        <option value="India">Canada</option>--}}
{{--                        <option value="India">India</option>--}}
{{--                        <option value="USA">USA</option>--}}
{{--                        <option value="Uk">UK</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
            </div>

            <div class="filters">
                <button class="btn btn-success" type="button" data-toggle="collapse" data-target="#mobile-filter" aria-expanded="true" aria-controls="mobile-filter">Filter<span class="px-1 fas fa-filter"></span>
                </button>
            </div>
            <div id="mobile-filter">
                <div class="py-3">
                    <h5 class="font-weight-bold">Categories</h5>
                    <ul class="list-group">
                        @foreach($categories as $category)
                                <li onclick="submitCategoryForm({{ $category->id }})"
                                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">{{ $category->name }}
                                    <span class="badge badge-primary badge-pill">{{ $category->products_count }}</span>
                                </li>
                        @endforeach
                    </ul>
                </div>
{{--                <div class="py-3">--}}
{{--                    <h5 class="font-weight-bold">Brands</h5>--}}
{{--                    <form class="brand">--}}
{{--                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Royal Fields <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Crasmas Fields <input type="checkbox" checked> <span class="check"></span> </label> </div>--}}
{{--                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Vegetarisma Farm <input type="checkbox" checked> <span class="check"></span> </label> </div>--}}
{{--                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Farmar Field Eve <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                        <div class="form-inline d-flex align-items-center py-1"> <label class="tick">True Farmar Steve <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="py-3">--}}
{{--                    <h5 class="font-weight-bold">Rating</h5>--}}
{{--                    <form class="rating">--}}
{{--                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
            <div class="content py-md-0 py-3">
                <section id="sidebar">
                    <div class="py-3">
                        <h5 class="font-weight-bold">Categories</h5>
                        <ul class="list-group">
                            @foreach($categories as $category)
                                <li onclick="submitCategoryForm({{ $category->id }})"
                                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">{{ $category->name }}
                                    <span class="badge badge-primary badge-pill">{{ $category->products_count }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
{{--                    <div class="py-3">--}}
{{--                        <h5 class="font-weight-bold">Brands</h5>--}}
{{--                        <form class="brand">--}}
{{--                            <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Apple <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                            <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Dell <input type="checkbox" checked> <span class="check"></span> </label> </div>--}}
{{--                            <div class="form-inline d-flex align-items-center py-1"> <label class="tick">Lenovo <input type="checkbox" checked> <span class="check"></span> </label> </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                    <div class="py-3">--}}
{{--                        <h5 class="font-weight-bold">Rating</h5>--}}
{{--                        <form class="rating">--}}
{{--                            <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                            <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                            <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                            <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                            <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="fas fa-star"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
                </section> <!-- Products Section -->
                <section id="products">
                    <div class="container py-3">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                                    <div class="card">
                                        @if($product->hasDiscount())
                                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">
                                                Sale
                                            </div>
                                        @endif
                                        <img class="card-img-top fp_img" src="{{ $product->product_image }}" alt="...">
                                        <div class="card-body">
                                            <h6 class="font-weight-bold pt-3 pb-2">{{ $product->product_name }}</h6>
                                            <div class="text-muted description">{{ $product->product_description }}</div>
                                            <div class="d-flex align-items-center product"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="far fa-star"></span> </div>
                                            <div class="d-flex align-items-center justify-content-between pt-3">
                                                <div class="d-flex flex-column">
                                                    <div class="h6 font-weight-bold">&#36; {{ $product->final_price }}</div>
                                                    @if ($product->hasDiscount())
                                                    <div class="text-muted rebate text-decoration-line-through">&#36; {{ $product->price }}</div>
                                                    @endif
                                                </div>
                                                <a class="btn btn-outline-dark mt-auto buy_now_btn"
                                                   href="{{ route('product.show', $product->id) }}">Buy Now</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-12 mt-5">
                                <div class="load_more">
                                    <a href="javascript:;" class="load_more_btn">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        </form>
    </div>
</section>

@endsection

@section('scripts')
    <script>
        function submitForm() {
            // javascript submit form
            document.getElementById("all_products_form").submit();
        }

        function submitCategoryForm(category) {
            document.getElementById("category").value = category;
            submitForm();
        }
    </script>
@endsection
