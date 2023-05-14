<?php

namespace App\Domain\Entities;

use App\Domain\ObjectValue\AbilityTypeObjectValue;
use App\Domain\ObjectValue\PositionTypeObjectValue;
use App\Exceptions\ObjectValueException;

class SpecialAbilityEntity
{
    private PositionTypeObjectValue $positionType;
    private AbilityTypeObjectValue $abilityType;

    /**
     * @param int $id
     * @param string $name
     * @param int $positionTypeCode
     * @param int $abilityTypeCode
     * @throws ObjectValueException
     */
    public function __construct(
        private readonly int $id               = 0,
        private readonly string $name          = '',
        private readonly int $positionTypeCode = 0,
        private readonly int $abilityTypeCode  = 0,
    ) {
        $this->positionType = new PositionTypeObjectValue($this->positionTypeCode);
        $this->abilityType = new AbilityTypeObjectValue($this->abilityTypeCode);
    }

    /**
     * @return PositionTypeObjectValue
     */
    public function getPositionType(): PositionTypeObjectValue
    {
        return $this->positionType;
    }

    /**
     * @return AbilityTypeObjectValue
     */
    public function getAbilityType(): AbilityTypeObjectValue
    {
        return $this->abilityType;
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
    public function getPositionTypeCode(): int
    {
        return $this->positionTypeCode;
    }

    /**
     * @return int
     */
    public function getAbilityTypeCode(): int
    {
        return $this->abilityTypeCode;
    }
}