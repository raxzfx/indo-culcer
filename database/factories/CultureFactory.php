<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Culture;
use App\Models\Category;

class CultureFactory extends Factory
{
    protected $model = Culture::class;

    public function definition()
    {
        $cultureNames = [
            'Tari Piring', 'Wayang Kulit', 'Legenda Danau Toba', 'Tari Saman', 'Keris', 'Batik', 'Reog Ponorogo',
            'Tari Kecak', 'Angklung', 'Topeng', 'Tari Jaipong', 'Tari Sajojo', 'Tari Tor-Tor', 'Tari Pendet',
            'Tari Gandrung', 'Tari Bapang', 'Tari Cakalele', 'Tari Sintren', 'Tari Randai', 'Tari Piring',
            'Tari Piring', 'Tari Piring', 'Tari Piring', 'Tari Piring', 'Tari Piring', 'Tari Piring',
            'Tari Piring', 'Tari Piring', 'Tari Piring', 'Tari Piring'
        ];

        return [
            'name' => $this->faker->randomElement($cultureNames),
            'description' => $this->faker->paragraph,
            'id_category' => Category::all()->random()->id,
            'main_image' => $this->faker->imageUrl(),
            'images' => $this->faker->imageUrl(),
            'provincy' => $this->faker->randomElement(['Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Jambi', 'Sumatera Selatan', 'Bengkulu', 'Lampung', 'DKI Jakarta', 'Jawa Barat', 'Jawa Tengah', 'DI Yogyakarta', 'Jawa Timur', 'Banten', 'Bali', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur', 'Kalimantan Barat', 'Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara', 'Sulawesi Utara', 'Sulawesi Tengah', 'Sulawesi Selatan', 'Sulawesi Tenggara', 'Gorontalo', 'Sulawesi Barat', 'Maluku', 'Maluku Utara', 'Papua', 'Papua Barat']),
            'city' => $this->faker->city,
            'view_count' => $this->faker->numberBetween(0, 1000),
            'is_popular' => $this->faker->boolean,
        ];
    }
}
