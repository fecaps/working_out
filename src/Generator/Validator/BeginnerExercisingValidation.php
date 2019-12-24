<?php
declare(strict_types=1);

namespace App\Generator\Validator;

use App\Enum\Exercise;

class BeginnerExercisingValidation extends ExercisingValidation
{
    protected function isHandstand(string $name): bool
    {
        return $name === Exercise::HANDSTAND_PRACTICE;
    }

    protected function existHandstand(array $participantExercises): bool
    {
        return in_array(Exercise::HANDSTAND_PRACTICE, $participantExercises, true);
    }
}
