<?php
declare(strict_types=1);

use Migrations\BaseMigration;

class CreateBillRecordSponsors extends BaseMigration
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
            ->table('bill_record_sponsors')
            ->addColumn('bill_record_id', 'integer', $notNull + $unsigned)
            ->addColumn('people_id', 'integer', $notNull + $unsigned)
            ->addColumn('person_hash', 'string', $notNull)
            ->addColumn('party_id', 'string', $notNull)
            ->addColumn('state_id', 'integer', $notNull + $unsigned)
            ->addColumn('party', 'string', $notNull)
            ->addColumn('role_id', 'integer', $notNull + $unsigned)
            ->addColumn('role', 'string', $notNull)
            ->addColumn('name', 'string', $notNull)
            ->addColumn('first_name', 'string', $notNull)
            ->addColumn('middle_name', 'string', $notNull)
            ->addColumn('last_name', 'string', $notNull)
            ->addColumn('suffix', 'string', $notNull)
            ->addColumn('nickname', 'string', $notNull)
            ->addColumn('district', 'string', $notNull)
            ->addColumn('ftm_eid', 'integer', $notNull + $unsigned)
            ->addColumn('votesmart_id', 'integer', $notNull + $unsigned)
            ->addColumn('opensecrets_id', 'string', $notNull)
            ->addColumn('knowwho_pid', 'integer', $notNull + $unsigned)
            ->addColumn('ballotpedia', 'string', $notNull)
            ->addColumn('bioguide_id', 'string', $notNull)
            ->addColumn('sponsor_type_id', 'integer', $notNull + $unsigned)
            ->addColumn('sponsor_order', 'integer', $notNull + $unsigned)
            ->addColumn('committee_sponsor', 'integer', $notNull + $unsigned)
            ->addColumn('committee_id', 'integer', $notNull + $unsigned)
            ->addColumn('state_federal', 'integer', $notNull + $unsigned)
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->create();
    }
}
