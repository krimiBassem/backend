<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220422172535 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE consultation ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE consultation ADD CONSTRAINT FK_964685A6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_964685A6A76ED395 ON consultation (user_id)');
        $this->addSql('ALTER TABLE docteur ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE docteur ADD CONSTRAINT FK_83A7A439A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_83A7A439A76ED395 ON docteur (user_id)');
        $this->addSql('ALTER TABLE ordonnance ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE ordonnance ADD CONSTRAINT FK_924B326CA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_924B326CA76ED395 ON ordonnance (user_id)');
        $this->addSql('ALTER TABLE patient ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1ADAD7EBA76ED395 ON patient (user_id)');
        $this->addSql('ALTER TABLE questions ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE questions ADD CONSTRAINT FK_8ADC54D5A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_8ADC54D5A76ED395 ON questions (user_id)');
        $this->addSql('ALTER TABLE user ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649A76ED395 ON user (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE consultation DROP FOREIGN KEY FK_964685A6A76ED395');
        $this->addSql('DROP INDEX IDX_964685A6A76ED395 ON consultation');
        $this->addSql('ALTER TABLE consultation DROP user_id');
        $this->addSql('ALTER TABLE docteur DROP FOREIGN KEY FK_83A7A439A76ED395');
        $this->addSql('DROP INDEX IDX_83A7A439A76ED395 ON docteur');
        $this->addSql('ALTER TABLE docteur DROP user_id');
        $this->addSql('ALTER TABLE ordonnance DROP FOREIGN KEY FK_924B326CA76ED395');
        $this->addSql('DROP INDEX IDX_924B326CA76ED395 ON ordonnance');
        $this->addSql('ALTER TABLE ordonnance DROP user_id');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EBA76ED395');
        $this->addSql('DROP INDEX IDX_1ADAD7EBA76ED395 ON patient');
        $this->addSql('ALTER TABLE patient DROP user_id');
        $this->addSql('ALTER TABLE questions DROP FOREIGN KEY FK_8ADC54D5A76ED395');
        $this->addSql('DROP INDEX IDX_8ADC54D5A76ED395 ON questions');
        $this->addSql('ALTER TABLE questions DROP user_id');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649A76ED395');
        $this->addSql('DROP INDEX IDX_8D93D649A76ED395 ON user');
        $this->addSql('ALTER TABLE user DROP user_id');
    }
}
