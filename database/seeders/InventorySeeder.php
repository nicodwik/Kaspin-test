<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = Category::create([
            'name' => "Office"
        ]);

        \DB::table('inventories')->insert([
            'category_id' => $cat->id,
            'name' => "computer LG",
            'merk' => "LG",
            'supplier' => "PT. Makmur Sentosa",
            'year' => rand(2015, 2021),
            'condition' => 'GOOD',
            'amount' => rand(1, 100),
        ]);
    }
}
