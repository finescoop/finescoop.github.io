@if ($pages->count() > 1)
	<nav class="flex text-base my-8 px-2 md:px-0 pagination">
		@if ($previous = $previousPage)
			<a
				href="{{ $page->baseUrl }}{{ $pagination->first }}"
				title="First Page"
				class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
			>&LeftArrow; &LeftArrow; first</a>
			<a
				title="Previous Page"
				class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
				href="{{ $page->baseUrl }}{{ $previous }}">&LeftArrow; previous</a>
		@endif

		<span class="items-center flex mr-2 text-sm font-bold">
			Page {{ $pagination->currentPage }} / {{ $pagination->totalPages }}
		</span>

		@if ($next = $nextPage)
			<a
				href="{{ $page->baseUrl }}/{{ $next }}"
				title="Next Page"
				class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
			>next &RightArrow;</a>
			<a
				href="{{ $page->baseUrl }}{{ $pagination->last }}"
				title="Last Page"
				class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
			>last &RightArrow;&RightArrow;</a>
		@endif
	</nav>
@endif