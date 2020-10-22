<?php

use Illuminate\Database\Seeder;

class Posts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'post'=>'Hola prueba seeder post',
            'user_id'=>'2'
        ]);
    }
}
