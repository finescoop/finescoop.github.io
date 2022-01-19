<?php $__env->startPush('meta'); ?>
    <meta property="og:title" content="<?php echo e($page->title); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e($page->getUrl()); ?>"/>
    <meta property="og:description" content="<?php echo e($page->description); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('body'); ?>

    <?php $__currentLoopData = $posts->pluck('category')->unique(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class="btn btn-primary-outline btn-sm m-xs-l-2 text-uppercase" href="<?php echo e($page->baseUrl); ?>/categories/<?php echo e($category); ?>"><?php echo e($category); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Breadcrumbs !-->
    <?php $__env->startComponent('_layouts.partials.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb'); ?>
            Reading now:
            <span class="ml-1 text-xs font-bold flex">
                <?php echo $__env->yieldContent('content'); ?>
            </span>
        <?php $__env->endSlot(); ?>
    <?php if (isset($__componentOriginal0d8418ef40e83af68235dfe0376cafa6fb65758c)): ?>
<?php $component = $__componentOriginal0d8418ef40e83af68235dfe0376cafa6fb65758c; ?>
<?php unset($__componentOriginal0d8418ef40e83af68235dfe0376cafa6fb65758c); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
    <!-- // Breadcrumbs !-->

    <!-- Articles -->
    <!-- Articles -->
    <div class="flex-wrap order-2 md:pb-8">
        <?php $__currentLoopData = $page->posts($posts); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('_layouts.components.post-preview-inline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php if($post != $post->last()): ?>
                <hr class="border-b my-6">
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>







    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('_layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/runner/work/finescoop.github.io/finescoop.github.io/source/_layouts/category.blade.php ENDPATH**/ ?>