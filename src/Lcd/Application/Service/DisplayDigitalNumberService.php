<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Lcd\Application\Service;

use App\Lcd\Application\Provider\NumbersProviderInterface;

class DisplayDigitalNumberService
{
    private NumbersProviderInterface $numbersProvider;

    public function __construct(NumbersProviderInterface $numbersProvider)
    {
        $this->numbersProvider = $numbersProvider;
    }

    public function display($number): void
    {
        $numbers = $this->numbersProvider->getNumbers();
        $digitsArray = str_split($number);

        for ($line = 0; $line < 3; $line++) {
            foreach ($digitsArray as $digit) {
                echo $numbers[$digit][$line] . ' ';
            }
            echo PHP_EOL;
        }
        echo "\r\n";
    }
}