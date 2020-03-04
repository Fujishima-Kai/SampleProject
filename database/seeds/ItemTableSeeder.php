<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->delete();
        $item_seeds = [
            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '000',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150005',
                'name' => '肌着',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150010',
                'name' => 'スカート',
                'size' => '050',
                'color' => 'QQ',
                'amount' => '1800',
            ],

            [
                'number' => '150060',
                'name' => 'シャツ',
                'size' => '050',
                'color' => 'WH',
                'amount' => '2500',
            ],

            [
                'number' => '880100',
                'name' => 'ハンカチ',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '030001',
                'name' => 'マスコット',
                'size' => '000',
                'color' => 'QQ',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => '小麦',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'お寿司',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => '天ぷら',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],

            [
                'number' => '150000',
                'name' => 'タオル',
                'size' => '050',
                'color' => 'WH',
                'amount' => '1500',
            ],
        ];

        foreach($item_seeds as $item) {
            DB::table('items')->insert($item);
        }
    }
}
