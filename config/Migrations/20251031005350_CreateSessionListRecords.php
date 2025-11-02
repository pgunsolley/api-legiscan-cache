<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateSessionListRecords extends BaseMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/migrations/4/en/migrations.html#the-change-method
     *
     * @return void
     */
    public function change(): void
    {
        $notNull = ['null' => false, 'default' => null];
        $unsignedInt = ['signed' => false];

        $this
            ->table('session_list_records')
            ->addColumn('session_id', 'integer', $unsignedInt + $notNull)
            ->addColumn('state_id', 'integer', $unsignedInt + $notNull)
            ->addColumn('state_abbr', 'string', $notNull + ['length' => 2])
            ->addColumn('year_start', 'integer', $unsignedInt + $notNull)
            ->addColumn('year_end', 'integer', $unsignedInt + $notNull)
            ->addColumn('prefile', 'integer', $unsignedInt + $notNull)
            ->addColumn('sine_die', 'integer', $unsignedInt + $notNull)
            ->addColumn('prior', 'integer', $unsignedInt + $notNull)
            ->addColumn('special', 'integer', $unsignedInt + $notNull)
            ->addColumn('session_tag', 'string', $notNull)
            ->addColumn('session_title', 'string', $notNull)
            ->addColumn('session_name', 'string', $notNull)
            ->addColumn('dataset_hash', 'string', $notNull)
            ->addColumn('session_hash', 'string', $notNull)
            ->addColumn('name', 'string', $notNull)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addIndex('session_id')
            ->addIndex('state_id')
            ->create();
    }
}
