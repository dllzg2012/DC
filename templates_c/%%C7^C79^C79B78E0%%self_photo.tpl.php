<?php /* Smarty version 2.6.18, created on 2013-06-13 12:11:59
         compiled from self_zone/self_photo.tpl */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "spaceheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>



<input type="hidden" id="albumUrl" value="javascipt:window.location='self_photo.php?module=album&alb=">
<div class="blank"></div>
<div class="block  blue_s">
<div class="blank10"></div>
<div class="AreaL750">
   <!--相册模版 -->
  <div class="box_lt clearfix">
  <div class="title_bt blue_s">相册</div>
  
<div class="space_album">
<div class="list clearfix" style="padding:0 10px;width:700px;height:auto;float:left;">

<div class="space_daily_new clearfix">
<span class="anniu26"><a href="javascript:void(0)" onclick="javascript:window.location='self_photo.php?module=photo_upload'">上传照片</a></span>
<span class="anniu26"><a href="javascript:void(0)" onclick="javascript:window.location='self_photo.php?module=photo_manager'">创建相册</a></span>

</div>
<div style="height:auto;">
<ul id="BackReply">
<?php $_from = $this->_tpl_vars['album']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<?php if ($this->_tpl_vars['key'] < $this->_tpl_vars['page']['base']['pageNum']): ?>
<li>
<div class="pic">
<a href="javascript:void(0)" onclick="javascipt:window.location='self_photo.php?module=album&alb=<?php echo $this->_tpl_vars['item']['ID']; ?>
'"><img src="./templates/images/schoolbar/wb_pic1.gif" /></a>
</div>
<p class="jj"><a href="javascript:void(0)" onclick="javascipt:window.location='self_photo.php?module=album&alb=<?php echo $this->_tpl_vars['item']['ID']; ?>
'"><?php echo $this->_tpl_vars['item']['albumname']; ?>
</a></p>
</li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<p><br /><br/>

</div>
</div>
</div><!--相册结束-->
<div class="album_page" id="pageFooter">
<?php if ($this->_tpl_vars['page']['base']['pageCounts'] == '1'): ?>
<a href="javascript:void(0)">1</a>
<?php else: ?>
	<?php if ($this->_tpl_vars['page']['base']['page'] == 1): ?>
	<a href="javascript:void(0)">上一页</a>
	<?php else: ?>
	<a href="javascript:void(0)" onclick="javascript:getAlbumSplitPage('<?php echo $this->_tpl_vars['page']['base']['page']-1; ?>
')">上一页</a>
	<?php endif; ?>
	
	<?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['page']['base']['pageCounts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    	<?php if ($this->_tpl_vars['page']['base']['page'] == $this->_sections['loop']['index']+1): ?>
    	&nbsp;<a href="javascript:void(0)"><?php echo $this->_sections['loop']['index']+1; ?>
</a>
    	<?php else: ?>
    	&nbsp;<a href="javascript:void(0)" onclick="javascript:getAlbumSplitPage('<?php echo $this->_sections['loop']['index']+1; ?>
')"><?php echo $this->_sections['loop']['index']+1; ?>
</a>
    	<?php endif; ?>
    <?php endfor; endif; ?>
	
	<?php if ($this->_tpl_vars['page']['base']['page'] == $this->_tpl_vars['page']['base']['pageCounts']): ?>
	<a href="javascript:void(0)">下一页</a>
	<?php else: ?>
	<a href="javascript:void(0)" onclick="javascript:getAlbumSplitPage('<?php echo $this->_tpl_vars['page']['base']['page']+1; ?>
')">下一页</a>
	<?php endif; ?>
<?php endif; ?>
</div>
</div>

<input type="hidden" id="uid" value="<?php echo $this->_tpl_vars['uid']; ?>
">
<input type="hidden" id="currpage">

<!--头像-->
<div class="AreaRR">
<div class="box_lt clearfix">
  <div class="title_bt"><span><a href="#">管理</a></span><a href="#">相册分类</a></div>
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
