<?
$sql_update = get_a_line("select * from tdnumber where tdnid = '".$_GET['tdnid']."'");
?>
   <header class="page-header">
    <h2>แก้ไขความหมายของตัวเลข</h2>
    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.php">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>แก้ไขความหมายของตัวเลข</span></li>
        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="pull-right">
                    <a href="index.php?task=listnumber" class="btn btn-sm btn-primary fa fa-eye"> ดูความหมายตัวเลขทั้งหมด</a>
                </div>
                <h2 class="panel-title">แก้ไขข้อมูลความหมายตัวเลข</h2>
            </header>
            <div class="panel-body">
                <form action="update_frmnumber.php" class="form-horizontal form-bordered" method="post">
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">ตัวเลข</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="number1" name="number1" value="<?=$sql_update['tdnumb']?>">
                            <input type="hidden" class="form-control" id="tdnid" name="tdnid" value="<?=$sql_update['tdnid']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputDefault">ตัวเลขคู่เหมือน</label>
                        <div class="col-md-6">
                            <input type="number" class="form-control" id="number2" name="number2" value="<?=$sql_update['tdnbmir']?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputHelpText">ประเภท/หมวดหมู่ตัวเลข</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="inputHelpText" name="inputHelpText" value="<?=$sql_update['tdnbnotif']?>">
                            <span class="help-block">ประเภท/คุณะลักษณ์ของตัวเลขทั้งคู่</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="classbg">ระดับความโชคดี</label>
                        <div class="col-md-6">
                            <select class="form-control input-md mb-md" id="classbg" name="classbg">
                                <option class="bg-info" value="info" <? if($sql_update['tdnbg']=='info'){ echo "select"; }?> >info</option>
                                <option class="bg-primary" value="primary" <? if($sql_update['tdnbg']=='primary'){ echo "select"; }?>>primary</option>
                                <option class="bg-warning" value="warning" <? if($sql_update['tdnbg']=='warning'){ echo "select"; }?>>warning</option>
                                <option class="bg-success" value="success" <? if($sql_update['tdnbg']=='success'){ echo "select"; }?>>success</option>
                                <option class="bg-danger" value="danger" <? if($sql_update['tdnbg']=='danger'){ echo "select"; }?>>danger</option>
                                <option class="bg-dark" value="dark" <? if($sql_update['tdnbg']=='dark'){ echo "select"; }?>>dark</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group has-success">
                        <label class="col-md-3 control-label" for="fortunate">ให้คุณ/ความหมายในทางโชคดี</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="3" id="fortunate" name="fortunate"><?=$sql_update['tdnfortunate']?></textarea>
                        </div>
                    </div>

                    <div class="form-group has-error">
                        <label class="col-md-3 control-label" for="unfortunate">ให้คุณ/ความหมายในทางโชคร้าย</label>
                        <div class="col-md-6">
                            <textarea class="form-control" rows="3" id="unfortunate" name="unfortunate"><?=$sql_update['tdnunfortunate']?></textarea>
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