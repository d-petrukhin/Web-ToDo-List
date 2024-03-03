<?php

namespace Tests\Feature;

use App\Models\Folder;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FolderTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $user = User::factory()->create();
        $this->assertNotNull($user);

        $task = Folder::factory()->count(5)->create(['user_id' => $user->id]);

        $this->assertNotNull($task->title);
        $this->assertNotNull($task->color);
    }
}
