<?php
namespace Admin\Controller;

use Think\Controller;

class MemberController extends CommonController {
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
			
			$id = ltrim($id,'用户ID,');
		
				//批量删除
				$condition = array($pk => array('in', explode(',', $id)));
				$model->where($condition)->delete();
				$data['id'] = $id;
				$this->ajaxReturn($data);
		}
	}

	public function insert()
	{
		Date_default_timezone_set('Etc/GMT-8');
		$_POST['member_addtime'] = date('Y-m-d H:i:s',time());
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
	public function ban()
	{
		$model = D(CONTROLLER_NAME);
		
		$data['member_state'] =2; 
		if(false !== $model->where("member_id={$_REQUEST['id']}")->save($data)) {
			// 回调接口
			if (method_exists($this, '_tigger_update')) {
				$this->_tigger_update($model);
			}
			
			//成功提示
			$this->success(L('更新状态成功'));
		} else {
			//错误提示
			$this->error(L('更新状态失败'));
		}
	}
}