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

	public function edit() 
	{
		$model = M(CONTROLLER_NAME);
		$id = $_REQUEST['id'];
		$vo = $model->find($id);
		$this->assign('vo', $vo);
		$this->display('edit');
	}

	public function update() 
	{
		$model = D(CONTROLLER_NAME);
		
		if(false === $model->create()) {
			$this->error($model->getError());
		}
		// 更新数据
		
		if(false !== $model->save()) {
			// 回调接口
			if (method_exists($this, '_tigger_update')) {
				$this->_tigger_update($model);
			}
			//成功提示
			
			$this->success(L('更新成功'));
		} else {
			//错误提示
			$this->error(L('更新失败'));
		}
	}
	

	public function del() {
		//删除指定记录
		$model = M(CONTROLLER_NAME);
		if (!empty($model)) {
			$pk = $model->getPk();
			$id = $_REQUEST['id'];
			if ($id !== "undefined") {
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
}