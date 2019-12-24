<?php
declare(strict_types=1);

namespace App\Generator;

use App\Enum\Participant as ParticipantEnum;
use App\Generator\Context\ExercisingLevelContext;
use App\Generator\Level\BeginnerExercising;
use App\Generator\Level\ProfessionalExercising;

final class Exercises
{
    private $participants;
    private $exercisingLevelContext;
    private $beginnerExercising;
    private $professionalExercising;

    public function __construct()
    {
        $this->participants = ParticipantEnum::PARTICIPANTS;
        $this->exercisingLevelContext = new ExercisingLevelContext();

        $this->beginnerExercising = new BeginnerExercising();
        $this->professionalExercising = new ProfessionalExercising();
    }

    public function defineSequences(): array
    {
        foreach ($this->participants as $participantKey => $participant) {
            $this->participants[$participantKey] = $this->defineParticipantWithExercises(
                $this->participants,
                $participantKey
            );
        }

        return $this->participants;
    }

    private function defineParticipantWithExercises(array $allParticipants, int $participantKey): array
    {
        $allParticipants[$participantKey][ParticipantEnum::EXERCISES_KEY] = [];
        $level = $allParticipants[$participantKey][ParticipantEnum::LEVEL_KEY];

        if ($level === ParticipantEnum::BEGINNER_LEVEL) {
            $this->exercisingLevelContext->defineLevel($this->beginnerExercising);
        }

        if ($level === ParticipantEnum::PROFESSIONAL_LEVEL) {
            $this->exercisingLevelContext->defineLevel($this->professionalExercising);
        }

        return $this->exercisingLevelContext->defineParticipantWithExercises($allParticipants, $participantKey);
    }
}
