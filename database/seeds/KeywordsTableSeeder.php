<?php

use App\Keyword;
use Illuminate\Database\Seeder;

class KeywordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keyword::truncate();
        Keyword::create(array('id' => 1, 'name' => 'Mācības'));
        Keyword::create(array('id' => 2, 'name' => 'Steidzami'));
        Keyword::create(array('id' => 3, 'name' => 'C++'));
        Keyword::create(array('id' => 4, 'name' => 'HTML'));
    }
}
