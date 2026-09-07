<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'title' => 'Club championship starts next week',
            'content' => 'The annual championship kicks off on Wednesday.',
            'published_at' => now(),
        ]);

        News::create([
            'title' => 'New: Training week for beginners',
            'content' => 'From October there will be a beginners session',
            'published_at' => now()->subDays(3),
        ]);
        News::create([
            'title' => 'A new world champion',
            'content' => 'A clean win 6/7 score wins against the top seeds for Alex!',
            'published_at' => now()->subWeek(),
        ]);
    }
}
