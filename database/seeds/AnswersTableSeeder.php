<?php

use App\Answer;
use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answer::truncate();
        Answer::create(array('id' => 1, 'discussion_id' => 1, 'user_id' => 2, 'description' => 'Tev ir jāaiziet uz Ārijas kabinetu pakaļ uzlīmei, tas ir tajā un tajā kabinetā, ieej telpā saki, ka vēlie spagarināt st apl nr, uzlīmēs uzlīmi un gatavs.', 'rating' => 20));
        Answer::create(array('id' => 2, 'discussion_id' => 2, 'user_id' => 2, 'description' => 'Šito desc vajadzēs izmainīt, bet nu ok. Dude straujums epastaa suutija pajl.', 'rating' => -4));
    }
}
