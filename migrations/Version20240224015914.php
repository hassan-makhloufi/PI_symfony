<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240224015914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE trade_request (id INT AUTO_INCREMENT NOT NULL, from_user_id INT NOT NULL, to_user_id INT NOT NULL, from_product_id INT NOT NULL, to_product_id INT NOT NULL, INDEX IDX_C817D7692130303A (from_user_id), INDEX IDX_C817D76929F6EE60 (to_user_id), INDEX IDX_C817D7696E20A05D (from_product_id), INDEX IDX_C817D76962B78427 (to_product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE trade_request ADD CONSTRAINT FK_C817D7692130303A FOREIGN KEY (from_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE trade_request ADD CONSTRAINT FK_C817D76929F6EE60 FOREIGN KEY (to_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE trade_request ADD CONSTRAINT FK_C817D7696E20A05D FOREIGN KEY (from_product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE trade_request ADD CONSTRAINT FK_C817D76962B78427 FOREIGN KEY (to_product_id) REFERENCES product (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE trade_request DROP FOREIGN KEY FK_C817D7692130303A');
        $this->addSql('ALTER TABLE trade_request DROP FOREIGN KEY FK_C817D76929F6EE60');
        $this->addSql('ALTER TABLE trade_request DROP FOREIGN KEY FK_C817D7696E20A05D');
        $this->addSql('ALTER TABLE trade_request DROP FOREIGN KEY FK_C817D76962B78427');
        $this->addSql('DROP TABLE trade_request');
    }
}
