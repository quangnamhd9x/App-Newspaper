<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Job;
use App\Models\Newspaper;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Job::factory(1)->create();
        Role::factory(1)->create();
        Category::factory(1)->create();
        User::factory(1)->create();
        Newspaper::factory(1)->create();
    }
}
