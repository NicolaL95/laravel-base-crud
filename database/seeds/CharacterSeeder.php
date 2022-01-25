<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Character;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i < 10; $i++) { 
           $newcharacter = new Character;
           $newcharacter->name = $faker->bothify();
           $newcharacter->bio = $faker->paragraphs(5, true);
           $newcharacter->birth_date = $faker->date();
           $newcharacter->save();
       }
    }
}
