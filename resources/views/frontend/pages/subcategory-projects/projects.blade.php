@extends('frontend.layout.master')
@section('site_title') {{ $subcategory->sub_category ?? __('Subcategory Project') }} @endsection
@section('style')
    <x-select2.select2-css />
@endsection
@section('content')
    <main>
        <x-frontend.category.category/>
        <x-breadcrumb.user-profile-breadcrumb :title="$subcategory->sub_category ?? __('Project Category')" :innerTitle="$subcategory->sub_category ?? '' "/>
        <!-- Project preview area Starts -->
        <div class="preview-area section-bg-2 pat-100 pab-100">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="categoryWrap-wrapper">
                            <div class="shop-contents-wrapper responsive-lg">
                                <div class="shop-icon">
                                    <div class="shop-icon-sidebar">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>

                                @include('frontend.pages.subcategory-projects.sidebar')
                                <input type="hidden" id="subcategory_id" value="{{$subcategory->id ?? ''}}">
                                <div class="shop-contents-wrapper-right search_subcategory_result">
                                    @include('frontend.pages.subcategory-projects.search-subcategory-result')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project preview area end -->
    </main>

@endsection

@section('script')
    @include('frontend.pages.subcategory-projects.subcategory-project-filter-js')
    <x-select2.select2-js />
@endsection