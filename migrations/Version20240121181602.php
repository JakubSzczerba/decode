<?php

/*
 * This file was created by Jakub Szczerba
 * Contact: https://www.linkedin.com/in/jakub-szczerba-3492751b4/
*/

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240121181602 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql('create table lotteries (id int unsigned not null, name varchar(255) not null, ticket_price decimal(12, 2) not null, prize decimal(12, 2) not null, primary key (`id`))');
        $this->addSql('create table draws (id int unsigned not null, lottery_id int unsigned not null, draw_date timestamp not null, won_number int, primary key (`id`), constraint `draws_lottery_id`foreign key (`lottery_id`)references `lotteries` (`id`)on delete cascade on update cascade)');
        $this->addSql('create table `tickets` (id int unsigned not null, draw_id int unsigned not null, bought_date timestamp not null, number int unsigned not null,primary key (`id`), constraint `tickets_draw_id`foreign key (`draw_id`)references `draws` (`id`)on delete cascade on update cascade)');
    }

    public function down(Schema $schema): void
    {
    }
}
