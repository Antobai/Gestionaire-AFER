<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180226083348 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE animateur ADD fonctions_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE animateur ADD CONSTRAINT FK_2064DB2CDC481574 FOREIGN KEY (fonctions_id) REFERENCES fonction (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_2064DB2CDC481574 ON animateur (fonctions_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE animateur DROP FOREIGN KEY FK_2064DB2CDC481574');
        $this->addSql('DROP INDEX UNIQ_2064DB2CDC481574 ON animateur');
        $this->addSql('ALTER TABLE animateur DROP fonctions_id');
    }
}
