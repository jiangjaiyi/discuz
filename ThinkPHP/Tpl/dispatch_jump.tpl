<?php
    if(C('LAYOUT_ON')) {
        echo '{__NOLAYOUT__}';
    }
?>
<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>跳转提示</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="__PUBLIC__/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="__PUBLIC__/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="__PUBLIC__/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="__PUBLIC__/media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="__PUBLIC__/media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="__PUBLIC__/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="__PUBLIC__/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="__PUBLIC__/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<!-- BEGIN PAGE LEVEL STYLES -->

	<link href="__PUBLIC__/media/css/error.css" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="__PUBLIC__/media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	<include file="Index/head" />

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        

			<ul class="page-sidebar-menu">

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				<li>

				</li>

				<li class="start">

					<a href="__MODULE__/Index/index">

					<i class="icon-home"></i> 

					<span class="title">控制台</span>

					<span class="selected"></span>

					</a>

				</li>


				<li class="">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">权限管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="__MODULE__/Access/index">

							Basic Tables</a>

						</li>

						<li >

							<a href="table_responsive.html">

							Responsive Tables</a>

						</li>

						<li >

							<a href="table_managed.html">

							Managed Tables</a>

						</li>

						<li >

							<a href="table_editable.html">

							Editable Tables</a>

						</li>

						<li >

							<a href="table_advanced.html">

							Advanced Tables</a>

						</li>

					</ul>

				</li>

				
				<li class="">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">成员管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="__MODULE__/User/index">

							浏览员工信息</a>

						</li>

						<li >

							<a href="__MODULE__/Member/index">

							浏览用户信息</a>

						</li>

					</ul>

				</li>


				<li class="">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">版块管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">



						<li >

							<a href="__MODULE__/Topic/index">

							浏览版块信息</a>

						</li>


							<li >

							<a href="__MODULE__/Topic/add">

							新增版块</a>

						</li>

					</ul>

				</li>



				<li class="">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">帖子管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="__MODULE__/News/index">

							浏览发帖信息</a>

						</li>

						<li >

							<a href="__MODULE__/Reply/index">

							浏览回帖信息</a>

						</li>

						<li >

							<a href="__MODULE__/Reply/index">

							浏览评论信息</a>

						</li>

					</ul>

				</li>


				<li class="">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">公告管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="__MODULE__/Notice/index">

							浏览公告信息</a>

						</li>

						<li >

							<a href="__MODULE__/Notice/add">

							添加公告</a>

						</li>

					</ul>

				</li>


				<li class="">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">广告管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="__MODULE__/Ad/index">

							浏览广告信息</a>

						</li>

						<li >

							<a href="__MODULE__/Ad/add">

							新增广告信息</a>

						</li>

					</ul>

				</li>

				<li class="">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">图片管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">

						<li >

							<a href="__MODULE__/Image/index">

							浏览相册</a>

						</li>

						<li >

							<a href="__MODULE__/Image/add">

							添加相册</a>

						</li>

					</ul>

				</li>		



			

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>

		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->

		<div class="page-content">

			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div id="portlet-config" class="modal hide">

				<div class="modal-header">

					<button data-dismiss="modal" class="close" type="button"></button>

					<h3>Widget Settings</h3>

				</div>

				<div class="modal-body">

					<p>Here will be a configuration form</p>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						<div class="color-panel hidden-phone">

							<div class="color-mode-icons icon-color"></div>

							<div class="color-mode-icons icon-color-close"></div>

							<div class="color-mode">

								<p>THEME COLOR</p>

								<ul class="inline">

									<li class="color-black current color-default" data-style="default"></li>

									<li class="color-blue" data-style="blue"></li>

									<li class="color-brown" data-style="brown"></li>

									<li class="color-purple" data-style="purple"></li>

									<li class="color-grey" data-style="grey"></li>

									<li class="color-white color-light" data-style="light"></li>

								</ul>

								<label>

									<span>Layout</span>

									<select class="layout-option m-wrap small">

										<option value="fluid" selected>Fluid</option>

										<option value="boxed">Boxed</option>

									</select>

								</label>

								<label>

									<span>Header</span>

									<select class="header-option m-wrap small">

										<option value="fixed" selected>Fixed</option>

										<option value="default">Default</option>

									</select>

								</label>

								<label>

									<span>Sidebar</span>

									<select class="sidebar-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

								<label>

									<span>Footer</span>

									<select class="footer-option m-wrap small">

										<option value="fixed">Fixed</option>

										<option value="default" selected>Default</option>

									</select>

								</label>

							</div>

						</div>

						<!-- END BEGIN STYLE CUSTOMIZER -->    

						

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->          

				<div class="row-fluid">

					<div class="span12 page-404">

						<div class="details">

							<h4><?php echo isset($message) ? $message : $error;?></h4>

							<p>

								页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b><br />

								<a href="__APP__/Admin/Index/index">返回首页</a>

							</p>

						</div>

					</div>

				</div>

				<!-- END PAGE CONTENT-->

			</div>

			<!-- END PAGE CONTAINER-->       

		</div>

		<!-- BEGIN PAGE -->     

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	<div class="footer">

		<div class="footer-inner">

			2013 &copy; Metronic by keenthemes.

		</div>

		<div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

		</div>

	</div>

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="__PUBLIC__/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="__PUBLIC__/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="__PUBLIC__/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="__PUBLIC__/media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="__PUBLIC__/media/js/excanvas.min.js"></script>

	<script src="__PUBLIC__/media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="__PUBLIC__/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="__PUBLIC__/media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="__PUBLIC__/media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="__PUBLIC__/media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<script src="__PUBLIC__/media/js/app.js"></script>      

	<script>

		jQuery(document).ready(function() {    

		   App.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script>

<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>

</body>

<!-- END BODY -->

</html>