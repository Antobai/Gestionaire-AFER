<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180228144004 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(255) NOT NULL, adresse_email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE animateur (id INT AUTO_INCREMENT NOT NULL, fonctions_id INT DEFAULT NULL, civilite VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, statut VARCHAR(255) DEFAULT NULL, gta VARCHAR(255) DEFAULT NULL, raison_sociale VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, numero_telephone_fixe VARCHAR(255) DEFAULT NULL, numero_telephone_portable VARCHAR(255) NOT NULL, adresse_email VARCHAR(255) NOT NULL, urssaf TINYINT(1) DEFAULT NULL, siret VARCHAR(255) DEFAULT NULL, forfait VARCHAR(255) DEFAULT NULL, km_ar INT DEFAULT NULL, repas TINYINT(1) DEFAULT NULL, INDEX IDX_2064DB2CDC481574 (fonctions_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bordereau (id INT AUTO_INCREMENT NOT NULL, autorite VARCHAR(255) DEFAULT NULL, etablissement VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bordereau_prefecture (bordereau_id INT NOT NULL, prefecture_id INT NOT NULL, INDEX IDX_2747A1BD55D5304E (bordereau_id), INDEX IDX_2747A1BD9D39C865 (prefecture_id), PRIMARY KEY(bordereau_id, prefecture_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bordereau_tribunal (bordereau_id INT NOT NULL, tribunal_id INT NOT NULL, INDEX IDX_57BFE16955D5304E (bordereau_id), INDEX IDX_57BFE16975C2CEC3 (tribunal_id), PRIMARY KEY(bordereau_id, tribunal_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cas (id INT AUTO_INCREMENT NOT NULL, cas VARCHAR(255) NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fonction (id INT AUTO_INCREMENT NOT NULL, fonction VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infraction (id INT AUTO_INCREMENT NOT NULL, stagiaires_id INT DEFAULT NULL, tribunaux_id INT NOT NULL, types_infractions_id INT NOT NULL, heure TIME DEFAULT NULL, lieu VARCHAR(255) NOT NULL, date_infraction DATE NOT NULL, date_tribunal DATE DEFAULT NULL, cs_permis VARCHAR(255) DEFAULT NULL, cs_assurance VARCHAR(255) DEFAULT NULL, INDEX IDX_C1A458F5887A63F9 (stagiaires_id), INDEX IDX_C1A458F55F989E13 (tribunaux_id), INDEX IDX_C1A458F5AF81BF54 (types_infractions_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieux_de_stage (id INT AUTO_INCREMENT NOT NULL, lieux VARCHAR(255) NOT NULL, organisme VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, ville VARCHAR(255) NOT NULL, numero_telephone_fixe VARCHAR(255) NOT NULL, latitude NUMERIC(10, 8) DEFAULT NULL, longitude NUMERIC(10, 8) DEFAULT NULL, divers VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE permis (id INT AUTO_INCREMENT NOT NULL, stagiaires_id INT DEFAULT NULL, prefectures_id INT DEFAULT NULL, permis VARCHAR(255) DEFAULT NULL, delivre_le DATE NOT NULL, UNIQUE INDEX UNIQ_17389453887A63F9 (stagiaires_id), INDEX IDX_17389453DA34113A (prefectures_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prefecture (id INT AUTO_INCREMENT NOT NULL, prefecture VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stage (id INT AUTO_INCREMENT NOT NULL, animateur_id INT NOT NULL, animateur_deux_id INT DEFAULT NULL, lieux_de_stage_id INT NOT NULL, numero_stage VARCHAR(255) NOT NULL, date_de_stage DATE NOT NULL, stage_hpo TINYINT(1) DEFAULT \'0\' NOT NULL, INDEX IDX_C27C93697F05C301 (animateur_id), INDEX IDX_C27C93699DE4711C (animateur_deux_id), INDEX IDX_C27C936947D7ABBC (lieux_de_stage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stagiaire (id INT AUTO_INCREMENT NOT NULL, genre VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, nom_epouse VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) NOT NULL, date_de_naissance DATE NOT NULL, lieu_de_naissance VARCHAR(255) NOT NULL, pays VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, code_postal VARCHAR(255) NOT NULL, commune VARCHAR(255) NOT NULL, numero_telephone_fixe VARCHAR(255) DEFAULT NULL, numero_telephone_portable VARCHAR(255) NOT NULL, numero_telephone_portable_deux VARCHAR(255) DEFAULT NULL, adresse_email VARCHAR(255) NOT NULL, carte_avantage_jeunes TINYINT(1) DEFAULT \'0\' NOT NULL, partenaires TINYINT(1) DEFAULT \'0\' NOT NULL, adherents TINYINT(1) DEFAULT \'0\' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stagiaire_cas (stagiaire_id INT NOT NULL, cas_id INT NOT NULL, INDEX IDX_4E56044BBA93DD6 (stagiaire_id), INDEX IDX_4E560447B7A91FA (cas_id), PRIMARY KEY(stagiaire_id, cas_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stagiaire_stage (id INT AUTO_INCREMENT NOT NULL, stagiaires_id INT NOT NULL, stages_id INT NOT NULL, cas_id INT NOT NULL, bordereaux_id INT DEFAULT NULL, paye TINYINT(1) DEFAULT \'0\' NOT NULL, prix DOUBLE PRECISION DEFAULT NULL, envoi_inscription TINYINT(1) DEFAULT NULL, envoi_convocation TINYINT(1) DEFAULT NULL, courrier TINYINT(1) DEFAULT NULL, email TINYINT(1) DEFAULT NULL, alerte TINYINT(1) DEFAULT NULL, bulletin_inscription TINYINT(1) DEFAULT NULL, cni TINYINT(1) DEFAULT NULL, copie_permis TINYINT(1) DEFAULT NULL, releve_integral TINYINT(1) DEFAULT NULL, decision_judiciaire TINYINT(1) DEFAULT NULL, n48 TINYINT(1) DEFAULT NULL, observations TINYINT(1) DEFAULT NULL, INDEX IDX_979FD2C5887A63F9 (stagiaires_id), INDEX IDX_979FD2C58E55E70A (stages_id), INDEX IDX_979FD2C57B7A91FA (cas_id), INDEX IDX_979FD2C5A1418383 (bordereaux_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tribunal (id INT AUTO_INCREMENT NOT NULL, tribunal VARCHAR(255) NOT NULL, numero_parquet VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_infraction (id INT AUTO_INCREMENT NOT NULL, types_infractions VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animateur ADD CONSTRAINT FK_2064DB2CDC481574 FOREIGN KEY (fonctions_id) REFERENCES fonction (id)');
        $this->addSql('ALTER TABLE bordereau_prefecture ADD CONSTRAINT FK_2747A1BD55D5304E FOREIGN KEY (bordereau_id) REFERENCES bordereau (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bordereau_prefecture ADD CONSTRAINT FK_2747A1BD9D39C865 FOREIGN KEY (prefecture_id) REFERENCES prefecture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bordereau_tribunal ADD CONSTRAINT FK_57BFE16955D5304E FOREIGN KEY (bordereau_id) REFERENCES bordereau (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bordereau_tribunal ADD CONSTRAINT FK_57BFE16975C2CEC3 FOREIGN KEY (tribunal_id) REFERENCES tribunal (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE infraction ADD CONSTRAINT FK_C1A458F5887A63F9 FOREIGN KEY (stagiaires_id) REFERENCES stagiaire (id)');
        $this->addSql('ALTER TABLE infraction ADD CONSTRAINT FK_C1A458F55F989E13 FOREIGN KEY (tribunaux_id) REFERENCES tribunal (id)');
        $this->addSql('ALTER TABLE infraction ADD CONSTRAINT FK_C1A458F5AF81BF54 FOREIGN KEY (types_infractions_id) REFERENCES type_infraction (id)');
        $this->addSql('ALTER TABLE permis ADD CONSTRAINT FK_17389453887A63F9 FOREIGN KEY (stagiaires_id) REFERENCES stagiaire (id)');
        $this->addSql('ALTER TABLE permis ADD CONSTRAINT FK_17389453DA34113A FOREIGN KEY (prefectures_id) REFERENCES prefecture (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C93697F05C301 FOREIGN KEY (animateur_id) REFERENCES animateur (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C93699DE4711C FOREIGN KEY (animateur_deux_id) REFERENCES animateur (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C936947D7ABBC FOREIGN KEY (lieux_de_stage_id) REFERENCES lieux_de_stage (id)');
        $this->addSql('ALTER TABLE stagiaire_cas ADD CONSTRAINT FK_4E56044BBA93DD6 FOREIGN KEY (stagiaire_id) REFERENCES stagiaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stagiaire_cas ADD CONSTRAINT FK_4E560447B7A91FA FOREIGN KEY (cas_id) REFERENCES cas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stagiaire_stage ADD CONSTRAINT FK_979FD2C5887A63F9 FOREIGN KEY (stagiaires_id) REFERENCES stagiaire (id)');
        $this->addSql('ALTER TABLE stagiaire_stage ADD CONSTRAINT FK_979FD2C58E55E70A FOREIGN KEY (stages_id) REFERENCES stage (id)');
        $this->addSql('ALTER TABLE stagiaire_stage ADD CONSTRAINT FK_979FD2C57B7A91FA FOREIGN KEY (cas_id) REFERENCES cas (id)');
        $this->addSql('ALTER TABLE stagiaire_stage ADD CONSTRAINT FK_979FD2C5A1418383 FOREIGN KEY (bordereaux_id) REFERENCES bordereau (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C93697F05C301');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C93699DE4711C');
        $this->addSql('ALTER TABLE bordereau_prefecture DROP FOREIGN KEY FK_2747A1BD55D5304E');
        $this->addSql('ALTER TABLE bordereau_tribunal DROP FOREIGN KEY FK_57BFE16955D5304E');
        $this->addSql('ALTER TABLE stagiaire_stage DROP FOREIGN KEY FK_979FD2C5A1418383');
        $this->addSql('ALTER TABLE stagiaire_cas DROP FOREIGN KEY FK_4E560447B7A91FA');
        $this->addSql('ALTER TABLE stagiaire_stage DROP FOREIGN KEY FK_979FD2C57B7A91FA');
        $this->addSql('ALTER TABLE animateur DROP FOREIGN KEY FK_2064DB2CDC481574');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C936947D7ABBC');
        $this->addSql('ALTER TABLE bordereau_prefecture DROP FOREIGN KEY FK_2747A1BD9D39C865');
        $this->addSql('ALTER TABLE permis DROP FOREIGN KEY FK_17389453DA34113A');
        $this->addSql('ALTER TABLE stagiaire_stage DROP FOREIGN KEY FK_979FD2C58E55E70A');
        $this->addSql('ALTER TABLE infraction DROP FOREIGN KEY FK_C1A458F5887A63F9');
        $this->addSql('ALTER TABLE permis DROP FOREIGN KEY FK_17389453887A63F9');
        $this->addSql('ALTER TABLE stagiaire_cas DROP FOREIGN KEY FK_4E56044BBA93DD6');
        $this->addSql('ALTER TABLE stagiaire_stage DROP FOREIGN KEY FK_979FD2C5887A63F9');
        $this->addSql('ALTER TABLE bordereau_tribunal DROP FOREIGN KEY FK_57BFE16975C2CEC3');
        $this->addSql('ALTER TABLE infraction DROP FOREIGN KEY FK_C1A458F55F989E13');
        $this->addSql('ALTER TABLE infraction DROP FOREIGN KEY FK_C1A458F5AF81BF54');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE animateur');
        $this->addSql('DROP TABLE bordereau');
        $this->addSql('DROP TABLE bordereau_prefecture');
        $this->addSql('DROP TABLE bordereau_tribunal');
        $this->addSql('DROP TABLE cas');
        $this->addSql('DROP TABLE fonction');
        $this->addSql('DROP TABLE infraction');
        $this->addSql('DROP TABLE lieux_de_stage');
        $this->addSql('DROP TABLE permis');
        $this->addSql('DROP TABLE prefecture');
        $this->addSql('DROP TABLE stage');
        $this->addSql('DROP TABLE stagiaire');
        $this->addSql('DROP TABLE stagiaire_cas');
        $this->addSql('DROP TABLE stagiaire_stage');
        $this->addSql('DROP TABLE tribunal');
        $this->addSql('DROP TABLE type_infraction');
    }
}
