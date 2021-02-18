<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210218135305 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE conversation (id INT AUTO_INCREMENT NOT NULL, staff_id INT NOT NULL, ticket_id INT NOT NULL, owner_id INT NOT NULL, date DATETIME NOT NULL, content LONGTEXT NOT NULL, INDEX IDX_8A8E26E9D4D57CD (staff_id), UNIQUE INDEX UNIQ_8A8E26E9700047D2 (ticket_id), INDEX IDX_8A8E26E97E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ticket (id INT AUTO_INCREMENT NOT NULL, owner_id INT NOT NULL, title VARCHAR(50) NOT NULL, content LONGTEXT NOT NULL, creation_date DATETIME NOT NULL, update_time DATETIME NOT NULL, statement VARCHAR(50) NOT NULL, level VARCHAR(10) NOT NULL, department VARCHAR(50) NOT NULL, INDEX IDX_97A0ADA37E3C61F9 (owner_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `user` (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL, last_connexion DATETIME NOT NULL, suspended TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE conversation ADD CONSTRAINT FK_8A8E26E9D4D57CD FOREIGN KEY (staff_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE conversation ADD CONSTRAINT FK_8A8E26E9700047D2 FOREIGN KEY (ticket_id) REFERENCES ticket (id)');
        $this->addSql('ALTER TABLE conversation ADD CONSTRAINT FK_8A8E26E97E3C61F9 FOREIGN KEY (owner_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE ticket ADD CONSTRAINT FK_97A0ADA37E3C61F9 FOREIGN KEY (owner_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE conversation DROP FOREIGN KEY FK_8A8E26E9700047D2');
        $this->addSql('ALTER TABLE conversation DROP FOREIGN KEY FK_8A8E26E9D4D57CD');
        $this->addSql('ALTER TABLE conversation DROP FOREIGN KEY FK_8A8E26E97E3C61F9');
        $this->addSql('ALTER TABLE ticket DROP FOREIGN KEY FK_97A0ADA37E3C61F9');
        $this->addSql('DROP TABLE conversation');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE `user`');
    }
}
