<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240121182200 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql("INSERT INTO lotteries VALUES (1, 'GG World Million', 10.49, 300.00)");
        $this->addSql("INSERT INTO lotteries VALUES (2, 'GG World X', 12.99, 400.00)");

        $this->addSql("INSERT INTO draws VALUES (1, 1, '2021-06-15 14:00:00',   32)");
        $this->addSql("INSERT INTO draws VALUES (2, 1, '2021-07-15 14:00:00',   47)");
        $this->addSql("INSERT INTO draws VALUES (3, 1, '2021-08-15 14:00:00',    5)");
        $this->addSql("INSERT INTO draws VALUES (4, 1, '2021-09-15 14:00:00', null)");
        $this->addSql("INSERT INTO draws VALUES (5, 2, '2021-07-01 16:00:00',   29)");
        $this->addSql("INSERT INTO draws VALUES (6, 2, '2021-08-01 16:00:00',    4)");
        $this->addSql("INSERT INTO draws VALUES (7, 2, '2021-09-01 16:00:00', null)");

        $this->addSql("INSERT INTO tickets VALUES (1, 1, '2021-05-16 18:21:34', 21)");
        $this->addSql("INSERT INTO tickets VALUES (2, 1, '2021-06-02 13:31:02', 29)");
        $this->addSql("INSERT INTO tickets VALUES (3, 1, '2021-06-15 14:00:02', 13)");
        $this->addSql("INSERT INTO tickets VALUES (4, 2, '2021-06-30 03:44:34', 47)");
        $this->addSql("INSERT INTO tickets VALUES (5, 2, '2021-07-02 07:09:02', 32)");
        $this->addSql("INSERT INTO tickets VALUES (6, 2, '2021-07-15 14:00:15', 5)");
        $this->addSql("INSERT INTO tickets VALUES (7, 3, '2021-07-15 15:44:34', 13)");
        $this->addSql("INSERT INTO tickets VALUES (8, 3, '2021-07-28 04:29:11', 5)");
        $this->addSql("INSERT INTO tickets VALUES (9, 3, '2021-08-15 13:59:58', 5)");
        $this->addSql("INSERT INTO tickets VALUES (10, 3, '2021-08-15 14:00:01', 5)");
        $this->addSql("INSERT INTO tickets VALUES (11, 4, '2021-08-25 01:15:48', 38)");
        $this->addSql("INSERT INTO tickets VALUES (12, 5, '2021-06-04 22:01:53', 29)");
        $this->addSql("INSERT INTO tickets VALUES (13, 5, '2021-06-24 05:25:09', 13)");
        $this->addSql("INSERT INTO tickets VALUES (14, 5, '2021-07-01 16:00:05', 29)");
        $this->addSql("INSERT INTO tickets VALUES (15, 5, '2021-07-01 16:00:02', 24)");
        $this->addSql("INSERT INTO tickets VALUES (16, 5, '2021-07-01 16:00:03', 11)");
        $this->addSql("INSERT INTO tickets VALUES (17, 6, '2021-07-24 04:32:56', 4)");
        $this->addSql("INSERT INTO tickets VALUES (18, 6, '2021-08-01 16:02:01', 13)");
        $this->addSql("INSERT INTO tickets VALUES (19, 7, '2021-07-16 22:34:49', 36)");
        $this->addSql("INSERT INTO tickets VALUES (20, 7, '2021-08-04 16:00:55', 15)");
        $this->addSql("INSERT INTO tickets VALUES (21, 7, '2021-08-04 16:00:55', 49)");
        $this->addSql("INSERT INTO tickets VALUES (22, 7, '2021-08-04 16:00:55', 46)");
    }

    public function down(Schema $schema): void
    {
    }
}
