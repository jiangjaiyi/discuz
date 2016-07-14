<?php

namespace Admin\Model;

	use Think\Model;

	class AdModel extends Model{  
		
		 protected $_validate = array(
		 	 array('ad_title','require','标题不能为空！'), 
		 	  array('ad_link','require','链接不能为空！'),
		 	 array('ad_content','require','广告内容不能为空！') 
		 	
		 	);

		
 }