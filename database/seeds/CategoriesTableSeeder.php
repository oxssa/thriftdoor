<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'order' => 2,
                'name' => 'Elektronik',
                'slug' => 'elektronik',
                'created_at' => '2020-07-08 13:46:37',
                'updated_at' => '2020-07-11 17:39:06',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'order' => 1,
                'name' => 'Fashion',
                'slug' => 'fashion',
                'created_at' => '2020-07-08 13:46:38',
                'updated_at' => '2020-07-11 17:38:13',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'order' => 3,
                'name' => 'Sneakers',
                'slug' => 'sneakers',
                'created_at' => '2020-07-11 17:40:17',
                'updated_at' => '2020-07-11 17:40:17',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 1,
                'order' => 4,
                'name' => 'Handphone',
                'slug' => 'handphone',
                'created_at' => '2020-07-11 17:40:54',
                'updated_at' => '2020-07-11 17:40:54',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 4,
                'order' => 5,
                'name' => 'Iphone',
                'slug' => 'iphone',
                'created_at' => '2020-07-12 06:17:20',
                'updated_at' => '2020-07-12 06:17:20',
            ),
        ));
        
        
    }
}