<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220207163132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_2AF53C6812469DE2');
        $this->addSql('CREATE TEMPORARY TABLE __temp__dishe AS SELECT id, category_id, name, description, price, picture, picture_desc FROM dishe');
        $this->addSql('DROP TABLE dishe');
        $this->addSql('CREATE TABLE dishe (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, category_id INTEGER DEFAULT NULL, name VARCHAR(255) DEFAULT NULL COLLATE BINARY, description CLOB DEFAULT NULL COLLATE BINARY, price VARCHAR(255) DEFAULT NULL COLLATE BINARY, picture VARCHAR(255) DEFAULT NULL COLLATE BINARY, picture_desc VARCHAR(255) DEFAULT NULL COLLATE BINARY, CONSTRAINT FK_2AF53C6812469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO dishe (id, category_id, name, description, price, picture, picture_desc) SELECT id, category_id, name, description, price, picture, picture_desc FROM __temp__dishe');
        $this->addSql('DROP TABLE __temp__dishe');
        $this->addSql('CREATE INDEX IDX_2AF53C6812469DE2 ON dishe (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX IDX_2AF53C6812469DE2');
        $this->addSql('CREATE TEMPORARY TABLE __temp__dishe AS SELECT id, category_id, name, description, price, picture, picture_desc FROM dishe');
        $this->addSql('DROP TABLE dishe');
        $this->addSql('CREATE TABLE dishe (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, category_id INTEGER DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, description CLOB DEFAULT NULL, price VARCHAR(255) DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL, picture_desc VARCHAR(255) DEFAULT NULL)');
        $this->addSql('INSERT INTO dishe (id, category_id, name, description, price, picture, picture_desc) SELECT id, category_id, name, description, price, picture, picture_desc FROM __temp__dishe');
        $this->addSql('DROP TABLE __temp__dishe');
        $this->addSql('CREATE INDEX IDX_2AF53C6812469DE2 ON dishe (category_id)');
    }
}
