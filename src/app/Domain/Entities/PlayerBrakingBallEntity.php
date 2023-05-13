<?php

namespace App\Domain\Entities;

class PlayerBrakingBallEntity
{
    public function __construct(
        private readonly int $id = 0,
        private readonly PlayerEntity $player = new PlayerEntity(),
        private readonly BrakingBallEntity $brakingBall = new BrakingBallEntity(),
        private readonly int amount = 0,
    ) {
    }
}