<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateSupplementRecords extends BaseMigration
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
            ->table('supplement_records')
            ->addColumn('supplement_id', 'integer', $notNull + $unsigned)
            ->addColumn('bill_id', 'integer', $notNull + $unsigned)
            ->addColumn('date', 'date', $notNull)
            ->addColumn('type_id', 'integer', $notNull + $unsigned)
            ->addColumn('type', 'string', $notNull)
            ->addColumn('title', 'string', $notNull)
            ->addColumn('description', 'string', $notNull)
            ->addColumn('mime', 'string', $notNull)
            ->addColumn('mime_id', 'integer', $notNull + $unsigned)
            ->addColumn('url', 'string', $notNull)
            ->addColumn('state_link', 'string', $notNull)
            ->addColumn('supplement_size', 'integer', $notNull + $unsigned)
            ->addColumn('supplement_hash', 'string', $notNull)
            ->addColumn('doc', 'string', $notNull)
            ->addColumn('alt_supplement', 'integer', $notNull + $unsigned)
            ->addColumn('alt_mime', 'string', $notNull)
            ->addColumn('alt_mime_id', 'integer', $notNull + $unsigned)
            ->addColumn('alt_state_link', 'string', $notNull)
            ->addColumn('alt_supplement_size', 'integer', $notNull + $unsigned)
            ->addColumn('alt_supplement_hash', 'string', $notNull)
            ->addColumn('alt_doc', 'string', $notNull)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
