<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229234235 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trade_request ADD state VARCHAR(255) NOT NULL, ADD from_quantity INT NOT NULL, ADD to_quantity INT NOT NULL, DROP complete');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trade_request ADD complete TINYINT(1) DEFAULT NULL, DROP state, DROP from_quantity, DROP to_quantity');
    }
}
