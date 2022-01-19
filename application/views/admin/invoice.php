<div class="container-fliud">
    <h4>Invoice Pesanan Produk</h4>
    <table class="table-bordered table-hover table-striped">
        <tr>
            <th>ID Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pemesanan</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas pembayaran</th>
            <th>Aksi</th>
        </tr>
        <?php foreach($invoice as $inv):?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_bayar ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><div class="btn btn-sm btn-primary">Detail</div></td>
        </tr>
        <?php endforeach;?>
    </table>
</div>