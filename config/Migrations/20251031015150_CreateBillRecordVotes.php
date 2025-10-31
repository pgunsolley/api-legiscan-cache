<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBillRecordVotes extends BaseMigration
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
            ->table('bill_record_votes')
            ->addColumn('bill_record_id', 'integer', $notNull + $unsigned)
            ->addColumn('roll_call_id', 'integer', $notNull + $unsigned)
            ->addColumn('date', 'date', $notNull)
            ->addColumn('desc', 'string', $notNull)
            ->addColumn('yea', 'integer', $notNull + $unsigned)
            ->addColumn('nay', 'integer', $notNull + $unsigned)
            ->addColumn('nv', 'integer', $notNull + $unsigned)
            ->addColumn('absent', 'integer', $notNull + $unsigned)
            ->addColumn('total', 'integer', $notNull + $unsigned)
            ->addColumn('passed', 'integer', $notNull + $unsigned)
            ->addColumn('chamber', 'string', $notNull)
            ->addColumn('chamber_id', 'integer', $notNull + $unsigned)
            ->addColumn('url', 'string', $notNull)
            ->addColumn('state_link', 'string', $notNull)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
