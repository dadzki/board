<?php

namespace Database\Factories\Entity;

use App\Entity\User;
use Illuminate\Database\Eloquent\Factories\Factory;
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
        $active = $this->faker->boolean;
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'verify_token' => $active ? null : Str::uuid(),
            'status' => $active ? User::STATUS_ACTIVE : User::STATUS_WAIT,
            'role' => $active ? $this->faker->randomElement([User::ROLE_USER, User::ROLE_ADMIN]) : User::ROLE_USER,
        ];
    }
}
