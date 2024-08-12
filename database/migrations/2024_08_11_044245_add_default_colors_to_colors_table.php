<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        $colors = [
            ['name' => 'color-1', 'hex_code' => '#bae2ff'],
            ['name' => 'color-2', 'hex_code' => '#ffcab9'],
            ['name' => 'color-3', 'hex_code' => '#b9ffdd'],
            ['name' => 'color-4', 'hex_code' => '#f99494'],
            ['name' => 'color-5', 'hex_code' => '#ffe8ac'],
            ['name' => 'color-6', 'hex_code' => '#9dd6ff'],
            ['name' => 'color-7', 'hex_code' => '#eca2ff'],
            ['name' => 'color-8', 'hex_code' => '#cdcdcd'],
            ['name' => 'color-9', 'hex_code' => '#daff8b'],
            ['name' => 'color-10', 'hex_code' => '#979797'],
            ['name' => 'color-11', 'hex_code' => '#ffa285'],
            ['name' => 'color-12', 'hex_code' => '#a99a7c'],
        ];

        foreach ($colors as $color) {
            DB::table('colors')->insert($color);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        DB::table('colors')->whereIn('name', [
            'color-1', 'color-2', 'color-3', 'color-4', 'color-5', 'color-6',
            'color-7', 'color-8', 'color-9', 'color-10', 'color-11', 'color-12',
        ])->delete();
    }


};
