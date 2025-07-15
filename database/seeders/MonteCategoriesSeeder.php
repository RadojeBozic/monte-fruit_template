<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Category\Models\Category;
use Illuminate\Support\Str; // <- Ovo moraš dodati!

class MonteCategoriesSeeder extends Seeder
{
    protected $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function run()
    {
       $categories = [
    'Južno voće' => [
     'Banane', 'Narandže', 'Mandarine', 'Limun', 'Ananas', 'Mango', 'Kivi', 'Avokado', 'Papaja', 'Kokos', 'Dragun', 'Guava', 'Litchi',
    ],
    'Domaće voće' => [
        'Jabuke', 'Kruške', 'Breskve', 'Nektarine', 'Šljive', 'Grožđe', 'Trešnje', 'Maline', 'Jagode', 'Borovnice', 'Lubenica', 'Dinja'
    ],
    'Sveže povrće' => [
         'Paradajz', 'Paradajz jabučar', 'Paradajz pink', 'Krastavac', 'Kupus', 'Karfiol', 'Krompir crveni', 'Krompir beli', 'Batat', 'Luk', 'Paprika-šilja zelena','Paprika-babura', 'Paprika-šilja crvena', 'Paprika ljuta','Šargarepa', 'Tikvice', 'Zelena salata', 'Peršun', 'Celer', 'Brokoli', 'Spanać', 'Rotkvice', 'Pasulj',
         'Grašak', 'Bundeva', 'Plavi patlidžan', 'Cvekle', 'Prokelj', 'Poriluk', 'Blitva', 'Rukola', 'Artičoke', 'Endivija', 'Cikla'
    ],
    'Organski proizvodi' => [
        'Organsko voće', 'Organsko povrće', 'Organski sokovi', 'Organski namazi', 'Organske salate', 'Organske grickalice', 'Organske žitarice'
    ],
    'Smrznuti proizvodi' => [
        'Smrznuto voće' => [
            'Smrznute jagode', 'Smrznine maline', 'Smrznute kupine', 'Smrznute borovnice'
        ],
        'Smrznuto povrće' => [
            'Smrznuti grašak', 'Smrznuti boranija', 'Smrznuti spanać', 'Mešavine povrća'
        ]
    ],
    'Sušeno voće i orašasti plodovi' => [
        'Sušene šljive', 'Sušene kajsije', 'Sušeno grožđe', 'Orasi', 'Lešnici', 'Bademi', 'Indijski orah'
    ],
    'Zdrava hrana' => [
        'Integralne žitarice', 'Seme i jezgra', 'Biljni proteini', 'Prirodni zaslađivači', 'Bezglutenski proizvodi'
    ],
    'Pakovanja i brendirani proizvodi' => [
        'Pakovanja za trgovinu', 'Brendirani sokovi', 'Brendirane mešavine'
    ],
    'Akcije i sezonska ponuda' => [
        'Letnje voće', 'Zimsko voće', 'Promo paketi'
    ],
    'Dodatna oprema' => [
        'Torbe za voće i povrće', 'Kutije za čuvanje', 'Pribor za pripremu'
    ],
    'Ostalo' => [
        'Sokovi', 'Čajevi', 'Zdravstveni dodaci'
    ]
];

        $rootId = 1;

        foreach ($categories as $category => $subcategories) {
            $parent = Category::create([
                'slug' => Str::slug($category), // uklonjen \ ispred Str::
                'name' => $category,
                'status' => 1,
                'parent_id' => $rootId,
            ]);

            foreach ($subcategories as $key => $value) {
                if (is_array($value)) {
                    $subParent = $parent->children()->create([
                        'slug' => Str::slug($key),
                        'name' => $key,
                        'status' => 1,
                    ]);

                    foreach ($value as $subChildName) {
                        $subParent->children()->create([
                            'slug' => Str::slug($subChildName),
                            'name' => $subChildName,
                            'status' => 1,
                        ]);
                    }
                } else {
                    $parent->children()->create([
                        'slug' => Str::slug($value),
                        'name' => $value,
                        'status' => 1,
                    ]);
                }
            }
        }
    }
}
