<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180220095741 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(255) DEFAULT NULL, adresse_email VARCHAR(255) DEFAULT NULL, password VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE administration (id INT AUTO_INCREMENT NOT NULL, stagiaires_id INT DEFAULT NULL, envoi_inscription TINYINT(1) DEFAULT NULL, envoi_convocation TINYINT(1) DEFAULT NULL, courrier TINYINT(1) DEFAULT NULL, email TINYINT(1) DEFAULT NULL, alerte TINYINT(1) DEFAULT NULL, bulletin_inscription TINYINT(1) DEFAULT NULL, cni TINYINT(1) DEFAULT NULL, copie_permis TINYINT(1) DEFAULT NULL, releve_integral TINYINT(1) DEFAULT NULL, decision_judiciaire TINYINT(1) DEFAULT NULL, n48 TINYINT(1) DEFAULT NULL, observations TINYINT(1) DEFAULT NULL, INDEX IDX_9FDD0D18887A63F9 (stagiaires_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE animateur (id INT AUTO_INCREMENT NOT NULL, fonctions_id INT DEFAULT NULL, civilite VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, fonction VARCHAR(255) DEFAULT NULL, statut VARCHAR(255) DEFAULT NULL, gta VARCHAR(255) DEFAULT NULL, raison_sociale VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, code_postal VARCHAR(255) DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, region VARCHAR(255) DEFAULT NULL, numero_telephone_fixe INT DEFAULT NULL, numero_telephone_portable INT DEFAULT NULL, adresse_email VARCHAR(255) DEFAULT NULL, urssaf VARCHAR(255) DEFAULT NULL, siret INT DEFAULT NULL, forfait VARCHAR(255) DEFAULT NULL, km_ar INT DEFAULT NULL, repas VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_2064DB2CDC481574 (fonctions_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE animateur_stage (animateur_id INT NOT NULL, stage_id INT NOT NULL, INDEX IDX_4A06D2447F05C301 (animateur_id), INDEX IDX_4A06D2442298D193 (stage_id), PRIMARY KEY(animateur_id, stage_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bordereau (id INT AUTO_INCREMENT NOT NULL, stagiaires_stages_id INT DEFAULT NULL, autorite VARCHAR(255) DEFAULT NULL, etablissement VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, code_adresse INT DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, INDEX IDX_F7B4C561B558D120 (stagiaires_stages_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bordereau_prefecture (bordereau_id INT NOT NULL, prefecture_id INT NOT NULL, INDEX IDX_2747A1BD55D5304E (bordereau_id), INDEX IDX_2747A1BD9D39C865 (prefecture_id), PRIMARY KEY(bordereau_id, prefecture_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bordereau_tribunal (bordereau_id INT NOT NULL, tribunal_id INT NOT NULL, INDEX IDX_57BFE16955D5304E (bordereau_id), INDEX IDX_57BFE16975C2CEC3 (tribunal_id), PRIMARY KEY(bordereau_id, tribunal_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cas (id INT AUTO_INCREMENT NOT NULL, stagiaires_stages_id INT DEFAULT NULL, cas INT DEFAULT NULL, INDEX IDX_3AD60BB558D120 (stagiaires_stages_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fonction (id INT AUTO_INCREMENT NOT NULL, id_animateurs_id INT DEFAULT NULL, fonction VARCHAR(255) DEFAULT NULL, fonction_deux VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_900D5BD2E215915 (id_animateurs_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infraction (id INT AUTO_INCREMENT NOT NULL, types_infractions_id INT DEFAULT NULL, heure DATETIME DEFAULT NULL, lieu VARCHAR(255) DEFAULT NULL, date_infraction DATE DEFAULT NULL, cs_permis VARCHAR(255) DEFAULT NULL, cs_assurance VARCHAR(255) DEFAULT NULL, INDEX IDX_C1A458F5AF81BF54 (types_infractions_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lieux_de_stage (id INT AUTO_INCREMENT NOT NULL, lieux VARCHAR(255) DEFAULT NULL, organisme VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, code_postal INT DEFAULT NULL, ville VARCHAR(255) DEFAULT NULL, numero_telephone_fixe INT DEFAULT NULL, latitude NUMERIC(10, 8) DEFAULT NULL, longitude NUMERIC(10, 8) DEFAULT NULL, divers VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE permis (id INT AUTO_INCREMENT NOT NULL, stagiaires_id INT DEFAULT NULL, civilite VARCHAR(255) NOT NULL, nom VARCHAR(255) DEFAULT NULL, nom_epouse VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, numero_permis VARCHAR(255) DEFAULT NULL, delivre_le DATE DEFAULT NULL, UNIQUE INDEX UNIQ_17389453887A63F9 (stagiaires_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prefecture (id INT AUTO_INCREMENT NOT NULL, permis_id INT NOT NULL, prefecture VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_ABE6511A3594A24E (permis_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stage (id INT AUTO_INCREMENT NOT NULL, date_de_stage DATE DEFAULT NULL, animateur VARCHAR(255) DEFAULT NULL, fonction VARCHAR(255) DEFAULT NULL, animateur_deux VARCHAR(255) DEFAULT NULL, fonction_deux VARCHAR(255) DEFAULT NULL, stage_hpo TINYINT(1) DEFAULT \'0\' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stage_animateur (stage_id INT NOT NULL, animateur_id INT NOT NULL, INDEX IDX_136F210D2298D193 (stage_id), INDEX IDX_136F210D7F05C301 (animateur_id), PRIMARY KEY(stage_id, animateur_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stagiaire (id INT AUTO_INCREMENT NOT NULL, genre VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, nom_epouse VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, date_de_naissance DATE DEFAULT NULL, lieu_de_naissance VARCHAR(255) DEFAULT NULL, pays VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, code_postal VARCHAR(255) DEFAULT NULL, commune VARCHAR(255) DEFAULT NULL, numero_telephone_fixe INT DEFAULT NULL, numero_telephone_portable INT DEFAULT NULL, numero_telephone_portable_deux INT DEFAULT NULL, adresse_email VARCHAR(255) DEFAULT NULL, carte_avantage_jeunes TINYINT(1) DEFAULT \'0\' NOT NULL, partenaires TINYINT(1) DEFAULT \'0\' NOT NULL, adherents TINYINT(1) DEFAULT \'0\' NOT NULL, permis INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stagiaire_bordereau (stagiaire_id INT NOT NULL, bordereau_id INT NOT NULL, INDEX IDX_EF03817FBBA93DD6 (stagiaire_id), INDEX IDX_EF03817F55D5304E (bordereau_id), PRIMARY KEY(stagiaire_id, bordereau_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stagiaire_cas (stagiaire_id INT NOT NULL, cas_id INT NOT NULL, INDEX IDX_4E56044BBA93DD6 (stagiaire_id), INDEX IDX_4E560447B7A91FA (cas_id), PRIMARY KEY(stagiaire_id, cas_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stagiaire_stage (id INT AUTO_INCREMENT NOT NULL, stagiaires_id INT DEFAULT NULL, stages_id INT DEFAULT NULL, paye TINYINT(1) DEFAULT \'0\' NOT NULL, prix DOUBLE PRECISION DEFAULT NULL, INDEX IDX_979FD2C5887A63F9 (stagiaires_id), INDEX IDX_979FD2C58E55E70A (stages_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tribunal (id INT AUTO_INCREMENT NOT NULL, tribunal VARCHAR(255) DEFAULT NULL, date_tribunal DATE DEFAULT NULL, numero_parquet VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_infraction (id INT AUTO_INCREMENT NOT NULL, types_infractions VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE administration ADD CONSTRAINT FK_9FDD0D18887A63F9 FOREIGN KEY (stagiaires_id) REFERENCES stagiaire (id)');
        $this->addSql('ALTER TABLE animateur ADD CONSTRAINT FK_2064DB2CDC481574 FOREIGN KEY (fonctions_id) REFERENCES fonction (id)');
        $this->addSql('ALTER TABLE animateur_stage ADD CONSTRAINT FK_4A06D2447F05C301 FOREIGN KEY (animateur_id) REFERENCES animateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE animateur_stage ADD CONSTRAINT FK_4A06D2442298D193 FOREIGN KEY (stage_id) REFERENCES stage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bordereau ADD CONSTRAINT FK_F7B4C561B558D120 FOREIGN KEY (stagiaires_stages_id) REFERENCES stagiaire_stage (id)');
        $this->addSql('ALTER TABLE bordereau_prefecture ADD CONSTRAINT FK_2747A1BD55D5304E FOREIGN KEY (bordereau_id) REFERENCES bordereau (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bordereau_prefecture ADD CONSTRAINT FK_2747A1BD9D39C865 FOREIGN KEY (prefecture_id) REFERENCES prefecture (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bordereau_tribunal ADD CONSTRAINT FK_57BFE16955D5304E FOREIGN KEY (bordereau_id) REFERENCES bordereau (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE bordereau_tribunal ADD CONSTRAINT FK_57BFE16975C2CEC3 FOREIGN KEY (tribunal_id) REFERENCES tribunal (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cas ADD CONSTRAINT FK_3AD60BB558D120 FOREIGN KEY (stagiaires_stages_id) REFERENCES stagiaire_stage (id)');
        $this->addSql('ALTER TABLE fonction ADD CONSTRAINT FK_900D5BD2E215915 FOREIGN KEY (id_animateurs_id) REFERENCES animateur (id)');
        $this->addSql('ALTER TABLE infraction ADD CONSTRAINT FK_C1A458F5AF81BF54 FOREIGN KEY (types_infractions_id) REFERENCES type_infraction (id)');
        $this->addSql('ALTER TABLE permis ADD CONSTRAINT FK_17389453887A63F9 FOREIGN KEY (stagiaires_id) REFERENCES stagiaire (id)');
        $this->addSql('ALTER TABLE prefecture ADD CONSTRAINT FK_ABE6511A3594A24E FOREIGN KEY (permis_id) REFERENCES permis (id)');
        $this->addSql('ALTER TABLE stage_animateur ADD CONSTRAINT FK_136F210D2298D193 FOREIGN KEY (stage_id) REFERENCES stage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stage_animateur ADD CONSTRAINT FK_136F210D7F05C301 FOREIGN KEY (animateur_id) REFERENCES animateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stagiaire_bordereau ADD CONSTRAINT FK_EF03817FBBA93DD6 FOREIGN KEY (stagiaire_id) REFERENCES stagiaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stagiaire_bordereau ADD CONSTRAINT FK_EF03817F55D5304E FOREIGN KEY (bordereau_id) REFERENCES bordereau (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stagiaire_cas ADD CONSTRAINT FK_4E56044BBA93DD6 FOREIGN KEY (stagiaire_id) REFERENCES stagiaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stagiaire_cas ADD CONSTRAINT FK_4E560447B7A91FA FOREIGN KEY (cas_id) REFERENCES cas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE stagiaire_stage ADD CONSTRAINT FK_979FD2C5887A63F9 FOREIGN KEY (stagiaires_id) REFERENCES stagiaire (id)');
        $this->addSql('ALTER TABLE stagiaire_stage ADD CONSTRAINT FK_979FD2C58E55E70A FOREIGN KEY (stages_id) REFERENCES stage (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE animateur_stage DROP FOREIGN KEY FK_4A06D2447F05C301');
        $this->addSql('ALTER TABLE fonction DROP FOREIGN KEY FK_900D5BD2E215915');
        $this->addSql('ALTER TABLE stage_animateur DROP FOREIGN KEY FK_136F210D7F05C301');
        $this->addSql('ALTER TABLE bordereau_prefecture DROP FOREIGN KEY FK_2747A1BD55D5304E');
        $this->addSql('ALTER TABLE bordereau_tribunal DROP FOREIGN KEY FK_57BFE16955D5304E');
        $this->addSql('ALTER TABLE stagiaire_bordereau DROP FOREIGN KEY FK_EF03817F55D5304E');
        $this->addSql('ALTER TABLE stagiaire_cas DROP FOREIGN KEY FK_4E560447B7A91FA');
        $this->addSql('ALTER TABLE animateur DROP FOREIGN KEY FK_2064DB2CDC481574');
        $this->addSql('ALTER TABLE prefecture DROP FOREIGN KEY FK_ABE6511A3594A24E');
        $this->addSql('ALTER TABLE bordereau_prefecture DROP FOREIGN KEY FK_2747A1BD9D39C865');
        $this->addSql('ALTER TABLE animateur_stage DROP FOREIGN KEY FK_4A06D2442298D193');
        $this->addSql('ALTER TABLE stage_animateur DROP FOREIGN KEY FK_136F210D2298D193');
        $this->addSql('ALTER TABLE stagiaire_stage DROP FOREIGN KEY FK_979FD2C58E55E70A');
        $this->addSql('ALTER TABLE administration DROP FOREIGN KEY FK_9FDD0D18887A63F9');
        $this->addSql('ALTER TABLE permis DROP FOREIGN KEY FK_17389453887A63F9');
        $this->addSql('ALTER TABLE stagiaire_bordereau DROP FOREIGN KEY FK_EF03817FBBA93DD6');
        $this->addSql('ALTER TABLE stagiaire_cas DROP FOREIGN KEY FK_4E56044BBA93DD6');
        $this->addSql('ALTER TABLE stagiaire_stage DROP FOREIGN KEY FK_979FD2C5887A63F9');
        $this->addSql('ALTER TABLE bordereau DROP FOREIGN KEY FK_F7B4C561B558D120');
        $this->addSql('ALTER TABLE cas DROP FOREIGN KEY FK_3AD60BB558D120');
        $this->addSql('ALTER TABLE bordereau_tribunal DROP FOREIGN KEY FK_57BFE16975C2CEC3');
        $this->addSql('ALTER TABLE infraction DROP FOREIGN KEY FK_C1A458F5AF81BF54');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE administration');
        $this->addSql('DROP TABLE animateur');
        $this->addSql('DROP TABLE animateur_stage');
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
        $this->addSql('DROP TABLE stage_animateur');
        $this->addSql('DROP TABLE stagiaire');
        $this->addSql('DROP TABLE stagiaire_bordereau');
        $this->addSql('DROP TABLE stagiaire_cas');
        $this->addSql('DROP TABLE stagiaire_stage');
        $this->addSql('DROP TABLE tribunal');
        $this->addSql('DROP TABLE type_infraction');
    }
}
