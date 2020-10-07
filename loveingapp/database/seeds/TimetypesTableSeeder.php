<?php

use Illuminate\Database\Seeder;

class TimetypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $timetypeName = array();
        $timetypeStartTime = array();
        $timetypeEndTime = array();
        
        for($i = 0; $i < 25; $i++){
            $timetypeName[] = $i.':00〜'.$i.':30';
            $timetypeName[] = $i.':30〜'.($i+1).':00';
            $timetypeStartTime[] = $i.':00';
            $timetypeEndTime[] = $i.':30';
            $timetypeStartTime[] = $i.':30';
            $timetypeEndTime[] = ($i+1).':00';
        }

        $timetypeData = array($timetypeName, $timetypeStartTime, $timetypeEndTime);

        for($i = 0; $i < 49; $i++){
            DB::table('timetypes')->insert([
                'name' => $timetypeName[$i],
                'startTime' => $timetypeStartTime[$i],
                'endTime' => $timetypeEndTime[$i]
            ]);
        }
    }
}
