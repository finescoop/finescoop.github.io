<?php $__env->startPush('meta'); ?>
    <meta property="og:title" content="<?php echo e($page->siteName); ?> News" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
    <meta property="og:description" content="Latest breaking news articles from <?php echo e($page->siteName); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>

    <!-- Breadcrumbs !-->
    <?php $__env->startComponent('_layouts.partials.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb'); ?>
            Latest Articles
        <?php $__env->endSlot(); ?>
    <?php if (isset($__componentOriginal0d8418ef40e83af68235dfe0376cafa6fb65758c)): ?>
<?php $component = $__componentOriginal0d8418ef40e83af68235dfe0376cafa6fb65758c; ?>
<?php unset($__componentOriginal0d8418ef40e83af68235dfe0376cafa6fb65758c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
    <!-- // Breadcrumbs !-->

    <div class="flex-wrap order-2 md:pb-8">
        <?php $__currentLoopData = $pagination->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('_layouts.components.post-preview-inline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php if($post != $pagination->items->last()): ?>
                <hr class="hidden md:block border-b my-6">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php echo $__env->make('_layouts.components.pagination', [
            'pages' => $pagination->pages,
            'currentPage' => $pagination->currentPage,
            'previousPage' => $pagination->previous,
            'nextPage' => $pagination->next,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/runner/work/finescoop.github.io/finescoop.github.io/cache/c4566410966f42185d2d50545b7203569dc1c057.blade.php ENDPATH**/ ?>