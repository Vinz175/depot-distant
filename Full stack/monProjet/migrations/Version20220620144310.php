<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220620144310 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE disc ADD artist_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE disc ADD CONSTRAINT FK_2AF5530B7970CF8 FOREIGN KEY (artist_id) REFERENCES artist (id)');
        $this->addSql('CREATE INDEX IDX_2AF5530B7970CF8 ON disc (artist_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE disc DROP FOREIGN KEY FK_2AF5530B7970CF8');
        $this->addSql('DROP INDEX IDX_2AF5530B7970CF8 ON disc');
        $this->addSql('ALTER TABLE disc DROP artist_id');
    }
}
