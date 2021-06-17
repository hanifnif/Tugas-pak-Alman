<div class="container-fluid ml-5">
    
    <div class="row">

        <?php foreach ($makanan as $mkn) : ?>

            <div class="card mr-3 mb-3" style="width: 15rem;">
                <img class="card-img-top" src="<?php echo base_url().'/uploads/'.$mkn->gambar ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $mkn->nama_mkn ?></h5><br>
                    <span class="badge badge-success mb-1">Rp. <?php echo $mkn->harga ?></span>
                    <span href="#" class="badge badge-secondary mb-1">Makanan</span>
                    
                </div>
            </div> 
        <?php endforeach; ?>
    </div>
</div>