<?php

namespace App\Interfaces;

use App\Components\Characters\Character;

interface ExperienceInterface
{
    public function setExperienced(?Character $experienced, $experienceTotal): self;

    public function getExperienced(): ?Character;

    public function addXP(int $xp): int;

    public function addLevel(int $level): int;

}