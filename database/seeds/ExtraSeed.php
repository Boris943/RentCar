<?php

use Illuminate\Database\Seeder;

class ExtraSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extras')->insert(
            [
                [
                    'id' => 1,
                    'extra_name' => 'wug',
                    'price' => 5
                ],
                [
                    'id' => 2,
                    'extra_name' => 'cdw',
                    'price' => 7
                ],
                [
                    'id' => 3,
                    'extra_name' => 'roofbox',
                    'price' => 5
                ],
                [
                    'id' => 4,
                    'extra_name' => 'mifi4g',
                    'price' => 5
                ],
                [
                    'id' => 5,
                    'extra_name' => 'camera',
                    'price' => 5
                ]
            ]
        );
    }
}
