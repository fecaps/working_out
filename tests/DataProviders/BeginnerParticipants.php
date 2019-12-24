<?php

namespace Tests\DataProviders;

use App\Enum\Participant as ParticipantEnum;

final class BeginnerParticipants
{
    public function participants(): array
    {
        return [
            [
                [
                    'data' => [
                        [
                            ParticipantEnum::NAME_KEY => 'Tom',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::BEGINNER_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Mathijs',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::BEGINNER_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                    ],
                    'key' => 0,
                ],
                [
                    'data' => [
                        [
                            ParticipantEnum::NAME_KEY => 'Tom',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::BEGINNER_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [
                                'jumping jacks',
                                'front squats',
                                'back squats',
                                'jumping rope',
                                'push ups',
                                'a break',
                                'rings',
                                'back squats',
                                'front squats',
                                'short sprints',
                                'front squats',
                                'rings',
                                'pull ups',
                                'jumping rope',
                                'pull ups',
                                'handstand practice',
                                'push ups',
                                'a break',
                                'rings',
                                'short sprints',
                                'back squats',
                                'a break',
                                'a break',
                                'jumping jacks',
                                'rings',
                                'jumping rope',
                                'back squats',
                                'rings',
                                'push ups',
                                'push ups',
                                'pull ups',
                                'jumping jacks',
                                'rings',
                                'front squats',
                                'jumping jacks',
                            ],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Mathijs',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::BEGINNER_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                    ],
                    'key' => 1,
                ],
            ]
        ];
    }
}
