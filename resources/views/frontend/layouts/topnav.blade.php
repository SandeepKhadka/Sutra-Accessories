<header id="header-ajax">
    <!-- Top-Header -->
    <div class="">
        <div class="container-fluid">
            <nav style="display: flex; justify-content: space-between;">
                <div class="brand-logo text-lg" style="margin-top: 10px;">
                    <a href="{{ route('front.home') }}">
                        <h4>Sutra Accessories</h4>
                    </a>
                </div>
                <div>
                    <div style="display: flex; justify-content: space-between; margin-top: 10px; gap: 0px 50px">
                        <div style="">
                            <form class="form-searchbox" action="{{ route('search') }}" method="get"
                                style="min-width: 500px">
                                <label class="sr-only" for="search-landscape">Search</label>
                                <input id="search_text" type="text" name="query" required class="text-field"
                                    placeholder="Search">
                                <button id="btn-search" type="submit"
                                    class="button button-primary fas fa-search"></button>
                            </form>
                        </div>
                        <div class="" style="">
                            <ul class="mid-nav g-nav" style="margin-top: 10px">
                                <li class="">
                                    <a href="{{ route('wishlist') }}" style="font-size: 20px;">
                                        <i class="far fa-heart"></i>
                                        <span id="wishlist_counter"
                                            class="item-counter">{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('wishlist')->count() }}</span>
                                    </a>
                                </li>
                                <li></li>
                                <li class="has-dropdown">

                                    <a class="mini-cart-shop-link" style="font-size: 20px" href="{{ route('cart') }}"><i
                                            class="fas fa-cart-plus"></i>

                                        <span
                                            class="item-counter">{{ \Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count() }}</span>
                                        <span class="item-price">Rs
                                            {{ Cart::subtotal() }}</span></a>

                                    <!--====== Dropdown ======-->

                                    {{-- <span class="js-menu-toggle"></span>
                                        <div class="mini-cart">

                                            <!--====== Mini Product Container ======-->
                                            <div class="mini-product-container gl-scroll u-s-m-b-15">

                                                <!--====== Card for mini cart ======-->
                                                @foreach (\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
                                                    <div class="card-mini-product">
                                                        <div class="mini-product">
                                                            <div class="mini-product__image-wrapper">
                                                                @php
                                                                    $photos = explode(',', @$item->model->image);
                                                                @endphp
                                                                @if (file_exists(public_path() . '/uploads/product/' . @$item->model->image))
                                                                    <a class="mini-product__link"
                                                                        href="{{ route('productDetail', @$item->model->slug) }}">

                                                                        <img class="u-img-fluid"
                                                                            src={{ asset('/uploads/product/' . @$item->model->image) }}>
                                                                    </a>
                                                                @else
                                                                    <a class="mini-product__link"
                                                                        href="{{ route('productDetail', @$item->model->slug) }}">

                                                                        <img class="u-img-fluid"
                                                                            src={{ $photos[0] }}>
                                                                    </a>
                                                                @endif
                                                            </div>
                                                            <div class="mini-product__info-wrapper">

                                                                <span class="mini-product__name">

                                                                    <a
                                                                        href="product-detail.html">{{ @$item->name }}</a></span>

                                                                <span class="mini-product__quantity"> x
                                                                    {{ @$item->qty }}
                                                                </span>

                                                                <span class="mini-product__price">Rs
                                                                    {{ number_format(@$item->price, 2) }}</span>
                                                            </div>
                                                        </div>

                                                        <a class="mini-product__delete-link far fa-trash-alt cart_delete"
                                                            data-id="{{ $item->rowId }}"></a>
                                                    </div>
                                                @endforeach
                                                <!--====== End - Card for mini cart ======-->
                                            </div>
                                            <!--====== End - Mini Product Container ======-->

                                            <!--====== Mini Product Statistics ======-->
                                            <div class="mini-product-stat">
                                                <div class="mini-total">

                                                    <span class="subtotal-text">SUBTOTAL</span>

                                                    <span class="subtotal-value">Rs {{ Cart::subtotal() }}</span>
                                                </div>
                                                <div class="mini-total">

                                                    <span class="subtotal-text">TOTAL</span>
                                                    @if (session()->has('coupon'))
                                                        <span class="subtotal-value">Rs
                                                            {{ number_format((float) str_replace(',', '', Cart::subtotal()) - session('coupon')['value'], 2) }}</span>
                                                    @else
                                                        <span class="subtotal-value">Rs
                                                            {{ Cart::subtotal() }}</span>
                                                    @endif
                                                </div>
                                                <div class="mini-action">
                                                    @if (\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->count() > 0)

                                                        <a class="mini-link btn--e-brand-b-2"
                                                            href="{{ route('checkout') }}">PROCEED TO
                                                            CHECKOUT</a>
                                                    @endif

                                                    <a class="mini-link btn--e-transparent-secondary-b-2"
                                                        href="{{ route('cart') }}">VIEW CART</a>
                                                </div>
                                            </div>
                                            <!--====== End - Mini Product Statistics ======-->
                                        </div> --}}
                                    <!--====== End - Dropdown ======-->
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="secondary-nav g-nav" style="margin-top: 10px">
                    <li class="d-lg-none">
                        <a href="{{ route('wishlist') }}">
                            <i class="far fa-heart u-c-brand u-s-m-r-9"></i>
                            My Wishlist
                        </a>
                    </li>
                    <li class="d-lg-none">
                        <a href="{{ route('cart') }}">
                            <i class="fas fa-cart-plus u-c-brand u-s-m-r-9"></i>
                            My Cart
                        </a>
                    </li>
                    <li>
                        <a style="font-size: 14px">{{ isset(auth()->user()->full_name) ? auth()->user()->full_name . "'s Account" : "User's Account" }}
                            <i class="fas fa-chevron-down u-s-m-l-9"></i>
                        </a>
                        <ul class="g-dropdown" style="width:200px">
                            @auth
                                <li>
                                    <a href="{{ route('my_order.index') }}">
                                        <i class="fa fa-sitemap u-s-m-r-9"></i>
                                        My Orders</a>
                                </li>
                                @endif
                                <li>
                                    @if (isset(auth()->user()->id))
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                            Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    @else
                                        <a href="{{ route('login') }}">
                                            <i class="fas fa-sign-in-alt u-s-m-r-9"></i>
                                            Login / Signup</a>
                                    @endif
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <button class="menu-toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
            </div>
        </div>

        <!-- topbar -->
        <!-- Mid-Header -->
        <div class="full-layer-mid-header" >
            <div class="container-fluid" >
                <div class="row clearfix align-items-center" style="z-index: 9999;">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="v-menu-horizontal">
                            <nav>
                                <div class="v-wrapper">
                                    <ul class="v-list-horizontal animated fadeIn">
                                        @if (isset($parent_categories) && count($parent_categories) > 0)
                                            @foreach ($parent_categories as $category)
                                                <li>
                                                    <a href="{{ route('shop', $category->slug) }}">
                                                        {{ $category->title }}
                                                        <i class="fas fa-angle-down"></i>
                                                    </a>
                                                    <div class="v-drop-right">
                                                        <!-- Add your dropdown content here -->
                                                        <ul class="v-level-2">
                                                            @foreach ($child_categories as $child_category)
                                                                @if ($category->id == $child_category->parent_id)
                                                                    <li>
                                                                        <a
                                                                            href="{{ route('single_category', $child_category->slug) }}">
                                                                            {{ $child_category->title }}
                                                                        </a>
                                                                    </li>
                                                                @endif
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="full-layer-mid-header">
            <div class="container-fluid">
                <div class="row clearfix align-items-center">
                    <div class="col-lg-12 col-md-12 col-sm-12">

                    </div>
                </div>
                <div class="row clearfix align-items-center">
                    <div class="col-lg-3 d-block d-md-block d-lg-block">
                        <div class="">
                            <div class="v-menu">
                                <span class="v-title">
                                    <i class="ion ion-md-menu"></i>
                                    All Categories
                                    <i class="fas fa-angle-down"></i>
                                </span>
                                <nav>
                                    <div class="v-wrapper">
                                        <ul class="v-list animated fadeIn">
                                            @if (isset($parent_categories) && count($parent_categories) > 0)
                                                @foreach ($parent_categories as $category)
                                                    <li class="js-backdrop">
                                                        <a href="{{ route('shop', $category->slug) }}">
                                                            {{ $category->title }}
                                                            <i class="ion ion-ios-arrow-forward"></i>
                                                        </a>
                                                        <button class="v-button ion ion-md-add"></button>
                                                        <div class="v-drop-right" style="width: 700px;">
                                                            @php
                                                                $apparel_lists = [];
                                                                $apparels_child = [];
                                                            @endphp
                                                            <div class="row">
                                                                @if (isset($child_categories) && count($child_categories) > 0)
                                                                    @foreach ($child_categories as $child_category)
                                                                        <div class="col-lg-4">
                                                                            <ul class="v-level-2">
                                                                                @if ($category->id == $child_category->parent_id)
                                                                                    @php
                                                                                        $apparel = \App\Models\Apparel::where('id', $child_category->apparel)->value('title');
                                                                                    @endphp
                                                                                    <li>
                                                                                        @if (!in_array($apparel, $apparel_lists))
                                                                                            <a>{{ $apparel }}</a>
                                                                                            @php
                                                                                                $apparel_lists[] = $apparel;
                                                                                            @endphp
                                                                                        @endif
                                                                                        <ul>
                                                                                            @foreach ($child_categories as $child_cat)
                                                                                                @php
                                                                                                    $child_apparel = \App\Models\Apparel::where('id', $child_cat->apparel)->value('title');
                                                                                                @endphp
                                                                                                @if ($apparel == $child_apparel)
                                                                                                    @if (!in_array($child_cat->title, $apparels_child))
                                                                                                        <li>
                                                                                                            <a
                                                                                                                href="{{ route('single_category', $child_cat->slug) }}">{{ $child_cat->title }}</a>
                                                                                                            @php
                                                                                                                $apparels_child[] = $child_cat->title;
                                                                                                            @endphp
                                                                                                        </li>
                                                                                                    @endif
                                                                                                @endif
                                                                                            @endforeach
                                                                                        </ul>
                                                                                    </li>
                                                                                @endif
                                                                            </ul>
                                                                        </div>
                                                                    @endforeach
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}

        <!-- Mid-Header /- -->
        <!-- Mini Cart -->
        {{-- <div class="mini-cart-wrapper">
            <div class="mini-cart">
                <div class="mini-cart-header">
                    YOUR CART
                    <button type="button" class="button ion ion-md-close" id="mini-cart-close"></button>
                </div>
                <ul class="mini-cart-list">
                    @foreach (\Gloudemans\Shoppingcart\Facades\Cart::instance('shopping')->content() as $item)
                        <li class="clearfix">
                            <a href="#">
                                <img src={{ asset('/uploads/product/' . @$item->model->image) }} alt="Product">
                                <span class="mini-item-name">{{ @$item->name }}</span>
                                <span class="mini-item-price">Rs {{ number_format(@$item->price, 2) }}</span>
                                <span class="mini-item-quantity"> x {{ @$item->qty }} </span>
                            </a>
                            <span class="float-right cart_delete" data-id="{{ $item->rowId }}"> <i
                                    class="button button-outline-secondary fas fa-trash"></i>
                            </span>
                        </li>
                    @endforeach
                </ul>
                <div class="mini-shop-total clearfix">
                    <span class="mini-total-heading float-left">Sub Total:</span>
                    <span class="mini-total-price float-right">Rs {{ Cart::subtotal() }}</span>
                </div>
                <div class="mini-shop-total clearfix">
                    <span class="mini-total-heading float-left">Total:</span>
                    @if (session()->has('coupon'))
                        <span class="mini-total-price float-right">Rs
                            {{ number_format((float) str_replace(',', '', Cart::subtotal()) - session('coupon')['value'], 2) }}</span>
                    @else
                        <span class="mini-total-price float-right">Rs {{ Cart::subtotal() }}</span>
                    @endif
                </div>
                <div class="mini-action-anchors">
                    <a href="{{ route('cart') }}" class="cart-anchor">View Cart</a>
                    <a href="{{ route('checkout') }}" class="checkout-anchor">Checkout</a>
                </div>
            </div>
        </div> --}}
        <!-- Mini Cart /- -->
        </div>
    </header>
