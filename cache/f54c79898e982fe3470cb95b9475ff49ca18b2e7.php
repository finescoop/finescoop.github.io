<?php if($pages->count() > 1): ?>
	<nav class="flex text-base my-8 px-2 md:px-0 pagination">
		<?php if($previous = $previousPage): ?>
			<a
				href="<?php echo e($page->baseUrl); ?><?php echo e($pagination->first); ?>"
				title="First Page"
				class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
			>&LeftArrow; &LeftArrow; first</a>
			<a
				title="Previous Page"
				class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
				href="<?php echo e($page->baseUrl); ?><?php echo e($previous); ?>">&LeftArrow; previous</a>
		<?php endif; ?>

		<span class="items-center flex mr-2 text-sm font-bold">
			Page <?php echo e($pagination->currentPage); ?> / <?php echo e($pagination->totalPages); ?>

		</span>

		<?php if($next = $nextPage): ?>
			<a
				href="<?php echo e($page->baseUrl); ?>/<?php echo e($next); ?>"
				title="Next Page"
				class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
			>next &RightArrow;</a>
			<a
				href="<?php echo e($page->baseUrl); ?><?php echo e($pagination->last); ?>"
				title="Last Page"
				class="bg-gray-200 hover:bg-gray-400 rounded mr-3 px-5 py-3"
			>last &RightArrow;&RightArrow;</a>
		<?php endif; ?>
	</nav>
<?php endif; ?><?php /**PATH /home/runner/work/finescoop.github.io/finescoop.github.io/source/_layouts/components/pagination.blade.php ENDPATH**/ ?>