<?php

namespace Database\Factories;

use App\Models\Folder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Folder>
 */
class FolderFactory extends Factory
{
    protected $model = Folder::class;

    public function definition(): array
    {
        $color = '#' . sprintf('%06X', mt_rand(0, 0xFFFFFF));

        return [
            'title' => $this->faker->name(),
            'color' => $color,
        ];
    }
}
