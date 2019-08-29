<?php
use App\BankBranch;
use Illuminate\Database\Seeder;

class BankBranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //// Let's truncate our existing records to start from scratch.
        BankBranch::truncate();

        $faker = \Faker\Factory::create();


        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            BankBranch::create([
                'bank_id' => '1',
                'branch' => $faker->sentence,
                'lon_lat' => $faker->sentence,
            ]);
        }
    }
}
