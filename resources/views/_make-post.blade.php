<div class="border border-green-700 px-4 py-4 rounded-lg">
    <form method="POST" action="/posts">
        @csrf
        <textarea
            id=""
            name="body"
            class="w-full"
            placeholder="No mods, only shitposts"
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ current_user()->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >

            <button type="submit" class="bg-purple-600 hover:bg-pink-300 rounded-lg shadow py-0.5 px-6 text-white">Shitpost</button>

        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
    @enderror
</div>
