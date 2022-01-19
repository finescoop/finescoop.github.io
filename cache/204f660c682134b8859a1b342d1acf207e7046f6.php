<div class="bg-secondary border-t border-primary">
	<div class="container mx-auto px-16 pt-10 pb-6">
		<div class="flex flex-wrap">
			<!-- For Businesses !-->
			<div class="w-full sm:w-1/2 lg:w-1/4 text-center md:text-left mb-4 md:mb-0">
				<h5 class="uppercase mb-2 font-bold">Categories</h5>
				<ul class="mb-4">
					<?php $__currentLoopData = $page->allcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="mt-2">
							<a
								href="/categories/<?php echo e(strtolower($category)); ?>"
							   	class="hover:underline text-secondary hover:text-orange-500 text-sm"
							>
								<?php echo e(ucwords($category)); ?>

							</a>
						</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<!-- // For Businesses !-->

			<!-- Top Articles !-->
			<div class="w-full sm:w-1/2 lg:w-2/4 text-center md:text-left mb-4 md:mb-0">
				<h5 class="uppercase mb-2 font-bold">Top Articles</h5>
				<ul class="mb-4">
					<?php $__currentLoopData = $posts->take(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="mt-2">
							<a href="<?php echo e($post->getUrl()); ?>" class="hover:underline text-secondary hover:text-orange-500 text-sm">
								<?php echo e(\Illuminate\Support\Str::limit($post->title, 50)); ?>

							</a>
						</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>
			<!-- // Top Articles !-->

			<!-- Newsie !-->
			<div class="w-full sm:w-1/2 lg:w-1/4 text-center md:text-left mb-4 md:mb-0">
				<h5 class="uppercase mb-2 font-bold"><?php echo e($page->siteName); ?></h5>
				<div class="flex flex-col">
					<span class="text-sm">Contact: help&commat;<?php echo e(strtolower($page->siteName)); ?>.com</span>
					<span class="text-sm">Enquiries: enquiries&commat;<?php echo e(strtolower($page->siteName)); ?>.com</span>
				</div>
				<div class="mt-4">
					<i class="text-3xl mdi mdi-facebook-box"></i>
					<i class="text-3xl mdi mdi-twitter-box"></i>
				</div>
				<h5 class="uppercase mb-2 font-bold">Useful</h5>
				<ul class="mb-4">
					<?php $__currentLoopData = [
    					['title' => 'Terms', 'uri' => 'terms'],
    					['title' => 'Privacy', 'uri' => 'privacy']
   			 		]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li class="mt-2">
							<a
								href="/pages/useful/<?php echo e($link['uri']); ?>"
								class="hover:underline text-secondary hover:text-orange-500 text-sm"
							>
								<?php echo e($link['title']); ?>

							</a>
						</li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /home/runner/work/finescoop.github.io/finescoop.github.io/source/_layouts/partials/footer.blade.php ENDPATH**/ ?>