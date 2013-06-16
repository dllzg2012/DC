<?php /* Smarty version 2.6.18, created on 2013-06-13 12:12:03
         compiled from self_zone/self_photo_album.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "spaceheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "uploadify.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo '
<script type="text/javascript">
//window.onload=function(){addpars("album","album");}
</script>
'; ?>



<?php echo '
<style>
     #box img {
     /*设置图片垂直居中*/
     vertical-align:middle;
	 width:650px;
	 height:480px;
     }
     #box  { 
     background:#F7FBFC;
　　 text-align: left; 
　　 font-size: 35pt; 
　　 font-family: "隶书", "宋体"; 
　　 letter-spacing: 3px; 
　　 color:navy; 
　　 line-height:30pt; 
　　 text-indent: .5in;
　　 border: solid 2pt; 
　　 }


</style>
<link rel="stylesheet" href="./plugin/editor/themes/default/default.css" />
<script charset="utf-8" src="./plugin/editor/kindeditor-min.js"></script>
<script charset="utf-8" src="./plugin/editor/lang/zh_CN.js"></script>
<script>
var editor;
KindEditor.ready(function(K) {
	editor = K.create(\'textarea[name="emoticons"]\', {
		allowFileManager : true,
		syncType : "form",
		items : [\'emoticons\'],
		width : "100%",
		height : "155px",
		syncType : "form",
		resizeType : 0 
	});
});
</script>
'; ?>


<input type="hidden" id="handler_path" value="self_photo_upload.php?album=<?php echo $this->_tpl_vars['diaid']; ?>
"/>
<input type="hidden" id="RebackFunction">
<div class="blank10"></div>
<div class="block  blue_s">

<div class="AreaL750">
   <!--相册模版 -->
  <div class="box_lt clearfix">
  <div class="title_bt blue_s">相册<a href="javascript:void(0)" id="J_selectImage">上传照片</a></div>
<div class="space_album_show">
<div class="list a_blue clearfix" id="alblist" style="padding:0 10px;width:700px;height:auto;float:left;">
<ul id="AlbumList">
<?php if (! empty ( $this->_tpl_vars['photo'] )): ?>
    <?php $_from = $this->_tpl_vars['photo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
    <li>
    <div class="pic">
    <a href="javascript:void(0)" onclick="javascript:PhotoShowAndHide('<?php echo $this->_tpl_vars['item']['path']; ?>
',true)"><img src="<?php echo $this->_tpl_vars['item']['path']; ?>
" border="0" width="174px" height="130px" alt="点击图片可放大缩小" title="点击图片可放大缩小"/></a><br/><br/>
    <p align="center"><input type="checkbox" value="<?php echo $this->_tpl_vars['item']['ID']; ?>
" style="width:25px;height:25px;display:none;" name="selBox" ></input>
    </div>
    </li>
    <?php endforeach; endif; unset($_from); ?>
<?php else: ?>
	<div class="only clearfix" id="albshow">
    <a><img src="./templates/images/schoolbar/zhuce_bj.gif" width="650" height="450" id="imgArea"/></a><br/>
    
    </div>
<?php endif; ?>
</ul>
</div>
<div class="only clearfix" id="albshow" style="display:none">
<a href="javascript:void(0)" onclick="javascript:PhotoShowAndHide('<?php echo $this->_tpl_vars['item']['path']; ?>
',false)"><img src="" width="650" height="480" id="imgArea"/></a>
</div>






<input type="hidden" id="currpage">
<div class="blank10"></div>
<div style="padding:0 10px;">
<!--下部评论开始-->
<br/>
<br/>
<br/>
<p align="right">
<a href="javascript:void(0)" onclick="javascript:multiManage(true,this)" id="MultiManage">批量管理</a>&nbsp;

<div id="MultiSelAll" style="display:none;">
<p align="right">
<input type="checkbox" onclick="javascript:multiSelAll(this)"/><label>全选</label>&nbsp;
<a href="javascript:void(0)" onclick="javascript:MultiDelSel();">删除选中的照片</a>&nbsp;
<a href="javascript:void(0)" onclick="javascript:multiManage(false,this)">退出管理</a>&nbsp;
</div>
<h3 class="space_daily_bt">
</h3>
<div class="space_daily_pl clearfix">
<form action="" method="get">
<input type="hidden" id="diaid" value="<?php echo $this->_tpl_vars['diaid']; ?>
">
<input type="hidden" id="type" value="2">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td width="15%" valign="top">
    <p class="av"><img src="./uploadfiles/user/<?php echo $_SESSION['baseinfo']['photo']; ?>
" style="width:100px;height:100px;"/></p>
	</td>
    <td>
    <div class="txt"><textarea name="emoticons" cols="" rows="" id="Reply"></textarea></div>
    <div>&nbsp;</div>
	</td>
  </tr>
  <tr>
  <td>&nbsp;</td>
  <td><div class="ann" align="right"><input type="button" value="评论"  class="anniu25" onclick="javascript:CreateNewPhotoReply()"/></div></td>
  </tr>
</table>
</form>
</div>

<div class="space_board">
<div class="ly">
<ul id="BackReply">
<?php $_from = $this->_tpl_vars['reply']['reply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<li>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td valign="top" class="pic"><p><img src="./templates/images/schoolbar/avatar2.jpg" /></p></td>
    <td valign="top" class="nr">
    <p class="name"><a href="#"><?php echo $this->_tpl_vars['item']['name']; ?>
</a> <span><?php echo $this->_tpl_vars['item']['createtime']; ?>
</span></p>
    <p class="pl"><?php echo $this->_tpl_vars['item']['content']; ?>
</p>
    </td>
	<td valign="bottom" class="edit a999"><a href="javascript:void(0)" onclick="javascript:addSecReply('<?php echo $this->_tpl_vars['item']['name']; ?>
','<?php echo $this->_tpl_vars['item']['id']; ?>
');">回复</a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="javascript:getDelReply('<?php echo $this->_tpl_vars['item']['id']; ?>
')">删除</a></td>
  </tr>
  <?php if ($this->_tpl_vars['item']['sec'] != ""): ?>
  <?php $_from = $this->_tpl_vars['item']['sec']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['sec']):
?>
  <tr>
    <td valign="top" class="pic">&nbsp;</td>
    <td valign="top" class="nr reply" colspan="2">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
         <tr>
         <td valign="top" class="pic"><p><img src="./templates/images/schoolbar/avatar2.jpg" /></p></td>
         <td valign="top" class="nr">
         <p class="name"><a href="#"><?php echo $this->_tpl_vars['sec']['name']; ?>
</a> <span><?php echo $this->_tpl_vars['sec']['createtime']; ?>
</span></p>
         <p class="pl"><?php echo $this->_tpl_vars['sec']['content']; ?>
</p>
         </td>
         </tr>
		 <tr>
		 <td valign="top" class="pic">&nbsp;</td>
		 <td class="a999"><a href="javascript:void(0)" onclick="javascript:addSecReply('<?php echo $this->_tpl_vars['sec']['name']; ?>
','<?php echo $this->_tpl_vars['item']['id']; ?>
');">回复</a>&nbsp;&nbsp;<a href="javascript:void(0)" onclick="javascript:getDelReply('<?php echo $this->_tpl_vars['sec']['id']; ?>
')">删除</a></td>
		 </tr>
	     </table>
    </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
</table>
</li>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
</div>

<div class="album_page" id="pageFooter">
<?php if ($this->_tpl_vars['reply']['base']['pageCounts'] == '1'): ?>
<a class="pageFooterStyle">1</a>
<?php else: ?>
    <?php if ($this->_tpl_vars['reply']['base']['page'] == '1'): ?>
    <a href="javascript:void(0)" class="pageFooterStyle">上一页</a>
    <?php else: ?>
    <a  href="javascript:void(0)" onclick="javascript:splitPage('2','<?php echo $this->_tpl_vars['reply']['base']['page']-1; ?>
')">上一页</a>
    <?php endif; ?>
    
    <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['reply']['base']['pageCounts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['loop']['show'] = true;
$this->_sections['loop']['max'] = $this->_sections['loop']['loop'];
$this->_sections['loop']['step'] = 1;
$this->_sections['loop']['start'] = $this->_sections['loop']['step'] > 0 ? 0 : $this->_sections['loop']['loop']-1;
if ($this->_sections['loop']['show']) {
    $this->_sections['loop']['total'] = $this->_sections['loop']['loop'];
    if ($this->_sections['loop']['total'] == 0)
        $this->_sections['loop']['show'] = false;
} else
    $this->_sections['loop']['total'] = 0;
if ($this->_sections['loop']['show']):

            for ($this->_sections['loop']['index'] = $this->_sections['loop']['start'], $this->_sections['loop']['iteration'] = 1;
                 $this->_sections['loop']['iteration'] <= $this->_sections['loop']['total'];
                 $this->_sections['loop']['index'] += $this->_sections['loop']['step'], $this->_sections['loop']['iteration']++):
$this->_sections['loop']['rownum'] = $this->_sections['loop']['iteration'];
$this->_sections['loop']['index_prev'] = $this->_sections['loop']['index'] - $this->_sections['loop']['step'];
$this->_sections['loop']['index_next'] = $this->_sections['loop']['index'] + $this->_sections['loop']['step'];
$this->_sections['loop']['first']      = ($this->_sections['loop']['iteration'] == 1);
$this->_sections['loop']['last']       = ($this->_sections['loop']['iteration'] == $this->_sections['loop']['total']);
?>
    	<?php if ($this->_tpl_vars['reply']['base']['page'] == $this->_sections['loop']['index']+1): ?>
    	&nbsp;<a href="javascript:void(0)" class="pageFooterStyle"><?php echo $this->_sections['loop']['index']+1; ?>
</a>
    	<?php else: ?>
    	&nbsp;<a href="javascript:void(0)" onclick="javascript:splitPage('2','<?php echo $this->_sections['loop']['index']+1; ?>
')"><?php echo $this->_sections['loop']['index']+1; ?>
</a>
    	<?php endif; ?>
    <?php endfor; endif; ?>
	<?php if ($this->_tpl_vars['reply']['base']['page'] == $this->_tpl_vars['reply']['base']['pageCounts']): ?>
	&nbsp;<a class="pageFooterStyle">下一页</a>
	<?php else: ?>
	&nbsp;<a  href="javascript:void(0)" onclick="javascript:splitPage('2','<?php echo $this->_tpl_vars['reply']['base']['page']+1; ?>
')">下一页</a>
	<?php endif; ?>
<?php endif; ?>
</div>
<!--/下部评论-->
</div>

</div>
</div><!--相册结束-->
</div>




<!--头像-->
<div class="AreaRR">
<div class="box_lt clearfix">
  <div class="title_bt"><span><a href="self_photo_guanli.html">管理</a></span><a href="#">相册分类</a></div>
  <div class="space_daily_kri">
  <ul>
  <?php if (! empty ( $this->_tpl_vars['album'] )): ?>
      <?php $_from = $this->_tpl_vars['album']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
      <li><span>(<?php echo $this->_tpl_vars['item']['sum']; ?>
)</span><a href="#" onclick="javascript:window.location='self_photo.php?module=album&alb=<?php echo $this->_tpl_vars['item']['ID']; ?>
'"><?php echo $this->_tpl_vars['item']['albumname']; ?>
</a></li>
      <?php endforeach; endif; unset($_from); ?>
  <?php else: ?>
  	  <li><a href="#">No Albums</a></li>
  <?php endif; ?>
  </ul>
  </div>
  

</div>
</div>
<!--/头像-->



</div>
<div class="blank10"></div>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "barfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>