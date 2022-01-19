<a
    href="{{ $post->getUrl() }}"
    title="Read more - {{ $post->title }}"
    class="article-post"
>
    <div class="lg:my-4 w-full lg:flex">
        <div
            class="h-48 lg:h-auto lg:w-64 flex-none bg-cover text-center overflow-hidden"
            style="background-image: url('{{ $post->image }}')"
            title="Woman holding a mug">
        </div>
        <div class="border border-primary bg-white flex flex-col justify-between leading-normal">
            <div class="px-4 py-2 mb-2">
                <div class="text-darker leading-snug font-semibold text-lg mb-4 article-title">
                    {{ $post->title }}
                </div>
                <p class="text-light font-normal text-sm article-description">
                    {!! $post->description !!}
                </p>
            </div>
        </div>
    </div>
</a>