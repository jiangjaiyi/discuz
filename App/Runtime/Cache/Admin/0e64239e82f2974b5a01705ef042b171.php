<?php if (!defined('THINK_PATH')) exit();?>
<div class="pageContent">
	<form method="post" action="/discuz/index.php/Admin/Topic/insert/navTabId/liststu/callbackType/closeCurrent"  class="pageForm required-validate" 
		onsubmit="return validateCallback(this,dialogAjaxDone);"><?php  ?>
		<div class="pageFormContent" layoutH="60">
			<dl>
				<dt>版块名称：</dt>
				<dd><input type="text" class="required"  style="width:100%" name="topic_name"/></dd>
			</dl>
			
			<dl>
				<dt>版主id：</dt>
				<dd><input type="text" class="required digits" min="1" max="100" size="10" style="width:100%" name="topic_masterid"/></dd>
			</dl>
			<dl>
				<dt>版块主题：</dt>
				<dd> <textarea name="topic_profile" id="" cols="34" rows="6" class="required"></textarea>	</dd>
			</dl>
			
		</div>
		
		<div class="formBar">
			<ul>
				<li><div class="buttonActive"><div class="buttonContent"><button type="submit">保存</button></div></div></li>
				<li><div class="button"><div class="buttonContent"><button type="button" class="close">取消</button></div></div></li>
			</ul>
		</div>
	</form>
</div>