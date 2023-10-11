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
            'name' => 'アームカール',
            'part' => '上腕二頭筋',
            'body' => 'アームカールは伸ばした肘を曲げる初心者でも簡単な種目です。スタートポジションは腕を腰の横に力を抜いて伸ばし、親指を前にします。そこから肘が体から離れないように、親指を外側に向けながら持ち上げていきます。そして、持ち上げた時と同じ軌道を通って元のポジションに戻しましょう。重すぎない重量で限界×３setを目指しましょう。ポイント：肘が離れると負荷が逃げて効率が悪くなってしまうので気を付けましょう。',
            ]);
        //
    }
}
