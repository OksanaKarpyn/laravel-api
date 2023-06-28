<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for($i = 0; $i < 20; $i++){
            $new_project = new Project();
            $new_project-> title = $faker -> sentence(5);
            $new_project-> content = $faker -> text();
            $new_project-> slug = Str::slug($new_project->title, '-');
            $new_project-> image = $faker -> imageUrl(640, 400, 'animals',true);
            $new_project->save();
        }
    }
}