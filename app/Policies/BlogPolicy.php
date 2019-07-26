<?php

namespace App\Policies;

use App\User;
use App\Blog;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;
    

    public function update(User $user, Blog $blog)
    {
        return $blog->owner_id == $user->id;
    }

}
