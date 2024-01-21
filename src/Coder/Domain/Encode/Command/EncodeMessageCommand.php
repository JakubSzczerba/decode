<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Coder\Domain\Encode\Command;

use App\Coder\Application\Service\Encode\EncodeMessageService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'encode:message')]
class EncodeMessageCommand extends Command
{
    private EncodeMessageService $encodeMessageService;

    public function __construct(EncodeMessageService $encodeMessageService)
    {
        parent::__construct();
        $this->encodeMessageService = $encodeMessageService;
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Attempting to encrypt the message');

        $message = $this->encodeMessageService->encode();

        $io->success('Message has been encrypted: '. $message);

        return Command::SUCCESS;
    }
}