<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210218234835 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_B6BD307F989D9B62 ON message');
        $this->addSql('ALTER TABLE message DROP slug');
        $this->addSql('ALTER TABLE ticket ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_97A0ADA3989D9B62 ON ticket (slug)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message ADD slug VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B6BD307F989D9B62 ON message (slug)');
        $this->addSql('DROP INDEX UNIQ_97A0ADA3989D9B62 ON ticket');
        $this->addSql('ALTER TABLE ticket DROP slug');
    }
}
