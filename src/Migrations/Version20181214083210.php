<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181214083210 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('CREATE TABLE custom_command (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, symfony_id INTEGER NOT NULL, label VARCHAR(255) NOT NULL, command VARCHAR(255) NOT NULL, on_pre_start BOOLEAN DEFAULT NULL, on_post_stop BOOLEAN DEFAULT NULL, on_git_pull BOOLEAN DEFAULT NULL, on_composer_install BOOLEAN DEFAULT NULL, on_cache_assets_reset BOOLEAN DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_8993831951EB6841 ON custom_command (symfony_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP TABLE custom_command');
    }
}
