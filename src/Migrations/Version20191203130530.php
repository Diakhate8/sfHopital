<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191203130530 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE medecins (id INT AUTO_INCREMENT NOT NULL, service_id INT NOT NULL, matricule VARCHAR(8) NOT NULL, prenom VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, datedenaiss DATE NOT NULL, adresse VARCHAR(255) NOT NULL, telephone INT NOT NULL, email LONGTEXT NOT NULL, INDEX IDX_691272DDED5CA9E6 (service_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medecins_specialites (medecins_id INT NOT NULL, specialites_id INT NOT NULL, INDEX IDX_1EF1E035DA00906 (medecins_id), INDEX IDX_1EF1E0355AEDDAD9 (specialites_id), PRIMARY KEY(medecins_id, specialites_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialites (id INT AUTO_INCREMENT NOT NULL, services_id INT NOT NULL, libelle VARCHAR(255) NOT NULL, INDEX IDX_F78AEBD1AEF5A6C1 (services_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE medecins ADD CONSTRAINT FK_691272DDED5CA9E6 FOREIGN KEY (service_id) REFERENCES services (id)');
        $this->addSql('ALTER TABLE medecins_specialites ADD CONSTRAINT FK_1EF1E035DA00906 FOREIGN KEY (medecins_id) REFERENCES medecins (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE medecins_specialites ADD CONSTRAINT FK_1EF1E0355AEDDAD9 FOREIGN KEY (specialites_id) REFERENCES specialites (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE specialites ADD CONSTRAINT FK_F78AEBD1AEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE medecins_specialites DROP FOREIGN KEY FK_1EF1E035DA00906');
        $this->addSql('ALTER TABLE medecins_specialites DROP FOREIGN KEY FK_1EF1E0355AEDDAD9');
        $this->addSql('ALTER TABLE medecins DROP FOREIGN KEY FK_691272DDED5CA9E6');
        $this->addSql('ALTER TABLE specialites DROP FOREIGN KEY FK_F78AEBD1AEF5A6C1');
        $this->addSql('DROP TABLE medecins');
        $this->addSql('DROP TABLE medecins_specialites');
        $this->addSql('DROP TABLE specialites');
        $this->addSql('DROP TABLE services');
    }
}
