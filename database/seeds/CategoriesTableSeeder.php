<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();

        $categories = [
            ['MOBILE', 'Tin tức điện thoại'],
            ['TIN ICT', 'Tin tức ICT'],
            ['INTERNET', 'Tin tức internet'],
            ['Khám phá', 'Tin tức hay trên internet']
        ];

        foreach ($categories as $category){
            \App\Category::create([
                'slug' => \Str::slug($category[0], '-'),
                'name' => $category[0],
                'description' => $category[1],
            ]);
        }
    }
}
