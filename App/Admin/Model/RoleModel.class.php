<?php

namespace Admin\Model;

	use Think\Model;

	class RoleModel extends Model{  
		
		 protected $_validate = array(
		 	 array('role_name','require','角色名称不能为空！'), //用户名不能为空
		 	 array('role_name','','角色名称已经存在！',0,'unique',1) 

		 	);

	
 }