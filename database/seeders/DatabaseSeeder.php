<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('videos');
        Storage::makeDirectory('videos');

        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(PlatformSeeder::class);
        $this->call(VideoSeeder::class);
    }
}
