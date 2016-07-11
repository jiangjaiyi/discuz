<?php
namespace Admin\Controller;

use Think\Controller;
class TopicController extends CommonController {
	
   public function insert()
   {	
		$model = D(CONTROLLER_NAME);
		unset( $_POST[$model->getPk()]);
		
		if (false === $model->create()) {
				$this->error(L('添加失败'));
		}
		//保存当前数据对象
		if ($result = $model->add()) { //保存成功
			// 回调接口
			if (method_exists($this, '_tigger_insert')) {
				$model->id = $result;
				$this->_tigger_insert($model);
			}
			
			//成功提示
			$this->success(L('添加成功'));
		} else {
			//失败提示
			$this->error(L('新增失败').$model->getLastSql());
		}
		
	
	}
}