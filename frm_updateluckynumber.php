<? //echo "select * from lknumbofservice where lknbid = '".$_GET['lknbid']."'";
$sql_update = get_a_line("select * from lknumbofservice where lknbid = '".$_GET['lknbid']."'");
?>
   <header class="page-header">
    <h2>แก้ไขชุดเลขเบอร์โทรศัพท์มงคล</h2>
    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.php">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>แก้ไขชุดเลขเบอร์โทรศัพท์มงคล</span></li>
        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="pull-right">
                    <a href="index.php?task=listluckynumber" class="btn btn-sm btn-primary fa fa-eye"> ดูชุดเลขเบอร์โทรศัพท์มงคลทั้งหมด</a>
                </div>
                <h2 class="panel-title">แก้ไขข้อมูลชุดเลขเบอร์โทรศัพท์มงคล</h2>
            </header>
            <div class="panel-body">
                <form action="update_frmluknumber.php" class="form-horizontal form-bordered" method="post">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="Luckynumber">ชุดตัวเลข</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="Luckynumber" name="Luckynumber" value="<?=$sql_update['lknumber']?>">
                            <input type="hidden" class="form-control" id="lknbid" name="lknbid" value="<?=$sql_update['lknbid']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="service">ผู้ให้บริการ</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="service" name="service" value="<?=$sql_update['lkservicepvd']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="package">แพ็คเกจมือถือขั้นต่ำ</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="package" name="package" value="<?=$sql_update['package']?>">
                            <span class="help-block">รายเดือน หรือ ค่าบริการขั้นต่ำ</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="extra">Extra</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="extra" name="extra" value="<?=$sql_update['extra']?>">
                            <span class="help-block">extra : ความพิเศษ </span>
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