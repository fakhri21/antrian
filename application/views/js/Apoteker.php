<script>
$(document).ready(function(){
        var table = $('#konten').DataTable({
            "ajax" : "<?php echo base_url('apoteker/today');?>",
            "columns" : [
                {"data" : "noantrian"},
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
                        return "<a onclick=edt('"+data.no_pemeriksaan+"') class='btn btn-sm btn-icon btn-pure btn-primary on-default button-remove' data-toggle='toolti' data-original-title='Resep' href='#'><i class='icon-eye' aria-hidden='true'></i> Resep</a> <a href='#' onclick=konf('"+data.no_pemeriksaan+"'); class='btn btn-sm btn-icon btn-pure btn-success on-default button-remove' data-toggle='tooltip' data-original-title='Edit Data'><i class='icon-check' aria-hidden='true'></i> Konfirmasi</a>";
                    }
                }

            ]
        });

        setInterval(function() {
            table.ajax.reload(false,null);
        }, 10000);
        
    });

    function konf(id){
                swal({
        title: "Lakukan Konfirmasi ?",
        text: "",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#dc3545",
        confirmButtonText: "Yes, Confirmation!",
        cancelButtonText: "No, Not Now !",
        closeOnConfirm: false,
        closeOnCancel: false
    }, function (isConfirm) {
        if (isConfirm) {
            var b_res = document.resepp.b_resep.value;
             window.location.href="apoteker/konfirmasi_resep/"+id+"/"+b_res;            
        } else {
            swal("Cancelled", "", "error");
        }
    });
    }
    
    function edt(id){
        $.ajax({
              url : "<?php echo base_url('apoteker/ambilresep'); ?>",
            type: "POST",
            dataType: "JSON",
            data: {
                id : id
            },
            success : function(data){
                    $("#addResep").modal("show");
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