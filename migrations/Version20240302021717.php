<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240302021717 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE livraison (id INT AUTO_INCREMENT NOT NULL, country VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, adress VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE line_livraison ADD livraison_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE line_livraison ADD CONSTRAINT FK_160F646D8E54FB25 FOREIGN KEY (livraison_id) REFERENCES livraison (id)');
        $this->addSql('CREATE INDEX IDX_160F646D8E54FB25 ON line_livraison (livraison_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE line_livraison DROP FOREIGN KEY FK_160F646D8E54FB25');
        $this->addSql('DROP TABLE livraison');
        $this->addSql('DROP INDEX IDX_160F646D8E54FB25 ON line_livraison');
        $this->addSql('ALTER TABLE line_livraison DROP livraison_id');
    }
}
