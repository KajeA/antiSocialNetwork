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
                src="{{ auth()->user()->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2"
            >

            <button type="submit" class="bg-purple-600 rounded-lg shadow py-1 px-3 text-black">Shitpost</button>

        </footer>
    </form>

    @error('body')
        <p class="text-red-500 text-sm mt-3">{{ $message }}</p>
    @enderror
</div>
