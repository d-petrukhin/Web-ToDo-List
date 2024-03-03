<?php

namespace Tests\Feature;

use App\Models\Folder;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = User::factory()->create();
        $this->assertNotNull($user);

        $folder = Folder::factory()->create([
            'user_id' => $user->id,
        ]);
        $this->assertNotNull($folder);

        $tasks = Task::factory()->count(25)->make([
            'user_id' => $user->id,
            'folder_id' => $folder->id,
        ]);

        $tasks->each(function ($task) {
            $task->save();
        });

        foreach ($tasks as $task) {
            $this->assertNotNull($task->title);
            $this->assertNotNull($task->description);
        }
    }
}
