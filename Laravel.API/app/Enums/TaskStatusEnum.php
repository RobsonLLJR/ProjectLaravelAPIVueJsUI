<?php

namespace App\Enums;
use App\Traits\{EnumOptions,EnumValues};

enum TaskStatusEnum: string
{
    use EnumValues;
    use EnumOptions;

    case PEDING = 'peding';
    case PROGRESS = 'progress';
    case COMPLETED = 'completed';

    public static function map() : array{
        return [
            static::Peding => 'Pedente',
            static::Progress => 'Em Andamento',
            static::Completed => 'Concluído',
        ];
    }
}