<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180220153243 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE animateur DROP fonction');
        $this->addSql('ALTER TABLE fonction DROP FOREIGN KEY FK_900D5BD2E215915');
        $this->addSql('DROP INDEX UNIQ_900D5BD2E215915 ON fonction');
        $this->addSql('ALTER TABLE fonction DROP id_animateurs_id');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE animateur ADD fonction VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE fonction ADD id_animateurs_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fonction ADD CONSTRAINT FK_900D5BD2E215915 FOREIGN KEY (id_animateurs_id) REFERENCES animateur (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_900D5BD2E215915 ON fonction (id_animateurs_id)');
    }
}
