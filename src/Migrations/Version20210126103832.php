<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210126103832 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE friendship (id INT AUTO_INCREMENT NOT NULL, source_id INT NOT NULL, destination_id INT NOT NULL, date DATETIME NOT NULL, status INT NOT NULL, UNIQUE INDEX UNIQ_7234A45F953C1C61 (source_id), UNIQUE INDEX UNIQ_7234A45F816C6140 (destination_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE friendship ADD CONSTRAINT FK_7234A45F953C1C61 FOREIGN KEY (source_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE friendship ADD CONSTRAINT FK_7234A45F816C6140 FOREIGN KEY (destination_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE prayer CHANGE media_id media_id INT NOT NULL');
        $this->addSql('ALTER TABLE message ADD deleted_by_sender TINYINT(1) NOT NULL, ADD deleted_by_recipient TINYINT(1) NOT NULL, DROP deleted_by_sender_id, DROP deleted_by_recipient_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE friendship');
        $this->addSql('ALTER TABLE message ADD deleted_by_sender_id TINYINT(1) NOT NULL, ADD deleted_by_recipient_id TINYINT(1) NOT NULL, DROP deleted_by_sender, DROP deleted_by_recipient');
        $this->addSql('ALTER TABLE prayer CHANGE media_id media_id INT DEFAULT NULL');
    }
}
