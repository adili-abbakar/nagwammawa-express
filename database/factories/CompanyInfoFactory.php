<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyInfo>
 */
class CompanyInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => "Nagwammawa $ Sons Nig. Ltd",
            'trading_name' => 'Nagwammawa Express',
            'year_established' => 2026,
            'head_office' => "Sokoto (Dogon 4/6 Maiduguri Road)",
            'vision' => 'To be the leading transport and logistics provider in Nigeria and the West African sub-region, recognized for safety, reliability, innovation, and excellence in customer service.',
            'mission', "To provide safe, reliable, and efficient transport and logistics solutions that connect communities and businesses across Nigeria and the West African sub-region, while delivering exceptional customer service, embracing innovation, and maintaining the highest standards of professionalism.",
            'contact' => '+234 81 0714 6278'
        ];
    }
}
