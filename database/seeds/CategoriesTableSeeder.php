<?php


use Illuminate\Database\Seeder;
use App\Http\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Iphone',
            'image_path' => 'apple.jpg',
        ]);
        Category::create([
            'name' => 'Samsung',
            'image_path' => 'samsung.jpg',
        ]);
        Category::create([
            'name' => 'Iphone',
            'image_path' => 'xiaomi.jpg',
        ]);
    }
}
