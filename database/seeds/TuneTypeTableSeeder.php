<?php

use Illuminate\Database\Seeder;
use App\Tune;
use App\Type;

class TuneTypeTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $tunes = [
            'Swallowtail Jig' => ['Celtic','Jig'],
            "Frank's Reel" => ['American','Reel'],
            'Midnight on the Water' => ['American'],
            'Strawberry Rhubarb Waltz' => ['American','Waltz'],
            'The Road to Lisdovarna' => ['Celtic','Jig']
        ];

        foreach($tunes as $name => $types) {

            $tune = Tune::where('name','like',$name)->first();
            foreach($types as $typeName) {
                $type = Type::where('name','like',$typeName)->first();
                $tune->types()->save($type);
            }
        }
    }
}
