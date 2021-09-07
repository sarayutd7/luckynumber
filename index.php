<?
include("conn/config.php");
include("conn/function.inc.php");

db_connect();
?>
<!doctype html>
<html class="fixed sidebar-left-collapsed">

<? include('_head.php'); ?>

<body>
    <section class="body">

        <!-- start: header -->
        <? include('top_header.php');?>
        <!-- end: header -->

        <? include('wrapper.php');?>
        
        <? include('sidebar-right.php');?>
    </section>

    <? include('_js.php'); ?>
</body>

</html>