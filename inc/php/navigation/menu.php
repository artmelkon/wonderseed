    <div class="logo">
        <img src="../../img/logo.png">
    </div>
    <div id="openBtn" class="menu-btn">
        <svg version="1.1" id="mobileBtn" class="hamburger-btn" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="100%" height="100%" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                <path class="line ln1" d="M47.977,7.438c0,1.657-1.258,3-2.811,3H4.835c-1.553,0-2.812-1.343-2.812-3l0,0c0-1.657,1.259-3,2.812-3h40.331
                    C46.719,4.438,47.977,5.78,47.977,7.438L47.977,7.438z"/>
                <path class="line ln3" d="M47.977,42.563c0,1.656-1.258,3-2.811,3H4.835c-1.553,0-2.812-1.344-2.812-3l0,0c0-1.657,1.259-3,2.812-3h40.331
                    C46.719,39.563,47.977,40.905,47.977,42.563L47.977,42.563z"/>
                <text class="line ln-menu" transform="matrix(1.0928 0 0 1 2.9165 29.8594)" font-family="'MyriadPro-Regular'" font-size="16.5576">menu</text>
        </svg>
    </div>
    <!-- modal navigation menu -->
    <div id="modal" class="modal-nav-container">
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
