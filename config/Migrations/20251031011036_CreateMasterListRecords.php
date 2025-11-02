<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateMasterListRecords extends BaseMigration
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
        $unsigned = ['signed' => false];
        $notNull = ['default' => null, 'null' => false];

        $this
            ->table('master_list_records')
            ->addColumn('bill_id', 'integer', $notNull + $unsigned)
            ->addColumn('number', 'string', $notNull)
            ->addColumn('change_hash', 'string', $notNull)
            ->addColumn('url', 'string', $notNull)
            ->addColumn('status_date', 'date', $notNull)
            ->addColumn('status', 'integer', $unsigned + $notNull)
            ->addColumn('last_action_date', 'date', $notNull)
            ->addColumn('last_action', 'string', $notNull)
            ->addColumn('title', 'string', $notNull)
            ->addColumn('description', 'string', $notNull)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addIndex('bill_id')
            ->addIndex('number')
            ->create();
    }
}
