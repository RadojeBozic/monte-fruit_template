<?php

namespace Webkul\Installer\Database\Seeders\Shop;

use Illuminate\Database\Seeder;
use Webkul\Theme\Repositories\ThemeCustomizationRepository;

class ThemeCustomizationSeeder extends Seeder
{
    public function run(): void
    {
        $themeCustomizationRepository = app(ThemeCustomizationRepository::class);

        $themeCustomizationRepository->create([
            'type'        => 'footer-links',
            'position'    => 1,
            'options'     => [
                'column_1' => [
                    [
                        'title'       => 'O nama',
                        'url'         => '/page/o-nama',
                        'sort_order' => 1,
                    ],
                    [
                        'title'       => 'Kontakt',
                        'url'         => '/page/kontakt',
                        'sort_order' => 2,
                    ],
                    [
                        'title'       => 'Politika privatnosti',
                        'url'         => '/page/politika-privatnosti',
                        'sort_order' => 3,
                    ],
                ],
                'column_2' => [
                    [
                        'title'       => 'Uslovi korišćenja',
                        'url'         => '/page/uslovi-koriscenja',
                        'sort_order' => 1,
                    ],
                    [
                        'title'       => 'Politika plaćanja',
                        'url'         => '/page/politika-placanja',
                        'sort_order' => 2,
                    ],
                    [
                        'title'       => 'Politika isporuke',
                        'url'         => '/page/politika-isporuke',
                        'sort_order' => 3,
                    ],
                ],
                'column_3' => [
                    [
                        'title'       => 'Politika refundacije',
                        'url'         => '/page/politika-refundacije',
                        'sort_order' => 1,
                    ],
                    [
                        'title'       => 'Politika povraćaja',
                        'url'         => '/page/politika-povracaja',
                        'sort_order' => 2,
                    ],
                    [
                        'title'       => 'Korisnička podrška',
                        'url'         => '/page/podrska',
                        'sort_order' => 3,
                    ],
                ],
            ],
        ]);
    }
}
