<?php


use Phinx\Migration\AbstractMigration;

class CreateTableUserJoinGroup extends AbstractMigration
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
        $tableAdmin=$this-> table('wtv_user_join_group',['id' => false, 'primary_key' => ['user_join_group_id']]);
        $tableAdmin
                ->addColumn('user_join_group_id','integer')
                ->addColumn('user_join_group_group_user_code','string',['limit'=>100])
                ->addColumn('user_join_group_user_code','string',['limit'=>100])
                ->addColumn('user_join_group_time_user_join_group','datetime')
                ->addColumn('user_join_group_time_user_out_group','datetime')
                ->addColumn('created','date')
                ->save();
    }
}
