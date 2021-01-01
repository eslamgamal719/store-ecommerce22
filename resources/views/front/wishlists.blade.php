@extends('layouts.site')

@section('content')

    <nav data-depth="3" class="breadcrumb-bg">
        <div class="container no-index">
            <div class="breadcrumb">

                <ol itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="{{route('home')}}">
                            <span itemprop="name">Home</span>
                        </a>
                        <meta itemprop="position" content="1">
                    </li>
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="36-mini-speaker.html">
                            <span itemprop="name"></span>
                        </a>
                        <meta itemprop="position" content="3">
                    </li>
                </ol>

            </div>
        </div>
    </nav>

    <div class="container no-index">
        <div class="row">
            <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                <section id="main">


                    <div class="block-category hidden-sm-down">
                        <h1 class="h1">Favorite List</h1>
                    </div>


                    <section id="products">

                        <div id="nav-top">

                            <div id="js-product-list-top" class="row products-selection">
                                <div class="col-md-6 col-xs-6">
                                    <div class="change-type">
                                        <span class="grid-type active" data-view-type="grid"><i
                                                class="fa fa-th-large"></i></span>
                                        <span class="list-type" data-view-type="list"><i class="fa fa-bars"></i></span>
                                    </div>
                                    <div class="hidden-sm-down total-products">
                                        <p>There are 4 products.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="d-flex sort-by-row justify-content-end">

                                        <span class="hidden-sm-down sort-by">Sort by:</span>
                                        <div class="products-sort-order dropdown">
                                            <a class="select-title" rel="nofollow" data-toggle="dropdown"
                                               aria-haspopup="true" aria-expanded="false">
                                                <span>Relevance</span>
                                                <i class="material-icons pull-xs-right">&#xE5C5;</i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a rel="nofollow"
                                                   href="36-mini-speaker-27.html?home=home_3&amp;order=product.position.asc"
                                                   class="select-list current js-search-link">
                                                    Relevance
                                                </a>
                                                <a rel="nofollow"
                                                   href="36-mini-speaker-28.html?home=home_3&amp;order=product.name.asc"
                                                   class="select-list js-search-link">
                                                    Name, A to Z
                                                </a>
                                                <a rel="nofollow"
                                                   href="36-mini-speaker-29.html?home=home_3&amp;order=product.name.desc"
                                                   class="select-list js-search-link">
                                                    Name, Z to A
                                                </a>
                                                <a rel="nofollow"
                                                   href="36-mini-speaker-30.html?home=home_3&amp;order=product.price.asc"
                                                   class="select-list js-search-link">
                                                    Price, low to high
                                                </a>
                                                <a rel="nofollow"
                                                   href="36-mini-speaker-31.html?home=home_3&amp;order=product.price.desc"
                                                   class="select-list js-search-link">
                                                    Price, high to low
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <div id="categories-product">

                            <div id="js-product-list">
                                <div class="products product_list grid row" data-default-view="grid">

                             @isset($products)
                                    @foreach($products as $product)
                                    <div class="item  col-lg-4 col-md-6 col-xs-12 text-center no-padding">
                                        <div class="product-miniature js-product-miniature item-one"
                                             data-id-product="22" data-id-product-attribute="408" itemscope=""
                                             itemtype="http://schema.org/Product">
                                            <div class="thumbnail-container">

                                                <a href="audio/22-408-aenean-porta-ligula-egestas-east.html#/1-size-s/10-color-red"
                                                   class="thumbnail product-thumbnail two-image">
                                                    <img class="img-fluid image-cover"
                                                         src="{{ getPhoto('products', $product->images[0]->photo) ?? '' }}"
                                                         alt=""
                                                         data-full-size-image-url="{{ getPhoto('products', $product->images[0]->photo) ?? '' }}"
                                                         width="600" height="600">
                                                    <img class="img-fluid image-secondary"
                                                         src="{{ getPhoto('products' ,$product->images[1]->photo) ?? '' }}"
                                                         alt=""
                                                         data-full-size-image-url="{{ getPhoto('products', $product->images[1]->photo) ?? '' }}"
                                                         width="600" height="600">
                                                </a>


                                                <div class="product-flags new">New</div>


                                            </div>
                                            <div class="product-description">
                                                <div class="product-groups">

                                                    <div class="category-title"><a
                                                            href="audio/22-aenean-porta-ligula-egestas-east.html">Audio</a>
                                                    </div>

                                                    <div class="group-reviews">
                                                        <div class="product-comments">
                                                            <div class="star_content">
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                                <div class="star"></div>
                                                            </div>
                                                            <span>0 review</span>
                                                        </div>
                                                        <p class="seller_name">
                                                            <a title="View seller profile"
                                                               href="jmarketplace/1_david-james/index.htm">
                                                                <i class="fa fa-user"></i>
                                                                David James
                                                            </a>
                                                        </p>

                                                        <div class="info-stock ml-auto">
                                                            <label class="control-label">Availability:</label>
                                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                                            {{$product->in_stock ? 'in stock' : 'out of stock'}}
                                                        </div>
                                                    </div>

                                                    <div class="product-title" itemprop="name"><a
                                                            href="">{{ $product->name }}</a></div>

                                                    <div class="product-group-price">

                                                        <div class="product-price-and-shipping">


                                                            <span itemprop="price" class="price">{{ $product->special_price ?? $product->price }}</span>
                                                             @if($product->special_price)
                                                                 <span class="regular-price">{{ $product->price }}</span>
                                                             @endif

                                                        </div>

                                                    </div>
                                                    <div class="product-desc" itemprop="desciption">
                                                        {!! $product->description !!}
                                                    </div>
                                                </div>
                                                <div class="product-buttons d-flex justify-content-center"
                                                     itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                    <form action="http://demo.bestprestashoptheme.com/savemart/en/cart"
                                                          method="post" class="formAddToCart">
                                                        <input type="hidden" name="token"
                                                               value="28add935523ef131c8432825597b9928">
                                                        <input type="hidden" name="id_product" value="22">
                                                        <a class="add-to-cart" href="#"
                                                           data-button-action="add-to-cart"><i class="novicon-cart"></i><span>Add to cart</span></a>
                                                    </form>

                                                    <a class="removeFromWishlist addToWishlist wishlistProd_22" href="#"
                                                       data-product-id="{{$product->id}}"
                                                    >
                                                        <i class="fa fa-heart"></i>
                                                        <span>Remove From Wishlist</span>
                                                    </a>


                                                    <a href="#" class="quick-view hidden-sm-down"
                                                       data-product-id="{{ $product->id }}"
                                                       data-link-action="quickview">
                                                        <i class="fa fa-search"></i><span> Quick view</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                            @include('front.includes.product-details', $product)

                                   @endforeach
                                 @endisset

                                </div>
                            </div>

                        </div>


                        <div id="js-product-list-bottom">

                            <nav class="pagination row justify-content-around">
                                <div class="col col-xs-12 col-lg-6 col-md-12">

    <span class='showing'>
    Showing 1-4 of 4 item(s)
    </span>

                                </div>
                                <div class="col col-xs-12 col-lg-6 col-md-12">

                                    <ul class="page-list">
                                        <li class="current">
                                            <a rel="nofollow"
                                               href="36-mini-speaker-27.html?home=home_3&amp;order=product.position.asc"
                                               class="disabled js-search-link">
                                                1
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </nav>

                        </div>


                    </section>

                </section>

            </div>
        </div>
    </div>

    @include('front.includes.alerts.not-logged')
    @include('front.includes.alerts.alert1')
    @include('front.includes.alerts.alert2')
@stop

@section('scripts')

    <script>

        $(document).on('click', '.quick-view', function() {
            $('.quickview-modal-product-details-' + $(this).attr('data-product-id')).css('display', 'block');
        });

        $(document).on('click', '.close', function() {
            $($('.quickview-modal-product-details-' + $(this).attr('data-product-id'))).css('display', 'none');
            $('.not-loggedin-modal').css('display', 'none');
        });




        $(document).on('click', '.removeFromWishlist', function (e) {
            e.preventDefault();

            @guest()
            $('.not-loggedin-modal').css('display','block');
            @endguest


            $.ajax({
                type: 'delete',
                url: "{{Route('wishlist.destroy')}}",
                data: {
                    'productId': $(this).attr('data-product-id'),
                    '_token': "{{csrf_token()}}",
                },
                success: function (data) {
                    location.reload();
                }
            });
        });
    </script>

@stop
