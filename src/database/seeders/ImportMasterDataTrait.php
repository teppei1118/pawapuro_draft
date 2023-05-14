<?php

namespace Database\Seeders;

use SplFileObject;

trait ImportMasterDataTrait
{
    /**
     * @param string $fileName
     * @return SplFileObject
     */
    public function importCsv(string $fileName): SplFileObject
    {
        $csvFile = new SplFileObject(__DIR__ . '/data/' . $fileName);
        $csvFile->setFlags(
            \SplFileObject::READ_CSV | // CSV 列として行を読み込む
            \SplFileObject::READ_AHEAD |  // 先読み/巻き戻しで読み出す。
            \SplFileObject::SKIP_EMPTY |  // 空行は読み飛ばす
            \SplFileObject::DROP_NEW_LINE // 行末の改行を読み飛ばす
        );

        return $csvFile;
    }
}