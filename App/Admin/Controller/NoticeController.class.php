<?php
namespace Admin\Controller;

use Think\Controller;

class NoticeController extends CommonController {
   public function edit() {
		$model = D(CONTROLLER_NAME);
		$id = $_REQUEST['id'];
		$vo = $model->find($id);
		$this->assign('vo', $vo);
		$this->display('edit');
	}
	public function del() 
	{
		//删除指定记录
		$model = M(CONTROLLER_NAME);
		if (!empty($model)) {
			$pk = $model->getPk();
			$id = $_REQUEST['id'];
			
			if ($id !== 'undefined') {
				//批量删除
				$condition = array($pk => array('in', explode(',', $id)));
				if (false !== $model->where($condition)->delete()) {
					$this->success(L('删除成功'));
				} else {
					$this->error(L('删除失败'));
				}
			} else {
				$this->error('非法操作');
			}
		}
	}

	public function insert()
	{
		Date_default_timezone_set('Etc/GMT-8');
		$_POST['notice_time'] = date('Y-m-d',time());
		$model = D(CONTROLLER_NAME);
		unset( $_POST[$model->getPk()]);
		
		if (false === $model->create()) {
			$this->error($model->getError());
		}
		//保存当前数据对象
		if ($result = $model->add()) { //保存成功
			// 回调接口
			if (method_exists($this, '_tigger_insert')) {
				$model->id = $result;
				$this->_tigger_insert($model);
			}
			
			//成功提示
			 $this->success(L('新增成功'));
		} else {
			//失败提示
			$this->error(L('新增失败').$model->getLastSql());
		}
		
	
	}

	// public function upload()
	// {
	// 	import('ORG.Net.UploadFile');
	// 	$upload = new \Think\upload;
	// 	$upload->maxSize  = 3145728 ;// 设置附件上传大小
 //        $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
 //        $upload->savePath =  '__PUBLIC__/Uploads/';// 设置附件上传目录
 //        $upload->saveRule = date('ymdHis',time()).'_'.mt_rand().$info[0]['extension'];//上传文件的保存规则
 //        $upload->uploadReplace = true;//存在同名文件是否是覆盖
 //        $upload->thumbRemoveOrigin = false; //生成缩略图后是否删除原图
 //        $upload->thumb = true; //是否需要对图片文件进行缩略图处理，默认为false
 //        $upload->thumbMaxWidth = '180'; //上传最大宽度
 //        $upload->thumbMaxHeight = '150'; //上传最大高度
 //        $upload->thumbPrefix = 'm_';  //文件前缀
 //        	$User->user_imgsrc = date('ym',time()).'_'.mt_rand().'.'.$info[0]['extension'];
	//         $User->savepath =$info[0]['savepath'].$User->user_imgsrc;
	        
 //          	$User->imgsrc =I('user_imgsrc');

	// 		$data = $User->add(); // 写入用户数据到数据库
	// 		// $this->success('数据保存成功！');
	// }
}