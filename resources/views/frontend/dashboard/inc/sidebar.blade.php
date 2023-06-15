<div class="col-lg-3 col-md-12">
    <!--====== Dashboard Features ======-->
    <div class="dash__box dash__box--bg-white dash__box--shadow u-s-m-b-30">
        <div class="dash__pad-1">

            <span class="dash__text u-s-m-b-16">{{ __('frontend.hello') }}, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
            <ul class="dash__f-list">
                <li>

                    <a href="dashboard.html">{{ __('frontend.manage_my_account') }}</a>
                </li>
                <li>
                    <a href="{{ route('frontend.profile.index') }}" class="{{ request()->routeIs('frontend.profile.*') ? 'dash-active' : '' }}">{{ __('frontend.my_profile') }}</a>
                </li>
                <li>
                    <a href="{{ route('frontend.delivery-addresses.index') }}" class=" {{ request()->routeIs('frontend.delivery-addresses.*') ? 'dash-active' : '' }}">
                        {{ __('frontend.delivery_addresses') }}
                    </a>
                </li>
                <li>

                    <a href="dash-track-order.html">Track Order</a>
                </li>
                <li>

                    <a href="dash-my-order.html">{{ __('frontend.my_orders') }}</a>
                </li>
                <li>

                    <a href="dash-payment-option.html">My Payment Options</a>
                </li>
                <li>

                    <a href="dash-cancellation.html">{{ __('frontend.my_returns_and_cancellations') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="dash__box dash__box--bg-white dash__box--shadow dash__box--w">
        <div class="dash__pad-1">
            <ul class="dash__w-list">
                <li>
                    <div class="dash__w-wrap">

                        <span class="dash__w-icon dash__w-icon-style-1"><i class="fas fa-cart-arrow-down"></i></span>

                        <span class="dash__w-text">4</span>

                        <span class="dash__w-name">{{ __('frontend.orders_placed') }}</span>
                    </div>
                </li>
                <li>
                    <div class="dash__w-wrap">

                        <span class="dash__w-icon dash__w-icon-style-2"><i class="fas fa-times"></i></span>

                        <span class="dash__w-text">0</span>

                        <span class="dash__w-name">{{ __('frontend.cancel_orders') }}</span>
                    </div>
                </li>
                <li>
                    <div class="dash__w-wrap">

                        <span class="dash__w-icon dash__w-icon-style-3"><i class="far fa-heart"></i></span>

                        <span class="dash__w-text">0</span>

                        <span class="dash__w-name">{{ __('frontend.wishlist') }}</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--====== End - Dashboard Features ======-->
</div>
