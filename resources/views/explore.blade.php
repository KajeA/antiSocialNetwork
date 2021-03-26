@extends('layouts.app')


@section('content')
    <div>
        <h1 class="font-bold pb-5 text-4xl text-purple-600">
            Explore other shitposters
        </h1>
        <div class="grid grid-cols-2 gap-6">
            @foreach($users as $user)
                <a href="{{ $user->path() }}" class="flex items-center mb-5">
                    <img src="{{ $user->avatar }}"
                         alt="{{ $user->name }}'s avatar"
                         width="60"
                         class="mr-3 rounded-lg"
                    >
                    <h4 class="font-bold">{{ $user->name }}</h4>
                </a>
            @endforeach
        </div>
    </div>
@endsection
