<?php
declare(strict_types=1);

namespace App\Enum;

final class Exercise
{
    public const JUMPING_JACKS = 'jumping jacks';
    public const PULL_UPS = 'pull ups';
    public const RINGS = 'rings';
    public const SHORT_SPRINTS = 'short sprints';
    public const HANDSTAND_PRACTICE = 'handstand practice';
    public const JUMPING_ROPE = 'jumping rope';
    public const EXERCISING_BREAK = 'a break';
    public const MAX_ALLOWED_PULL_UPS_AND_RINGS = 2;

    public const EXERCISES = [
        self::JUMPING_JACKS,
        'push ups',
        'front squats',
        'back squats',
        self::PULL_UPS,
        self::RINGS,
        self::SHORT_SPRINTS,
        self::HANDSTAND_PRACTICE,
        self::JUMPING_ROPE,
    ];
}
