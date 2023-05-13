<?php

namespace App\Domain\Entities;

use App\Domain\ObjectValue\BrakingBallDirectionObjectValue;

class BrakingBallEntity
{
    /**
     * @param int $id
     * @param string $name
     * @param BrakingBallDirectionObjectValue $breakingBallDirection
     * @param bool $isOriginal
     */
    public function __construct(
        private readonly int $id = 0,
        private readonly string $name = '',
        private readonly BrakingBallDirectionObjectValue $breakingBallDirection = new BrakingBallDirectionObjectValue(
            BrakingBallDirectionObjectValue::STRAIGHT_CODE
        ),
        private readonly bool $isOriginal = false,
    ) {
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
    public function getBreakingBallDirection(): BrakingBallDirectionObjectValue
    {
        return $this->breakingBallDirection;
    }

    /**
     * @return bool
     */
    public function isOriginal(): bool
    {
        return $this->isOriginal;
    }
}