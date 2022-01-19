<div class="bg-secondary border-t border-primary">
	<div class="container mx-auto px-16 pt-10 pb-6">
		<div class="flex flex-wrap">
			<!-- For Businesses !-->
			<div class="w-full sm:w-1/2 lg:w-1/4 text-center md:text-left mb-4 md:mb-0">
				<h5 class="uppercase mb-2 font-bold">Categories</h5>
				<ul class="mb-4">
					@foreach($page->allcategories as $category)
						<li class="mt-2">
							<a
								href="/categories/{{ strtolower($category) }}"
							   	class="hover:underline text-secondary hover:text-orange-500 text-sm"
							>
								{{ ucwords($category) }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
			<!-- // For Businesses !-->

			<!-- Top Articles !-->
			<div class="w-full sm:w-1/2 lg:w-2/4 text-center md:text-left mb-4 md:mb-0">
				<h5 class="uppercase mb-2 font-bold">Top Articles</h5>
				<ul class="mb-4">
					@foreach($posts->take(10) as $post)
						<li class="mt-2">
							<a href="{{ $post->getUrl() }}" class="hover:underline text-secondary hover:text-orange-500 text-sm">
								{{ \Illuminate\Support\Str::limit($post->title, 50) }}
							</a>
						</li>
					@endforeach
				</ul>
			</div>
			<!-- // Top Articles !-->

			<!-- Newsie !-->
			<div class="w-full sm:w-1/2 lg:w-1/4 text-center md:text-left mb-4 md:mb-0">
				<h5 class="uppercase mb-2 font-bold">{{ $page->siteName }}</h5>
				<div class="flex flex-col">
					<span class="text-sm">Contact: help&commat;{{ strtolower($page->siteName) }}.com</span>
					<span class="text-sm">Enquiries: enquiries&commat;{{ strtolower($page->siteName) }}.com</span>
				</div>
				<div class="mt-4">
					<i class="text-3xl mdi mdi-facebook-box"></i>
					<i class="text-3xl mdi mdi-twitter-box"></i>
				</div>
				<h5 class="uppercase mb-2 font-bold">Useful</h5>
				<ul class="mb-4">
					@foreach([
    					['title' => 'Terms', 'uri' => 'terms'],
    					['title' => 'Privacy', 'uri' => 'privacy']
   			 		] as $link)
						<li class="mt-2">
							<a
								href="/pages/useful/{{ $link['uri'] }}"
								class="hover:underline text-secondary hover:text-orange-500 text-sm"
							>
								{{ $link['title'] }}
							</a>
						</li>
				@endforeach
			</div>
			<!-- // Newsie !-->
			<div class="flex w-full mt-6 text-xs items-center justify-center text-gray-500">
				FineScoop is a member of the ONLY SORT Group and registered in England (no. 12847598). <br>
				Registered office ONLY SORT GROUP, SKELMERSDALE, England, UK, WN8 6TJ. <br><br>
				Copyright &copy; 2020 by FINESCOOP
			</div>
		</div>
	</div>
</div>
