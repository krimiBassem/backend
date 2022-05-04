<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220422232617 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE docteurs_groups (docteur_id INT NOT NULL, questions_id INT NOT NULL, INDEX IDX_8F61CA8CF22540A (docteur_id), INDEX IDX_8F61CA8BCB134CE (questions_id), PRIMARY KEY(docteur_id, questions_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE docteurs_groups ADD CONSTRAINT FK_8F61CA8CF22540A FOREIGN KEY (docteur_id) REFERENCES docteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE docteurs_groups ADD CONSTRAINT FK_8F61CA8BCB134CE FOREIGN KEY (questions_id) REFERENCES questions (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE questions ADD specialites_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT FK_8ADC54D55AEDDAD9 FOREIGN KEY (specialites_id) REFERENCES specialite (id)');
        $this->addSql('CREATE INDEX IDX_8ADC54D55AEDDAD9 ON questions (specialites_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE docteurs_groups');
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY FK_8ADC54D55AEDDAD9');
        $this->addSql('DROP INDEX IDX_8ADC54D55AEDDAD9 ON questions');
        $this->addSql('ALTER TABLE questions DROP specialites_id');
    }
}
