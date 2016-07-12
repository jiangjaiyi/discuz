<?php
namespace Admin\Controller;

use Think\Controller;
class FileController extends CommonController {
	public function index()
	{	
		//echo U('Public/upload/');
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
}