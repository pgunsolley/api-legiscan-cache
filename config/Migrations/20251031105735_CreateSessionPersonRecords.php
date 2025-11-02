<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateSessionPersonRecords extends BaseMigration
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
        $notNull = ['default' => null, 'null' => false];
        $unsigned = ['signed' => false];

        $this
            ->table('session_person_records')
            ->addColumn('session_id', 'integer', $notNull + $unsigned)
            ->addColumn('state_id', 'integer', $notNull + $unsigned)
            ->addColumn('year_start', 'integer', $notNull + $unsigned)
            ->addColumn('year_end', 'integer', $notNull + $unsigned)
            ->addColumn('prefile', 'integer', $notNull + $unsigned)
            ->addColumn('sine_die', 'integer', $notNull + $unsigned)
            ->addColumn('prior', 'integer', $notNull + $unsigned)
            ->addColumn('special', 'integer', $notNull + $unsigned)
            ->addColumn('session_tag', 'string', $notNull)
            ->addColumn('session_tile', 'string', $notNull)
            ->addColumn('session_name', 'string', $notNull)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addIndex('session_id')
            ->addIndex('state_id')
            ->create();
    }
}
