<x-app-layout>
    @php
        $category = App\Models\Category::where('url', $url)
            ->select('id', 'name')
            ->first();
    @endphp
    @section('pageTitle', __('frontend.products_of', ['name' => $category->name]))
    @section('breadcrumbTitle', __('frontend.products_of', ['name' => $category->name]))
    @section('breadcrumbSubtitle', __('frontend.products_of', ['name' => $category->name]))




    <!--====== App Content ======-->
    <div class="app-content">

        <!--====== Section 1 ======-->
        @livewire('frontend.shop.category-product-component', ['url' => $url])
        <!--====== End - Section 1 ======-->
    </div>
    <!--====== End - App Content ======-->

    <!--====== Side Filters ======-->
    @livewire('frontend.shop.side-filter-component')
    <!--====== End - Side Filters ======-->


</x-app-layout>