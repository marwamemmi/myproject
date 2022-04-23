<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220422034158 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `order` DROP FOREIGN KEY fkkkkkkkkkkid_panier');
        $this->addSql('DROP INDEX fkkkkkkkkkkid_panier ON `order`');
        $this->addSql('ALTER TABLE `order` ADD id_c INT DEFAULT NULL, DROP client, DROP Idpanier');
        $this->addSql('CREATE INDEX fkkkkkkkkkkid_client ON `order` (id_c)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX fkkkkkkkkkkid_client ON `order`');
        $this->addSql('ALTER TABLE `order` ADD client VARCHAR(255) DEFAULT NULL, ADD Idpanier INT NOT NULL, DROP id_c');
        $this->addSql('ALTER TABLE `order` ADD CONSTRAINT fkkkkkkkkkkid_panier FOREIGN KEY (Idpanier) REFERENCES panier (Idpanier) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX fkkkkkkkkkkid_panier ON `order` (Idpanier)');
    }
}
