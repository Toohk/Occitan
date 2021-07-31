<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210724151848 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE about (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, content CLOB DEFAULT NULL, left_img VARCHAR(255) DEFAULT NULL, right_img VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE category (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL)');
        $this->addSql('CREATE TABLE contact (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, email VARCHAR(255) DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE dishe (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, category_id INTEGER DEFAULT NULL, name VARCHAR(255) DEFAULT NULL, description CLOB DEFAULT NULL, price VARCHAR(255) DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_2AF53C6812469DE2 ON dishe (category_id)');
        $this->addSql('CREATE TABLE event (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, date VARCHAR(255) DEFAULT NULL, picture VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE header (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, tag VARCHAR(255) DEFAULT NULL, background VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE menu (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, description CLOB DEFAULT NULL, price VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE service (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, description CLOB DEFAULT NULL, icon VARCHAR(255) DEFAULT NULL)');
        $this->addSql('CREATE TABLE timetable (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, day VARCHAR(255) DEFAULT NULL, time VARCHAR(255) DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE about');
        $this->addSql('DROP TABLE category');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE dishe');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE header');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE timetable');
    }
}
