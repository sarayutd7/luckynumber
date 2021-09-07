<aside id="sidebar-right" class="sidebar-right">
    <div class="nano">
        <div class="nano-content">
            <a href="#" class="mobile-close visible-xs">
                Collapse <i class="fa fa-chevron-right"></i>
            </a>

            <div class="sidebar-right-wrapper">

                <div class="sidebar-widget widget-calendar">
                    <h6>Upcoming Tasks</h6>
                    <div data-plugin-datepicker data-plugin-skin="dark"></div>
                </div>

                <div class="sidebar-widget widget-friends">
                    <h6>เบอร์มงคลล่าสุด</h6>
                    <?
                    $sql_luckyNb = "select * from lknumbofservice order by lknbid desc limit 3";
                    $result_luckyNb = get_rsltset($sql_luckyNb);
                    $nr_luckyNb = count($result_luckyNb); 
                    ?>
                    <ul>
                       <? for($lk=0;$lk<$nr_luckyNb;$lk++){ ?>
                        <li class="status-online"> 
                            <div class="profile-info">
                                <span class="name"><?=$result_luckyNb[$lk]['lknumber']?> 
                                <? if($result_luckyNb[$lk]['extra']==1){?> <i class="fa fa-star fa-spin warning"></i> <? } ?>
                                </span>
                                <span class="title"><?=$result_luckyNb[$lk]['lkservicepvd']?>, <?=limitText($result_luckyNb[$lk]['package'],35)?></span>
                            </div>
                        </li> 
                        <? } ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</aside>