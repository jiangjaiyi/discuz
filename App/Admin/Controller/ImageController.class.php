<?php
namespace Admin\Controller;

use Think\Controller;
class ImageController extends CommonController {
	public function index()
	{
		$model = D('image');
		$this->assign('list',$model->select());
		//dump($model->select());
		$this->display();
	}
}