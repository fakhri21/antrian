<nav class="navbar navbar-fixed-top" style="top:0;">
        <div class="container-fluid">
            <div class="navbar-btn">
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu icon-list"></i></button>
            </div>

            <div class="navbar-brand">
                <h3>Doc App</h3>          
            </div>
            
            <div class="navbar-right">
                <form id="navbar-search" class="navbar-form search-form" method="get" action="<?php echo base_url('search'); ?>">
                    <input class="form-control" placeholder="Search here..." type="text" name="keyword">
                    <button type="submit" class="btn btn-default"><i class="icon-magnifier"></i></button>
                </form>                

                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <!--<li>
                            <a href="<?= base_url(); ?>calendar" data-toggle="tooltip" data-original-title="Kalender" class="icon-menu d-none d-sm-block"><i class="icon-calendar"></i></a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>message" data-toggle="tooltip" data-original-title="Pesan" class="icon-menu d-none d-sm-block"><i class="icon-envelope"></i><span class="notification-dot"></span></a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown" >
                                <i class="icon-bell"></i>
                                <span class="notification-dot"></span>  
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li class="header"><strong>You have 4 new Notifications</strong></li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-warning"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Campaign <strong>Holiday Sale</strong> is nearly reach budget limit.</p>
                                                <span class="timestamp">10:00 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>                               
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-like text-success"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Your New Campaign <strong>Holiday Sale</strong> is approved.</p>
                                                <span class="timestamp">11:30 AM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                 <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-pie-chart text-info"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Website visits from Twitter is 27% higher than last week.</p>
                                                <span class="timestamp">04:00 PM Today</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <div class="media">
                                            <div class="media-left">
                                                <i class="icon-info text-danger"></i>
                                            </div>
                                            <div class="media-body">
                                                <p class="text">Error on website analytics configurations</p>
                                                <span class="timestamp">Yesterday</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="footer"><a href="<?= base_url(); ?>notification" class="more">See all notifications</a></li>
                            </ul>
                        </li>-->
                        <li>
                            <a href="<?php echo site_url('logout'); ?>" class="icon-menu"><i class="icon-power" data-original-title="Logout" data-toggle="tooltip"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>