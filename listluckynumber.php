<header class="page-header">
    <h2>ชุดเลขมงคลที่ยังว่างอยู่</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.php">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>รวมชุดเลขเบอร์โทรศัพท์ทั้งหมด</span></li>
        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="pull-right">
                    <a href="index.php?task=frmluckynumber" class="btn btn-sm btn-success fa fa-plus"> เพิ่มชุดเบอร์โทรศัพท์มงคล</a>
                </div>
                <h2 class="panel-title">ตารางชุดเลขเบอร์โทรศัพท์มงคลทั้งหมด</h2>
            </header>
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-default">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">ลำดับ</th>
                            <th class="text-center" width="12%">ชุดเลข</th> 
                            <th width="31%">ผู้ให้บริการ</th> 
                        </tr>
                    </thead>
                    <? 
                $sql_listnumber = "select * from lknumbofservice order by lknbid asc";
                $result_listnumber = get_rsltset($sql_listnumber);
                $nr_listnumber = count($result_listnumber); ?>
                    <tbody>
                        <? for($l=0;$l<$nr_listnumber;$l++){ $line = $line+1;?>
                        <tr <? if($result_listnumber[$l]['extra']==1){ echo "class='success'"; } ?> > 
                            <td class="text-center"><?=$line?></td>
                            <td class="text-center">
                                <? if($result_listnumber[$l]['extra']==1){?> <i class="fa fa-star fa-spin warning"></i> <? } ?>
                               
                                <?=$result_listnumber[$l]['lknumber']?>
                                <a href="index.php?task=updateLcknumber&lknbid=<?=$result_listnumber[$l]['lknbid']?>" title="Edit <?=$result_listnumber[$l]['lknumber']?>"><i class="fa fa-pencil"></i> </a>
                                
                                <a href="index.php?task=procnumber&numbertop=<?=$result_listnumber[$l]['lknumber']?>" title="วิเคราห์เบอร์ <?=$result_listnumber[$l]['lknumber']?>"><i class="fa fa-cog"></i></a>
                            </td>  
                            <td><?=$result_listnumber[$l]['lkservicepvd']?> (<?=$result_listnumber[$l]['package']?> บาท)</td>
                        </tr>
                        <? } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>