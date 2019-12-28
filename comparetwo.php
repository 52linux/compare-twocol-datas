<html>
<meta charset="utf-8" />
 
 

<?php

if($_POST){

$data1 = explode("\n",$_POST['data1']);

$data2 = explode("\n",$_POST['data2']);
 
$data1 = array_filter(array_map('trim',$data1));//去除后面的回车换行，并且去掉空行
$data2 = array_filter(array_map('trim',$data2));


$mergedata = array_merge($data1,$data2);
$mergedata = array_unique($mergedata); 
//print_r($mergedata);
sort($mergedata,SORT_STRING);
//print_r($mergedata);die();


$fgf = ","; 
foreach($mergedata as $k=>$v)
{
	echo $v;
	if(in_array($v, $data1))
	{
		$tmpa[$k] = $v;
		 
	}else{
		$tmpa[$k] = "";
		
	}
	echo $fgf . $tmpa[$k];

	if(in_array($v, $data2))
	{
		$tmpb[$k] = $v;
		 
	}else{
		$tmpb[$k] = "";
		
	}
	echo $fgf . $tmpb[$k];

	echo "\r\n<br/>";

}

echo "<a href=\"".$_SERVER['PHP_SELF']."\">back</a>";
die();

}

?>
<form action="" id="usrform" method="post">
	
	<table>
		<tr><td>data1</td><td>data2</td><tr>
		<tr><td><textarea   name="data1" cols="20" rows="40"></textarea></td><td><textarea   name="data2" cols="20" rows="40"></textarea></td><tr>
	</table>
	 <input type="submit">
 
</form>
</html>
