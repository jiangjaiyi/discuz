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


	public function upload()
	{
		$config = array(    
			'maxSize'    =>    0,
			'rootPath' 	 => 	'./Public/Uploads/',
			'savePath'   =>    '',    
			'saveName'   =>    array('uniqid',''),    
			'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),    
			'autoSub'    =>    true,    
			'subName'    =>    array('date','Ymd'),
			);

		$upload = new \Think\Upload($config);
		$info   =   $upload->upload();

		if (!$info) {  
		$this->error($upload->getError());
		} else {    
			foreach ($info as $file){
				$image = new \Think\Image();
				$image->open("./Public/Uploads/".$file['savepath'].$file['savename']); 
				$image->thumb(300, 300)->save("./Public/Uploads/".$file['savepath']."s_".$file['savename']);

				$data['image_nid'] = 3;
				$data['image_src'] = rtrim($file['savepath'],'/');
				$data['image_name'] = $file['savename'];

				$model = M('image');
				$model->create($data);
				$model->add();
				}
		}
		$this->success("文件上传成功");
	}


	public function del() 
	{
		//删除指定记录
		$model = M(CONTROLLER_NAME);
		if (!empty($model)) {
			$pk = $model->getPk();
			$id = $_REQUEST[$pk];


			if (isset($id)) {
				$image = $model->where("image_id={$id}")->select();
				
				@unlink("./Public/Uploads/".$image[0]['image_src']."/".$image[0]['image_name']);	
				@unlink("./Public/Uploads/".$image[0]['image_src']."/s_".$image[0]['image_name']);	
				$model->where("image_id={$id}")->delete();
				$data['id'] = $id;  
				//$this->ajaxReturn($data); 
				// $this->display('index');
				$this->success('删除成功');
			} else {
				$this->error('非法操作');
			}
		}
	}
}