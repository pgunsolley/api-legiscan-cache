<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBillRecordTexts extends BaseMigration
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
            ->table('bill_record_texts')
            ->addColumn('bill_record_id', 'integer', $notNull + $unsigned)
            ->addColumn('doc_id', 'integer', $notNull + $unsigned)
            ->addColumn('date', 'date', $notNull)
            ->addColumn('type', 'string', $notNull)
            ->addColumn('type_id', 'integer', $notNull + $unsigned)
            ->addColumn('mime', 'string', $notNull)
            ->addColumn('mime_id', 'integer', $notNull + $unsigned)
            ->addColumn('url', 'string', $notNull)
            ->addColumn('state_link', 'string', $notNull)
            ->addColumn('text_size', 'integer', $notNull + $unsigned)
            ->addColumn('text_hash', 'string', $notNull)
            ->addColumn('alt_bill_text', 'integer', $notNull + $unsigned)
            ->addColumn('alt_mime', 'string', $notNull)
            ->addColumn('alt_mime_id', 'integer', $notNull + $unsigned)
            ->addColumn('alt_state_link', 'string', $notNull)
            ->addColumn('alt_text_size', 'integer', $notNull + $unsigned)
            ->addColumn('alt_text_hash', 'string', $notNull)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
