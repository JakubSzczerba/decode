<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Lcd\Application\Provider;

class NumbersProvider implements NumbersProviderInterface
{
    public function getNumbers(): array
    {
        return [
            '0' => [
                ' _ ',
                '| |',
                '|_|',
            ],
            '1' => [
                '   ',
                '  |',
                '  |',
            ],
            '2' => [
                ' _ ',
                ' _|',
                '|_ ',
            ],
            '3' => [
                ' _ ',
                ' _|',
                ' _|',
            ],
            '4' => [
                '   ',
                '|_|',
                '  |',
            ],
            '5' => [
                ' _ ',
                '|_ ',
                ' _|',
            ],
            '6' => [
                ' _ ',
                '|_ ',
                '|_|',
            ],
            '7' => [
                ' _ ',
                '  |',
                '  |',
            ],
            '8' => [
                ' _ ',
                '|_|',
                '|_|',
            ],
            '9' => [
                ' _ ',
                '|_|',
                ' _|',
            ],
        ];
    }
}