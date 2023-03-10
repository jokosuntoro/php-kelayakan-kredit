<?php

declare(strict_types=1);

namespace jokodm\Datamining\Math;

use jokodm\Datamining\Exception\InvalidArgumentException;

class Comparison
{
    /**
     * @throws InvalidArgumentException
     */
    public static function compare($a, $b, string $operator): bool
    {
        switch ($operator) {
            case '>':
                return $a > $b;
            case '>=':
                return $a >= $b;
            case '=':
            case '==':
                return $a == $b;
            case '===':
                return $a === $b;
            case '<=':
                return $a <= $b;
            case '<':
                return $a < $b;
            case '!=':
            case '<>':
                return $a != $b;
            case '!==':
                return $a !== $b;
            default:
                throw InvalidArgumentException::invalidOperator($operator);
        }
    }
}