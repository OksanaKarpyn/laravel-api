<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Category;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories =[
            'lavoro',
            'studio',
            'viaggi',
            'sport',

        ];
        foreach( $categories as $elem){
            $new_category = new Category();
            $new_category -> title = $elem;
            $new_category -> slug = Str::slug( $new_category -> title);
            $new_category ->save();
        }
    }
}