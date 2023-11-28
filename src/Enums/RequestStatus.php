<?php

namespace Src\Enums;

use Exception;

enum RequestStatus: string
{
    case NEW = 'new';

    //В enum можно писать как case, так и функции
    public function translate(): string
    {
        return match ($this)
        {
         self::NEW => 'новая',
        };
    }
}


