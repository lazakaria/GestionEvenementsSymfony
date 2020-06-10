<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200415140839 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE comite (id INT AUTO_INCREMENT NOT NULL, type_comite VARCHAR(255) NOT NULL, membres_comite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE utilisateur CHANGE image image VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE evenement CHANGE type_evenement type_evenement VARCHAR(255) NOT NULL, CHANGE debut_evenement debut_evenement DATETIME NOT NULL, CHANGE fin_evenement fin_evenement DATETIME NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE comite');
        $this->addSql('ALTER TABLE evenement CHANGE type_evenement type_evenement VARCHAR(20) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE debut_evenement debut_evenement DATETIME DEFAULT NULL, CHANGE fin_evenement fin_evenement DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
