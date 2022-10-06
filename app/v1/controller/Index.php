<?php
namespace app\v1\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        echo "index";
    }

    public function hello($name = 'ThinkPHP6'): string {
        return 'hello,' . $name;
    }
}
