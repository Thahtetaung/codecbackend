<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Subcategory::create(['name' => 'Action' , 'category_id' => 1]);
        Subcategory::create(['name' => 'Products' , 'category_id' => 1]);
        Subcategory::create(['name' => 'Events' , 'category_id' => 1]);
        Subcategory::create(['name' => 'Commercials' , 'category_id' => 2]);
        Subcategory::create(['name' => 'Social Media Videos' , 'category_id' => 2]);
        Subcategory::create(['name' => 'Events' , 'category_id' => 2]);
    }
}
