<div class="flex p-4 border-b border-b-pink">
    <div class="mr-2" style="flex-shrink: 0">
        <a href="{{ route('profile', $post->user) }}"><img
                src="{{ $post->user->avatar }}"
                alt=""
                class="rounded-full mr-2"
                width="50"

            >
        </a>
    </div>

    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ route('profile', $post->user) }}">
                {{ $post->user->name }}
            </a>
        </h5>

        <p class="text-sm">
            {{ $post->body }}
        </p>

        <div class="flex">
            <form method="POST"w
                action="/posts/{{ $post->id }}/like">

                <div>
                    <button type="submit" class="flex items-center pt-3">
                        <img src="{{ asset('images/dislike.png') }}" alt="dislike" class="w-6 pr-1">
                        <span class="text-xs text-gray-400">
                            {{ $post->likes ?: 0 }}
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
