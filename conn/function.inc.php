<?
function db_connect(){
	global $dbHost;
	global $dbuser;
	global $dbpass;
	global $dbname;
	$conn = mysql_connect($dbHost,$dbuser,$dbpass);
	mysql_select_db($dbname);
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
}
function db_connectIs($db){
	global $dbHost;
	global $dbuser;
	global $dbpass;
	$conn = mysql_connect($dbHost,$dbuser,$dbpass);
	mysql_select_db($db);
	mysql_query("SET character_set_results=utf8");
	mysql_query("SET character_set_client=utf8");
	mysql_query("SET character_set_connection=utf8");
}
function get_a_line($mysql)
{
if(!($result = mysql_query ("$mysql"))){$men = mysql_errno();$mem = mysql_error();echo ("<h4>$mysql  $men $mem</h4>");exit;}
$row = mysql_fetch_array ($result);
mysql_free_result ($result);
return $row;
}
//============== guery all ==============
function get_rsltset($mysql)
{
if (! ($result = mysql_query ("$mysql")))
{
$men = mysql_errno();
$mem = mysql_error();
echo ("<h4>$mysql  $men $mem</h4>");
exit;
}
else
{
while ( $row = mysql_fetch_array ($result) )
{
$rsltset[] = $row;
}
mysql_free_result($result);
return $rsltset;
}
}
//============== count data ==============
function rsltset_count($rs)
{
$i=0;
while($rs[$i][0])
{
$i++;
}
return $i;
}
//============== update data ==============
function update_data($mysql)
{
if (!mysql_query ("$mysql")){$men = mysql_errno();$mem = mysql_error();echo ("<h4>$mysql  $men $mem</h4>");return $men;exit;}
}
//============== insert data ==============
function insert_data($mysql)
{
if (!mysql_query ("$mysql"))
{
$men = mysql_errno();$mem = mysql_error();echo ("<h4>$mysql  $men $mem</h4>");return $men;exit;
}
}
//============== delete ==============
function delete($table,$condition)
{
$sql ="delete from $table $condition";
$re = mysql_query($sql);
return $result;
}
function deleteall($table)
{
$sql ="delete from $table";
$re = mysql_query($sql);
return $result;
}
//=============== select ==================
function select($table,$condition)
{
$sql = "select * from $table $condition";
$dbquery = mysql_query($sql);
$result= mysql_fetch_array($dbquery);
return $result;
}
//=============== Numrow ==================
function num_record($table,$condition)
{
$sql = "select * from $table $condition";
$dbquery = mysql_query($sql);
$num_rows = mysql_num_rows($dbquery);
return $num_rows;
}
function task($var){
	if($var==''){
		return "";
	}else{
		$task_tag .= "<li class='active'>";
        $task_tag .= "    <i class='fa fa-file'></i> $var";
        $task_tag .= "</li>";
		return $task_tag;
	}
}
function navi_tab($var){
	$navi_tab .= "<ol class='breadcrumb'>";
    $navi_tab .= "<li>";
    $navi_tab .= "<i class='fa fa-dashboard'></i>  <a href='index.php?task=main'>Dashboard</a>";
    $navi_tab .= "</li>";
	$navi_tab .= task($var);
	$navi_tab .= "</ol>";
	return $navi_tab;
}
/* ================== Java Function ================= */
function PHPalert($text)
  {
	echo '<script language="JavaScript">';
	echo "alert(\"".$text."\");";
	echo '</script>';
  }
 function PHPconfirm($text,$url)
  {
echo '<script language="JavaScript">';
echo "question = confirm(\"$text\"); if(question !=0){ top.location =\"$url\";}";
echo '</script>';
  }
function PHPgourl($text)
  {
	echo '<script language="JavaScript">';
	echo 'window.location="'.$text.'";';
	echo '</script>';
  }
  function PHPback()
  {
	echo '<script language="JavaScript">';
	echo 'history.back();';
	echo '</script>';
  }
 function PHPreload()
  {
	echo '<script language="JavaScript">';
	echo 'window.opener.location.reload();';
	echo '</script>';
  }
   function PHPJavaScript($text) { //window.open(URL, name, specs, replace)
	echo '<script language="JavaScript">';
	echo $text;
	echo '</script>';
  }
  function NummonthThaitoName($m){
	  $full_month_name_th = array('มกราคม'=>'01','กุมภาพันธ์'=>'02','มีนาคม'=>'03','เมษายน'=>'04','พฤษภาคม'=>'05','มิถุนายน'=>'06','กรกฎาคม'=>'07','สิงหาคม'=>'08','กันยายน'=>'09','ตุลาคม'=>'10','พฤศจิกายน'=>'11','ธันวาคม'=>'12');
	  foreach($full_month_name_th as $d=>$k){
		if($m==$k){
			$Number = $d;
		}
	}
	return $Number;
  }
  function monthThaitoNum($m){
	  $full_month_name_th = array('มกราคม'=>'01','กุมภาพันธ์'=>'02','มีนาคม'=>'03','เมษายน'=>'04','พฤษภาคม'=>'05','มิถุนายน'=>'06','กรกฎาคม'=>'07','สิงหาคม'=>'08','กันยายน'=>'09','ตุลาคม'=>'10','พฤศจิกายน'=>'11','ธันวาคม'=>'12');
	  foreach($full_month_name_th as $d=>$k){
		if($m==$d){
			$Number = $k;
		}
	}
	return $Number;
  }
  function monthEngtoNum($m){
	  $full_month_name_th = array('Jan'=>'01','Feb'=>'02','Mar'=>'03','Apr'=>'04','May'=>'05','Jun'=>'06','Jul'=>'07','Aug'=>'08','Sep'=>'09','Oct'=>'10','Nov'=>'11','Dec'=>'12');
	  foreach($full_month_name_th as $d=>$k){
		if($m==$d){
			$Number = $k;
		}
	}
	return $Number;
  }
	function listMont($m){
		$full_month_name_th = array('Jan'=>'1','Feb'=>'2','Mar'=>'3','Apr'=>'4','May'=>'5','Jun'=>'6','Jul'=>'7','Aug'=>'8','Sep'=>'9','Oct'=>'10','Nov'=>'11','Dec'=>'12');
		foreach($full_month_name_th as $d=>$k){
		if($m==$k){
			$Number = $d;
		}
	}
	return $Number;
	}
  function to_dateformat($date){
	$date_var = explode('/',$date);
	$short_month_name = array('Jan'=>'01','Feb'=>'02','Mar'=>'03','Apr'=>'04','May'=>'05','Jun'=>'06','Jul'=>'07','Aug'=>'08','Sep'=>'09','Oct'=>'10','Nov'=>'11','Dec'=>'12');
	foreach($short_month_name as $d=>$k){
		if(strtoupper($date_var['1'])==strtoupper($d)){
			$var_month = $k;
		}
	}
	$dateformat = $date_var['2']."-".$var_month."-".$date_var['0'];
	return $dateformat;
}
function dateFormat($var_date){
	if($var_date!='0000-00-00' and $var_date!=''){
	$date = date_create($var_date);
	return strtoupper(date_format($date,"d/M/y")); //16/Feb/1917
	}else if($var_date==''){ return "";
	}else{ return ""; }
}
function dateFormatY($var_date){
	if($var_date!='0000-00-00' and $var_date!=''){
	$date = date_create($var_date);
	return strtoupper(date_format($date,"d/M/Y")); //16/Feb/1917
	}else if($var_date==''){ return "";
	}else{ return ""; }
}
function timeFormat($var){
	echo substr($var,0,5);
}
function icon_status($obj,$val,$truevaul){
							 if($obj=='radio'){
								 if($val==$truevaul){
									 $icon = 'fa-check-circle-o fa-lg';
								 }else{
									 $icon = 'fa-circle-o fa-lg';
								 }
							 }else{
								if($val==$truevaul){
									 $icon = 'fa-check-square-o fa-lg';
								 }else{
									 $icon = 'fa-square-o fa-lg';
								 }
							 }
							 return $icon;
						}
function edit_bt($ptask,$limitd,$rd_id){
					if($limitd<=15){
						$bt = "<a class=\"btn-xs btn-small bootpopup\"  href=\"?pid=".$_GET['pid']."&task=edit".$ptask."&rd=".$rd_id."\">";
						$bt .="<i class=\"fa fa-edit\"></i> Edit</a>";
					}
					return $bt;
				}
function numberFormat($val,$d){
	$n = number_format($val,$d, '.', '');
	return $n;
}
function reference_status($s){
	switch($s){
		case "P" : $ref_s = "Positive"; break;
		case "N" : $ref_s = "Negative"; break;
		case "I" : $ref_s = "Indeterminate"; break;
		case "E" : $ref_s = "Equivocal"; break;
		default : $ref_s = ""; break;
	}
	return $ref_s ;
}
function reference_status_rt($s){
	switch($s){
		case "R" : $ref_s = "Reaction"; break;
		case "N" : $ref_s = "Non-Reactive"; break;
		default : $ref_s = ""; break;
	}
	return $ref_s ;
}
function reference_status_rp($s){
	switch($s){
		case "less than" : $ref_s = "Less than"; break;
		case "equal to" : $ref_s = "Equal to"; break;
		case "greater than" : $ref_s = "Greater than"; break;
		case "Undetectable" : $ref_s = "Undetectable"; break;
		default : $ref_s = ""; break;
	}
	return $ref_s ;
}
function random_word($n){
$Caracteres_up = strtoupper('ABCDEFGHIJKLMOPQRSTUVXWYZ');
$Caracteres_lo = strtolower('ABCDEFGHIJKLMOPQRSTUVXWYZ');
$number = '0123456789';
$text = $Caracteres_up.$Caracteres_lo.$number;
$QuantidadeCaracteres = strlen($text);
$QuantidadeCaracteres--;
$Hash=NULL;
    for($x=1;$x<=$n;$x++){
        $Posicao = rand(0,$QuantidadeCaracteres);
        $Hash .= substr($text,$Posicao,1);
    }
	return $Hash;
}
function random_filename($len)
{
srand((double)microtime()*10000000);
$chars = "ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghijklmnpqrstuvwxyz123456789";
$ret_str = "";
$num = strlen($chars);
	for($i = 0; $i < $len; $i++)
	{
	$ret_str.= $chars[rand()%$num];
	$ret_str.="";
	}
return $ret_str;
}
function random_id($len)
{
srand((double)microtime()*10000000);
$chars = "123456789";
$ret_str = "";
$num = strlen($chars);
	for($i = 0; $i < $len; $i++)
	{
	$ret_str.= $chars[rand()%$num];
	$ret_str.="";
	}
return $ret_str;
}
function checkfile($filename)
{
	if($filename == "application/pdf")	{    $exp=".pdf";	 }
	 else  if($filename == "application/msword")	{  $exp=".doc";  }
	 else  if($filename== "application/vnd.ms-excel")	{  $exp=".xls";   }
	 else  if($filename== "application/vnd.ms-powerpoint")	{  $exp=".ppt";   }
     else  if($filename== "application/vnd.visio")	{  $exp=".vsd";   }
	 else  if($filename== "image/png")	{  $exp=".png";   }
	else if($filename == "image/x-png")	{    $exp=".png";	 }
	else if($filename == "image/bmp")	{    $exp=".bmp";	 }
	else  if($filename== "image/pjpeg")	{  $exp=".jpg";   }
	else if($filename== "image/jpeg")	{  $exp=".jpg";   }
    	else  if($filename == "image/gif")	{  $exp=".gif";   }
	else if($filename == "video/mp4")	{  $exp=".mp4";   }
	else if($filename == "audio/mpeg3")	{  $exp=".mp3";   }
	else if($filename == "audio/mp3")	{  $exp=".mp3";   }
	else  if($filename == "application/x-shockwave-flash"){  $exp=".swf";   }
return $exp;
}
//-------------------------------------- Function One
function classcolonumb($n){
    $sql_number = "select tdnbg from tdnumber where tdnumb = '$n' or tdnbmir = '$n'";
    $result_number = get_a_line($sql_number);
    if($result_number['tdnbg']!=''){
        $classbg = $result_number['tdnbg'];
    }else{
        $classbg = 'active';
    }
return "class='$classbg'";
}

function meaning($n,$txt){
    $sql_number = "select * from tdnumber where tdnumb = '$n' or tdnbmir = '$n'";
    $result_number = get_a_line($sql_number);
    return $result_number[$txt]; 
}

function limitText($str, $limit){
mb_internal_encoding("UTF-8");
if(mb_strlen($str)> $limit){
return(mb_substr($str,0, $limit)."...");
}else{
return($str);
}
}
?>