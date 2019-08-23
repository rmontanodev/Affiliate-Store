<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BrandSeedTable::class);
        $this->call(CategorySeedTable::class);
        $this->call(CustomersProductAlertSeedTable::class);
        $this->call(UsersSeedTable::class);
        $this->call(ProductsSeedTable::class);
        $this->call(OffersSeedTable::class);
        $this->call(UserTypeSeedTable::class);
        $this->call(SubcategoriesSeedTable::class);

    }
}
