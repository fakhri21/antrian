<?php require_once(APPPATH."views/component/formpopup.php"); ?>
<div id="main-content">
        <div class="container-fluid">
            <?php require_once(APPPATH."views/component/breadcum.php"); ?>
            
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card patients-list">
                        <div class="body">
                            <!-- Tab panes -->
                            <div class="tab-content m-t-10 padding-0">
                                <div class="tab-pane table-responsive active show" id="All">
                                    <table class="table  table-hover js-basic-example dataTable table-custom" id="datas">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>NO</th>
                                                <th>Foto</th>
                                                <th>Kode Pasien</th>
                                                <th>Nama</th>
                                                <th>Usia</th>
                                                <th>Alamat</th>
                                                <th>No HP</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat, Tgl Lahir</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; foreach ($pasien as $r) { ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><span class="list-icon"><img class="patients-img" src="<?php echo base_url() . 'assets/foto_pasien/' . $r->foto; ?>" alt=""></span></td>

                                                <td><span class="list-name"><?php echo $r->no_pasien; ?></span></td>
                                                <td><?php echo $r->nama_pasien; ?></td>
                                                <td><?php echo $r->usia; ?></td>
                                                <td><?php echo $r->alamat_pasien; ?></td>
                                                <td><?php echo $r->no_hp; ?></td>
                                                <td><?php echo $r->jenis_kelamin; ?></td>
                                                <td><?php echo $r->tempat_lahir . ', '; 
                                                          $date = date_create($r->tgl_lahir); 
                                                          echo date_format($date,'d M Y'); ?></td>
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card patients-list">
                        <div class="body">
                            <!-- Tab panes -->
                            <div class="tab-content m-t-10 padding-0">
                                <div class="tab-pane table-responsive active show" id="All">
                                    <table class="table  table-hover js-basic-example dataTable table-custom" >
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Kode Obat</th>
                                                <th>Kategori</th>
                                                <th>Nama Obat</th>
                                                <th>Modal</th>
                                                <th>Harga Jual</th>
                                                <th>Stok</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($obat as $key=>$view){ ?>
                                                <tr>
                                                    <td><?php echo $key+1; ?></td>
                                                    <td><?php echo $view->kode_obat; ?></td>
                                                    <td><?php echo $view->nama_kategori; ?></td>
                                                    <td><?php echo $view->nama_obat; ?></td>
                                                    <td><?php echo"Rp ".number_format($view->modal); ?></td>
                                                    <td><?php echo"Rp ".number_format($view->harga_jual); ?></td>
                                                    <td><?php echo $view->stok; ?></td>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
<script >
    
</script>