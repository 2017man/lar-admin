<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Grid;
use App\User;

class HomeController extends Controller {
    public function index(Content $content) {
        //填写页面头标题
        $content->header('Dashboard');
        //填写页面描述小标题
        $content->description('Description...');
        // 添加面包屑导航 since v1.5.7
//        $content->breadcrumb(
//            ['text' => '首页', 'url' => '/'],
//            ['text' => '用户管理', 'url' => '/users'],
//            ['text' => '编辑用户']
//        );
        //laravel-admin的布局使用bootstrap的栅格系统，每行的长度是12，下面是几个简单的示例：
        $content->row(Dashboard::title())
            ->row(function (Row $row) {
                
                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::environment());
                });
                
                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::extensions());
                });
                
                $row->column(4, function (Column $column) {
                    $column->append(Dashboard::dependencies());
                });
            });
        return $content;
    }
}
