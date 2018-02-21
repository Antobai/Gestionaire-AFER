<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180221081526 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE stagiaire_cas');
        $this->addSql('ALTER TABLE animateur DROP fonction');
        $this->addSql('ALTER TABLE cas CHANGE cas cas VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE fonction DROP FOREIGN KEY FK_900D5BD2E215915');
        $this->addSql('DROP INDEX UNIQ_900D5BD2E215915 ON fonction');
        $this->addSql('ALTER TABLE fonction DROP id_animateurs_id');
        $this->addSql('ALTER TABLE stage DROP fonction, DROP fonction_deux');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE stagiaire_cas (stagiaire_id INT NOT NULL, cas_id INT NOT NULL, INDEX IDX_4E56044BBA93DD6 (stagiaire_id), INDEX IDX_4E560447B7A91FA (cas_id), PRIMARY KEY(stagiaire_id, cas_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE stagiaire_cas ADD CONSTRAINT FK_4E560447B7A91FA FOREIGN KEY (cas_id) REFERENCES cas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stagiaire_cas ADD CONSTRAINT FK_4E56044BBA93DD6 FOREIGN KEY (stagiaire_id) REFERENCES stagiaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE animateur ADD fonction VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE cas CHANGE cas cas INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fonction ADD id_animateurs_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fonction ADD CONSTRAINT FK_900D5BD2E215915 FOREIGN KEY (id_animateurs_id) REFERENCES animateur (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_900D5BD2E215915 ON fonction (id_animateurs_id)');
        $this->addSql('ALTER TABLE stage ADD fonction VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci, ADD fonction_deux VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
    }
}
