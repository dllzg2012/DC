<?php /* Smarty version 2.6.18, created on 2013-06-03 18:49:28
         compiled from user/my_collect.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'user/my_collect.tpl', 70, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "userheader.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<input type="hidden" id="ColType" value="1">
   <div class="my_right clearfix">
   <div class="my_data clearfix">
   <ul class="my_data_tag">
   <li class="sel"><a href="userCenter.php?module=collect">商品收藏</a></li>
   <li><a href="userCenter.php?module=collectTZ">帖子收藏</a></li>
   <li><a href="userCenter.php?module=collectRZ">日志收藏</a></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li></li>
   <li>
   <p>商品类型
   <select id="GoodType" onchange="javascript:userGoodsCollect(1)">
   		<option value="2">普通商品</option>
   		<option value="3">兑换商品</option>
   		<option value="4">特色商品</option>
   		<option value="5">团购商品</option>
   </select>
   </p>
   </li>
   </ul>
   <ul class="my_data_tag">
   
   </ul>
   </div>
   
   <div class="my_collect_nr">
   
   <table width="100%" border="0" cellspacing="0" cellpadding="0" class="ttbb6">
   <tr valign="top" class="pic">
  <td>&nbsp;</td>
  </tr>
  
  <tr>
    <th width="7%" align="center" bgcolor="#f7f7f7"><input type="checkbox" id="onGoodSel" value="checkbox" onclick="javascript:onGoodSel(this)"/><a href="javascript:void(0)" onclick="javascript:onGoodDel()">删除</a></th>
    <th width="12%" align="center" bgcolor="#f7f7f7">商品图片</th>
    <th width="23%" align="center" bgcolor="#f7f7f7">商品名称</th>
    <th width="36%" align="center" bgcolor="#f7f7f7">商品描述</th>
    <th width="10%" align="center" bgcolor="#f7f7f7">收藏时间</th>
    <th width="9%" align="center" bgcolor="#f7f7f7">编辑</th>
  </tr>
  <tr valign="top" class="pic">
  <td>&nbsp;</td>
  </tr>
  </table>
  
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="ttbb6" id="BackReply">
  <?php $_from = $this->_tpl_vars['data']['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <tr>
    <td width="7%" align="center"><input type="checkbox" name="GoodSel" value="<?php echo $this->_tpl_vars['item']['gid']; ?>
" /></td>
    <td width="12%" align="center"><a href="<?php echo $this->_tpl_vars['item']['collecturl']; ?>
"><img src="<?php echo $this->_tpl_vars['item']['newimg']; ?>
" width="50" height="50" /></a></td>
    <td width="23%" align="center"><a href="<?php echo $this->_tpl_vars['item']['collecturl']; ?>
"><?php echo $this->_tpl_vars['item']['goodsname']; ?>
</a></td>
    <td width="36%" align="center"><?php echo $this->_tpl_vars['item']['goodsdesc']; ?>
</td>
    <td width="10%" align="center"><?php echo $this->_tpl_vars['item']['collecttime']; ?>
</td>
    <td width="9%" align="center"><a href="javascript:void(0)" onclick="javascript:onGoodDelSingle('<?php echo $this->_tpl_vars['item']['gid']; ?>
')"><img src="./templates/images/schoolbar/zc_bj6.gif" /></a></td>
  </tr>
  <tr valign="top" class="pic">
  <td>&nbsp;</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  </table>
   </div>
   
   <div class="album_page" id="pageFooter">
   <?php if (count($this->_tpl_vars['data']['info']) != 0): ?>
		<?php if ($this->_tpl_vars['data']['base']['pageCounts'] == '1'): ?>
		<a class="pageFooterStyle">1</a>
		<?php else: ?>
		    <?php if ($this->_tpl_vars['data']['base']['page'] == '1'): ?>
		    <a href="javascript:void(0)" class="pageFooterStyle">上一页</a>
		    <?php else: ?>
		    <a  href="javascript:void(0)" onclick="javascript:userGoodsCollect('<?php echo $this->_tpl_vars['data']['base']['page']-1; ?>
')">上一页</a>
		    <?php endif; ?>
		    <?php unset($this->_sections['loop']);
$this->_sections['loop']['name'] = 'loop';
$this->_sections['loop']['loop'] = is_array($_loop=$this->_tpl_vars['data']['base']['pageCounts']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
		    	<?php if ($this->_tpl_vars['data']['base']['page'] == $this->_sections['loop']['index']+1): ?>
		    	&nbsp;<a href="javascript:void(0)" class="pageFooterStyle"><?php echo $this->_sections['loop']['index']+1; ?>
</a>
		    	<?php else: ?>
		    	&nbsp;<a href="javascript:void(0)" onclick="javascript:userGoodsCollect('$smarty.section.loop.index+1}')"><?php echo $this->_sections['loop']['index']+1; ?>
</a>
		    	<?php endif; ?>
		    <?php endfor; endif; ?>
			<?php if ($this->_tpl_vars['data']['base']['page'] == $this->_tpl_vars['reply']['base']['pageCounts']): ?>
			&nbsp;<a class="pageFooterStyle">下一页</a>
			<?php else: ?>
			&nbsp;<a  href="javascript:void(0)" onclick="javascript:userGoodsCollect('<?php echo $this->_tpl_vars['data']['base']['page']+1; ?>
')">下一页</a>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
   
   </div>
   
   </div>
   
   </div>
   </div>
   </div>
   
 
   <div class="blank10"></div>
   </div>


<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "barfooter.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>