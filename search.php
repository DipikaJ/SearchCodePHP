<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
include ("Helper.php");
$val=$_REQUEST['a'];
if($val=="")
{
  return null;
 }
 else
 {
$result=$helper->read_record("*","user_details","user_name like '%$val%' ");

if(is_array($result))
{
 foreach($result as $r)
 {
  echo "<a href='display.php?id=".$r['user_detail_id']."'>" .$r['user_name']."</a>";
  echo "<br/>";
  }
 }
else
{
 return "No data" ;
 }
}

?>
</body>
</html>
