@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <div class="relative">
            <img src="{{ asset('images/banner.jpg') }}"
                 alt=""
                 class="mb-2 rounded-lg"
            >

            <img src="{{ $user->avatar }}"
                 alt=""
                 class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                 style="left: 50%"
                 width="150"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Started shitposting {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                {{-- @can ('edit', $user) --}}
                <a href=""
                   class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                    Edit Profile</a>
                {{-- @endcan --}}

                <a href=""
                   class="bg-purple-400 rounded-full shadow py-2 px-4 text-white text-xs mr-2">
                    Follow me</a>
            </div>
        </div>
        <img
            src="{{ asset('images/avatar.jpg') }}"
            alt=""
            class="rounded-full mr-2 absolute"
            style="width: 150px; left: calc(50% - 80px); top: 42%"
        >

        <p class="text-sm" style="text-align: center">
            I've opened a door here that I regret.
            Well, what do you expect, mother? That's why you always leave a note!
            Get me a vodka rocks. And a piece of toast.
            We just call it a sausage.
            Now, when you do this without getting punched in the chest, you'll have more fun.
        </p>


    </header>

    @include('_timeline', [
        'posts' => $user->posts])
@endsection
