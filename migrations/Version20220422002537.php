<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220422002537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2F3F753A7');
        $this->addSql('DROP INDEX fk_24cc0df2f3f753a7 ON panier');
        $this->addSql('CREATE INDEX fffkkkkidplat ON panier (idplat)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2F3F753A7 FOREIGN KEY (idplat) REFERENCES platt (Idplat)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2F3F753A7');
        $this->addSql('DROP INDEX fffkkkkidplat ON panier');
        $this->addSql('CREATE INDEX FK_24CC0DF2F3F753A7 ON panier (idplat)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2F3F753A7 FOREIGN KEY (idplat) REFERENCES platt (Idplat)');
    }
}
