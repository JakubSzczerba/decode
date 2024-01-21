<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Coder\Application\Provider\Common;

final class DecryptionKeyProvider implements DecryptionKeyProviderInterface
{
    public function getKey(): array
    {
        return [
            '!' => 'a',
            ')' => 'b',
            '"' => 'c',
            '(' => 'd',
            '£' => 'e',
            '*' => 'f',
            '%' => 'g',
            '&' => 'h',
            '>' => 'i',
            '<' => 'j',
            '@' => 'k',
            'a' => 'l',
            'b' => 'm',
            'c' => 'n',
            'd' => 'o',
            'e' => 'p',
            'f' => 'q',
            'g' => 'r',
            'h' => 's',
            'i' => 't',
            'j' => 'u',
            'k' => 'v',
            'l' => 'w',
            'm' => 'x',
            'n' => 'y',
            'o' => 'z'
        ];
    }
}
