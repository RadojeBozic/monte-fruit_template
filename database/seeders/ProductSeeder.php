<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <== DODATO OVO
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Attribute\Repositories\AttributeFamilyRepository;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $productRepository = app(ProductRepository::class);
        $attributeFamilyRepository = app(AttributeFamilyRepository::class);

        // Pronađi kategoriju po imenu u prevodima
        $category = DB::table('category_translations')
            ->where('name', 'Domaće voće')
            ->where('locale', 'sr')
            ->first();

        if (!$category) {
            $this->command->error('Kategorija "Domaće voće" nije pronađena u category_translations!');
            return;
        }

        $attributeFamily = $attributeFamilyRepository->findOneByField('code', 'default');

        /** @var \Webkul\Product\Models\Product $product */
        $product = $productRepository->create([
            'type'                 => 'simple',
            'attribute_family_id' => $attributeFamily->id,
            'sku'                  => 'PROIZVOD-001',
            'name'                 => 'Primer proizvoda za testiranje',
            'url_key'              => Str::slug('Primer proizvoda za testiranje'),
            'price'                => 1500.00,
            'status'               => 1,
            'visible_individually'=> 1,
            'description'          => 'Ovo je opis testnog proizvoda.',
            'short_description'    => 'Kratak opis testnog proizvoda.',
        ]);

        $product->categories()->sync([$category->category_id]);

        $this->command->info('Proizvod uspešno kreiran i povezan sa kategorijom.');
    }
}
