<?php
require("./system/system.smarty.inc.php");	//包含Smarty配置类
require("./system/system.class.inc.php");	//包含数据库连接和操作
$smarty=new SmartyProject();
$connobj=new ConnDB("mysql","localhost","root","123456","shopping");//数据库连接类实例化
$conn=$connobj->GetConnId();		//执行连接操作，返回连接标识
$admindb=new AdminDB();//数据库操作类实例化
?>

<?php
/*require("system.smarty.inc.php");	//包含Smarty配置类
require("system.class.inc.php");	//包含数据库连接和操作类

$seppage=new SepPage();//分页类实例化

$usefun=new UseFun();//使用常用函数类实例化

$smarty=new SmartyProject();//调用smarty模板

function unhtml($params){
  extract($params);
  $text=$content;
  global $usefun;
  return $usefun->UnHtml($text);
}
$smarty->register_function("unhtml","unhtml");		//注册模板函数*/
?>