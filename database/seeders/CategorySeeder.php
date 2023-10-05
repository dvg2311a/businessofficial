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
            $categories= new Category();
            $categories->name_category= 'Esta es una ctagoría';
            $categories->id_sector=1;
            $categories->save();
    }
}
