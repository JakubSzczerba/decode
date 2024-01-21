<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace App\Sql\Domain\Lottery\Entity;

use App\Sql\Domain\Draw\Entity\Draw;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
#[ORM\Table(name: "lotteries")]
class Lottery
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255, nullable: false)]
    private string $name;

    #[ORM\Column(precision: 12, scale: 2, nullable: false)]
    private float $ticketPrice;

    #[ORM\Column(precision: 12, scale: 2, nullable: false)]
    private float $prize;

    #[ORM\OneToMany(mappedBy: "lottery", targetEntity: "App\Sql\Domain\Draw\Entity\Draw", cascade: ["persist", "remove"])]
    private Draw $draws;
}