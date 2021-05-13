<?php

namespace Database\Factories\Entity;

use App\Entity\Adverts\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class AdvertsCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'name' => $this->faker->unique()->name,
            'slug' => $this->faker->unique()->slug(2),
            'parent_id' => null,
        ];
    }
}
