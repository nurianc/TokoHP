<div class="container-fluid">

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="btn btn-sm btn-success">
            <?php 
            $grand_total=0;
            if($keranjang = $this->cart->contents())
            {
                foreach($keranjang as $item)
                {
                    $grand_total = $grand_total + $item['subtotal'];
                }
                echo"total Belanja Anda: Rp." .number_format($grand_total,00,',','.');
            
            ?>
        </div><br><br>
        <h3>Input Alamat Pengiriman dan Pembayaran</h3>
        <form method="post" action="<?php echo base_url('index.php/dashboard/proses_pesanan/')?>">
    
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" placeholder="Nama Lengkap anda" class="form-control">
        </div>
        <div class="form-group">
            <label>Alamat Lengkap</label>
            <input type="text" name="alamat" placeholder="Alamat Lengkap anda" class="form-control">
        </div>
        <div class="form-group">
            <label>No. Telepon</label>
            <input type="text" name="no_telp" placeholder="Nomor Telepon anda" class="form-control">
        </div>
        <div class="form-group">
            <label>Jasa Pengiriman</label>
            <select class="form-control">
                <option>JNE</option>
                <option>J&T</option>
                <option>Tiki</option>
                <option>Pos Indonesia</option>
            </select>
        </div>
        <div class="form-group">
            <label>Pilih BANK</label>
            <select class="form-control">
                <option>BCA-7391123776</option>
                <option>BRI-xxxxxxx</option>
                <option>Mandiri-xxxxxxx</option>
            </select>
        </div>
        <button type="submit" class="btn btn-sm btn-success">Pesan</button>
    </form>
    <?php
    }else{
        echo "keranjang Belanja Anda Masih Kosong";
    }?>
    </div>
    <div class="col-md-2"></div>
</div>

</div>