<?php
namespace Admin\Controller;

use Think\Controller;

class AccessController extends CommonController {

	public function index() 
	{
		
	   $model = M('user');
		$list =  $model->select();
		
		foreach($list as $k=>$v){
			$data[$k] = $model->query("select r.role_name from user_role ur,role r where ur.rid=r.role_id and ur.uid=".$v['user_id']);
			
			}
            foreach($data as $k=>$v){
                foreach($v as $val){
                	$list[$k]['user_roles'] = $val['role_name'];
                }
	         }
		$this->assign('list', $list);
		$this->display();
		return;
	}
  
	public function rolelist($uid=0)
	{
		$user = M('user')->find($uid);
		$this->assign('user',$user); 

		$rolelist = M('role')->select();
		$this->assign('rolelist',$rolelist); 

		$list = M("user_role")->where("uid=".$uid)->select();
		 $rids=array();
        foreach($list as $v){
            $rids[]=$v['rid']; 
        }

		$this->assign("rids",$rids);

		$this->display('rolelist');
	}

	public function saverole()
	{
		$mod = M("user_role");
		$mod->where("uid=".$_POST['user_id'])->delete();
        if(is_array($_POST['rid'])){
            foreach($_POST['rid'] as $v){
                $data['uid']=$_POST['user_id'];
                $data['rid']=$v;
                $mod->add($data);
            }
        }
        $this->success("添加成功");
	}
	  

}