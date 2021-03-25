@if(current_user()->isNot($user))
    <form method="POST" action="/profiles/{{ $user->name }}/follow">
        @csrf
        <button type="submit"
                class="bg-purple-400 rounded-full shadow py-2 px-4 text-white text-xs mr-2">
            {{ current_user()->isFollowing($user) ? 'Unfollow Me' : 'Follow Me' }}
        </button>
    </form>
@endif
