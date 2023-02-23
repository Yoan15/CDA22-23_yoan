<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230223160054 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_details MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON order_details');
        $this->addSql('ALTER TABLE order_details CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE order_details ADD PRIMARY KEY (id, product_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX `PRIMARY` ON order_details');
        $this->addSql('ALTER TABLE order_details CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE order_details ADD PRIMARY KEY (id)');
    }
}
