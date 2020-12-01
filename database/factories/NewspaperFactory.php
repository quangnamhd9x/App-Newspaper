<?php

namespace Database\Factories;

use App\Models\Newspaper;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class NewspaperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Newspaper::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'demo',
            'intro' => 'intro',
            'image' => 'image',
            'description' => 'description',
            'category_id' => 1,
        ];
    }
}
