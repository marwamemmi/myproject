<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220422035439 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY fkkkkkkkkkkid_panier');
        $this->addSql('ALTER TABLE `order` CHANGE panier panier INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT FK_F529939824CC0DF2 FOREIGN KEY (panier) REFERENCES panier (Idpanier)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY FK_F529939824CC0DF2');
        $this->addSql('ALTER TABLE `order` CHANGE panier panier INT NOT NULL');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT fkkkkkkkkkkid_panier FOREIGN KEY (panier) REFERENCES panier (Idpanier) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
