<div class="z-50 fixed w-full h-16 bg-darker shadow-lg text-center p-4 px-6 flex items-center">
	<div class="hidden lg:block lg:w-1/4 xl:w-1/5 pr-8">
		<a href="/" class="flex justify-start pl-6 font-bold text-lightest">
			{{ $page->siteName }}
		</a>
	</div>
	<div class="lg:hidden pr-3" id="mobile-nav-trigger">
		<div
			class="toggle block"
			onclick="navMenu.toggle()"
		>
			<i class="mdi mdi-menu text-2xl" id="nav-menu-show"></i>
			<i class="mdi mdi-close text-2xl hidden" id="nav-menu-hide"></i>
		</div>
	</div>
	<div class="flex flex-grow items-center lg:w-3/4 xl:w-4/5">
		<span class="relative w-full">
	        <div id="vue-search" class="flex flex-1 justify-end items-center">
	            <search></search>
			</div>
		</span>
		<a
			href="/"
			class="text-sm text-right text-lightest py-2 px-3 hover:text-grey-dark no-underline hidden lg:block lg:w-1/3 px-6"
		>
			Back Home
		</a>
	</div>
</div>

@push('scripts')
	<script>
		const navMenu = {
			toggle() {
				const menu = document.getElementById('nav-menu');
				menu.classList.toggle('hidden');
				document.getElementById('nav-menu-hide').classList.toggle('hidden');
				document.getElementById('nav-menu-show').classList.toggle('hidden');
			},
		}
	</script>
@endpush
