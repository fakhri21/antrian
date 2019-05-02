<!------------- popup message ------------------------->
<script type="text/javascript">
<?php if($this->session->flashdata('success')){?>
    $(document).ready(function(){
        swal({
            title: 'Success!',
            text: '<?php echo $this->session->flashdata('success'); ?>',
            type: 'success',
            confirmButtonClass: "btn btn-success",
            buttonsStyling: false
            })
    });
<?php }elseif($this->session->flashdata('fail')){?>
    $(document).ready(function(){
        swal({
            title: 'Fail!',
            text: '<?php echo $this->session->flashdata('success'); ?>',
            type: 'error',
            confirmButtonClass: "btn btn-success",
            buttonsStyling: false
            })
    });
<?php } elseif($this->session->flashdata('item')){?>
    $(document).ready(function(){
        swal({
            title: 'Success!',
            text: '<?php echo $this->session->flashdata('item'); ?>',
            type: 'success',
            confirmButtonClass: "btn btn-success",
            buttonsStyling: false
            })
    });
<?php } ?>
</script>
