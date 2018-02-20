<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180220094705 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fonction CHANGE id_animateurs id_animateurs_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fonction ADD CONSTRAINT FK_900D5BD2E215915 FOREIGN KEY (id_animateurs_id) REFERENCES animateur (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_900D5BD2E215915 ON fonction (id_animateurs_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE fonction DROP FOREIGN KEY FK_900D5BD2E215915');
        $this->addSql('DROP INDEX UNIQ_900D5BD2E215915 ON fonction');
        $this->addSql('ALTER TABLE fonction CHANGE id_animateurs_id id_animateurs INT DEFAULT NULL');
    }
}
