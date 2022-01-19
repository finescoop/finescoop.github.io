<?php $__env->startPush('meta'); ?>
    <meta name="description" content="<?php echo e($page->title); ?>">
    <meta name="keywords" content="<?php echo e($page->title); ?>">
    <link rel="canonical" href="<?php echo e($page->getUrl()); ?>" />
    <meta property="og:title" content="<?php echo e($page->title); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
    <meta property="og:image" content="<?php echo e($page->image ?? '/assets/images/breaking.jpg'); ?>"/>
    <meta property="og:description" content="<?php echo e($page->description); ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@finescoop" />
    <meta name="twitter:creator" content="@finescoop" />
    <script type="application/ld+json">
    {
  	"@context": "https://schema.org",
	"dateModified": "2020-09-30T01:30:56+0100",
	"image": {
		"@type": "ImageObject",
		"url": "<?php echo e($page->image ?? '/assets/images/breaking.jpg'); ?>",
		"height": "382",
		"width": "636"
	},
	"author": {
		"@type": "Person",
		"name": "By Finescoop"
	},
	"mainEntityOfPage": {
		"@type": "WebPage", 
		"@id": "<?php echo e($page->getUrl()); ?>",
		"name": "<?php echo e($page->description); ?>"
	},
	"publisher": {
		"@type": "Organization", 
		"name": "Finescoop",
		"logo": {
			"@type": "ImageObject",
			"url": "http://finescoop.com/assets/images/logo.svg",
			"width": "350",
			"height": "60"
		}
	},
	"datePublished": "2020-09-30T00:38:14+0100",
	"@type": "NewsArticle", 
	"description": "<?php echo e($page->description); ?>",
	"headline": "<?php echo e($page->title); ?>"
}
</script>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('header'); ?>
    <?php $__env->startComponent('_layouts.partials.header', [
        'image' => $page->image,
        'title' => $page->title,
        'description' => $page->description,
    ]); ?>
    <?php if (isset($__componentOriginalc52f5d6b9e76809f290f5c53cdd201d871586d0e)): ?>
<?php $component = $__componentOriginalc52f5d6b9e76809f290f5c53cdd201d871586d0e; ?>
<?php unset($__componentOriginalc52f5d6b9e76809f290f5c53cdd201d871586d0e); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>

    <!-- Breadcrumbs !-->
    <?php $__env->startComponent('_layouts.partials.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb'); ?>
            Reading now:
            <span class="ml-2 text-xs font-bold">
                <?php echo e($page->title); ?>

            </span>
        <?php $__env->endSlot(); ?>
        <?php $__env->slot('social'); ?>
            <div class="flex">
                <a
                    href="https://www.facebook.com/sharer/sharer.php?display=page&u=<?php echo e($page->getUrl()); ?>"
                    target="_blank"
                >
                    <i class="mdi mdi-facebook text-3xl"></i>
                </a>
                <a
                    href="http://www.twitter.com/share?url=<?php echo e($page->getUrl()); ?>"
					target="_blank"
				>
                    <i class="mdi mdi-twitter text-3xl"></i>
                </a>
            </div>
        <?php $__env->endSlot(); ?>
    <?php if (isset($__componentOriginal0d8418ef40e83af68235dfe0376cafa6fb65758c)): ?>
<?php $component = $__componentOriginal0d8418ef40e83af68235dfe0376cafa6fb65758c; ?>
<?php unset($__componentOriginal0d8418ef40e83af68235dfe0376cafa6fb65758c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
    <!-- // Breadcrumbs !-->

    <div class="flex-wrap p-4 lg:p-0 md:pb-8 whitespace-pre-line text-sm">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <nav class="flex flex-col md:flex-row justify-between text-sm text-dark mb-4 mx-2 md:mx-0">
        <div class="w-full md:w-1/2 mb-3 mx-3 md:mx-0 mr-0 md:mr-2">
            <?php if($next = $page->getNext()): ?>
                <a
                    href="<?php echo e($next->getUrl()); ?>"
                    title="Older Post: <?php echo e($next->title); ?>"
                >
                    &LeftArrow; <?php echo e($next->title); ?>

                </a>
            <?php endif; ?>
        </div>

        <div class="w-full md:w-1/2 mx-3">
            <?php if($previous = $page->getPrevious()): ?>
                <a
                    href="<?php echo e($previous->getUrl()); ?>"
                    title="Newer Post: <?php echo e($previous->title); ?>"
                >
                    <?php echo e($previous->title); ?> &RightArrow;
                </a>
            <?php endif; ?>
        </div>
    </nav>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=612047886170325&autoLogAppEvents=1" nonce="5vbmW42u"></script>

    <div class="w-full mx-3">
        <div class="fb-comments" data-href="http://finescoop.com" data-numposts="10" data-width=""></div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/runner/work/finescoop.github.io/finescoop.github.io/source/_layouts/post.blade.php ENDPATH**/ ?>