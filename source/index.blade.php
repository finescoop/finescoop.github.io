---
pagination:
    collection: posts
---
@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="{{ $page->siteName }} News" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="Latest breaking news articles from {{ $page->siteName }}" />
@endpush

@section('body')

    <!-- Breadcrumbs !-->
    @component('_layouts.partials.breadcrumb')
        @slot('breadcrumb')
            Latest Articles
        @endslot
    @endcomponent
    <!-- // Breadcrumbs !-->

    <div class="flex-wrap order-2 md:pb-8">
        @foreach ($pagination->items as $post)
            @include('_layouts.components.post-preview-inline')
            @if ($post != $pagination->items->last())
                <hr class="hidden md:block border-b my-6">
            @endif
        @endforeach

        @include('_layouts.components.pagination', [
            'pages' => $pagination->pages,
            'currentPage' => $pagination->currentPage,
            'previousPage' => $pagination->previous,
            'nextPage' => $pagination->next,
        ])
    </div>
@stop
