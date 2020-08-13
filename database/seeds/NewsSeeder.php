<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * @var string
     */
    private $dummyContent = "
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate finibus rhoncus. Cras ultrices nisl
        ac ipsum consectetur aliquam. Nulla interdum libero ut neque facilisis pharetra. Nunc euismod eu lectus
        sed placerat. Donec nibh arcu, volutpat a leo sit amet, ornare dapibus massa. Morbi et lobortis metus.
        Quisque urna est, rutrum in luctus ut, porttitor id mauris.</p>
        <br />
        <p>Vivamus quis ultricies sapien. Curabitur porta elementum neque ac consequat. Pellentesque pellentesque
        pretium libero sit amet vestibulum. Aliquam mauris lectus, scelerisque et odio nec, viverra mattis arcu.
        Duis ut lorem mi. Sed id malesuada sapien. Integer ullamcorper, est nec fringilla egestas, augue nisi dignissim
        felis, luctus placerat libero dolor sit amet augue. Integer tincidunt urna leo, non porta diam interdum ac.
        Vivamus ullamcorper tempus blandit. Nulla condimentum magna elit, nec finibus lacus ultricies egestas.
        Suspendisse potenti. Nullam aliquet commodo tincidunt. Cras rhoncus vehicula tincidunt. Interdum et malesuada
        fames ac ante ipsum primis in faucibus. Pellentesque feugiat elit ac feugiat facilisis.<p/>
    ";

    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $generatedDate = $this->generateRandomDate();

            DB::table('news')->insert([
                'title' => 'Dummy title ' . $i,
                'summary' => 'Dummy summary ' . $i,
                'content' => $this->dummyContent . " $i",
                'url_normalized' => '/dummy-title-' . $i,
                'created_at' => $generatedDate,
                'updated_at' => $generatedDate
            ]);
        }
    }

    /**
     * @return DateTime
     * @throws Exception
     */
    private function generateRandomDate(): DateTime {
        $datetime = new DateTime();
        $datetime->setTime(random_int(1, 23), random_int(1, 59), random_int(1, 59));
        $datetime->setDate(random_int(2015, 2020), random_int(1, 12), random_int(1, 25));
        return $datetime;
    }
}
