<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240301225246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE line_livraison (id INT AUTO_INCREMENT NOT NULL, trade_request_id INT NOT NULL, added_by_id INT DEFAULT NULL, INDEX IDX_160F646D6CEDE348 (trade_request_id), INDEX IDX_160F646D55B127A4 (added_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE line_livraison ADD CONSTRAINT FK_160F646D6CEDE348 FOREIGN KEY (trade_request_id) REFERENCES trade_request (id)');
        $this->addSql('ALTER TABLE line_livraison ADD CONSTRAINT FK_160F646D55B127A4 FOREIGN KEY (added_by_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE line_livraison DROP FOREIGN KEY FK_160F646D6CEDE348');
        $this->addSql('ALTER TABLE line_livraison DROP FOREIGN KEY FK_160F646D55B127A4');
        $this->addSql('DROP TABLE line_livraison');
    }
}
