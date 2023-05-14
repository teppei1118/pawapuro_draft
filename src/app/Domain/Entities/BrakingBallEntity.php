<?php

namespace App\Domain\Entities;

use App\Domain\ObjectValue\BrakingBallDirectionObjectValue;
use App\Exceptions\ObjectValueException;

class BrakingBallEntity
{
    private BrakingBallDirectionObjectValue $brakingBallDirection;

    /**
     * @param int $id
     * @param string $name
     * @param int $brakingDirectionCode
     * @param bool $isOriginal
     * @throws ObjectValueException
     */
    public function __construct(
        private readonly int $id                   = 0,
        private readonly string $name              = '',
        private readonly int $brakingDirectionCode = 0,
        private readonly bool $isOriginal          = false,
    ) {
        $this->brakingBallDirection = new BrakingBallDirectionObjectValue($this->brakingDirectionCode);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return BrakingBallDirectionObjectValue
     */
    public function getBrakingBallDirection(): BrakingBallDirectionObjectValue
    {
        return $this->brakingBallDirection;
    }

    /**
     * @return bool
     */
    public function isOriginal(): bool
    {
        return $this->isOriginal;
    }
}