<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBillRecordSubjects extends BaseMigration
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
            ->table('bill_record_subjects')
            ->addColumn('bill_record_id', 'integer', $notNull + $unsigned)
            ->addColumn('subject_id', 'integer', $notNull + $unsigned)
            ->addColumn('subject_name', 'string', $notNull)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->addForeignKey('bill_record_id', 'bill_records')
            ->addIndex('subject_id')
            ->create();
    }
}
