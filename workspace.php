<section role="main" class="content-body">
    <?
    switch($_GET['task']){
        case 'frmnumber': include("frm_number.php"); break;
            case 'updatenumber': include("frm_updatenumber.php"); break;
        case 'listnumber': include("listnumber.php"); break;
        case 'listnumbertree': include("listnumbertree.php"); break;
            case 'frmnumbertree': include("frm_numbertree.php"); break;
            case 'updatenumbertree': include("frm_updatenumbertree.php"); break;
        case 'procnumber': include("$_GET[task]_form.php"); break;
        case 'procname': include("$_GET[task]_form.php"); break;
        case 'listluckynumber' : include('listluckynumber.php'); break;
        case 'frmluckynumber': include('frm_luckynumber.php'); break;
        case 'updateLcknumber': include('frm_updateluckynumber.php'); break;
        default : include('blank.php'); break;
    }
    ?>
</section>