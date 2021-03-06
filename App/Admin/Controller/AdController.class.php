<?php
namespace Admin\Controller;

use Think\Controller;

class AdController extends CommonController {
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

	
}