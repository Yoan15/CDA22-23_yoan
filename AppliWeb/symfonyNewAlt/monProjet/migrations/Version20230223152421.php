<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230223152421 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE orders (id INT AUTO_INCREMENT NOT NULL, employee_id INT DEFAULT NULL, order_date DATETIME DEFAULT NULL, required_date DATETIME DEFAULT NULL, shipped_date DATETIME DEFAULT NULL, ship_via INT DEFAULT NULL, freight NUMERIC(10, 4) DEFAULT NULL, ship_name VARCHAR(40) DEFAULT NULL, ship_address VARCHAR(60) DEFAULT NULL, ship_city VARCHAR(15) DEFAULT NULL, ship_region VARCHAR(15) DEFAULT NULL, ship_postal_code VARCHAR(10) DEFAULT NULL, ship_country VARCHAR(15) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE orders');
    }
}
