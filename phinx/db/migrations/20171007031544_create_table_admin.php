<?php


use Phinx\Migration\AbstractMigration;

class CreateTableAdmin extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $tableAdmin=$this-> table('wtv_admin',['id' => false, 'primary_key' => ['admin_id']]);
        $tableAdmin
                ->addColumn('admin_id','integer')
                ->addColumn('admin_code','string',['limit'=>100,'null' => false])
                ->addColumn('admin_user_name','string',['limit'=>64,'null' => false])
                ->addColumn('admin_user_pass','string',['limit'=>64,'null' => false])
                ->addColumn('admin_email','string',['limit'=>100,'null' => true])
                ->addColumn('admin_phone','string',['limit'=>20,'null' => true])
                ->addColumn('admin_private','string',['limit'=>16,'null' => true])
                ->addColumn('admin_status','boolean',['default' => 0,'null' => true])
                ->addColumn('created','date')
                ->save();
    }
}
