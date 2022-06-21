<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210404090056 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user ADD ville VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE prayer CHANGE media_id media_id INT NOT NULL');
        $this->addSql('ALTER TABLE message CHANGE opened opened DATETIME NOT NULL, CHANGE deleted_by_sender deleted_by_sender DATETIME NOT NULL, CHANGE deleted_by_recipient deleted_by_recipient DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE message CHANGE opened opened DATETIME DEFAULT NULL, CHANGE deleted_by_sender deleted_by_sender DATETIME DEFAULT NULL, CHANGE deleted_by_recipient deleted_by_recipient DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE prayer CHANGE media_id media_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user DROP ville');
    }
}
