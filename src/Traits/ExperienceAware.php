<?php

namespace App\Traits;

use App\Components\Characters\Character;

trait ExperienceAware
{
    protected ?Character $experienced;
    protected int $experienceTotal;

    public function getExperienced(): ?Character
    {
        return $this->experienced;
    }

    public function setExperienced(?Character $experienced, $experienceTotal): self
    {
        $this->experienced = $experienced;
        $this->experienceTotal = $experienceTotal;

        return $this;
    }

    public function addXP(int $xp): int
    {
        $this->experienceTotal += $xp;

        return $this;
    }

    public function addLevel(int $level): int
    {
        $this->experienceLevel += $level;

        return $this;
    }

}