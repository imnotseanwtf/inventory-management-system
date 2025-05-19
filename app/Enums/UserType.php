<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Admin()
 * @method static static Staff()
 */
final class UserType extends Enum
{
    const ADMIN = 0;
    const STAFF = 1;
}
