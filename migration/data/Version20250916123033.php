<?php

declare(strict_types=1);

namespace OxidEsales\ExtendUser\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\DBAL\Types\Types;
use Doctrine\Migrations\AbstractMigration;

final class Version20250916123033 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $platform = $this->connection->getDatabasePlatform();
        $platform->registerDoctrineTypeMapping('enum', 'string');

        $user = $schema->getTable('oxuser');

        if (!$user->hasColumn('OE_EXTENDUSERFORM_FLOOR')) {
            $user->addColumn(
                'OE_EXTENDUSERFORM_FLOOR',
                Types::STRING,
                ['columnDefinition' => 'varchar(255)']
            );
        }
    }

    public function down(Schema $schema): void
    {
    }
}
