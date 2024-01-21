<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Coder\Domain\Decode\Command;

use App\Coder\Application\Service\Decode\DecodeMessageService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'decode:message')]
class DecodeMessageCommand extends Command
{
    private DecodeMessageService $decodeMessageService;

    public function __construct(DecodeMessageService $decodeMessageService)
    {
        parent::__construct();
        $this->decodeMessageService = $decodeMessageService;
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Attempting to decrypt the message');

        $message = $this->decodeMessageService->decode();

        $io->success('Message has been decrypted: '. $message);

        return Command::SUCCESS;
    }
}