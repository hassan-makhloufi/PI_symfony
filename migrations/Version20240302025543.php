<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240302025543 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livraison ADD adder_id INT NOT NULL');
        $this->addSql('ALTER TABLE livraison ADD CONSTRAINT FK_A60C9F1F9C1BD6FE FOREIGN KEY (adder_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A60C9F1F9C1BD6FE ON livraison (adder_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livraison DROP FOREIGN KEY FK_A60C9F1F9C1BD6FE');
        $this->addSql('DROP INDEX IDX_A60C9F1F9C1BD6FE ON livraison');
        $this->addSql('ALTER TABLE livraison DROP adder_id');
    }
}
