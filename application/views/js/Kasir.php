<script>

$(document).ready(function(){
        var table = $('#konten').DataTable({
            "ajax" : "<?php echo base_url('kasir/today');?>",
            "columns" : [
                {"data" : "noantrian"},
                {"data" : "nama_pasien"},
                {"data" : "tglharini"},
                {
                  "data" : null,
                  "render" : function(data){
                    
                    return 'Rp.'+data.biaya_pemeriksaan+'' ;
                  }
                },
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
                        return '<a class="btn btn-sm btn-icon btn-pure btn-primary on-default button-remove" data-toggle="tooltip" data-original-title="Bayar" href="kasir/rincian/'+data.no_pemeriksaan+'" ><i class="icon-check" aria-hidden="true"></i>Bayar</a>';
                    }
                }

            ]
        });
        setInterval(function() {
            table.ajax.reload(false,null);
        }, 10000);
        
    });

        function paid(id){
        $.ajax({
              url : "<?php echo base_url('apoteker/ambilresep'); ?>",
            type: "POST",
            dataType: "JSON",
            data: {
                id : id
            },
            success : function(data){
                    $("#addPaid").modal("show");
                    var html = '';
                   var i;
                   for(i=0; i<data.length; i++){
                       html += '<tr class="text-center">'+
                               '<td style="text-align:left;">'+data[i].kode_obat+'</td>'+
                               '<td>'+data[i].nama_obat+'</td>'+
                               '<td>'+data[i].aturan_minum+'X sehari</td>'+
                               '<td>'+data[i].keterangan+'</td>'+                               
                               '</tr>';
                   }
                   $('#loaddatahere').html(html);
                   $("#konfir").attr('onclick',"konf('"+id+"')");
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