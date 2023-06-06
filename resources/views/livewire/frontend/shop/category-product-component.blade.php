 <div class="u-s-p-y-90">
     <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="shop-p">
                     <div class="shop-p__toolbar u-s-m-b-30">
                         <div class="shop-p__meta-wrap u-s-m-b-60">
                             <span class="shop-p__meta-text-1">{{ __('frontend.found') }} {{ $products->count() ?? 0 }} {{ __('frontend.results') }}</span>
                             <div class="shop-p__meta-text-2">
                                 @if ($category->subCategories->count() > 0)
                                     <span>{{ __('frontend.related_searches') }}:</span>
                                     @foreach ($category->subCategories as $sub)
                                         <a class="gl-tag btn--e-brand-shadow" href="{{ route('frontend.category.products', ['url' => $sub->url]) }}">{{ $sub->name }}</a>
                                     @endforeach
                                 @endif
                             </div>
                         </div>
                         <div class="shop-p__tool-style">
                             <div class="tool-style__group u-s-m-b-8">
                                 <span class="js-shop-filter-target" data-side="#side-filter">{{ __('product.filters') }}</span>
                                 <span class="js-shop-grid-target">{{ __('frontend.grid') }}</span>
                                 <span class="js-shop-list-target is-active">{{ __('frontend.list') }}</span>
                             </div>
                             <form>
                                 <div class="tool-style__form-wrap">
                                     <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                             <option>Show: 8</option>
                                             <option selected>Show: 12</option>
                                             <option>Show: 16</option>
                                             <option>Show: 28</option>
                                         </select></div>
                                     <div class="u-s-m-b-8"><select class="select-box select-box--transparent-b-2">
                                             <option selected>Sort By: Newest Items</option>
                                             <option>Sort By: Latest Items</option>
                                             <option>Sort By: Best Selling</option>
                                             <option>Sort By: Best Rating</option>
                                             <option>Sort By: Lowest Price</option>
                                             <option>Sort By: Highest Price</option>
                                         </select></div>
                                 </div>
                             </form>
                         </div>
                     </div>
                     <div class="shop-p__collection">
                         <div class="row is-list-active">
                             @foreach ($products as $product)
                                 <div class="col-lg-3 col-md-4 col-sm-6">
                                     <div class="product-m">
                                         <div class="product-m__thumb">
                                             <a class="aspect aspect--bg-grey aspect--square u-d-block" href="#">
                                                 @if ($product->getFirstMediaUrl('products', 'medium'))
                                                     <img class="aspect__img" src="{{ $product->getFirstMediaUrl('products', 'medium') }}" alt="{{ $product->name }}">
                                                 @else
                                                     <img class="aspect__img" src="{{ asset('frontend/dist/images/product/electronic/product6.jpg') }}" alt="{{ $product->name }}">
                                                 @endif
                                             </a>
                                             <div class="product-m__quick-look">
                                                 <a class="fas fa-search" data-modal="modal" data-modal-id="#quick-look" data-tooltip="tooltip" data-placement="top" title="Quick Look"></a>
                                             </div>
                                             <div class="product-m__add-cart">
                                                 <a class="btn--e-brand" data-modal="modal" data-modal-id="#add-to-cart">{{ __('frontend.add_to_card') }}</a>
                                             </div>
                                         </div>
                                         <div class="product-m__content">
                                             <div class="product-m__category">
                                                 <a href="shop-side-version-2.html">{{ $product->category->name }}</a>
                                             </div>
                                             <div class="product-m__name">
                                                 <a href="product-detail.html">{{ $product->name }}</a>
                                             </div>
                                             <div class="product-m__rating gl-rating-style">
                                                 <i class="fas fa-star"></i>
                                                 <i class="fas fa-star"></i>
                                                 <i class="fas fa-star-half-alt"></i>
                                                 <i class="far fa-star"></i>
                                                 <i class="far fa-star"></i>
                                                 <span class="product-m__review">(23)</span>
                                             </div>
                                             @php
                                                 $dataPrices = App\Models\Product::applyDiscount($product->id, $product->price);
                                             @endphp
                                             @isset($dataPrices)
                                                 @if ($dataPrices['discount'] > 0)
                                                     <span class="font-weight-bold product-o__price text-green">
                                                         ${{ $dataPrices['final_price'] }}
                                                         <span class="text-secondary font-weight-normal product-o__discount text-red">${{ $dataPrices['original_price'] }}</span>
                                                     </span>
                                                 @else
                                                     <span class="product-m__price">
                                                         ${{ $product->price }}
                                                     </span>
                                                 @endif
                                             @endisset
                                             <div class="product-m__hover">
                                                 <div class="product-m__preview-description">
                                                     <span>{{ $product->description }}</span>
                                                 </div>
                                                 <div class="product-m__wishlist">
                                                     <a class="far fa-heart" href="#" data-tooltip="tooltip" data-placement="top" title="Add to Wishlist"></a>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             @endforeach
                         </div>
                     </div>
                     <div class="u-s-p-y-60">
                         <!--====== Pagination ======-->
                         <ul class="shop-p__pagination">
                             <li class="is-active">
                                 <a href="shop-list-full.html">1</a>
                             </li>
                             <li>
                                 <a href="shop-list-full.html">2</a>
                             </li>
                             <li>
                                 <a href="shop-list-full.html">3</a>
                             </li>
                             <li>
                                 <a href="shop-list-full.html">4</a>
                             </li>
                             <li>
                                 <a class="fas fa-angle-right" href="shop-list-full.html"></a>
                             </li>
                         </ul>
                         <!--====== End - Pagination ======-->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
