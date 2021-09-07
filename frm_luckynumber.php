<header class="page-header">
    <h2>เพิ่มเบอร์โทรศัพท์มงคล</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.php">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>แบบฟอร์มเพิ่มเบอร์โทรศัพท์มงคล</span></li>
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
                <h2 class="panel-title">เพิ่มข้อมูลชุดเลขเบอร์โทรศัพท์มงคล</h2>
            </header>
            <div class="panel-body">
                <form action="action_frmluckynumber.php" class="form-horizontal form-bordered" method="post">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="fc_inputmask_1">ชุดตัวเลข</label>
                        <div class="col-md-6">
                            <input id="fc_inputmask_1" name="Luckynumber" data-plugin-masked-input data-input-mask="999-999-9999" placeholder="___-___-____" class="form-control" value="<?=$_GET['lucknb']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="service">ผู้ให้บริการ</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="service" name="service">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="package">แพ็คเกจมือถือขั้นต่ำ</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="package" name="package">
                            <span class="help-block">รายเดือน หรือ ค่าบริการขั้นต่ำ</span>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="extra">Extra</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="extra" name="extra">
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