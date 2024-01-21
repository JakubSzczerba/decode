<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Coder\Application\Provider\Decode;

final class DecryptedMessageProvider implements DecryptedMessageProviderInterface
{
    public function getMessage(): string
    {
        return ')g!ld, j(!ad "> h>£ gdol>!o!" o!(!c>£';
    }
}