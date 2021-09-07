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
 $numbertree = $_POST['numbertree']; 
    
 $inputHelpText = $_POST['inputHelpText'];  
 $comment = $_POST['comment'];  
 
 $trdnid = $_POST['trdnid'];
    
 $update_data = "update trdnumber set trdnumb ='$numbertree',  
                                          tdnbnotif = '$inputHelpText', 
                                          trdnbcm = '$comment' where trdnid ='$trdnid'";
 update_data($update_data);  
 echo PHPalert("Update Complete");
 echo PHPgourl("index.php?task=listnumbertree");
?>
</body>
</html>