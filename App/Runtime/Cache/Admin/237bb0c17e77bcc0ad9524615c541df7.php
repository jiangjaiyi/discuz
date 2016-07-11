<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>Metronic | Form Stuff - Form Layouts</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="/discuz/Public/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

	<link href="/discuz/Public/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>

	<link href="/discuz/Public/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>

	<link href="/discuz/Public/media/css/style-metro.css" rel="stylesheet" type="text/css"/>

	<link href="/discuz/Public/media/css/style.css" rel="stylesheet" type="text/css"/>

	<link href="/discuz/Public/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>

	<link href="/discuz/Public/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="/discuz/Public/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<link rel="shortcut icon" href="/discuz/Public/media/image/favicon.ico" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	
	<div class="header navbar navbar-inverse navbar-fixed-top">

		<!-- BEGIN TOP NAVIGATION BAR -->

		<div class="navbar-inner">

			<div class="container-fluid">

				<!-- BEGIN LOGO -->

				<a class="brand" href="index.html">

				<img src="/discuz/Public/media/image/logo.png" alt="logo" />

				</a>

				<!-- END LOGO -->

				<!-- BEGIN RESPONSIVE MENU TOGGLER -->

				<a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

				<img src="/discuz/Public/media/image/menu-toggler.png" alt="" />

				</a>          

				<!-- END RESPONSIVE MENU TOGGLER -->            

				<!-- BEGIN TOP NAVIGATION MENU -->              

				<ul class="nav pull-right">

					<!-- BEGIN USER LOGIN DROPDOWN -->

					<li class="dropdown user">

						<a href="#" class="dropdown-toggle" data-toggle="dropdown">

						<img alt="" src="/discuz/Public/media/image/avatar1_small.jpg" />

						<span class="username">Bob Nilson</span>

						</a>

							<li><a href="login.html"><i class="icon-key"></i> 退出</a></li>

						</ul>

					</li>

					<!-- END USER LOGIN DROPDOWN -->

				</ul>

				<!-- END TOP NAVIGATION MENU --> 

			</div>

		</div>

		<!-- END TOP NAVIGATION BAR -->

	</div>

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

					<a href="/discuz/index.php/Admin/Index/index">

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

							<a href="/discuz/index.php/Admin/Access/index">

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

							<a href="/discuz/index.php/Admin/User/index">

							浏览员工信息</a>

						</li>

						<li >

							<a href="/discuz/index.php/Admin/Member/index">

							浏览用户信息</a>

						</li>

					</ul>

				</li>


				<li class="active">

					<a href="javascript:;">

					<i class="icon-th"></i> 

					<span class="title">版块管理</span>

					<span class="arrow "></span>

					</a>

					<ul class="sub-menu">



						<li >

							<a href="/discuz/index.php/Admin/Topic/index">

							浏览版块信息</a>

						</li>


							<li class="active">

							<a href="/discuz/index.php/Admin/Topic/add">

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

							<a href="/discuz/index.php/Admin/News/index">

							浏览发帖信息</a>

						</li>

						<li >

							<a href="/discuz/index.php/Admin/Reply/index">

							浏览回帖信息</a>

						</li>

						<li >

							<a href="/discuz/index.php/Admin/Reply/index">

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

							<a href="/discuz/index.php/Admin/Notice/index">

							浏览公告信息</a>

						</li>

						<li >

							<a href="/discuz/index.php/Admin/Notice/add">

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

							<a href="/discuz/index.php/Admin/Ad/index">

							浏览广告信息</a>

						</li>

						<li >

							<a href="/discuz/index.php/Admin/Ad/add">

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

							<a href="/discuz/index.php/Admin/Image/index">

							浏览相册</a>

						</li>

						<li >

							<a href="/discuz/index.php/Admin/Image/add">

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

					<h3>portlet Settings</h3>

				</div>

				<div class="modal-body">

					<p>Here will be a configuration form</p>

				</div>

			</div>

			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

			<!-- BEGIN PAGE CONTAINER-->

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

						<h3 class="page-title">

							添加版块

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/discuz/index.php/Admin/Index/index">首页</a> 

								<span class="icon-angle-right"></span>

							</li>

							<li>

								版块管理

								<span class="icon-angle-right"></span>

							</li>

							<li>添加版块</li>

						</ul>

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN SAMPLE FORM PORTLET-->   

						<div class="portlet box blue tabbable">

							<div class="portlet-title">

								<div class="caption">

									<i class="icon-reorder"></i>

									<span class="hidden-480">From</span>

								</div>

							</div>

							<div class="portlet-body form">

								<div class="tabbable portlet-tabs">

									<ul class="nav nav-tabs" style="height:50px;">

										
									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="portlet_tab1">

											<!-- BEGIN FORM-->

											<form action="/discuz/index.php/Admin/Topic/update" class="form-horizontal" method="post">

												<div class="control-group">

													<label class="control-label">版主id</label>

													<div class="controls">

														<input type="hidden" name="topic_id" placeholder="" class="m-wrap small" value="<?php echo ($vo["topic_id"]); ?>" />

														<input type="text" name="topic_masterid" placeholder="" class="m-wrap small" value="<?php echo ($vo["topic_masterid"]); ?>" />

														<span class="help-inline"></span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">版块名称</label>

													<div class="controls">

														<input type="text" name="topic_name" placeholder="" class="m-wrap large" value="<?php echo ($vo["topic_name"]); ?>" />

														<span class="help-inline"></span>

													</div>

												<br><br>

												<div class="control-group">

													<label class="control-label">版块主题</label>

													<div class="controls">

														<textarea name="topic_profile" class="large m-wrap" rows="4"><?php echo ($vo["topic_profile"]); ?></textarea>

													</div>

												</div>

												<div class="form-actions">

													<button type="submit" class="btn blue"><i class="icon-ok"></i>保存</button>

													<input type="reset" class="btn">

												</div>

											</form>

											<!-- END FORM-->  

										</div>

									</div>

								</div>

							</div>

						</div>

						<!-- END SAMPLE FORM PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT-->         

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->  

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

	<script src="/discuz/Public/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

	<script src="/discuz/Public/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="/discuz/Public/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      

	<script src="/discuz/Public/media/js/bootstrap.min.js" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="/discuz/Public/media/js/excanvas.min.js"></script>

	<script src="/discuz/Public/media/js/respond.min.js"></script>  

	<![endif]-->   

	<script src="/discuz/Public/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

	<script src="/discuz/Public/media/js/jquery.blockui.min.js" type="text/javascript"></script>  

	<script src="/discuz/Public/media/js/jquery.cookie.min.js" type="text/javascript"></script>

	<script src="/discuz/Public/media/js/jquery.uniform.min.js" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<script src="/discuz/Public/media/js/app.js"></script>     

	<script>

		jQuery(document).ready(function() {   

		   // initiate layout and plugins

		   App.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->   

<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>

<!-- END BODY -->

</html>