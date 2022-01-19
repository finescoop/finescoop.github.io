<div class="flex flex-col lg:flex-row border-b boder-primary shadow-xs">

	<!-- News image !-->
	<div class="w-full lg:w-1/2 bg-primary">
		<img
			class="h-full w-full"
			src="<?php echo e($image ?? ''); ?>"
		>
	</div><!-- // News image !-->

	<!-- Title and Description !-->
	<div class="w-full lg:w-1/2 bg-primary p-4 md:p-0 sm:py-6  flex justify-start">
		<div class="items-center pt-10 md:px-10">
			<h2 class="text-2xl mt-2 font-bold mb-2 leading-tight text-darker">
				<?php echo e($title ?? ''); ?>

			</h2>
			<h3 class="text-sm font-semibold my-6 sm:mb-16 text-light">
				<?php echo e($description ?? ''); ?>

			</h3>
			<?php echo e($buttons ?? ''); ?>

		</div>
	</div><!-- // Title and Description !-->
</div>
<?php /**PATH /home/runner/work/finescoop.github.io/finescoop.github.io/source/_layouts/partials/header.blade.php ENDPATH**/ ?>