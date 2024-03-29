@extends('frontend.layouts.master')
@section('title', 'Sutra Accessories - Online Shopping for Electronics, Apparel, Computers, Books, DVDs & more')
<!-- Fetch-Categories-from-Root-Category  /- -->
<!-- Filters -->
<!-- Filter-Size -->
@section('main-content')
    <div class="facet-filter-associates">
        <h3 class="title-name">Size</h3>
        <form class="facet-form" action="#" method="post">
            <div class="associate-wrapper">
                <input type="checkbox" class="check-box" id="cbs-01">
                <label class="label-text" for="cbs-01">Male 2XL
                    <span class="total-fetch-items">(2)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-02">
                <label class="label-text" for="cbs-02">Male 3XL
                    <span class="total-fetch-items">(2)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-03">
                <label class="label-text" for="cbs-03">Kids 4
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-04">
                <label class="label-text" for="cbs-04">Kids 6
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-05">
                <label class="label-text" for="cbs-05">Kids 8
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-06">
                <label class="label-text" for="cbs-06">Kids 10
                    <span class="total-fetch-items">(2)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-07">
                <label class="label-text" for="cbs-07">Kids 12
                    <span class="total-fetch-items">(2)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-08">
                <label class="label-text" for="cbs-08">Female Small
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-09">
                <label class="label-text" for="cbs-09">Male Small
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-10">
                <label class="label-text" for="cbs-10">Female Medium
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-11">
                <label class="label-text" for="cbs-11">Male Medium
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-12">
                <label class="label-text" for="cbs-12">Female Large
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-13">
                <label class="label-text" for="cbs-13">Male Large
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-14">
                <label class="label-text" for="cbs-14">Female XL
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-15">
                <label class="label-text" for="cbs-15">Male XL
                    <span class="total-fetch-items">(0)</span>
                </label>
            </div>
        </form>
    </div>
    <!-- Filter-Size -->
    <!-- Filter-Color -->
    <div class="facet-filter-associates">
        <h3 class="title-name">Color</h3>
        <form class="facet-form" action="#" method="post">
            <div class="associate-wrapper">
                <input type="checkbox" class="check-box" id="cbs-16">
                <label class="label-text" for="cbs-16">Heather Grey
                    <span class="total-fetch-items">(1)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-17">
                <label class="label-text" for="cbs-17">Black
                    <span class="total-fetch-items">(1)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-18">
                <label class="label-text" for="cbs-18">White
                    <span class="total-fetch-items">(3)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-19">
                <label class="label-text" for="cbs-19">Mischka Plain
                    <span class="total-fetch-items">(1)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-20">
                <label class="label-text" for="cbs-20">Black Bean
                    <span class="total-fetch-items">(1)</span>
                </label>
            </div>
        </form>
    </div>
    <!-- Filter-Color /- -->
    <!-- Filter-Brand -->
    <div class="facet-filter-associates">
        <h3 class="title-name">Brand</h3>
        <form class="facet-form" action="#" method="post">
            <div class="associate-wrapper">
                <input type="checkbox" class="check-box" id="cbs-21">
                <label class="label-text" for="cbs-21">Calvin Klein
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-22">
                <label class="label-text" for="cbs-22">Diesel
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-23">
                <label class="label-text" for="cbs-23">Polo
                    <span class="total-fetch-items">(0)</span>
                </label>
                <input type="checkbox" class="check-box" id="cbs-24">
                <label class="label-text" for="cbs-24">Tommy Hilfiger
                    <span class="total-fetch-items">(0)</span>
                </label>
            </div>
        </form>
    </div>
    <!-- Filter-Brand /- -->
    <!-- Filter-Price -->
    <div class="facet-filter-by-price">
        <h3 class="title-name">Price</h3>
        <form class="facet-form" action="#" method="post">
            <!-- Final-Result -->
            <div class="amount-result clearfix">
                <div class="price-from">$0</div>
                <div class="price-to">$3000</div>
            </div>
            <!-- Final-Result /- -->
            <!-- Range-Slider  -->
            <div class="price-filter"></div>
            <!-- Range-Slider /- -->
            <!-- Range-Manipulator -->
            <div class="price-slider-range" data-min="0" data-max="5000" data-default-low="0"
                data-default-high="3000" data-currency="$"></div>
            <!-- Range-Manipulator /- -->
            <button type="submit" class="button button-primary">Filter</button>
        </form>
    </div>
    <!-- Filter-Price /- -->
    <!-- Filter-Free-Shipping -->
    <div class="facet-filter-by-shipping">
        <h3 class="title-name">Shipping</h3>
        <form class="facet-form" action="#" method="post">
            <input type="checkbox" class="check-box" id="cb-free-ship">
            <label class="label-text" for="cb-free-ship">Free Shipping</label>
        </form>
    </div>
    <!-- Filter-Free-Shipping /- -->
    <!-- Filter-Rating -->
    <div class="facet-filter-by-rating">
        <h3 class="title-name">Rating</h3>
        <div class="facet-form">
            <!-- 5 Stars -->
            <div class="facet-link">
                <div class="item-stars">
                    <div class='star'>
                        <span style='width:76px'></span>
                    </div>
                </div>
                <span class="total-fetch-items">(0)</span>
            </div>
            <!-- 5 Stars /- -->
            <!-- 4 & Up Stars -->
            <div class="facet-link">
                <div class="item-stars">
                    <div class='star'>
                        <span style='width:60px'></span>
                    </div>
                </div>
                <span class="total-fetch-items">& Up (5)</span>
            </div>
            <!-- 4 & Up Stars /- -->
            <!-- 3 & Up Stars -->
            <div class="facet-link">
                <div class="item-stars">
                    <div class='star'>
                        <span style='width:45px'></span>
                    </div>
                </div>
                <span class="total-fetch-items">& Up (0)</span>
            </div>
            <!-- 3 & Up Stars /- -->
            <!-- 2 & Up Stars -->
            <div class="facet-link">
                <div class="item-stars">
                    <div class='star'>
                        <span style='width:30px'></span>
                    </div>
                </div>
                <span class="total-fetch-items">& Up (0)</span>
            </div>
            <!-- 2 & Up Stars /- -->
            <!-- 1 & Up Stars -->
            <div class="facet-link">
                <div class="item-stars">
                    <div class='star'>
                        <span style='width:15px'></span>
                    </div>
                </div>
                <span class="total-fetch-items">& Up (0)</span>
            </div>
            <!-- 1 & Up Stars /- -->
        </div>
    </div>
    <!-- Filter-Rating -->
    <!-- Filters /- -->
    <!-- Shop-Left-Side-Bar-Wrapper /- -->
    <!-- Shop-Right-Wrapper -->
    <div class="col-lg-9 col-md-9 col-sm-12">
        <!-- Page-Bar -->
        <div class="page-bar clearfix">
            <div class="shop-settings">
                <a id="list-anchor" class="active">
                    <i class="fas fa-th-list"></i>
                </a>
                <a id="grid-anchor">
                    <i class="fas fa-th"></i>
                </a>
            </div>
            <!-- Toolbar Sorter 1  -->
            <div class="toolbar-sorter">
                <div class="select-box-wrapper">
                    <label class="sr-only" for="sort-by">Sort By</label>
                    <select class="select-box" id="sort-by">
                        <option selected="selected" value="">Sort By: Best Selling</option>
                        <option value="">Sort By: Latest</option>
                        <option value="">Sort By: Lowest Price</option>
                        <option value="">Sort By: Highest Price</option>
                        <option value="">Sort By: Best Rating</option>
                    </select>
                </div>
            </div>
            <!-- //end Toolbar Sorter 1  -->
            <!-- Toolbar Sorter 2  -->
            <div class="toolbar-sorter-2">
                <div class="select-box-wrapper">
                    <label class="sr-only" for="show-records">Show Records Per Page</label>
                    <select class="select-box" id="show-records">
                        <option selected="selected" value="">Show: 8</option>
                        <option value="">Show: 16</option>
                        <option value="">Show: 28</option>
                    </select>
                </div>
            </div>
            <!-- //end Toolbar Sorter 2  -->
        </div>
        <!-- Page-Bar /- -->
        <!-- Row-of-Product-Container -->
        <div class="row product-container list-style">
            <div class="product-item col-lg-4 col-md-6 col-sm-6">
                <div class="item">
                    <div class="image-container">
                        <a class="item-img-wrapper-link" href="single-product.html">
                            <img class="img-fluid" src="images/product/product@3x.jpg" alt="Product">
                        </a>
                        <div class="item-action-behaviors">
                            <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                            <a class="item-mail" href="javascript:void(0)">Mail</a>
                            <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                            <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="what-product-is">
                            <ul class="bread-crumb">
                                <li class="has-separator">
                                    <a href="shop-v1-root-category.html">Men's</a>
                                </li>
                                <li class="has-separator">
                                    <a href="shop-v2-sub-category.html">Tops</a>
                                </li>
                                <li>
                                    <a href="shop-v3-sub-sub-category.html">Hoodies</a>
                                </li>
                            </ul>
                            <h6 class="item-title">
                                <a href="single-product.html">Casual Hoodie Full Cotton</a>
                            </h6>
                            <div class="item-description">
                                <p>This hoodie is full cotton. It includes a muff sewn onto the lower front, and (usually) a
                                    drawstring to adjust the hood opening. Throughout the U.S., it is common for
                                    middle-school, high-school, and college students to wear this sweatshirts—with or
                                    without hoods—that display their respective school names or mascots across the chest,
                                    either as part of a uniform or personal preference.
                                </p>
                            </div>
                            <div class="item-stars">
                                <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                    <span style='width:67px'></span>
                                </div>
                                <span>(23)</span>
                            </div>
                        </div>
                        <div class="price-template">
                            <div class="item-new-price">
                                $55.00
                            </div>
                            <div class="item-old-price">
                                $60.00
                            </div>
                        </div>
                    </div>
                    <div class="tag new">
                        <span>NEW</span>
                    </div>
                </div>
            </div>
            <div class="product-item col-lg-4 col-md-6 col-sm-6">
                <div class="item">
                    <div class="image-container">
                        <a class="item-img-wrapper-link" href="single-product.html">
                            <img class="img-fluid" src="images/product/product@3x.jpg" alt="Product">
                        </a>
                        <div class="item-action-behaviors">
                            <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                            <a class="item-mail" href="javascript:void(0)">Mail</a>
                            <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                            <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="what-product-is">
                            <ul class="bread-crumb">
                                <li class="has-separator">
                                    <a href="shop-v1-root-category.html">Men's</a>
                                </li>
                                <li class="has-separator">
                                    <a href="shop-v2-sub-category.html">Tops</a>
                                </li>
                                <li>
                                    <a href="shop-v3-sub-sub-category.html">T-Shirts</a>
                                </li>
                            </ul>
                            <h6 class="item-title">
                                <a href="single-product.html">Mischka Plain Men T-Shirt</a>
                            </h6>
                            <div class="item-description">
                                <p>T-shirts with bold slogans were popular in the UK in the 1980s. T-shirts were originally
                                    worn as undershirts, but are now worn frequently as the only piece of clothing on the
                                    top half of the body, other than possibly a brassiere or, rarely, a waistcoat (vest).
                                    T-shirts have also become a medium for self-expression and advertising, with any
                                    imaginable combination of words, art and photographs on display.</p>
                            </div>
                            <div class="item-stars">
                                <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                    <span style='width:67px'></span>
                                </div>
                                <span>(23)</span>
                            </div>
                        </div>
                        <div class="price-template">
                            <div class="item-new-price">
                                $55.00
                            </div>
                            <div class="item-old-price">
                                $60.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item col-lg-4 col-md-6 col-sm-6">
                <div class="item">
                    <div class="image-container">
                        <a class="item-img-wrapper-link" href="single-product.html">
                            <img class="img-fluid" src="images/product/product@3x.jpg" alt="Product">
                        </a>
                        <div class="item-action-behaviors">
                            <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                            <a class="item-mail" href="javascript:void(0)">Mail</a>
                            <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                            <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="what-product-is">
                            <ul class="bread-crumb">
                                <li class="has-separator">
                                    <a href="shop-v1-root-category.html">Men's</a>
                                </li>
                                <li class="has-separator">
                                    <a href="shop-v2-sub-category.html">Tops</a>
                                </li>
                                <li>
                                    <a href="shop-v4-filter-as-category.html">T-Shirts</a>
                                </li>
                            </ul>
                            <h6 class="item-title">
                                <a href="single-product.html">Black Bean Plain Men T-Shirt</a>
                            </h6>
                            <div class="item-description">
                                <p>T-shirts with bold slogans were popular in the UK in the 1980s. T-shirts were originally
                                    worn as undershirts, but are now worn frequently as the only piece of clothing on the
                                    top half of the body, other than possibly a brassiere or, rarely, a waistcoat (vest).
                                    T-shirts have also become a medium for self-expression and advertising, with any
                                    imaginable combination of words, art and photographs on display.</p>
                            </div>
                            <div class="item-stars">
                                <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                    <span style='width:67px'></span>
                                </div>
                                <span>(23)</span>
                            </div>
                        </div>
                        <div class="price-template">
                            <div class="item-new-price">
                                $55.00
                            </div>
                            <div class="item-old-price">
                                $60.00
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item col-lg-4 col-md-6 col-sm-6">
                <div class="item">
                    <div class="image-container">
                        <a class="item-img-wrapper-link" href="single-product.html">
                            <img class="img-fluid" src="images/product/product@3x.jpg" alt="Product">
                        </a>
                        <div class="item-action-behaviors">
                            <a class="item-quick-look" data-toggle="modal" href="#quick-view">Quick Look</a>
                            <a class="item-mail" href="javascript:void(0)">Mail</a>
                            <a class="item-addwishlist" href="javascript:void(0)">Add to Wishlist</a>
                            <a class="item-addCart" href="javascript:void(0)">Add to Cart</a>
                        </div>
                    </div>
                    <div class="item-content">
                        <div class="what-product-is">
                            <ul class="bread-crumb">
                                <li class="has-separator">
                                    <a href="shop-v1-root-category.html">Men's</a>
                                </li>
                                <li class="has-separator">
                                    <a href="shop-v2-sub-category.html">Tops</a>
                                </li>
                                <li>
                                    <a href="shop-v3-sub-sub-category.html">Suits</a>
                                </li>
                            </ul>
                            <h6 class="item-title">
                                <a href="single-product.html">Black Maire Full Men Suit</a>
                            </h6>
                            <div class="item-description">
                                <p>British dandy Beau Brummell redefined and adapted this style, then popularised it,
                                    leading European men to wearing well-cut, tailored clothes, adorned with carefully
                                    knotted neckties. The simplicity of the new clothes and their sombre colours contrasted
                                    strongly with the extravagant, foppish styles just before. Brummell's influence
                                    introduced the modern era of men's clothing which now includes the modern suit and
                                    necktie.</p>
                            </div>
                            <div class="item-stars">
                                <div class='star' title="4.5 out of 5 - based on 23 Reviews">
                                    <span style='width:67px'></span>
                                </div>
                                <span>(23)</span>
                            </div>
                        </div>
                        <div class="price-template">
                            <div class="item-new-price">
                                $55.00
                            </div>
                            <div class="item-old-price">
                                $60.00
                            </div>
                        </div>
                    </div>
                    <div class="tag sale">
                        <span>SALE</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row-of-Product-Container /- -->
    </div>
    <!-- Shop-Right-Wrapper /- -->
@endsection
