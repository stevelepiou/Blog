<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221229164132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE auteur auteur VARCHAR(50) DEFAULT NULL');
        $this->addSql('DROP INDEX article_id ON commentaire');
        $this->addSql('ALTER TABLE user CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article CHANGE auteur auteur VARCHAR(50) NOT NULL');
        $this->addSql('CREATE INDEX article_id ON commentaire (article_id)');
        $this->addSql('ALTER TABLE user CHANGE id id INT NOT NULL');
    }
}
