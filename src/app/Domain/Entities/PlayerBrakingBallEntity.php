<?php

namespace App\Domain\Entities;

class PlayerBrakingBallEntity
{
    /**
     * @param int $id
     * @param int $playerId
     * @param int $brakingBallId
     * @param int $amount
     */
    public function __construct(
        private readonly int $id            = 0,
        private readonly int $playerId      = 0,
        private readonly int $brakingBallId = 0,
        private readonly int $amount        = 0,
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
     * @return PlayerEntity
     */
    public function getPlayer(): PlayerEntity
    {
        return $this->player;
    }

    /**
     * @return BrakingBallEntity
     */
    public function getBrakingBall(): BrakingBallEntity
    {
        return $this->brakingBall;
    }
}