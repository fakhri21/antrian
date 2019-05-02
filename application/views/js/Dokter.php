<script>
$(document).ready(function(){
        var table = $('#konten').DataTable({
            "ajax" : "<?php echo base_url('dokter/today');?>",
            "columns" : [
                {"data" : "noantrian"},
                {"data" : "no_pasien"},
                {"data" : "nama_pasien"},
                {"data" : "tglharini"},
                {"data" : null,
                    "render":function(data){
                            if(data.statushariini == 0 ){ 
                              return '<button class="btn btn-sm btn-icon btn-pure btn-secondary on-default button-remove">Belum Selesai</button>';
                            } else if(data.statushariini == 1){
                              return '<button class="btn btn-sm btn-icon btn-pure btn-warning on-default button-remove">Tebus Resep</button>';
                            } else if(data.statushariini == 2){
                              return '<button class="btn btn-sm btn-icon btn-pure btn-primary on-default button-remove">Kasir</button>';
                            } else { 
                              return '<button class="btn btn-sm btn-icon btn-pure btn-success on-default button-remove">Selesai</button>';
                            }
                    }
                },
                {"data" : null,
                    "render" : function(data){
                        return '<a onclick="" class="btn btn-sm btn-icon btn-pure btn-primary on-default button-remove" data-toggle="tooltip" data-original-title="Lihat Riwayat" href="dokter/all_history/'+data.no_pasien+'" ><i class="icon-eye" aria-hidden="true"></i></a> <a href="dokter/periksa_pasien/'+data.id_pasien+'/'+data.noantrian+'/'+data.tglharini+'" onclick="" class="btn btn-sm btn-icon btn-pure btn-success on-default button-remove" data-toggle="tooltip" data-original-title="Periksa"><i class="icon-pencil" aria-hidden="true"></i></a>';
                    }
                }

            ]
        });
        
        setInterval(function() {
            table.ajax.reload(false,null);
        }, 2000);

        $('#dokter_riwayat').dataTable();
    });
</script>