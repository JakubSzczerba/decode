<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Sql\Domain\Ticket;

interface TicketRepositoryInterface
{
    public function findWinningTicketsForLottery(string $lotteryName): array;

    public function summaryRevenueAndProfit(): array;
}