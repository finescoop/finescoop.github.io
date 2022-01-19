<nav
	class="fixed top-0 pt-24 w-full lg:relative lg:flex lg:text-sm bg-dark lg:bg-transparent pin-l pin-r py-4 px-6 lg:pt-10 lg:pl-12 lg:pr-6 -mt-1 lg:mt-0 overflow-y-auto lg:w-1/5 lg:border-r z-40 hidden lg:block xl:block"
	id="nav-menu"
>
	<ul class="list-reset mb-8 w-full">
		<li class="ml-2 mb-4 flex">
			<img
				src="https://image.flaticon.com/icons/svg/684/684834.svg"
				alt="home"
				class="w-4 h-4 mr-2">
			<a
				href="/"
				class="hover:cursor-pointer text-white lg:text-darker no-underline font-medium mobile-home-trigger">
				Home
			</a>
		</li>
		<li class="ml-2 mb-4 flex">
			<img
				src="https://image.flaticon.com/icons/svg/1907/1907524.svg"
				alt="home"
				class="w-4 h-4 mr-2">
			<a
				href="/"
				class="hover:cursor-pointer text-white lg:text-darker no-underline font-medium mobile-home-trigger">
				Latest
			</a>
		</li>
		<li class="ml-2 mb-4">
			<div class="flex">
				<img
					src="https://image.flaticon.com/icons/svg/2020/2020362.svg"
					alt="category"
					class="w-4 h-4 mr-2">
				<div class="hover:cursor-pointer text-white lg:text-darker no-underline font-medium w-full relative flex">
					Categories
				</div>
			</div>
			<ul class="text-grey lg:text-dark list-reset leading-loose mt-2">
				@foreach($page->allcategories as $category)
				<li
					class="
						hover:text-indigo-dark hover:cursor-pointer transition-normal ml-1 border-l border-primary pl-4
						{{ $page->isActive(strtolower($category)) ? 'active text-blue-600' : '' }}
					"
					style="opacity: 1; transform: translateY(0px);"
				>
					<a href="/categories/{{ strtolower($category) }}">
						{{ ucwords($category) }}
					</a>
				</li>
				@endforeach
			</ul>
		</li>
	</ul>
</nav>
