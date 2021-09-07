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
 $number1 = $_POST['numbertree']; 
    
 $inputHelpText = $_POST['inputHelpText'];
 $comment = $_POST['comment'];
     
 $unfortunate = $_POST['unfortunate'];
    
    
 $insert_data = "insert into trdnumber set trdnumb ='$number1',  
                                          tdnbnotif = '$inputHelpText', 
                                          trdnbcm = '$comment'";
 insert_data($insert_data);
 echo PHPalert("Save Complete");
 echo PHPgourl("index.php?task=listnumbertree");
?>
</body>
</html>