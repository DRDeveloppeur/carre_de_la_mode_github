<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210921090126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE category CHANGE created_at created_at DATETIME NOT NULL');
        $this->addSql('ALTER TABLE marque CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE product ADD rayon VARCHAR(255) DEFAULT NULL, ADD sexe VARCHAR(255) DEFAULT NULL, ADD departement VARCHAR(255) DEFAULT NULL, ADD famille VARCHAR(255) DEFAULT NULL, ADD genre VARCHAR(255) DEFAULT NULL, ADD attache VARCHAR(255) DEFAULT NULL, ADD forme VARCHAR(255) DEFAULT NULL, ADD hauteur VARCHAR(255) DEFAULT NULL, ADD longueur VARCHAR(255) DEFAULT NULL, ADD base VARCHAR(255) DEFAULT NULL, ADD couleur VARCHAR(255) DEFAULT NULL, ADD matiere VARCHAR(255) DEFAULT NULL, ADD ref VARCHAR(255) NOT NULL, ADD description LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tag');
        $this->addSql('ALTER TABLE category CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE marque CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE updated_at updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE product DROP rayon, DROP sexe, DROP departement, DROP famille, DROP genre, DROP attache, DROP forme, DROP hauteur, DROP longueur, DROP base, DROP couleur, DROP matiere, DROP ref, DROP description');
    }
}
