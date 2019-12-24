<?php
declare(strict_types=1);

namespace App\Generator\Validator;

use App\Enum\Exercise;

class ExercisingValidation extends GymValidation
{
    protected function isExerciseAllowed(string $name, array $exercises): bool
    {
        if ($this->isExerciseNameValid($name)) {
            return true;
        }

        $key = sizeof($exercises);

        if (!$key) {
            return true;
        }

        $lastExercise = $exercises[--$key];

        return $this->isLastExerciseNameValid($lastExercise);
    }

    private function isExerciseNameValid(string $name): bool
    {
        return $name !== Exercise::SHORT_SPRINTS &&
            $name !== Exercise::JUMPING_ROPE &&
            $name !== Exercise::JUMPING_JACKS;
    }

    private function isLastExerciseNameValid(string $name): bool
    {
        return !($name === Exercise::SHORT_SPRINTS ||
            $name === Exercise::JUMPING_ROPE ||
            $name === Exercise::JUMPING_JACKS);
    }
}
