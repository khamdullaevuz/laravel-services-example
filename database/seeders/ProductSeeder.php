<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public $model = Product::class;

    public function run()
    {
        $this->model::factory()->count(10)->create();
    }
}
