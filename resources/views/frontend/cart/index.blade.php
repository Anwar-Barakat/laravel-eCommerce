<x-app-layout>
    @section('pageTitle', __('frontend.page_of', ['name' => __('frontend.cart')]))

    <!--====== App Content ======-->
    @livewire('frontend.cart.shopping-cart-component')
    <!--====== End - App Content ======-->
</x-app-layout>
