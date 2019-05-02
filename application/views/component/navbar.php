<?php 
$uri_one = $this->uri->segment(1); 
$uri_two = $this->uri->segment(2); 
$current_user = wp_get_current_user();
$user_roles = $current_user->roles;
$user_type = $current_user->user_login;
?>
<ul class="main-menu metismenu">                            

<!-------- resepsionis -------------->
<?php if(in_array('resepsionis', $user_roles)){?>
    <li <?php if($uri_two=="" && $uri_one=="resepsionis"){?> class="active" <?php } ?> ><a href="<?php echo base_url() . 'resepsionis' ?>"><i class="icon-book-open"></i><span>Pemeriksaan</span></a></li>
    <li <?php if($uri_two=="history"){?>  class="active" <?php } ?> ><a href="<?php echo base_url() . 'resepsionis/history' ?>"><i class="icon-calendar"></i><span>Riwayat</span></a></li>
    <li <?php if($uri_two=="pasien"){?> class="active" <?php } ?> ><a href="<?php echo base_url() . 'resepsionis/pasien' ?>"><i class="icon-users"></i><span>Data Pasien</span></a></li>
    <li <?php if($uri_two=="tambah_pasien"){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'resepsionis/tambah_pasien' ?>"><i class="icon-user-follow"></i><span>Tambah Data Pasien</span></a></li>
    <li onclick="location.reload('<?= base_url('antrian/tampil_antrian'); ?>');"><a href="#"><i class="icon-reload"></i><span>Panggil Antrian</span></a></li>
    <li onclick="location.reload('<?= base_url('antrian/tampil_antrian'); ?>');"><a href="#"><i class="icon-refresh"></i><span>Antrian Selanjutnya</span></a></li>
    
<?php }else if(in_array('apoteker', $user_roles)){ ?>
<!-------- Apotek -------------->
    <li <?php if($uri_two=="" && $uri_one=="apoteker"){?>  class="active" <?php } ?> ><a href="<?php echo base_url() . 'apoteker' ?>"><i class="icon-book-open"></i><span>Resep hari ini</span></a></li>
    <li <?php if($uri_two=='riwayat_resep'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'apoteker/riwayat_resep' ?>"><i class="icon-hourglass"></i><span>Riwayat resep</span></a></li>
    <li <?php if($uri_two=='data_obat'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'apoteker/data_obat' ?>"><i class="icon-layers"></i><span>Data obat</span></a></li>                        
    <!--<li <?php if($uri_two=='add_stok'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'apoteker/add_stok' ?>"><i class="icon-arrow-right "></i><span>Tambah Stok</span></a></li>
    <li <?php if($uri_two=='cashflow'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'apoteker/cashflow' ?>"><i class="icon-graph"></i><span>Cashflow </span></a></li>
    <li <?php if($uri_two=='obat_terjual'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'apoteker/obat_terjual' ?>"><i class="icon-calculator"></i><span>Obat terjual </span></a></li>
    <li <?php if($uri_two=='jurnal_obat'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'apoteker/jurnal_obat' ?>"><i class="icon-notebook"></i><span>Jurnal obat </span></a></li>-->
    <li <?php if($uri_two=='kategori_obat'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'apoteker/kategori_obat' ?>"><i class="icon-grid"></i><span>Kategori obat </span></a></li>
    <li <?php if($uri_two=='distributor_obat'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'apoteker/distributor_obat' ?>"><i class="icon-social-dropbox "></i><span>Distributor obat </span></a></li>
<?php } 
//--------------dokter--------------
else if(in_array('dokter', $user_roles)){?>
	<li <?php if($uri_two=="" && $uri_one=="dokter"){?>  class="active" <?php } ?> ><a href="<?php echo base_url() . 'dokter' ?>"><i class="icon-home"></i><span>Home</span></a></li>
    <li <?php if($uri_two=="riwayat"){?>  class="active" <?php } ?> ><a href="<?php echo base_url() . 'dokter/riwayat' ?>"><i class="icon-calendar"></i><span>Riwayat </span></a></li>
    <li <?php if($uri_two=="pasien"){?> class="active" <?php } ?> ><a href="<?php echo base_url() . 'dokter/pasien' ?>"><i class="icon-users"></i><span>Data Pasien</span></a></li>
<?php
}else if(in_array('superadmin', $user_roles)){?>
    <li <?php if($uri_two=="" && $uri_one=="superadmin"){?>  class="active" <?php } ?> ><a href="<?php echo base_url() . 'superadmin' ?>"><i class="icon-home"></i><span>Dashboard</span></a></li>
    <li <?php if($uri_two=="history"){?>  class="active" <?php } ?> ><a href="<?php echo base_url() . 'superadmin/history' ?>"><i class="icon-hourglass"></i><span>Riwayat pemeriksaan</span></a></li>
    <li <?php if($uri_two=="pasien"){?> class="active" <?php } ?> ><a href="<?php echo base_url() . 'superadmin/pasien' ?>"><i class="icon-users"></i><span>Data Pasien</span></a></li>
    <li <?php if($uri_two=='riwayat_resep'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'superadmin/riwayat_resep' ?>"><i class="icon-hourglass"></i><span>Riwayat resep</span></a></li>
    <li <?php if($uri_two=='data_obat'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'superadmin/data_obat' ?>"><i class="icon-layers"></i><span>Data obat</span></a></li>                        
    <li <?php if($uri_two=='cashflow'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'superadmin/cashflow' ?>"><i class="icon-graph"></i><span>Cashflow </span></a></li>
    <li <?php if($uri_two=='obat_terjual'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'superadmin/obat_terjual' ?>"><i class="icon-calculator"></i><span>Obat terjual </span></a></li>
    <li <?php if($uri_two=='jurnal_obat'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'superadmin/jurnal_obat' ?>"><i class="icon-notebook"></i><span>Jurnal obat </span></a></li>
    <li <?php if($uri_two=='kategori_obat'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'superadmin/kategori_obat' ?>"><i class="icon-grid"></i><span>Kategori obat </span></a></li>
    <li <?php if($uri_two=='distributor_obat'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'superadmin/distributor_obat' ?>"><i class="icon-social-dropbox "></i><span>Distributor obat </span></a></li>
    <li <?php if($uri_two=='distributor_obat'){?> class="active" <?php } ?>><a href="<?php echo site_url() . '/admin' ?>"><i class="icon-settings"></i><span>Advanced Mode </span></a></li>
<?php }else if(in_array('kasir', $user_roles)){?>
    <li <?php if($uri_two==''){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'kasir' ?>"><i class="icon-printer"></i><span>Pembayaran hari ini </span></a></li>
    <li <?php if($uri_two=='riwayat_pembayaran'){?> class="active" <?php } ?>><a href="<?php echo base_url() . 'kasir/riwayat_pembayaran' ?>"><i class="icon-hourglass"></i><span>Riwayat Pembayaran </span></a></li>
<?php } ?>

</ul>
<script>
function panggil(){
    $("body").load('<?php ?>');
}
</script>