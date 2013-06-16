//修改省
//var firstcityname;
function changefirstcity(id,name)
{     alert(name);
      var url="common.php?module=firstcity";
	  var newAjax = new Ajax.Request(
			url,
			{
				method:'post',
				parameters:"firstcityid="+id+"&firstname="+name,
				onComplete:changefirstcityReponse
				
			}
		);
	}

function changefirstcityReponse(json)
{
	var obj = eval("("+json.responseText+")");
	document.getElementById("firstcity").innerHTML=obj.base.firstname;
	
	
	document.getElementById("secondcity").innerHTML=obj.secondcityname[0].name;
	document.getElementById("thirdcity").innerHTML=obj.thirdcityname[0].name;
	var content = "";
	var thirdcontent = "";
	for(var i=1; i<obj.secondcityname.length; i++)
	{
		var url="javascript:changsecondcity('"+parseInt(obj.secondcityname[i].ID)+"','"+obj.secondcityname[i].name+"')";
		content += "<li>";
		content += "<A href="+url+">"+obj.secondcityname[i].name+"</A>";
		content += "</li>";
	}
	for(var i=1; i<obj.thirdcityname.length; i++)
	{
		var url="javascript:changethirdcity('"+parseInt(obj.thirdcityname[i].ID)+"','"+obj.thirdcityname[i].name+"')";
		thirdcontent += "<li>";
		thirdcontent += "<A href="+url+">"+obj.thirdcityname[i].name+"</A>";
		thirdcontent += "</li>";
	}
	$jq("#secondcityarea").html(content);
	$jq("#thirdcityarea").html(thirdcontent);
	
}

//修改市
var secondcityname;
function changsecondcity(id,name)
{
	secondcityname = name;
	var myAjax = new Ajax.Request(
			"common.php?module=secondcity&secondcityid="+id,
            {
                method: 'get',//是ajax返回时，需要执行的js  函数
                onComplete: changesecondcityReponse//ajax返回时，需要执行的js  函数
            }
        );
	
	}
function changesecondcityReponse(json)
{
	document.getElementById("secondcity").innerHTML=secondcityname;
	
	var obj = eval("("+json.responseText+")");
	document.getElementById("thirdcity").innerHTML=obj[0].name;
	var content = "";
	for(var i=1; i<obj.length; i++)
	{
		var url="javascript:changthirdcity('"+parseInt(obj[i].ID)+"','"+obj[i].name+"')";
		content += "<li>";
		content += "<A href="+url+">"+obj[i].name+"</A>";
		content += "</li>";
	}
	$jq("#thirdcityarea").html(content);
	
	
}
//修改区
function  changethirdcity(id,name)
{
	document.getElementById("thirdcity").innerHTML=name;
	var myAjax = new Ajax.Request(
			"common.php?module=thirdcity&thirdcityid="+id,
            {
                method: 'get'//是ajax返回时，需要执行的js  函数
               
            }
        );
	
	}