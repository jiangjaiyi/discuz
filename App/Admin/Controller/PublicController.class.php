<?php
namespace Admin\Controller;

use Think\Controller;

class PublicController extends CommonController {
    public function login(){
        $this->display('login');
    }
}