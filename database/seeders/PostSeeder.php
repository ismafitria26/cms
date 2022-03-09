<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => '1',
                'profile' => 'images/char1.png',
                'description' => 'images/pop1.png',
                'class'=> 'firstpop'        
                ],
                [
                'id' => '2',
                'profile' => 'images/char2.png',
                'description' => 'images/popup2.png',
                'class'=> 'secondpop'    
                ],
                [
                'id' => '3',
                'profile' => 'images/char3.png',
                'description' => 'images/popup3.png',
                'class'=> 'thirdpop' 
                ],
                [
                'id' => '4',
                'profile' => 'images/char4.png',
                'description' => 'images/popup4.png',
                'class'=> 'fourthpop' 
                ],
                [
                'id' => '5',
                'profile' => 'images/char5.png',
                'description' => 'images/popup6.png',
                'class'=> 'fifthpop' 
                ],
                [
                'id' => '6',
                'profile' => 'images/char6.png',
                'description' => 'images/popup7.png',
                'class'=> 'sixthpop' 
                ]
        ]);
    }
}
