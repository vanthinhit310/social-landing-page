<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        $limit = 25000;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone_number' => $faker->e164PhoneNumber,
                'address' => $faker->address,
                'company' => $faker->company,
                'company_address' => $faker->catchPhrase,
                'image_url' => $faker->imageUrl(640, 480, 'cats')  ,
                'password' => bcrypt('Abc@1234')
            ]);
        }
    }
}
