<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $schoolName = [
            '麻生情報ビジネス専門学校 福岡校',
            '麻生外語観光&製菓専門学校',
            '麻生医療福祉専門学校 福岡校',
            '麻生建築&デザイン専門学校',
            '麻生公務員専門学校 福岡校',
            'ASO ポップカルチャー専門学校',
            '麻生美容専門学校 福岡校',
            '専門学校 麻生工科自動車大学校',
            '専門学校 麻生リハビリテーション大学校',
            '麻生情報ビジネス専門学校 北九州校',
            '専門学校 麻生医療福祉＆観光カレッジ',
            '麻生公務員専門学校 北九州校',
            '専門学校 麻生看護大学校',
            'ASO高等部',
            'Binus ASO School of Engineering',
            'その他'
        ];

        foreach($schoolName as $i){
            DB::table('schools')->insert([
                'name' => $i
            ]);
        }
    }
}
