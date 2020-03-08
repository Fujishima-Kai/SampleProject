<?php

use Illuminate\Database\Seeder;

class CorporationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('corporations')->delete();
        $corporation_seeds = [
            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'B社',
                'address' => 'ブラジル',
                'phone_number' => '0120111222',
                'email' => 'b@brazil.com',
            ],

            [
                'name' => 'C 製作所',
                'address' => 'カナダ',
                'phone_number' => '0120111222',
                'email' => 'c@canada.com',
            ],

            [
                'name' => 'Dコーポレーション',
                'address' => '台場',
                'phone_number' => '0120111222',
                'email' => 'd@daiba.com',
            ],

            [
                'name' => '株式会社E',
                'address' => 'エチオピア',
                'phone_number' => '0120111222',
                'email' => 'e@etiopia.com',
            ],

            [
                'name' => 'F商事',
                'address' => '福島',
                'phone_number' => '0120111222',
                'email' => 'f@fukushima.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],

            [
                'name' => 'A商事',
                'address' => '汐留',
                'phone_number' => '0120111222',
                'email' => 'a@shiodome.com',
            ],
        ];

        foreach($corporation_seeds as $c) {
            DB::table('corporations')->insert($c);
        }
    }
}
