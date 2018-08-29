<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('pl_PL');
        /*=====Zmienne=====*/
        $number_of_users = 20;
        $password = 'pass';
        /*=================*/
        for ($i=1; $i < $number_of_users; $i++) { 

            if ($i === 1) {
                DB::table('users')->insert([
                    'name' => 'Piotr Ostaniewicz',
                    'email' => 'piotr-ostaniewicz@wp.pl',
                    'sex' => 'm',
                    'password' => bcrypt($password),
                ]);
            }
            
            $sex = $faker->randomElement(['m','f']);

            switch ($sex) {
                case 'm':
                    $name = $faker->firstNameMale . ' ' . $faker->lastNameMale;
                    break;
                case 'f':
                $name = $faker->firstNameFemale . ' ' . $faker->lastNameFemale;
                    break;
                
            }

            DB::table('users')->insert([
                'name' => $name,
                'email' => str_replace('-', '', str_slug($name)) . '@' . $faker->safeEmailDomain,
                'sex' => $sex,
                'password' => bcrypt($password),
            ]);
        }
    }
}
