<?php


use Phinx\Migration\AbstractMigration;

class CreateTableUser extends AbstractMigration
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
        $tableAdmin=$this-> table('wtv_user',['id' => false, 'primary_key' => ['user_id']]);
        $tableAdmin
                ->addColumn('user_id','integer')
                ->addColumn('user_code','string',['limit'=>100,'null'=>false])
                ->addColumn('user_user_name','string',['limit'=>64,'null'=>false])
                ->addColumn('user_user_pass','string',['limit'=>64,'null'=>false])
                ->addColumn('user_phone','string',['limit'=>20,'null'=>false])
                ->addColumn('user_email','string',['limit'=>100,'null'=>false])
                ->addColumn('user_first_name','string',['limit'=>32,'null'=>false])
                ->addColumn('user_last_name','string',['limit'=>32,'null'=>false])
                ->addColumn('user_full_name','string',['limit'=>64,'null'=>false])
                ->addColumn('user_url_image','string',['limit'=>100,'null'=>true])
                ->addColumn('user_url_background_info_page','string',['limit'=>100,'null'=>true])
                ->addColumn('user_private','string',['limit'=>16])
                ->addColumn('user_status','boolean',['default' => 0,'null' => true])
                ->addColumn('created','date')
                ->save();
    }
}
