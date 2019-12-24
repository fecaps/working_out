<?php
declare(strict_types=1);

namespace App\Transformer;

use App\Enum\Participant;
use App\Generator\Exercises;

final class Participants
{
    private const COMPLEMENT_PATTERN = 'will do';
    private const PARTICIPANTS_DELIMITER = ', ';
    private $exercises;

    public function __construct(Exercises $exercises)
    {
        $this->exercises = $exercises;
    }

    public function defineResponse(): array
    {
        $participantsExercises = $this->exercises->defineSequences();

        $response = [];

        foreach ($participantsExercises as $participantExercise) {
            $response = $this->prepareResponse($participantExercise, $response);
        }

        return $this->formatResponse($response);
    }

    private function prepareResponse(array $participantExercise, array $response): array
    {
        $name = $participantExercise[Participant::NAME_KEY];
        $level = sprintf('(%s)', $participantExercise[Participant::LEVEL_KEY]);
        $complement = self::COMPLEMENT_PATTERN;

        foreach ($participantExercise[Participant::EXERCISES_KEY] as $key => $value) {
            $response[$key][] = sprintf('%s %s %s %s', $name, $level, $complement, $value);
        }

        return $response;
    }

    private function formatResponse(array $response): array
    {
        $finalResponse = [];

        $startHour = 0;
        $endHour = 1;

        foreach ($response as $value) {
            $allParticipantsValue = implode(self::PARTICIPANTS_DELIMITER, $value);

            $finalValue = sprintf('%s:00 - %s:00 - %s', $startHour, $endHour, $allParticipantsValue);

            ++$startHour;
            ++$endHour;

            $finalResponse[] = $finalValue;
        }

        return $finalResponse;
    }
}
