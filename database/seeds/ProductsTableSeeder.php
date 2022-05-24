<?php


use Illuminate\Database\Seeder;
use App\Http\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        product::create([
            'name' => 'Brownie Original',
            'category_id' => 1,
            // 'cart_id' => null,
            'stock' => 50,
            'price' => 20.00,
            'description' => 'Delicioso brownie de sabor original 100% chocolate',
            'image_path' => 'brownie-original.png',
            'popular' => 1,
        ]);
        product::create([
            'name' => 'Brownie de Oreo',
            'category_id' => 1,
            // 'cart_id' => null,
            'stock' => 50,
            'price' => 30.00,
            'description' => 'Delicioso brownie de OREOs original',
            'image_path' => 'brownie-oreo.png',
            'popular' => 1,
        ]);
        product::create([
            'name' => 'Brownie de KitKat',
            'category_id' => 1,
            // 'cart_id' => null,
            'stock' => 50,
            'price' => 30.00,
            'description' => 'Delicioso brownie de KitKat original',
            'image_path' => 'brownie-kitkat.png',
            'popular' => 1,
        ]);
        product::create([
            'name' => 'Brownie de Cookies and Cream',
            'category_id' => 1,
            // 'cart_id' => null,
            'stock' => 50,
            'price' => 35.00,
            'description' => 'Delicioso brownie de Hersheys Cookies and Cream original',
            'image_path' => 'brownie-cookies-cream.png',
            'popular' => 1,
        ]);
        product::create([
            'name' => 'Brownie de Hershey',
            'category_id' => 1,
            // 'cart_id' => null,
            'stock' => 50,
            'price' => 35.00,
            'description' => 'Delicioso brownie de Hersheys original',
            'image_path' => 'brownie-hershey.png',
            'popular' => 1,
        ]);
        product::create([
            'name' => 'Brownie de M and Ms',
            'category_id' => 1,
            // 'cart_id' => null,
            'stock' => 50,
            'price' => 35.00,
            'description' => 'Delicioso brownie de M and Ms original',
            'image_path' => 'brownie-mms.png',
            'popular' => 1,
        ]);
        product::create([
            'name' => 'Brownie de Nuez',
            'category_id' => 1,
            // 'cart_id' => null,
            'stock' => 50,
            'price' => 25.00,
            'description' => 'Delicioso brownie con nueces',
            'image_path' => 'brownie-nuez.png',
            'popular' => 0,
        ]);
        product::create([
            'name' => 'Brownie de Reeses',
            'category_id' => 1,
            // 'cart_id' => 2,
            'stock' => 50,
            'price' => 35.00,
            'description' => 'Delicioso brownie de sabor Reeses original',
            'image_path' => 'brownie-reeses.png',
            'popular' => 0,
        ]);
    }
}
