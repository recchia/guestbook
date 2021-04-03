<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210402233236 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO admin (id, username, roles, password) VALUES (nextval('admin_id_seq'), 'admin', '[\"ROLE_ADMIN\"]',   '\$argon2id\$v=19\$m=65536,t=4,p=1\$zC1pA92p/tBNXwbXhP6rpw\$zlCx3E5Tp/+krBGNK7UMsClvKbBNAEvwrppgFfNkFns')");

    }

    public function down(Schema $schema) : void
    {
        $this->addSql("DELETE FROM admin WHERE username = 'admin' ");

    }
}
