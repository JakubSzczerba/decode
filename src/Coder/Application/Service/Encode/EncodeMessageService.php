<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Coder\Application\Service\Encode;

use App\Coder\Application\Provider\Common\DecryptionKeyProviderInterface;
use App\Coder\Application\Provider\Encode\EncryptedMessageProviderInterface;

class EncodeMessageService
{
    private DecryptionKeyProviderInterface $decryptionKeyProvider;

    private EncryptedMessageProviderInterface $encryptedMessageProvider;

    public function __construct(
        DecryptionKeyProviderInterface $decryptionKeyProvider,
        EncryptedMessageProviderInterface $encryptedMessageProvider
    ) {
        $this->decryptionKeyProvider = $decryptionKeyProvider;
        $this->encryptedMessageProvider = $encryptedMessageProvider;
    }

    public function encode(): string
    {
        $key = array_flip($this->decryptionKeyProvider->getKey());
        $message = mb_strtolower($this->encryptedMessageProvider->getMessage());

        $encodedMessage = '';
        foreach (mb_str_split($message) as $char) {
            $encodedMessage .= $key[$char] ?? $char;
        }

        return $encodedMessage;
    }
}