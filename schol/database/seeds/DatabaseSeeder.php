<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('codes')->truncate();
        $faker = Faker::create();
        foreach (range(1,20) as $index) {
            DB::table('codes')->insert([
                'code' => $faker->ean13,
                'status' => 'active'
            ]);
        }

        Model::reguard();
    }
}
