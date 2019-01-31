<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2019/1/23 15:26
 * Module: TagsTableSeeder.php
 */

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::truncate();// 先清理表数据

        factory(Tag::class, 5)->create();//一次填充20篇文章
    }
}