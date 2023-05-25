<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<15; $i++) {
            $newPost = new Project();
            $newPost->title = $faker->sentence(4);
            $newPost->content = $faker->text(100);
            $newPost->slug = Str::slug($newPost->title, '-');
            $newPost->save();
        }
    }
}
