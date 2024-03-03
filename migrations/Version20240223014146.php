<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240223014146 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product ADD adder_id INT NOT NULL');
        $this->addSql('ALTER TABLE product ADD CONSTRAINT FK_D34A04AD9C1BD6FE FOREIGN KEY (adder_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_D34A04AD9C1BD6FE ON product (adder_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE product DROP FOREIGN KEY FK_D34A04AD9C1BD6FE');
        $this->addSql('DROP INDEX IDX_D34A04AD9C1BD6FE ON product');
        $this->addSql('ALTER TABLE product DROP adder_id');
    }
}
