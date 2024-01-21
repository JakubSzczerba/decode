<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Coder\Application\Provider\Encode;

final class EncryptedMessageProvider implements EncryptedMessageProviderInterface
{
    public function getMessage(): string
    {
        return 'Zażółć, gęślą jaźń.';
    }
}