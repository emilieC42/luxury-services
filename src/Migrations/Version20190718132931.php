<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190718132931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE candidate (id INT AUTO_INCREMENT NOT NULL, categorie_id INT DEFAULT NULL, gender VARCHAR(255) DEFAULT \'NULL\', first_name TEXT DEFAULT NULL, address TEXT DEFAULT NULL, country TEXT DEFAULT NULL, nationality TEXT DEFAULT NULL, passport VARCHAR(255) DEFAULT \'NULL\', curriculum_vitae VARCHAR(255) DEFAULT \'NULL\', profil_picture VARCHAR(255) DEFAULT \'NULL\', birthday DATE NOT NULL, place_birthday TEXT DEFAULT NULL, experience TEXT DEFAULT NULL, notes TEXT DEFAULT NULL, availability TEXT DEFAULT NULL, files VARCHAR(255) DEFAULT \'NULL\', date_deleted DATE NOT NULL, date_updated DATE NOT NULL, date_created DATE NOT NULL, description_candidate TEXT DEFAULT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, INDEX IDX_C8B28E44BCF5E72D (categorie_id), UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, name_categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contacts (id INT AUTO_INCREMENT NOT NULL, clients_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, type_job VARCHAR(255) NOT NULL, notes VARCHAR(255) NOT NULL, INDEX clients_id (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidature (id INT AUTO_INCREMENT NOT NULL, candidat_id INT NOT NULL, job_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE job_offer (id INT AUTO_INCREMENT NOT NULL, contact_id INT DEFAULT NULL, categories_id INT DEFAULT NULL, clients_id INT DEFAULT NULL, job_reference TEXT NOT NULL, name_society VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, phone VARCHAR(10) NOT NULL, description TEXT NOT NULL, notes TEXT NOT NULL, job_title TEXT NOT NULL, date_creation DATE NOT NULL, job_categorie VARCHAR(255) NOT NULL, job_type VARCHAR(255) NOT NULL, INDEX contact_id (contact_id), INDEX clients_id (clients_id), INDEX categories_id (categories_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, name_clients VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, notes VARCHAR(25) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E44BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE contacts ADD CONSTRAINT FK_33401573AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4EE7A1254A FOREIGN KEY (contact_id) REFERENCES contacts (id)');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4EA21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id)');
        $this->addSql('ALTER TABLE job_offer ADD CONSTRAINT FK_288A3A4EAB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E44BCF5E72D');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4EA21214B7');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4EE7A1254A');
        $this->addSql('ALTER TABLE contacts DROP FOREIGN KEY FK_33401573AB014612');
        $this->addSql('ALTER TABLE job_offer DROP FOREIGN KEY FK_288A3A4EAB014612');
        $this->addSql('DROP TABLE candidate');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE contacts');
        $this->addSql('DROP TABLE candidature');
        $this->addSql('DROP TABLE job_offer');
        $this->addSql('DROP TABLE clients');
    }
}
