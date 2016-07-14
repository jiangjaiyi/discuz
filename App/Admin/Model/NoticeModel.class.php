<?php

namespace Admin\Model;

	use Think\Model;

	class NoticeModel extends Model{  
		
		 protected $_validate = array(
		 	 array('notice_content','require','内容不能为空！') //用户名不能为空
		 	
		 	);

		
 }