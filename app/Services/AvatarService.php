<?php

namespace App\Services;

class AvatarService
{
    public function handleAvatar($request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            return 'images/' . $this->processAvatar($avatar);
        }

        return $this->getDefaultAvatarPath();
    }

    public function processAvatar($avatar)
    {
        return $avatar->store('avatars', 'public_images');
    }

    public function getDefaultAvatarPath(): string
    {
        return 'images/avatars/default.jpg';
    }
}
