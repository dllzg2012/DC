<?php /* Smarty version 2.6.18, created on 2013-06-02 16:47:51
         compiled from backstage/top.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="./templates/css/backstage/general.css" rel="stylesheet" type="text/css" />
<link href="./templates/css/backstage/style.css" rel="stylesheet" type="text/css" />


</head>
<body>
<div id="header-div">
  <div id="logo-div" style="bgcolor:#000000;"><img src="./templates/images/backstage/ecshop_logo.gif" alt="ECSHOP - power for e-commerce" /></div>

  <div id="submenu-div">
    <ul>
      <li><a href="javascript:void(0)" target="main-frame">关于我爱我校</a></li>
      <li><a href="javascript:void(0)">帮助</a></li>
      <li><a href="javascript:void(0)" target="_blank">查看网店</a></li>
      <li><a href="javascript:void(0)" target="main-frame">管理员留言</a></li>
      <li><a href="admin_mynavigator.php" target="main-frame">个人设置</a></li>
      <li><a href="javascript:window.top.frames['main-frame'].document.location.reload();window.top.frames['header-frame'].document.location.reload()">刷新</a></li>
      <li><a href="#"  onclick="ShowToDoList()">记事本</a></li>
      <li style="border-left:none;"><a href="javascript:void(0)" target="main-frame">开店向导</a></li>
    </ul>
    <div id="send_info" style="padding: 5px 10px 0 0; clear:right;text-align: right; color: #FF9900;width:40%;float: right;">
            <a href="index.php?act=clear_cache" target="main-frame" class="fix-submenu">清除缓存</a>
      <a href="admin_login.php?act=logout" target="_top" class="fix-submenu">退出</a>
    </div>
        <div id="load-div" style="padding: 5px 10px 0 0; text-align: right; color: #FF9900; display: none;width:40%;float:right;"><img src="./templates/images/backstage/top_loader.gif" width="16" height="16" alt="正在处理您的请求..." style="vertical-align: middle" /> 正在处理您的请求...</div>
  </div>
</div>
<div id="menu-div">
  <ul>
    <li class="fix-spacel">&nbsp;</li>
    <li><a href="index.php?act=main" target="main-frame">起始页</a></li>
    <li><a href="admin_mynavigator.php" target="main-frame">设置导航栏</a></li>
    <?php $_from = $this->_tpl_vars['nav_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <li><a href="<?php echo $this->_tpl_vars['item']['moduleurl']; ?>
" target="main-frame"><?php echo $this->_tpl_vars['item']['modulename']; ?>
</a></li>
    <?php endforeach; endif; unset($_from); ?>
       
        <li class="fix-spacer">&nbsp;</li>
  </ul>
  <br class="clear" />
</div>
</body>
</html>

