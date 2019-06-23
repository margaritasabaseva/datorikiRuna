<?php

use App\Discussion;
use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discussion::truncate();
        Discussion::create(array('id' => 1, 'topic_id' => 1, 'user_id' => 1, 'title' => 'Kā pagarināt studentu apliecību?', 'description' => 'Vēlētos uzzināt kā var pagarināt studentu apliecību, kur jāiet, kas jādara.', 'rating' => 23));
        Discussion::create(array('id' => 2, 'topic_id' => 2, 'user_id' => 1, 'title' => 'Kā pievienot latviešu burtus C++ projektam?', 'description' => 'Lasīju internetā, ka, lai pievienotu latviešu burtus, vajag lietot kaut kādu lvtocon, kur tādu var iegūt, un kā to pievienot?', 'rating' => 12));
    }
}
