<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230223155330 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_details ADD product_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE order_details ADD CONSTRAINT FK_845CA2C1DE18E50B FOREIGN KEY (product_id_id) REFERENCES products (id)');
        $this->addSql('CREATE INDEX IDX_845CA2C1DE18E50B ON order_details (product_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE order_details DROP FOREIGN KEY FK_845CA2C1DE18E50B');
        $this->addSql('DROP INDEX IDX_845CA2C1DE18E50B ON order_details');
        $this->addSql('ALTER TABLE order_details DROP product_id_id');
    }
}
