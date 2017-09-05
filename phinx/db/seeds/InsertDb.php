<?php


use Phinx\Seed\AbstractSeed;

class InsertDb extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $dataAdmin = ['admin_name'    => 'vanhuy',
                'admin_pass'    => '123456',
                'created' => date('Y-m-d H:i:s') ];
        $posts = $this->table('admin');
        $posts->insert($dataAdmin)->save();

        $datacCategory = 
        [
                ['category_title'    => 'LẬP TRÌNH',
                'category_description'    => '123456'],
                ['category_title'    => 'GIÁO DỤC',
                'category_description'    => '123456'],
                ['category_title'    => 'CÔNG NGHỆ',
                'category_description'    => '123456'],  
        ];
        
        $category = $this->table('category');
        $category->insert($datacCategory)->save();

        $datacListPost = 
        [
                ['list_post_title'    => 'Php cơ bản',
                'list_post_description'    => '123456',
                'list_post_status'    => '1',
                'list_post_admin_id'    => '1',
                'list_post_category_id'    => '1',
                'list_post_created'    => date('Y-m-d H:i:s')],
                ['list_post_title'    => 'Php nâng cao',
                'list_post_description'    => '123456',
                'list_post_status'    => '1',
                'list_post_admin_id'    => '1',
                'list_post_category_id'    => '1',
                'list_post_created'    => date('Y-m-d H:i:s')],
                ['list_post_title'    => 'Php - Mysql ',
                'list_post_description'    => '123456',
                'list_post_status'    => '1',
                'list_post_admin_id'    => '1',
                'list_post_category_id'    => '1',
                'list_post_created'    => date('Y-m-d H:i:s')],
                ['list_post_title'    => 'Php OOP + MVC',
                'list_post_description'    => '123456',
                'list_post_status'    => '1',
                'list_post_admin_id'    => '1',
                'list_post_category_id'    => '1',
                'list_post_created'    => date('Y-m-d H:i:s')],
        ];

        $listPost = $this->table('list_post');
        $listPost->insert($datacListPost)->save();

        $dataPost = [
            [
                'post_title'    => 'Php cơ bản - Bài 1:giới thiệu',
                'post_description'    => '123456',
                'post_content'    => '123456',
                'post_view'    => 0,
                'post_status'    => '1',
                'post_dateposted'    => date('Y-m-d H:i:s'),
                'post_admin_id'    => '1',
                'post_list_id'    => '1',
                
            ],
            [
                'post_title'    => 'Php cơ bản - Bài 2:ứng dụng đầu tiên',
                'post_description'    => '123456',
                'post_content'    => '123456',
                'post_view'    => 0,
                'post_status'    => '1',
                'post_dateposted'    => date('Y-m-d H:i:s'),
                'post_admin_id'    => '1',
                'post_list_id'    => '1',
                
            ],
            [
                'post_title'    => 'Php cơ bản - Bài 3:Khai báo biến',
                'post_description'    => '123456',
                'post_content'    => '123456',
                'post_view'    => 0,
                'post_status'    => '1',
                'post_dateposted'    => date('Y-m-d H:i:s'),
                'post_admin_id'    => '1',
                'post_list_id'    => '1',
                
            ],
        ];
        $post = $this->table('post');
        $post->insert($dataPost)->save();

        // $img_post = $this->table('img_post');
        // $img_post->insert($data)->save();

        // $keyword = $this->table('keyword');
        // $keyword->insert($data)->save();

    }
}
