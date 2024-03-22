<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'comic', 'novel', 'fisika', 'matematika', 'kimia', 'biologi', 'sosiologi', 'ekonomi', 'geografi', 'sejarah',
        ];

        foreach ($data as $value) {
            Category::insert(['name' => $value]);
        }
    }
}
