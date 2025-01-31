<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 50; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->word();
            $newProject->prog_langs = $faker->word(2);
            $newProject->due_to = $faker->dateTime();
            $newProject->url = $faker->imageUrl(360, 360, 'projects', true);
            $newProject->save();
        }
    }
}
