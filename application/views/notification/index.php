<?php require_once(APPPATH."views/component/formpopup.php"); ?>
<div id="main-content">
        <div class="container-fluid">
            <?php require_once(APPPATH."views/component/breadcum.php"); ?>
            <div class="row clearfix">
            
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                <?php echo form_open('apoteker/jurnal_obat'); ?>
                    <div class="body">
                        <div class="row clearfix">
                                        
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <input type="date" id="filter" name="filter" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <button type="submit"  class="btn btn-primary" style="width:100%;">Filter</button>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <?php echo form_close(); ?>    
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
                                    <table class="table  table-hover js-basic-example dataTable table-custom">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>No</th>
                                                <th>Tanggal</th>
                                                <th>Notifikasi</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
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
    <script>
        function view(id){
            $.ajax({
              url : "<?php echo base_url('apoteker/view_jurnal'); ?>",
            type: "POST",
            dataType: "JSON",
            data: {
                id : id
            },
            success : function(data){
                $("#viewJurnal").modal("show");
                $("#tgl").text(data.tgl);
                $("#tipe").text(data.jenis);
                $("#deskripsi").html(data.deskripsi);
            },
            error : function(jqXHR, textStatus, errorThrown){
              swal({
                    title: 'Gagal!',
                    text: 'Gagal mengambil data.',
                    type: 'error',
                    confirmButtonClass: "btn btn-danger",
                    buttonsStyling: false
                }).catch(swal.noop)
            }
          });
        }
    </script>