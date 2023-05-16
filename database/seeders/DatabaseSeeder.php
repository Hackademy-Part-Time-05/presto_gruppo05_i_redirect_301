<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Announcement;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for($i = 0; $i < 20; $i++) {
            Announcement::create(['title' => 'Annuncio '.$i, 'category_id' => rand(1,10), 'body' => 'Testo '.$i.' Subtesto abc '.(100-$i), 'price' => $i, 'user_id' => 1]);
        }
    }
}
