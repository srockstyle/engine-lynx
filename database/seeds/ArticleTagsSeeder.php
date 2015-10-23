<?php

  use Illuminate\Database\Seeder;

  class TagsTableSeeder extends Seeder
  {
    public function run()
    {
      DB::table('article_tags')->truncate();

      DB::table('article_tags')->insert([
        [
          'article_id' => '1',
          'tag_id' => '1',
          'created_at' => '2015-01-31 23:59:59',
          'updated_at' => '2015-01-31 23:59:59',
        ],
        [
          'article_id' => '1',
          'tag_id' => '2',
          'created_at' => '2015-01-31 23:59:59',
          'updated_at' => '2015-01-31 23:59:59',
        ],
        [
          'article_id' => '1',
          'tag_id' => '3',
          'created_at' => '2015-01-31 23:59:59',
          'updated_at' => '2015-01-31 23:59:59',
        ],
        [
          'article_id' => '2',
          'tag_id' => '2',
          'created_at' => '2015-01-31 23:59:59',
          'updated_at' => '2015-01-31 23:59:59',
        ],
        [
          'article_id' => '3',
          'tag_id' => '1',
          'created_at' => '2015-01-31 23:59:59',
          'updated_at' => '2015-01-31 23:59:59',
        ],
      ]);
    }
  }
