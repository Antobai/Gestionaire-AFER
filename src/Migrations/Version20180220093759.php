<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180220093759 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tribunal DROP FOREIGN KEY FK_DC8C3AAF34D1DE1A');
        $this->addSql('DROP INDEX IDX_DC8C3AAF34D1DE1A ON tribunal');
        $this->addSql('ALTER TABLE tribunal DROP infractions_id');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE tribunal ADD infractions_id INT NOT NULL');
        $this->addSql('ALTER TABLE tribunal ADD CONSTRAINT FK_DC8C3AAF34D1DE1A FOREIGN KEY (infractions_id) REFERENCES infraction (id)');
        $this->addSql('CREATE INDEX IDX_DC8C3AAF34D1DE1A ON tribunal (infractions_id)');
    }
}
