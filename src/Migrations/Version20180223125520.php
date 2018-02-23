<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180223125520 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE permis ADD prefectures_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE permis ADD CONSTRAINT FK_17389453DA34113A FOREIGN KEY (prefectures_id) REFERENCES prefecture (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_17389453DA34113A ON permis (prefectures_id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE permis DROP FOREIGN KEY FK_17389453DA34113A');
        $this->addSql('DROP INDEX UNIQ_17389453DA34113A ON permis');
        $this->addSql('ALTER TABLE permis DROP prefectures_id');
    }
}
