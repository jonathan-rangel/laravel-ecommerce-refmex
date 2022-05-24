<?php


use Illuminate\Database\Seeder;
use App\Http\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Brownie',
        ]);
        Category::create([
            'name' => 'Galleta',
        ]);
        Category::create([
            'name' => 'Paquetes',
        ]);
        Category::create([
            'name' => 'Especiales',
        ]);
        Category::create([
            'name' => 'Personalizados',
        ]);
    }
}
