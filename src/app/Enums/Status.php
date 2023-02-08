<?php

declare(strict_types=1);

namespace App\Enums;

enum Status
{
    public const PAID = 'paid';
    public const PENDING = 'pending';
    public const DECLINED = 'declined';


    public const ALL = [
        self::PAID => 'Paid',
        self::PENDING => 'Pending',
        self::DECLINED => 'Declined'
    ];

}
