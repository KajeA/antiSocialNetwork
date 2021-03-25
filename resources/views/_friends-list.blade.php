<div class="bg-purple-100 rounded-lg py-4 px-5">
    <h3 class="font-bold text-xl mb-4">Plebs</h3>

    <ul>
        @foreach (current_user()->follows as $user)
            <li class="mb-4">
                <div class="text-sm">
                    <a href="{{ route('profile', $user) }}" class="flex items-center">
                        <img
                            src="{{ $user->avatar }}"
                            alt=""
                            class="rounded-full mr-2"
                            width="40"
                        >

                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @endforeach
    </ul>
</div>
