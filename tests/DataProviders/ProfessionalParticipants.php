<?php

namespace Tests\DataProviders;

use App\Enum\Participant as ParticipantEnum;

final class ProfessionalParticipants
{
    private const CAMILLE_EXERCISES = [
        'handstand practice',
        'jumping jacks',
        'rings',
        'back squats',
        'jumping jacks',
        'pull ups',
        'a break',
        'rings',
        'back squats',
        'handstand practice',
        'jumping jacks',
        'front squats',
        'pull ups',
        'handstand practice',
        'jumping rope',
        'rings',
        'front squats',
        'front squats',
        'back squats',
        'rings',
        'jumping jacks',
        'back squats',
        'back squats',
        'a break',
        'front squats',
        'push ups',
        'rings',
        'rings',
        'front squats',
        'jumping rope',
        'push ups',
        'back squats',
    ];

    private const MICHAEL_EXERCISES = [
        'rings',
        'jumping rope',
        'front squats',
        'short sprints',
        'a break',
        'jumping rope',
        'push ups',
        'back squats',
        'short sprints',
        'pull ups',
        'handstand practice',
        'pull ups',
        'jumping rope',
        'rings',
        'rings',
        'jumping jacks',
        'handstand practice',
        'jumping rope',
        'back squats',
        'jumping rope',
        'pull ups',
        'jumping rope',
        'rings',
        'rings',
        'jumping jacks',
        'back squats',
        'back squats',
        'back squats',
        'jumping jacks',
        'a break',
        'short sprints',
        'pull ups',
    ];

    private const TIM_EXERCISES = [
        'handstand practice',
        'jumping rope',
        'front squats',
        'rings',
        'jumping jacks',
        'pull ups',
        'jumping rope',
        'front squats',
        'jumping rope',
        'front squats',
        'handstand practice',
        'rings',
        'back squats',
        'front squats',
        'short sprints',
        'back squats',
        'a break',
        'front squats',
        'front squats',
        'jumping jacks',
        'back squats',
        'push ups',
        'back squats',
        'back squats',
        'push ups',
        'jumping rope',
        'a break',
        'jumping rope',
        'pull ups',
        'handstand practice',
        'push ups',
        'short sprints',
    ];

    private const ERIK_EXERCISES = [
        'short sprints',
        'pull ups',
        'back squats',
        'push ups',
        'pull ups',
        'handstand practice',
        'a break',
        'back squats',
        'handstand practice',
        'back squats',
        'a break',
        'push ups',
        'pull ups',
        'jumping jacks',
        'back squats',
        'jumping jacks',
        'back squats',
        'short sprints',
        'back squats',
        'rings',
        'front squats',
        'back squats',
        'jumping jacks',
        'back squats',
        'handstand practice',
        'pull ups',
        'back squats',
        'push ups',
        'push ups',
        'jumping jacks',
        'handstand practice',
        'short sprints',
    ];

    public function participants(): array
    {
        return [
            [
                [
                    'data' => [
                        [
                            ParticipantEnum::NAME_KEY => 'Camille',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Michael',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Tim',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Erik',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Lars',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                    ],
                    'key' => 0,
                ],
                [
                    'data' => [
                        [
                            ParticipantEnum::NAME_KEY => 'Camille',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => self::CAMILLE_EXERCISES,
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Michael',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Tim',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Erik',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Lars',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                    ],
                    'key' => 1,
                ],
                [
                    'data' => [
                        [
                            ParticipantEnum::NAME_KEY => 'Camille',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => self::CAMILLE_EXERCISES,
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Michael',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => self::MICHAEL_EXERCISES,
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Tim',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Erik',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Lars',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                    ],
                    'key' => 2,
                ],
                [
                    'data' => [
                        [
                            ParticipantEnum::NAME_KEY => 'Camille',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => self::CAMILLE_EXERCISES,
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Michael',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => self::MICHAEL_EXERCISES,
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Tim',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => self::TIM_EXERCISES,
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Erik',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Lars',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                    ],
                    'key' => 3,
                ],
                [
                    'data' => [
                        [
                            ParticipantEnum::NAME_KEY => 'Camille',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => self::CAMILLE_EXERCISES,
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Michael',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => self::MICHAEL_EXERCISES,
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Tim',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => self::TIM_EXERCISES,
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Erik',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => self::ERIK_EXERCISES,
                        ],
                        [
                            ParticipantEnum::NAME_KEY => 'Lars',
                            ParticipantEnum::LEVEL_KEY => ParticipantEnum::PROFESSIONAL_LEVEL,
                            ParticipantEnum::EXERCISES_KEY => [],
                        ],
                    ],
                    'key' => 4,
                ],
            ]
        ];
    }
}
