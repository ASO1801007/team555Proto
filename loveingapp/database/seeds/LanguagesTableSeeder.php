<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $languageName = [
            '日本語',
            '中国語',
            '英語',
            'スペイン語',
            'ヒンドゥー語',
            'アラビア語',
            'マレー語',
            'ロシア語',
            'フランス語',
            'ポルトガル語',
            'ベンガル語',
            'カンポジア語',
            'その他'
        ];

        foreach($languageName as $i){
            DB::table('languages')->insert([
                'name' => $i
            ]);
        }
    }
}
