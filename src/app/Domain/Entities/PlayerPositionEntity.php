<?php

namespace App\Domain\Entities;

use App\Domain\ObjectValue\PositionObjectValue;
use App\Exceptions\ObjectValueException;

class PlayerPositionEntity
{
    private PositionObjectValue $position;

    /**
     * @param int $id
     * @param int $playerId
     * @param int $positionCode
     * @param int $amount
     * @throws ObjectValueException
     */
    public function __construct(
        private readonly int $id           = 0,
        private readonly int $playerId     = 0,
        private readonly int $positionCode = 0,
        private readonly int $amount       = 0,
    ) {
        $this->position = new PositionObjectValue($this->positionCode);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return PlayerEntity
     */
    public function getPlayer(): PlayerEntity
    {
        return $this->player;
    }

    /**
     * @return PositionObjectValue
     */
    public function getPosition(): PositionObjectValue
    {
        return $this->position;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

}