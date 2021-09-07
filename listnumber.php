<header class="page-header">
    <h2>ความหมายของตัวเลข</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.php">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>ความหมายของตัวเลขทั้งหมดในระบบ</span></li>
        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="pull-right">
                    <a href="index.php?task=frmnumber" class="btn btn-sm btn-success fa fa-plus"> เพิ่มความหมายตัวเลข</a>
                </div>
                <h2 class="panel-title">ตารางความหมายตัวเลขทั้งหมด</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">ลำดับ</th>
                            <th class="text-center" width="12%">ตัวเลข</th>
                            <th class="text-center" width="13%">ตัวเลขคู่เหมือน</th>
                            <th width="31%">รายละเอียดในทางโชคดี</th>
                            <th width="31%">รายละเอียดในทางโชคร้าย</th>
                        </tr>
                    </thead>
                    <? 
                $sql_listnumber = "select * from tdnumber order by tdnumb asc";
                $result_listnumber = get_rsltset($sql_listnumber);
                $nr_listnumber = count($result_listnumber); ?>
                    <tbody>
                        <? for($l=0;$l<$nr_listnumber;$l++){ $line = $line+1;?>
                        <tr <?=classcolonumb($result_listnumber[$l]['tdnumb'])?>>
                            <td class="text-center"><?=$line?></td>
                            <td class="text-center">
                                <?=$result_listnumber[$l]['tdnumb']?>
                                <a href="index.php?task=updatenumber&tdnid=<?=$result_listnumber[$l]['tdnid']?>" title="Edit <?=$result_listnumber[$l]['tdnumb']?>"><i class="fa fa-pencil"></i> </a>
                            </td>
                            <td class="text-center">
                                <?=$result_listnumber[$l]['tdnbmir']?>
                                <a href="index.php?task=updatenumber&tdnid=<?=$result_listnumber[$l]['tdnid']?>" title="Edit <?=$result_listnumber[$l]['tdnumb']?>"><i class="fa fa-pencil"></i> </a>
                            </td>
                            <td><?=$result_listnumber[$l]['tdnfortunate']?></td>
                            <td><?=$result_listnumber[$l]['tdnunfortunate']?></td>
                        </tr>
                        <? } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>