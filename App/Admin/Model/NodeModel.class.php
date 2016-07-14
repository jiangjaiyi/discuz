<?php

namespace Admin\Model;

	use Think\Model;

	class NodeModel extends Model{  
		
		 protected $_validate = array(
		 	 array('node_name','require','节点名称不能为空！'), //用户名不能为空
		 	 array('node_name','','节点名称已经存在！',0,'unique',1) 

		 	);

	
 }