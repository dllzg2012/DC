{include file=userheader.tpl}



<div class="my_right clearfix">
   <div class="my_address clearfix">
      <h3>常用收货地址</h3>
	  <div class="top10">
	  
<form action="UserCenterHandler.php?module=addrUse" method="post">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="ttbb5">
  <tr>
    <td width="7%" align="center">启用</td>
    <td width="63%" align="center">配送区域</td>
    <td width="15%" align="center">收货人姓名</td>
    <td width="15%" align="center">最佳送货时间</td>
  </tr>
  {if $addr|@count eq 0}
  <tr><td colspan="4" align="center">暂无更新收货地址</td></tr>
  {else}
   {foreach from=$addr item=item key=key}
	   <tr>
	    <td align="center">
	    <input type="radio" name="useid" value="{$item.ID}" {if $item.isuse eq 1}checked{/if}/>
	    </td>
	    <td>{$item.district}</td>
	    <td align="center">{$item.consignee}</td>
	    <td align="center">{$item.besttime}</td>
	  </tr>
   {/foreach}
   <tr>
   <td colspan="4" align="center">
   <input type="submit" name="Submit" value="提交" class="anniu24" />
   </td>
    </tr>
  {/if}
</table>
</form>
	  </div>
	  
	  <div class="blank20"></div>
      <h3>收货人信息</h3>
	  <div class="top10">
	  
	<form action="UserCenterHandler.php?module=addrAdd" method="post">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" class="ttbb5">
  <tr>
    <td width="14%" align="right">配送区域：</td>
    <td colspan="3">
	<select name="" onchange="javascript:void(0)">
      <option value="1">中国</option>
    </select>
	<select name="" onchange="javascript:void(0)">
      <option value="1">请选择</option>
    </select>
	
	<select name="" onchange="javascript:void(0)">
      <option value="1">请选择</option>
    </select>
	<select name="" onchange="javascript:void(0)">
      <option value="1">请选择</option>
    </select>
	(必填)	</td>
    </tr>
  <tr>
    <td align="right">收货人姓名：</td>
    <td width="36%"><input type="text" name="addr[consignee]"  class="my_txt_200"/> (必填)</td>
    <td width="14%" align="right">电子邮箱地址：</td>
    <td width="36%"><input type="text" name="addr[email]"  class="my_txt_200"/>
      (必填)</td>
  </tr>
  <tr>
    <td align="right">详细地址：</td>
    <td><input type="text" name="addr[address]"  class="my_txt_200"/>
      (必填)</td>
    <td align="right">邮政编码：</td>
    <td><input type="text" name="addr[zipcode]"  class="my_txt_200"/></td>
  </tr>
  <tr>
    <td align="right">电话：</td>
    <td><input type="text" name="addr[tel]"  class="my_txt_200"/>
      (必填)</td>
    <td align="right">手机：</td>
    <td><input type="text" name="addr[mobile]"  class="my_txt_200"/></td>
  </tr>
  <tr>
    <td align="right">标志建筑：</td>
    <td><input type="text" name="addr[signbuilding]"  class="my_txt_200"/></td>
    <td align="right">最佳送货时间：</td>
    <td><input type="text" name="addr[besttime]"  class="my_txt_200"/></td>
  </tr>
  <tr>
    <td colspan="4" align="center">
    <input type="submit" name="Submit" value="确认" class="anniu24" />
    </td>
    </tr>
</table>
</form>
	  </div>
	  
   </div>
   
   
   </div>
   </div>
   </div>
   </div>
   
 
   <div class="blank10"></div>
   </div>

{include file=barfooter.tpl}