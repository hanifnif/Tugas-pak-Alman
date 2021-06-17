<div class="container-fluid ml-5">
    
    <div class="row">
        <?php foreach ($minuman as $mnm) : ?>
            <div class="card mr-3 mb-3" style="width: 15rem;">
                <img class="card-img-top" src="<?php echo base_url().'/uploads/'.$mnm->gambar ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $mnm->nama_minum ?></h5><br>
                    <span class="badge badge-success mb-1">Rp. <?php echo $mnm->harga ?></span>
                    <span href="#" class="badge badge-secondary mb-1">Makanan</span>
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>