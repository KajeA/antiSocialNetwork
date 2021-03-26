<?php


namespace App;


trait Likable
{

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function like($liked = true)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id(),
            ], [
                'liked' => $liked
            ]
        );
    }

    public function isLikedBy(User $user)
    {
        return (bool)$user->likes
            ->where('post_id', $this->id)
            ->where('liked', true)
            ->count();
    }
}
