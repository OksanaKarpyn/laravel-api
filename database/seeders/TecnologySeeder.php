<?php

namespace Database\Seeders;
use App\Models\Admin\Tecnology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TecnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
        $tecnologies = [
            'html', 
            'css', 
            'javascript plane', 
            'vue.js',
            'php plane',
            'laravel'
        ];
        foreach($tecnologies as $elem){
            $new_tecnology = new Tecnology();
            $new_tecnology->title = $elem;
            $new_tecnology->slug = Str::slug($new_tecnology->title, '-');
            $new_tecnology->save();
        }
    }
}