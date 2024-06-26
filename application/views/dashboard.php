<div class="container-fluid">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('assets/img/slider1.jpg');?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php echo base_url('assets/img/slider2.jpg');?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="row  text-center mt-3">
        <?php foreach ($barang as $brg) : ?>
            <div class="card ml-3" style="width: 18rem;">
                <img src="<?php echo base_url() . '/uploads/' . $brg->gambar; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg; ?></h5>
                    <small><?php echo $brg->nama_brg; ?></small><br>
                    <span class="badge badge-success mb-3">Rp.<?php echo $brg->harga; ?></span>
                    <a href="#" class="btn btn-primary mb-1">Tambahkan keranjang </a>
                    <a href="#" class="btn btn-success">Detail</a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>