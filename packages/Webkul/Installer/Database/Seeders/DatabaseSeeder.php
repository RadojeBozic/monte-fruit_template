<?php

namespace Webkul\Installer\Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            \Webkul\Installer\Database\Seeders\Shop\ThemeCustomizationSeeder::class,
        ]);
    }
}
