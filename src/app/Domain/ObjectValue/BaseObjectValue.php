<?php

namespace App\Domain\ObjectValue;

use App\Exceptions\ObjectValueException;

class BaseObjectValue
{
    protected int $code;

    const UNKNOWN_CODE = 0;

    const UNKNOWN_NAME = '未設定';

    /**
     * @param int $code
     * @throws ObjectValueException
     */
    public function __construct(int $code = self::UNKNOWN_CODE)
    {
        if (array_key_exists($code, $this->list()) === false) {
            throw new ObjectValueException();
        }

        $this->code = $code;
    }

    /**
     * @return int
     */
    public function code(): int
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        $list = $this->list();
        return $list[$this->code()];
    }

    /**
     * @return string[]
     */
    public function list(): array
    {
        return [
            self::UNKNOWN_CODE => self::UNKNOWN_NAME,
        ];
    }
}