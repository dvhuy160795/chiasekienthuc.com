<?php


use Phinx\Migration\AbstractMigration;

class CreateTabbleVideo extends AbstractMigration
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
        $tableAdmin=$this-> table('wtv_video',['id' => false, 'primary_key' => ['video_id']]);
        $tableAdmin
                ->addColumn('video_id','integer')
                ->addColumn('video_code','string',['limit'=>100,'null'=>false])
                ->addColumn('video_title','string',['limit'=>300,'null'=>false])
                ->addColumn('video_url_image','string',['limit'=>1000,'null'=>false])
                ->addColumn('video_url_video','string',['limit'=>1000,'null'=>false])
                ->addColumn('video_keyword','string',['limit'=>1000,'null'=>true])
                ->addColumn('video_view','integer',['default'=> 0])
                ->addColumn('video_like','integer',['default'=> 0])
                ->addColumn('video_user_code','string',['limit'=>100,'null'=>false])
                ->addColumn('video_status_public','boolean',['null'=>true])
                ->addColumn('video_status_reposted','boolean',['null'=>true])
                ->addColumn('video_status_process_reported','boolean',['null'=>true])
                ->addColumn('video_status_deleted','boolean',['default' => false,'null' => true])
                ->addColumn('video_created_datetime','datetime',['null' => false])
                ->addColumn('video_edited_datetime','datetime',['null' => true])
                ->save();
    }
}
