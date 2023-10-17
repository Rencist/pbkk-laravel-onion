<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Http\Module\User\Domain\Model\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
    }
}
