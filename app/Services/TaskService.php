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
}
