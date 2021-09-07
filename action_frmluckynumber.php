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
 $extra = $_POST['extra']; 
    
 $insert_data = "insert into lknumbofservice set lknumber ='$Luckynumber', 
                                          lkservicepvd = '$service', 
                                          package = '$package', extra= '$extra' ";
 insert_data($insert_data);
 echo PHPalert("Save Complete");
 echo PHPgourl("index.php?task=listluckynumber");
?>
</body>
</html>