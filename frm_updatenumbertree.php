<? 
$sql_update = get_a_line("select * from trdnumber where trdnid = '".$_GET['trdnid']."'");
?>
   <header class="page-header">
    <h2>แก้ไขความหมายของตัวเลข 3 หลัก</h2>
    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.php">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>แก้ไขความหมายของตัวเลข 3 หลัก</span></li>
        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="pull-right">
                    <a href="index.php?task=listnumber" class="btn btn-sm btn-primary fa fa-eye"> ดูความหมายตัวเลข 3 หลักทั้งหมด</a>
                </div>
                <h2 class="panel-title">แก้ไขข้อมูลความหมายตัวเลข 3 หลัก</h2>
            </header>
            <div class="panel-body">
                <form action="update_frmnumbertree.php" class="form-horizontal form-bordered" method="post">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">ตัวเลข 3 หลัก</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="numbertree" name="numbertree" value="<?=$sql_update['trdnumb']?>">
                            <input type="hidden" class="form-control" id="trdnid" name="trdnid" value="<?=$sql_update['trdnid']?>">
                        </div>
                    </div> 

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputHelpText">ประเภท/หมวดหมู่ตัวเลข</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputHelpText" name="inputHelpText" value="<?=$sql_update['tdnbnotif']?>">
                            <span class="help-block">ประเภท/คุณะลักษณ์ของตัวเลขทั้งคู่</span>
                        </div>
                    </div>

                    <div class="form-group has-error">
                        <label class="col-md-3 control-label" for="unfortunate">ให้คุณ/ความหมาย</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="3" id="comment" name="comment"><?=$sql_update['trdnbcm']?></textarea>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                            <input type="submit" class="btn btn-sm btn-success" value="บันทึก" />
                            <input type="reset" class="btn btn-sm btn-danger" value="ยกเลิก" />
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>