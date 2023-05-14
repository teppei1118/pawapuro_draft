<?php

namespace Database\Seeders;

use App\Models\SpecialAbility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialAbilitySeeder extends Seeder
{
    use ImportMasterDataTrait;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brakingBallMaster = $this->importCsv('special_ability_master.csv');

        $columns = [];
        foreach ($brakingBallMaster as $rowNumber => $rowData) {
            if ($rowNumber === 0) {
                $columns = $rowData;
                continue;
            }

            $insertData = array_combine($columns, $rowData);

            SpecialAbility::create($insertData);
        }
    }
}
