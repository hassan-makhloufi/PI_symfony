<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229234833 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE line_trade (id INT AUTO_INCREMENT NOT NULL, from_product_id INT NOT NULL, to_product_id INT NOT NULL, from_user_id INT NOT NULL, from_quantity INT NOT NULL, to_quantity INT NOT NULL, INDEX IDX_819E64E56E20A05D (from_product_id), INDEX IDX_819E64E562B78427 (to_product_id), INDEX IDX_819E64E52130303A (from_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE line_trade ADD CONSTRAINT FK_819E64E56E20A05D FOREIGN KEY (from_product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE line_trade ADD CONSTRAINT FK_819E64E562B78427 FOREIGN KEY (to_product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE line_trade ADD CONSTRAINT FK_819E64E52130303A FOREIGN KEY (from_user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE line_trade DROP FOREIGN KEY FK_819E64E56E20A05D');
        $this->addSql('ALTER TABLE line_trade DROP FOREIGN KEY FK_819E64E562B78427');
        $this->addSql('ALTER TABLE line_trade DROP FOREIGN KEY FK_819E64E52130303A');
        $this->addSql('DROP TABLE line_trade');
    }
}
