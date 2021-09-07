<header class="page-header">
    <h2>ความหมายของตัวเลข 3 หลัก</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.php">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>ความหมายของตัวเลข 3 หลักทั้งหมดในระบบ</span></li>
        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="pull-right">
                    <a href="index.php?task=frmnumbertree" class="btn btn-sm btn-success fa fa-plus"> เพิ่มความหมายตัวเลข 3 หลัก</a>
                </div>
                <h2 class="panel-title">ตารางความหมายตัวเลข 3 หลักทั้งหมด</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">ลำดับ</th>
                            <th class="text-center" width="12%">ตัวเลข 3 หลัก</th> 
                            <th width="31%">รายละเอียด</th> 
                        </tr>
                    </thead>
                    <? 
                $sql_listnumber = "select * from trdnumber order by trdnumb asc";
                $result_listnumber = get_rsltset($sql_listnumber);
                $nr_listnumber = count($result_listnumber); ?>
                    <tbody>
                        <? for($l=0;$l<$nr_listnumber;$l++){ $line = $line+1;?>
                        <tr>
                            <td class="text-center"><?=$line?></td>
                            <td class="text-center">
                                <?=$result_listnumber[$l]['trdnumb']?>
                                <a href="index.php?task=updatenumbertree&trdnid=<?=$result_listnumber[$l]['trdnid']?>" title="Edit <?=$result_listnumber[$l]['trdnumb']?>"><i class="fa fa-pencil"></i> </a>
                            </td>  
                            <td><?=$result_listnumber[$l]['trdnbcm']?></td>
                        </tr>
                        <? } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>