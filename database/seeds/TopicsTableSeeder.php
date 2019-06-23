<?php

use App\Topic;
use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::truncate();
        Topic::create(array('id' => 1, 'name' => 'Akadēmiskie jautājumi', 'description' => 'Jebkādi jautājumi par akadēmisko procesu'));
        Topic::create(array('id' => 2, 'name' => 'Programmēšana', 'description' => 'Diskusijas un jautājumi par un ap programmēšanu'));
    }
}
