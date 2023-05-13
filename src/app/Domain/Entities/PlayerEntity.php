<?php

namespace App\Domain\Entities;

use App\Domain\ObjectValue\BallHandObjectValue;
use App\Domain\ObjectValue\BatHandObjectValue;
use App\Domain\ObjectValue\PositionObjectValue;
use App\Domain\ObjectValue\SpecialAbilityObjectValue;
use App\Domain\ObjectValue\TeamObjectValue;
use App\Models\Player;

class PlayerEntity
{
    public function __construct(
        private readonly int $id = 0,
        private readonly string $name = '',
        private readonly TeamObjectValue $team = new TeamObjectValue(Player::DEFAULT_TEAM_CODE),
        private readonly BallHandObjectValue $ballHand = new BallHandObjectValue(Player::DEFAULT_BALL_HAND_CODE),
        private readonly BatHandObjectValue $batHand = new BatHandObjectValue(Player::DEFAULT_BAT_HAND_CODE),
        private readonly PositionObjectValue $mainPosition = new PositionObjectValue(Player::DEFAULT_MAIN_POSITION_CODE),
        private readonly int $ballSpeed = Player::DEFAULT_BALL_SPEED,
        private readonly int $control = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $stamina = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $ballistic = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $meet = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $power = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $runningSpeed = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $shoulder = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $catch = Player::DEFAULT_BASIC_ABILITY,
        private readonly SpecialAbilityObjectValue $vsPinch = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $vsLeftHitter = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $strength = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $stretch = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $quick = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $vsChance = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $vsLeftPitcher = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $catcher = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $steal = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $baseRunning = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $throwing = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $notInjury = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
        private readonly SpecialAbilityObjectValue $recovery = new SpecialAbilityObjectValue(Player::DEFAULT_SPECIAL_ABILITY),
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
     * @return int
     */
    public function getTeamId(): int
    {
        return $this->teamId;
    }

    /**
     * @return BallHandObjectValue
     */
    public function getBallHand(): BallHandObjectValue
    {
        return $this->ballHand;
    }

    /**
     * @return BatHandObjectValue
     */
    public function getBatHand(): BatHandObjectValue
    {
        return $this->batHand;
    }

    /**
     * @return PositionObjectValue
     */
    public function getMainPosition(): PositionObjectValue
    {
        return $this->mainPosition;
    }

    /**
     * @return int
     */
    public function getBallSpeed(): int
    {
        return $this->ballSpeed;
    }

    /**
     * @return int
     */
    public function getControl(): int
    {
        return $this->control;
    }

    /**
     * @return int
     */
    public function getStamina(): int
    {
        return $this->stamina;
    }

    /**
     * @return int
     */
    public function getBallistic(): int
    {
        return $this->ballistic;
    }

    /**
     * @return int
     */
    public function getMeet(): int
    {
        return $this->meet;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * @return int
     */
    public function getRunningSpeed(): int
    {
        return $this->runningSpeed;
    }

    /**
     * @return int
     */
    public function getShoulder(): int
    {
        return $this->shoulder;
    }

    /**
     * @return int
     */
    public function getCatch(): int
    {
        return $this->catch;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getVsPinch(): SpecialAbilityObjectValue
    {
        return $this->vsPinch;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getVsLeftHitter(): SpecialAbilityObjectValue
    {
        return $this->vsLeftHitter;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getStrength(): SpecialAbilityObjectValue
    {
        return $this->strength;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getStretch(): SpecialAbilityObjectValue
    {
        return $this->stretch;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getQuick(): SpecialAbilityObjectValue
    {
        return $this->quick;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getVsChance(): SpecialAbilityObjectValue
    {
        return $this->vsChance;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getVsLeftPitcher(): SpecialAbilityObjectValue
    {
        return $this->vsLeftPitcher;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getCatcher(): SpecialAbilityObjectValue
    {
        return $this->catcher;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getSteal(): SpecialAbilityObjectValue
    {
        return $this->steal;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getBaseRunning(): SpecialAbilityObjectValue
    {
        return $this->baseRunning;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getThrowing(): SpecialAbilityObjectValue
    {
        return $this->throwing;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getNotInjury(): SpecialAbilityObjectValue
    {
        return $this->notInjury;
    }

    /**
     * @return SpecialAbilityObjectValue
     */
    public function getRecovery(): SpecialAbilityObjectValue
    {
        return $this->recovery;
    }
}