<?php

?> 
    <div class="mobile-menu top-nave sticky">
        <a href="<?php echo $menu->home->url; ?>"><?php echo $menu->home->title; ?></a>
        <a href="<?php echo $menu->pos->url; ?>"><?php echo $menu->pos->title; ?></a>
        <a href="<?php echo $menu->gme->url; ?>"><?php echo $menu->gme->title; ?></a>
        <div class="subnav" onclick="showFnc(this)">
            <a href="javascript: void(0)">campaigns <i class="fa fa-caret-down"></i></a>
            <div class="subnav-container text1">
                <a href="<?php echo $menu->rch->url; ?>"><?php echo $menu->rch->title; ?></a>
                <a href="<?php echo $menu->eyx->url; ?>"><?php echo $menu->eyx->title; ?></a>
            </div>
        </div>
        <a href="<?php echo $menu->om->url; ?>"><?php echo $menu->om->title; ?></a>
        <div class="subnav" onclick="showFnc(this)">
            <a href="javascript: void(0)">get involved <i class="fa fa-caret-down"></i></a>  
            <div class="subnav-container text1">
                <a href="<?php echo $menu->dnt->url; ?>"><?php echo $menu->dnt->title; ?></a>
                <a href="<?php echo $menu->cnt->url; ?>"><?php echo $menu->cnt->title; ?></a>
            </div>
        </div> 
        <div class="subnav" onclick="showFnc(this)">
            <a href="javascript: void(0)">who we are <i class="fa fa-caret-down"></i></a>
            <div class="subnav-container text1">
                <a href="<?php echo $menu->ot->url; ?>"><?php echo $menu->ot->title; ?></a>
                <a href="<?php echo $menu->bod->url; ?>"><?php echo $menu->bod->title; ?></a>
            </div>
        </div>
        <a href="<?php echo $menu->wp->url; ?>"><?php echo $menu->wp->title; ?></a>
    </div>
</div>