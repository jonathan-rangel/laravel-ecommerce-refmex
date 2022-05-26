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
            'name' => 'Iphone X',
            'category_id' => 1,
            'stock' => 23,
            'price' => 6700,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 'iphone-x_500x.webp',
            'popular' => 1,
            'state' => 'Nuevo',
            'storage' => 64,
            'color' => 'Negro',
        ]);
        product::create([
            'name' => 'Iphone XR',
            'category_id' => 1,
            'stock' => 78,
            'price' => 7200,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 'iphone_XR_500x.webp',
            'popular' => 1,
            'state' => 'Seminuevo',
            'storage' => 128,
            'color' => 'Negro',
        ]);
        product::create([
            'name' => 'Iphone XS',
            'category_id' => 1,
            'stock' => 7,
            'price' => 9000,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 'iphone-xs_500x.webp',
            'popular' => 1,
            'state' => 'Seminuevo',
            'storage' => 64,
            'color' => 'Dark Gray',
        ]);
        product::create([
            'name' => 'Iphone XS MAX',
            'category_id' => 1,
            'stock' => 3,
            'price' => 10999,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 'iphone_XS_MAX_500x.webp',
            'popular' => 0,
            'state' => 'Nuevo',
            'storage' => 256,
            'color' => 'Gold',
        ]);
        product::create([
            'name' => 'Iphone 11',
            'category_id' => 1,
            'stock' => 10,
            'price' => 10999,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 'iphone_11_500x.webp',
            'popular' => 1,
            'state' => 'Nuevo',
            'storage' => 128,
            'color' => 'Negro',
        ]);
        product::create([
            'name' => 'Iphone 11 Pro',
            'category_id' => 1,
            'stock' => 7,
            'price' => 11999,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 'iphone-pro-10_500x.webp',
            'popular' => 0,
            'state' => 'Nuevo',
            'storage' => 64,
            'color' => 'Negro',
        ]);
        product::create([
            'name' => 'Iphone 12 Mini',
            'category_id' => 1,
            'stock' => 6,
            'price' => 11499,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 'iphone-12-mini-r1_1_400x.webp',
            'popular' => 1,
            'state' => 'Nuevo',
            'storage' => 64,
            'color' => 'Negro',
        ]);
        product::create([
            'name' => 'Iphone 12',
            'category_id' => 1,
            'stock' => 7,
            'price' => 16499,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 'iphone-12-r1_1_400x.webp',
            'popular' => 0,
            'state' => 'Nuevo',
            'storage' => 64,
            'color' => 'Negro',
        ]);
        product::create([
            'name' => 'Iphone 12 Pro Max',
            'category_id' => 1,
            'stock' => 2,
            'price' => 18999,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 'iphone-12-pro-max-1_1_400x.webp',
            'popular' => 1,
            'state' => 'Nuevo',
            'storage' => 64,
            'color' => 'Negro',
        ]);
        product::create([
            'name' => 'Samsung S21',
            'category_id' => 2,
            'stock' => 21,
            'price' => 12399,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 's21.webp',
            'popular' => 1,
            'state' => 'Seminuevo',
            'storage' => 128,
            'color' => 'Morado',
        ]);
        product::create([
            'name' => 'Samsung S22 Ultra',
            'category_id' => 2,
            'stock' => 6,
            'price' => 20999,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 's22-ultra.webp',
            'popular' => 0,
            'state' => 'Seminuevo',
            'storage' => 256,
            'color' => 'Negro',
        ]);
        product::create([
            'name' => 'Samsung Galaxy Z-Fold',
            'category_id' => 2,
            'stock' => 1,
            'price' => 24000,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => 'z-fold.webp',
            'popular' => 1,
            'state' => 'Nuevo',
            'storage' => 256,
            'color' => 'Negro',
        ]);
        product::create([
            'name' => 'Xiaomi Mi 11 Lite',
            'category_id' => 3,
            'stock' => 20,
            'price' => 8599,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => '11-lite.webp',
            'popular' => 1,
            'state' => 'Nuevo',
            'storage' => 64,
            'color' => 'Azul',
        ]);
        product::create([
            'name' => 'Xiaomi Mi 11T',
            'category_id' => 3,
            'stock' => 16,
            'price' => 10100,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => '11.webp',
            'popular' => 1,
            'state' => 'Reacondicionado',
            'storage' => 128,
            'color' => 'Negro',
        ]);
        product::create([
            'name' => 'Xiaomi 12X',
            'category_id' => 3,
            'stock' => 6,
            'price' => 12399,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => '12x.webp',
            'popular' => 1,
            'state' => 'Nuevo',
            'storage' => 128,
            'color' => 'Azul',
        ]);
        product::create([
            'name' => 'Xiaomi 12',
            'category_id' => 3,
            'stock' => 6,
            'price' => 14399,
            'description' => 'Nuestros smarphones NO incluyen accesorios.',
            'image_path' => '12.webp',
            'popular' => 1,
            'state' => 'Nuevo',
            'storage' => 256,
            'color' => 'Negro',
        ]);
    }
}
