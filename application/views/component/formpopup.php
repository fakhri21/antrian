<!---------- form modal -------->
<!-- Default Size -->
<!-- tambah spesialis dokter -->
<div class="modal fade" id="addSpesialis" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah data spesialis</h4>
            </div>
            <div class="modal-body"> 
                <?php echo form_open_multipart('dokter/bridge/tambah_spesialis',['id'=>'formspesialis']); ?>
                <input type="hidden" name="id" id="idspesialis">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nama spesialis :</label>
                        <input type="text" class="form-control" placeholder="Nama Spesialis" name="nama_spesialis" required id="nama_spesialis">
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<!-- tambah posisi pegawai -->
<div class="modal fade" id="addPosisi" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah posisi</h4>
            </div>
            <div class="modal-body"> 
                <?php echo form_open_multipart('pegawai/bridge/tambah_posisi',['id'=>'formsposisi']); ?>
                <input type="hidden" name="id" id="idposisi">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nama posisi :</label>
                        <input type="text" class="form-control" placeholder="Nama Posisi" name="nama_posisi" required id="nama_posisi">
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<!-- tambah pegawai -->
<div class="modal fade" id="addPegawai" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah pegawai</h4>
            </div>
            <form action="#" id="tambah" method="post" enctype="multipart/form-data">
            <div class="modal-body"> 
                <input type="hidden" name="id" id="idposisi">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nama lengkap :</label>
                        <input type="text" class="form-control" placeholder="Nama lengkap" name="namalengkap"  id="namalengkap">
                    </div>
                    
                    <div class="form-group">
                        <label>Jenis kelamin :</label>
                        <select name="jenkel" class="form-control"  id="jenkel">
                            <option disabled selected> -- Pilih Jenis Kelamin --</option>
                            <option value="laki - laki">Laki - laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>No KTP :</label>
                        <input type="text" class="form-control" placeholder="No KTP" name="noktp"  id="noktp">
                    </div>
                    
                    <div class="form-group">
                        <label>No HP :</label>
                        <input type="text" class="form-control" placeholder="No HP" name="nohp"  id="nohp">
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal lahir :</label>
                        <input type="date" class="form-control" placeholder="" name="tgllahir"  id="tgllahir">
                    </div>
                    
                    <div class="form-group">
                        <label>Tempat lahir :</label>
                        <input type="text" class="form-control" placeholder="Tempat lahir" name="tempat_lahir"  id="tempat_lahir">
                    </div>
                    
                    <div class="form-group">
                        <label>Alamat :</label>
                        <textarea class="form-control" name="alamat" id="alamat"></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Posisi :</label>
                        <select name="posisipeg" class="form-control"  id="posisipeg">
                            <option disabled selected> -- Pilih Posisi --</option>
                            <?php foreach($posisi as $pos){?>
                            <option value="<?php echo $pos->idposisi; ?>"><?php echo $pos->nama_posisi; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- tambah pemeriksaan -->
<div class="modal fade" id="addPemeriksaan" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah pemeriksaan</h4>
            </div>
            <form action="#" id="tambah" method="post" enctype="multipart/form-data">
            <div class="modal-body"> 
                <input type="hidden" name="id" id="idposisi">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>No Atrian :</label>
                        <input type="text" class="form-control" placeholder="No Antrian" name="noantrian"  id="noantrian" value="<?php echo $selanjutnya->noantrian + 1; ?>" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label>Pasien / Kode Pasien:</label>
                        <input type="text" list="pasien" class="form-control" placeholder="Kode / nama pasien " name="kodepasien"  id="kodepasien" >
                        <datalist id="pasien">
                            <?php foreach($pasien as $pas){ ?>
                               <option value="<?php echo $pas->no_pasien." - ".$pas->nama_pasien; ?>">
                                   <?php } ?>
                        </datalist>
                    </div>
                                        
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- tambah kategori obat -->
<div class="modal fade" id="addKategori" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Kategori Obat</h4>
            </div>
            <form action="#" id="tambah" method="post" enctype="multipart/form-data">
            <div class="modal-body"> 
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Nama Kategori :</label>
                        <input type="text" class="form-control" placeholder="Nama Kategori" name="kategori"  id="kategori" >
                    </div>
                                        
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- tambah obat -->
<div class="modal fade" id="addObat" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Obat</h4>
            </div>
            <form action="#" id="tambah" method="post" enctype="multipart/form-data">
            <div class="modal-body"> 
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kode Obat :</label>
                        <input type="text" class="form-control" placeholder="Kode Obat" name="kode_obat"  id="kode_obat" value="<?= $kode_otomatis; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Nama Obat :</label>
                        <input type="text" class="form-control" placeholder="Nama Obat" name="nama_obat"  id="nama_obat" >
                    </div>

                    <div class="form-group">
                        <label>Kategori Obat :</label>
                        <select class="form-control" name="kategori_obat"  id="kategori_obat" >
                            <?php foreach($kategori as $pas){ ?>
                               <option value="<?php echo $pas->id_kategori;?>"><?= $pas->nama_kategori; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Modal :</label>
                        <input type="text" class="form-control" placeholder="Modal" name="modal"  id="modal" >
                    </div>

                    <div class="form-group">
                        <label>Harga jual :</label>
                        <input type="text" class="form-control" placeholder="Harga jual" name="harga_jual"  id="harga_jual" >
                    </div>

                    <div class="form-group">
                        <label>Stok :</label>
                        <input type="number" class="form-control" placeholder="Stok" name="stok"  id="stok" min=0>
                    </div>
                                        
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- view jurnal -->
<div class="modal fade" id="viewJurnal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">View</h4>
            </div>
            
            <div class="modal-body"> 
                <table class="table">
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td><span id="tgl"></span></td>
                    </tr>
                    <tr>
                        <td>Tipe</td>
                        <td>:</td>
                        <td><span id="tipe"></span></td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td><span id="deskripsi"></span></td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- tambah obat -->
<div class="modal fade" id="addDistributor" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Tambah Obat</h4>
            </div>
            <form action="#" id="tambah" method="post" enctype="multipart/form-data">
            <div class="modal-body"> 
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Kode Distributor :</label>
                        <input type="text" class="form-control" placeholder="Kode DIstributor" name="kode_distributor"  id="kode_distributor" value="<?= $kode_otomatis; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Nama Obat :</label>
                        <input type="text" class="form-control" placeholder="Nama Distributor" name="nama_distributor"  id="nama_distributor" >
                    </div>
                        

                    <div class="form-group">
                        <label>Alamat :</label>
                        <textarea class="form-control" name="alamat_distributor" id="alamat_distributor"></textarea>
                    </div>
                                        
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- history stok -->
<div class="modal fade" id="addStok" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Edit Riwayat Pemesanan Obat</h4>
            </div>
            <form action="#" id="tambah" method="post" enctype="multipart/form-data">
            <div class="modal-body"> 
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Jumlah  :</label>
                        <input type="number" min=0 class="form-control" placeholder="Jumlah" name="jumlah" id="jumlah" required>
                    </div>
                    <div class="form-group">
                        <label>Biaya :</label>
                        <input type="text" class="form-control" placeholder="Rp." name="biaya" required id="biaya"> 
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pemesanan :</label>
                        <input type="date" class="form-control date" placeholder="Ex: Tgl/Bulan/Tahun" name="tgl_pesan" id="tgl_pesan" required>
                    </div>                    
                    <div class="form-group">
                        <label>Tanggal Pengiriman :</label>
                        <input type="date" class="form-control date" placeholder="Ex: Tgl/Bulan/Tahun" name="tgl_kirim" id="tgl_kirim" required>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Diterima :</label>
                        <input type="date" class="form-control date" placeholder="Ex: Tgl/Bulan/Tahun" name="tgl_terima" id="tgl_terima" required>
                    </div>
                    <div class="form-group">
                        <label>Disrtibutor :</label>
                        <input type="text" list="distributor" class="form-control" placeholder="Kode / nama distributor " name="namadistributor"  id="namadistributor" >
                        <datalist id="distributor">
                            <?php foreach($distributor as $dis){ ?>
                                <option value="<?php echo $dis->kode_distributor." - ".$dis->nama_distributor; ?>">
                            <?php } ?>
                        </datalist>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- history stok -->
<div class="modal fade" id="addResep" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Resep</h4>
            </div>
            <form action="#" name="resepp" method="post" enctype="multipart/form-data">
            <div class="modal-body"> 
                <div class="col-sm-12">
                <table id="" class="table">
                  <thead>
                    <tr class="text-center">
                      <th>Kode obat </th>
                      <th>Nama obat</th>
                      <th>Aturan pakai</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody id="loaddatahere">
                  </tbody>
                </table>
                </div>
            </div>
            <div class="modal-footer">       
            <?php if($this->uri->segment(2)!="riwayat_resep"){?>
            Biaya Resep : &nbsp Rp.<input id="b_resep" type="text" class="form-control col-sm-3" style="margin-right: 100px;">
            <a href="#"  class="btn btn-sm btn-icon btn-pure btn-success on-default button-remove" id="konfir" data-toggle="tooltip" data-original-title="Konfirmasi"><i class="icon-check" aria-hidden="true"></i> Konfirmasi</a>
            <?php } ?>
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </form>
            </div>
        </div>
    </div>
</div>

<!-- history stok -->
<div class="modal fade" id="addPaid" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Pembayaran</h4>
            </div>
            <div class="modal-body"> 
                <div class="col-sm-12">
                <table id="" class="table">
                  <thead>
                    <tr class="text-center">
                      <th>Kode obat </th>
                      <th>Nama obat</th>
                      <th>Aturan pakai</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody id="loaddatahere">
                  </tbody>
                </table>
                </div>
            </div>
            <div class="modal-footer">
            <?php if($this->uri->segment(2)!="riwayat_resep"){?>
            <a href="#"  class="btn btn-sm btn-icon btn-pure btn-success on-default button-remove" id="konfir" data-toggle="tooltip" data-original-title="Konfirmasi"><i class="icon-check" aria-hidden="true"></i> Konfirmasi</a>
            <?php } ?>
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="close">Close</button>
            </div>
        </div>
    </div>
</div>
