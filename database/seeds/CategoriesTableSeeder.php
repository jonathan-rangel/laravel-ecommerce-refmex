<?php


use Illuminate\Database\Seeder;
use App\Http\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Iphone',
            'image_path' => 'iphone-x.webp',
        ]);
    }
}
