<?php
require_once('base.php');
require_once('BaseBusiness.php');
require_once('MininatureUtil.php');
require_once('CityBusiness.php');


//$_SESSION['loginok']=1;
//$_SESSION['user']['nickname']='狂嗨先生';

$citybsi = new CityBusiness();//获取城市列表和学校列表处理类变量
$citylist = $citybsi->getCitis('1');//获取所有的城市，省份或直辖市
$smarty->assign("cities",$citylist);//tpl页面填充所有的省份或直辖市
$module = $_REQUEST['module'];
$cityid = "";
if (empty($module))//初始化
{
	if (empty($_SESSION['cityid']))//如果没有点击
	{
		$cityid = $citylist['0']['ID'];
	}
	else
	{
		$cityid = $_SESSION['cityid'];
	}
	$secondcity = $citybsi->getCitis('2',$cityid); //查找省以下的市级
	if(!empty($secondcity))
	{
	   $thirdcity = $citybsi->getCitis('3',$secondcity[0]['ID']);
	}
//	echo "<pre>";
//	print_r($thirdcity);
//	exit();
	$_SESSION['cityid'] = $cityid;//保存在session中
	$schoolist = $citybsi->getSchools($cityid);
	
	$smarty->assign("selcityid",$cityid);//tpl页面填充选中的城市
	$smarty->assign("schools",$schoolist);//tpl页面填充选中的城市下的学校
	$smarty->assign("secondcity",$secondcity);
	$smarty->assign("thirdcity",$thirdcity);
	//$smarty->display("index/index.tpl");
}

//点击省份的同时改城市的ajax
elseif ($module=='firstcity')
{
	$firstcityid =$_POST['firstcityid'];
	$cities['base']['firstname'] = $_POST['firstname'];
	$_SESSION['firstcity']=$firstcityid;
	$firstcityname=$citybsi->getCitis('1');
	$secondcityname=$citybsi->getCitis('2',$firstcityid);
	if(!empty($secondcityname))
	{
		$cities['thirdcityname']=$citybsi->getCitis('3',$secondcityname[0]['ID']);
	}
	$cities['base']['firstcityid']=$firstcityid;
	//$cities['base']['name']=$name;
	$cities['firstcityname']=$firstcityname;
	$cities['secondcityname']=$secondcityname;
	$response = json_encode($cities);
	echo $response;
	}

elseif ($module=='secondcity')
{
	$secondcityid =$_GET['secondcityid'];
	$_SESSION['secondcity']=$secondcityid;
	$thirdcityname=$citybsi->getCitis('3',$secondcityid);
	$response = json_encode($thirdcityname);
	echo $response;
}
	
elseif ($module=='thirdcity')
{
	$thirdcityid =$_GET['thirdcityid'];
	$_SESSION['thirdcity']=$thirdcityid;
	
	
}
//---------------------------------------------------------
elseif ($module == 'search')//查找，页面上点击search的查找
{
	$cityid = $_REQUEST['cid'];
	$schoolist = $citybsi->getSchools($cityid);
	
}
elseif ($module == 'citysearch')//查找，页面上点击某个具体城市的查找
{
	//
}














?>