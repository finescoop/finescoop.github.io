<a
    href="<?php echo e($post->getUrl()); ?>"
    title="Read more - <?php echo e($post->title); ?>"
    class="article-post"
>
    <div class="lg:my-4 w-full lg:flex">
        <div
            class="h-48 lg:h-auto lg:w-64 flex-none bg-cover text-center overflow-hidden"
            style="background-image: url('<?php echo e($post->image); ?>')"
            title="Woman holding a mug">
        </div>
        <div class="border border-primary bg-white flex flex-col justify-between leading-normal">
            <div class="px-4 py-2 mb-2">
                <div class="text-darker leading-snug font-semibold text-lg mb-4 article-title">
                    <?php echo e($post->title); ?>

                </div>
                <p class="text-light font-normal text-sm article-description">
                    <?php echo $post->description; ?>

                </p>
            </div>
        </div>
    </div>
</a><?php /**PATH /home/runner/work/finescoop.github.io/finescoop.github.io/source/_layouts/components/post-preview-inline.blade.php ENDPATH**/ ?>