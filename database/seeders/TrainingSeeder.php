<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')->insert([
            'name' => 'ダンベルキックバック',
            'part' => '上腕三頭筋',
            'body' => 'ウエイト種目です。上体を９０°倒し、腕を下半身と垂直になるように挙げていきます。',
            ]);
            
            
        DB::table('trainings')->insert([
            'name' => 'ラットプルダウン',
            'part' => '広背筋、僧帽筋',
            'body' => 'マシン種目です。肩甲骨を寄せ背筋を伸ばしバーを持ちます。肘をあばらにつけるように、胸に引きつけていきます。そして、肩甲骨を寄せながら元の体勢に戻っていきます。',
            ]);
            
        DB::table('trainings')->insert([
            'name' => 'サイドレイズ',
            'part' => '三角筋（中部）',
            'body' => 'ウエイト種目です。胸を張った状態で手は太ももの前に置き直立します。足を肩幅程度開き、上半身を少し前傾します。肘を少し曲げたまま振り上げるイメージで真横からやや前に肩と同じ高さまで挙げ、ゆっくり下ろします。',
            ]);
        
        DB::table('trainings')->insert([
            'name' => '自重スクワット',
            'part' => '大臀筋、大腿四頭筋、ハムストリング、ヒラメ筋',
            'body' => '自重種目です。足を肩幅に開き、背筋を伸ばしたまま、お尻を後ろに突き出すように、股関節からしゃがんでいきます。太ももと床が平行になるまで下ろしたら、ゆっくり上がりましょう。膝がつま先より前に出ないように意識しましょう。※腰を痛めやすい種目なので、腹圧を入れて行ってください。', 
            ]);
            
        DB::table('trainings')->insert([
            'name' => 'ハイニ―スキップ',
            'part' => 'Speed',
            'body' => '膝を高く上げ、股関節の動的柔軟性を高めます。身体と支持足を真っ直ぐに維持しながら、バランスを崩さないように行いましょう。',
            ]);
            
        DB::table('trainings')->insert([
            'name' => 'インアウトイン',
            'part' => 'Agility',
            'body' => '前方から後方への方向転換動作を学習します。前と後ろへ充分に重心を移動させ、負荷を加えながら行いましょう。',
            ]);
            
        DB::table('trainings')->insert([
            'name' => '3方向スタート',
            'part' => 'Quickness',
            'body' => 'パワーポジション※1の姿勢から聴覚刺激※2に反応し、3方向のいずれかに動き出します。正しく判断して動きましょう。
                       ※1 素早く動き出せる姿勢
                       ※2 声や手拍子などの音による刺激',
            ]);    
            
        DB::table('trainings')->insert([
            'name' => '片足バランス',
            'part' => 'バランストレーニング',
            'body' => '直立から片足を挙げてキープします。足の裏でバランスを保つ感覚を身につけましょう。',
            ]);
            
        DB::table('trainings')->insert([
            'name' => 'クリーン',
            'part' => 'パワートレーニング',
            'body' => 'ウエイト種目です。セット姿勢から引き上げ、キャッチします。',
            ]);
            
        DB::table('trainings')->insert([
            'name' => 'インターバルトレーニング',
            'part' => '持久力トレーニング',
            'body' => 'はしります。',
            ]);
            
        DB::table('trainings')->insert([
            'name' => 'またわり',
            'part' => '柔軟トレーニング',
            'body' => 'うう',
            ]);
        //
    }
}
