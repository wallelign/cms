<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class memberseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([
            'id'=>2,
            'name'=>Str::random(10),
            'email'=>Str::random(10).'@gmail.com',
            'address'=>Str::random(10)
        ]);
    }
}
