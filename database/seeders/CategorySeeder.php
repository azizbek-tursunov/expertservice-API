<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Isitish va sovutish tizimlari']);
        Category::create(['name' => 'Xavfsizlik tizimlari']);
        Category::create(['name' => 'Lift va eskalatorlar']);
        Category::create(['name' => 'Sanoat va maishiy nasoslar']);
    }
}
