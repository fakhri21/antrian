<script type="text/javascript">
    //riwayat antrian
    $(document).ready(function(){
            new Morris.Line({
          // ID of the element in which to draw the chart.
          element: 'm_line_chart',
          // Chart data records -- each entry in this array corresponds to a point on
          // the chart.
          data: [
            { year: '2008', value: 20 },
            { year: '2009', value: 10 },
            { year: '2010', value: 5 },
            { year: '2011', value: 5 },
            { year: '2012', value: 20 }
          ],
          // The name of the data record attribute that contains x-values.
          xkey: 'year',
          // A list of names of data record attributes that contain y-values.
          ykeys: ['value'],
          // Labels for the ykeys -- will be displayed when you hover over the
          // chart.
          labels: ['Value']
        });
    });
    
    $(document).ready(function(){
          $("#addPegawai form").submit(function(e){
            e.preventDefault();
            var atribut = $(this).attr("id");
            if(atribut == "tambah"){
              tambah();
            }
            else if(atribut == "update"){
              var id = $(this).data("id");
              update(id);
            }
          });

          $("#addKategori form").submit(function(e){
            e.preventDefault();
            var atribut = $(this).attr("id");
            if(atribut == "tambah"){
              tambah();
            }
            else if(atribut == "update"){
              var id = $(this).data("id");
              update(id);
            }
          });

          $("#addStok form").submit(function(e){
            e.preventDefault();
            var atribut = $(this).attr("id");
            if(atribut == "tambah"){
              tambah();
            }
            else if(atribut == "update"){
              var id = $(this).data("id");
              update(id);
            }
          });

          $("#addDistributor form").submit(function(e){
            e.preventDefault();
            var atribut = $(this).attr("id");
            if(atribut == "tambah"){
              tambah();
            }
            else if(atribut == "update"){
              var id = $(this).data("id");
              update(id);
            }
          });

          $("#addObat form").submit(function(e){
            e.preventDefault();
            var atribut = $(this).attr("id");
            if(atribut == "tambah"){
              tambah();
            }
            else if(atribut == "update"){
              var id = $(this).data("id");
              update(id);
            }
          });
        
        $("#addPemeriksaan form").submit(function(e){
            e.preventDefault();
            var atribut = $(this).attr("id");
            if(atribut == "tambah"){
              tambah();
            }
            else if(atribut == "update"){
              var id = $(this).data("id");
              update(id);
            }
          });
        });

        $(document).ready(function() {
        $('#buttonModal').click(function() {
            $('html').css('overflow', 'hidden');
            $('body').bind('touchmove', function(e) {
                e.preventDefault()
            });
        });
        $('.btn-close').click(function() {
            $('html').css('overflow', 'scroll');
            $('body').unbind('touchmove');
        });
      $("#phone_no").inputmask({"mask": "(+62)8##-####-####"});
    });

    var btnaddselect = $('#btnselect');
      var btnDelete;
      var loopID = 1;
      btnaddselect.on('click', function(){
        //console.log("ok");
      loopID++;
      var headHtml = $('#employees');
      var html = `
      <div class="employees`+loopID+`">

        <div class="row mt-2">
        <div class="col-md-3" >
                            <label> Nama / kode obat </label>
                            <input type="text" list="obat" class="form-control" placeholder="Kode / nama obat " name="namaobat[]"  id="namaobat" >
                            <input type="hidden" name="no_pemeriksaan" value="<?= $this->uri->segment(3); ?>" id="no_pemeriksaan">
                            <input type="hidden" name="no_pasien" value="<?= $this->uri->segment(4); ?>" id="no_pasien">
                            <datalist id="obat">
                                <?php foreach($obat as $obt){ ?>
                                    <option value="<?php echo $obt->kode_obat." - ".$obt->nama_obat; ?>">
                                <?php } ?>
                            </datalist>
                            </div>

                            <div class="col-md-3" >
                            <label> Keterangan </label>
                            <input type="text" class="form-control" placeholder="Cth : 1 papan " name="keterangan[]"  id="keterangan" >
                            </div>

                            <div class="col-md-3">
                            <label> Aturan pakai ( Cth : 1 x sehari) </label>
                            <input type="number" min=1 class="form-control"  name="pakai[]"  id="pakai" >
                            </div>

          <div class="col-md-3" style="padding-top:30px;">
            <button type="button"  class="btn btn-danger btn-just-icon add btn-sm btnDelete" data="employees`+loopID+`"><i class="icon-close"></i> Hapus</button>
          </div>
          
        </div>
      </div>
      `;
      headHtml.append(html);
      btnDelete = $('.btnDelete')
      btnDelete.click(function(){
        var id_div = $(this).attr('data');
        console.log(id_div);
        $('.'+id_div).remove();
      });
    

    
});

"use strict";
$('#calendar').fullCalendar({
    header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
    },
    defaultDate: '2018-07-12',
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    drop: function() {
        // is the "remove after drop" checkbox checked?
        if ($('#drop-remove').is(':checked')) {
            // if so, remove the element from the "Draggable Events" list
            $(this).remove();
        }
    },
    eventLimit: true, // allow "more" link when too many events
    events: [
        {
            title: 'All Day Event',
            start: '2018-07-01',
            className: 'bg-info',
            
        },
        {
            title: 'Long Event',
            start: '2018-07-07',
            end: '2018-07-10',
            className: 'bg-danger'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2018-08-09T16:00:00',
            className: 'bg-dark'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2018-06-16T16:00:00',
            className: 'bg-success'
        },
        {
            title: 'Conference',
            start: '2018-08-11',
            end: '2018-08-14',
            className: 'bg-primary'
        },
        {
            title: 'Meeting',
            start: '2018-08-12T10:30:00',
            end: '2018-08-12 T12:30:00',
            className: 'bg-warning'
        },
        {
            title: 'Lunch',
            start: '2018-08-12T12:00:00',
            className: 'bg-dark'
        },
        {
            title: 'Meeting',
            start: '2018-08-12T14:30:00',
            className: 'bg-secondary'
        },
        {
            title: 'Happy Hour',
            start: '2018-07-12T17:30:00',
            className: 'bg-dark'
        },
        {
            title: 'Dinner',
            start: '2018-06-12T20:00:00',
            className: 'bg-warning'
        },
        {
            title: 'Birthday Party',
            start: '2018-08-13T07:00:00',
            className: 'bg-success'
        },
        {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2018-08-28',
            className: 'bg-primary'
        }
    ]
});

$(document).ready(function(){
  //if(responsiveVoice.voiceSupport()) {
    //responsiveVoice.speak("hello world");
    //}
    /*$("body").load(function() {
      alert( "Load was performed." );
      //if(responsiveVoice.voiceSupport()) {
        //responsiveVoice.speak("hello world");
      //}
    });*/

    $('#datas').dataTable();
});

/*$(document).ready(function(){
    setInterval(function() {
        $("body").load("body");    
    }, 2000);
    */
</script>