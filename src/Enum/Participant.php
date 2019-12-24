<?php
declare(strict_types=1);

namespace App\Enum;

final class Participant
{
    public const NAME_KEY = 'name';
    public const LEVEL_KEY = 'level';
    public const PROFESSIONAL_LEVEL = 'professional';
    public const BEGINNER_LEVEL = 'beginner';
    public const EXERCISES_KEY = 'exercises';

    public const PARTICIPANTS = [
        [
            self::NAME_KEY  => 'Camille',
            self::LEVEL_KEY => self::PROFESSIONAL_LEVEL,
        ],
        [
            self::NAME_KEY  => 'Michael',
            self::LEVEL_KEY => self::PROFESSIONAL_LEVEL,
        ],
        [
            self::NAME_KEY  => 'Tom',
            self::LEVEL_KEY => self::BEGINNER_LEVEL,
        ],
        [
            self::NAME_KEY  => 'Tim',
            self::LEVEL_KEY => self::PROFESSIONAL_LEVEL,
        ],
        [
            self::NAME_KEY  => 'Erik',
            self::LEVEL_KEY => self::PROFESSIONAL_LEVEL,
        ],
        [
            self::NAME_KEY  => 'Lars',
            self::LEVEL_KEY => self::PROFESSIONAL_LEVEL,
        ],
        [
            self::NAME_KEY  => 'Mathijs',
            self::LEVEL_KEY => self::BEGINNER_LEVEL,
        ]
    ];
}
