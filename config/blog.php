<?php
/**
 * Created by PhpStorm.
 * Author: SpiRit-Moon
 * Time: 2019/1/14 14:58
 * Module: blog.php
 */

return [
    'name'           => "Laravel 学院",
    'title'          => "Laravel 学院",
    'subtitle'       => 'http://laravelacademy.org',
    'description'    => 'Laravel学院致力于提供优质Laravel中文学习资源',
    'author'         => '学院君',
    'page_image'     => 'home-bg.jpg',
    'posts_per_page' => 5,
    'rss_size'       => 25,
    'uploads'        => [
        'storage' => 'public',
//        'webpath' => '/storage/app/public/UploadTest',
        'webpath' => '/storage/UploadTest',
    ],
    'contact_email'  => env('MAIL_FROM'),
];