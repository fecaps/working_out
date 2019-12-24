<?php
declare(strict_types=1);

namespace App\Generator\Level;

interface LevelExercising
{
    public function defineParticipantWithExercises(array $allParticipants, int $participantKey): array;
}
