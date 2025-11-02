<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBillRecords extends BaseMigration
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
            ->table('bill_records')
            ->addColumn('bill_id', 'integer', $notNull + $unsigned)
            ->addColumn('change_hash', 'string', $notNull)
            ->addColumn('session_id', 'integer', $notNull + $unsigned)
            ->addColumn('url', 'string', $notNull)
            ->addColumn('state_link', 'string', $notNull)
            ->addColumn('completed', 'integer', $notNull + $unsigned)
            ->addColumn('status', 'integer', $notNull + $unsigned)
            ->addColumn('status_date', 'date', $notNull)
            ->addColumn('state', 'string', $notNull + ['length' => 2])
            ->addColumn('state_id', 'integer', $notNull + $unsigned)
            ->addColumn('bill_number', 'string', $notNull)
            ->addColumn('bill_type', 'string', $notNull)
            ->addColumn('bill_type_id', 'string', $notNull)
            ->addColumn('body', 'string', $notNull)
            ->addColumn('body_id', 'integer', $notNull + $unsigned)
            ->addColumn('current_body', 'string', $notNull)
            ->addColumn('current_body_id', 'integer', $notNull + $unsigned)
            ->addColumn('title', 'string', $notNull)
            ->addColumn('description', 'string', $notNull)
            ->addColumn('pending_committee_id', 'integer', $notNull + $unsigned)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addIndex('bill_id')
            ->addIndex('session_id')
            ->addIndex('state_id')
            ->create();
    }
}
