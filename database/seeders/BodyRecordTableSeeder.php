<?php

namespace Database\Seeders;

use App\Models\BodyRecord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BodyRecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $start = strtotime("-6 month");
		//作成する日数（180日分）
		$days = 180;
		//初期体重(50.0kg)
		$weight = 50.0;
		for($i = 0; $i < $days; $i++){
			//作成する日
			$created_at = $start + $i * 24 * 60 * 60;
			//体重をランダムで作成する
			//-200g〜200gで増減するようにする
			$weight += 0.1 * (2 - rand(0, 4));
			
			//保存実行
			$log = new BodyRecord();
			$log->created_at = date("Ymd", $created_at);
			$log->weight = $weight;
			$log->save();
		}
	}
}