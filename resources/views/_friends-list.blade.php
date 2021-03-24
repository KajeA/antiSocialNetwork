<div class="bg-purple-100 rounded-lg py-4 px-5">
    <h3 class="font-bold text-xl mb-4">Plebs</h3>

    <ul>
        @foreach (auth()->user()->follows as $user)
            <li class="mb-4">
                <div class="flex items-center text-sm">
                    <img
                        src="{{ $user->avatar }}"
                        alt=""
                        class="rounded-full mr-2"
                    >

                    {{ $user->name }}
                </div>
            </li>
        @endforeach
    </ul>
</div>
