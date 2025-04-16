<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CultureSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('culture')->insert([
            [
                'name' => 'Tari Kecak',
                'description' => 'Tari tradisional dari Bali yang terkenal dengan paduan suara "cak" oleh sekelompok pria.',
                'id_category' => 1,
                'main_image' => 'images/kecak_main.jpg',
                'images' => json_encode([
                    'images/kecak1.jpg',
                    'images/kecak2.jpg',
                    'images/kecak3.jpg'
                ]),
                'provincy' => 'Bali',
                'city' => 'Denpasar',
                'view_count' => 250,
                'is_popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Wayang Kulit',
                'description' => 'Pertunjukan bayangan tradisional dengan boneka kulit, populer di Jawa.',
                'id_category' => 2,
                'main_image' => 'images/wayang_main.jpg',
                'images' => json_encode([
                    'images/wayang1.jpg',
                    'images/wayang2.jpg'
                ]),
                'provincy' => 'Jawa Tengah',
                'city' => 'Surakarta',
                'view_count' => 130,
                'is_popular' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tari Piring',
                'description' => 'Tari tradisional Minangkabau yang menggunakan piring sebagai properti.',
                'id_category' => 3,
                'main_image' => 'images/piring_main.jpg',
                'images' => json_encode([
                    'images/piring1.jpg',
                    'images/piring2.jpg'
                ]),
                'provincy' => 'Sumatera Barat',
                'city' => 'Padang',
                'view_count' => 200,
                'is_popular' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
    'name' => 'Reog Ponorogo',
    'description' => 'Seni pertunjukan dari Jawa Timur yang terkenal dengan topeng besar dan tarian magis.',
    'id_category' => 3,
    'main_image' => 'images/reog_main.jpg',
    'images' => json_encode([
        'images/reog1.jpg',
        'images/reog2.jpg'
    ]),
    'provincy' => 'Jawa Timur',
    'city' => 'Ponorogo',
    'view_count' => 300,
    'is_popular' => true,
    'created_at' => now(),
    'updated_at' => now(),
],
[
    'name' => 'Tari Saman',
    'description' => 'Tari dari Aceh yang terkenal dengan kecepatan gerakan dan kekompakan penari.',
    'id_category' => 4,
    'main_image' => 'images/saman_main.jpg',
    'images' => json_encode([
        'images/saman1.jpg',
        'images/saman2.jpg'
    ]),
    'provincy' => 'Aceh',
    'city' => 'Gayo Lues',
    'view_count' => 480,
    'is_popular' => true,
    'created_at' => now(),
    'updated_at' => now(),
],
[
    'name' => 'Debus',
    'description' => 'Kesenian bela diri tradisional Banten dengan atraksi ekstrem dan kebal.',
    'id_category' => 5,
    'main_image' => 'images/debus_main.jpg',
    'images' => json_encode([
        'images/debus1.jpg',
        'images/debus2.jpg'
    ]),
    'provincy' => 'Banten',
    'city' => 'Serang',
    'view_count' => 150,
    'is_popular' => false,
    'created_at' => now(),
    'updated_at' => now(),
],
[
    'name' => 'Tari Jaipong',
    'description' => 'Tarian khas Sunda yang enerjik dan ekspresif.',
    'id_category' => 6,
    'main_image' => 'images/jaipong_main.jpg',
    'images' => json_encode([
        'images/jaipong1.jpg',
        'images/jaipong2.jpg'
    ]),
    'provincy' => 'Jawa Barat',
    'city' => 'Bandung',
    'view_count' => 210,
    'is_popular' => true,
    'created_at' => now(),
    'updated_at' => now(),
],
[
    'name' => 'Tari Serimpi',
    'description' => 'Tarian klasik dari keraton Jawa dengan gerakan lemah gemulai penuh makna.',
    'id_category' => 7,
    'main_image' => 'images/serimpi_main.jpg',
    'images' => json_encode([
        'images/serimpi1.jpg',
        'images/serimpi2.jpg'
    ]),
    'provincy' => 'DI Yogyakarta',
    'city' => 'Yogyakarta',
    'view_count' => 180,
    'is_popular' => false,
    'created_at' => now(),
    'updated_at' => now(),
],
        ]);
    }
}
