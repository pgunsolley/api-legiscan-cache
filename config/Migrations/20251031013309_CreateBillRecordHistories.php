<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBillRecordHistories extends BaseMigration
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
            ->table('bill_record_histories')
            ->addColumn('bill_record_id', 'integer', $notNull + $unsigned)
            ->addColumn('date', 'date', $notNull)
            ->addColumn('action', 'string', $notNull)
            ->addColumn('chamber', 'string', $notNull)
            ->addColumn('chamber_id', 'integer', $notNull + $unsigned)
            ->addColumn('importance', 'integer', $notNull + $unsigned)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
