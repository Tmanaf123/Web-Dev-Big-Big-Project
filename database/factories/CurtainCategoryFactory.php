<?php

namespace Database\Factories;

use App\Models\CurtainCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CurtainCategory>
 */
class CurtainCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    return [
        'name' => $this->faker->unique()->randomElement(['Gorden Kain Premium', 'Minimalis Roller Blind', 'Luxury Wooden Blind', 'Smart Motorized Curtain']),
        'description' => 'Koleksi pilihan tirai pelindung jendela terbaik untuk melengkapi estetika desain interior ruangan Anda.',
    ];
}

}
