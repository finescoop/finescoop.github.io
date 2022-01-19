<div class="border-t lg:border-0 w-full lg:w-1/5 bg-grey-lighter-2 px-6 pt-10">
	<div>
		<h3 class="text-indigo-dark font-normal">
			Top Articles
			<strong>last 24 hours</strong>
		</h3>
		<div class="flex flex-wrap -ml-2 justify-start items-center">
			<?php $__currentLoopData = $posts->take(12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<a
					href="<?php echo e($post->getUrl()); ?>"
					class="w-1/6 lg:w-1/5 max-w-tiny shadow-md block m-2 transition-normal hover:brighter"
				>
					<img
						src="<?php echo e($post->image); ?>"
						title="<?php echo e($post->title); ?>"
						alt="<?php echo e($post->title); ?>"
					>
				</a>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
	<div class="mt-6">
		<h3 class="text-indigo-dark font-normal">
			New Articles
		</h3>
		<?php $__currentLoopData = $posts->take(12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<a href="<?php echo e($post->getUrl()); ?>">
				<div class="flex items-start mt-2">
					<img
						src="<?php echo e($post->image); ?>"
						alt="read"
						class="w-1/6 lg:w-1/5 max-w-tiny shadow-md block transition-normal hover:brighter">
					<div class="ml-3">
						<p class="text-sm leading-normal">
							<?php echo e(\Illuminate\Support\Str::limit($post->title, 33)); ?>

						</p>
						<p class="text-indigo text-xs mt-1">
							<?php echo e(\Illuminate\Support\Str::limit($post->description, 60)); ?>

						</p>
					</div>
				</div>
			</a>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
</div>

<?php /**PATH /home/runner/work/finescoop.github.io/finescoop.github.io/source/_layouts/partials/related.blade.php ENDPATH**/ ?>