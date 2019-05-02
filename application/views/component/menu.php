<?php 
$uri_one = $this->uri->segment(1);
$uri_two = $this->uri->segment(2);
?>
<div class="tab-content p-l-0 p-r-0">                
                <!-- menu super admin -->
                <div class="tab-pane 
                    <?php if($uri_one=="resepsionis" && $uri_two==""){
                    ?>active<?php } ?>" id="menu">
                    <nav class="sidebar-nav">
                        <ul class="main-menu metismenu">
                            <li <?php if($uri_one=="resepsionis" && $uri_two==""){?>class=" active"<?php }?> ><a href="<?php echo base_url() . 'resepsionis/' ?>"><i class="icon-heart"></i>Antrian</a></li>                            
                        </ul>
                    </nav>
                </div>
</div>
