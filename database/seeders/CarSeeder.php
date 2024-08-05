<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cars = [
            ['brand' => 'Toyota', 'model' => 'Camry', 'color' => 'Black', 'production_year' => 2020, 'seats' => 5, 'price' => 30000, 'status' => 'Available', 'image' => 'cars/toyota_camry_black.jpg'],
            ['brand' => 'Honda', 'model' => 'Civic', 'color' => 'White', 'production_year' => 2019, 'seats' => 5, 'price' => 25000, 'status' => 'On Going', 'image' => 'cars/honda_civic_white.jpg'],
            ['brand' => 'Ford', 'model' => 'Mustang', 'color' => 'Red', 'production_year' => 2021, 'seats' => 4, 'price' => 45000, 'status' => 'Available', 'image' => 'cars/ford_mustang_red.jpg'],
            ['brand' => 'Chevrolet', 'model' => 'Malibu', 'color' => 'Blue', 'production_year' => 2018, 'seats' => 5, 'price' => 27000, 'status' => 'On Going', 'image' => 'cars/chevrolet_malibu_blue.jpg'],
            ['brand' => 'BMW', 'model' => 'X5', 'color' => 'Gray', 'production_year' => 2022, 'seats' => 5, 'price' => 60000, 'status' => 'Available', 'image' => 'cars/bmw_x5_gray.jpg'],
            ['brand' => 'Mercedes', 'model' => 'C-Class', 'color' => 'Silver', 'production_year' => 2021, 'seats' => 5, 'price' => 55000, 'status' => 'On Going', 'image' => 'cars/mercedes_c_class_silver.jpg'],
            ['brand' => 'Audi', 'model' => 'A4', 'color' => 'Black', 'production_year' => 2020, 'seats' => 5, 'price' => 50000, 'status' => 'Available', 'image' => 'cars/audi_a4_black.jpg'],
            ['brand' => 'Hyundai', 'model' => 'Elantra', 'color' => 'White', 'production_year' => 2019, 'seats' => 5, 'price' => 20000, 'status' => 'On Going', 'image' => 'cars/hyundai_elantra_white.jpg'],
            ['brand' => 'Nissan', 'model' => 'Altima', 'color' => 'Red', 'production_year' => 2018, 'seats' => 5, 'price' => 22000, 'status' => 'Available', 'image' => 'cars/nissan_altima_red.jpg'],
            ['brand' => 'Volkswagen', 'model' => 'Jetta', 'color' => 'Blue', 'production_year' => 2020, 'seats' => 5, 'price' => 24000, 'status' => 'On Going', 'image' => 'cars/volkswagen_jetta_blue.jpg'],
            ['brand' => 'Kia', 'model' => 'Sorento', 'color' => 'Gray', 'production_year' => 2019, 'seats' => 7, 'price' => 35000, 'status' => 'Available', 'image' => 'cars/kia_sorento_gray.jpg'],
            ['brand' => 'Mazda', 'model' => 'CX-5', 'color' => 'Silver', 'production_year' => 2021, 'seats' => 5, 'price' => 30000, 'status' => 'On Going', 'image' => 'cars/mazda_cx5_silver.jpg'],
            ['brand' => 'Subaru', 'model' => 'Outback', 'color' => 'Black', 'production_year' => 2022, 'seats' => 5, 'price' => 40000, 'status' => 'Available', 'image' => 'cars/subaru_outback_black.jpg']
        ];

        Car::insert($cars);
    }
}
