<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><!--[if IE 8]><html lang="en" class="ie8"><![endif]--><!--[if IE 9]><html lang="en" class="ie9"><![endif]--><!--[if !IE]><!--><html lang="en"><!--<![endif]--><!-- BEGIN HEAD --><head><meta charset="utf-8" /><title><?php echo ($config["web_title"]); ?>-管理中心</title><meta content="width=device-width, initial-scale=1.0" name="viewport" /><meta content="" name="description" /><meta content="" name="author" /><!-- BEGIN GLOBAL MANDATORY STYLES --><link href="__PUBLIC__/css/bootstrap.min.css" rel="stylesheet" type="text/css"/><link href="__PUBLIC__/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/><link href="__PUBLIC__/css/font-awesome.min.css" rel="stylesheet" type="text/css"/><link href="__PUBLIC__/css/style-metro.css" rel="stylesheet" type="text/css"/><link href="__PUBLIC__/css/style.css" rel="stylesheet" type="text/css"/><link href="__PUBLIC__/css/style-responsive.css" rel="stylesheet" type="text/css"/><link href="__PUBLIC__/css/default.css" rel="stylesheet" type="text/css" id="style_color"/><link href="__PUBLIC__/css/uniform.default.css" rel="stylesheet" type="text/css"/><!-- END GLOBAL MANDATORY STYLES --><!-- BEGIN PAGE LEVEL STYLES --><link rel="stylesheet" type="text/css" href="__PUBLIC__/css/select2_metro.css" /><link rel="stylesheet" href="__PUBLIC__/css/DT_bootstrap.css" /><!-- END PAGE LEVEL STYLES --><!--<link rel="shortcut icon" href="__PUBLIC__/image/favicon.ico" />--><link rel="shortcut icon" href="__PUBLIC__/images/icon.png" /><script src="__PUBLIC__/js/jquery-1.3.2.min.js"></script></head><!-- END HEAD --><!-- BEGIN BODY --><body class="page-header-fixed"><!-- BEGIN HEADER --><div class="header navbar navbar-inverse navbar-fixed-top"><!-- BEGIN TOP NAVIGATION BAR --><div class="navbar-inner"><div class="container-fluid"><!-- BEGIN LOGO --><a class="brand" href="<?php echo U('Index/index');?>"><img src="__PUBLIC__/image/logo.png" alt="logo" />                 &nbsp;
                <span style="color:#FFF;"><?php echo ($config["web_title"]); ?></span></a><!-- END LOGO --><!-- BEGIN RESPONSIVE MENU TOGGLER --><a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse"><img src="__PUBLIC__/image/menu-toggler.png" alt="" /></a><!-- END RESPONSIVE MENU TOGGLER --><!-- BEGIN TOP NAVIGATION MENU --><ul class="nav pull-right"><!-- BEGIN NOTIFICATION DROPDOWN --><!-- END NOTIFICATION DROPDOWN --><!-- BEGIN INBOX DROPDOWN --><!-- END INBOX DROPDOWN --><!-- BEGIN TODO DROPDOWN --><!-- END TODO DROPDOWN --><!-- BEGIN USER LOGIN DROPDOWN --><li class="dropdown user"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon icon-user" style="font-size:28px;"></span><span class="username"><?php echo I('session.username');?></span><i class="icon-angle-down"></i></a><ul class="dropdown-menu"><li><a href="<?php echo U('Index/myinfo');?>"><i class="icon-user"></i> 个人资料</a></li><li class="divider"></li><li><a href="<?php echo U('Login/logout');?>"><i class="icon-key"></i>安全退出</a></li></ul></li><!-- END USER LOGIN DROPDOWN --></ul><!-- END TOP NAVIGATION MENU --></div></div><!-- END TOP NAVIGATION BAR --></div><!-- END HEADER --><!-- BEGIN CONTAINER --><div class="page-container row-fluid"><!-- BEGIN SIDEBAR --><div class="page-sidebar nav-collapse collapse"><!-- BEGIN SIDEBAR MENU --><ul class="page-sidebar-menu"><li><!-- BEGIN SIDEBAR TOGGLER BUTTON --><div class="sidebar-toggler hidden-phone"></div><!-- BEGIN SIDEBAR TOGGLER BUTTON --></li><li><!-- BEGIN RESPONSIVE QUICK SEARCH FORM --><!--<form class="sidebar-search"><div class="input-box"><a href="javascript:;" class="remove"></a><input type="text" placeholder="Search..."><input type="button" class="submit" value=" "></div></form>--><!-- END RESPONSIVE QUICK SEARCH FORM --></li><li class="start active"><a href="<?php echo U('Index/index');?>"><i class="icon-home"></i><span class="title">管理中心</span><span class="selected"></span></a></li><li class=""><a href="javascript:;"><i class="icon-cogs"></i><span class="title">角色权限管理</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('RBAC/role');?>">角色列表</a></li><li><a href="<?php echo U('RBAC/index');?>">管理员列表</a></li><li><a href="<?php echo U('RBAC/node');?>">操作节点管理</a></li></ul></li><li class=""><a href="javascript:;"><i class="icon-file-text"></i><span class="title">试题管理</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('Exam/index');?>">试题管理</a></li><li><a href="<?php echo U('Exam/pager_list');?>">试卷管理</a></li><li><a href="<?php echo U('Exam/exam_log');?>">考试记录</a></li></ul></li><li class=""><a href="javascript:;"><i class="icon-align-justify"></i><span class="title">订单管理</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('Order/index');?>">在线咨询订单</a></li></ul></li><li class=""><a href="javascript:;"><i class="icon-comment"></i><span class="title">咨询管理</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('Chat/index');?>">咨询内容管理</a></li></ul></li><li class=""><a href="javascript:;"><i class="icon-group"></i><span class="title">用户管理</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('Wxusers/index');?>">微信用户管理</a></li></ul></li><li class=""><a href="javascript:;"><i class="icon-user"></i><span class="title">专家管理</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('Wxusers/index',array('role_id'=>2));?>">专家列表</a></li><li><a href="<?php echo U('Wxusers/reg_list');?>">待审核专家</a></li><li><a href="<?php echo U('Skill/index');?>">专家领域管理</a></li></ul></li><li class=""><a href="javascript:;"><i class="icon-cog"></i><span class="title">系统信息</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('Conf/index');?>">平台信息管理</a></li><li><a href="<?php echo U('Log/index');?>">操作日志管理</a></li><li><a href="<?php echo U('Delcache/index');?>">清除系统缓存</a></li></ul></li><li class=""><a href="javascript:;"><i class="icon-comments"></i><span class="title">微信公众平台管理</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('WechatPub/index');?>">公众号管理</a></li><li><a href="<?php echo U('WechatPub/index');?>">关注外链</a></li><li><a href="<?php echo U('WechatMenu/index');?>">自定义菜单</a></li><li><a href="<?php echo U('WechatText/index');?>">自定义回复</a></li><li><a href="<?php echo U('WechatPub/tpl_msg');?>">模板消息</a></li></ul></li><li class="" style="display:none"><a href="javascript:;"><i class="icon-briefcase"></i><span class="title">Pages</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="page_coming_soon.html"><i class="icon-cogs"></i>                    Coming Soon</a></li><li><a href="page_calendar.html"><i class="icon-calendar"></i>                    Calendar</a></li></ul></li><li style="display:none"><a class="active" href="javascript:;"><i class="icon-sitemap"></i><span class="title">商城管理</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="javascript:;">                    商品管理

                    <span class="arrow"></span></a><ul class="sub-menu"><li><a href="<?php echo U('Goods/index');?>">商品列表</a></li><li><a href="<?php echo U('GoodsCate/index');?>">商品分类</a></li><li><a href="<?php echo U('Goods/reply_list');?>">商品评论</a></li></ul></li><li><a href="javascript:;">                    订单管理

                    <span class="arrow"></span></a><ul class="sub-menu"><li><a href="<?php echo U('Order/index');?>">销售订单</a></li><li><a href="<?php echo U('TakeMoney/index');?>">提现申请</a></li><li><a href="<?php echo U('Order/refund_list');?>">售后订单</a></li></ul></li></ul></li><li style="display:none"><a href="javascript:;"><i class="icon-folder-open"></i><span class="title">4 Level Menu</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="javascript:;"><i class="icon-cogs"></i>                    Item 1

                    <span class="arrow"></span></a><ul class="sub-menu"><li><a href="javascript:;"><i class="icon-user"></i>                            Sample Link 1

                            <span class="arrow"></span></a><ul class="sub-menu"><li><a href="#"><i class="icon-remove"></i> Sample Link 1</a></li></ul></li><li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li></ul></li><li><a href="javascript:;"><i class="icon-globe"></i>                    Item 2

                    <span class="arrow"></span></a><ul class="sub-menu"><li><a href="#"><i class="icon-user"></i>  Sample Link 1</a></li></ul></li></ul></li><li class=""><a href="javascript:;"><i class="icon-th"></i><span class="title">财务管理</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('Money/recharge');?>">充值记录</a></li><li><a href="<?php echo U('Money/index');?>">资金明细</a></li><li><a href="<?php echo U('Money/wechat_hb_list');?>">红包发送记录</a></li></ul></li><li class=""><a href="javascript:;"><i class="icon-file-text"></i><span class="title">CMS内容管理系统</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('CmsSort/index');?>">栏目管理</a></li><li><a href="<?php echo U('CmsArt/index');?>">文章管理</a></li></ul></li><li class=""><a href="javascript:;"><i class="icon-gift"></i><span class="title">扩展工具</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('Navlink/index');?>">前台导航管理</a></li><li><a href="<?php echo U('Region/index');?>">地区管理</a></li><li><a href="<?php echo U('FriendLink/index');?>">友情链接</a></li><li><a href="<?php echo U('Slide/index');?>">轮播图片管理</a></li></ul></li><!--<li class=""><a href="javascript:;"><i class="icon-hdd"></i><span class="title">数据中心</span><span class="arrow "></span></a><ul class="sub-menu"><li><a href="<?php echo U('Database/index');?>">数据备份</a></li><li><a href="<?php echo U('Database/recover');?>">备份下载</a></li></ul></li>--><li class="last" style="display:none"><a href="charts.html"><i class="icon-bar-chart"></i><span class="title">Visual Charts</span></a></li></ul><!-- END SIDEBAR MENU --></div><script type="text/javascript">$(document).ready(function() {
	var url=window.location.search;
	$('.page-sidebar-menu li ul li a').each(function(){
		var aurl='?'+$(this).attr("href").split("?")[1];
		
		var p1=$(this).parent();
		var p3=$(this).parent().parent().parent();
		var p5=$(this).parent().parent().parent().parent().parent();
		if(aurl.indexOf(url)>=0){
			//$(this).addClass("active").siblings("a").removeClass("active");
			$(".start").removeClass("active");
			p1.addClass("active");
			p3.addClass("active");
			p5.addClass("active");
			//$(this).parent().parent().css("display","block");
			
		}
	});
});
</script><!-- END SIDEBAR --><!-- BEGIN PAGE --><div class="page-content"><!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM--><div id="portlet-config" class="modal hide"><div class="modal-header"><button data-dismiss="modal" class="close" type="button"></button><h3>modal 标题</h3></div><div class="modal-body"><p>modal 内容</p></div></div><!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM--><!-- BEGIN PAGE CONTAINER--><div class="container-fluid"><!-- BEGIN PAGE HEADER--><div class="row-fluid"><div class="span12"><!-- BEGIN STYLE CUSTOMIZER --><!--主题设置--><div class="color-panel hidden-phone"><a href="<?php echo U('Delcache/index');?>" title="清除系统缓存"><div class="color-mode-icons icon-color"></div></a></div><!-- END BEGIN STYLE CUSTOMIZER --><!-- BEGIN PAGE TITLE & BREADCRUMB--><h3 class="page-title">考试记录</h3><!-- END PAGE TITLE & BREADCRUMB--></div></div><!-- END PAGE HEADER--><!-- BEGIN PAGE CONTENT--><div class="row-fluid"><div class="span12"><!-- BEGIN EXAMPLE TABLE PORTLET--><!--页面主体内容--><div class="portlet box light-grey"><div class="portlet-title"><div class="caption"><i class="icon-globe"></i>考试记录</div><div class="tools"><a href="javascript:;" class="collapse"></a><a href="javascript:;" class="remove"></a></div><!--<div class="actions"><a class="btn green" href="<?php echo U('add');?>"><i class="icon-plus"></i> 新增</a></div>--></div><div class="portlet-body"><table class="table table-striped table-bordered table-hover"><thead><tr><th>ID</th><th>试卷标题</th><th>测试成绩</th><th>试卷总分</th><th>用户</th><th>测试时间</th><th>操作</th></tr></thead><tbody><?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($v["id"]); ?></td><td><?php echo ($v['pager']['title']); ?></td><td><?php echo ($v["score"]); ?> (分)</td><td><?php echo ($v["total_score"]); ?> (分)</td><td><a href="<?php echo U('Wxusers/edit',array('id'=>$v['uid']));?>" target="_blank">                      [<?php echo ($v['uid']); ?>]<?php echo ($v['user']['nickname']); ?></a></td><td><?php echo (date('Y-m-d H:i',$v['posttime'])); ?></td><td><!--<a class="btn red" href="<?php echo U('pager_del',array('id'=>$v['id']));?>" onClick="return confirm('确定要删除此链接?')">删除</a> --></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table><div class="pagination"><?php echo ($show); ?></div></div></div><!--页面主体内容--><!-- END EXAMPLE TABLE PORTLET--></div></div><!-- END PAGE CONTENT--></div><!-- END PAGE CONTAINER--></div><!-- END PAGE --></div><!-- END CONTAINER --><!-- BEGIN FOOTER --><div class="footer"><div class="footer-inner"><?php echo ($config["copyright"]); ?><a href="#" title="<?php echo ($config["web_name"]); ?>" target="_blank"><?php echo ($config["web_name"]); ?></a></div><div class="footer-tools"><span class="go-top"><i class="icon-angle-up"></i></span></div></div><!-- END FOOTER --><script type="text/javascript" src="__PUBLIC__/artDialog/artDialog.js?skin=aero"></script><script type="text/javascript" src="__PUBLIC__/datepicker/WdatePicker.js"></script><script type="text/javascript" src="__PUBLIC__/js/common.js"></script><!-- BEGIN CORE PLUGINS --><script src="__PUBLIC__/js/jquery-1.10.1.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/bootstrap.min.js" type="text/javascript"></script><!--[if lt IE 9]><script src="__PUBLIC__/js/excanvas.min.js"></script><script src="__PUBLIC__/js/respond.min.js"></script><![endif]--><script src="__PUBLIC__/js/jquery.slimscroll.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery.blockui.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery.cookie.min.js" type="text/javascript"></script><script src="__PUBLIC__/js/jquery.uniform.min.js" type="text/javascript" ></script><!-- END CORE PLUGINS --><!-- BEGIN PAGE LEVEL PLUGINS --><script type="text/javascript" src="__PUBLIC__/js/select2.min.js"></script><script type="text/javascript" src="__PUBLIC__/js/jquery.dataTables.js"></script><script type="text/javascript" src="__PUBLIC__/js/DT_bootstrap.js"></script><!-- END PAGE LEVEL PLUGINS --><!-- BEGIN PAGE LEVEL SCRIPTS --><script src="__PUBLIC__/js/app.js"></script><script src="__PUBLIC__/js/table-managed.js"></script><script>		jQuery(document).ready(function() {       

		   App.init();

		   TableManaged.init();

		});

	</script></body><!-- END BODY --></html>