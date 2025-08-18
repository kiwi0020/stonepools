<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
        'author' => 'Jan Kowalski',
        'position' => 'Właściciel firmy budowlanej',
        'content' => 'Bardzo profesjonalna obsługa, polecam!',
        'image' => 'jan.jpg'
        ]);

        Testimonial::create([
            'author' => 'Anna Nowak',
            'position' => 'Klient indywidualny',
            'content' => 'Basen został zamontowany szybko i dokładnie.',
            'image' => 'anna.jpg'
        ]);
    }
}
