<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Sql\Domain\Draw\Entity;

use App\Sql\Domain\Lottery\Entity\Lottery;
use App\Sql\Domain\Ticket\Entity\Ticket;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "draws")]
class Draw
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\ManyToMany(targetEntity: "App\Sql\Domain\Lottery\Entity\Lottery", indexBy: "draws")]
    #[ORM\JoinColumn(name: "lottery_id", referencedColumnName: "id", nullable: false)]
    private Lottery $lottery;

    #[ORM\Column(nullable: false)]
    private \DateTime $drawDate;

    #[ORM\Column(nullable: false)]
    private int $wonNumber;

    #[ORM\ManyToMany(targetEntity: "App\Sql\Domain\Ticket\Entity\Ticket", mappedBy: "draw", cascade: ["persist", "remove"])]
    private Ticket $tickets;
}