<?php
require_once('BaseBusiness.php');
require_once('DateUtil.php');
require_once('SupportException.php');

//获取城市和学校列表
class CityBusiness extends BaseBusiness{
	
	//获取城市列表
	function getCitis($level,$parentid=null)
	{
		$this->sql = "SELECT * FROM m_city WHERE level='$level'";
		if (!empty($parentid))
		{
			$this->sql .= " AND parentid='$parentid'";
		}
		$rs = $this->db->exceuteQuery($this->sql);
		return $rs;
	}
	//获取学校列表
	function getSchools($idprovince,$idcity=null,$idcounty=null)
	{
		$this->sql = "SELECT * FROM m_school WHERE idm_city2='$idprovince'";
		if (!empty($idcity))
		{
			$this->sql .= " AND idm_city3='$idcity'";
		}
		if (!empty($idcounty))
		{
			$this->sql .= " AND idm_city4='$idcounty'";
		}
		$rs = $this->db->exceuteQuery($this->sql);
		return $rs;
	}
	//获取学校列表根据一个id
	function getSchoolsByCityID($idm_city,$level=null)
	{
		$field = 'idm_city2';
		if ( $level=='2')
		{
			$field = 'idm_city3';
		}
		else if ( $level=='3')
		{
			$field = 'idm_city4';
		}
		
		$this->sql = "SELECT * FROM m_school WHERE $field='$idm_city'";
		
		$rs = $this->db->exceuteQuery($this->sql);
		return $rs;
	}
	function getSchoolsByName($name)
	{
		$this->sql = "SELECT * FROM m_school WHERE schoolname LIKE '%$name%'";
		$rs = $this->db->exceuteQuery($this->sql);
		return $rs;
	}
	

	
}