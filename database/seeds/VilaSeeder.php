<?php

use Illuminate\Database\Seeder;

class VilaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vilas')->insert([
            'title' => 'ویلا',
            'slug' => 'مهتاب',
            'short_descrip' => 'این یه توضیح کوتاه درباره ویلا',
            'descrip' => 'این یه توضیح طولانی درباره ویلا میباشد',
            'is_active' => '1',
            'price' => '1001',
            'qty' => '5',
            'image' => '/images/photos/shares/1.jpg',

        ]);
    }
}
