<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_user_factory(): void
    {
        $user = User::factory()->count(5)->create();

        $this->assertNotNull($user);
        $this->assertNotNull($user->name);
        $this->assertNotNull($user->email);
        $this->assertNotNull($user->password);
        $this->assertNotNull($user->first_name);
        $this->assertNotNull($user->last_name);
        $this->assertNotNull($user->middle_name);
        $this->assertNotNull($user->birthday);
    }
}
