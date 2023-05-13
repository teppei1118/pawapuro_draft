<?php

namespace App\Domain\Entities;

class PlayerBrakingBallEntity
{
    /**
     * @param int $id
     * @param PlayerEntity $player
     * @param BrakingBallEntity $brakingBall
     * @param int $
     */
    public function __construct(
        private readonly int $id = 0,
        private readonly PlayerEntity $player = new PlayerEntity(),
        private readonly BrakingBallEntity $brakingBall = new BrakingBallEntity(),
        private readonly int amount = 0,
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