<?php

namespace Admin\Model;

	use Think\Model;

	class MemberModel extends Model{  
		
		 protected $_validate = array(
		 	 array('member_name','require','用户名称不能为空！'), //用户名不能为空
		 	  array('member_name','','用户称已经存在！',0,'unique',1), 
		 	  array('member_pass','require','密码不能为空！'),
		 	  array('member_age','require','年龄不能为空！'),
		 	 array('member_email','require','Email不能为空！'), //用户名不能为空
		 	 array('member_address','require','地址不能为空！') //用户名不能为空
		 	 // // array('username','/^\d{1,3}$/','用户名格式不正确！'), //用户名不能为空
		 	 // array('username','','帐号名称已经存在！',0,'unique',1), //账户是否已经存在 
		 	 // array('repass','pass','密码不一致',0,'confirm'),//密码是否一致


		 	);

		//2 自动完成    
		protected $_auto = array (   
		// 1 添加 2 修改 3 添加 修改       
		// array('status','0'),  // 新增的时候把status字段设置为1  
			
		array('member_pass','md5',1,'function') , // 对password字段在新增和编辑的时候使md5函数处理   
		
		// array('member_addtime','time',1,'function'), //对update_time字段在添加的时候写入当前时间戳     
   );
		
		// //3 字段映射  隐藏表里面的实际字段名 
		// protected $_map = array(
		// 	'xxoo' =>"member_name",//xxoo是表单的字段名 username是表的字段名
		// );
 }