<div class="border-t lg:border-0 w-full lg:w-1/5 bg-grey-lighter-2 px-6 pt-10">
	<div>
		<h3 class="text-indigo-dark font-normal">
			Top Articles
			<strong>last 24 hours</strong>
		</h3>
		<div class="flex flex-wrap -ml-2 justify-start items-center">
			@foreach($posts->take(12) as $post)
				<a
					href="{{ $post->getUrl() }}"
					class="w-1/6 lg:w-1/5 max-w-tiny shadow-md block m-2 transition-normal hover:brighter"
				>
					<img
						src="{{ $post->image }}"
						title="{{ $post->title }}"
						alt="{{ $post->title }}"
					>
				</a>
			@endforeach
		</div>
	</div>
	<div class="mt-6">
		<h3 class="text-indigo-dark font-normal">
			New Articles
		</h3>
		@foreach($posts->take(12) as $post)
			<a href="{{ $post->getUrl() }}">
				<div class="flex items-start mt-2">
					<img
						src="{{ $post->image }}"
						alt="read"
						class="w-1/6 lg:w-1/5 max-w-tiny shadow-md block transition-normal hover:brighter">
					<div class="ml-3">
						<p class="text-sm leading-normal">
							{{ \Illuminate\Support\Str::limit($post->title, 33) }}
						</p>
						<p class="text-indigo text-xs mt-1">
							{{ \Illuminate\Support\Str::limit($post->description, 60) }}
						</p>
					</div>
				</div>
			</a>
		@endforeach
	</div>
</div>

