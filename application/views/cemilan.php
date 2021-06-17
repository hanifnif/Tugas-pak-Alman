<div class="container-fluid ml-5">
    
    <div class="row">
        <?php foreach ($barang as $brg) : ?>
            <div class="card mr-3 mb-3" style="width: 15rem;">
                <img class="card-img-top" src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5><br>
                    <span class="badge badge-success mb-1">Rp. <?php echo $brg->harga ?></span>
                    <span href="#" class="badge badge-secondary mb-1"><?php echo $brg->kategori?></span>
                    <span class="badge badge-info">Stock :<?php echo $brg->stock?></span>
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>