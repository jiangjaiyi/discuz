<?php
namespace Admin\Controller;

use Think\Controller;

class RoleController extends CommonController {
	public function index() 
	{
	   $model = M('role');
		$list =  $model->select();

		
		foreach($list as $k=>$v){
			$data[$k] = $model->query("select n.node_name from role_node rn,node n where rn.nid=n.node_id and rn.rid=".$v['role_id']);
			
			}
            foreach($data as $k=>$v){
 				$ar = array();
                foreach($v as $val){
                	 $ar[] = $val['node_name'];
                }
                  $list[$k]['role_remark']=implode(",",$ar);
	         }
		$this->assign('list', $list);
		$this->display();
		return;
	}
	
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

	public function nodelist($rid=0)
	{
		$role = M("role")->find($rid); 
		$this->assign("role",$role);
		
		//2. 获取所有节点信息
		$nodelist = M("node")->select();
		$this->assign("nodelist",$nodelist);
		
		//3. 获取当前角色的节点信息
		$list = M("role_node")->where("rid={$rid}")->select();
		//对获取的结果进行处理
		$node=array();
		foreach($list as $v){
			$node[]=$v['nid'];
		}
		$this->assign("node",$node);
		
		$this->display("nodelist");
	}

	public function savenode(){
		$rid = $_POST['role_id'];

		//删除当前角色的所有节点信息
		$m = M("role_node");
		$m->where("rid={$rid}")->delete();
		
		//将当前选择的节点信息添加上去
		
		if(!empty($_POST['nid'])){
			foreach($_POST['nid'] as $nid){
				$data['rid']=$rid;
				$data['nid']=$nid;
				$m->add($data);
			}
		}
		$this->success("修改成功！");
	}
}