<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Sql\Infrastructure\Repository\Ticket;

use App\Sql\Domain\Ticket\Entity\Ticket;
use App\Sql\Domain\Ticket\TicketRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Exception;
use Doctrine\Persistence\ManagerRegistry;

class TicketRepository extends ServiceEntityRepository implements TicketRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ticket::class);
    }

    /**
     * @throws Exception
     */
    public function findWinningTicketsForLottery(string $lotteryName): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
            SELECT t.id
            FROM tickets t
            JOIN draws d ON t.draw_id = d.id
            JOIN lotteries l ON d.lottery_id = l.id
            WHERE l.name = :lotteryName
            AND d.won_number IS NOT NULL
        ";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery(['lotteryName' => $lotteryName]);

        return $result->fetchAllAssociative();
    }

    /**
     * @throws Exception
     */
    public function summaryRevenueAndProfit(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = "
            SELECT
                l.name AS lottery_name,
                SUM(l.ticket_price) AS revenue,
                SUM(CASE WHEN d.won_number IS NOT NULL THEN l.ticket_price ELSE 0 END) AS profit
            FROM
                lotteries l
            JOIN
                draws d ON l.id = d.lottery_id
            JOIN
                tickets t ON d.id = t.draw_id
            WHERE
                EXTRACT(MONTH FROM d.draw_date) = 7 AND EXTRACT(YEAR FROM d.draw_date) = 2021
            GROUP BY
                l.name;
        ";

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();

        return $result->fetchAllAssociative();
    }
}