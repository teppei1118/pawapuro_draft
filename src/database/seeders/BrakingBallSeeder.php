<?php

namespace Database\Seeders;

use App\Models\BrakingBall;
use Illuminate\Database\Seeder;
use SplFileObject;

class BrakingBallSeeder extends Seeder
{
    use ImportMasterDataTrait;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brakingBallMaster = $this->importCsv('braking_ball_master.csv');

        $columns = [];
        foreach ($brakingBallMaster as $rowNumber => $rowData) {
            if ($rowNumber === 0) {
                $columns = $rowData;
                continue;
            }

            $insertData = array_combine($columns, $rowData);

            BrakingBall::create($insertData);
        }
    }
}
