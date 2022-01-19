@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="{{ $page->description }}" />
@endpush

@section('body')

    @foreach ($posts->pluck('category')->unique() as $category)
        <a class="btn btn-primary-outline btn-sm m-xs-l-2 text-uppercase" href="{{ $page->baseUrl }}/categories/{{ $category }}">{{ $category }}</a>
    @endforeach

    <!-- Breadcrumbs !-->
    @component('_layouts.partials.breadcrumb')
        @slot('breadcrumb')
            Reading now:
            <span class="ml-1 text-xs font-bold flex">
                @yield('content')
            </span>
        @endslot
    @endcomponent
    <!-- // Breadcrumbs !-->

    <!-- Articles -->
    <!-- Articles -->
    <div class="flex-wrap order-2 md:pb-8">
        @foreach ($page->posts($posts) as $post)
            @include('_layouts.components.post-preview-inline')
            @if ($post != $post->last())
                <hr class="border-b my-6">
            @endif
        @endforeach

{{--        @include('_layouts.components.pagination', [--}}
{{--            'pages' => $page->posts($posts)->pages,--}}
{{--            'currentPage' => $page->posts($posts)->currentPage,--}}
{{--            'previousPage' => $page->posts($posts)->previous,--}}
{{--            'nextPage' => $page->posts($posts)->next,--}}
{{--        ])--}}
    </div>

@stop
