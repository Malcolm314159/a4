<?php

use Illuminate\Database\Seeder;

use App\Tune;

class TunesTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run() {

        Tune::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Swallowtail Jig',
            'type_id' => 1,
            'kee' => 'e',
            'mode' => 'dorian',
            'resource' => 'http://abcnotation.com/getResource/downloads/image/swallowtail-jig.png?a=bonanzaville.fiddle-nd.org/Jam/0018',
        ]);
        Tune::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => "Frank's Reel",
            'type_id' => 2,
            'kee' => 'a',
            'mode' => 'major',
            'resource' => 'https://www.youtube.com/watch?v=oWvtdsMOsSU',
        ]);
        Tune::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => "Midnight on the Water",
            'type_id' => 3,
            'kee' => 'd',
            'mode' => 'major',
            'resource' => 'https://www.youtube.com/watch?v=9ueE4iPU22o',
        ]);
        Tune::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => "Strawberry Rhubarb Waltz",
            'type_id' => 3,
            'kee' => 'd',
            'mode' => 'major',
            'resource' => 'https://www.youtube.com/watch?v=KDt6G_AHOd8',
        ]);
        Tune::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => "The Road to Lisdovarna",
            'type_id' => 1,
            'kee' => 'e',
            'mode' => 'dorian',
            'resource' => '',
        ]);
        Tune::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => "The Moon and Seven Stars",
            'type_id' => 1,
            'kee' => 'd',
            'mode' => 'major',
            'resource' => '',
        ]);
        Tune::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => "Catharsis",
            'type_id' => 2,
            'kee' => 'g',
            'mode' => 'minor',
            'resource' => '',
        ]);
        Tune::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => "Reel de Montreal",
            'type_id' => 2,
            'kee' => 'd',
            'mode' => 'major',
            'resource' => 'https://www.youtube.com/watch?v=yxlmhHWFRSY',
        ]);
    }
}
