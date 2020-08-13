<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('news')->insert([
                'title' => 'Dummy title ' . $i,
                'summary' => 'Dummy summary ' . $i,
                'content' => "<p> super large dummy content number " . $i . "</p>",
                'url_normalized' => '/dummy-title-' . $i,
                'created_at' => new DateTime('now'),
                'updated_at' => new DateTime('now')
            ]);
        }
    }
}
