<?php

namespace App\Services;

use App\Models\User;

class FolderService
{
    public function deleteFolderAndTasks(User $user, $folder): bool
    {
        $folder = $user->folders()->findOrFail($folder->id);

        $user->tasks()->where('folder_id', $folder->id)->delete();

        $folder->delete();

        return true;
    }
}
