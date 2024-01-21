<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Coder\Application\Service\Decode;

use App\Coder\Application\Provider\Common\DecryptionKeyProviderInterface;
use App\Coder\Application\Provider\Decode\DecryptedMessageProviderInterface;

class DecodeMessageService
{
    private DecryptionKeyProviderInterface $decryptionKeyProvider;

    private DecryptedMessageProviderInterface $decryptedMessageProvider;

    public function __construct(
        DecryptionKeyProviderInterface $decryptionKeyProvider,
        DecryptedMessageProviderInterface $decryptedMessageProvider
    ) {
        $this->decryptionKeyProvider = $decryptionKeyProvider;
        $this->decryptedMessageProvider = $decryptedMessageProvider;
    }

    public function decode(): string
    {
        $key = $this->decryptionKeyProvider->getKey();
        $message = $this->decryptedMessageProvider->getMessage();

        $decodedMessage = '';
        foreach (str_split($message) as $char) {
            $decodedMessage .= $key[$char] ?? $char;
        }

        return $decodedMessage;
    }
}
