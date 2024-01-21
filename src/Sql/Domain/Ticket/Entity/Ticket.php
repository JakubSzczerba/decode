<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Sql\Domain\Ticket\Entity;

use App\Sql\Domain\Draw\Entity\Draw;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "tickets")]
class Ticket
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\ManyToMany(targetEntity: "App\Sql\Domain\Draw\Entity\Draw", inversedBy: "tickets")]
    #[ORM\JoinColumn(name: "draw_id", referencedColumnName: "id", nullable: false)]
    private Draw $draw;

    #[ORM\Column(nullable: false)]
    private \DateTime $boughtDate;

    #[ORM\Column(nullable: false)]
    private int $number;
}