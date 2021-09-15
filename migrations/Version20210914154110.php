<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210914154110 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD civility VARCHAR(255) NOT NULL, ADD firstname VARCHAR(255) NOT NULL, ADD lastname VARCHAR(255) NOT NULL, ADD address LONGTEXT NOT NULL, ADD additionaladdress LONGTEXT DEFAULT NULL, ADD city VARCHAR(255) NOT NULL, ADD postalcode INT NOT NULL, ADD country VARCHAR(255) NOT NULL, ADD cellphone VARCHAR(255) NOT NULL, ADD homephone VARCHAR(255) DEFAULT NULL, ADD birth DATE NOT NULL, ADD subscribenews TINYINT(1) DEFAULT NULL, ADD created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP civility, DROP firstname, DROP lastname, DROP address, DROP additionaladdress, DROP city, DROP postalcode, DROP country, DROP cellphone, DROP homephone, DROP birth, DROP subscribenews, DROP created_at, DROP updated_at');
    }
}
