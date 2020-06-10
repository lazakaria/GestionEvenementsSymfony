<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200521194227 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE comitescientifique (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, profession VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comitescientifique_conference (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conference (id INT AUTO_INCREMENT NOT NULL, date VARCHAR(255) NOT NULL, descritpion VARCHAR(255) NOT NULL, jour INT NOT NULL, titre VARCHAR(255) NOT NULL, salle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conference_user (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, subject VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE simpleuser (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, tele VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE speaker (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE speaker_conference (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE travail (id INT AUTO_INCREMENT NOT NULL, propriet VARCHAR(255) NOT NULL, sujet VARCHAR(255) NOT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL, titre VARCHAR(255) NOT NULL, auteur VARCHAR(255) NOT NULL, abstract VARCHAR(255) NOT NULL, motcle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE comite_evenement');
        $this->addSql('ALTER TABLE evenement ADD titre VARCHAR(255) NOT NULL, ADD soustitre VARCHAR(255) NOT NULL, ADD datedebut VARCHAR(255) NOT NULL, ADD datefin DATE NOT NULL, ADD description VARCHAR(255) NOT NULL, ADD lieu VARCHAR(255) NOT NULL, ADD nbrjour INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE utilisateur CHANGE titre_utilisateur titre_utilisateur VARCHAR(255) NOT NULL, CHANGE auteur_utilisateur auteur_utilisateur VARCHAR(255) NOT NULL, CHANGE abstract_utilisateur abstract_utilisateur VARCHAR(255) NOT NULL, CHANGE mots_cles_utilisateur mots_cles_utilisateur VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE comite_evenement (comite_id INT NOT NULL, evenement_id INT NOT NULL, INDEX IDX_FB3AFA1EFD02F13 (evenement_id), INDEX IDX_FB3AFA1ED61C3573 (comite_id), PRIMARY KEY(comite_id, evenement_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE comite_evenement ADD CONSTRAINT FK_FB3AFA1ED61C3573 FOREIGN KEY (comite_id) REFERENCES comite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comite_evenement ADD CONSTRAINT FK_FB3AFA1EFD02F13 FOREIGN KEY (evenement_id) REFERENCES evenement (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE comitescientifique');
        $this->addSql('DROP TABLE comitescientifique_conference');
        $this->addSql('DROP TABLE conference');
        $this->addSql('DROP TABLE conference_user');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE simpleuser');
        $this->addSql('DROP TABLE speaker');
        $this->addSql('DROP TABLE speaker_conference');
        $this->addSql('DROP TABLE travail');
        $this->addSql('ALTER TABLE evenement DROP titre, DROP soustitre, DROP datedebut, DROP datefin, DROP description, DROP lieu, DROP nbrjour');
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom');
        $this->addSql('ALTER TABLE utilisateur CHANGE titre_utilisateur titre_utilisateur VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE auteur_utilisateur auteur_utilisateur VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE abstract_utilisateur abstract_utilisateur VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE mots_cles_utilisateur mots_cles_utilisateur VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
