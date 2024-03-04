<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240302092232 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, forum_id INT DEFAULT NULL, comment_id INT DEFAULT NULL, author_id INT NOT NULL, message VARCHAR(255) NOT NULL, link VARCHAR(255) NOT NULL, INDEX IDX_CE6064044584665A (product_id), INDEX IDX_CE60640429CCBAD0 (forum_id), INDEX IDX_CE606404F8697D13 (comment_id), INDEX IDX_CE606404F675F31B (author_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE6064044584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640429CCBAD0 FOREIGN KEY (forum_id) REFERENCES forum (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404F8697D13 FOREIGN KEY (comment_id) REFERENCES comment (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE6064044584665A');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640429CCBAD0');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404F8697D13');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404F675F31B');
        $this->addSql('DROP TABLE reclamation');
    }
}
