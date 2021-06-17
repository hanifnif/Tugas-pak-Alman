<div class="container-fluid">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url("assets/img/slider1.jpg")?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url("assets/img/slider2.jpg")?>" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url("assets/img/slider1.jpg")?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url("assets/img/slider2.jpg")?>" alt="Second slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> -->
    
    <div class="row mt-4 ml-5">

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

        <?php foreach ($minuman as $mnm) : ?>
            <div class="card mr-3 mb-3" style="width: 15rem;">
                <img class="card-img-top" src="<?php echo base_url().'/uploads/'.$mnm->gambar ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $mnm->nama_minum ?></h5><br>
                    <span class="badge badge-success mb-1">Rp. <?php echo $mnm->harga ?></span>
                    <span href="#" class="badge badge-secondary mb-1">Minuman</span>
                    
                </div>
            </div>
        <?php endforeach; ?>

        <?php foreach ($barang as $brg) : ?>
            <div class="card mr-3 mb-3" style="width: 15rem;">
                <img class="card-img-top" src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5><br>
                    <span class="badge badge-success mb-1">Rp. <?php echo $brg->harga ?></span>
                    <span href="#" class="badge badge-secondary mb-1"><?php echo $brg->kategori ?></span>
                    <span class="badge badge-info">Stock :<?php echo $brg->stock?></span>
                    
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>