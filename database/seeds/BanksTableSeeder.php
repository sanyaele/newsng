<?php
use App\Bank;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Let's truncate our existing records to start from scratch.
        Bank::truncate();

        $faker = \Faker\Factory::create();
        $seed_banks_sql = 'INSERT INTO `banks` 
        (`name`, `synonyms`, `ussd`, `website`) VALUES 
        (
                "Access Bank",
                "Access Bank,Accessbank",
                "None",
                "www.accessbankplc.com"
            ),
            (
                "CitiBank",
                "CitiBank, Citi Bank",
                "None",
                "www.citi.com"
            ),
            (
                "Diamond Bank",
                "Diamond Bank",
                "*710#",
                "diamondbank.com"
            ),
            (
                "Ecobank",
                "Ecobank,Eco bank",
                "*326#",
                "www.ecobank.com"
            ),
            (
                "FCMB",
                "FCMB,First City Monument Bank",
                "*329#",
                "fcmb.com"
            ),
            (
                "Fidelity Bank",
                "Fidelity Bank",
                "*770#",
                "www.fidelitybank.ng"
            ),
            (
                "First Bank",
                "First Bank,FBN",
                "*894#",
                "firstbanknigeria.com"
            ),
            (
                "GTBank",
                "GTBank,Guaranty Trust bank,GT Bank",
                "*737#",
                "gtbank.com"
            ),
            (
                "Heritage Bank",
                "Heritage Bank",
                "*322#",
                "hbng.com"
            ),
            (
                "Keystone Bank",
                "Keystone Bank plc",
                "*533#",
                "keystonebankng.com"
            ),
            (
                "Polaris Bank",
                "Polaris Bank",
                "*833#",
                "polarisbanklimited.com"
            ),
            (
                "Stanbic IBTC",
                "Stanbic IBTC bank,stanbicibtc",
                "*909#",
                "stanbicibtc.com"
            ),
            (
                "Standard Chartered Bank",
                "Standard Chartered Bank,SCB,StandardChartered",
                "None",
                "sc.com/ng/"
            ),
            (
                "Sterling Bank",
                "Sterling Bank,Sterlingbank",
                "*822#",
                "sterlingbankng.com"
            ),
            (
                "UBA",
                "UBA bank,United,United Bank of Africa,UBABank,Unitedbank",
                "*919#",
                "ubagroup.com"
            ),
            (
                "Union Bank",
                "Union Bank,Unionbank",
                "*826#",
                "unionbankng.com"
            ),
            (
                "Unity Bank",
                "Unity Bank,Unitybank",
                "*7799#",
                "unitybankng.com"
            ),
            (
                "Wema Bank",
                "Wema Bank,Wemabank",
                "*945#",
                "wemabank.com"
            ),
            (
                "Zenith Bank",
                "Zenith Bank plc,Zenithbankplc",
                "*966#",
                "zenithbank.com"
            )
        ';

        DB::insert($seed_banks_sql);

    }
}
