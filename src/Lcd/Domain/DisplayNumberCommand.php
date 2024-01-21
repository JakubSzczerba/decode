<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Lcd\Domain;

use Symfony\Component\Console\Input\InputArgument;
use App\Lcd\Application\Service\DisplayDigitalNumberService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(name: 'display:number')]
class DisplayNumberCommand extends Command
{
    private DisplayDigitalNumberService $displayDigitalNumberService;

    public function __construct(DisplayDigitalNumberService $displayDigitalNumberService)
    {
        parent::__construct();
        $this->displayDigitalNumberService = $displayDigitalNumberService;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('number', InputArgument::REQUIRED, 'The number to display in a digital format.');
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $io->title('Attempting to decrypt the message');

        $number = $input->getArgument('number');
        $this->displayDigitalNumberService->display($number);

        $io->success('Number has been displayed');

        return Command::SUCCESS;
    }
}