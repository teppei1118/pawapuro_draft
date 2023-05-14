<?php

namespace App\Domain\Entities;

use App\Domain\ObjectValue\BallHandObjectValue;
use App\Domain\ObjectValue\BatHandObjectValue;
use App\Domain\ObjectValue\PositionObjectValue;
use App\Domain\ObjectValue\SpecialAbilityObjectValue;
use App\Domain\ObjectValue\TeamObjectValue;
use App\Exceptions\ObjectValueException;
use App\Models\Player;

class PlayerEntity
{
    private TeamObjectValue $team;
    private BallHandObjectValue $ballHand;
    private BatHandObjectValue $batHand;
    private PositionObjectValue $mainPosition;
    private SpecialAbilityObjectValue $vsPinch;
    private SpecialAbilityObjectValue $vsLeftHitter;
    private SpecialAbilityObjectValue $strength;
    private SpecialAbilityObjectValue $stretch;
    private SpecialAbilityObjectValue $quick;
    private SpecialAbilityObjectValue $vsChance;
    private SpecialAbilityObjectValue $vsLeftPitcher;
    private SpecialAbilityObjectValue $catcher;
    private SpecialAbilityObjectValue $steal;
    private SpecialAbilityObjectValue $baseRunning;
    private SpecialAbilityObjectValue $throwing;
    private SpecialAbilityObjectValue $notInjury;
    private SpecialAbilityObjectValue $recovery;

    /**
     * @param int $id
     * @param string $name
     * @param int $teamCode
     * @param int $ballHandCode
     * @param int $batHandCode
     * @param int $mainPositionCode
     * @param int $ballSpeed
     * @param int $control
     * @param int $stamina
     * @param int $ballistic
     * @param int $meet
     * @param int $power
     * @param int $runningSpeed
     * @param int $shoulder
     * @param int $catch
     * @param int $vsPinchCode
     * @param int $vsLeftHitterCode
     * @param int $strengthCode
     * @param int $stretchCode
     * @param int $quickCode
     * @param int $vsChanceCode
     * @param int $vsLeftPitcherCode
     * @param int $catcherCode
     * @param int $stealCode
     * @param int $baseRunningCode
     * @param int $throwingCode
     * @param int $notInjuryCode
     * @param int $recoveryCode
     * @throws ObjectValueException
     */
    public function __construct(
        private readonly int $id                = 0,
        private readonly string $name           = '',
        private readonly int $teamCode          = Player::DEFAULT_TEAM_CODE,
        private readonly int $ballHandCode      = Player::DEFAULT_BALL_HAND_CODE,
        private readonly int $batHandCode       = Player::DEFAULT_BAT_HAND_CODE,
        private readonly int $mainPositionCode  = Player::DEFAULT_MAIN_POSITION_CODE,
        private readonly int $ballSpeed         = Player::DEFAULT_BALL_SPEED,
        private readonly int $control           = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $stamina           = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $ballistic         = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $meet              = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $power             = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $runningSpeed      = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $shoulder          = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $catch             = Player::DEFAULT_BASIC_ABILITY,
        private readonly int $vsPinchCode       = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $vsLeftHitterCode  = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $strengthCode      = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $stretchCode       = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $quickCode         = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $vsChanceCode      = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $vsLeftPitcherCode = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $catcherCode       = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $stealCode         = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $baseRunningCode   = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $throwingCode      = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $notInjuryCode     = Player::DEFAULT_SPECIAL_ABILITY,
        private readonly int $recoveryCode      = Player::DEFAULT_SPECIAL_ABILITY
    ) {
        $this->team = new TeamObjectValue($this->teamCode);
        $this->ballHand = new BallHandObjectValue($this->ballHandCode);
        $this->batHand = new BatHandObjectValue($this->batHandCode);
        $this->mainPosition = new PositionObjectValue($this->mainPositionCode);
        $this->vsPinch = new SpecialAbilityObjectValue($this->vsPinchCode);
        $this->vsLeftHitter = new SpecialAbilityObjectValue($this->vsLeftHitterCode);
        $this->strength = new SpecialAbilityObjectValue($this->strengthCode);
        $this->stretch = new SpecialAbilityObjectValue($this->stretchCode);
        $this->quick = new SpecialAbilityObjectValue($this->quickCode);
        $this->vsChance = new SpecialAbilityObjectValue($this->vsChanceCode);
        $this->vsLeftPitcher = new SpecialAbilityObjectValue($this->vsLeftPitcherCode);
        $this->catcher = new SpecialAbilityObjectValue($this->catcherCode);
        $this->steal = new SpecialAbilityObjectValue($this->stealCode);
        $this->baseRunning = new SpecialAbilityObjectValue($this->baseRunningCode);
        $this->throwing = new SpecialAbilityObjectValue($this->throwingCode);
        $this->notInjury = new SpecialAbilityObjectValue($this->notInjuryCode);
        $this->recovery = new SpecialAbilityObjectValue($this->recoveryCode);
    }

    /**
     * @return TeamObjectValue
     */
    public function getTeam(): TeamObjectValue
    {
        return $this->team;
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
    public function getTeamCode(): int
    {
        return $this->teamCode;
    }

    /**
     * @return int
     */
    public function getBallHandCode(): int
    {
        return $this->ballHandCode;
    }

    /**
     * @return int
     */
    public function getBatHandCode(): int
    {
        return $this->batHandCode;
    }

    /**
     * @return int
     */
    public function getMainPositionCode(): int
    {
        return $this->mainPositionCode;
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
     * @return int
     */
    public function getVsPinchCode(): int
    {
        return $this->vsPinchCode;
    }

    /**
     * @return int
     */
    public function getVsLeftHitterCode(): int
    {
        return $this->vsLeftHitterCode;
    }

    /**
     * @return int
     */
    public function getStrengthCode(): int
    {
        return $this->strengthCode;
    }

    /**
     * @return int
     */
    public function getStretchCode(): int
    {
        return $this->stretchCode;
    }

    /**
     * @return int
     */
    public function getQuickCode(): int
    {
        return $this->quickCode;
    }

    /**
     * @return int
     */
    public function getVsChanceCode(): int
    {
        return $this->vsChanceCode;
    }

    /**
     * @return int
     */
    public function getVsLeftPitcherCode(): int
    {
        return $this->vsLeftPitcherCode;
    }

    /**
     * @return int
     */
    public function getCatcherCode(): int
    {
        return $this->catcherCode;
    }

    /**
     * @return int
     */
    public function getStealCode(): int
    {
        return $this->stealCode;
    }

    /**
     * @return int
     */
    public function getBaseRunningCode(): int
    {
        return $this->baseRunningCode;
    }

    /**
     * @return int
     */
    public function getThrowingCode(): int
    {
        return $this->throwingCode;
    }

    /**
     * @return int
     */
    public function getNotInjuryCode(): int
    {
        return $this->notInjuryCode;
    }

    /**
     * @return int
     */
    public function getRecoveryCode(): int
    {
        return $this->recoveryCode;
    }

}