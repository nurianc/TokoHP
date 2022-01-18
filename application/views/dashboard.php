<div class="container-fluid">
    <div class="row text-center">

        <?php foreach($barang as $brg) :?>

            <div class="card" style="width: 18rem;">
  <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
    <small><?php echo $brg->keterangan ?></small><br>
    <span class="badge badge-pill badge-success mb-2">Rp.<?php echo $brg->harga ?></span><br>
    <a href="#" class="btn btn-sm btn-primary">Tambah Ke Keranjang</a>
    <a href="#" class="btn btn-sm btn-success">Detail</a>
  </div>
</div>

         <?php endforeach; ?>  

    </div>
</div>