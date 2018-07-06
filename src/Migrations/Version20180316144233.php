<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180316144233 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE stagiaire_cas (stagiaire_id INT NOT NULL, cas_id INT NOT NULL, INDEX IDX_4E56044BBA93DD6 (stagiaire_id), INDEX IDX_4E560447B7A91FA (cas_id), PRIMARY KEY(stagiaire_id, cas_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stagiaire_stage (id INT AUTO_INCREMENT NOT NULL, stagiaires_id INT NOT NULL, stages_id INT NOT NULL, cas_id INT NOT NULL, bordereaux_id INT DEFAULT NULL, paye TINYINT(1) DEFAULT \'0\' NOT NULL, prix DOUBLE PRECISION DEFAULT NULL, envoi_inscription TINYINT(1) DEFAULT NULL, envoi_convocation TINYINT(1) DEFAULT NULL, courrier TINYINT(1) DEFAULT NULL, email TINYINT(1) DEFAULT NULL, bulletin_inscription TINYINT(1) DEFAULT NULL, cni TINYINT(1) DEFAULT NULL, copie_permis TINYINT(1) DEFAULT NULL, releve_integral TINYINT(1) DEFAULT NULL, decision_judiciaire TINYINT(1) DEFAULT NULL, n48 TINYINT(1) DEFAULT NULL, observations TINYINT(1) DEFAULT NULL, INDEX IDX_979FD2C5887A63F9 (stagiaires_id), INDEX IDX_979FD2C58E55E70A (stages_id), INDEX IDX_979FD2C57B7A91FA (cas_id), INDEX IDX_979FD2C5A1418383 (bordereaux_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_infraction (id INT AUTO_INCREMENT NOT NULL, types_infractions VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tribunal (id INT AUTO_INCREMENT NOT NULL, tribunal VARCHAR(255) NOT NULL, numero_parquet VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bordereau_prefecture (bordereau_id INT NOT NULL, prefecture_id INT NOT NULL, INDEX IDX_2747A1BD55D5304E (bordereau_id), INDEX IDX_2747A1BD9D39C865 (prefecture_id), PRIMARY KEY(bordereau_id, prefecture_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bordereau_tribunal (bordereau_id INT NOT NULL, tribunal_id INT NOT NULL, INDEX IDX_57BFE16955D5304E (bordereau_id), INDEX IDX_57BFE16975C2CEC3 (tribunal_id), PRIMARY KEY(bordereau_id, tribunal_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infraction (id INT AUTO_INCREMENT NOT NULL, stagiaires_id INT DEFAULT NULL, tribunaux_id INT NOT NULL, types_infractions_id INT NOT NULL, heure TIME DEFAULT NULL, lieu VARCHAR(255) NOT NULL, date_infraction DATE NOT NULL, date_tribunal DATE DEFAULT NULL, cs_permis VARCHAR(255) DEFAULT NULL, cs_assurance VARCHAR(255) DEFAULT NULL, INDEX IDX_C1A458F5887A63F9 (stagiaires_id), INDEX IDX_C1A458F55F989E13 (tribunaux_id), INDEX IDX_C1A458F5AF81BF54 (types_infractions_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(255) NOT NULL, adresse_email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE permis (id INT AUTO_INCREMENT NOT NULL, stagiaires_id INT DEFAULT NULL, prefectures_id INT DEFAULT NULL, permis VARCHAR(255) DEFAULT NULL, delivre_le DATE NOT NULL, UNIQUE INDEX UNIQ_17389453887A63F9 (stagiaires_id), INDEX IDX_17389453DA34113A (prefectures_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prefecture (id INT AUTO_INCREMENT NOT NULL, prefecture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE stagiaire_cas ADD CONSTRAINT FK_4E56044BBA93DD6 FOREIGN KEY (stagiaire_id) REFERENCES stagiaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stagiaire_cas ADD CONSTRAINT FK_4E560447B7A91FA FOREIGN KEY (cas_id) REFERENCES cas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stagiaire_stage ADD CONSTRAINT FK_979FD2C5887A63F9 FOREIGN KEY (stagiaires_id) REFERENCES stagiaire (id)');
        $this->addSql('ALTER TABLE stagiaire_stage ADD CONSTRAINT FK_979FD2C58E55E70A FOREIGN KEY (stages_id) REFERENCES stage (id)');
        $this->addSql('ALTER TABLE stagiaire_stage ADD CONSTRAINT FK_979FD2C57B7A91FA FOREIGN KEY (cas_id) REFERENCES cas (id)');
        $this->addSql('ALTER TABLE stagiaire_stage ADD CONSTRAINT FK_979FD2C5A1418383 FOREIGN KEY (bordereaux_id) REFERENCES bordereau (id)');
        $this->addSql('ALTER TABLE bordereau_prefecture ADD CONSTRAINT FK_2747A1BD55D5304E FOREIGN KEY (bordereau_id) REFERENCES bordereau (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bordereau_prefecture ADD CONSTRAINT FK_2747A1BD9D39C865 FOREIGN KEY (prefecture_id) REFERENCES prefecture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bordereau_tribunal ADD CONSTRAINT FK_57BFE16955D5304E FOREIGN KEY (bordereau_id) REFERENCES bordereau (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bordereau_tribunal ADD CONSTRAINT FK_57BFE16975C2CEC3 FOREIGN KEY (tribunal_id) REFERENCES tribunal (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE infraction ADD CONSTRAINT FK_C1A458F5887A63F9 FOREIGN KEY (stagiaires_id) REFERENCES stagiaire (id)');
        $this->addSql('ALTER TABLE infraction ADD CONSTRAINT FK_C1A458F55F989E13 FOREIGN KEY (tribunaux_id) REFERENCES tribunal (id)');
        $this->addSql('ALTER TABLE infraction ADD CONSTRAINT FK_C1A458F5AF81BF54 FOREIGN KEY (types_infractions_id) REFERENCES type_infraction (id)');
        $this->addSql('ALTER TABLE permis ADD CONSTRAINT FK_17389453887A63F9 FOREIGN KEY (stagiaires_id) REFERENCES stagiaire (id)');
        $this->addSql('ALTER TABLE permis ADD CONSTRAINT FK_17389453DA34113A FOREIGN KEY (prefectures_id) REFERENCES prefecture (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE infraction DROP FOREIGN KEY FK_C1A458F5AF81BF54');
        $this->addSql('ALTER TABLE bordereau_tribunal DROP FOREIGN KEY FK_57BFE16975C2CEC3');
        $this->addSql('ALTER TABLE infraction DROP FOREIGN KEY FK_C1A458F55F989E13');
        $this->addSql('ALTER TABLE bordereau_prefecture DROP FOREIGN KEY FK_2747A1BD9D39C865');
        $this->addSql('ALTER TABLE permis DROP FOREIGN KEY FK_17389453DA34113A');
        $this->addSql('DROP TABLE stagiaire_cas');
        $this->addSql('DROP TABLE stagiaire_stage');
        $this->addSql('DROP TABLE type_infraction');
        $this->addSql('DROP TABLE tribunal');
        $this->addSql('DROP TABLE bordereau_prefecture');
        $this->addSql('DROP TABLE bordereau_tribunal');
        $this->addSql('DROP TABLE infraction');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE permis');
        $this->addSql('DROP TABLE prefecture');
    }
}
