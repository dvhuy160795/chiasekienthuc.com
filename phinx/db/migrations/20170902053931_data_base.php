<?php


use Phinx\Migration\AbstractMigration;

class DataBase extends AbstractMigration
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
        $tableAdmin=$this-> table('admin');
        $tableAdmin
                ->addColumn('admin_name','string',array('limit'=>20))
                ->addColumn('admin_pass','string',array('limit'=>20))
                ->addColumn('created','date')
                ->save();

        $tableTypeVideo=$this->table('category')
                ->addColumn('category_title','string',array('limit'=>20))
                ->addColumn('category_description','string',array('limit'=>100))
                ->save();

        $tableListPost=$this->table('list_post')
                ->addColumn('list_post_title','string',array('limit'=>20))
                ->addColumn('list_post_description','string',array('limit'=>100))
                ->addColumn('list_post_status','integer')
                ->addColumn('list_post_admin_id','integer')
                ->addColumn('list_post_category_id','integer')
                ->addColumn('list_post_created','date')
                ->save();

        $tablePost=$this->table('post')
                ->addColumn('post_title','string',array('limit'=>200))
                ->addColumn('post_description','string',['limit'=>400])
                ->addColumn('post_content','string',['limit'=>5000])
                ->addColumn('post_view','integer')
                ->addColumn('post_status','integer')
                ->addColumn('post_dateposted','date')
                ->addColumn('post_admin_id','integer')
                ->addColumn('post_list_id','integer')
                ->save();
        $tableKeyWord=$this->table('img_post')
                ->addColumn('img_post_url','string',array('limit'=>100))
                ->addColumn('img_post_id','integer')
                ->save();
        $tableKeyWord=$this->table('keyword')
                ->addColumn('keyword','string',array('limit'=>32))
                ->addColumn('keyword_id','integer')
                ->save();

    }
}
