<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBillRecordAmendments extends BaseMigration
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
            ->table('bill_record_amendments')
            ->addColumn('bill_record_id', 'integer', $notNull + $unsigned)
            ->addColumn('amendment_id', 'integer', $notNull + $unsigned)
            ->addColumn('adopted', 'integer', $notNull + $unsigned)
            ->addColumn('chamber', 'string', $notNull)
            ->addColumn('chamber_id', 'integer', $notNull + $unsigned)
            ->addColumn('date', 'date', $notNull)
            ->addColumn('title', 'string', $notNull)
            ->addColumn('description', 'string', $notNull)
            ->addColumn('mime', 'string', $notNull)
            ->addColumn('mime_id', 'integer', $notNull + $unsigned)
            ->addColumn('url', 'string', $notNull)
            ->addColumn('state_link', 'string', $notNull)
            ->addColumn('amendment_size', 'integer', $notNull + $unsigned)
            ->addColumn('amendment_hash', 'string', $notNull + $unsigned)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
