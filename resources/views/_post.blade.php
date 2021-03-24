<div class="flex p-4 border-b border-b-pink">
    <div class="mr-2" style="flex-shrink: 0">
        <img
            src="{{ $post->user->avatar }}"
            alt=""
            class="rounded-full mr-2"
        >
    </div>

    <div>
        <h5 class="font-bold mb-4">{{ $post->user->name }}</h5>

        <p class="text-sm">
            {{ $post->body }}
        </p>
    </div>
</div>
