<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBillRecordSasts extends BaseMigration
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
            ->table('bill_record_sasts')
            ->addColumn('bill_record_id', 'integer', $notNull + $unsigned)
            ->addColumn('type_id', 'integer', $notNull + $unsigned)
            ->addColumn('type', 'string', $notNull)
            ->addColumn('sast_bill_number', 'string', $notNull)
            ->addColumn('sast_bill_id', 'integer', $notNull + $unsigned)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addForeignKey('bill_record_id', 'bill_records')
            ->addIndex('type_id')
            ->addIndex('sast_bill_id')
            ->create();
    }
}
