<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'admin',
            'username' => 'admin',
            'password' => Hash::make("123"),
            'image' => 'image',
            'gender' => 'Nam',
            'birthday' => '2000-06-15',
            'email' => 'admin@gmail.com',
            'address' => 'address',
            'job_id' => 1,
            'role_id' => 1,
        ];
    }
}
