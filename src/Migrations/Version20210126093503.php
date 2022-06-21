<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210126093503 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE message ADD deleted_by_sender_id INT DEFAULT NULL, ADD deleted_by_recipient_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307F9F129F00 FOREIGN KEY (deleted_by_sender_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FEA6F5A85 FOREIGN KEY (deleted_by_recipient_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B6BD307F9F129F00 ON message (deleted_by_sender_id)');
        $this->addSql('CREATE INDEX IDX_B6BD307FEA6F5A85 ON message (deleted_by_recipient_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307F9F129F00');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FEA6F5A85');
        $this->addSql('DROP INDEX IDX_B6BD307F9F129F00 ON message');
        $this->addSql('DROP INDEX IDX_B6BD307FEA6F5A85 ON message');
        $this->addSql('ALTER TABLE message DROP deleted_by_sender_id, DROP deleted_by_recipient_id');
    }
}
