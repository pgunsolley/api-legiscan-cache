<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBillRecordSessions extends BaseMigration
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
            ->table('bill_record_sessions')
            ->addColumn('bill_record_id', 'integer', $notNull + $unsigned)
            ->addColumn('state_id', 'integer', $notNull + $unsigned)
            ->addColumn('year_start', 'integer', $notNull + $unsigned)
            ->addColumn('year_end', 'integer', $notNull + $unsigned)
            ->addColumn('prefile', 'integer', $notNull + $unsigned)
            ->addColumn('sine_die', 'integer', $notNull + $unsigned)
            ->addColumn('prior', 'integer', $notNull + $unsigned)
            ->addColumn('special', 'integer', $notNull + $unsigned)
            ->addColumn('session_tag', 'string', $notNull)
            ->addColumn('session_title', 'string', $notNull)
            ->addColumn('session_name', 'string', $notNull)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addForeignKey('bill_record_id', 'bill_records')
            ->addIndex('state_id')
            ->create();
    }
}
