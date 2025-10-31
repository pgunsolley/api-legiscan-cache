<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBillRecordCalendars extends BaseMigration
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
            ->table('bill_record_calendars')
            ->addColumn('bill_record_id', 'integer', $notNull + $unsigned)
            ->addColumn('type_id', 'integer', $notNull + $unsigned)
            ->addColumn('event_hash', 'string', $notNull)
            ->addColumn('type', 'string', $notNull)
            ->addColumn('date', 'date', $notNull)
            ->addColumn('time', 'time', $notNull)
            ->addColumn('location', 'string', $notNull)
            ->addColumn('description', 'string', $notNull)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
