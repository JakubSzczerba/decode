<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Sql\Application\Controller;

use App\Sql\Domain\Ticket\TicketRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    private TicketRepositoryInterface $ticketRepository;

    public function __construct(TicketRepositoryInterface $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }

    public function index(): Response
    {
        $tickets = $this->ticketRepository->findWinningTicketsForLottery('GG World X');
        $ticketResults = [];
        foreach ($tickets as $ticketId) {
            $ticketResults[] = $ticketId['id'];
        }
        $revenueAndProfit = $this->ticketRepository->summaryRevenueAndProfit();

        $currentDate = new \DateTime();
        $lotteryDate = $currentDate->modify('+5 hours');

        return $this->render('dashboard/index.html.twig', [
            'tickets' => $ticketResults,
            'revenueAndProfits' => $revenueAndProfit,
            'lotteryDate' => $lotteryDate,
        ]);
    }
}