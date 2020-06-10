<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200519005103 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE comite_evenement');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE comite_evenement (comite_id INT NOT NULL, evenement_id INT NOT NULL, INDEX IDX_FB3AFA1EFD02F13 (evenement_id), INDEX IDX_FB3AFA1ED61C3573 (comite_id), PRIMARY KEY(comite_id, evenement_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE comite_evenement ADD CONSTRAINT FK_FB3AFA1ED61C3573 FOREIGN KEY (comite_id) REFERENCES comite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comite_evenement ADD CONSTRAINT FK_FB3AFA1EFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
    }
}
