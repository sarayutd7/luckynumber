<header class="page-header">
    <h2>เบอร์โทรศัพท์ที่ต้องการวิเคราะห์</h2>

    <div class="right-wrapper pull-right">
        <ol class="breadcrumbs">
            <li>
                <a href="index.php">
                    <i class="fa fa-home"></i>
                </a>
            </li>
            <li><span>วิเคราะห์/สังเคราะห์ เบอร์โทรศัพท์</span></li>
            <li><span>เบอร์โทรศัพท์</span></li>
        </ol>

        <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
    </div>
</header>
<div class="row">
    <div class="col-xs-12">
        <section class="panel">
            <header class="panel-heading">

                <h2 class="panel-title">เบอร์โทรศัพท์ที่ต้องการวิเคราะห์</h2>
                <p class="panel-subtitle">
                    กรอกเบอร์โทรศัพท์ที่ต้องการวิเคราะห์ ให้ครบ 10 หลัก
                </p>
            </header>
            <div class="panel-body">
                <div class="form-body">
                    <form class="form-horizontal form-bordered" action="<?=$_SERVER['PHP_SELF']?>" method="get">
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="fc_inputmask_1">Phone</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone"></i>
                                    </span>
                                    <input type="hidden" id="task" name="task" value="<?=$_GET['task']?>">
                                    <input id="fc_inputmask_1" name="numbertop" data-plugin-masked-input data-input-mask="999-999-9999" placeholder="___-___-____" class="form-control" value="<?=$_GET['numbertop']?>">

                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <input type="submit" class="btn btn-sm btn-success" value="วิเคราะห์" />
                                <a href="http://localhost/luckynumber/index.php?task=frmluckynumber&lucknb=<?=$_GET['numbertop']?>" class="btn btn-sm btn-primary">ส่งไป LuckNumber</a>
                                <input type="reset" class="btn btn-sm btn-danger" value="ยกเลิก" />
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </div>
</div>

<? if($_GET['numbertop']!=''){?>
<div class="row">
    <div class="col-xs-12">
        <section class="panel panel-info">
            <header class="panel-heading">
                <h2 class="panel-title">ผล</h2>
                <p class="panel-subtitle">
                    ผลการวิเคราะห์เบอร์ <?=$_GET['numbertop']?> ตามหลักการ 0XX-ABCDEFG
                </p>
            </header>
            <div class="panel-body">
                <div class="form-body">
                    <?
    $lukynumber = str_replace('-','',$_GET['numbertop']);
    $math1 = substr($lukynumber,2,2);
    $math2 = substr($lukynumber,3,2);
    $math3 = substr($lukynumber,4,2);
    $math4 = substr($lukynumber,5,2);
    $math5 = substr($lukynumber,6,2);
    $math6 = substr($lukynumber,7,2);
    $math7 = substr($lukynumber,8,2); 
                          
    //--------------------------------
    //print_r(str_split($lukynumber));
    $numb_length = str_split($lukynumber); 
    for($i=0;$i<=count($numb_length);$i++){
        $sum = $sum+$numb_length[$i];
    } 
    ?>

                    <h4>ผลรวมเบอร์นี้ = <?=$sum;?></h4>
                    <p class="text-justify">ความหมาย</p>
                    <hr>
                    <table class="table table-bordered mb-none">
                        <thead>
                            <tr class="dark">
                                <th class="text-center">XA</th>
                                <th class="text-center">AB</th>
                                <th class="text-center">BC</th>
                                <th class="text-center">CD</th>
                                <th class="text-center">DE</th>
                                <th class="text-center">EF</th>
                                <th class="text-center">FG</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><?=$math1?></td>
                                <td class="text-center"><?=$math2?></td>
                                <td class="text-center"><?=$math3?></td>
                                <td class="text-center"><?=$math4?></td>
                                <td class="text-center"><?=$math5?></td>
                                <td class="text-center"><?=$math6?></td>
                                <td class="text-center"><?=$math7?></td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>
                    <table class="table table-bordered mb-none">
                        <thead>
                            <tr class="primary">
                                <th width="15%" class="text-center">คู่ตำแหน่ง</th>
                                <th width="15%" class="text-center">ตัวเลข</th>
                                <th width="35%">ให้คุณ</th>
                                <th width="35%">ให้โทษ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr <?=classcolonumb($math1)?>>
                                <td class="text-center">XA</td>
                                <td class="text-center">
                                    <a class="text-dark" data-toggle="tooltip" data-placement="bottom" title="<?=meaning($math1,'tdnbnotif')?>">
                                        <?=$math1?>
                                    </a>
                                </td>
                                <td><?=meaning($math1,'tdnfortunate')?></td>
                                <td><?=meaning($math1,'tdnunfortunate')?></td>
                            </tr>
                            <tr <?=classcolonumb($math2)?>>
                                <td class="text-center">AB</td>
                                <td class="text-center">
                                    <a class="text-dark" data-toggle="tooltip" data-placement="bottom" title="<?=meaning($math2,'tdnbnotif')?>">
                                        <?=$math2?>
                                    </a>
                                </td>
                                <td><?=meaning($math2,'tdnfortunate')?></td>
                                <td><?=meaning($math2,'tdnunfortunate')?></td>
                            </tr>
                            <tr <?=classcolonumb($math3)?>>
                                <td class="text-center">BC</td>
                                <td class="text-center">
                                    <a class="text-dark" data-toggle="tooltip" data-placement="bottom" title="<?=meaning($math3,'tdnbnotif')?>">
                                        <?=$math3?>
                                    </a>
                                </td>
                                <td><?=meaning($math3,'tdnfortunate')?></td>
                                <td><?=meaning($math3,'tdnunfortunate')?></td>
                            </tr>
                            <tr <?=classcolonumb($math4)?>>
                                <td class="text-center">CD</td>
                                <td class="text-center">
                                    <a class="text-dark" data-toggle="tooltip" data-placement="bottom" title="<?=meaning($math4,'tdnbnotif')?>">
                                        <?=$math4?>
                                    </a>
                                </td>
                                <td><?=meaning($math4,'tdnfortunate')?></td>
                                <td><?=meaning($math4,'tdnunfortunate')?></td>
                            </tr>
                            <tr <?=classcolonumb($math5)?>>
                                <td class="text-center">DE</td>
                                <td class="text-center">
                                    <a class="text-dark" data-toggle="tooltip" data-placement="bottom" title="<?=meaning($math5,'tdnbnotif')?>">
                                        <?=$math5?>
                                    </a>
                                </td>
                                <td><?=meaning($math5,'tdnfortunate')?></td>
                                <td><?=meaning($math5,'tdnunfortunate')?></td>
                            </tr>
                            <tr <?=classcolonumb($math6)?>>
                                <td class="text-center">EF</td>
                                <td class="text-center">
                                    <a class="text-dark" data-toggle="tooltip" data-placement="bottom" title="<?=meaning($math6,'tdnbnotif')?>">
                                        <?=$math6?>
                                    </a>
                                </td>
                                <td><?=meaning($math6,'tdnfortunate')?></td>
                                <td><?=meaning($math6,'tdnunfortunate')?></td>
                            </tr>
                            <tr <?=classcolonumb($math7)?>>
                                <td class="text-center">FG</td>
                                <td class="text-center">
                                    <a class="text-dark" data-toggle="tooltip" data-placement="bottom" title="<?=meaning($math7,'tdnbnotif')?>">
                                        <?=$math7?>
                                    </a>
                                </td>
                                <td><?=meaning($math7,'tdnfortunate')?></td>
                                <td><?=meaning($math7,'tdnunfortunate')?></td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>
                    <?
    $tr_math[] .= substr($lukynumber,2,3);  
    $tr_math[] .= substr($lukynumber,3,3);  
    $tr_math[] .= substr($lukynumber,4,3);  
    $tr_math[] .= substr($lukynumber,5,3);  
    $tr_math[] .= substr($lukynumber,6,3);  
    $tr_math[] .= substr($lukynumber,7,3);
    //---------------------------
    //echo $tr_math;
    //print_r($tr_math);
    for($tr=0;$tr<count($tr_math);$tr++){
        // echo "select trdnbcm, trdnumb from trdnumber where trdnumb like '%".$tr_math[$tr]."%'";
        $result_trnb = get_a_line("select trdnbcm, trdnumb from trdnumber where trdnumb like '%".$tr_math[$tr]."%'");
        if($result_trnb['trdnbcm']!=''){
            $treeNb[] = $result_trnb['trdnumb'].':'.$result_trnb['trdnbcm']; 
        } 
    }
        if(count($treeNb)>0){
        ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                         <strong>ความลับของรหัสตัวเลข 3 หลัก</strong>
                        <? foreach(array_unique($treeNb) as $v=>$k){
                            //echo "$k"; 
                            $txtspli = explode(":",$k);
                            echo "<br><strong> $txtspli[0]</strong> : "; 
                            echo $txtspli[1];
                        } ?>
                    </div>
            <? } ?>
                </div>
            </div>
        </section>
    </div>
</div>
<? } ?>