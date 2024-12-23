<?php

namespace App\Enums;

enum StatusType: string
{
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';

    public function description(): string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::INACTIVE => 'Inactive',
        };
    }
}
