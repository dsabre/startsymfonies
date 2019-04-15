<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190415072605 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('ALTER TABLE symfony ADD COLUMN nip_io CLOB DEFAULT NULL');
        $this->addSql('DROP INDEX IDX_8993831951EB6841');
        $this->addSql('CREATE TEMPORARY TABLE __temp__custom_command AS SELECT id, symfony_id, label, command, on_pre_start, on_post_stop, on_git_pull, on_composer_install, on_cache_assets_reset, weight_on_pre_start, weight_on_post_stop, weight_on_git_pull, weight_on_composer_install, weight_on_cache_assets_reset FROM custom_command');
        $this->addSql('DROP TABLE custom_command');
        $this->addSql('CREATE TABLE custom_command (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, symfony_id INTEGER NOT NULL, label VARCHAR(255) NOT NULL COLLATE BINARY, command VARCHAR(255) NOT NULL COLLATE BINARY, on_pre_start BOOLEAN DEFAULT NULL, on_post_stop BOOLEAN DEFAULT NULL, on_git_pull BOOLEAN DEFAULT NULL, on_composer_install BOOLEAN DEFAULT NULL, on_cache_assets_reset BOOLEAN DEFAULT NULL, weight_on_pre_start INTEGER NOT NULL, weight_on_post_stop INTEGER NOT NULL, weight_on_git_pull INTEGER NOT NULL, weight_on_composer_install INTEGER NOT NULL, weight_on_cache_assets_reset INTEGER NOT NULL, CONSTRAINT FK_8993831951EB6841 FOREIGN KEY (symfony_id) REFERENCES symfony (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO custom_command (id, symfony_id, label, command, on_pre_start, on_post_stop, on_git_pull, on_composer_install, on_cache_assets_reset, weight_on_pre_start, weight_on_post_stop, weight_on_git_pull, weight_on_composer_install, weight_on_cache_assets_reset) SELECT id, symfony_id, label, command, on_pre_start, on_post_stop, on_git_pull, on_composer_install, on_cache_assets_reset, weight_on_pre_start, weight_on_post_stop, weight_on_git_pull, weight_on_composer_install, weight_on_cache_assets_reset FROM __temp__custom_command');
        $this->addSql('DROP TABLE __temp__custom_command');
        $this->addSql('CREATE INDEX IDX_8993831951EB6841 ON custom_command (symfony_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'sqlite', 'Migration can only be executed safely on \'sqlite\'.');

        $this->addSql('DROP INDEX IDX_8993831951EB6841');
        $this->addSql('CREATE TEMPORARY TABLE __temp__custom_command AS SELECT id, symfony_id, label, command, on_pre_start, on_post_stop, on_git_pull, on_composer_install, on_cache_assets_reset, weight_on_pre_start, weight_on_post_stop, weight_on_git_pull, weight_on_composer_install, weight_on_cache_assets_reset FROM custom_command');
        $this->addSql('DROP TABLE custom_command');
        $this->addSql('CREATE TABLE custom_command (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, symfony_id INTEGER NOT NULL, label VARCHAR(255) NOT NULL, command VARCHAR(255) NOT NULL, on_pre_start BOOLEAN DEFAULT NULL, on_post_stop BOOLEAN DEFAULT NULL, on_git_pull BOOLEAN DEFAULT NULL, on_composer_install BOOLEAN DEFAULT NULL, on_cache_assets_reset BOOLEAN DEFAULT NULL, weight_on_pre_start INTEGER NOT NULL, weight_on_post_stop INTEGER NOT NULL, weight_on_git_pull INTEGER NOT NULL, weight_on_composer_install INTEGER NOT NULL, weight_on_cache_assets_reset INTEGER NOT NULL)');
        $this->addSql('INSERT INTO custom_command (id, symfony_id, label, command, on_pre_start, on_post_stop, on_git_pull, on_composer_install, on_cache_assets_reset, weight_on_pre_start, weight_on_post_stop, weight_on_git_pull, weight_on_composer_install, weight_on_cache_assets_reset) SELECT id, symfony_id, label, command, on_pre_start, on_post_stop, on_git_pull, on_composer_install, on_cache_assets_reset, weight_on_pre_start, weight_on_post_stop, weight_on_git_pull, weight_on_composer_install, weight_on_cache_assets_reset FROM __temp__custom_command');
        $this->addSql('DROP TABLE __temp__custom_command');
        $this->addSql('CREATE INDEX IDX_8993831951EB6841 ON custom_command (symfony_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__symfony AS SELECT id, path, version, php_executable, ip, port, starred, entry_point, status FROM symfony');
        $this->addSql('DROP TABLE symfony');
        $this->addSql('CREATE TABLE symfony (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, path CLOB NOT NULL, version VARCHAR(255) NOT NULL, php_executable VARCHAR(255) DEFAULT NULL, ip VARCHAR(255) DEFAULT NULL, port INTEGER DEFAULT NULL, starred BOOLEAN DEFAULT NULL, entry_point CLOB DEFAULT NULL, status INTEGER DEFAULT NULL)');
        $this->addSql('INSERT INTO symfony (id, path, version, php_executable, ip, port, starred, entry_point, status) SELECT id, path, version, php_executable, ip, port, starred, entry_point, status FROM __temp__symfony');
        $this->addSql('DROP TABLE __temp__symfony');
    }
}
