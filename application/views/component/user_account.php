<?php $current_user = wp_get_current_user(); ?>
<div class="user-account">
                <img src="<?php echo base_url() ?>assets/images/admin.png" class="rounded-circle user-photo" alt="User Profile Picture">
                <div class="dropdown">
                    <span>Welcome,</span>
                    <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>
                        <?php echo esc_html( $current_user->user_firstname);?>
                        </strong></a>
                    <ul class="dropdown-menu dropdown-menu-right account">
                        <li><a href="<?= site_url('/').'user'; ?>" target="_blank"><i class="icon-user"></i>My Profile</a></li>
                        <li><a href="<?= site_url('/').'password-reset';?>" target="_blank"><i class="icon-envelope-open"></i>Reset Pass</a></li>
                        <li class="divider"></li>
                        <li><a href="<?= site_url('/').'logout'; ?>"><i class="icon-power"></i>Logout</a></li>
                    </ul>
                </div>
                <hr>
                
                <ul class="row list-unstyled">
                    <li class="col-4">
                        <small>Antrian</small>
                        <h6 id="antrian"><?= $antrian; ?></h6>
                    </li>
                    <li class="col-4">
                        <small>Selanjutnya</small>
                        <h6 id="selanjutnya"><?= $selanjutnya->noantrian+1; ?></h6>
                    </li>
                    <li class="col-4">
                        <small>Selesai</small>
                        <h6 id="selesai"><?= $selesai; ?></h6>
                    </li>
                </ul>
            </div>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.js') ?>"></script>
<script type="text/javascript">
    
    $(document).ready(function(){
        setInterval(function(){
            $("#antrian").load(" #antrian");
            $("#selanjutnya").load(" #selanjutnya");
            $("#selesai").load(" #selesai");
        }, 5000);
    });
    
        
</script>

