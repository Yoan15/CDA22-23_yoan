<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230303083456 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comments (id INT AUTO_INCREMENT NOT NULL, products_id INT DEFAULT NULL, user_id_id INT DEFAULT NULL, content LONGTEXT NOT NULL, date DATETIME NOT NULL, update_date DATETIME NOT NULL, INDEX IDX_5F9E962A6C8A81A9 (products_id), INDEX IDX_5F9E962A9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A6C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id)');
        $this->addSql('ALTER TABLE comments ADD CONSTRAINT FK_5F9E962A9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE products CHANGE unit_price unit_price NUMERIC(10, 4) DEFAULT \'0\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A6C8A81A9');
        $this->addSql('ALTER TABLE comments DROP FOREIGN KEY FK_5F9E962A9D86650F');
        $this->addSql('DROP TABLE comments');
        $this->addSql('ALTER TABLE products CHANGE unit_price unit_price NUMERIC(10, 4) DEFAULT \'0.0000\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON DEFAULT NULL');
    }
}
