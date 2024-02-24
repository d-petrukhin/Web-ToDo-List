<?php

namespace App\Services;

class TaskService
{
    public function updateTask($task, array $data)
    {
        $data['completed'] = !empty($data['completed']);

        $task->update($data);
    }

    public function getTotalTasks($user)
    {
        return $user->tasks()->count();
    }

    public function getCompletedTasks($user)
    {
        return $user->tasks()->where('completed', true)->count();
    }

    public function getTotalTasksInFolder($user, $folders)
    {
        $totalTasks = [];

        foreach ($folders as $folder) {
            $totalTasks[$folder->id] = $user->tasks()->where('folder_id', $folder->id)->count();
        }

        return $totalTasks;
    }
}
