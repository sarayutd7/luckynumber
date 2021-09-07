<?
include("conn/config.php");
include("conn/function.inc.php");

db_connect();
?>
<!doctype html>
<html>

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard | Luky Number</title>
    <meta name="keywords" content="Dashboard | Luky Number" />
    <meta name="description" content="Dashboard | Luky Number : พัฒนาเล่นๆ">
    <meta name="author" content="JSOFT.net">
</head>

<body>
<?
 $number1 = $_POST['number1'];
 $number2 = $_POST['number2'];
    
 $inputHelpText = $_POST['inputHelpText'];
 $classbg = $_POST['classbg'];
    
 $fortunate = $_POST['fortunate'];
 $unfortunate = $_POST['unfortunate'];
 
 $tdnid = $_POST['tdnid'];
    
 $update_data = "update tdnumber set tdnumb ='$number1', 
                                          tdnbmir = '$number2', 
                                          tdnbnotif = '$inputHelpText', 
                                          tdnbg = '$classbg', 
                                          tdnfortunate = '$fortunate', 
                                          tdnunfortunate = '$unfortunate' where tdnid ='$tdnid'";
 update_data($update_data);
 echo PHPalert("Update Complete");
 echo PHPgourl("index.php?task=listnumber");
?>
</body>
</html>