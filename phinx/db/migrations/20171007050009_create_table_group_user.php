<?php


use Phinx\Migration\AbstractMigration;

class CreateTableGroupUser extends AbstractMigration
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
        $tableAdmin=$this-> table('wtv_group_user',['id' => false, 'primary_key' => ['group_user_id']]);
        $tableAdmin
                ->addColumn('group_user_id','integer')
                ->addColumn('group_user_group_code','string',['limit'=>100,'null'=>false])
                ->addColumn('group_user_group_name','string',['limit'=>100,'null'=>false])
                ->addColumn('created','date')
                ->save();
    }
}
