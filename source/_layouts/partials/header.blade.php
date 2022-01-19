<div class="flex flex-col lg:flex-row border-b boder-primary shadow-xs">

	<!-- News image !-->
	<div class="w-full lg:w-1/2 bg-primary">
		<img
			class="h-full w-full"
			src="{{ $image ?? '' }}"
		>
	</div><!-- // News image !-->

	<!-- Title and Description !-->
	<div class="w-full lg:w-1/2 bg-primary p-4 md:p-0 sm:py-6  flex justify-start">
		<div class="items-center pt-10 md:px-10">
			<h2 class="text-2xl mt-2 font-bold mb-2 leading-tight text-darker">
				{{ $title ?? '' }}
			</h2>
			<h3 class="text-sm font-semibold my-6 sm:mb-16 text-light">
				{{ $description ?? '' }}
			</h3>
			{{ $buttons ?? '' }}
		</div>
	</div><!-- // Title and Description !-->
</div>
