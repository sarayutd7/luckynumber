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
 $Luckynumber = $_POST['Luckynumber']; 
    
 $service = $_POST['service'];
 $package = $_POST['package'];
 
 $lknbid = $_POST['lknbid'];
 $extra = $_POST['extra'];  
 $update_data = "update lknumbofservice set lknumber ='$Luckynumber', 
                                          lkservicepvd = '$service', 
                                          package = '$package', extra= '$extra' where lknbid ='$lknbid'";
 update_data($update_data);
 echo PHPalert("Update Complete");
 echo PHPgourl("index.php?task=listluckynumber");
?>
</body>
</html>