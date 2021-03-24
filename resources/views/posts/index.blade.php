@extends('layouts.app')

@section('content')
    <div class="lg:flex">
        <div class="lg:w-1/6">
            @include ('_sidebar-links')
        </div>

        <div class="lg:flex-1 lg:mx-8 p-2">
            @include('_make-post')

            <div class="border border-pink-500 rounded-lg mt-4">
                @foreach($posts as $post)
                    @include('_post')
                @endforeach
            </div>
        </div>
        <div class="lg:w-1/6">
            @include ('_friends-list')
        </div>
    </div>
@endsection
