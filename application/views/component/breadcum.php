<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-8 col-sm-12">
            <h2><?php echo strtoupper($this->uri->segment(1)); ?></h2>
                <ul class="breadcrumb" style="text-transform:capitalize;">
                    <li class="breadcrumb-item"><i class="icon-home"></i> &nbsp; <?= $this->uri->segment(1); ?></li>                            
                    <li class="breadcrumb-item active" ><?= $title; ?></li>
                </ul>
        </div>
        <div class="col-lg-6 col-md-4 col-sm-12 text-right">
                        <div class="bh_chart hidden-xs">
                            <div class="float-left m-r-15">
                                <small>Total Pasien</small>
                                <h6 class="mb-0 mt-1"><i class="icon-user"></i> <?php echo number_format($numpasien); ?></h6>
                            </div>
                            
                        </div>
                        <div class="bh_chart hidden-sm">
                            <div class="float-left m-r-15">
                                <small>Total Pemeriksaan</small>
                                <h6 class="mb-0 mt-1"><i class="icon-globe"></i>  <?php echo number_format($numpemeriksaan); ?></h6>
                            </div>
                            
                        </div>
                    </div>            
    </div>
</div>