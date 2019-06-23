<?php

use App\DiscussionKeyword;
use Illuminate\Database\Seeder;

class DiscussionKeywordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DiscussionKeyword::truncate();
        DiscussionKeyword::create(array('id' => 1, 'discussion_id' => 1, 'keyword_id' => 2));
        DiscussionKeyword::create(array('id' => 2, 'discussion_id' => 2, 'keyword_id' => 1));
        DiscussionKeyword::create(array('id' => 3, 'discussion_id' => 2, 'keyword_id' => 2));
        DiscussionKeyword::create(array('id' => 4, 'discussion_id' => 2, 'keyword_id' => 3));
    }
}