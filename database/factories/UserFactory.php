<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'WOLFF',
            'surname' => 'Grégory',
            'email' => 'gregory.wolff.dev@gmail.com',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make(''),
            'remember_token' => Str::random(10),
            'job' => 'Développeur Web et Web mobile',
            'profil_description' => 'lorem ipsum',
            'phone_number' => '',
            'cuntry' => 'france',
            'city' => 'vatimont',
            'postal_code' => '57580',
            'adress' => '4, rue de metz',
            'adresse_resume_pdf' => 'test',
            'linked_in' => 'test'
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
